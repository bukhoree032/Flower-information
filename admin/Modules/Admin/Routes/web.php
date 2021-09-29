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

Route::get('pages/news', 'NewsController@index')->name('index.news');

Route::prefix('admin')->name('admin.')->group(function() {
    Route::get('/pages/create-news', 'NewsController@create')->name('create.news');
    Route::post('/pages/insert-news/', 'NewsController@insert')->name('insert.news');
    Route::get('/pages/DetailNews/{id}/', 'NewsController@detail')->name('detail.news');

    Route::get('/pages/EditNews/{id}/', 'NewsController@edit')->name('edit.news');
    Route::post('/pages/updateNews/{id}/', 'NewsController@update')->name('update.news');

    Route::get('/pages/DeletNews/{id}/', 'NewsController@delet')->name('delet.news');
});

Route::get('pages/system', 'SystemController@index')->name('index.system');

Route::prefix('admin')->name('admin.')->group(function() {
    Route::get('/pages/create-system', 'SystemController@create')->name('create.system');
    Route::post('/pages/insert-system/', 'SystemController@insert')->name('insert.system');
    // Route::get('/pages/Detailsystem/{id}/', 'SystemController@detail')->name('detail.system');

    // Route::get('/pages/Editsystem/{id}/', 'SystemController@edit')->name('edit.system');
    // Route::post('/pages/updatesystem/{id}/', 'SystemController@update')->name('update.system');

    // Route::get('/pages/Deletsystem/{id}/', 'SystemController@delet')->name('delet.system');
});