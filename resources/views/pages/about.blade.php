@extends('layouts.app')

@section('title', 'About SiteStar - Our Story')
@section('meta_description', 'Learn about SiteStar, our mission, values, and the team behind exceptional web development.')

@section('content')

{{-- Hero --}}
<section class="pt-32 pb-16 lg:pt-40 lg:pb-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="max-w-3xl">
            <span class="reveal inline-flex items-center px-4 py-1.5 rounded-full bg-brand-50 text-brand-600 text-sm font-medium mb-8 border border-brand-100">
                About Us
            </span>
            <h1 class="reveal text-4xl sm:text-5xl lg:text-6xl font-bold tracking-tight leading-tight">
                Building the web,
                <span class="gradient-text">one pixel</span> at a time
            </h1>
            <p class="reveal mt-6 text-lg text-gray-500 leading-relaxed">
                SiteStar was founded with a clear purpose: to help businesses thrive in the digital world through thoughtful design and robust engineering. We believe great websites are not just seen — they are felt.
            </p>
        </div>
    </div>
</section>

{{-- Values --}}
<section class="py-24 lg:py-32 bg-gray-50/50">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="reveal line-animate text-3xl sm:text-4xl font-bold tracking-tight">Our principles</h2>
            <p class="reveal mt-4 text-lg text-gray-500">The values that guide every project we take on.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 stagger-children">
            <div class="reveal card-hover bg-white rounded-2xl p-8 border border-gray-100">
                <div class="w-10 h-10 rounded-lg bg-brand-50 flex items-center justify-center mb-5 text-brand-500 text-xl font-bold">01</div>
                <h3 class="text-lg font-semibold mb-2">Clarity First</h3>
                <p class="text-gray-500 text-sm leading-relaxed">Every design decision serves a purpose. We strip away the unnecessary to let your message shine through with precision.</p>
            </div>
            <div class="reveal card-hover bg-white rounded-2xl p-8 border border-gray-100">
                <div class="w-10 h-10 rounded-lg bg-brand-50 flex items-center justify-center mb-5 text-brand-500 text-xl font-bold">02</div>
                <h3 class="text-lg font-semibold mb-2">Craft & Quality</h3>
                <p class="text-gray-500 text-sm leading-relaxed">We obsess over details — from pixel alignment to code structure — because quality lives in the smallest things.</p>
            </div>
            <div class="reveal card-hover bg-white rounded-2xl p-8 border border-gray-100">
                <div class="w-10 h-10 rounded-lg bg-brand-50 flex items-center justify-center mb-5 text-brand-500 text-xl font-bold">03</div>
                <h3 class="text-lg font-semibold mb-2">Performance Matters</h3>
                <p class="text-gray-500 text-sm leading-relaxed">Speed is not optional. We engineer every project for fast load times and smooth interactions on every device.</p>
            </div>
            <div class="reveal card-hover bg-white rounded-2xl p-8 border border-gray-100">
                <div class="w-10 h-10 rounded-lg bg-brand-50 flex items-center justify-center mb-5 text-brand-500 text-xl font-bold">04</div>
                <h3 class="text-lg font-semibold mb-2">User-Centered</h3>
                <p class="text-gray-500 text-sm leading-relaxed">Real people use what we build. Accessibility, usability, and intuitive flows are at the heart of our process.</p>
            </div>
            <div class="reveal card-hover bg-white rounded-2xl p-8 border border-gray-100">
                <div class="w-10 h-10 rounded-lg bg-brand-50 flex items-center justify-center mb-5 text-brand-500 text-xl font-bold">05</div>
                <h3 class="text-lg font-semibold mb-2">Partnership</h3>
                <p class="text-gray-500 text-sm leading-relaxed">We work alongside you, not just for you. Transparent communication and shared goals are the foundation of success.</p>
            </div>
            <div class="reveal card-hover bg-white rounded-2xl p-8 border border-gray-100">
                <div class="w-10 h-10 rounded-lg bg-brand-50 flex items-center justify-center mb-5 text-brand-500 text-xl font-bold">06</div>
                <h3 class="text-lg font-semibold mb-2">Future-Ready</h3>
                <p class="text-gray-500 text-sm leading-relaxed">We use modern technologies and scalable architecture so your project can evolve alongside your ambitions.</p>
            </div>
        </div>
    </div>
</section>

{{-- Tech Stack --}}
<section class="py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div>
                <h2 class="reveal line-animate text-3xl sm:text-4xl font-bold tracking-tight">
                    Technologies we trust
                </h2>
                <p class="reveal mt-6 text-gray-500 leading-relaxed">
                    We choose tools and frameworks that provide reliability, performance, and excellent developer experience. Our stack evolves with the industry to deliver the best possible results.
                </p>
                <div class="reveal mt-8 flex flex-wrap gap-3">
                    @foreach (['Laravel', 'PHP', 'JavaScript', 'Alpine.js', 'Tailwind CSS', 'MySQL', 'PostgreSQL', 'Redis', 'Vite', 'Git'] as $tech)
                        <span class="px-4 py-2 text-sm font-medium rounded-full bg-gray-100 text-gray-700 hover:bg-brand-50 hover:text-brand-600 transition-colors cursor-default">{{ $tech }}</span>
                    @endforeach
                </div>
            </div>

            <div class="reveal-right">
                <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-brand-200 to-coral/30 rounded-3xl blur-2xl opacity-40"></div>
                    <div class="relative bg-gray-950 rounded-3xl p-8 lg:p-12 text-white overflow-hidden">
                        <div class="font-mono text-sm leading-loose">
                            <div class="text-gray-500">// Our approach</div>
                            <div class="mt-2">
                                <span class="text-brand-400">const</span>
                                <span class="text-amber-300"> sitestar</span> = &#123;
                            </div>
                            <div class="ml-6">
                                <span class="text-coral">mission</span>:
                                <span class="text-green-400">'craft excellence'</span>,
                            </div>
                            <div class="ml-6">
                                <span class="text-coral">focus</span>:
                                <span class="text-green-400">'user experience'</span>,
                            </div>
                            <div class="ml-6">
                                <span class="text-coral">result</span>:
                                <span class="text-green-400">'digital success'</span>,
                            </div>
                            <div>&#125;;</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="py-24 lg:py-32 bg-gray-950 text-white">
    <div class="mx-auto max-w-4xl px-6 lg:px-8 text-center">
        <h2 class="reveal text-3xl sm:text-4xl font-bold tracking-tight">
            Let's work <span class="gradient-text">together</span>
        </h2>
        <p class="reveal mt-6 text-gray-400 text-lg">
            Have a project in mind? We'd love to hear about it.
        </p>
        <div class="reveal mt-10">
            <a href="{{ route('contact') }}" class="inline-flex items-center px-10 py-4 text-base font-semibold text-gray-900 bg-white rounded-full hover:bg-brand-100 transition-all duration-300 magnetic-btn">
                Start a Conversation
            </a>
        </div>
    </div>
</section>

@endsection
