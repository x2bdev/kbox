<?php
/**
 * Created by PhpStorm.
 * User: quocb
 * Date: 12/4/2018
 * Time: 10:59 AM
 */

namespace App\Services\Site;


use App\Repositories\InterfaceRepository\CategoryProductRepositoryInterface;
use App\Repositories\InterfaceRepository\ProductRepositoryInterface;
use Illuminate\Http\Request;

class ProductService
{
    private $productRepository;
    private $categoryProductRepository;

    public function __construct(ProductRepositoryInterface $productRepository, CategoryProductRepositoryInterface $categoryProductRepository)
    {
        $this->productRepository = $productRepository;
        $this->categoryProductRepository = $categoryProductRepository;
    }

    public function index($request)
    {
        $sortQuery = $this->getSortQuery($request);

        // $dataFilter[0] : color, [1] : price
        $dataFilter = $this->getFilterProduct($request);
        $colors = $dataFilter[0];
        $price = $dataFilter[1];

        if ($colors == null && $price == null) {
            if ($sortQuery == []) {
                $allProduct = $this->productRepository->getAllProductOnSite();
            } else {
                $allProduct = $this->productRepository->getAllProductAndSortOnSite($sortQuery);
            }
        } else {
            if ($colors == null) {
                if ($sortQuery == []) {
                    $allProduct = $this->productRepository->getProductByFilterPriceOnSite($price);
                } else {
                    $allProduct = $this->productRepository->getProductByFilterPriceAndSortOnSite($price, $sortQuery);
                }
            } else if ($colors != null) {
                $colorInDB = $this->productRepository->getListProduct();
                $arrId = [];
                foreach ($colorInDB as $key => $value) {
                    $slugColor = AliasString($value);
                    $arrColorRecord = explode('-', $slugColor);
                    $arrColorRecord = array_merge($arrColorRecord, $colors);
                    $arrColorRecord = array_unique($arrColorRecord);
                    if (count($arrColorRecord) > 0) {
                        $arrId[] = $key;
                    }
                }

                if ($price == null) {
                    if ($sortQuery == []) {
                        $allProduct = $this->productRepository->getProductByFilterColorOnSite($arrId);
                    } else {
                        $allProduct = $this->productRepository->getProductByFilterColorAndSortOnSite($arrId, $sortQuery);
                    }
                } else {
                    if ($sortQuery == []) {
                        $allProduct = $this->productRepository->getProductByFilterColorAndPriceOnSite($arrId, $price);
                    } else {
                        $allProduct = $this->productRepository->getProductByFilterColorAndPriceAndSortOnSite($arrId, $price, $sortQuery);
                    }
                }
            }
        }


        return [
            'allProduct' => $allProduct,
        ];
    }

    public function getFilterProduct($request)
    {
        $color = "";
        $price = "";
        if ($request->mau != null) {
            $color = explode(',', $request->mau);
        } else {
            $color = $request->mau;
        }

        if ($request->gia != null) {
            $price = explode('-', $request->gia);
        } else if ($request->gia == 'khac') {
            $price = [500, 10000];
        } else {
            $price = $request->gia;
        }
        $arrayDataFilter[] = $color;
        $arrayDataFilter[] = $price;

        return $arrayDataFilter;
    }

    public function getSortQuery($request)
    {
        $sort = $request->sortP;
        $sortQuery = [];

        if ($sort == "nameasc") {
            $sortQuery[] = "name";
            $sortQuery[] = "asc";
        } elseif ($sort == "namedesc") {
            $sortQuery[] = "name";
            $sortQuery[] = "desc";
        } elseif ($sort == "priceasc") {
            $sortQuery[] = "price";
            $sortQuery[] = "asc";
        } elseif ($sort == "pricedesc") {
            $sortQuery[] = "price";
            $sortQuery[] = "desc";
        }

        return $sortQuery;
    }

