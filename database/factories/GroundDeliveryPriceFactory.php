<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\GroundDeliveryPrice::class, function (Faker\Generator $faker) {
    return [
        'auction_id' => $faker->randomDigit,
        'ground_location_id' => $faker->randomDigit,
        'ground_exit_port_id' => $faker->randomDigit,
        'price' => $faker->randomDigit,
    ];
});
