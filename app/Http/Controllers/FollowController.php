<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Follow;

class FollowController extends Controller
{
    //
    public function follow(Request $request){
        $follow = Follow::create(['user_id' => $request->user_id, 'follow_id' => $request->follow_id]);
        return redirect()->back();
    }
    
    public function unfollow(Request $request){
        $unfollow = Follow::where('user_id', $request->user_id)->where('follow_id', $request->follow_id)->delete();
        return redirect()->back();
    }
}
