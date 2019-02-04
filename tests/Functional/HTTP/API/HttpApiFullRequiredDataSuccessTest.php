<?php

namespace Tests\Functional\HTTP\API;

use App\TestCase;

class HttpApiFullRequiredDataSuccessTest extends TestCase
{

    public function testContactUs()
    {
        $data = [
            "FirstName" => "John",
            "SecondName" => "White",
            "Phone" => "+7123456789",
            "Email" => "john@test.com"
        ];
        $response = $this->post("/api/email/contact_us",$data);
        $response->assertStatus(200)
            ->assertJson([
                "status" => "ok"
            ]);
    }

    public function testQuickQuote()
    {
        $data = [
            "FreightType" => "FreightType",
            "Weight" => "123",
            "ShippingFrom" => "New-York",
            "ShippingTo" => "Odessa",
            "Email" => "john@test.com",
        ];
        $response = $this->post("/api/email/quick_quote", $data);
        $response->assertStatus(200)
            ->assertJson([
                "status" => "ok"
            ]);
    }

    public function testAirShippingOrder()
    {
        $data = [
            "comment" => ["comment" => "The comment."],
            "consignee" => [
                "city" => "New-York",
                "country" => "USA",
                "email" => "newyourk@test.com",
                "firstName" => "John",
                "phone" => "+7123654789",
                "secondName" => "White",
                "tid" => "The tid field",
            ],
            "descriptionOfGoods" => [
                "from" => "New-York",
                "to" => "Odessa",
            ],
            "notifyParty" => [
                "city" => "Odessa",
                "country" => "Ukraine",
                "firstName" => "Ivan",
                "secondName" => "Balo",
            ],
            "sendDocumentTo" => [
                "city" => "Kiev",
                "country" => "Ukraine",
                "firstName" => "Petro",
                "secondName" => "Biliy",
            ],
            "shipper" => [
                "city" => "Odessa",
                "country" => "Ukraine",
                "email" => "ivan@test.com",
                "firstName" => "Vasiliy",
                "phone" => "+380991234567",
                "secondName" => "Salo",
                "tid" => "The TID field",
            ],
            "vehicle" => [""]
        ];

        $response = $this->post("/api/email/air_shipping_order", $data);
        $response->assertStatus(200)
            ->assertJson([
                "status" => "ok"
            ]);
    }
}
