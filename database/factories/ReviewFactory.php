<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Review;
use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {
    return [
        'comment' => $faker->sentence,
        'star' => $faker->numberBetween(1, 5),
        'created_by' => 1,
        'updated_by' => 1,
    ];
});
