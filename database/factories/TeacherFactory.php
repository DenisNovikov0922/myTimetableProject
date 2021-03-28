<?php

$factory->define(App\Teacher::class, function (Faker\Generator $faker) {
    return [
        "name" => $faker->name,
        "subject" => $faker->name,
        "timeoff" => $faker->name,
    ];
});
