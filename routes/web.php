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

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'admin'], function () {
    Route::get('/login','AccountController@login');
    Route::get('/','DasboardController@index');
   
    Route::group(['prefix' => 'setting'], function () {
        Route::get('/','SettingController@index');
        Route::get('smtp','SettingController@smtp');
        Route::get('ecommerce','SettingController@ecommerce');
        Route::get('sysmenu','SettingController@sysmenu');
    });
});
