@php
    $navItems = [
        ['name' => 'Home', 'route' => 'home'],
        ['name' => 'About', 'route' => 'about'],
        ['name' => 'Events', 'route' => 'events'],
        ['name' => 'Resources', 'route' => 'resources'],
        ['name' => 'Team', 'route' => 'team'],
        ['name' => 'Contact', 'route' => 'contact'],
    ];
@endphp

<nav x-data="{ open: false }" class="sticky top-0 z-50 glass-card border-b border-[#252460]/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <a href="{{ route('home') }}" class="flex items-center space-x-3 group">
                <img
                    src="{{ asset('assets/1d26274429553a360341bc051ba4421303a308f3.png') }}"
                    alt="AUST CDC Logo"
                    class="h-12 w-auto transition-transform group-hover:scale-110"
                >
                <div class="hidden sm:block">
                    <h1 class="text-xl font-bold text-[#252460]">AUST CDC</h1>
                    <p class="text-xs text-[#252460]/70">Career Development Club</p>
                </div>
            </a>

            <div class="hidden md:flex items-center space-x-1">
                @foreach($navItems as $item)
                    <a
                        href="{{ route($item['route']) }}"
                        class="px-4 py-2 rounded-md transition-all duration-300 {{ request()->routeIs($item['route']) ? 'bg-[#252460] text-white' : 'text-[#252460] hover:text-[#252460]/80 hover:bg-[#252460]/10' }}"
                    >
                        {{ $item['name'] }}
                    </a>
                @endforeach
            </div>

            <button
                type="button"
                class="md:hidden p-2 rounded-md text-[#252460] hover:bg-[#252460]/10 transition-colors"
                @click="open = !open"
                aria-label="Toggle menu"
            >
                <span x-show="!open" class="text-2xl leading-none">☰</span>
                <span x-show="open" class="text-2xl leading-none">×</span>
            </button>
        </div>

        <div x-show="open" x-transition class="md:hidden py-4 border-t border-[#252460]/20">
            @foreach($navItems as $item)
                <a
                    href="{{ route($item['route']) }}"
                    class="block px-4 py-2 rounded-md transition-all duration-300 mb-1 {{ request()->routeIs($item['route']) ? 'bg-[#252460] text-white' : 'text-[#252460] hover:bg-[#252460]/10' }}"
                >
                    {{ $item['name'] }}
                </a>
            @endforeach
        </div>
    </div>
</nav>
