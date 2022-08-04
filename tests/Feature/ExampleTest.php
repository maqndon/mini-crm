<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        $this->withoutExceptionHandling();
        $user = $this->loginAsAdmin();
        $this->actingAs($user);
        $response = $this->get('/companies');
        $response->assertStatus(200);
    }
}
