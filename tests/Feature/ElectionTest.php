<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ElectionTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('api/election');

        $response->assertStatus(200);

        // $e=new Election();
        // $e=[
        //     "description"=>"unitwertyuio", "label"=>"hello","statut"=>"unit","date"=>"2000-02-03"
        // ];
        // $response = $this->withHeaders(["x-Header" => "value"])->patch("api/election/1",$e);
        // $response->assertStatus(200);


    }
}
