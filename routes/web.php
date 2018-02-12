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

Route::get('/', 'HomeController@index')->name('index');
Route::get('/admin', 'HomeController@admin')->name('admin');

Route::get('/blog', 'PostsController@showAll')->name('posts.showAll');

Route::get('/create', 'PostsController@create')->name('posts.create');
Route::post('/post/store', 'PostsController@store')->name('posts.store');
Route::get('/edit', 'PostsController@edit')->name('posts.edit');
Route::get('/post/{id}', 'PostsController@showSingle')->name('posts.post');

Route::get('/post/{id}/comments/{comment_id}', 'CommentsController@showSingle')->name('comments.single');
Route::get('/post/{id}/comments', 'CommentsController@all')->name('comments.all');

Route::get('/comment/create', 'CommentsController@create')->name('comments.create');
Route::post('/comment/store/{post_id}', 'CommentsController@store')->name('comments.store');

Auth::routes();