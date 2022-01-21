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

Route::get('/', 'WelcomeController@index');

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
Route::get('users', 'UserController@index')->name('users.index');

Route::get('posts/create', 'PostController@create')->name('posts.create');
Route::get('posts', 'PostController@index')->name('posts.index');
Route::put('posts', 'PostController@store')->name('posts.store');

Route::get('categories', 'CategoryController@index')->name('categories.index');
Route::get('categories/create', 'CategoryController@create')->name('categories.create');
Route::put('categories', 'CategoryController@store')->name('categories.store');
