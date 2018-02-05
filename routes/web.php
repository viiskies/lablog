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


Route::get('/post', 'PostsController@showSingle')->name('posts.post');
Route::get('/blog', 'PostsController@showAll')->name('posts.showAll');
Route::get('/create', 'PostsController@create')->name('posts.create');
Route::get('/edit', 'PostsController@edit')->name('posts.edit');


Auth::routes();

