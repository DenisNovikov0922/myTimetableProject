<?php

$factory->define(App\Institution::class, function (Faker\Generator $faker) {
    return [
        "name" => $faker->name,
        "address" => $faker->address,
        "phone" => $faker->phone,
        "description" => $faker->name,
    ];
});
