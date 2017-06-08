<?php

$factory->define(App\Models\News::class, function (Faker\Generator $faker) {

    return [
        'title' => $faker->name,
        'content' => $faker->text,
    ];
});