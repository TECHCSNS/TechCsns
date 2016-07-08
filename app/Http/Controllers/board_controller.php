<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Board;
use App\User;

class board_controller extends Controller
{
    //
    public function index(){
        $boards = Board::all();
        return view('board.board',['boards'=>  $boards]);
        
    }

    
     public function create(Request $request){
        $boards = new Board();
        $boards->title = $request->title;
        $boards->body = $request->body;
        $boards->user_id = $request->user_id;
        $boards->save();
        return redirect('board');
    }
}
