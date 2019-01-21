<?php
/**
 * Created by PhpStorm.
 * User: macos
 * Date: 10/17/18
 * Time: 23:44
 */

namespace App\Repositories;

use App\Models\Nested;
use Illuminate\Support\Facades\DB;

class NestedRepository
{
    protected $_table = '';

    protected $_model = null;

    public function __construct(array $attributes = [])
    {
        $attributes['model'] = (!isset($attributes['model']) || empty($attributes['model'])) ? 'CategoryProduct' : $attributes['model'];
        $attributes['table'] = (!isset($attributes['table']) || empty($attributes['table'])) ? 'categories_product' : $attributes['table'];

        $model = "App\Models\\" . ucfirst($attributes['model']);
        $this->_model = new $model;
        $this->_table = $attributes['table'];
    }

    public function findById($model, $id)
    {
        return $model::find($id);
    }

    public function createRows($model, $data)
    {
        return $model::create($data);
    }

    public function getNodeInfo($params, $options = null)
    {
        if ($options == null) {
            return DB::table($this->_table)
                    ->where('left', '>', 0)
                    ->where('id', '=', $params->id)
                    ->first();
        }

        if ($options['task'] == 'move-up') {
            return DB::table($this->_table)
                    ->where('right', '<', $params->left)
                    ->where('id', '<>', $params->id)
                    ->where('parent', '=', $params->parent)
                    ->orderBy('left', 'DESC')
                    ->first();
        }

        if ($options['task'] == 'move-down') {
            return DB::table($this->_table)
                    ->where('left', '>', $params->right)
                    ->where('id', '<>', $params->id)
                    ->where('parent', '=', $params->parent)
                    ->orderBy('left', 'ASC')
                    ->first();
        }
    }


    /**
     * @param $data
     * @param $nodeID
     * @param $options
     * @return bool
     */
    public function insertNode($data, $nodeID, $options)
    {
        $nodeInfo = $this->findById($this->_model, $nodeID);
        if (!$nodeInfo)
            return false;
        switch ($options['position']) {
            case 'left':
                $updateLeft = DB::table($this->_table)->where('left', '>', $nodeInfo['left'])->get();
                $updateRight = DB::table($this->_table)->where('right', '>', $nodeInfo['left']);
                $data['parent'] = $nodeInfo->id;
                $data['level'] = $nodeInfo->level + 1;
                $data['left'] = $nodeInfo->left + 1;
                $data['right'] = $nodeInfo->left + 2;
                break;
            case 'before':
                $updateLeft = DB::table($this->_table)->where('left', '>=', $nodeInfo['left'])->get();
                $updateRight = DB::table($this->_table)->where('right', '>', $nodeInfo['left'])->get();
                $data['parent'] = $nodeInfo->parent;
                $data['level'] = $nodeInfo->level;
                $data['left'] = $nodeInfo->left;
                $data['right'] = $nodeInfo->left + 1;
                break;
            case 'after':
                $updateLeft = DB::table($this->_table)->where('left', '>=', $nodeInfo['right'])->get();
                $updateRight = DB::table($this->_table)->where('right', '>', $nodeInfo['right'])->get();
                $data['parent'] = $nodeInfo->parent;
                $data['level'] = $nodeInfo->level;
                $data['left'] = $nodeInfo->right + 1;
                $data['right'] = $nodeInfo->right + 2;
                break;
            case 'right':
            default:
                $updateLeft = DB::table($this->_table)->where('left', '>', $nodeInfo['right'])->get();
                $updateRight = DB::table($this->_table)->where('right', '>=', $nodeInfo['right'])->get();
                $data['parent'] = $nodeInfo->id;
                $data['level'] = $nodeInfo->level + 1;
                $data['left'] = $nodeInfo->right;
                $data['right'] = $nodeInfo->right + 1;
                break;
        }

        if (!empty($updateLeft)) {
            foreach ($updateLeft as $left) {
                DB::table($this->_table)->where('id', $left->id)->update(['left' => $left->left + 2]);
            }
        }

        if (!empty($updateRight)) {
            foreach ($updateRight as $right) {
                DB::table($this->_table)->where('id', $right->id)->update(['right' => $right->right + 2]);
            }
        }

        $this->createRows($this->_model, $data);
        return true;
    }

