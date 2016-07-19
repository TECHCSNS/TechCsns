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
Route::get('test',function(){
return Input::all();
});

Route::auth();

Route::get('/home', 'HomeController@index');

//////////////////////////////////////////test
Route::get('/test', function(){
   return \Auth::user(); 
});
//////////////////////////////////////////board

Route::get('/board','board_controller@index');

Route::get('/newthread','board_controller@newthreadindex');

Route::post('/storethread','board_controller@storethread');

Route::post('/createthreadcomment','board_controller@createthreadcomment');

Route::get('/board/{id}','board_controller@showthread');

Route::post('/comments/{id}/storevote','board_controller@storevote');

Route::get('/like','board_controller@likecomment');