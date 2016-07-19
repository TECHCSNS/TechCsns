@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-xs-10 col-md-offset-2 col-xs-offset-1">
            <h1>New Article</h1>
                <form action="/admin" method="POST">
                    {{ csrf_field() }}
                    
                    <div class="form-group col-xs-12">
                        <label for="title" class="controll-label">タイトル</label>
                        <div>
                            <input id="title" type="text" name="title" class="form-controll">
                        </div>
                    </div>
                    
                    <div class="form-group col-xs-12">
                        <label for="body" class"controll-label">投稿内容</label>
                        
                        <div>
                            <textarea id="body" name="body" class="form-controll col-xs-8" rows="5"></textarea>
                        </div>
                    </div>
                    
                    <div class="form-group col-xs-12">
                        <button type="submit" class="btn btn-info" >Post</botton>
                    </div>
                </form>
        </div>
    </div>
</div>
@endsection