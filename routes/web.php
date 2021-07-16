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
    return view('user.index');
});

Route::get('/blogs', 'BlogController@index')->name('blog.index');

//Our Solutions
Route::get('/for-retailers', 'RetailerController@index')->name('retailer.index');
Route::get('/for-ecommerce', 'EcommerceController@index')->name('ecommerce.index');
Route::get('/courier-service', 'CourierServiceController@index')->name('courierservice.index');