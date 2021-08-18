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

Route::get('pages/manage_flower', 'FlowerController@index');

Route::prefix('manage')->name('manage.')->group(function() {
    Route::get('/pages/create-flower', 'FlowerController@create')->name('create.flower');
});

Route::get('pages/manage_farme', 'FarmeController@index');

Route::prefix('manage')->name('manage.')->group(function() {
    Route::get('/pages/create-farme', 'FarmeController@create')->name('create.farme');
});

Route::get('pages/manage_store', 'StoreController@index');

Route::prefix('manage')->name('manage.')->group(function() {
    Route::get('/pages/create-store', 'StoreController@create')->name('create.store');
});
