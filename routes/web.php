<?php

//このコントローラーのこのメソッド使いますよっていうやつ

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

Route::get('/profile', 'ProfileController@index')->name('profile.index');

Route::get('/profile/create', 'ProfileController@create')->name('profile.create');

Route::get('/profile/edit', 'ProfileController@edit')->name('profile.edit');


Route::get('/idea', 'IdeaController@index')->name('idea.index');

Route::get('/idea/create', 'IdeaController@create')->name('idea.create');



