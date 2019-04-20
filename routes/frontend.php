<?php

Route::get('/', function () { return redirect('/index'); });
Route::get('/index', 'FrontEnd\FrontController@index');
Route::get('/blog', 'FrontEnd\FrontController@blog');
Route::get('/gallery', 'FrontEnd\FrontController@gallery');
Route::get('/contact', 'FrontEnd\FrontController@contact');
Route::get('/blog-detail', 'FrontEnd\FrontController@blogDetail');

Route::post('/inquiry', 'FrontEnd\FrontController@inquiry');