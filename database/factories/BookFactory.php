<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'description' => $faker->sentence,
        'price' => $faker->randomNumber(),
        'published_at' => $faker->dateTimeThisCentury,
        'created_by' => 1,
        'updated_by' => 1,
    ];
});
