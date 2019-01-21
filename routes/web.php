<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => ['web']], function () {
    // Login
    Route::get('/login', [
        'as' => 'admin.login',
        'uses' => 'Admin\LoginController@showLoginForm',
    ]);

    Route::post('/login', [
        'as' => 'admin.login.post',
        'uses' => 'Admin\LoginController@login',
    ]);

    Route::get('/logout', ['as' => 'admin.logout', 'uses' => 'Admin\LoginController@logout']);
});

Route::group(['prefix' => 'admin', 'middleware' => ['authAdminRoute']], function () {

    Route::get('/mailbox/trash', [
        'as' => 'mailbox.trash',
        'uses' => 'Admin\MailboxController@showTrash',
    ]);
    Route::post('/mailbox/trash/delete', 'Admin\MailboxController@deleteTrash');

    Route::get('/mailbox/reply/{id}', [
        'as' => 'mailbox.reply',
        'uses' => 'Admin\MailboxController@reply',
    ]);
    Route::post('/mailbox/reply', [
        'as' => 'mailbox.sendReply',
        'uses' => 'Admin\MailboxController@sendReply',
    ]);
    Route::get('/mailbox/send', [
        'as' => 'mailbox.viewSend',
        'uses' => 'Admin\MailboxController@viewSend',
    ]);
    Route::post('/mailbox/send', [
        'as' => 'mailbox.sendMail',
        'uses' => 'Admin\MailboxController@sendNewMail',
    ]);

    Route::resource('mailbox', 'Admin\MailboxController');
    Route::post('/mailbox/moveMailToTrash', [
        'as' => 'mailbox.status',
        'uses' => 'Admin\MailboxController@moveTrash',
    ]);

    // Login
    Route::get('dashboard', [
        'as' => 'dashboard',
        'uses' => 'Admin\DashboardController@index',
    ]);

    // Email Config
    Route::get('email-config', [
        'as' => 'email-config.index',
        'uses' => 'Admin\EmailConfigController@index',
    ]);

    Route::post('email-config', [
        'as' => 'email-config-save',
        'uses' => 'Admin\EmailConfigController@save',
    ]);

    // Attribute Config
    Route::get('attribute-config', [
        'as' => 'attribute-config.index',
        'uses' => 'Admin\AttributeConfigController@index',
    ]);

    Route::post('attribute-config', [
        'as' => 'attribute-config.save',
        'uses' => 'Admin\AttributeConfigController@save',
    ]);

    // Seo Config
    Route::get('seo-config', [
        'as' => 'seo-config.index',
        'uses' => 'Admin\SeoConfigController@index',
    ]);

    Route::post('seo-config', [
        'as' => 'seo-config.save',
        'uses' => 'Admin\SeoConfigController@save',
    ]);

    // Social Config
    Route::get('social-config', [
        'as' => 'social-config.index',
        'uses' => 'Admin\SocialConfigController@index',
    ]);

    Route::post('social-config', [
        'as' => 'social-config.save',
        'uses' => 'Admin\SocialConfigController@save',
    ]);

    // Contact Config
    Route::get('contact-config', [
        'as' => 'contact-config.index',
        'uses' => 'Admin\ContactConfigController@index',
    ]);

    Route::post('contact-config', [
        'as' => 'contact-config.save',
        'uses' => 'Admin\ContactConfigController@save',
    ]);

    // Contact Config
    Route::get('about-config', [
        'as' => 'about-config.index',
        'uses' => 'Admin\AboutConfigController@index',
    ]);

    Route::post('about-config', [
        'as' => 'about-config.save',
        'uses' => 'Admin\AboutConfigController@save',
    ]);

    // Group
    Route::get('group/status', [
        'as' => 'group.status',
        'uses' => 'Admin\GroupController@changeStatus',
    ]);

    Route::get('group/delete', [
        'as' => 'group.delete',
        'uses' => 'Admin\GroupController@delete',
    ]);

    Route::resource('group', 'Admin\GroupController');

    // User
    Route::get('user/changePass', [
        'as' => 'user.changePass',
        'uses' => 'Admin\UserController@changePass',
    ]);
    Route::post('user/changePass/{id}', [
        'as' => 'user.updatePass',
        'uses' => 'Admin\UserController@updatePass',
    ]);
    Route::get('user/changeInfo', [
        'as' => 'user.changeInfo',
        'uses' => 'Admin\UserController@changeInfo',
    ]);
    Route::post('user/changeInfo/{id}', [
        'as' => 'user.updateInfo',
        'uses' => 'Admin\UserController@updateInfo',
    ]);
    Route::get('user/status', [
        'as' => 'user.status',
        'uses' => 'Admin\UserController@changeStatus',
    ]);

    Route::get('user/delete', [
        'as' => 'user.delete',
        'uses' => 'Admin\UserController@delete',
    ]);
    Route::get('user/confirm', [
        'as' => 'user.indexConfirm',
        'uses' => 'Admin\UserController@indexConfirm',
    ]);
    Route::get('user/confirm/{id}', [
        'as' => 'user.confirm',
        'uses' => 'Admin\UserController@viewConfirm',
    ]);
    Route::get('user/confirmCancel/{id}', [
        'as' => 'user.confirmActionCancel',
        'uses' => 'Admin\UserController@updateConfirmCancel',
    ]);
    Route::get('user/confirmApply/{id}', [
        'as' => 'user.confirmActionApply',
        'uses' => 'Admin\UserController@updateConfirmApply',
    ]);

    Route::resource('user', 'Admin\UserController');

    Route::resource('customer', 'Admin\CustomerController');

    // Banner
    Route::get('banner/status', [
        'as' => 'banner.status',
        'uses' => 'Admin\BannerController@changeStatus',
    ]);

    Route::get('banner/delete', [
        'as' => 'banner.delete',
        'uses' => 'Admin\BannerController@delete',
    ]);

    Route::get('banner/confirm', [
        'as' => 'banner.indexConfirm',
        'uses' => 'Admin\BannerController@indexConfirm',
    ]);
    Route::get('banner/confirm/{id}', [
        'as' => 'banner.confirm',
        'uses' => 'Admin\BannerController@viewConfirm',
    ]);
    Route::get('banner/confirmCancel/{id}', [
        'as' => 'banner.confirmActionCancel',
        'uses' => 'Admin\BannerController@updateConfirmCancel',
    ]);
    Route::get('banner/confirmApply/{id}', [
        'as' => 'banner.confirmActionApply',
        'uses' => 'Admin\BannerController@updateConfirmApply',
    ]);

    Route::resource('banner', 'Admin\BannerController');

    // Category Article
    Route::get('category-article/status', [
        'as' => 'category-article.status',
        'uses' => 'Admin\CategoryArticleController@changeStatus',
    ]);

    Route::get('category-article/delete', [
        'as' => 'category-article.delete',
        'uses' => 'Admin\CategoryArticleController@delete',
    ]);

    Route::get('category-article/confirm', [
        'as' => 'category-article.indexConfirm',
        'uses' => 'Admin\CategoryArticleController@indexConfirm',
    ]);
    Route::get('category-article/confirm/{id}', [
        'as' => 'category-article.confirm',
        'uses' => 'Admin\CategoryArticleController@viewConfirm',
    ]);
    Route::get('category-article/confirmCancel/{id}', [
        'as' => 'category-article.confirmActionCancel',
        'uses' => 'Admin\CategoryArticleController@updateConfirmCancel',
    ]);
    Route::get('category-article/confirmApply/{id}', [
        'as' => 'category-article.confirmActionApply',
        'uses' => 'Admin\CategoryArticleController@updateConfirmApply',
    ]);

    Route::resource('category-article', 'Admin\CategoryArticleController');

    // Article
    Route::get('article/status', [
        'as' => 'article.status',
        'uses' => 'Admin\ArticleController@changeStatus',
    ]);

    Route::get('article/delete', [
        'as' => 'article.delete',
        'uses' => 'Admin\ArticleController@delete',
    ]);

    Route::get('article/confirm', [
        'as' => 'article.indexConfirm',
        'uses' => 'Admin\ArticleController@indexConfirm',
    ]);
    Route::get('article/confirm/{id}', [
        'as' => 'article.confirm',
        'uses' => 'Admin\ArticleController@viewConfirm',
    ]);
    Route::get('article/confirmCancel/{id}', [
        'as' => 'article.confirmActionCancel',
        'uses' => 'Admin\ArticleController@updateConfirmCancel',
    ]);
    Route::get('article/confirmApply/{id}', [
        'as' => 'article.confirmActionApply',
        'uses' => 'Admin\ArticleController@updateConfirmApply',
    ]);

    Route::resource('article', 'Admin\ArticleController');

    // Category Product
    Route::get('category-product/status', [
        'as' => 'category-product.status',
        'uses' => 'Admin\CategoryProductController@changeStatus',
    ]);

    Route::get('category-product/delete', [
        'as' => 'category-product.delete',
        'uses' => 'Admin\CategoryProductController@delete',
    ]);

    Route::get('category-product/confirm', [
        'as' => 'category-product.indexConfirm',
        'uses' => 'Admin\CategoryProductController@indexConfirm',
    ]);
    Route::get('category-product/confirm/{id}', [
        'as' => 'category-product.confirm',
        'uses' => 'Admin\CategoryProductController@viewConfirm',
    ]);
    Route::get('category-product/confirmCancel/{id}', [
        'as' => 'category-product.confirmActionCancel',
        'uses' => 'Admin\CategoryProductController@updateConfirmCancel',
    ]);
    Route::get('category-product/confirmApply/{id}', [
        'as' => 'category-product.confirmActionApply',
        'uses' => 'Admin\CategoryProductController@updateConfirmApply',
    ]);

    Route::resource('category-product', 'Admin\CategoryProductController');

    // Product
    Route::get('product/status', [
        'as' => 'product.status',
        'uses' => 'Admin\ProductController@changeStatus',
    ]);

    Route::get('product/delete', [
        'as' => 'product.delete',
        'uses' => 'Admin\ProductController@delete',
    ]);

    Route::post('product/edit/remove-image', [
        'as' => 'product.removeImageDetail',
        'uses' => 'Admin\ProductController@setRemoveImageDetail',
    ]);

    Route::get('product/confirm', [
        'as' => 'product.indexConfirm',
        'uses' => 'Admin\ProductController@indexConfirm',
    ]);
    Route::get('product/confirm/{id}', [
        'as' => 'product.confirm',
        'uses' => 'Admin\ProductController@viewConfirm',
    ]);
    Route::get('product/confirmCancel/{id}', [
        'as' => 'product.confirmActionCancel',
        'uses' => 'Admin\ProductController@updateConfirmCancel',
    ]);
    Route::get('product/confirmApply/{id}', [
        'as' => 'product.confirmActionApply',
        'uses' => 'Admin\ProductController@updateConfirmApply',
    ]);

    Route::resource('product', 'Admin\ProductController');

    // Coupon
    Route::get('coupon/status', [
        'as' => 'coupon.status',
        'uses' => 'Admin\CouponController@changeStatus',
    ]);

    Route::get('coupon/delete', [
        'as' => 'coupon.delete',
        'uses' => 'Admin\CouponController@delete',
    ]);

    Route::get('coupon/confirm', [
        'as' => 'coupon.indexConfirm',
        'uses' => 'Admin\CouponController@indexConfirm',
    ]);
    Route::get('coupon/confirm/{id}', [
        'as' => 'coupon.confirm',
        'uses' => 'Admin\CouponController@viewConfirm',
    ]);
    Route::get('coupon/confirmCancel/{id}', [
        'as' => 'coupon.confirmActionCancel',
        'uses' => 'Admin\CouponController@updateConfirmCancel',
    ]);
    Route::get('coupon/confirmApply/{id}', [
        'as' => 'coupon.confirmActionApply',
        'uses' => 'Admin\CouponController@updateConfirmApply',
    ]);

    Route::resource('coupon', 'Admin\CouponController');


    //Order
    Route::get('bill/status', [
        'as' => 'bill.status',
        'uses' => 'Admin\BillController@changeStatus',
    ]);
    Route::resource('bill', 'Admin\BillController');


});


