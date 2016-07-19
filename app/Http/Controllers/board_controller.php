<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Board;
use App\User;
use App\Boardcomment;
use App\Boardcommentvote; 

class board_controller extends Controller
{
    //
    public function __construct()
    {
       $this->middleware("auth" , [ "only" => [ "index","showthread","newthreadindex","storethread","createthreadcomment" ,"storevote"] ]); 
    }
    public function index()
    {
        $boards = Board::all();
        //$boardcomments =Boardcomment::find(1);
        //return $boardcomments;
        return view('board.board')->with('boards',$boards);
        
    }
    
    public function newthreadindex()
    {
        return view('board.newthread');
    }

    public function showthread($id)
    {
        $boards = Board::findOrFail($id);
        return view('board.thread')->with('boards',$boards);
        //return $boards->boardcommentvote;
    }
    
    public function storethread(Request $request)
    {
        $boards = new Board($request->all());
        $boards->save();
        return redirect('/board');
    }
    
    public function createthreadcomment(Request $request)
    {
        $boardcomment = new Boardcomment($request->all());
        $boardcomment->save();
        return back()->withInput();
    }
    
    public function storevote($id,Request $request )
    {
        $boardcommentvote = new Boardcommentvote($request->all());
       
        $boardcommentvote->vote = 1; 
        $boardcommentvote->boardcomment_id = $id;
        $boardcommentvote->save();
        return back();
    }

}
