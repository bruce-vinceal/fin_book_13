<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $table = 'userprofile';
    protected $fillable = ['categories'];
    protected $casts = [
      'categories' => 'array',
    ];
}
