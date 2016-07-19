@extends('board.default')
@section('board_content')
<div class="container">
  <div class="rows">
    <div id="mainPost">
          <h3 id="title">{{ $boards->title }}</h3>
          <p class="postSub">投稿者:<a href="#">{{ $boards->user_id}}</a><br>{{$boards->created_at}}</p>
          <h4 class="post">{{$boards->body }}</h4>
    </div>  
    
         <?php $a=0; ?>
         
         @foreach($boards->boardcomments as $comments)
            <?php $a = $a +1; ?>
           <p>No: {{$a}}By User_Id:{{$comments->user_id}} </br>
             {{$comments->comments}}
             </p>
             <form method="post" action="/comments/{{$comments->id}}/storevote">
               {{csrf_field()}}
               <input type="hidden" name="user_id" value="{{ Auth::user()['id'] }}">
               <input type="hidden" name="boardcomment_id" value="{{ $boards->id }}">
               <input type="hidden" name="vote" value="">
                <button>Like</button>
                  
                    
               <?php $votes=0; ?>
               @foreach($comments->boardcommentvote as $vote)
                    <?php $votes = $votes +1; ?>
                   
               @endforeach
               
               {{ $votes }}Like
             </form>
         @endforeach
               
               
   
        <div id="postForm">
          <p>投稿</p>
          <form method="post" action="{{ url('createthreadcomment') }}">
            {{ csrf_field() }}
            <input type="hidden" name="user_id" value="{{ Auth::user()['id'] }}">
            <input type="hidden" name="board_id" value="{{ $boards->id }}">
            <textarea name="comments" required></textarea>
            <button type="submit">送信</button>
          </form>
        </div>
    </div>
  </div>
</div>
@endsection