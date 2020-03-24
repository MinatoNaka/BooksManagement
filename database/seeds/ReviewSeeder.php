<?php

use App\Models\Review;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run()
    {
        $books = \App\Models\Book::all();

        foreach ($books as $book) {
            $reviewCount = random_int(0, 5);

            $book->reviews()->saveMany(
                factory(Review::class, $reviewCount)
                    ->make()
                    ->each(function ($review) {
                        $review->reviewer_id = \App\Models\User::inRandomOrder()->first()->id;
                    })
            );
        }
    }
}
