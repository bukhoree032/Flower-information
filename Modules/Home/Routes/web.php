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
    Route::get('/Flower/Detail/{id}/', 'HomeController@FlowerDetail')->name('flower.detail');
    Route::get('/Flower/Flowers/', 'HomeController@FlowerFlowers')->name('flower.flowers');

    Route::get('/Stores/', 'StoreController@Stores')->name('stores');
    Route::get('/Stores/Detail/{id}/', 'StoreController@StoresDetail')->name('stores.detail');

    Route::get('/Farmers/', 'FarmController@index')->name('farmer');
    Route::get('/Farmers/Detail/', 'FarmController@store')->name('farmer.detail');
    Route::get('/Farmers/Detail1/', 'FarmController@edit')->name('farmer.detail1');
    Route::get('/Farmers/Detail2/', 'FarmController@update')->name('farmer.detail2');
});
