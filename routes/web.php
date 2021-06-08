<?php

Auth::routes(); //-- この行を追加
Route::get('/', 'ArticleController@index')->name('articles.index'); //-- この行を編集
Route::resource('/articles', 'ArticleController')->except(['index']); //-- この行を編集