<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boardcomment extends Model
{
    //
     protected $fillable =[
        'user_id',
        'board_id',
        'comments'
        ];
        
    public function board()
    {
        return $this->hasOne('App\Board');
    }
    public function boardcommentvote()
    {
        return $this->hasMany('App\Boardcommentvote');
    }
    
   
}