    public function search($request)
    {
        $query = $request->q;
        $sort = $request->sortP;
        $sortQuery = [];

        if ($sort == "nameasc") {
            $sortQuery[] = "name";
            $sortQuery[] = "asc";
        } elseif ($sort == "namedesc") {
            $sortQuery[] = "name";
            $sortQuery[] = "desc";
        } elseif ($sort == "priceasc") {
            $sortQuery[] = "price";
            $sortQuery[] = "asc";
        } elseif ($sort == "pricedesc") {
            $sortQuery[] = "price";
            $sortQuery[] = "desc";
        }
        if ($sortQuery == []) {
            $productSearch = $this->productRepository->searchProductByQueryOnsite($query);
        } else {
            $productSearch = $this->productRepository->searchProductByQueryAndSortOnSite($query, $sortQuery);
        }

        return [
            'allProduct' => $productSearch,
            'query' => $query,
        ];
    }

    public function showDetail($slug, $id)
    {
        $arraySlug = explode('-', $id);
        for ($i = 0; $i < count($arraySlug) - 1; $i++) {
            $slug .= '-' . $arraySlug[$i];
        }
        $id = $arraySlug[count($arraySlug) - 1];

        $productSingle = $this->productRepository->getProductByIdOnSite($id);

        $image_detail = json_decode($productSingle->image_detail, true);
//        $productRelated = $this->productRepository->getProductRelatedOnSite($productSingle->category_product_id);
        if ($productSingle->slug != $slug) {
            abort(404);
        }
        $this->productRepository->incrementView($id);
        return [
            'productSingle' => $productSingle,
            'imageDetail' => $image_detail,
//            'productRelated' => $productRelated,
        ];
    }

    public function searchProductByKeyword($keyword)
    {
        $data = $this->productRepository->searchProductByKeyword($keyword);
        return [
            'data' => $data
        ];
    }

    public function showProductByCatetory($category, $id, $request)
    {
        $arraySlug = explode('-', $id);
        for ($i = 0; $i < count($arraySlug) - 1; $i++) {
            $category .= '-' . $arraySlug[$i];
        }
        $id = $arraySlug[count($arraySlug) - 1];


        $allProduct = $this->sortAndFilterProductByCatetory($id, $request);
        if (count($allProduct) > 0) {
            $categorySingle = $this->categoryProductRepository->getCategoryProductByIdOnSite($allProduct[0]->category_product_id);
            if ($categorySingle->slug != $category) {
                abort(404);
            }
        }
        return [
            'allProduct' => $allProduct,
        ];

    }

    public function sortAndFilterProductByCatetory($id, $request)
    {
        $sortQuery = $this->getSortQuery($request);

        // $dataFilter[0] : color, [1] : price
        $dataFilter = $this->getFilterProduct($request);
        $colors = $dataFilter[0];
        $price = $dataFilter[1];

        if ($colors == null && $price == null) {
            if ($sortQuery == []) {
                $allProduct = $this->productRepository->getAllProductByCategoryOnSite($id);
            } else {
                $allProduct = $this->productRepository->getAllProductByCategoryAndSortOnSite($id, $sortQuery);
            }
        } else {
            if ($colors == null) {
                if ($sortQuery == []) {
                    $allProduct = $this->productRepository->getProductByCategoryByFilterPriceOnSite($id, $price);
                } else {
                    $allProduct = $this->productRepository->getProductByCategoryByFilterPriceAndSortOnSite($id, $price, $sortQuery);
                }
            } else if ($colors != null) {
                $colorInDB = $this->productRepository->getListProduct();
                $arrId = [];
                foreach ($colorInDB as $key => $value) {
                    $slugColor = AliasString($value);
                    $arrColorRecord = explode('-', $slugColor);
                    $arrColorRecord = array_merge($arrColorRecord, $colors);
                    $arrColorRecord = array_unique($arrColorRecord);
                    if (count($arrColorRecord) > 0) {
                        $arrId[] = $key;
                    }
                }

                if ($price == null) {
                    if ($sortQuery == []) {
                        $allProduct = $this->productRepository->getProductByCategoryByFilterColorOnSite($id, $arrId);
                    } else {
                        $allProduct = $this->productRepository->getProductByCategoryByFilterColorAndSortOnSite($id, $arrId, $sortQuery);
                    }
                } else {
                    if ($sortQuery == []) {
                        $allProduct = $this->productRepository->getProductByCategoryByFilterColorAndPriceOnSite($id, $arrId, $price);
                    } else {
                        $allProduct = $this->productRepository->getProductByCategoryByFilterColorAndPriceAndSortOnSite($id, $arrId, $price, $sortQuery);
                    }
                }
            }
        }


        return $allProduct;

    }
}