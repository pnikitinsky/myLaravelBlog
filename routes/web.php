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

Route::get('contact', 'PagesController@contact');
Route::get('about',  'PagesController@about');
Route::get('home',  'PagesController@index');
Route::get('/',  'PagesController@index');

Route::resource('posts', 'PostController');