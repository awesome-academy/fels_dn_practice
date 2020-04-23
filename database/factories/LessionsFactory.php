<?php
use App\Models\Lessions;
use Faker\Generator as Faker;

$lessions = [
    'Catching Up with an Old Friend',
    'Meeting an Old Friend',
    'Gossip',
    'The Old Days',
    'Office Rumor',
    'Introducing Two People',
    'Art',
    'Media',
    'A Ride to the Airport',
    'Talking to Hotel Staff',
    'Noisy Neighbor',
    'A Terrible Hotel',
    'Dry Cleaning Emergency',
    'Making an Appointment',
    'Medical Emergency',
    'Noisy Neighbor',
    'Wrong Flowers',
    'Having a Chat',
    'Catching Up with an Old ',
    'Vocabulary Profilers to Analyze Texts Effectively',
    '6 Innovations in English Language Teaching',
];
$factory->define(Lessions::class, function (Faker $faker) use ($lessions) {
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
        'name' => $lessions[rand(0,19)],
    ];
});
