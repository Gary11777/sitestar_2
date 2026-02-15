@extends('layouts.app')

@section('title', 'SiteStar - Modern Web Development Studio')
@section('meta_description', 'SiteStar creates stunning, performant websites for modern businesses. Expert web design, development, and digital solutions.')

@section('content')

{{-- Hero Section --}}
<section class="relative min-h-screen flex items-center overflow-hidden">
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-40 -right-40 w-96 h-96 rounded-full bg-brand-100/40 blur-3xl animate-float" data-parallax="-0.1"></div>
        <div class="absolute top-1/3 -left-20 w-72 h-72 rounded-full bg-peach/30 blur-3xl animate-float-delayed" data-parallax="-0.15"></div>
        <div class="absolute bottom-20 right-1/4 w-64 h-64 rounded-full bg-coral/10 blur-3xl animate-float-slow" data-parallax="-0.08"></div>
    </div>

    <div class="relative mx-auto max-w-7xl px-6 lg:px-8 pt-32 pb-20 lg:pt-40 lg:pb-32">
        <div class="max-w-4xl">
            <div class="reveal">
                <span class="inline-flex items-center px-4 py-1.5 rounded-full bg-brand-50 text-brand-600 text-sm font-medium mb-8 border border-brand-100">
                    <span class="w-2 h-2 rounded-full bg-brand-500 mr-2 animate-pulse"></span>
                    Web Development Studio
                </span>
            </div>

            <h1 class="reveal text-5xl sm:text-6xl lg:text-7xl xl:text-8xl font-bold tracking-tight leading-[1.05]">
                We craft
                <span class="gradient-text">digital</span>
                <br>experiences that
                <span class="gradient-text">inspire</span>
            </h1>

            <p class="reveal mt-8 text-lg sm:text-xl text-gray-500 max-w-2xl leading-relaxed">
                SiteStar is a web development studio specializing in creating modern, performant, and beautifully designed websites that help businesses stand out in the digital landscape.
            </p>

            <div class="reveal mt-10 flex flex-wrap gap-4">
                <a href="{{ route('portfolio') }}" class="inline-flex items-center px-8 py-4 text-base font-semibold text-white bg-gray-900 rounded-full hover:bg-brand-500 transition-all duration-300 magnetic-btn group">
                    View Our Work
                    <svg class="ml-2 w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
                <a href="{{ route('contact') }}" class="inline-flex items-center px-8 py-4 text-base font-semibold text-gray-900 bg-white border-2 border-gray-200 rounded-full hover:border-brand-300 hover:text-brand-600 transition-all duration-300">
                    Get in Touch
                </a>
            </div>
        </div>
    </div>

    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 reveal hidden lg:block">
        <div class="flex flex-col items-center gap-2">
            <span class="text-xs text-gray-400 uppercase tracking-widest">Scroll</span>
            <div class="w-6 h-10 rounded-full border-2 border-gray-300 flex justify-center pt-2">
                <div class="w-1 h-3 bg-gray-400 rounded-full animate-bounce"></div>
            </div>
        </div>
    </div>
</section>

{{-- Services Section --}}
<section class="py-24 lg:py-32 bg-gray-50/50">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="text-center mb-16 lg:mb-20">
            <h2 class="reveal line-animate text-3xl sm:text-4xl lg:text-5xl font-bold tracking-tight">
                What we do best
            </h2>
            <p class="reveal mt-6 text-lg text-gray-500 max-w-2xl mx-auto">
                We combine creativity with technical expertise to deliver websites that are not just beautiful, but also fast, accessible, and built to last.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 stagger-children">
            <div class="reveal card-hover bg-white rounded-2xl p-8 lg:p-10 border border-gray-100">
                <div class="w-12 h-12 rounded-xl bg-brand-50 flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-brand-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.53 16.122a3 3 0 0 0-5.78 1.128 2.25 2.25 0 0 1-2.4 2.245 4.5 4.5 0 0 0 8.4-2.245c0-.399-.078-.78-.22-1.128Zm0 0a15.998 15.998 0 0 0 3.388-1.62m-5.043-.025a15.994 15.994 0 0 1 1.622-3.395m3.42 3.42a15.995 15.995 0 0 0 4.764-4.648l3.876-5.814a1.151 1.151 0 0 0-1.597-1.597L14.146 6.32a15.996 15.996 0 0 0-4.649 4.763m3.42 3.42a6.776 6.776 0 0 0-3.42-3.42" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-3">Web Design</h3>
                <p class="text-gray-500 leading-relaxed">
                    Crafting visually stunning interfaces with meticulous attention to detail, typography, and user experience principles.
                </p>
            </div>

            <div class="reveal card-hover bg-white rounded-2xl p-8 lg:p-10 border border-gray-100">
                <div class="w-12 h-12 rounded-xl bg-brand-50 flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-brand-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75 22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3-4.5 16.5" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-3">Development</h3>
                <p class="text-gray-500 leading-relaxed">
                    Building robust, scalable web applications with modern frameworks and clean, maintainable code architecture.
                </p>
            </div>

            <div class="reveal card-hover bg-white rounded-2xl p-8 lg:p-10 border border-gray-100">
                <div class="w-12 h-12 rounded-xl bg-brand-50 flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-brand-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 0 0 6 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0 1 18 16.5h-2.25m-7.5 0h7.5m-7.5 0-1 3m8.5-3 1 3m0 0 .5 1.5m-.5-1.5h-9.5m0 0-.5 1.5m.75-9 3-3 2.148 2.148A12.061 12.061 0 0 1 16.5 7.605" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-3">SEO & Performance</h3>
                <p class="text-gray-500 leading-relaxed">
                    Optimizing every aspect of your site for search engines and lightning-fast load times across all devices.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- Featured Work --}}
