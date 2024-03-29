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
