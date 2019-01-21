<?php
/**
 * Created by PhpStorm.
 * User: quocb
 * Date: 12/4/2018
 * Time: 8:21 AM
 */

namespace App\Services\Site;

use App\Repositories\InterfaceRepository\BannerRepositoryInterface;
use App\Repositories\InterfaceRepository\BillDetailRepositoryInterface;
use App\Repositories\InterfaceRepository\ProductRepositoryInterface;

class HomeService
{
    private $bannerRepository;
    private $productRepository;
    private $billDetailRepository;
    private $infoBasic;

    public function __construct(ProductRepositoryInterface $productRepository, BannerRepositoryInterface $bannerRepository, BillDetailRepositoryInterface $billDetailRepository)
    {
        $this->bannerRepository = $bannerRepository;
        $this->productRepository = $productRepository;
        $this->billDetailRepository = $billDetailRepository;
    }

    public function showIndex()
    {
        $banner = $this->bannerRepository->getBannerOnSite();
        $slider = $this->bannerRepository->getSliderOnSite();

        $productViewHighest = $this->productRepository->getProductViewHighestOnSite();
        $productNew = $this->productRepository->getProductNewOnSite();

//        $top3ProductSell = $this->billDetailRepository->getBestSellProductOnSite();
//        dd($top3ProductSell);

        return [
            'banner' => $banner,
            'slider' => $slider,
            'productViewHighest' => $productViewHighest,
            'productNew' => $productNew,
        ];
    }

    public function getProductViewHighest()
    {

    }

    public function getWishlistProduct($ids)
    {
        $products = $this->productRepository->getWishlistProduct($ids);
        return $products;
    }

}