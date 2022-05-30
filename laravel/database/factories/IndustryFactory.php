<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Industry;
use Faker\Generator as Faker;

$factory->define(Industry::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
