<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    /** @test */
    public function it_can_display_the_home_page()
    {
        $response = $this->get('/');

        $response->assertStatus(200)->assertViewIs('index');
    }
}
