<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_hello_route_works()
	{
	    $response = $this->get('/hello');

	    $response->assertStatus(200);

	    $response->assertJson([
	        'message' => 'Hello CI/CD'
	    ]);
	}
}
