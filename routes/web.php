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
Route::post('/products/{product}/add_to_cart', 'ProductController@addToCart')->name('add_to_cart');




//cart controller
Route::get('/cart', 'CartController@show')->name('cart');
Route::get('/checkout', 'CartController@checkout')->name('checkout');

Route::delete('/item/{id}/delete', 'CartController@removeItemFromCart')->name('remove_item_from_cart');

Route::put('/item/{id}', 'CartController@updateCartItem')->name('update_cart_item');





Route::group(['prefix' => 'admin', "middleware" => ["adminExist","admin"] ], function(){

	Route::get('/products/{product}/edit', 'ProductController@edit')->name('edit_product');
	Route::put('/products/{product}', 'ProductController@update')->name('update_product');
	Route::get('/', 'AdminController@dashboard')->name('admin_dashboard');
	Route::get('/distributors', 'AdminController@showDistributors')->name('admin_distributors');
	Route::get('/transactions', 'AdminController@showTransactions')->name('admin_transactions');
	Route::get('/products', 'AdminController@showProducts')->name('admin_products');
	Route::get('/orders', 'AdminController@showOrders')->name('admin_orders');
	Route::get('/products/create', 'AdminController@createProducts')->name('admin_products_create');
	Route::post('/products/create', 'AdminController@storeProducts');

});


//OrdersController

Route::get('/make-payment', 'OrdersController@payment')->name('make_payment');

Route::post('/order', 'OrdersController@store')->name('store_order');
Route::put('/orders/{id}', 'AdminController@updateOrder')->name('update_order');


//CustomersController
Route::get('/customer', 'CustomerController@dashboard')->name('customer_dashbaord');

Route::get('/customer/{id}/orders', 'CustomerController@myOrders')->name('customer_orders');
Route::get('/customer/{id}/orders/{orderId}/details', 'CustomerController@orderDetails')->name('customer_order_details');


//payment controller
Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');
Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');


