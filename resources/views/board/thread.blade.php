@extends('board.default')
@section('board_content')
<div class="container">
  <div class="rows">
    <div id="mainPost">
          <h3 id="title">{{ $boards->title }}</h3>
          <p class="postSub">投稿者:<a href="#">{{ $boards->user_id}}</a><br>{{$boards->created_at}}</p>
          <h4 class="post">{{$boards->body }}</h4>
    </div>  
    
         
         @foreach($boards->boardcomments as $comments)
           <p>{{$comments->comments}} By User_Id:{{$comments->user_id}}</p> <Br>
         @endforeach
   
        <div id="postForm">
          <p>投稿</p>
          <form method="post" action="{{ url('createthreadcomment') }}">
            {{ csrf_field() }}
            <input type="hidden" name="user_id" value="{{ Auth::user()['id'] }}">
            <input type="hidden" name="board_id" value="{{ $boards->id }}">
            <textarea name="comments"></textarea>
            <button type="submit">送信</button>
          </form>
        </div>
    </div>
  </div>
</div>
@endsection