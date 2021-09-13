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

    Route::get('/pages/UpdateFlower/{id}/', 'FlowerController@PageEditFlower')->name('page.edit_flower');
    
    Route::get('/pages/DetailFlower/{id}/', 'FlowerController@PageDetailFlower')->name('page.detail_flower');
});

Route::get('pages/manage_farme', 'FarmeController@index')->name('index.farme');

Route::prefix('manage')->name('manage.')->group(function() {
    Route::get('/pages/create-farme', 'FarmeController@create')->name('create.farme');
    Route::post('/pages/create-insert/Farme/', 'FarmeController@CreateFarme')->name('insert.farme');
    Route::get('/pages/create-insert/CreateFarme2/{id}/', 'FarmeController@FormFarme2')->name('create.farme2');
    Route::post('/pages/create-insert/Farme2/{id}/', 'FarmeController@CreateFarme2')->name('insert.farme2');

    Route::get('/pages/DetailFarme/{id}/', 'FarmeController@PageDetailFarme')->name('page.detail_farme');
});

Route::get('pages/manage_store', 'StoreController@index')->name('index.store');

Route::prefix('manage')->name('manage.')->group(function() {

    Route::get('/pages/create-store/Store1/', 'StoreController@create')->name('create.store');
    Route::post('/pages/create-insert/Store2/', 'StoreController@CreateStore')->name('insert.store');
    Route::get('/pages/create-insert/CreateStore2/{id}/', 'StoreController@FormStore2')->name('create.store2');
    Route::post('/pages/create-insert/{id}/', 'StoreController@CreateStore2')->name('insert.store2');

    Route::get('/pages/DetailStore/{id}/', 'StoreController@PageDetailStore')->name('page.detail_store');
});

Route::prefix('search')->name('search.')->group(function() {

    Route::post('/dis/', 'SearchController@amp')->name('amp');
    // Route::post('/pages/create-insert/Store2/', 'StoreController@CreateStore')->name('insert.store');
    // Route::post('/pages/create-insert/{id}/', 'StoreController@CreateStore2')->name('insert.store2');
});
