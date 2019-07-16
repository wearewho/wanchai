<?php

Route::get('/', function () { return redirect('/index'); });
Route::get('/index', 'FrontEnd\FrontController@index');
Route::get('/blog', 'FrontEnd\FrontController@blog');
Route::get('/about', 'FrontEnd\FrontController@about');
Route::get('/work', 'FrontEnd\FrontController@work');
Route::get('/service', 'FrontEnd\FrontController@service');
Route::get('/contact', 'FrontEnd\FrontController@contact');
Route::get('/blog-detail/{id}', 'FrontEnd\FrontController@blogDetail')->name('blog-detail');