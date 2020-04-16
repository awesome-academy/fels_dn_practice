<?php
use App\Models\Lessions;
use Faker\Generator as Faker;

$factory->define(Lessions::class, function (Faker $faker) {
    return [
        'category_id' => function () {
            // Get random category id
            return App\Models\Category::inRandomOrder()->first()->id;
        },
        'user_id' => function () {
            // Get random user id
            return App\User::inRandomOrder()->first()->id;
        },
        'result' =>$faker->word,
    ];
});
