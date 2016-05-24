<h1>todo index</h1>


<form action="{{action('TodosController@create')}}" method="post">
    {{ csrf_field() }}
    タイトル：<input type="text" name="title" placeholder="タイトル"/> <br />
    内容：<input type="text" name="body" placeholder="内容"/> <br />
    <input type="submit" name="" value="追加"/>
</form>

@forelse($todos as $todo)
        <li>
            <h3>{{ $todo->title }}</h3>
            <p>
               <form action="{{ action('TodosController@destroy', $todo->id) }}" method="post" style="display:inline">
                    {{ $todo->body }}
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                    <input type="submit" name="" value="complete!!"/>
                </form>
            </p>
        </li>
      @empty
      <li>No posts yet</li>
@endforelse