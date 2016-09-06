<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleComment extends Model
{
    protected $table = 'article_comments';
    
    protected $fillable = ['article_id', 'body'];
    
    
    /**
     * このコメントを所有するユーザーを取得
     */
    public function user()
    {
        return $this->belongsTo('User','user_id');
    }


    public function article()
    {
        return $this->belongsTo('Article','article_id');
    }
}
