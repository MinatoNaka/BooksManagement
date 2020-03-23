<?php

use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Book::class, 30)
            ->make()
            ->each(function ($book) {
                $author = \App\Models\User::inRandomOrder()->first();
                $author->books()->save($book);
            });
    }
}
