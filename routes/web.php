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


Auth::routes();
Route::get('/add', 'BlogController@addBlog')->name('addBlog');
Route::put('/add', 'BlogController@handleBlog')->name('handle.blog');

Route::get('/allBlogs', 'BlogController@allBlogs')->name('allBlogs');

Route::get('/deleteComment{id}','CommentController@deleteComment')->name('deleteComment');
Route::get('/delete{id}', 'BlogController@deleteBlog')->name('deleteBlog');

// Test

Route::post('/store', 'CommentController@store')->name('store');
//


// Delete comment

Route::get('/', 'HomeController@index')->name('home');

Route::get('period', 'HomeController@showPeriod')->name('showPeriod');

Route::get('/blog{id}', 'HomeController@showPost')
    ->name('showPost')
;
Route::post('/blog{id}', 'CommentController@addComment')->name('addComment');

Route::get('/edit{id}', 'BlogController@showEdit')
    ->name('showEdit')
;
Route::put('/edit{id}', 'BlogController@handleEdit')
    ->name('handleEdit');

//// Subscribe
Route::post('/subscribe', 'SubscribeController@subscribe')
    ->name('subscribe');
Route::post('/unsubscribe', 'SubscribeController@unSubscribe')
    ->name('unsubscribe');

// Author route
Route::get('/author', 'HomeController@author')
    ->name('author');
//Route::get('/cv', function(){
//    $pdf = PDF::loadView('blogs.cv');
//    return $pdf->download('dsd.pdf');
//});
