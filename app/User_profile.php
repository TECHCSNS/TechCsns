<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_profile extends Model
{
    //
    protected $table = 'user_profiles';
    protected $fillable = [
        'id',
        'permission_id',
        'name',
        'katakana_name',
        'birthday',
        'profile_img_path',
        'email',
    ];
    
    public function user()
    {
        return $this->hasOne('App\User', 'user_id');
    }
    
    // フォローしているユーザ一覧を取得する
    public function followUsers()
    {
        return $this->belongsToMany('User_profile', 'follows', 'user_id', 'follow_id')
            ->withTimestamps();
    }
    // フォローされているユーザ一覧を取得する
    public function followedUsers()
    {
        return $this->belongsToMany('User_profile', 'follows', 'user_id', 'follow_id')
            ->withTimstamps();
    }

}
