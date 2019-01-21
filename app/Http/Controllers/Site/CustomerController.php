<?php
/**
 * Created by PhpStorm.
 * User: quocb
 * Date: 12/3/2018
 * Time: 10:52 AM
 */

namespace App\Http\Controllers\Site;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;
use App\Http\Controllers\Controller;
use App\Http\Requests\Site\LoginUserRequest;
use App\Services\Site\CustomerService;
use App\Http\Requests\Site\RegisterUserRequest;

class CustomerController extends Controller
{
    private $customerService;

    public function __construct(CustomerService $customerService)
    {
        $this->customerService = $customerService;
    }

    public function register() {
        return view('frontend.pages.account.register');
    }

    public function registerUser(RegisterUserRequest $request) {
        return $this->customerService->store($request);
    }

    public function login() {
        return view('frontend.pages.account.login');
    }

    public function loginUser(LoginUserRequest $request) {
        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::guard('customer')->attempt($data)) {
            return redirect(route('trang-chu'));
        } else {
            $errors = new MessageBag(['login_fail' => 'Email hoặc mật khẩu không đúng']);
            return redirect()->back()->with('errors', $errors);
        }
    }

    public function logout() {
        Auth::guard('customer')->logout();
        return redirect(route('taikhoan.login'));
    }

    public function profile() {
        return view('frontend.pages.account.my_account');
    }
}