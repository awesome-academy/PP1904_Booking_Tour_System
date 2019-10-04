<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Blog;
use Faker\Generator as Faker;

$factory->define(Blog::class, function (Faker $faker) {
    return [
        'user_id' => '1',
        'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'short_desc' => $faker->text($maxNbChars = 200),
        'content' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        'image' => $faker->imageUrl($width = 1400, $height = 729),
    ];
});
