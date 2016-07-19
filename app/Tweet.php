<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    //
    protected $table = 'tweets';
    protected $fillable = ['body'];
    
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
