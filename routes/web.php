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

Route::get('/', 'PagesController@getHome');

Route::get('/about', 'PagesController@getAbout');

Route::get('/contact', 'PagesController@getContact');

Route::get('/merch', 'PagesController@getMerch');

Route::get('/photos', 'PagesController@getPhotos');

Route::get('/press', 'PagesController@getPress');

Route::get('/blog', 'PagesController@getBlog');

Route::get('/posts/show', 'PostController@show');

Route::resource('/posts', 'PostController');
Route::post('/posts/store', 'PostController@store');
Route::post('/posts/create', 'PostController@create');
