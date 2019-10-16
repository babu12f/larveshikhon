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
Route::get('/pdf', 'HomeController@genReport');

Route::get('/profile', 'ProfileController@profile');

Route::get('/profile/edit', 'ProfileController@edit');

Route::post('/profile/edit', 'ProfileController@update');

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

Route::get('/posts', 'PostsController@index')->middleware('admin');

Route::get('/posts/create', 'PostsController@create')->middleware('admin');

Route::post('/posts', 'PostsController@store')->middleware('admin');

Route::get('/posts/{post}', 'HomeController@show');

Route::post('/posts/{post}/comments', 'CommentsController@store')->middleware('auth');

Route::get('/posts/{category}/category', 'SearchController@searchPostByCategory');

Route::get('/posts/{tag}/tag', 'SearchController@searchPostByTag')->name('search.tag');

Route::get('/posts/{post}/liked', 'CommentsController@storeLike')->middleware('auth');

Route::get('/comments/{comment}/liked', 'CommentsController@storeCommentLike')->middleware('auth');

Route::get('/posts/{post}/edit', 'PostsController@edit')->middleware('admin');

Route::put('/posts/{post}/edit', 'PostsController@update')->middleware('admin');

Route::get('/posts/{post}/approve', 'PostsController@approve')->middleware('admin');

Route::get('/users', 'UsersController@index')->middleware('admin');