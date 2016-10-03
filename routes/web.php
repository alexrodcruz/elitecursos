<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


//FRONTEND
Route::get('/', 'siteController@index');
Route::get('/contato', 'siteController@contato');
Route::get('/depoimentos', 'siteController@depoimentos');
Route::get('/professores', 'siteController@professores');
Route::get('/institucional', 'siteController@institucional');


//BACKEND
Route::get('/interno', 'internoController@index');



Auth::routes();

Route::get('/home', 'HomeController@index');
