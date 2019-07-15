<?php

Route::get('login', ['as' => 'backend.login.get', 'uses' => 'Auth\LoginController@getLogin']);
Route::post('login', ['as' => 'backend.login.post', 'uses' => 'Auth\LoginController@postLogin']);
Route::get('logout', ['as' => 'backend.logout', 'uses' => 'Auth\LoginController@logout']);

Route::group(['middleware' => ['auth.backend']], function() {
	Route::get('/', ['as' => 'backend.dashboard.index', 'uses' => 'DashboardController@index']);

	// Admin
	Route::resource('admin', 'AdminController')->names('backend.admin');
});