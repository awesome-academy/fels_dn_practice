<?php
use App\Models\Category;
use Faker\Generator as Faker;

$titles = [
    'Nature',
    'Human',
    'Relationships',
    'Daily life',
    'Things around',
    'Work',
    'Art',
    'Media',
    'Animals',
    'Colors',
    'History',
];

$factory->define(Category::class, function (Faker $faker) use ($titles) {
    return [
        'title' => $titles[rand(0,10)],
        'desc' => $faker->text($maxNbChars = 100),
    ];
});
