<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::inRandomOrder()->take(10)->get();

        foreach ($categories as $category) {
            $category->books()->attach(\App\Models\Book::inRandomOrder()->take(3)->pluck('id'));
        }
    }
}
