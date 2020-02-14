<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Image;
use Faker\Generator as Faker;

$factory->define(Image::class, function (Faker $faker) {
    return [
        //
        'url'=> $faker->imageUrl($width=640, $height=480, 'transport'),
        'position' => rand(1,10),
    ];
});
