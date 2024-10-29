<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

namespace Tests\Feature;

use App\Models\User; // Make sure to import the User model
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BasicRoutesTest extends TestCase
{
    use RefreshDatabase; // Ensure the database is refreshed for each test

    // Existing tests...

    /**
     * Test the login route displays the login view.
     */
    public function test_login_route_displays_login_view()
    {
        $response = $this->get(route('login'));
        $response->assertStatus(200);
        $response->assertViewIs('auth.login');
    }

    /**
     * Test user can login successfully.
     */
    public function test_logged_in_user_is_redirected_to_dashboard()
    {
        // Create a user
        $user = User::factory()->create([
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
        ]);

        // Attempt to login
        $response = $this->post(route('login'), [
            'email' => 'test@example.com',
            'password' => 'password',
        ]);

        // Assert the user is redirected to the dashboard
        $response->assertRedirect(route('dashboard'));
        // Assert the user is authenticated
        $this->assertAuthenticatedAs($user);
    }

    /**
     * Test the home route renders the dashboard view.
     */
    public function test_base_route_displays_dashboard()
    {
        // Create a user and log them in
        $user = User::factory()->create([
            'email' => 'test@example.com',
            'password' => bcrypt('password123'), // Create a user with a password
        ]);

        // Log in the user
        $this->actingAs($user); // Set the authenticated user for the current test

        // Now access the base route (assuming it's the dashboard)
        $response = $this->get(route('dashboard')); // Make sure to use the correct route name for the dashboard
        $response->assertStatus(200); // Check that the status code is 200
        $response->assertViewIs('dashboard'); // Check that it renders the correct view
    }

    /**
     * Test the dashboard route renders the dashboard view.
     */
    // public function test_dashboard_route_displays_dashboard()
    // {
    //     $response = $this->get(route('dashboard'));
    //     $response->assertStatus(200);
    //     $response->assertViewIs('dashboard');
    // }
}
