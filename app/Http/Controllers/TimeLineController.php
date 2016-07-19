<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TimeLineController extends Controller
{
    //
    public function index(){
        return view('timeline');
    }
}
