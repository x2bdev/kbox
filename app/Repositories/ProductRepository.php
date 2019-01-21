<?php
/**
 * Created by PhpStorm.
 * User: macos
 * Date: 10/10/18
 * Time: 10:42
 */

namespace App\Repositories;

use App\Models\Product;
use App\Repositories\InterfaceRepository\ProductRepositoryInterface;

class ProductRepository extends EloquentRepository implements ProductRepositoryInterface
{

    public function getProduct($params)
    {
        $model = $this->_model->where('id', '>', 0);

        if ($params['q'] != '') {
            $model->where('name', 'like', '%' . $params['q'] . '%');
        }

        if ($params['category_product_id'] != '') {
            $model->where('category_product_id', '=', $params['category_product_id']);
        }

        if (isset($params['status']) && $params['status'] != 'all') {
            $model->where('status', $params['status']);
        }

        return $model->skip($params['offset'])
            ->take($params['limit'])
            ->get();
    }

    public function getProductNeedConfirm($params)
    {
        $model = $this->_model->where('id', '>', 0);

        if ($params['q'] != '') {
            $model->where('name', 'like', '%' . $params['q'] . '%');
        }

        if ($params['category_product_id'] != '') {
            $model->where('category_product_id', '=', $params['category_product_id']);
        }

        if ($params['confirm_action'] !== 'all') {
            $model->where('confirm_action', $params['confirm_action']);
        }

        return $model->skip($params['offset'])
            ->withoutGlobalScope('confirm')
            ->where('confirm_action', "<>", NULL)
            ->take($params['limit'])
            ->get();
    }

    public function getProductConfirm($id)
    {
        return $this->_model->withoutGlobalScope('confirm')->where('id', $id)->first();
    }

    public function getAllProductConfirm()
    {
        return $this->_model->withoutGlobalScope('confirm')->where('confirm_action', "<>", NULL)->get();
    }

    public function getInfoBasic()
    {
        return $this->_model->getInfo();
    }

    public function getModel()
    {
        return Product::class;
    }

    public function incrementView($id)
    {
        return $this->_model->where('id', $id)->increment('view', 1);
    }

    public function getProductViewHighestOnSite()
    {
        return $this->_model
            ->withoutGlobalScope('confirm')
            ->join('categories_product', 'products.category_product_id', '=', 'categories_product.id')
            ->where('categories_product.status', "active")
            ->where('products.status', "active")
            ->where('products.confirm_action', null)
            ->select(['products.*'])
            ->orderBy('products.view', 'desc')
            ->paginate(8);
    }

    public function getProductNewOnSite()
    {
        return $this->_model
            ->withoutGlobalScope('confirm')
            ->join('categories_product', 'products.category_product_id', '=', 'categories_product.id')
            ->where('categories_product.status', "active")
            ->where('products.status', "active")
            ->where('products.confirm_action', null)
            ->select(['products.*'])
            ->orderBy('products.created_at', 'desc')
            ->paginate(8);
    }

    public function getProductRelatedOnSite($category_id)
    {
        return $this->_model
            ->withoutGlobalScope('confirm')
            ->join('categories_product', 'products.category_product_id', '=', 'categories_product.id')
            ->where('categories_product.status', "active")
            ->where('products.status', "active")
            ->select(['products.*'])
            ->orderBy('products.created_at', 'desc')
            ->where('products.confirm_action', null)
            ->where('products.category_product_id', $category_id)
            ->paginate(8);
    }

    public function getProductByIdOnSite($id)
    {
        return $this->_model
            ->withoutGlobalScope('confirm')
            ->join('categories_product', 'products.category_product_id', '=', 'categories_product.id')
            ->where('categories_product.status', "active")
            ->where('products.status', "active")
            ->where('products.confirm_action', null)
            ->select(['products.*'])
            ->where('products.id', $id)
            ->first();
    }

    public function getProductByListIdOnSite($listId)
    {
        return $this->_model
            ->withoutGlobalScope('confirm')
            ->join('categories_product', 'products.category_product_id', '=', 'categories_product.id')
            ->where('categories_product.status', "active")
            ->where('products.status', "active")
            ->where('products.confirm_action', null)
            ->select(['products.*'])
            ->find($listId)
            ->keyBy('id');
    }

    public function getAllProductOnSite()
    {
        return $this->_model
            ->withoutGlobalScope('confirm')
            ->join('categories_product', 'products.category_product_id', '=', 'categories_product.id')
            ->where('categories_product.status', "active")
            ->where('products.confirm_action', null)
            ->where('products.status', "active")
            ->select(['products.*'])
            ->paginate(9);
    }

    public function getAllProductByCategoryOnSite($id)
    {
        return $this->_model
            ->withoutGlobalScope('confirm')
            ->join('categories_product', 'products.category_product_id', '=', 'categories_product.id')
            ->where('categories_product.status', "active")
            ->where('products.confirm_action', null)
            ->where('products.status', "active")
            ->select(['products.*'])
            ->where('products.category_product_id', $id)
            ->paginate(9);
    }


