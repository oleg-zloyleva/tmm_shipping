<?php

namespace Tests\Functional\HTTP\API;

use App\TestCase;

class HttpApiEmptyDataFailTest extends TestCase
{

    public function testContactUs()
    {
        $response = $this->post("/api/email/contact_us");
        $response->assertStatus(422);
    }

    public function testQuickQuote()
    {
        $response = $this->post("/api/email/quick_quote");
        $response->assertStatus(422);
    }

    public function testAirShippingOrder()
    {
        $response = $this->post("/api/email/air_shipping_order");
        $response->assertStatus(422);
    }
}
