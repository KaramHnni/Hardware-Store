<?php

/*
|--------------------------------------------------------------------------
| Blog Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Blog routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "blog" middleware group. Now create something great!
|
*/
Route::get('/','IndexController@show')->name('blog.show');