Route::group(['prefix' => '/'], function () {
    Route::get('/clear-cache', function () {
        $exitCode = Artisan::call('config:clear');
        $exitCode = Artisan::call('cache:clear');
        $exitCode = Artisan::call('config:cache');
        $exitCode = Artisan::call('view:clear');

        return redirect()->route('trang-chu');
    });
    Route::get('/', [
        'as' => 'trang-chu',
        'uses' => 'Site\HomeController@index',
    ]);
    Route::get('trang-chu.html', [
        'as' => 'trang-chu',
        'uses' => 'Site\HomeController@index',
    ]);

    Route::get('san-pham.html', [
        'as' => 'sanpham.list',
        'uses' => 'Site\ProductController@index',
    ]);
    Route::get('{catetory}-{id}.html', [
        'as' => 'sanpham.byCatetory',
        'uses' => 'Site\ProductController@showProductByCatetory',
    ])->where(['catetory' => '[0-9a-zA-Z-]+', 'id' => '[0-9]+']);

    Route::get('san-pham/{slug}-{id}.html', [
        'as' => 'sanpham.detail',
        'uses' => 'Site\ProductController@show',
    ])->where(['slug' => '[0-9a-zA-Z-]+', 'id' => '[0-9]+']);


    Route::get('bai-viet.html', [
        'as' => 'baiviet.list',
        'uses' => 'Site\ArticleController@index',
    ]);

    Route::get('bai-viet/{slug}-{id}.html', [
        'as' => 'baiviet.detail',
        'uses' => 'Site\ArticleController@show',
    ])->where(['slug' => '[0-9a-zA-Z-]+', 'id' => '[0-9]+']);

    Route::get('tim-kiem.html', [
        'as' => 'sanpham.search',
        'uses' => 'Site\ProductController@search',
    ]);

    Route::post('tim-kiem-theo-tu-khoa', [
        'as' => 'sanpham.search_by_keyword',
        'uses' => 'Site\ProductController@searchProductByKeyword',
    ]);

    Route::get('dang-ky.html', [
        'as' => 'taikhoan.register',
        'uses' => 'Site\CustomerController@register',
    ]);

    Route::post('dang-ky.html', [
        'as' => 'taikhoan.register.post',
        'uses' => 'Site\CustomerController@registerUser',
    ]);

    Route::get('dang-nhap.html', [
        'as' => 'taikhoan.login',
        'uses' => 'Site\CustomerController@login',
    ]);

    Route::post('dang-nhap.html', [
        'as' => 'taikhoan.login.post',
        'uses' => 'Site\CustomerController@loginUser',
    ]);

    Route::get('dang-xuat.html', [
        'as' => 'taikhoan.logout',
        'uses' => 'Site\CustomerController@logout',
    ]);

    Route::get('tai-khoan', [
        'as' => 'taikhoan.profile',
        'uses' => 'Site\CustomerController@profile',
    ]);

    Route::get('gioi-thieu.html', [
        'as' => 'gioi-thieu',
        'uses' => 'Site\ContactController@about',
    ]);
    Route::get('lien-he.html', [
        'as' => 'lien-he',
        'uses' => 'Site\ContactController@index',
    ]);
    Route::post('lien-he.html', [
        'as' => 'lien-he',
        'uses' => 'Site\ContactController@store',
    ]);
    Route::get('gio-hang.html', [
        'as' => 'cart.checkout',
        'uses' => 'Site\CartController@checkout',
    ]);
    Route::post('gio-hang.html', [
        'as' => 'cart.update',
        'uses' => 'Site\CartController@updateCart',
    ]);
    Route::post('gio-hang/them-san-pham', [
        'as' => 'cart.add',
        'uses' => 'Site\CartController@add',
    ]);
    Route::post('gio-hang/xoa-san-pham', [
        'as' => 'cart.remove',
        'uses' => 'Site\CartController@remove',
    ]);

    Route::get('dat-hang.html', [
        'as' => 'cart.paying',
        'uses' => 'Site\CartController@paying',
    ])->middleware('existCart', 'authCustomerRoute');

    Route::post('dat-hang.html', [
        'as' => 'cart.paying',
        'uses' => 'Site\CartController@confirmPaying',
    ])->middleware('existCart');

    Route::get('san-pham-yeu-thich.html', [
        'as' => 'wishlist.show',
        'uses' => 'Site\HomeController@wishlist',
    ]);

    Route::post('load-danh-sach-san-pham-yeu-thich.html', [
        'as' => 'get-wishlist-product',
        'uses' => 'Site\HomeController@getWishlistProduct',
    ]);

    Route::get('auth/{provider}', 'Site\SocialAuthController@redirectToProvider');
    Route::get('auth/{provide}/callback', 'Site\SocialAuthController@handleProviderCallback');
});