    public function getListProduct()
    {
        return $this->_model
            ->withoutGlobalScope('confirm')
            ->join('categories_product', 'products.category_product_id', '=', 'categories_product.id')
            ->where('categories_product.status', "active")
            ->where('products.confirm_action', null)
            ->select(['products.*'])
            ->pluck('products.color', 'id')
            ->all();
    }

    public function getAllProductAndSortOnSite($sort)
    {
        return $this->_model
            ->withoutGlobalScope('confirm')
            ->join('categories_product', 'products.category_product_id', '=', 'categories_product.id')
            ->where('categories_product.status', "active")
            ->where('products.confirm_action', null)
            ->where('products.status', "active")
            ->select(['products.*'])
            ->orderBy('products.' . $sort[0], $sort[1])
            ->paginate(9);
    }

    public function getAllProductByCategoryAndSortOnSite($id, $sort)
    {
        return $this->_model
            ->withoutGlobalScope('confirm')
            ->join('categories_product', 'products.category_product_id', '=', 'categories_product.id')
            ->where('categories_product.status', "active")
            ->where('products.confirm_action', null)
            ->where('products.status', "active")
            ->select(['products.*'])
            ->where('products.category_product_id', $id)
            ->orderBy('products.' . $sort[0], $sort[1])
            ->paginate(9);
    }

    public function getProductByFilterPriceOnSite($price)
    {
        return $this->_model
            ->withoutGlobalScope('confirm')
            ->join('categories_product', 'products.category_product_id', '=', 'categories_product.id')
            ->where('categories_product.status', "active")
            ->where('products.confirm_action', null)
            ->where('products.status', "active")
            ->select(['products.*'])
            ->where('products.price', '>=', $price[0] . "000")
            ->where('products.price', '<=', $price[1] . "000")
            ->paginate(9);
    }

    public function getProductByCategoryByFilterPriceOnSite($id, $price)
    {
        return $this->_model
            ->withoutGlobalScope('confirm')
            ->join('categories_product', 'products.category_product_id', '=', 'categories_product.id')
            ->where('categories_product.status', "active")
            ->where('products.confirm_action', null)
            ->where('products.status', "active")
            ->select(['products.*'])
            ->where('products.category_product_id', $id)
            ->where('products.price', '>=', $price[0] . "000")
            ->where('products.price', '<=', $price[1] . "000")
            ->paginate(9);
    }

    public function getProductByFilterPriceAndSortOnSite($price, $sort)
    {
        return $this->_model
            ->withoutGlobalScope('confirm')
            ->join('categories_product', 'products.category_product_id', '=', 'categories_product.id')
            ->where('categories_product.status', "active")
            ->where('products.confirm_action', null)
            ->where('products.status', "active")
            ->select(['products.*'])
            ->where('products.price', '>=', $price[0] . "000")
            ->where('products.price', '<=', $price[1] . "000")
            ->orderBy('products.' . $sort[0], $sort[1])
            ->paginate(9);
    }

    public function getProductByCategoryByFilterPriceAndSortOnSite($id, $price, $sort)
    {
        return $this->_model
            ->withoutGlobalScope('confirm')
            ->join('categories_product', 'products.category_product_id', '=', 'categories_product.id')
            ->where('categories_product.status', "active")
            ->where('products.confirm_action', null)
            ->where('products.status', "active")
            ->select(['products.*'])
            ->where('products.category_product_id', $id)
            ->where('products.price', '>=', $price[0] . "000")
            ->where('products.price', '<=', $price[1] . "000")
            ->orderBy('products.' . $sort[0], $sort[1])
            ->paginate(9);
    }

    public function getProductByFilterColorOnSite($arraId)
    {
        return $this->_model
            ->withoutGlobalScope('confirm')
            ->join('categories_product', 'products.category_product_id', '=', 'categories_product.id')
            ->where('categories_product.status', "active")
            ->where('products.confirm_action', null)
            ->where('products.status', "active")
            ->select(['products.*'])
            ->whereIn('products.id', $arraId)
            ->paginate(9);
    }

    public function getProductByCategoryByFilterColorOnSite($id, $arraId)
    {
        return $this->_model
            ->withoutGlobalScope('confirm')
            ->join('categories_product', 'products.category_product_id', '=', 'categories_product.id')
            ->where('categories_product.status', "active")
            ->where('products.confirm_action', null)
            ->where('products.status', "active")
            ->select(['products.*'])
            ->where('products.category_product_id', $id)
            ->whereIn('products.id', $arraId)
            ->paginate(9);
    }

    public function getProductByFilterColorAndSortOnSite($arraId, $sort)
    {
        return $this->_model
            ->withoutGlobalScope('confirm')
            ->join('categories_product', 'products.category_product_id', '=', 'categories_product.id')
            ->where('categories_product.status', "active")
            ->where('products.confirm_action', null)
            ->where('products.status', "active")
            ->select(['products.*'])
            ->whereIn('products.id', $arraId)
            ->orderBy('products.' . $sort[0], $sort[1])
            ->paginate(9);
    }

