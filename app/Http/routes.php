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
<<<<<<< HEAD

Route::get('/home', 'HomeController@index');

Route::get('/tweet', 'TweetController@index');
Route::post('/tweet', 'TweetController@post');
Route::delete('/tweet/{tweet}', 'TweetController@destroy');

Route::get('/timelime', 'TimeLineController@index');
=======
>>>>>>> b7d49d5a27a2a6ced0eaa7a22585a53a6ec26a48
