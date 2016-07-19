<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_profile extends Model
{
    protected $fillable = [
        'id',
        'permission_id',
        'name',
        'katakana_name',
        'birthday',
        'profile_img_path',
        'email',
    ];
  
    
}
