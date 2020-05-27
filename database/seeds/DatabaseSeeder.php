<?php

use Illuminate\Database\Seeder;
//use App\Model\Comment;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        factory(App\Model\Book::class, 5)->create();
        factory(App\Model\Comment::class, 10)->create();
    }
}
