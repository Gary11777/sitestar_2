<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactFormMail;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(ContactFormRequest $request): JsonResponse
    {
        if ($request->filled('website_url')) {
            return response()->json(['message' => 'Thank you!']);
        }

        if (config('services.turnstile.secret_key')) {
            $token = $request->input('cf-turnstile-response');

            if (! $token || ! $this->verifyTurnstile($token, $request->ip())) {
                return response()->json([
                    'message' => 'Bot verification failed.',
                    'errors' => ['cf-turnstile-response' => ['Please complete the security verification.']],
                ], 422);
            }
        }

        $data = $request->validated();

        Mail::to(config('mail.from.address'))->send(new ContactFormMail($data));

        return response()->json(['message' => 'Your message has been sent successfully.']);
    }

    /**
     * Verify Cloudflare Turnstile token with the API.
     */
    private function verifyTurnstile(string $token, ?string $ip): bool
    {
        $response = Http::asForm()->post(
            'https://challenges.cloudflare.com/turnstile/v0/siteverify',
            [
                'secret' => config('services.turnstile.secret_key'),
                'response' => $token,
                'remoteip' => $ip,
            ]
        );

        return $response->json('success', false);
    }
}
