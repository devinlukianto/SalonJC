<?php

$factory->define(App\Models\Comment::class, function (Faker\Generator $faker) {

    return [
        'content' => $faker->text,
    ];
});