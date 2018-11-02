<?php

/*
|--------------------------------------------------------------------------
| Site Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Site routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "site" middleware group. Now create something great!
|
*/

Route::get('/','HomeController@show')->name('site.home');
Route::get('/register','Auth\RegisterController@show')->name('site.register');
Route::post('/register','Auth\RegisterController@register');
Route::post('/login','Auth\LoginController@show')->name('login');
