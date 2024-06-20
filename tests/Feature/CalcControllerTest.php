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

    // public function test_should_fail_on_string(): void
    // {
    //     $response = $this->get('/div/10manbm/5');
    //     $response->assertInternalServerError();
    // }

    // public function test_div_float(): void
    // {
    //     $response = $this->get('/div/10.2/5.1');

    //     $response->assertStatus(200);

    //     $response->assertExactJson(["result" => 2]);
    // }

    // public function test_div_fail_with_not_numbers(): void {
    //     $response = $this->get('/div/10/5');

    //     $response->assertStatus(200);
    // }
}
