@extends('layouts.app')

@section('title', 'Contact - SiteStar')
@section('meta_description', 'Get in touch with SiteStar. Tell us about your project and we will get back to you promptly.')

@push('head')
@if (config('services.turnstile.site_key'))
    <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
@endif
@endpush

@section('content')

{{-- Hero --}}
<section class="pt-32 pb-16 lg:pt-40 lg:pb-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="max-w-3xl">
            <span class="reveal inline-flex items-center px-4 py-1.5 rounded-full bg-brand-50 text-brand-600 text-sm font-medium mb-8 border border-brand-100">
                Contact
            </span>
            <h1 class="reveal text-4xl sm:text-5xl lg:text-6xl font-bold tracking-tight leading-tight">
                Let's start a <span class="gradient-text">conversation</span>
            </h1>
            <p class="reveal mt-6 text-lg text-gray-500 leading-relaxed">
                Have a project idea, question, or just want to say hello? Fill out the form below and we'll get back to you within 24 hours.
            </p>
        </div>
    </div>
</section>

{{-- Contact Form --}}
<section class="pb-24 lg:pb-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-16">
            <div class="lg:col-span-3 reveal" x-data="contactForm">
                {{-- Success message --}}
                <div
                    x-show="success"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 scale-95"
                    x-transition:enter-end="opacity-100 scale-100"
                    class="mb-8 p-6 bg-green-50 border border-green-200 rounded-2xl"
                >
                    <div class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-green-500 shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <div>
                            <h3 class="font-semibold text-green-800">Message sent successfully!</h3>
                            <p class="text-sm text-green-600 mt-1">Thank you for reaching out. We'll get back to you within 24 hours.</p>
                        </div>
                    </div>
                </div>

                {{-- General error --}}
                <template x-if="errors.general">
                    <div class="mb-8 p-6 bg-red-50 border border-red-200 rounded-2xl">
                        <div class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-red-500 shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                            </svg>
                            <div>
                                <h3 class="font-semibold text-red-800">Something went wrong</h3>
                                <p class="text-sm text-red-600 mt-1" x-text="errors.general[0]"></p>
                            </div>
                        </div>
                    </div>
                </template>

                <form
                    x-ref="form"
                    action="{{ route('contact.submit') }}"
                    method="POST"
                    @submit.prevent="submit()"
                    class="space-y-6"
                >
                    @csrf

                    {{-- Honeypot field --}}
                    <div class="absolute -left-[9999px]" aria-hidden="true">
                        <label for="website_url">Website</label>
                        <input type="text" name="website_url" id="website_url" x-model="honeypot" tabindex="-1" autocomplete="off">
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Name</label>
                            <input
                                type="text"
                                name="name"
                                id="name"
                                x-model="formData.name"
                                required
                                placeholder="Your name"
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-white focus:border-brand-400 focus:ring-2 focus:ring-brand-100 transition-all text-sm"
                                :class="errors.name ? 'border-red-300 focus:border-red-400 focus:ring-red-100' : ''"
                            >
                            <template x-if="errors.name">
                                <p class="mt-1.5 text-sm text-red-500" x-text="errors.name[0]"></p>
                            </template>
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                            <input
                                type="email"
                                name="email"
                                id="email"
                                x-model="formData.email"
                                required
                                placeholder="your@email.com"
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-white focus:border-brand-400 focus:ring-2 focus:ring-brand-100 transition-all text-sm"
                                :class="errors.email ? 'border-red-300 focus:border-red-400 focus:ring-red-100' : ''"
                            >
                            <template x-if="errors.email">
                                <p class="mt-1.5 text-sm text-red-500" x-text="errors.email[0]"></p>
                            </template>
                        </div>
                    </div>

                    <div>
                        <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Subject</label>
                        <input
                            type="text"
                            name="subject"
                            id="subject"
                            x-model="formData.subject"
                            required
                            placeholder="What's this about?"
                            class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-white focus:border-brand-400 focus:ring-2 focus:ring-brand-100 transition-all text-sm"
                            :class="errors.subject ? 'border-red-300 focus:border-red-400 focus:ring-red-100' : ''"
                        >
                        <template x-if="errors.subject">
                            <p class="mt-1.5 text-sm text-red-500" x-text="errors.subject[0]"></p>
                        </template>
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                        <textarea
                            name="message"
                            id="message"
                            x-model="formData.message"
                            required
                            rows="6"
                            placeholder="Tell us about your project..."
                            class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-white focus:border-brand-400 focus:ring-2 focus:ring-brand-100 transition-all text-sm resize-none"
                            :class="errors.message ? 'border-red-300 focus:border-red-400 focus:ring-red-100' : ''"
                        ></textarea>
                        <template x-if="errors.message">
                            <p class="mt-1.5 text-sm text-red-500" x-text="errors.message[0]"></p>
                        </template>
                    </div>

                    @if (config('services.turnstile.site_key'))
                        <div class="cf-turnstile" data-sitekey="{{ config('services.turnstile.site_key') }}" data-theme="light"></div>
                        <template x-if="errors['cf-turnstile-response']">
                            <p class="text-sm text-red-500" x-text="errors['cf-turnstile-response'][0]"></p>
                        </template>
                    @endif

                    <button
                        type="submit"
                        :disabled="submitting"
                        class="inline-flex items-center px-8 py-3.5 text-sm font-semibold text-white bg-gray-900 rounded-full hover:bg-brand-500 transition-all duration-300 disabled:opacity-50 disabled:cursor-not-allowed magnetic-btn"
                    >
                        <span x-show="!submitting">Send Message</span>
                        <span x-show="submitting" x-cloak class="inline-flex items-center">
                            <svg class="animate-spin -ml-1 mr-2 h-4 w-4 text-white" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                            Sending...
                        </span>
                    </button>
                </form>
            </div>

            <div class="lg:col-span-2">
                <div class="reveal sticky top-32 space-y-8">
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Contact details</h3>
                        <ul class="space-y-4">
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-brand-500 shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                                </svg>
                                <a href="#" data-encode="{{ base64_encode('info@sitestar.by') }}" data-type="email" class="text-sm text-gray-600 hover:text-brand-500 transition-colors">
                                    <span class="text-gray-400">Loading...</span>
                                </a>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-brand-500 shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                                </svg>
                                <a href="#" data-encode="{{ base64_encode('+375 29 123 45 67') }}" data-type="phone" class="text-sm text-gray-600 hover:text-brand-500 transition-colors">
                                    <span class="text-gray-400">Loading...</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="p-6 bg-gray-50 rounded-2xl">
                        <h4 class="text-sm font-semibold mb-2">Response time</h4>
                        <p class="text-sm text-gray-500">We typically respond within 24 hours during business days. For urgent inquiries, please mention it in the subject line.</p>
                    </div>

                    <div class="p-6 bg-brand-50 rounded-2xl border border-brand-100">
                        <h4 class="text-sm font-semibold text-brand-800 mb-2">Ready to start?</h4>
                        <p class="text-sm text-brand-600">Share as much detail as possible about your project — budget, timeline, and desired features help us provide accurate estimates.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
