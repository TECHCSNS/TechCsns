<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;

class ArticlesController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth",["only"=>["indexAdmin","create","edit"]]);
    }
    
    
    //投稿者用
    
    
    public function indexAdmin()
    {
        $articles = Article::all();
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
       
        return redirect('/admin');
    }
    
    
    public function edit($id)//一覧→編集
    {
        //
    }


    public function update(Request $request, $id)//編集→編集保存
    {
        //
    }

    
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
        return redirect('/admin');
    }
    
    
    
    //閲覧者用
    
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }
    
    
    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.detail', compact('article'));
    }
}
