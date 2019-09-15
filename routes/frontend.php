<?php
// Home
Route::get('/', ['as' => 'frontend.home.index', 'uses' => 'HomeController@index']);
Route::get('/goc-chia-se.html', ['as' => 'frontend.pages.share', 'uses' => 'PagesController@share']);
Route::get('/lien-he.html', ['as' => 'frontend.pages.contact', 'uses' => 'PagesController@contact']);
Route::get('/gioi-thieu.html', ['as' => 'frontend.pages.introduce', 'uses' => 'PagesController@introduce']);
Route::get('/chinh-sach.html', ['as' => 'frontend.pages.policy', 'uses' => 'PagesController@policy']);

// Products
Route::get('/danh-sach-san-pham.html', ['as' => 'frontend.products.index', 'uses' => 'ProductsController@index']);
Route::get('/hang-moi.html', ['as' => 'frontend.products.new', 'uses' => 'ProductsController@new']);
Route::get('/khuyen-mai.html', ['as' => 'frontend.products.sale', 'uses' => 'ProductsController@sale']);
Route::get('/gio-hang.html', ['as' => 'frontend.products.cart', 'uses' => 'ProductsController@cart']);
Route::post('/them-vao-gio', ['as' => 'frontend.products.addCart', 'uses' => 'ProductsController@addToCart']);
Route::post('/cap-nhat-gio', ['as' => 'frontend.products.updateCart', 'uses' => 'ProductsController@updateCart']);
Route::post('/xoa-khoi-gio', ['as' => 'frontend.products.removeItemCart', 'uses' => 'ProductsController@removeItemCart']);
// Route::get('/thanh-toan', ['as' => 'frontend.orders.index', 'uses' => 'OrdersController@index']);
Route::get('/thanh-toan.html', ['as' => 'frontend.orders.payment', 'uses' => 'ProductsController@payment']);
Route::get('/{categorySlug}.html', ['as' => 'frontend.products.category', 'uses' => 'ProductsController@category']);
Route::get('/chi-tiet-san-pham/{productSlug}.html', ['as' => 'frontend.products.detail', 'uses' => 'ProductsController@detail']);