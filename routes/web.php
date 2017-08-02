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
Route::get('/contact-us', 'HomeController@contactPage')->name('contact-us');
Route::post('/contact-us', 'HomeController@sendContactMail')->name('contact-us-mail');
Route::get('/distributors', 'DistributorController@index')->name('distributors');
