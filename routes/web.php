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

Route::get('', 'tbolaController@Index')->name('Index');
Route::get('show', 'tbolaController@show')->name('show');
Route::get('create', 'tbolaController@create')->name('create');
Route::post('insert', 'tbolaController@insert')->name('insert');
Route::get('delete/{id}', 'tbolaController@delete')->name('delete');
Route::get('edit/{id}', 'tbolaController@edit')->name('edit');
Route::post('edit/{id}', 'tbolaController@submitedit')->name('submitedit');
Route::get('search', 'tbolaController@search')->name('search');
