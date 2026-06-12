@extends('layouts.app')

@section('title', 'AUST CDC - Career Development Club')

@section('content')
@php
    $carouselImages = [
        ['url' => asset('assets/9a9abe4c5243765e9ac4980ea19a5df5ade80afb.png'), 'alt' => 'AUST CDC - Empowering Dreams & Fostering Growth'],
        ['url' => 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=1200&h=375&fit=crop', 'alt' => 'Students collaborating'],
        ['url' => 'https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=1200&h=375&fit=crop', 'alt' => 'Career development workshop'],
    ];

    $recentEvents = [
        ['image' => 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=400&h=250&fit=crop', 'title' => 'Annual Career Fair 2026', 'description' => 'Connected 200+ students with top employers. Great networking opportunities!'],
        ['image' => 'https://images.unsplash.com/photo-1515187029135-18ee286d815b?w=400&h=250&fit=crop', 'title' => 'Resume Workshop Success', 'description' => 'Helped 150 students craft professional resumes with expert guidance.'],
        ['image' => 'https://images.unsplash.com/photo-1552581234-26160f608093?w=400&h=250&fit=crop', 'title' => 'Alumni Networking Event', 'description' => 'Inspiring sessions with successful AUST alumni from Fortune 500 companies.'],
    ];

    $upcomingEvents = [
        ['date' => '20', 'month' => 'MAR', 'title' => 'Resume Building Workshop', 'time' => '2:00 PM - 4:00 PM', 'location' => 'Seminar Hall A'],
        ['date' => '25', 'month' => 'MAR', 'title' => 'Tech Career Fair 2026', 'time' => '10:00 AM - 5:00 PM', 'location' => 'Main Campus Ground'],
        ['date' => '28', 'month' => 'MAR', 'title' => 'Interview Prep Session', 'time' => '3:00 PM - 5:00 PM', 'location' => 'Room 301'],
    ];
@endphp

<div class="min-h-screen">
    <section x-data="{ slide: 0, slides: @js($carouselImages) }" x-init="setInterval(() => slide = (slide + 1) % slides.length, 5000)" class="relative w-full overflow-hidden bg-[#252460]/5">
        <div class="relative w-full" style="aspect-ratio: 16 / 5;">
            <template x-for="(image, index) in slides" :key="index">
                <div x-show="slide === index" x-transition.opacity.duration.700ms class="absolute inset-0">
                    <img :src="image.url" :alt="image.alt" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-b from-black/40 via-black/20 to-black/60"></div>
                </div>
            </template>

            <div class="absolute bottom-6 left-0 right-0 flex justify-center gap-2 z-10">
                <template x-for="(image, index) in slides" :key="index">
                    <button type="button" @click="slide = index" class="h-3 rounded-full transition-all" :class="slide === index ? 'bg-white w-8' : 'bg-white/50 hover:bg-white/75 w-3'" :aria-label="'Go to slide ' + (index + 1)"></button>
                </template>
            </div>

            <div class="absolute inset-0 flex items-center justify-center z-10">
                <div class="text-center text-white px-4 animate-fade-up">
                    <div class="text-sm md:text-base font-medium tracking-widest mb-4 text-white/90 uppercase drop-shadow-md">
                        Ahsanullah University of Science & Technology
                    </div>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-2 drop-shadow-lg">Career Development Club</h1>
                    <div class="w-24 h-1 bg-white/80 mx-auto mb-6"></div>
                    <p class="text-lg md:text-xl font-light tracking-wide drop-shadow-md text-white/95">Anticipate • Adapt • Accelerate</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center animate-fade-up">
            <div class="mb-8">
                <div class="text-sm font-medium text-[#252460]/60 uppercase tracking-wider mb-3">About Us</div>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold text-[#252460] mb-4">
                    Welcome to <span class="font-bold">AUST CDC</span>
                </h2>
                <div class="w-20 h-1 bg-[#252460] mx-auto"></div>
            </div>
            <div class="space-y-4 text-lg text-[#252460]/80 leading-relaxed">
                <p>A dynamic, student-led organization at Ahsanullah University of Science and Technology, established in Spring 2021. We are dedicated to shaping capable, confident, and career-ready professionals through comprehensive career development programs.</p>
                <p>With a thriving community of 4,500+ members, we conduct career fairs, workshops, seminars, and webinars focusing on higher education, research opportunities, and employability skills.</p>
                <p>Join us in bridging the gap between academic learning and real-world industry expectations.</p>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <div class="text-sm font-medium text-[#252460]/60 uppercase tracking-wider mb-3">Our Success Stories</div>
                <h2 class="text-3xl md:text-4xl font-semibold text-[#252460] mb-3">Recent <span class="font-bold text-[#252460]">Highlights</span></h2>
                <p class="text-lg text-[#252460]/70 max-w-2xl mx-auto">Celebrating our latest achievements and successful events</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                @foreach($recentEvents as $event)
                    <div class="overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 border-0 bg-white rounded-xl hover:-translate-y-2">
                        <div class="relative h-48 overflow-hidden">
                            <img src="{{ $event['image'] }}" alt="{{ $event['title'] }}" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-[#252460] mb-3">{{ $event['title'] }}</h3>
                            <p class="text-[#252460]/70 leading-relaxed">{{ $event['description'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <div class="inline-block px-4 py-2 bg-[#252460]/10 rounded-full text-sm font-medium text-[#252460] mb-4">What's Next</div>
                <h2 class="text-3xl md:text-5xl font-bold text-[#252460] mb-3">Upcoming Events</h2>
                <p class="text-lg text-[#252460]/70 max-w-2xl mx-auto">Don't miss out on our upcoming workshops and sessions</p>
            </div>

            <div class="grid md:grid-cols-3 gap-6 mb-10">
                @foreach($upcomingEvents as $event)
                    <div class="p-6 shadow-xl hover:shadow-2xl transition-all duration-300 border-0 bg-white rounded-xl hover:scale-105 cursor-pointer">
                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-16 h-16 bg-[#252460] rounded-lg flex flex-col items-center justify-center text-white shadow-lg">
                                <div class="text-2xl font-bold leading-none">{{ $event['date'] }}</div>
                                <div class="text-xs uppercase mt-1">{{ $event['month'] }}</div>
                            </div>
                            <div class="flex-1">
                                <h3 class="font-semibold text-[#252460] mb-2 text-lg">{{ $event['title'] }}</h3>
                                <div class="space-y-1 text-sm text-[#252460]/70">
                                    <div class="flex items-center gap-2"><span>📅</span><span>{{ $event['time'] }}</span></div>
                                    <div class="flex items-center gap-2"><span>📍</span><span>{{ $event['location'] }}</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="text-center">
                <a href="{{ route('events') }}" class="inline-flex items-center bg-[#252460] hover:bg-[#252460]/90 text-white px-8 py-4 rounded-lg text-lg shadow-xl transition-all">
                    View All Events <span class="ml-2">→</span>
                </a>
            </div>
        </div>
    </section>

    <section class="py-20 bg-[#252460]">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-semibold text-white mb-3">Explore <span class="font-light">More</span></h2>
                <p class="text-lg text-white/80">Quick access to everything you need</p>
            </div>

            <div class="grid md:grid-cols-3 gap-6">
                <a href="{{ route('contact') }}" class="block p-8 text-center hover:shadow-2xl transition-all duration-300 border-0 bg-white rounded-xl hover:scale-105">
                    <div class="w-16 h-16 bg-[#252460] rounded-full flex items-center justify-center mx-auto mb-4 text-white text-3xl">👥</div>
                    <h3 class="text-2xl font-bold text-[#252460] mb-2">Join Us</h3>
                    <p class="text-[#252460]/70">Become part of our 4,500+ member community</p>
                </a>
                <a href="{{ route('events') }}" class="block p-8 text-center hover:shadow-2xl transition-all duration-300 border-0 bg-white rounded-xl hover:scale-105">
                    <div class="w-16 h-16 bg-[#252460] rounded-full flex items-center justify-center mx-auto mb-4 text-white text-3xl">📅</div>
                    <h3 class="text-2xl font-bold text-[#252460] mb-2">Events</h3>
                    <p class="text-[#252460]/70">Explore workshops, career fairs, and seminars</p>
                </a>
                <a href="{{ route('resources') }}" class="block p-8 text-center hover:shadow-2xl transition-all duration-300 border-0 bg-white rounded-xl hover:scale-105">
                    <div class="w-16 h-16 bg-[#252460] rounded-full flex items-center justify-center mx-auto mb-4 text-white text-3xl">📚</div>
                    <h3 class="text-2xl font-bold text-[#252460] mb-2">Resources</h3>
                    <p class="text-[#252460]/70">Access templates, guides, and career tools</p>
                </a>
            </div>
        </div>
    </section>
</div>
@endsection
