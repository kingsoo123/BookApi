<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Comment;
use App\Model\Book;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'book_id'=> function(){
            return Book::all()->random();
        },
        'comment'=>$faker->sentence
    ];
});
