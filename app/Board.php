<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    //
    protected $fillable =[
        'user_id',
        'title',
        'body'
        ];
        
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function boardcomments()
    {
        //return Boardcomment::where('board_id',$this->id)->first->comments;
        return $this->hasMany('App\Boardcomment');
    }
}
