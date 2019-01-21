<?php
/**
 * Created by PhpStorm.
 * User: quocb
 * Date: 12/4/2018
 * Time: 10:59 AM
 */

namespace App\Services\Site;

use App\Repositories\InterfaceRepository\ArticleRepositoryInterface;

class ArticleService
{
    private $articleRepository;

    public function __construct(ArticleRepositoryInterface $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    public function index(){
        $allArticle = $this->articleRepository->getAllArticleOnSite();
        return [
            'allArticle'    => $allArticle,
        ];
    }

//    public function search($request){
//        $allProduct = $this->articleRepository->getAllProductOnSite();
//
//        return [
//            'allProduct'    => $allProduct,
//        ];
//    }
//
    public function showDetail($slug, $id){
        $articleSingle = $this->articleRepository->getArticleByIdOnSite($id);
        $articleList = $this->articleRepository->getArticleViewHighestOnSite($id);

        if($articleSingle->slug !== $slug){
            abort(404);
        }
        return [
            'articleSingle'     => $articleSingle,
            'articleList'       => $articleList,
        ];
    }
//
//    public function searchProductByKeyword($keyword) {
//        $data = $this->productRepository->searchProductByKeyword($keyword);
//        return [
//            'data'  => $data
//        ];
//    }
}