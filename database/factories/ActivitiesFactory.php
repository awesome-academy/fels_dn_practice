<?php

use App\Models\Activities;
use Faker\Generator as Faker;

$action = [
    'active',
    'unactive',
    'followeb',
    'follower',
];
$factory->define(Activities::class, function (Faker $faker) use ($action) {
    return [
        'user_id' => function () {
            // Get random user id
            return App\User::inRandomOrder()->first()->id;
        },
        'action_type' => $action[rand(0,3)],
        'content' => $faker->text($maxNbChars = 100),
    ];
});
