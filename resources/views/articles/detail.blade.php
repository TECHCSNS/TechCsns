@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="css/article.css">

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
            <!-- entry_inner -->
            <div class="panel panel-default entry_inner">
                
                <!-- entry_header -->
                <header class="panel-heading">
                
                    <h1 class="entry_title">{{ $article->title }}</h1>
                
                    <div class="date">
                        <div class="entry_date">
                            <ul class="list-inline">
                                <li>投稿日：</li>
                                <li>{{ $article->created_at }}</li>
                            </ul>
                        </div>
                        <div class="up_date">
                            <ul class="list-inline">
                                <li>更新日：</li>
                                <li>{{ $article->updated_at }}</li>
                            </ul>
                        </div>
                    </div>
                
                </header>
                <!-- end entry_header -->
                        
                <!-- entry_content -->
                <div class="panel-body word-wrap">

                    {!! nl2br(e($article->body)) !!}
                </div>
                <!-- end entry_content -->
                
            </div>
            <!-- entry_inner -->
            
            
            <!-- paging -->
            <ul class="pagination">
                <li><a href="#">PREV</a></li>
                <li><a href="#">NEXT</a></li>
            </ul>
            <!-- end paging -->
            
            <!-- comment -->
            <div class="comment">
                <p class="comment_num"></p>
                <p class="comment_body"></p>
                <p class="comment_author"></p>
            </div>
            <!-- end comment -->
        </div>
    </div>
</div>

@endsection