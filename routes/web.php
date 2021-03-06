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

Route::get('/home', 'HomeController@index')->name('home');


//Homepage
Route::get('/', function () {
    return view('user.index');
});

Route::get('/blogs', 'BlogController@index')->name('blog.index');

//Our Solutions
Route::get('/for-retailers', 'RetailerController@index')->name('retailer.index');
Route::get('/for-ecommerce', 'EcommerceController@index')->name('ecommerce.index');
Route::get('/courier-service', 'CourierServiceController@index')->name('courierservice.index');
Route::get('/technology-solutions', 'oursolutions\TechnologySolutionController@index')->name('technology.index');
Route::get('/fleet-solutions', 'oursolutions\FleetSolutionsController@index')->name('fleet.index');

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
Route::get('/privacy-and-policy', 'admin\settings\PrivacyPolicyController@indexFront')->name('privacyFront.index');
Route::get('/terms-and-conditions', 'admin\settings\TermAndConditionController@indexFront')->name('termsFront.index');
Route::get('/contact-us', 'ContactController@index')->name('contact.index');
Route::post('/contact-us/store', 'ContactController@store')->name('contact.store');


//Admin
Route::middleware(['admin'])->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.index');
    });

    Route::get('/dashboard/blogs', 'admin\BlogsController@index')->name('blogs.index');
    Route::get('/dashboard/blogs/create', 'admin\BlogsController@create')->name('blogs.create');
    Route::post('/dashboard/blogs/create', 'admin\BlogsController@store')->name('blogs.store');
    Route::get('/dashboard/blogs/{id}', 'admin\BlogsController@show')->name('blogs.show');
    Route::get('/dashboard/blogs/{id}/edit', 'admin\BlogsController@edit')->name('blogs.edit');
    Route::post('/dashboard/blogs/{id}/update', 'admin\BlogsController@update')->name('blogs.update');
    Route::get('/dashboard/blogs/{id}/delete', 'admin\BlogsController@destroy')->name('blogs.delete');

    Route::get('/dashboard/blogs/edit-page', 'admin\BlogsController@heroSection')->name('blogsHero.index');

    //Privacy & Policy
    Route::get('/dashboard/privacy-and-policy', 'admin\settings\PrivacyPolicyController@index')->name('privacy.index');
    Route::get('/dashboard/privacy-and-policy/create', 'admin\settings\PrivacyPolicyController@create')->name('privacy.create');
    Route::post('/dashboard/privacy-and-policy/create', 'admin\settings\PrivacyPolicyController@store')->name('privacy.store');
    Route::get('/dashboard/privacy-and-policy/{id}/edit', 'admin\settings\PrivacyPolicyController@edit')->name('privacy.edit');
    Route::get('/dashboard/privacy-and-policy/{id}/update', 'admin\settings\PrivacyPolicyController@update')->name('privacy.update');
    Route::get('/dashboard/privacy-and-policy/{id}/delete', 'admin\settings\PrivacyPolicyController@destroy')->name('privacy.delete');
});
