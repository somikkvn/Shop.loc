<?php

/** @var Factory $factory */

use App\User;
use App\Basket;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;


$factory->define(Basket::class, function (Faker $faker) {
    return array(
        'user_id' => $faker->numberBetween(0, 0),
        'name' =>  $faker->name,
        'count' => $faker->numberBetween(0, 1000),
        'price' => $faker->randomFloat(2, 999, 50000),
    );
});
