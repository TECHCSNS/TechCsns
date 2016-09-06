<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    
    protected $fillable = ['title', 'body', 'published_at'];


	public function user(){
		// 投稿は1つのユーザーに属する
		return $this->belongsTo('User','user_id');
	}
    
    public function article_comments()
    {
        return $this->hasMany(ArticleComment::class);
    }
}
