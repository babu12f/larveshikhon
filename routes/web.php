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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::post('/categories', 'CategoriesController@store');

Route::get('/categories', 'CategoriesController@index');

Route::get('/categories/create', 'CategoriesController@create');

Route::get('/categories/{category}/edit', 'CategoriesController@edit');

Route::put('/categories/{category}/edit', 'CategoriesController@update');

Route::get('/posts/create', 'PostsController@create');

Route::get('/posts', 'PostsController@index');

Route::post('/posts', 'PostsController@store');

