@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
            <h1>記事一覧</h1>
            
            <ul class="list-group col-">
                @foreach($articles as $article)
                <li class="list-group-item">
                    <div>
                        <h2><a href="{{ url('/', $article->id) }}">{{ $article->title }}</a></h2>
                        <ul class="list-inline">
                                <li>投稿日：</li>
                                <li>{{ $article->created_at }}</li>
                        </ul>
                        <ul class="list-inline">
                                <li>更新日：</li>
                                <li>{{ $article->updated_at }}</li>
                        </ul>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection