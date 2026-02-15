<header
    x-data="navigation"
    :class="scrolled ? 'bg-white/90 nav-blur shadow-sm' : 'bg-transparent'"
    class="fixed top-0 left-0 right-0 z-50 transition-all duration-300"
>
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <nav class="flex items-center justify-between h-20">
            <a href="{{ route('home') }}" class="flex items-center gap-2 group">
                <span class="text-2xl font-bold tracking-tight">
                    Site<span class="gradient-text">Star</span>
                </span>
            </a>

            <div class="hidden md:flex items-center gap-8">
                <a href="{{ route('home') }}"
                   class="text-sm font-medium transition-colors duration-200 hover:text-brand-500 {{ request()->routeIs('home') ? 'text-brand-500' : 'text-gray-700' }}">
                    Home
                </a>
                <a href="{{ route('about') }}"
                   class="text-sm font-medium transition-colors duration-200 hover:text-brand-500 {{ request()->routeIs('about') ? 'text-brand-500' : 'text-gray-700' }}">
                    About
                </a>
                <a href="{{ route('portfolio') }}"
                   class="text-sm font-medium transition-colors duration-200 hover:text-brand-500 {{ request()->routeIs('portfolio') ? 'text-brand-500' : 'text-gray-700' }}">
                    Portfolio
                </a>
                <a href="{{ route('contact') }}"
                   class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-white bg-gray-900 rounded-full hover:bg-brand-500 transition-all duration-300 magnetic-btn">
                    Contact Us
                </a>
            </div>

            <button
                @click="toggleMobile()"
                class="md:hidden relative w-8 h-8 flex items-center justify-center"
                aria-label="Toggle menu"
            >
                <div class="flex flex-col gap-1.5 w-6">
                    <span
                        :class="mobileOpen ? 'rotate-45 translate-y-2' : ''"
                        class="block h-0.5 w-full bg-gray-900 transition-all duration-300 origin-center"
                    ></span>
                    <span
                        :class="mobileOpen ? 'opacity-0 scale-0' : 'opacity-100'"
                        class="block h-0.5 w-full bg-gray-900 transition-all duration-300"
                    ></span>
                    <span
                        :class="mobileOpen ? '-rotate-45 -translate-y-2' : ''"
                        class="block h-0.5 w-full bg-gray-900 transition-all duration-300 origin-center"
                    ></span>
                </div>
            </button>
        </nav>
    </div>

    <div
        x-show="mobileOpen"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 -translate-y-4"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-4"
        @click.outside="closeMobile()"
        class="md:hidden bg-white/95 nav-blur border-t border-gray-100"
    >
        <div class="px-6 py-8 space-y-6">
            <a href="{{ route('home') }}" @click="closeMobile()" class="block text-lg font-medium text-gray-900 hover:text-brand-500 transition-colors">Home</a>
            <a href="{{ route('about') }}" @click="closeMobile()" class="block text-lg font-medium text-gray-900 hover:text-brand-500 transition-colors">About</a>
            <a href="{{ route('portfolio') }}" @click="closeMobile()" class="block text-lg font-medium text-gray-900 hover:text-brand-500 transition-colors">Portfolio</a>
            <a href="{{ route('contact') }}" @click="closeMobile()" class="block w-full text-center px-6 py-3 text-base font-medium text-white bg-gray-900 rounded-full hover:bg-brand-500 transition-all duration-300">Contact Us</a>
        </div>
    </div>
</header>
