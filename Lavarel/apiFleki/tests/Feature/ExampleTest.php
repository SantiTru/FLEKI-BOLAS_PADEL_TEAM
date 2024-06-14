<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_the_application_returns_a_successful_response()
    {
        
        $response = $this->get('/api/some_existing_route');

        $response->assertStatus(200);
    }
}
