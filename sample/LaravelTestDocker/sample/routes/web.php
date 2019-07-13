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
   return view('home');
});

Route::get('/usere', 'usereController@index');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'PostsController@index')->name('top');
Route::resource('posts', 'PostsController', ['only' => ['create', 'store']]);

Route::resource('comments', 'CommentsController', ['only' => ['store']]);


Route::resource('posts', 'PostsController', ['only' => ['create', 'store', 'show', 'edit', 'update', 'destroy','like']]);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/posts/{post}/likes', 'LikesController@store');
  Route::post('/posts/{post}/likes/{like}', 'LikesController@destroy');
