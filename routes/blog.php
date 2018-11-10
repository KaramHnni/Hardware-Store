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
Route::get('/Posts/{slug}','Post\IndexController@show')->name('blog.post.show');
Route::get('/Channels/{slug}','Channel\IndexController@show')->name('blog.channel.show');
Route::group(['middleware' => 'auth'],function(){
    Route::get('/create-new-post','Post\CreateController@show')->name('blog.post.create');
    Route::post('/create-new-post','Post\CreateController@create');

    Route::get('/create-new-channel' , 'Channel\CreateController@show')->name('blog.channel.create');
    Route::post('/create-new-channel',    'Channel\CreateController@create');

});
