<?php

use Dingo\Api\Routing\Router;

/** @var Router $api */
$api = app(Router::class);

$api->version('v1', function (Router $api) {
    $api->group(['prefix' => 'email'], function(Router $api) {
        $api->post('test', ['uses' => "App\\Api\\V1\\Controllers\\EmailNotification@test"]);
        $api->post('contact_us', ['uses' => "App\\Api\\V1\\Controllers\\EmailNotification@contactUs"]);
        $api->post('quick_quote', ['uses' => "App\\Api\\V1\\Controllers\\EmailNotification@quickQuote"]);
        $api->post('air_shipping_order', ['uses' => "App\\Api\\V1\\Controllers\\EmailNotification@airShippingOrder"]);
        $api->post('usspi_form', ['uses' => "App\\Api\\V1\\Controllers\\EmailNotification@usspiForm"]);
    });
});
