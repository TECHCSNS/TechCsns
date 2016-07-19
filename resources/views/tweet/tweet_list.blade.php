@extends('layouts.app')

<!-- Main Content -->
@section('content')
<link rel="stylesheet" type="text/css" href="tweet.css">
<div class="container">
    <div class="row">
        <div class="col-md-2">
            <a href="">Post</a>
        </div><!-- left -->
        <div class="col-md-8">
            @if (count($errors) > 0)
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <form class="form-horizontal" method="POST" action="{{ url('/tweet') }}">
                {{ csrf_field() }}
                <input type="text" id="body" name="body" class="form-control">
                <button type="submit" class="btn btn-default">Tweet</button>
            </form>

            <ul class="list-group">
                @foreach ($tweets as $tweet)
                <li class="list-group-item">
                    <p class="name">{{ $tweet->user_id}}</p>
                    <p class="body">{{ $tweet->body }}</p>
                    <p class="time">{{ $tweet->created_at }}</p>
                    <form action="/tweet/{{ $tweet->id }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button>Delete</button>
                    </form>
                </li><!-- list-group-item -->
                @endforeach
            </ul><!-- list-group -->
        </div><!--  -->
    </div><!-- row -->
</div><!-- container -->
@endsection