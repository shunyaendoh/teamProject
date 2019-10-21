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

    // ABOUT USページ
    Route::get('/about_us', function () {
        return view('app.about_us');
    })->name('about_us');

    Route::post('/thankyou', 'ContactController@complete')->name('contact.complete');


});

Auth::routes();

// テスト用

Route::view('/main', 'app.profile_edit');

//Logged In User    
Route::group(['middleware' => 'auth'],function(){

    Route::get('/checkConvo/{recieverId}', 'Message_UsersController@check');
    Route::post('/sendMessage', 'MessagesController@store')->name('sendMessage');

    Route::get('/loadMessage/{reciever}/{sender}', 'MessagesController@load');

    Route::get('/retrieveMessages/{reciever}/{sender}/{lastMsgId}','MessagesController@retrieveNew');

});

Route::get('/chat', 'ChatController@index')->name('chat.index');

