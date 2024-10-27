<?php

namespace Tests\Feature\Http\Controllers;

use App\Http\Controllers\IndexController;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

#[CoversClass(IndexController::class)]
class IndexControllerTest extends TestCase
{
    #[Test]
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200)->assertViewIs('index');
    }
}
