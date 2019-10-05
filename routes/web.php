<?php

Route::group(['middleware' => 'auth'], function () {

    // メインページ
    Route::get('/', 'IdeaController@index')->name('idea.index');

    // アイデア投稿ページ
    Route::get('/create', 'IdeaController@create')->name('idea.create');
    Route::post('/create', 'IdeaController@store')->name('idea.store');

    // プロフィール,アイデア,お気に入りアイデア表示ページ
    Route::get('/profile/{user}', 'ProfileController@index')->name('profile.index');

    // プロフィール編集ページ
    Route::get('/profile/edit/{user}', 'ProfileController@edit')->name('profile.edit');
    Route::put('/profile/update/{user}', 'ProfileController@update')->name('profile.update');

    // アイデア編集ページ
    Route::get('/profile/edit/{idea}', 'IdeaController@edit')->name('idea.edit');
    Route::put('/profile/update/{idea}', 'IdeaController@update')->name('idea.update');

    // チャットページ
    ROUTE::get('/chat/{user}/{chat}', 'ChatController@show')->name('chat.show');              // 送信先のuser_id
    ROUTE::post('/chat/{user}/{chat}', 'ChatController@create')->name('chat.create');
    ROUTE::delete('/chat/{user}/{chat}', 'ChatController@delete')->name('chat.delete');

    // ABOUT USページ
    ROUTE::get('/about_us', function () {
        return view('app.about_us');
    });
});

Auth::routes();

// テスト用

Route::view('/main', 'app.index');
