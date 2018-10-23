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

Route::post('user/create', 'RegisterController@create');

Route::resource('/posts', 'PostController');
Route::post('/posts/store', 'PostController@store')->name('posts.store');
Route::post('/posts/create', 'PostController@create');
Route::get('posts/{id}/show', 'PostController@show');
Route::get('posts/{id}/edit', 'PostController@edit');
Route::put('posts/{id}/update', 'PostController@update');

Route::get('blog', function(){
  $posts = DB::table('posts')
        ->orderBy('created_at', 'desc')
        ->limit(4)
        ->get();
  return view('pages.blog', ['posts'=>$posts]);
});

Route::get('/blog/{slug}')->name('blog.single')->uses('BlogController@getSingle');
// ->where("/^[a-zA-Z0-9-_]+$/");
