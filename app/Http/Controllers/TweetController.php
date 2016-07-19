<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Tweet;

class TweetController extends Controller
{
    public function __construct()
   {
       $this->middleware("auth",["only"=>["destroy","post"]]); 
   }
    
    public function index(){
        $tweets = Tweet::latest('created_at')->get();

        return view('tweet.tweet_list', ['tweets' => $tweets,]);
    }
    
    public function post(Request $request){
        $this->validate($request, ['body' => 'required|max:200']);
        $request->user()->tweets()->create(['body' => $request->body,]);
        
        return redirect('/tweet');
    }
    
    public function destroy(Request $request, Tweet $tweet){
        
        
        $tweet->delete();
        
        return redirect('/tweet');
    }
}
