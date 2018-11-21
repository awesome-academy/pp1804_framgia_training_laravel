<?php

namespace App\Models;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
      protected $guard = ['id'];
    
    public function comments() 
    {
        return $this->hasMany(Comment::class, 'post_id');
    }
}
