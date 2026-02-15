@extends('layouts.app')

@section('title', 'Portfolio - SiteStar')
@section('meta_description', 'Explore our portfolio of web development projects. See how SiteStar creates impactful digital solutions.')

@section('content')

{{-- Hero --}}
<section class="pt-32 pb-16 lg:pt-40 lg:pb-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="max-w-3xl">
            <span class="reveal inline-flex items-center px-4 py-1.5 rounded-full bg-brand-50 text-brand-600 text-sm font-medium mb-8 border border-brand-100">
                Our Work
            </span>
            <h1 class="reveal text-4xl sm:text-5xl lg:text-6xl font-bold tracking-tight leading-tight">
                Projects that <span class="gradient-text">define</span> our craft
            </h1>
            <p class="reveal mt-6 text-lg text-gray-500 leading-relaxed">
                Each project is a story of collaboration, creativity, and technical precision. Browse our portfolio to see how we bring ideas to life.
            </p>
        </div>
    </div>
</section>

{{-- Portfolio Grid --}}
<section class="pb-24 lg:pb-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12">
            @foreach ($projects as $project)
                <div class="reveal group">
                    <a href="{{ $project['url'] }}" target="_blank" rel="noopener" class="block">
                        <div class="relative overflow-hidden rounded-2xl {{ $project['gradient'] }} aspect-[4/3]">
                            <div class="absolute inset-0 flex items-center justify-center p-8">
                                <span class="text-4xl sm:text-5xl font-bold {{ $project['text_color'] }} group-hover:scale-110 transition-transform duration-500 text-center">
                                    {{ $project['domain'] }}
                                </span>
                            </div>

                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300 flex items-end p-8">
                                <div class="text-white transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                                    <span class="text-sm font-medium uppercase tracking-wider text-brand-300">{{ $project['category'] }}</span>
                                    <h3 class="text-2xl font-bold mt-1">{{ $project['title'] }}</h3>
                                    <span class="inline-flex items-center mt-3 text-sm text-white/80">
                                        Visit site
                                        <svg class="ml-1 w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>

                    <div class="mt-6">
                        <div class="flex items-center gap-3 mb-2">
                            <span class="text-xs font-medium uppercase tracking-wider text-brand-500">{{ $project['category'] }}</span>
                            <span class="w-1 h-1 rounded-full bg-gray-300"></span>
                            <span class="text-xs text-gray-400">{{ $project['year'] }}</span>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">{{ $project['title'] }}</h3>
                        <p class="text-gray-500 text-sm leading-relaxed">{{ $project['description'] }}</p>

                        <div class="flex flex-wrap gap-2 mt-4">
                            @foreach ($project['tags'] as $tag)
                                <span class="px-3 py-1 text-xs font-medium rounded-full bg-gray-100 text-gray-600">{{ $tag }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="py-24 lg:py-32 bg-gray-50">
    <div class="mx-auto max-w-4xl px-6 lg:px-8 text-center">
        <h2 class="reveal text-3xl sm:text-4xl font-bold tracking-tight">
            Have a project in mind?
        </h2>
        <p class="reveal mt-6 text-lg text-gray-500">
            We're always excited to work on new challenges. Let's create something remarkable together.
        </p>
        <div class="reveal mt-10">
            <a href="{{ route('contact') }}" class="inline-flex items-center px-10 py-4 text-base font-semibold text-white bg-gray-900 rounded-full hover:bg-brand-500 transition-all duration-300 magnetic-btn">
                Get in Touch
            </a>
        </div>
    </div>
</section>

@endsection
