<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boardcommentvote extends Model
{
    //
     protected $fillable =[
        'user_id',
        'comment_id',
        'vote'
        ];
        
    public function boardcomments()
    {
        return $this->belongsTo('App\Boardcomment');
    }
    
}
