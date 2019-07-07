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

Route::get('/', 'PagesController@getIndex');

Route::get('/contact', 'PagesController@getContact');

Route::get('/about', 'PagesController@getAbout');

Route::get('/blog', 'BlogController@getPosts');

Route::get('/blog/{slug}', 'BlogController@getSingle')->name('blog.single')->where('slug','[\w\d\-\_]+');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('posts','PostController');
