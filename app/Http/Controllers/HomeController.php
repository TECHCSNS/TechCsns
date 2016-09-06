<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\User_profile;
use App\Follow;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware("auth",["only" => "index"]); 
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = \Auth::user();
        if($user->user_id == ""){
            return view('home');
        }else{
            $auth_user = $user->user_profile()->first()->id;
            $user_profile = $user->user_profile()->first();
        }

        return view('home', ['user_profile' => $user_profile, 'auth_user' => $auth_user]);
    }
    
    public function profile($id)
    {
        $user = \Auth::user();
        $auth_user = $user->user_profile()->first()->id;
        if($user->user_id == ""){
            return redirect('home');
        }else{
            if($id == $user->user_id){
                $user_profile = $user->user_profile()->first();
            }else{
                $user_profile = User_profile::findOrFail($id);
            }
        }
        $followFlag = Follow::where('user_id', $auth_user)->where('follow_id', $user_profile->id)->exists();
        return view('home', ['user_profile' => $user_profile, 'auth_user' => $auth_user, 'followFlag' => $followFlag]);
    }

    
     public function indexTimeLine()
    {
        return view('welcome');
    }
}
