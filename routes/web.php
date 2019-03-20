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

Route::get('reset_password/{token}', ['as' => 'password.reset', function($token)
{
    // implement your reset password route here!
}]);

Route::get('/', "PageController@index")->name('home');
Route::get('/about', "PageController@about")->name('about');
Route::get('/services', "PageController@services")->name('services');
Route::get('/rates', "PageController@rates")->name('rates');
Route::get('/contacts', "PageController@contacts")->name('contacts');
Route::get('/order', "PageController@order")->name('order');

Route::get('/login', "Auth\LoginController@showLoginForm")->name('showLoginForm');
Route::post('/login', "Auth\LoginController@login")->name('login');
Route::get('/logout', "Auth\LoginController@logout")->name('logout');

Route::group(['prefix' => 'email'], function() {
    Route::post('/test', "EmailNotification@test");
    Route::post('/contact_us', "EmailNotification@contactUs");
    Route::post('/quick_quote', "EmailNotification@quickQuote");

    //$api->post('air_shipping_order', ['uses' => "App\\Api\\V1\\Controllers\\EmailNotification@airShippingOrder"]);
    //$api->post('usspi_form', ['uses' => "App\\Api\\V1\\Controllers\\EmailNotification@usspiForm"]);
});

Route::group(['prefix' => 'admin','middleware'=>'auth'], function() {
    Route::get('/home', "AdminPageController@index")->name('admin');
    Route::get('/oceanDeliveryPriceList', "AdminPageController@oceanDeliveryPriceList")->name('oceanDeliveryPriceList');
    Route::get('/oceanPortsForm', "AdminPageController@showFormsAddOceanPorts")->name('showFormsAddOceanPorts');

    Route::post('/addOceanExitPort', "AdminPageController@addOceanExitPort")->name('addOceanExitPort');
    Route::post('/addOceanDestinationPort', "AdminPageController@addOceanDestinationPort")->name('addOceanDestinationPort');

    Route::post('/oceanDeliveryPriceList', "AdminPageController@addOceanDeliveryPriceItem")->name('addOceanDeliveryPriceItem');
    Route::delete('/deleteOceanDeliveryPriceItem/{item_id}', "AdminPageController@deleteOceanDeliveryPriceItem")->name('deleteOceanDeliveryPriceItem')->where('item_id', '[0-9]+');


    Route::get('/groundDeliveryPriceList', "AdminPageController@groundDeliveryPriceList")->name('groundDeliveryPriceList');
    Route::post('/addGroundDeliveryPriceItem', "AdminPageController@addGroundDeliveryPriceItem")->name('addGroundDeliveryPriceItem');
    Route::post('/deleteGroundDeliveryPriceItem', "AdminPageController@deleteGroundDeliveryPriceItem")->name('deleteGroundDeliveryPriceItem');
});