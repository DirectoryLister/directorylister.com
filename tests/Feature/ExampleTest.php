<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    /** A basic test example. */
    public function test_basic_test()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
