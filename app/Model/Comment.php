<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Book;

class Comment extends Model
{
    public function book(){
        return $this->belongsTo(Book::class);
    }
}
