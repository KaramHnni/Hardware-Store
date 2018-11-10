<?php

/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
|
| Here is where you can register User routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "user" middleware group. Now create something great!
|
*/
Route::get('/','indexController@redirectToDashboard');
Route::get('/dashboard','DashboardController@show')->name('user.dashboard');

Route::get('/my-posts','Blog\Posts\IndexController@show')->name('user.blog.posts');