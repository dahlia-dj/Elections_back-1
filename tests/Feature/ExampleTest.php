<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Election;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('api/election');

        $response->assertStatus(200);

        // $election=new Election();
        // $election=[
        //     "description"=>"unitwertyuio", 
        //     "label"=>"hello",
        //     "statut"=>"unit",
        //     "date"=>"2000-02-03"
        // ];
        // $response = $this->withHeaders(["X-Header" => "Value"])->post("api/election",$election);
        // $response->assertStatus(200);

        



    }
}
