<?php

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::get('localization/{locale}', 'PagesController@changeLang');
Route::resource('posts', 'PostsController');
Auth::routes();
Route::get('/dashboard', 'DashboardController@index');
