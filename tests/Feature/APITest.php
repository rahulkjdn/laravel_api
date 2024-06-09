<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class APITest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->post('/api/submit',['name' => 'John Doe','email' => 'john.doe@example.com','message' => 'This is a test message.']);

        $response->assertStatus($response->status());
        $response->assertJson(json_decode($response->content(), true));
        
    }
}
