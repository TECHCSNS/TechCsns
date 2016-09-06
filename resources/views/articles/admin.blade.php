@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
            <p><a href="{{ url('article/create') }}" class="btn btn-info">New Article</a></p>
            
            <ul class="list-group">
                @foreach($articles as $article)
                <li class="list-group-item">
                    <div>
                        <h4>{{ $article->title }}</h4>
                        <ul class="list-inline">
                                <li>投稿日：</li>
                                <li>{{ $article->created_at }}</li>
                        </ul>
                        <ul class="list-inline">
                                <li>更新日：</li>
                                <li>{{ $article->updated_at }}</li>
                        </ul>
                    
                        <ul class="list-inline">
                            
                            <li>
                                <a href="{{ url('article/admin/comments', $article->id) }}" class="btn btn-success">Comments</a>
                            </li>
                            
                            <li>
                                <a href="{{ url('article/edit', $article->id) }}" class="btn btn-info">Edit</a>
                            </li>
                            
                            <li>
                                <form action="{{ action('ArticlesController@destroy', $article->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('delete') }}
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </li>
                        </ul>
                    
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection