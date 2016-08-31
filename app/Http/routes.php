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

Route::auth();

Route::get('article/admin','ArticlesController@indexAdmin');
Route::get('article/create','ArticlesController@create');
Route::post('article/create','ArticlesController@store');
Route::get('article/edit/{id}', 'ArticlesController@edit');
Route::patch('article/edit/{id}', 'ArticlesController@update');
Route::delete('article/destroy/{id}','ArticlesController@destroy');

Route::get('article/index/{id}','ArticlesController@index');
Route::get('article/{id}','ArticlesController@show');

Route::get('article/admin/comments/{id}','ArticleCommentsController@index');
Route::post('article/comment/create/{id}','ArticleCommentsController@store');
Route::delete('article/comment/destroy/{id}','ArticleCommentsController@destroy');

Route::get('/home', 'HomeController@index');
