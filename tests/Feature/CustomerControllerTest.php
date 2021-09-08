<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CustomerControllerTest extends TestCase
{
   /**
    * for test customer
    */

    public function test_StoreSuccessCustomer()
    {
        $data =[
            "nama" => "ariadi ahmad",
            "umur" =>20,
            "alamat" => "makassar indonesia"
        ];
        $response = $this->post('customers',$data);
        $response->assertSee("success create data");
        $response->assertStatus(200);
    }
}
