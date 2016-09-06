@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
            <h2>Comments List</h2>
            
            <ul class="list-group">
                @foreach($comments as $comment)
                <li class="list-group-item">
                    <div>
                        <p>{{ $comment->body }}</p>
                        <p>{{ $comment->created_at }}</p>
                    
                        <ul class="list-inline">
                            <li>
                                <form action="{{ action('ArticleCommentsController@destroy', $comment->id) }}" method="POST">
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