    /**
     * @param $nodeMoveID
     * @param $nodeSelectionID
     */
    public function moveRight($nodeMoveID, $nodeSelectionID)
    {
        // ========================= Detach branch =========================
        $totalNode = $this->detachBranch($nodeMoveID);

        $nodeSelectionInfo = $this->findById($this->_model, $nodeSelectionID);
        $nodeMoveInfo = $this->findById($this->_model, $nodeMoveID);

        // ========================= Node on tree (LEFT) =========================
        $updateLeft = DB::table($this->_table)
            ->where('left', '>', $nodeSelectionInfo->right)
            ->where('right', '>', 0)
            ->get();
        if (!empty($updateLeft)) {
            foreach ($updateLeft as $node) {
                $leftNew = $node->left + ($totalNode * 2);
                DB::table($this->_table)
                    ->where('id', $node->id)
                    ->update([
                        'left' => $leftNew
                    ]);
            }
        }

        // ========================= Node on tree (RIGHT) =========================
        $updateRight = DB::table($this->_table)
            ->where('right', '>=', $nodeSelectionInfo->right)
            ->get();
        if (!empty($updateRight)) {
            foreach ($updateRight as $node) {
                $rightNew = $node->right + ($totalNode * 2);
                DB::table($this->_table)
                    ->where('id', $node->id)
                    ->update([
                        'right' => $rightNew
                    ]);
            }
        }

        // ========================= Node on branch (LEVEL) =========================
        $updateLevel = DB::table($this->_table)
            ->where('right', '<=', 0)
            ->get();
        if (!empty($updateLevel)) {
            foreach ($updateLevel as $node) {
                // ========================= Node on branch (LEVEL) =========================
                $level = $node->level + $nodeSelectionInfo->level - $nodeMoveInfo->level + 1;
                // ========================= Node on branch (LEFT) ==========================
                $left = $node->left + $nodeSelectionInfo->right;
                // ========================= Node on branch (RIGHT) =========================
                $right = $node->right + $nodeSelectionInfo->right + $totalNode * 2 - 1;

                DB::table($this->_table)
                    ->where('id', $node->id)
                    ->update([
                        'level' => $level,
                        'left' => $left,
                        'right' => $right
                    ]);
            }
        }

        // ========================= Node move (PARENT) =========================
        DB::table($this->_table)
            ->where('id', $nodeMoveInfo->id)
            ->update([
                'parent' => $nodeSelectionInfo->id
            ]);
    }

    public function moveBefore($nodeMoveID, $nodeSelectionID)
    {

        $totalNode = $this->detachBranch($nodeMoveID);

        $nodeSelectionInfo = $this->findById($this->_model, $nodeSelectionID);
        $nodeMoveInfo = $this->findById($this->_model, $nodeMoveID);
        // ========================= Node on tree (LEFT) ========================
        $updateLeft = DB::table($this->_table)
            ->where('left', '>=', $nodeSelectionInfo->left)
            ->where('right', '>', 0)
            ->get();
        if (!empty($updateLeft)) {
            foreach ($updateLeft as $node) {
                $leftNew = $node->left + ($totalNode * 2);
                DB::table($this->_table)
                    ->where('id', $node->id)
                    ->update([
                        'left' => $leftNew
                    ]);
            }
        }

        // ========================= Node on tree (RIGHT) =========================
        $updateRight = DB::table($this->_table)
            ->where('right', '>', $nodeSelectionInfo->left)
            ->get();
        if (!empty($updateRight)) {
            foreach ($updateRight as $node) {
                $rightNew = $node->right + ($totalNode * 2);
                DB::table($this->_table)
                    ->where('id', $node->id)
                    ->update([
                        'right' => $rightNew
                    ]);
            }
        }
        // ========================= Node on branch (LEVEL) =========================
        $updateLevel = DB::table($this->_table)
            ->where('right', '<=', 0)
            ->get();
        if (!empty($updateLevel)) {
            foreach ($updateLevel as $node) {
                // ========================= Node on branch (LEVEL) =========================
                $level = $node->level + $nodeSelectionInfo->level - $nodeMoveInfo->level;
                // ========================= Node on branch (LEFT) ==========================
                $left = $node->left + $nodeSelectionInfo->left;
                // ========================= Node on branch (RIGHT) =========================
                $right = $node->right + $nodeSelectionInfo->left + $totalNode * 2 - 1;

                DB::table($this->_table)
                    ->where('id', $node->id)
                    ->update([
                        'level' => $level,
                        'left' => $left,
                        'right' => $right
                    ]);
            }
        }

        // ========================= Node move (PARENT) =========================
        DB::table($this->_table)
            ->where('id', $nodeMoveInfo->id)
            ->update([
                'parent' => $nodeSelectionInfo->parent
            ]);
    }

    public function moveAfter($nodeMoveID, $nodeSelectionID)
    {

        $totalNode = $this->detachBranch($nodeMoveID);

        $nodeSelectionInfo = $this->findById($this->_model, $nodeSelectionID);
        $nodeMoveInfo = $this->findById($this->_model, $nodeMoveID);
        // ========================= Node on tree (LEFT) ========================
        $updateLeft = DB::table($this->_table)
            ->where('left', '>', $nodeSelectionInfo->right)
            ->where('right', '>', 0)
            ->get();
        if (!empty($updateLeft)) {
            foreach ($updateLeft as $node) {
                $leftNew = $node->left + ($totalNode * 2);
                DB::table($this->_table)
                    ->where('id', $node->id)
                    ->update([
                        'left' => $leftNew
                    ]);
            }
        }

        // ========================= Node on tree (RIGHT) =========================
        $updateRight = DB::table($this->_table)
            ->where('right', '>', $nodeSelectionInfo->right)
            ->get();
        if (!empty($updateRight)) {
            foreach ($updateRight as $node) {
                $rightNew = $node->right + ($totalNode * 2);
                DB::table($this->_table)
                    ->where('id', $node->id)
                    ->update([
                        'right' => $rightNew
                    ]);
            }
        }
        // ========================= Node on branch (LEVEL) =========================
        $updateLevel = DB::table($this->_table)
            ->where('right', '<=', 0)
            ->get();
        if (!empty($updateLevel)) {
            foreach ($updateLevel as $node) {
                // ========================= Node on branch (LEVEL) =========================
                $level = $node->level + $nodeSelectionInfo->level - $nodeMoveInfo->level;
                // ========================= Node on branch (LEFT) ==========================
                $left = $node->left + $nodeSelectionInfo->right + 1;
                // ========================= Node on branch (RIGHT) =========================
                $right = $node->right + $nodeSelectionInfo->right + $totalNode * 2;


                DB::table($this->_table)
                    ->where('id', $node->id)
                    ->update([
                        'level' => $level,
                        'left' => $left,
                        'right' => $right
                    ]);
            }
        }

        // ========================= Node move (PARENT) =========================
        DB::table($this->_table)
            ->where('id', $nodeMoveInfo->id)
            ->update([
                'parent' => $nodeSelectionInfo->parent
            ]);
    }


    public function moveUp($nodeID, $options = null)
    {
        $nodeInfo = $this->findById($this->_model, $nodeID);
        $nodeSelection = $this->getNodeInfo($nodeInfo, array('task' => 'move-up'));
        if (!empty($nodeSelection)) $this->moveBefore($nodeID, $nodeSelection->id);
    }

    public function moveDown($nodeID, $options = null)
    {
        $nodeInfo = $this->findById($this->_model, $nodeID);
        $nodeSelection = $this->getNodeInfo($nodeInfo, array('task' => 'move-down'));
        if (!empty($nodeSelection)) $this->moveAfter($nodeID, $nodeSelection->id);
    }


    /**
     * @param $nodeMoveID
     * @param null $options
     * @return float
     */
    public function detachBranch($nodeMoveID, $options = null)
    {
        $moveInfo = $this->findById($this->_model, $nodeMoveID);
        $moveLeft = $moveInfo->left;
        $moveRight = $moveInfo->right;
        $totalNode = ($moveRight - $moveLeft + 1) / 2;

        // ================================== Node on branch ==================================
        if ($options == null) {
            $updateNode = DB::table($this->_table)
                ->whereBetween('left', [$moveInfo->left, $moveInfo->right])
                ->get();
            if (!empty($updateNode)) {
                foreach ($updateNode as $node) {
                    $leftNew = ($node->left - $moveLeft);
                    $rightNew = ($node->right - $moveRight);
                    DB::table($this->_table)
                        ->where('id', $node->id)
                        ->update([
                            'left' => $leftNew,
                            'right' => $rightNew
                        ]);
                }
            }
        }

        if ($options['task'] == 'remove-node') {
            DB::table($this->_table)
                ->whereBetween('left', [(int)$moveInfo->left, (int)$moveInfo->right])
                ->delete();
        }
        // ================================== Node on tree (LEFT) ==================================
        $updateNode = DB::table($this->_table)
            ->where('left', '>', $moveRight)
            ->get();
        if (!empty($updateNode)) {
            foreach ($updateNode as $node) {
                $leftNew = $node->left - ($totalNode * 2);
                DB::table($this->_table)
                    ->where('id', $node->id)
                    ->update([
                        'left' => $leftNew
                    ]);
            }
        }

        // ================================== Node on tree (RIGHT) ==================================
        $updateNode = DB::table($this->_table)
            ->where('right', '>', $moveRight)
            ->get();
        if (!empty($updateNode)) {
            foreach ($updateNode as $node) {
                $rightNew = $node->right - ($totalNode * 2);
                DB::table($this->_table)
                    ->where('id', $node->id)
                    ->update([
                        'right' => $rightNew
                    ]);
            }
        }

        return $totalNode;
    }

    public function removeNode($nodeID, $options)
    {
        switch ($options['type']) {
            case 'only':
                $this->removeNodeOnly($nodeID);
                break;
            case 'branch':
            default:
                $this->removeBranch($nodeID);
                break;
        }

    }

    public function removeBranch($nodeID)
    {
        $this->detachBranch($nodeID, array('task' => 'remove-node'));
    }

    public function removeNodeOnly($nodeID)
    {
        $nodeInfo = $this->findById($this->_model, $nodeID);
        $nodes = $this->getListChilds($nodeInfo);

        if (!empty($nodes)) {
            foreach ($nodes as $node) {
                $this->moveRight($node->id, $nodeInfo->parent);
            }
        }

        $this->removeBranch($nodeID);
    }

    public function getListChilds($nodeInfo)
    {
        return DB::table($this->_table)
            ->where('parent', '=', $nodeInfo->id)
            ->orderBy('left', 'asc')
            ->get();
    }

    public function moveItem($arrParams = null, $options = null)
    {
        if ($options == null) {
            if ($arrParams->id > 0) {
                if ($arrParams->type == 'up') $this->moveUp($arrParams->id);
                if ($arrParams->type == 'down') $this->moveDown($arrParams->id);
                return true;
            }
        }
        return false;
    }

}