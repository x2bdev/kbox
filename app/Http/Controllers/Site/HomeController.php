<?php
/**
 * Created by PhpStorm.
 * User: macos
 * Date: 11/28/18
 * Time: 21:32
 */

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Services\Site\HomeService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    private $_homeService;

    public function __construct(HomeService $_homeService)
    {
        $this->_homeService = $_homeService;
    }

    public function index()
    {
        Session::forget("product_in_cart");
        $variables = $this->_homeService->showIndex();

        return view('frontend.pages.home.index', [
            'banner' => $variables['banner'],
            'slider' => $variables['slider'],
            'productList' => $variables['productViewHighest'],
            'productNew' => $variables['productNew'],
        ]);
    }

    public function wishlist()
    {
        return view('frontend.pages.home.wishlist');
    }

    public function getWishlistProduct(Request $request)
    {
        $ids = $request->ids;
        $data = $this->_homeService->getWishlistProduct($ids);
        echo json_encode(array('status' => 1, 'data' => $data));
        die();
    }
}