<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Models\Product::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name,
        'price' => $faker->numberBetween(10000,50000),
        'stock' => $faker->numberBetween(10,100),
        'description' => $faker->text,
        'brand_id' => 1,
        'category_id' => 1
    ];
});