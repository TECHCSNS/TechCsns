<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//migrate --force

Route::get('/', 'HomeController@indexTimeLine');

Route::get('/home', 'HomeController@index');
					 
Route::get('test','ArticlesController@index');

Route::auth();

Route::get('/admin','ArticlesController@indexAdmin');
Route::get('/create','ArticlesController@create');
Route::post('/admin','ArticlesController@store');
Route::delete('/{id}','ArticlesController@destroy');

Route::get('/index','ArticlesController@index');
Route::get('/{id}','ArticlesController@show');

Route::get('/tweet', 'TweetController@index');

Route::post('/tweet', 'TweetController@post');

Route::delete('/tweet/{tweet}', 'TweetController@destroy');

Route::get('/timelime', 'TimeLineController@index');
