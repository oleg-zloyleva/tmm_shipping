<?php

namespace Tests\Functional\HTTP\API;

use App\TestCase;

class HttpWebSuccessTest extends TestCase
{
    
    public function testHomePage(){
        $response = $this->get("/");
        $response->assertStatus(200);
    }

    public function testAboutPage(){
        $response = $this->get("/about");
        $response->assertStatus(200);
    }

    public function testServicesPage(){
        $response = $this->get("/services");
        $response->assertStatus(200);
    }

    public function testRatesPage(){
        $response = $this->get("/rates");
        $response->assertStatus(200);
    }

    public function testContactsPage(){
        $response = $this->get("/contacts");
        $response->assertStatus(200);
    }

    public function testOrderPage(){
        $response = $this->get("/order");
        $response->assertStatus(200);
    }
}
