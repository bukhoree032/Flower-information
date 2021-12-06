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

Route::prefix('news')->name('news.')->group(function() {
    Route::get('/news/', 'NewsController@index')->name('news.index');
    Route::get('/news/detail/{id}', 'NewsController@showid')->name('news.detail');
});