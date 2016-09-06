@extends('layouts.app')

@section('content')
<link href="{{{asset('/assets/css/article.css')}}}" rel="stylesheet">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-xs-10 col-md-offset-2 col-xs-offset-1">
            <h1>Edit</h1>
                <form action="{{ url('article/edit', $article->id) }}" method="POST">
                    
                    {{ csrf_field() }}
                    {{ method_field('patch') }}
                    
                    <div class="form-group col-xs-12">
                        <label for="title" class="controll-label">タイトル</label>
                        <div>
                            <input id="title" type="text" name="title" class="form-controll" value="{{ old('title',$article->title) }}">
                        </div>
                    </div>
                    
                    <div class="form-group col-xs-12">
                        <label for="body" class"controll-label">投稿内容</label>
                        
                        <div class="post_content">
                            <textarea id="body" name="body" class="form-controll col-xs-8" rows="5">{{ old('body',$article->body) }}</textarea>
                        </div>
                    </div>
                    
                    <div class="form-group col-xs-12">
                        <button type="submit" class="btn btn-info" >UpDate</botton>
                    </div>
                </form>
        </div>
    </div>
</div>
@endsection