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

Route::prefix('home')->name('home.')->group(function() {
    Route::get('/', 'HomeController@index')->name('index');
    Route::get('/Flower/Detail/', 'HomeController@FlowerDetail')->name('flower.detail');
    Route::get('/Flower/Flowers/', 'HomeController@FlowerFlowers')->name('flower.flowers');

    Route::get('/Stores/', 'HomeController@Stores')->name('stores');
    Route::get('/Stores/Detail/', 'HomeController@StoresDetail')->name('stores.detail');
});