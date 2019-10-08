<?php
// Home
Route::get('/', ['as' => 'frontend.home.index', 'uses' => 'HomeController@index']);
Route::get('/goc-chia-se.html', ['as' => 'frontend.pages.share', 'uses' => 'PagesController@share']);
Route::get('/lien-he.html', ['as' => 'frontend.pages.contact', 'uses' => 'PagesController@contact']);
Route::get('/gioi-thieu.html', ['as' => 'frontend.pages.introduce', 'uses' => 'PagesController@introduce']);
Route::get('/chinh-sach.html', ['as' => 'frontend.pages.policy', 'uses' => 'PagesController@policy']);

// Login
Route::get('/dang-nhap.html', ['as' => 'frontend.login.get', 'uses' => 'Auth\LoginController@getLogin']);
Route::post('/dang-nhap', ['as' => 'frontend.login.post', 'uses' => 'Auth\LoginController@postLogin']);
Route::get('/dang-xuat.html', ['as' => 'frontend.logout', 'uses' => 'Auth\LoginController@logout']);
Route::post('/dang-ky', ['as' => 'frontend.register', 'uses' => 'Auth\LoginController@register']);
Route::get('/tai-khoan-cua-ban.html', ['as' => 'frontend.users.profile', 'uses' => 'UsersController@profile']);
Route::get('/thay-doi-thong-tin-ca-nhan.html', ['as' => 'frontend.users.edit_profile', 'uses' => 'UsersController@editProfile']);
Route::post('/thay-doi-thong-tin-ca-nhan', ['as' => 'frontend.users.update_profile', 'uses' => 'UsersController@updateProfile']);

// Products
Route::get('/danh-sach-san-pham.html', ['as' => 'frontend.products.index', 'uses' => 'ProductsController@index']);
Route::get('/hang-moi.html', ['as' => 'frontend.products.new', 'uses' => 'ProductsController@new']);
Route::get('/khuyen-mai.html', ['as' => 'frontend.products.sale', 'uses' => 'ProductsController@sale']);
Route::get('/gio-hang.html', ['as' => 'frontend.products.cart', 'uses' => 'ProductsController@cart']);
Route::post('/them-vao-gio', ['as' => 'frontend.products.addCart', 'uses' => 'ProductsController@addToCart']);
Route::post('/cap-nhat-gio', ['as' => 'frontend.products.updateCart', 'uses' => 'ProductsController@updateCart']);
Route::post('/xoa-khoi-gio', ['as' => 'frontend.products.removeItemCart', 'uses' => 'ProductsController@removeItemCart']);
Route::get('/thanh-toan.html', ['as' => 'frontend.orders.payment', 'uses' => 'OrdersController@payment']);
Route::post('/thanh-toan', ['as' => 'frontend.orders.postPayment', 'uses' => 'OrdersController@postPayment']);
Route::get('/dat-hang-thanh-cong.html', ['as' => 'frontend.orders.success', 'uses' => 'OrdersController@success']);
Route::get('/{categorySlug}.html', ['as' => 'frontend.products.category', 'uses' => 'ProductsController@category']);
Route::get('/chi-tiet-san-pham/{productSlug}.html', ['as' => 'frontend.products.detail', 'uses' => 'ProductsController@detail']);
