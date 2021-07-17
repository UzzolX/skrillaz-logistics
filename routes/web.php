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
//Homepage
Route::get('/', function () {
    return view('user.index');
});

Route::get('/blogs', 'BlogController@index')->name('blog.index');

//Our Solutions
Route::get('/for-retailers', 'RetailerController@index')->name('retailer.index');
Route::get('/for-ecommerce', 'EcommerceController@index')->name('ecommerce.index');
Route::get('/courier-service', 'CourierServiceController@index')->name('courierservice.index');

//About Skrillaz
Route::get('/our-vision', 'OurVisionController@index')->name('ourvision.index');
Route::get('/for-business', 'ForBusinessController@index')->name('forbusiness.index');
Route::get('/for-courier', 'ForCourierController@index')->name('forcourier.index');

//Services
Route::get('/on-demand-delivery', 'services\OnDemandDeliveryController@index')->name('on-demand-delivery.index');
Route::get('/same-day-delivery', 'services\SameDayDeliveryController@index')->name('same-day-delivery.index');
Route::get('/next-day-delivery', 'services\NextDayDeliveryController@index')->name('next-day-delivery.index');
Route::get('/time-sensitive-delivery', 'services\TimeSensitiveDeliveryController@index')->name('time-sensitive-delivery.index');
Route::get('/client-returns', 'services\ClientReturnsController@index')->name('client-returns.index');


//Company
Route::get('/terms-and-conditions', 'company\TermsAndConditionsController@index')->name('terms-and-conditions.index');
Route::get('/contact-us', 'ContactController@index')->name('contact.index');





