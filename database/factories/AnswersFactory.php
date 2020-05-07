<?php

use App\Models\Answers;
use Faker\Generator as Faker;

$factory->define(Answers::class, function (Faker $faker) {
    return [
        'choice_id' => function () {
            // Get random choice id
            return App\Models\Choices::inRandomOrder()->first()->id;
        },
        'word_id' => function () {
            // Get random word id
            return App\Models\Words::inRandomOrder()->first()->id;
        },
        'lession_id' => function () {
            // Get random lession id
            return App\Models\Lessions::inRandomOrder()->first()->id;
        },
    ];
});
