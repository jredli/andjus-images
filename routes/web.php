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

Route::get('/', 'HomeController@index')->name('home');
Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('image/upload','HomeController@fileCreate')->name('image_create');
Route::post('image/upload/store','HomeController@fileStore')->name('image_store');
Route::post('image/delete','HomeController@fileDestroy')->name('image_destroy');