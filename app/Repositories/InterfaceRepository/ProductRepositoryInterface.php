<?php
/**
 * Created by PhpStorm.
 * User: macos
 * Date: 10/22/18
 * Time: 21:13
 */

namespace App\Repositories\InterfaceRepository;


interface ProductRepositoryInterface
{
    /**
     * Get coupon
     * @return mixed
     */
    public function getProduct($params);

    public function getProductNeedConfirm($params);

    public function getProductConfirm($id);

    public function getAllProductConfirm();

    public function incrementView($id);

    public function getProductViewHighestOnSite();

    public function getProductNewOnSite();

    public function getProductRelatedOnSite($category_id);

    public function getProductByIdOnSite($id);

    public function getProductByListIdOnSite($listId);

    public function getAllProductOnSite();

    public function getAllProductByCategoryOnSite($id);


    public function getListProduct();

    public function getAllProductAndSortOnSite($sort);

    public function getAllProductByCategoryAndSortOnSite($id, $sort);

    public function getProductByFilterPriceOnSite($price);

    public function getProductByCategoryByFilterPriceOnSite($id, $price);

    public function getProductByFilterPriceAndSortOnSite($price, $sort);

    public function getProductByCategoryByFilterPriceAndSortOnSite($id, $price, $sort);

    public function getProductByFilterColorOnSite($color);

    public function getProductByCategoryByFilterColorOnSite($id, $color);

    public function getProductByFilterColorAndSortOnSite($color, $sort);

    public function getProductByCategoryByFilterColorAndSortOnSite($id, $color, $sort);

    public function getProductByFilterColorAndPriceOnSite($color, $price);

    public function getProductByCategoryByFilterColorAndPriceOnSite($id, $color, $price);

    public function getProductByFilterColorAndPriceAndSortOnSite($color, $price, $sort);

    public function getProductByCategoryByFilterColorAndPriceAndSortOnSite($id, $color, $price, $sort);

    public function getWishlistProduct($ids);

    public function searchProductByQueryOnsite($query);

    public function searchProductByQueryAndSortOnSite($query, $sort);

    public function searchProductByKeyword($keyword);
}