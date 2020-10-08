<?php

/** @var Factory $factory */

use App\User;
use App\Category;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;


$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' =>  $faker->name,
        'code' => $faker->shuffleString(213),
        'description' => $faker->text(300),
        'price' => $faker->randomFloat(2, 999, 50000),
    ];
});
