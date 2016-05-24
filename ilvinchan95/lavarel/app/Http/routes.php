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
////////////////////////////////SignUp or Register
Route::get('signup',function(){
  return view('auth.signup');  
});
////////////////////////////////Signout
Route::get('logout',function(){
  return view('auth.logout');  
});
////////////////////////////////Signin
Route::get('signin',function(){
  return view('auth.signin');  
});

////////////////////////////////return to home
Route::get('/',function(){
   return view('home'); 
});


//////////////////////////////////////////////////////////////////
Route::get('register',function(){
   return view('register'); 
});
Route::post('/todo','TodosController@create');
Route::delete('/todos/{id}','TodosController@destroy');