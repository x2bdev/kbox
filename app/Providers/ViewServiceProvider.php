<?php
/**
 * Created by PhpStorm.
 * User: macos
 * Date: 12/4/18
 * Time: 20:54
 */

namespace App\Providers;

use App\Models\Setting;
use App\Models\Product;
use App\Models\CategoryProduct;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    public function boot()
    {
        view()->composer('*', function ($view) {
            $contactConfigItem = Setting::where('option_name', 'setting_contact')->first();
            $dataContact = json_decode($contactConfigItem->option_value);
            $socialConfigItem = Setting::where('option_name', 'setting_social')->first();
            $dataSocial = json_decode($socialConfigItem->option_value);
            $seoConfigItem = Setting::where('option_name', 'setting_seo')->first();
            $dataSeo = json_decode($seoConfigItem->option_value);


            $view->with([
                'contactConfig' => $dataContact, 
                'dataSocial' => $dataSocial,
                'seoConfig' => $dataSeo
            ]);
        });
//        'frontend.layouts.popup_cart'
        view()->composer('*', function ($view) {
            $products = "";
            $data = "";
            $coupon = "";
            if (Session::get("product_in_cart") !== null) {
                $data = Session::get("product_in_cart");
                $coupon = Session::get("coupon");
                $listId = array_keys($data);
                $products = Product::where('status', "active")
                    ->withoutGlobalScope('confirm')
                    ->where('products.confirm_action', null)
                    ->find($listId)->keyBy('id');


            }
//            dd($products);
            $view->with(['dataCartHeader' => $data, 'productsHeader' => $products, 'couponHeader' => $coupon]);
        });
//
//        view()->composer('frontend.blocks.partial.search_header', function ($view) {
//            $categories = CategoryProduct::where('status', 'active')->where('level', '1')->get();
//
//            $view->with('categoriesSearch', $categories);
//        });
//
//        view()->composer('*', function ($view) {
//            $seoConfigItem = Setting::where('option_name', 'setting_seo')->first();
//            $data = json_decode($seoConfigItem->option_value);
//            $view->with('seoConfig', $data);
//        });
//
//        view()->composer('*', function ($view) {
//            $categoriesFromDB = CategoryProduct::where('status', 'active')->where('id', '>', '0')->where('level', '<=', '2')->get();
//            $categoriesLevel1 = [];
//            $categoriesLevel2 = [];
//            foreach ($categoriesFromDB as $key => $value) {
//                if ($value->level == 1) {
//                    $categoriesLevel1[$value->id] = $value;
//                } elseif ($value->level == 2) {
//                    $categoriesLevel2[$value->parent][] = $value;
//                }
//            }
//            $view->with(['categoriesHeaderLv1' => $categoriesLevel1, 'categoriesHeaderLv2' => $categoriesLevel2]);
//        });
//
        view()->composer('*', function ($view) {
            $attributeConfigItem = Setting::where('option_name', 'setting_attribute')->first();
            $data = json_decode($attributeConfigItem->option_value);
            $view->with('attributeConfig', $data);
        });
    }

    public function register()
    {
        //
    }
}