<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    //
    protected $table = 'follows';

    protected $primaryKey = ['user_id', 'follow_id'];
    public $incrementing = false;

    protected $fillable = ['user_id', 'follow_id'];
}
