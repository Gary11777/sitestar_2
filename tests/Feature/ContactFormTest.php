<?php

namespace Tests\Feature;

use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class ContactFormTest extends TestCase
{
    public function test_contact_form_submits_successfully(): void
    {
        Mail::fake();

        $response = $this->postJson(route('contact.submit'), [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'subject' => 'Test Subject',
            'message' => 'This is a test message with enough characters.',
        ]);

        $response->assertStatus(200);
        $response->assertJson(['message' => 'Your message has been sent successfully.']);

        Mail::assertSent(ContactFormMail::class, function (ContactFormMail $mail) {
            return $mail->data['name'] === 'John Doe'
                && $mail->data['email'] === 'john@example.com';
        });
    }

    public function test_contact_form_validates_required_fields(): void
    {
        $response = $this->postJson(route('contact.submit'), []);

        $response->assertStatus(422);
        $response->assertJsonValidationErrors(['name', 'email', 'subject', 'message']);
    }

    public function test_contact_form_validates_email_format(): void
    {
        $response = $this->postJson(route('contact.submit'), [
            'name' => 'John Doe',
            'email' => 'not-an-email',
            'subject' => 'Test Subject',
            'message' => 'This is a test message with enough characters.',
        ]);

        $response->assertStatus(422);
        $response->assertJsonValidationErrors(['email']);
    }

    public function test_contact_form_validates_minimum_lengths(): void
    {
        $response = $this->postJson(route('contact.submit'), [
            'name' => 'J',
            'email' => 'john@example.com',
            'subject' => 'Hi',
            'message' => 'Short',
        ]);

        $response->assertStatus(422);
        $response->assertJsonValidationErrors(['name', 'subject', 'message']);
    }

    public function test_contact_form_rejects_honeypot_submission(): void
    {
        Mail::fake();

        $response = $this->postJson(route('contact.submit'), [
            'name' => 'Bot User',
            'email' => 'bot@spam.com',
            'subject' => 'Spam Subject',
            'message' => 'This is a spam message from a bot.',
            'website_url' => 'http://spam-site.com',
        ]);

        $response->assertStatus(200);

        Mail::assertNotSent(ContactFormMail::class);
    }

    public function test_contact_form_is_rate_limited(): void
    {
        Mail::fake();

        $payload = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'subject' => 'Test Subject',
            'message' => 'This is a test message with enough characters.',
        ];

        for ($i = 0; $i < 5; $i++) {
            $this->postJson(route('contact.submit'), $payload);
        }

        $response = $this->postJson(route('contact.submit'), $payload);

        $response->assertStatus(429);
    }
}
