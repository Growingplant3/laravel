<?php

Auth::routes(); //-- この行を追加
Route::get('/', 'ArticleController@index');
