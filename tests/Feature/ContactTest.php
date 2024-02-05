<?php
// tests/Feature/ContactTest.php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class ContactTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    /** @test */
    public function it_submits_contact_form()
    {
        Mail::fake();

        $response = $this->post(route('contact.submit'), [
            'name' => $this->faker->name,
            'email' => $this->faker->safeEmail,
            'message' => $this->faker->paragraph,
        ]);

        $response->assertRedirect();
        $response->assertSessionHas('success', 'Contact form submitted successfully.');

        // Additional assertions if you have a mail verification step
        Mail::assertSent(\App\Mail\ContactFormSubmitted::class, function ($mail) {
            return $mail->hasTo(config('mail.admin_email'));
        });
    }

    /** @test */
    public function it_validates_contact_form_fields()
    {
        $response = $this->post(route('contact.submit'), []);

        $response->assertSessionHasErrors(['name', 'email', 'message']);
    }
}
