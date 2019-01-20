<?php
/**
 * Created by PhpStorm.
 * User: quocb
 * Date: 12/4/2018
 * Time: 8:21 AM
 */

namespace App\Services\Site;

use App\Repositories\InterfaceRepository\BannerRepositoryInterface;
use App\Repositories\InterfaceRepository\ProductRepositoryInterface;

class HomeService
{
    private $bannerRepository;
    private $productRepository;
    private $infoBasic;

    public function __construct(ProductRepositoryInterface $productRepository, BannerRepositoryInterface $bannerRepository)
    {
        $this->bannerRepository = $bannerRepository;
        $this->productRepository = $productRepository;
    }

    public function showIndex()
    {
        $banner = $this->bannerRepository->getBannerOnSite();
        $slider = $this->bannerRepository->getSliderOnSite();

        $productViewHighest = $this->productRepository->getProductViewHighestOnSite();
        $productNew = $this->productRepository->getProductNewOnSite();
        return [
            'banner' => $banner,
            'slider' => $slider,
            'productViewHighest'    => $productViewHighest,
            'productNew'    => $productNew,
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