@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
            <p><a href="{{ url('/create') }}" class="btn btn-info">新規作成</a></p>
            
            <ul class="list-group">
                @foreach($articles as $article)
                <li class="list-group-item">
                    <div>
                        <p>{{ $article->title }}</p>
                        <p>{{ $article->created_at }}</p>
                        <p>{{ $article->updated_at }}</p>
                    
                        <form action="{{ action('ArticlesController@destroy', $article->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('delete') }}
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection