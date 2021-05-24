<?php

Auth::routes();

Route::get('/', 'SpringsController@main')->name('main');

Route::get('/main', 'SpringsController@main')->name('main');

Route::get('/add', 'SpringsController@add')->name('add');
Route::post('/create', 'SpringsController@create')->name('create');

Route::get('/map', 'SpringsController@map')->name('map');

Route::get('/faq', 'SpringsController@faq')->name('faq');

Route::get('spring/{id}', 'SpringsController@spring')->name('spring');

Route::get('/profile', 'SpringsController@profile')->name('profile');
Route::post('/profile/update', 'SpringsController@update')->name('update');
