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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/categories', 'CategoriesController@store');

Route::get('/categories', 'CategoriesController@index');

Route::get('/categories/create', 'CategoriesController@create');

Route::get('/categories/{category}/edit', 'CategoriesController@edit');

Route::put('/categories/{category}/edit', 'CategoriesController@update');

Route::post('/tags', 'TagsController@store');

Route::get('/tags', 'TagsController@index');

Route::get('/tags/create', 'TagsController@create');

Route::get('/tags/{tag}/edit', 'TagsController@edit');

Route::put('/tags/{tag}/edit', 'TagsController@update');

Route::get('/posts', 'PostsController@index');

Route::post('/posts', 'PostsController@store');

Route::get('/posts/create', 'PostsController@create');

Route::get('/posts/{post}/edit', 'PostsController@edit');

Route::put('/posts/{post}/edit', 'PostsController@update');
