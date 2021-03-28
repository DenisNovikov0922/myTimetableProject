<?php

$factory->define(App\Subject::class, function (Faker\Generator $faker) {
    return [
        "name" => $faker->name,
        "abbr" => $faker->name,
    ];
});
