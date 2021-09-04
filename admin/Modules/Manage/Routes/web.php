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

Route::get('pages/manage_flower', 'FlowerController@index')->name('index.flower');

Route::prefix('manage')->name('manage.')->group(function() {
    Route::get('/pages/create-flower', 'FlowerController@create')->name('create.flower');
    Route::post('/pages/create-flower/insert/', 'FlowerController@CreateFlower')->name('insert.flower');
});

Route::get('pages/manage_farme', 'FarmeController@index');

Route::prefix('manage')->name('manage.')->group(function() {
    Route::get('/pages/create-farme', 'FarmeController@create')->name('create.farme');
});

Route::get('pages/manage_store', 'StoreController@index')->name('index.store');

Route::prefix('manage')->name('manage.')->group(function() {

    Route::get('/pages/create-store/Store1/', 'StoreController@create')->name('create.store');
    Route::post('/pages/create-insert/Store2/', 'StoreController@CreateStore')->name('insert.store');
    Route::post('/pages/create-insert/{id}/', 'StoreController@CreateStore2')->name('insert.store2');
});

Route::prefix('search')->name('search.')->group(function() {

    Route::post('/dis/', 'SearchController@amp')->name('amp');
    // Route::post('/pages/create-insert/Store2/', 'StoreController@CreateStore')->name('insert.store');
    // Route::post('/pages/create-insert/{id}/', 'StoreController@CreateStore2')->name('insert.store2');
});
