<?php

Route::get('/', 'PagesController@index')->middleware('logincheck');;
//Route::get('/about', 'PagesController@about');
//Route::get('/services', 'PagesController@services');
Route::get('localization/{locale}', 'PagesController@changeLang');
Route::get('admin', 'PagesController@showAdmin');
Route::resource('posts', 'PostsController');
Auth::routes();
Route::get('/dashboard', 'DashboardController@index');
