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

Route::get('/', function () {
	return view('welcome');
});
Route::get('test','ArticlesController@index');

Route::auth();

Route::get('/home', 'HomeController@index');



Route::get('/board','board_controller@index');