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

Route::get('/','HomeController@welcome')->name('home');
Route::get('/about','HomeController@about')->name('about');
Route::get('/product','ProductController@list')->name('product.list');
Route::post('/product/create','ProductController@create')->name('product.create');
