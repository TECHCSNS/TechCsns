<?php

namespace App\Http\Controllers;

use App\Article;
use App\ArticleComment;
use Illuminate\Http\Request;
use App\Http\Requests;
//use DB;

class ArticlesController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth",["only"=>["indexAdmin","create","edit"]]);
    }
    
    
    //投稿者用
    
    
    public function indexAdmin(Request $request)
    {
        $articles = Article::where('user_id', $request->user()->id)->orderBy('created_at', 'desc')->get();
        return view('articles.admin',compact('articles'));
    }
    
    
    public function create()
    {
        return view('articles.create');
    }

    
    public function store(Request $request)
    {
        $request->user()->articles()->create([
            'title' => $request->title,
            'body' => $request->body,
        ]);
       
        return redirect('article/admin');
    }


    public function edit($id)//一覧→編集
    {
        $article = Article::findOrFail($id);
        
        return view('articles.edit', compact('article'));
    }


    public function update(Request $request, $id)//編集→編集保存
    {
        $article = Article::findOrFail($id);
        $article->title = $request->title;
        $article->body  = $request->body;
        $article->save();
 
        return redirect('article/admin');
    }

    
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
        return redirect('article/admin');
    }
    
    
    
    //閲覧者用
    
    public function index($id)
    {
        $articles = Article::where('user_id', $id)->orderBy('created_at', 'desc')->get();
        return view('articles.index', compact('articles'));
    }
    
    
    public function show(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $comments = ArticleComment::where('article_id', $request->id)->orderBy('created_at', 'desc')->get();
        return view('articles.detail', compact('article', 'comments'));
    }
}
