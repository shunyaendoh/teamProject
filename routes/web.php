<?php

Route::group(['middleware' => 'auth'], function () {

    // メインページ
    Route::get('/', 'IdeaController@index')->name('idea.index');            // メインページを表示
    Route::post('/create', 'IdeaController@store')->name('idea.store');     // アイデアを格納

    // プロフィール,アイデア編集,お気に入りアイデア表示ページ
    Route::get('/profile/{user_id}/{profile}', 'ProfileController@index')->name('profile.index');
    Route::post('/profile/{user_id}/{profile}', 'ProfileController@create')->name('profile.create');
    Route::get('/profile/{user_id}/{profile}', 'ProfileController@edit')->name('profile.edit');
    Route::put('/profile/{user_id}/{profile}', 'ProfileController@update')->name('profile.update');

    Route::get('/profile/{user_id}/{idea}', 'IdeaController@show')->name('idea.show');
    Route::get('/profile/{user_id}/{idea}', 'IdeaController@edit')->name('idea.edit');
    Route::put('/profile/{user_id}/{idea}', 'IdeaController@update')->name('idea.update');

    Route::get('/profile/{user_id}/{favorite}', 'FavoriteController@show')->name('favorite.show');

    // チャットページ
    ROUTE::get('/chat/{user_id}/{chat}', 'ChatController@show')->name('chat.show');
    ROUTE::post('/chat/{user_id}/{chat}', 'ChatController@create')->name('chat.create');
    ROUTE::delete('/chat/{user_id}/{chat}', 'ChatController@delete')->name('chat.delete');

    // ABOUT USページ
    ROUTE::get('/about_us', function () {
        return view('app.about_us');
    });
});

Auth::routes();
