<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Review;

$factory->define(Review::class, function () {
    return [
        'customer_name' => 'John Civijovski',
        'country' => 'au',
        'customer_position' => 'Director - Civi Corp Pty Limited (AU)',
        'link' => null,
        'text' => "I've worked with TopDevs Inc since late 2012 and have been very pleased with development of our mobile iOS and Android apps. They've been flexible with our hands on approach with app ideas making the development process very much collaborative. The team work hard for us so we can get the results we want from our mobile apps.",
    ];
});
