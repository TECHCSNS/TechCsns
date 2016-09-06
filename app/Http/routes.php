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
Route::get('/home/{id}', 'HomeController@profile');

					 
Route::get('test','ArticlesController@index');

Route::auth();
//userprofile
Route::get('/userprofile', 'User_profileController@index');
Route::post('/userprofile', 'User_profileController@edit');
//userprofile-end

//follow
Route::post('follow', 'FollowController@follow');
Route::post('unfollow', 'FollowController@unfollow');
//follow-end

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

Route::get('/board','board_controller@index');

Route::get('/newthread','board_controller@newthreadindex');

Route::post('/storethread','board_controller@storethread');

Route::post('/createthreadcomment','board_controller@createthreadcomment');

Route::get('/board/{id}','board_controller@showthread');

Route::post('/comments/{id}/storevote','board_controller@storevote');

Route::get('/like','board_controller@likecomment');
<<<<<<< HEAD

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

Route::get('/admin','ArticlesController@indexAdmin');
Route::get('/create','ArticlesController@create');
Route::post('/create','ArticlesController@store');
Route::get('/index','ArticlesController@index');
Route::delete('/destroy/{id}','ArticlesController@destroy');
Route::get('/{id}','ArticlesController@show');

=======
>>>>>>> parent of 833cc92... update
