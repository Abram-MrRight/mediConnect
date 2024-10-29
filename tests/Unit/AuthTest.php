<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AuthTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_register()
    {
        $response = $this->post('/register', [
            'name' => 'Test User',
            'email' => 'testuser@example.com',
            'password' => 'password123',
            'password_confirmation' => 'password123', // Include password confirmation if required
        ]);

        // Assert registration was successful and user is created in the database
        $response->assertStatus(302); // Check for a redirect after registration
        $this->assertDatabaseHas('users', [
            'email' => 'testuser@example.com',
        ]);
    }

    public function test_user_can_login()
    {
        // First, create a user with known credentials
        $user = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt($password = 'password123'),
        ]);

        // Attempt to log in with those credentials
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => $password,
        ]);

        // Assert successful login, status 302 (redirect) to the dashboard or intended route
        $response->assertStatus(302);
        $this->assertAuthenticatedAs($user);
    }
}
