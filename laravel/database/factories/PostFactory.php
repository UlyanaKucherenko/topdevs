<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Post::class, function (Faker $faker) {
    $title = $faker->words(5, true);
    return [
        'title' => $title,
        'slug' => Str::slug((string)$title),
        'description' => $faker->realText(1000),
        'short_description' => $faker->realText(150),
        'meta_title' => $faker->words(5, true),
        'meta_description' => $faker->realText(150),
        'keywords' => $faker->words(10, true),
        'read_time' => '10 minutes',
        'is_show_to_main_page' => $faker->numberBetween(0, 1),
    ];
});
