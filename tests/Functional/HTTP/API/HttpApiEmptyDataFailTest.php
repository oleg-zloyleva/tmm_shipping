<?php

namespace Tests\Functional\HTTP\API;

use App\TestCase;

class HttpApiEmptyDataFailTest extends TestCase
{

    public function testContactUs()
    {
        $response = $this->post("/api/email/contact_us");
        $response->assertStatus(422)
            ->assertJson([
                "error" => [
                    "message" => "422 Unprocessable Entity",
                    "errors" => [
                        "FirstName" => ["The first name field is required."],
                        "SecondName" => ["The second name field is required."],
                        "Phone" => ["The phone field is required."],
                        "Email" => ["The email field is required."]
                    ],
                    "status_code" => 422
                ]
            ]);
    }

    public function testQuickQuote()
    {
        $response = $this->post("/api/email/quick_quote");
        $response->assertStatus(422)
            ->assertJson([
                "error" => [
                    "message" => "422 Unprocessable Entity",
                    "errors" => [
                        "FreightType" => ["The freight type field is required."],
                        "Weight" => ["The weight field is required."],
                        "ShippingFrom" => ["The shipping from field is required."],
                        "ShippingTo" => ["The shipping to field is required."],
                        "Email" => ["The email field is required."],
                    ],
                    "status_code" => 422
                ]
            ]);
    }

    public function testAirShippingOrder()
    {
        $response = $this->post("/api/email/air_shipping_order");
        $response->assertStatus(422)
            ->assertJson([
                "error" => [
                    "message" => "422 Unprocessable Entity",
                    "errors" => [
                        "comment" => ["The comment field is required."],
                        "consignee" => ["The consignee field is required."],
                        "consignee.city" => ["The consignee.city field is required."],
                        "consignee.country" => ["The consignee.country field is required."],
                        "consignee.email" => ["The consignee.email field is required."],
                        "consignee.firstName" => ["The consignee.first name field is required."],
                        "consignee.phone" => ["The consignee.phone field is required."],
                        "consignee.secondName" => ["The consignee.second name field is required."],
                        "consignee.tid" => ["The consignee.tid field is required."],
                        "descriptionOfGoods" => ["The description of goods field is required."],
                        "descriptionOfGoods.from" => ["The description of goods.from field is required."],
                        "descriptionOfGoods.to" => ["The description of goods.to field is required."],
                        "notifyParty" => ["The notify party field is required."],
                        "notifyParty.city" => ["The notify party.city field is required."],
                        "notifyParty.country" => ["The notify party.country field is required."],
                        "notifyParty.firstName" => ["The notify party.first name field is required."],
                        "notifyParty.secondName" => ["The notify party.second name field is required."],
                        "sendDocumentTo" => ["The send document to field is required."],
                        "sendDocumentTo.city" => ["The send document to.city field is required."],
                        "sendDocumentTo.country" => ["The send document to.country field is required."],
                        "sendDocumentTo.firstName" => ["The send document to.first name field is required."],
                        "sendDocumentTo.secondName" => ["The send document to.second name field is required."],
                        "shipper" => ["The shipper field is required."],
                        "shipper.city" => ["The shipper.city field is required."],
                        "shipper.country" => ["The shipper.country field is required."],
                        "shipper.email" => ["The shipper.email field is required."],
                        "shipper.firstName" => ["The shipper.first name field is required."],
                        "shipper.phone" => ["The shipper.phone field is required."],
                        "shipper.secondName" => ["The shipper.second name field is required."],
                        "shipper.tid" => ["The shipper.tid field is required."],
                        "vehicle" => ["The vehicle field is required."]
                    ],
                    "status_code" => 422
                ]
            ]);
    }
}
