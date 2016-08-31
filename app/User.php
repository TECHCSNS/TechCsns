<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    
     /**
     * ユーザーのポストを取得
     */
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
    
    
    /**
     * ユーザーのコメントを取得
     */
    public function article_comments()
    {
        return $this->hasMany(ArticleComment::class);
    }
}
