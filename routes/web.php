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
Route::group(['middleware' => 'auth'], function () {
    Route::get('/','HomeController@welcome')->name('home');
    Route::get('/category','CategoryController@list')->name('category');
    Route::get('/logout','UserController@logout')->name('logout');
    Route::get('/product','ProductController@list')->name('product.list');
    Route::post('/product/create','ProductController@create')->name('product.create');
    Route::get('/product/view/{id}','ProductController@view')->name('product.view');
    Route::post('/product/update/{id}','ProductController@update')->name('product.update');
    Route::get('/product/delete/{id}','ProductController@delete')->name('product.delete');




});

Route::get('/login','UserController@showLoginForm')->name('login.show');
Route::post('/login','UserController@doLogin')->name('do.login');

Route::get('/registration','UserController@showRegistrationForm')->name('show.form.registration');
Route::post('/registration','UserController@doRegistration')->name('do.registration');