    public function getProductByCategoryByFilterColorAndSortOnSite($id, $arraId, $sort)
    {
        return $this->_model
            ->withoutGlobalScope('confirm')
            ->join('categories_product', 'products.category_product_id', '=', 'categories_product.id')
            ->where('categories_product.status', "active")
            ->where('products.confirm_action', null)
            ->where('products.status', "active")
            ->select(['products.*'])
            ->where('products.category_product_id', $id)
            ->whereIn('products.id', $arraId)
            ->orderBy('products.' . $sort[0], $sort[1])
            ->paginate(9);
    }

    public function getProductByFilterColorAndPriceOnSite($arraId, $price)
    {
        return $this->_model
            ->withoutGlobalScope('confirm')
            ->join('categories_product', 'products.category_product_id', '=', 'categories_product.id')
            ->where('categories_product.status', "active")
            ->where('products.confirm_action', null)
            ->where('products.status', "active")
            ->select(['products.*'])
            ->whereIn('products.id', $arraId)
            ->where('products.price', '>=', $price[0] . "000")
            ->where('products.price', '<=', $price[1] . "000")
            ->paginate(9);
    }

    public function getProductByCategoryByFilterColorAndPriceOnSite($id, $arraId, $price)
    {
        return $this->_model
            ->withoutGlobalScope('confirm')
            ->join('categories_product', 'products.category_product_id', '=', 'categories_product.id')
            ->where('categories_product.status', "active")
            ->where('products.confirm_action', null)
            ->where('products.status', "active")
            ->select(['products.*'])
            ->where('products.category_product_id', $id)
            ->whereIn('products.id', $arraId)
            ->where('products.price', '>=', $price[0] . "000")
            ->where('products.price', '<=', $price[1] . "000")
            ->paginate(9);
    }

    public function getProductByFilterColorAndPriceAndSortOnSite($arraId, $price, $sort)
    {
        return $this->_model
            ->withoutGlobalScope('confirm')
            ->join('categories_product', 'products.category_product_id', '=', 'categories_product.id')
            ->where('categories_product.status', "active")
            ->where('products.confirm_action', null)
            ->where('products.status', "active")
            ->select(['products.*'])
            ->whereIn('products.id', $arraId)
            ->where('products.price', '>=', $price[0] . "000")
            ->where('products.price', '<=', $price[1] . "000")
            ->orderBy('products.' . $sort[0], $sort[1])
            ->paginate(9);
    }

    public function getProductByCategoryByFilterColorAndPriceAndSortOnSite($id, $arraId, $price, $sort)
    {
        return $this->_model
            ->withoutGlobalScope('confirm')
            ->join('categories_product', 'products.category_product_id', '=', 'categories_product.id')
            ->where('categories_product.status', "active")
            ->where('products.confirm_action', null)
            ->where('products.status', "active")
            ->select(['products.*'])
            ->where('products.category_product_id', $id)
            ->whereIn('products.id', $arraId)
            ->where('products.price', '>=', $price[0] . "000")
            ->where('products.price', '<=', $price[1] . "000")
            ->orderBy('products.' . $sort[0], $sort[1])
            ->paginate(9);
    }

    public function getWishlistProduct($ids)
    {
        return $this->_model->whereIn('id', $ids)
                    ->withoutGlobalScope('confirm')
                    ->where('products.confirm_action', null)
                    ->get();
    }

    public function searchProductByQueryOnsite($query)
    {
        return $this->_model
            ->withoutGlobalScope('confirm')
            ->join('categories_product', 'products.category_product_id', '=', 'categories_product.id')
            ->where('categories_product.status', "active")
            ->where('products.confirm_action', null)
            ->where('products.status', "active")
            ->select(['products.*'])
            ->where('products.name', 'like', '%' . $query . '%')
            ->paginate(9);
    }

    public function searchProductByQueryAndSortOnSite($query, $sort)
    {
        return $this->_model
            ->withoutGlobalScope('confirm')
            ->join('categories_product', 'products.category_product_id', '=', 'categories_product.id')
            ->where('categories_product.status', "active")
            ->where('products.confirm_action', null)
            ->where('products.status', "active")
            ->select(['products.*'])
            ->orderBy('products.' . $sort[0], $sort[1])
            ->where('products.name', 'like', '%' . $query . '%')
            ->paginate(9);
    }

    public function searchProductByKeyword($keyword)
    {
        return $this->_model
            ->withoutGlobalScope('confirm')
            ->join('categories_product', 'products.category_product_id', '=', 'categories_product.id')
            ->where('categories_product.status', "active")
            ->where('products.confirm_action', null)
            ->where('products.status', "active")
            ->select(['products.*'])
            ->where('products.name', 'like', '%' . $keyword . '%')
            ->get();
    }
}