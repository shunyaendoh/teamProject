<?php

Route::group(['middleware' => 'auth'], function () {

    // メインページ
    Route::get('/', 'IdeaController@index')->name('idea.index');

    // アイデア投稿ページ
    Route::get('/idea/create', 'IdeaController@create')->name('idea.create');
    Route::post('/idea/create', 'IdeaController@store')->name('idea.store');

    // お気に入りページ
    Route::post('/idea/like/{idea}', 'FavoriteController@like');
    Route::post('/idea/dislike/{idea}', 'FavoriteController@dislike');

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
    Route::get('/chat/{user}', 'ChatController@index')->name('chat.index');              // チャット一覧( 自分のuer_id )
    Route::get('/chat/{user}/{chat}', 'ChatController@show')->name('chat.show');              // 送信先のuser_id
    Route::post('/chat/{user}/{chat}', 'ChatController@create')->name('chat.create');
    Route::delete('/chat/{user}/{chat}', 'ChatController@delete')->name('chat.delete');

    // ABOUT USページ
    Route::get('/about_us', function () {
        return view('app.about_us');
    })->name('about_us');

    Route::get('/chatbox', 'ChatkitController@index');
    Route::post('/chatjoin', 'ChatkitController@join')->name('chat.join');
    Route::get('chat', 'ChatkitController@chat')->name('chat');
    Route::post('logout', 'ChatkitController@logout')->name('logout');
});

Auth::routes();

// テスト用

Route::view('/main', 'app.profile_edit');
