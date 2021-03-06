<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Wishlist;
use Faker\Generator as Faker;

$factory->define(Wishlist::class, function (Faker $faker) {
    return [
        'category' => $faker->text(),
        'description' => $faker->text(),
        'price' => $faker->randomNumber(),
    ];
});
