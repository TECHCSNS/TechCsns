<form action="{{action('TodosController@create')}}" method="post">
    {{ csrf_field() }}
    タイトル：<input type="text" name="title" placeholder="タイトル"/> <br />
    内容：<input type="text" name="body" placeholder="内容"/> <br />
    <input type="submit" name="" value="追加"/>
</form>