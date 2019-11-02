<?php

Route::get('login', ['as' => 'backend.login.get', 'uses' => 'Auth\LoginController@getLogin']);
Route::post('login', ['as' => 'backend.login.post', 'uses' => 'Auth\LoginController@postLogin']);
Route::get('logout', ['as' => 'backend.logout', 'uses' => 'Auth\LoginController@logout']);

Route::group(['middleware' => ['auth.backend']], function() {
	Route::get('/', ['as' => 'backend.dashboard.index', 'uses' => 'DashboardController@index']);

	// Admin
	Route::resource('admin', 'AdminController')->names('backend.admin');
	Route::resource('categories', 'CategoriesController')->names('backend.categories');

	Route::get('products/{id}/upload-image', ['as' => 'backend.products.upload_image', 'uses' => 'ProductImageController@uploadImage']);
	Route::post('products/{id}/post-upload-image', ['as' => 'backend.products.post_upload_image', 'uses' => 'ProductImageController@postUploadImage']);
	Route::resource('products', 'ProductsController')->names('backend.products');

	// Orders
    Route::post('orders/change-status', ['as' => 'backend.orders.change_status', 'uses' => 'OrdersController@changeStatus']);
    Route::resource('orders', 'OrdersController')->names('backend.orders');

    Route::resource('users', 'UsersController')->names('backend.users');
    Route::post('users/change-status', ['as' => 'backend.users.change_status', 'uses' => 'UsersController@changeStatus']);

    Route::resource('contacts', 'ContactsController')->names('backend.contacts');

    // Setting
    Route::get('setting/image_slide', [
        'as' => 'backend.setting.image_slide',
        'uses' => 'SettingController@imageSlide',
    ]);
    Route::post('setting/post_image_slide', [
        'as' => 'backend.setting.post_image_slide',
        'uses' => 'SettingController@postImageSlide',
    ]);
});
