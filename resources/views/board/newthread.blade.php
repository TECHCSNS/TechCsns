@extends('board.default')
@section('board_content')
<div class="container">
  <div class="rows">
        <div id="title">
          <h2>新規投稿</h2>
        </div>
        
         
          <form action="{{ url('storethread') }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="user_id" value="{{ Auth::user()['id'] }}">
            <p>タイトル</p><p><input type="text" name="title"></p>
            <p>本文</p><p><textarea name="body"></textarea></p>
            <p>タグ</p><p><input type="text"></p>
            <p><button type="submit">送信</button></p>
          </form>
          
      </div>
</div>
@endsection
