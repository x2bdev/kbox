<?php
/**
 * Created by PhpStorm.
 * User: macos
 * Date: 10/6/18
 * Time: 12:57
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Partner extends Model
{
    use SoftDeletes;

    protected        $table     = "partners";
    protected        $title     = "Partner";
    protected        $route     = "partner";
    protected        $view      = "partner::";
    protected static $key_cache = "admin.pages.partner.";
    protected        $fillable  = [
        'id',
        'name',
        'image',
        'status',
        'confirm_action',
        'data_update'
    ];
    protected           $dates      = ['deleted_at'];

    public function getInfo() {
        return [
            'route' => $this->route,
            'view'  => $this->view,
            'title' => $this->title
        ];
    }

    protected static function boot()
    {
        parent::boot();

        // A global scope is applied to all queries on this model
        // -> No need to specify visibility restraints on every query
        static::addGlobalScope('confirm', function (Builder $builder) {
            $builder->where('confirm_action', '=', null);
        });
    }
}