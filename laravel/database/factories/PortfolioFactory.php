<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Portfolio;
use Faker\Generator as Faker;

$factory->define(Portfolio::class, function (Faker $faker) {
    return [
        'title' => $faker->catchPhrase,
        'description' => $faker->realText(100),
        'sub_title' => $faker->realText(20),
        'background_color' => $faker->hexColor,
        'link' => $faker->url,
    ];
});
