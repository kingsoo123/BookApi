<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Comment;

class Book extends Model
{
    public function comment(){
         return $this->hasMany(Comment::class);
    }
}
