<?php

Route::get('/', function () { return redirect('/index'); });
Route::get('/index', 'FrontEnd\FrontController@index');
Route::get('/blog', 'FrontEnd\FrontController@blog');
Route::get('/about', 'FrontEnd\FrontController@about');
Route::get('/work', 'FrontEnd\FrontController@work')->name('work');
Route::post('/store_work', 'FrontEnd\FrontController@store_work')->name('store_work');
Route::post('/store_contactmessage', 'FrontEnd\FrontController@store_contactmessage')->name('store_contactmessage');
Route::get('/service', 'FrontEnd\FrontController@service');
Route::get('/contact', 'FrontEnd\FrontController@contact')->name('contact');
Route::get('/blog-detail/{id}', 'FrontEnd\FrontController@blogDetail')->name('blog-detail');