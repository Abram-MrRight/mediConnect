<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BasicRoutesTest extends TestCase
{
    /**
     * Test the home route renders the dashboard view.
     */
    public function test_home_route_displays_dashboard()
    {
        $response = $this->get(route('home'));
        $response->assertStatus(200); // Check that the status code is 200
        $response->assertViewIs('dashboard'); // Check that it renders the correct view
    }

    /**
     * Test the dashboard route renders the dashboard view.
     */
    public function test_dashboard_route_displays_dashboard()
    {
        $response = $this->get(route('dashboard'));
        $response->assertStatus(200);
        $response->assertViewIs('dashboard');
    }

    /**
     * Test the appointments route renders the appointments view.
     */
    public function test_appointments_route_displays_appointments()
    {
        $response = $this->get(route('appointments'));
        $response->assertStatus(200);
        $response->assertViewIs('appointments');
    }

    // Test the profile route renders the profile view.
    public function test_profile_route_displays_profile() {
        $response = $this->get(route('profile'));
        $response->assertStatus(200);
        $response->assertViewIs('profile');
    }
}
