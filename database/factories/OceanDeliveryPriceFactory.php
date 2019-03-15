<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\OceanDeliveryPrice::class, function () {
    return [
        'ocean_exit_port_id' => 1,
        'ocean_destination_port_id' => 1,
        'price' => 100.22,
    ];
});
