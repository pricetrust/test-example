<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CalcControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_div(): void
    {
        $response = $this->get('/div/10/5');

        $response->assertStatus(200);

        $response->assertExactJson(["result" => 2]);
    }
}