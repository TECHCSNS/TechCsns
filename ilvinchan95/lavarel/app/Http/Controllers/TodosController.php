<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Todo;

class TodosController extends Controller
{
    //
    public function index(){
       
        $todos = Todo::latest('created_at')->get();
        //dd($todos);
        return view('todo.index')->with('todos',$todos);
    }
    
    public function create(Request $request){
        $todo = new Todo();
        $todo->title = $request->title;
        $todo->body = $request->body;
        $todo->save();

        return redirect('/');
    }
    public function destroy($id){
        $todo = Todo::findOrFail($id);
        $todo->delete();
        
        return  redirect('/');
    }
}
