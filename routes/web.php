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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/install', 'HomeController@install')->name('install');
Route::get('/contact-us', 'HomeController@contactPage')->name('contact-us');
Route::post('/contact-us', 'HomeController@sendContactMail')->name('contact-us-mail');
Route::get('/about-us', 'HomeController@aboutUs')->name('about-us');

Route::get('/distributors', 'DistributorController@index')->name('distributors');
Route::post('/distributors', 'DistributorController@create')->name('add_distributor');
Route::delete('/distributors/{id}/delete', 'DistributorController@delete')->name('delete_distributor');


Route::get('/products', 'HomeController@showProducts')->name('products');
Route::post('/products', 'ProductController@store')->name('add_product');
Route::get('/products/{product}', 'ProductController@show')->name('show_product');
Route::delete('/products/{product}/delete', 'ProductController@delete')->name('delete_product');


Route::group(['prefix' => 'admin', "middleware" => ["adminExist","admin"] ], function(){

	Route::get('/products/{product}/edit', 'ProductController@edit')->name('edit_product');
	Route::put('/products/{product}', 'ProductController@update')->name('update_product');
	Route::get('/', 'AdminController@dashboard')->name('admin_dashboard');
	Route::get('/distributors', 'AdminController@showDistributors')->name('admin_distributors');
	Route::get('/products', 'AdminController@showProducts')->name('admin_products');
	Route::get('/products/create', 'AdminController@createProducts')->name('admin_products_create');
	Route::post('/products/create', 'AdminController@storeProducts');

});

