<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User_profile;
use App\User;

class User_profileController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware("auth",["only" => "index"]); 
    }
    
    public function index(){
        $user = \Auth::user();
        if($user->user_id == ""){
            return view('userprofile');
        }else{
            $user_profile = $user->user_profile();
            return view('userprofile', ['user_profile' => $user_profile]);

        }
    }
    
    public function edit(Request $request){
        
        $user =\Auth::user();
        if($user->user_id == ""){
            $user_profile = new user_profile;
            $user_profile->name = $request->name;
            $user_profile->katakana_name = $request->kana;
            $time = "$request->year/$request->month/$request->day";
            $user_profile->birthday = strtotime($time);
            $user_profile->email = $user->email;
            $user_profile->save();
            
            $user->user_id = $user_profile->id;
            $user->save();
        }else{
            
        }
        return redirect('/home');
    }
}
