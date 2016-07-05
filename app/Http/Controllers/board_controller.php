<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Board;

class board_controller extends Controller
{
    //
    public function index(){
        $boards = Board::all();
        return view('board',['boards'=>  $boards]);
        
    }
}
