@extends('board.default')
@section('board_content')
<div class="container">
  <div class="rows">
    <ul class="nav nav-tabs col-xs-12">
      <li class="active"><a href="{{ url('board') }}">注目</a></li>
      <li><a href="boardTop.html">トップ</a></li>
      <li><a href="boardNew.html">新着</a></li>
      <a href="{{  url('newthread') }}" class="btn btn-info pull-right">投稿する</a>
    </ul>
    <div id="threadList col-xs-12">
    @foreach($boards as $board) 
      <div class="thread clearfix">
        <div class="vote col-xs-1  text-center">
          <p class="up">↑</p>
          <p class="score">1000</p>
          <p class="down">↓</p>
        </div>
        <div class="threadInfo col-xs-11">
          <p  class="title"><a href="thread.html">{{ $board->title }}</a></p>
          <p class="prv">{{ $board->body }}</p>
          <p class="threadSub">コメント：0  <a href="#" class="contributor">{{ $board->user_id }}</a>2016/01/01 00:00</p>
          <p class="threadSub tag">タグ</p>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection