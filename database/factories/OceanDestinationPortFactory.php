<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\OceanDestinationPort::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
    ];
});
