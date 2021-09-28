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

    Route::get('/pages/EditNews/{id}/', 'NewsController@edit')->name('edit');
    Route::post('/pages/updateNews/{id}/', 'NewsController@update')->name('update');
    
    Route::get('/pages/DetailNews/{id}/', 'NewsController@detail')->name('page.detail');
});