<?php

use App\Models\Choices;
use Faker\Generator as Faker;

$factory->define(Choices::class, function (Faker $faker) {
    return [
        'word_id' => function () {
            return App\Models\Words::inRandomOrder()->first()->id;
        },
        'content' =>$faker->text($maxNbChars = 100),
        'correct' =>rand(0,1),
    ];
});
