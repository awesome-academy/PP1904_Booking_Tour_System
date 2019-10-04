<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Location;
use Faker\Generator as Faker;

$factory->define(Location::class, function (Faker $faker) {
    return [
        'name' => $faker->country(),
        'short_desc' => $faker->text($maxNbChars = 200),
        'content' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        'image' => $faker->imageUrl($width = 1400, $height = 933),
    ];
});
