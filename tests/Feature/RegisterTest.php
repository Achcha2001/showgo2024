<?php
// tests/Feature/RegisterTest.php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    /** @test */
    public function it_registers_user()
    {
        $response = $this->post(route('register'), [
            'name' => $this->faker->name,
            'email' => $this->faker->safeEmail,
            'password' => 'password123', 
            'password_confirmation' => 'password123',
        ]);

        $response->assertRedirect(route('home')); 

        
        $this->assertDatabaseHas('users', [
            'email' => $this->faker->safeEmail,
        ]);
    }


    public function it_validates_registration_form_fields()
    {
        $response = $this->post(route('register'), []);

        $response->assertSessionHasErrors(['name', 'email', 'password']);
    }
}
