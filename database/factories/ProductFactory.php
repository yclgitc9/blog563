<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'model' => $faker->numberBetween($min = 1980, $max = 2018),
        'price' => $faker->numberBetween($min = 100, $max = 1000),
        'stock' => $faker->numberBetween($min = 1, $max = 100),
    ];
});
