<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Board;
use App\User;
use App\Userprofile;
use App\Boardcomment;

class board_controller extends Controller
{
    //
    public function index(){
        $boards = Board::all();
        $boardcomments =Boardcomment::find(1);
        //return $boardcomments;
        return view('board.board')->with('boards',$boards);
        
    }

     public function storethread(Request $request){
        $boards = new Board();
        $boards->user_id = $request->user_id;
        $boards->title = $request->title;
        $boards->body = $request->body;
        $boards->save();
        return redirect('/board');
    }
    
    public function showthread($id){
        $boards = Board::findOrFail($id);
        return view('board.thread')->with('boards',$boards);
        //return $boards;
    }
    
    public function createthreadcomment(Request $request){
        $boardcomment = new Boardcomment($request->all());
        $boardcomment->save();
        return back()->withInput();
    }
}
