<?php

Route::group(['middleware' => 'auth'], function () {

    // メインページ
    Route::get('/', 'IdeaController@index')->name('idea.index');

    // アイデア投稿ページ
    Route::get('/idea/create', 'IdeaController@create')->name('idea.create');
    Route::post('/idea/create', 'IdeaController@store')->name('idea.store');

    // プロフィール投稿ページ
    Route::get('/profile/create/{user}', 'ProfileController@create')->name('profile.create');
    Route::post('/profile/create/{user}', 'ProfileController@store')->name('profile.store');

    // プロフィール,アイデア,お気に入りアイデア表示ページ
    Route::get('/profile/{user}', 'ProfileController@index')->name('profile.index');

    // プロフィール編集ページ
    Route::get('/profile/edit/{user}', 'ProfileController@edit')->name('profile.edit');
    Route::put('/profile/update/{user}', 'ProfileController@update')->name('profile.update');

    // アイデア編集ページ
    Route::get('/idea/edit/{idea}', 'IdeaController@edit')->name('idea.edit');
    Route::put('/idea/update/{idea}', 'IdeaController@update')->name('idea.update');

    // チャットページ
    ROUTE::get('/chat/{user}/{chat}', 'ChatController@show')->name('chat.show');
    ROUTE::post('/chat/{user}/{chat}', 'ChatController@create')->name('chat.create');
    ROUTE::delete('/chat/{user}/{chat}', 'ChatController@delete')->name('chat.delete');

    // ABOUT USページ
    ROUTE::get('/about_us', function () {
        return view('app.about_us');
    });
});

Auth::routes();

// テスト用

Route::view('/profile_edit', 'app.profile_edit');


// Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/profile', 'ProfileController@index')->name('profile.index');

// Route::get('/profile/create', 'ProfileController@create')->name('profile.create');

// Route::get('/profile/edit', 'ProfileController@edit')->name('profile.edit');


// Route::get('/idea', 'IdeaController@index')->name('idea.index');

// Route::get('/idea/create', 'IdeaController@create')->name('idea.create');



