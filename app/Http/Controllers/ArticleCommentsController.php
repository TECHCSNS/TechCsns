<?php

namespace App\Http\Controllers;

use App\ArticleComment;
use Illuminate\Http\Request;
use App\Http\Requests;
//use DB;

class ArticleCommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth",["only"=>["index", "store"]]);
    }
    
    
    public function store(Request $request, $id)
    {
        $request->user()->article_comments()->create([
            'article_id' => $request->article_id,
            'body' => $request->body,
        ]);
       
        return redirect(url('article',$id));
    }


    //admin
    
    public function index(Request $request)
    {
        $comments = ArticleComment::where('article_id', $request->id)->orderBy('created_at', 'desc')->get();
        return view('articles.comments', compact('comments'));
    }
    
    
    
    public function destroy($id){
        $comment = ArticleComment::findOrFail($id);
        $comment->delete();
        return redirect(url('article/admin/comments',[$comment->article_id]));
    }
}