<section class="py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="flex flex-col sm:flex-row items-start sm:items-end justify-between mb-16 gap-6">
            <div>
                <h2 class="reveal line-animate text-3xl sm:text-4xl lg:text-5xl font-bold tracking-tight">
                    Featured work
                </h2>
                <p class="reveal mt-4 text-lg text-gray-500">A selection of our recent projects.</p>
            </div>
            <a href="{{ route('portfolio') }}" class="reveal inline-flex items-center text-sm font-semibold text-brand-500 hover:text-brand-600 transition-colors group">
                View all projects
                <svg class="ml-1 w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <a href="https://dimgent.com/" target="_blank" rel="noopener" class="reveal group block">
                <div class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-brand-100 via-peach/50 to-brand-200 aspect-[4/3]">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <span class="text-5xl sm:text-6xl font-bold text-brand-500/20 group-hover:scale-110 transition-transform duration-500">dimgent.com</span>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-8">
                        <div class="text-white">
                            <span class="text-sm font-medium uppercase tracking-wider text-brand-300">Corporate Website</span>
                            <h3 class="text-xl font-bold mt-1">Dimgent International</h3>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <h3 class="text-lg font-semibold group-hover:text-brand-500 transition-colors">Dimgent International</h3>
                    <p class="text-gray-500 text-sm mt-1">A sleek corporate platform delivering global logistics and consulting services with clarity and professionalism.</p>
                </div>
            </a>

            <a href="https://dimgent.by/" target="_blank" rel="noopener" class="reveal group block">
                <div class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-amber-100 via-brand-100 to-coral/20 aspect-[4/3]">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <span class="text-5xl sm:text-6xl font-bold text-amber-500/20 group-hover:scale-110 transition-transform duration-500">dimgent.by</span>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-8">
                        <div class="text-white">
                            <span class="text-sm font-medium uppercase tracking-wider text-amber-300">Regional Portal</span>
                            <h3 class="text-xl font-bold mt-1">Dimgent Belarus</h3>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <h3 class="text-lg font-semibold group-hover:text-brand-500 transition-colors">Dimgent Belarus</h3>
                    <p class="text-gray-500 text-sm mt-1">A regional business hub connecting local enterprises with international trade opportunities through an intuitive digital experience.</p>
                </div>
            </a>
        </div>
    </div>
</section>

{{-- Stats Section --}}
<section class="py-24 lg:py-32 bg-gray-950 text-white relative overflow-hidden">
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-0 left-1/4 w-96 h-96 rounded-full bg-brand-600/10 blur-3xl"></div>
        <div class="absolute bottom-0 right-1/4 w-64 h-64 rounded-full bg-coral/10 blur-3xl"></div>
    </div>

    <div class="relative mx-auto max-w-7xl px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="reveal text-3xl sm:text-4xl lg:text-5xl font-bold tracking-tight">
                Numbers that <span class="gradient-text">speak</span>
            </h2>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12">
            <div class="text-center reveal" x-data="counter(50, '+')">
                <div class="text-4xl lg:text-5xl font-bold gradient-text counter-value" x-text="display">0</div>
                <p class="mt-2 text-sm text-gray-400 uppercase tracking-wider">Projects Delivered</p>
            </div>
            <div class="text-center reveal" x-data="counter(30, '+')">
                <div class="text-4xl lg:text-5xl font-bold gradient-text counter-value" x-text="display">0</div>
                <p class="mt-2 text-sm text-gray-400 uppercase tracking-wider">Happy Clients</p>
            </div>
            <div class="text-center reveal" x-data="counter(5, '+')">
                <div class="text-4xl lg:text-5xl font-bold gradient-text counter-value" x-text="display">0</div>
                <p class="mt-2 text-sm text-gray-400 uppercase tracking-wider">Years Experience</p>
            </div>
            <div class="text-center reveal" x-data="counter(99, '%')">
                <div class="text-4xl lg:text-5xl font-bold gradient-text counter-value" x-text="display">0</div>
                <p class="mt-2 text-sm text-gray-400 uppercase tracking-wider">Client Satisfaction</p>
            </div>
        </div>
    </div>
</section>

{{-- CTA Section --}}
<section class="py-24 lg:py-32 relative overflow-hidden">
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] rounded-full bg-brand-50 blur-3xl opacity-60"></div>
    </div>

    <div class="relative mx-auto max-w-4xl px-6 lg:px-8 text-center">
        <h2 class="reveal text-3xl sm:text-4xl lg:text-5xl font-bold tracking-tight">
            Ready to bring your
            <span class="gradient-text">vision</span> to life?
        </h2>
        <p class="reveal mt-6 text-lg text-gray-500 max-w-2xl mx-auto">
            Let's discuss your project and explore how we can create something extraordinary together.
        </p>
        <div class="reveal mt-10">
            <a href="{{ route('contact') }}" class="inline-flex items-center px-10 py-4 text-base font-semibold text-white bg-gray-900 rounded-full hover:bg-brand-500 transition-all duration-300 magnetic-btn relative group">
                Start a Project
                <svg class="ml-2 w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>
    </div>
</section>

@endsection
