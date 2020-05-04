<?php

use Faker\Generator as Faker;
use App\Models\Words;

$factory->define(Words::class, function (Faker $faker) {
    return [
        // Get random category id
        'category_id' => function () {
            return App\Models\Category::inRandomOrder()->first()->id;
        },
        'content' =>$faker->text($maxNbChars = 100),
        'name' => $faker->word,
    ];
});
