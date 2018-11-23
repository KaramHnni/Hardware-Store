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
Route::group(['prefix' => 'Posts' , 'namespace' => 'Post'],function(){
    Route::get('/{slug}','IndexController@show')->name('blog.post.show');
    Route::group(['middleware' => 'auth'],function(){
    Route::get('/{slug}/edit','EditController@show')->name('blog.post.edit');
    Route::post('/{slug}/edit','EditController@update');
    Route::get('/{slug}/delete','DeleteController@delete')->name('blog.post.delete');
    Route::get('/{slug}/like','LikeController@like')->name('blog.post.like');
    Route::get('/{slug}/dislike','LikeController@dislike')->name('blog.post.dislike');
    });

});
Route::group(['prefix' => 'Channels' , 'namespace' => 'Channel'],function(){
    Route::get('/','ChannelsController@show')->name('blog.channels');
    Route::get('/{slug}','IndexController@show')->name('blog.channel.show');
    Route::group(['middleware' => 'auth'],function(){
        Route::get('/{slug}/create-new-post','Post\CreateController@show')->name('blog.post.create');
        Route::post('/{slug}/create-new-post','Post\CreateController@create');
        Route::get('/{slug}/edit','EditController@show')->name('blog.channel.edit');
        Route::post('/{slug}/edit','EditController@update');
        Route::get('/{slug}/delete','DeleteController@delete')->name('blog.channel.delete');
        Route::get('/{slug}/follow','FollowController@follow')->name('blog.channel.follow');
        Route::get('/{slug}/unfollow','FollowController@unfollow')->name('blog.channel.unfollow');
    });
});

Route::group(['prefix' => 'Categories' , 'namespace' => 'Category'],function(){

    Route::get('/','MainController@redirectToMain')->name('blog.main');
    Route::get('/{slug}','CategoriesController@show')->name('blog.categories');
});


Route::group(['middleware' => 'auth'],function(){

    Route::get('/create-new-channel' , 'Channel\CreateController@show')->name('blog.channel.create');
    Route::post('/create-new-channel',    'Channel\CreateController@create');

});
