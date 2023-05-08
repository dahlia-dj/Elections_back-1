<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Region;

class RegionTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
    $response = $this->get('api/region');

    $response->assertStatus(200);

    $region=new Region();
    $region=[
        "label"=>"hello"
    ];
    $response = $this->withHeaders(["X-Header" => "Value"])->post("api/region",$region);
    $response->assertStatus(200);

    $response = $this->withHeaders(["X-Header" => "Value"])->delete("api/region/4");
    $response->assertStatus(200);

    $reg=new Region();
    $reg=[
        "label"=>"hellho"
    ];
    $response = $this->withHeaders(["X-Header" => "Value"])->patch("api/region/5",$reg);
    $response->assertStatus(200);

    // $e=new Election();
    // $e=[
    //     "description"=>"unitwertyuio", "label"=>"hello","statut"=>"unit","date"=>"2000-02-03"
    // ];
    // $response = $this->withHeaders(["x-Header" => "value"])->patch("api/election/1",$e);
    // $response->assertStatus(200);
}
}
