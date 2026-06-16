@extends('layouts.app')

@section('title', 'Events - AUST CDC')

@section('content')
@php
    $upcomingEvents = [
        ['title' => 'Resume Building Workshop', 'description' => 'Learn how to craft a compelling resume that stands out to recruiters. Get expert tips on formatting, content, and ATS optimization.', 'date' => 'March 20, 2026', 'time' => '2:00 PM - 4:00 PM', 'location' => 'Seminar Hall A', 'category' => 'Workshop', 'spots' => 50, 'registered' => 32, 'image' => 'https://images.unsplash.com/photo-1661333886128-98466117d88b?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxidXNpbmVzcyUyMHdvcmtzaG9wJTIwY29uZmVyZW5jZXxlbnwxfHx8fDE3NzMzNzI4NzB8MA&ixlib=rb-4.1.0&q=80&w=1080'],
        ['title' => 'Tech Career Fair 2026', 'description' => 'Meet with representatives from leading tech companies. Explore internship and full-time opportunities in software development, data science, and more.', 'date' => 'March 25, 2026', 'time' => '10:00 AM - 5:00 PM', 'location' => 'Main Campus Ground', 'category' => 'Career Fair', 'spots' => 300, 'registered' => 187, 'image' => 'https://images.unsplash.com/photo-1772724317613-f9a09ca9cfe4?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxuZXR3b3JraW5nJTIwZXZlbnQlMjBwcm9mZXNzaW9uYWxzfGVufDF8fHx8MTc3MzM2MDY3NXww&ixlib=rb-4.1.0&q=80&w=1080'],
        ['title' => 'Interview Preparation Session', 'description' => 'Master the art of interviewing with mock interviews, behavioral question practice, and feedback from industry professionals.', 'date' => 'March 28, 2026', 'time' => '3:00 PM - 5:00 PM', 'location' => 'Room 301', 'category' => 'Workshop', 'spots' => 40, 'registered' => 28, 'image' => 'https://images.unsplash.com/photo-1769740333462-9a63bfa914bc?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxwcm9mZXNzaW9uYWwlMjB0ZWFtJTIwbWVldGluZyUyMG9mZmljZXxlbnwxfHx8fDE3NzMzMzkyODR8MA&ixlib=rb-4.1.0&q=80&w=1080'],
        ['title' => 'LinkedIn Profile Optimization', 'description' => 'Transform your LinkedIn profile into a powerful personal brand. Learn networking strategies and how to attract recruiters.', 'date' => 'April 5, 2026', 'time' => '4:00 PM - 6:00 PM', 'location' => 'Computer Lab 2', 'category' => 'Workshop', 'spots' => 35, 'registered' => 22, 'image' => 'https://images.unsplash.com/photo-1633356122102-3fe601e05bd2?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxsaW5rZWRpbiUyMHByb2ZpbGV8ZW58MXx8fHwxNzQyMjA2NDkzfDA&ixlib=rb-4.1.0&q=80&w=1080'],
    ];

    $pastEvents = [
        ['title' => 'Annual Alumni Meetup 2025', 'description' => 'Connected current students with successful alumni from various industries.', 'date' => 'December 15, 2025', 'attendees' => 150, 'category' => 'Networking'],
        ['title' => 'Mock Interview Marathon', 'description' => 'Conducted 50+ mock interviews with industry professionals.', 'date' => 'November 20, 2025', 'attendees' => 80, 'category' => 'Workshop'],
        ['title' => 'Startup Career Panel', 'description' => 'Panel discussion with founders and early employees of successful startups.', 'date' => 'October 10, 2025', 'attendees' => 120, 'category' => 'Seminar'],
    ];
@endphp

<div class="min-h-screen" x-data="{ tab: 'upcoming' }">
    <section class="pt-32 pb-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto animate-fade-up">
                <h1 class="text-5xl lg:text-6xl mb-6 text-[#252460]">Upcoming <span class="text-[#252460]">Events</span></h1>
                <p class="text-xl text-[#252460]">Join our workshops, career fairs, and networking events to accelerate your career journey</p>
            </div>
        </div>
    </section>

    <section class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid w-full max-w-md mx-auto grid-cols-2 glass-card mb-12 rounded-lg p-1">
                <button type="button" @click="tab = 'upcoming'" :class="tab === 'upcoming' ? 'bg-[#252460] text-white' : 'text-[#252460]'" class="rounded-md px-4 py-2 transition-all">Upcoming Events</button>
                <button type="button" @click="tab = 'past'" :class="tab === 'past' ? 'bg-[#252460] text-white' : 'text-[#252460]'" class="rounded-md px-4 py-2 transition-all">Past Events</button>
            </div>

            <div x-show="tab === 'upcoming'" x-transition class="space-y-8">
                @foreach($upcomingEvents as $event)
                    @php $percent = round(($event['registered'] / $event['spots']) * 100); @endphp
                    <div class="glass-card border border-[#252460]/20 hover:border-[#252460]/50 transition-all duration-300 overflow-hidden rounded-2xl">
                        <div class="grid md:grid-cols-3 gap-6 p-6">
                            <div class="relative h-48 md:h-full rounded-lg overflow-hidden">
                                <img src="{{ $event['image'] }}" alt="{{ $event['title'] }}" class="w-full h-full object-cover">
                                <span class="absolute top-3 left-3 bg-[#252460] text-white border-0 px-3 py-1 rounded-full text-xs">{{ $event['category'] }}</span>
                            </div>
                            <div class="md:col-span-2 flex flex-col justify-between">
                                <div>
                                    <h3 class="text-2xl mb-3 text-[#252460]">{{ $event['title'] }}</h3>
                                    <p class="text-[#252460]/80 mb-4">{{ $event['description'] }}</p>
                                    <div class="grid sm:grid-cols-2 gap-3 mb-4">
                                        <div class="flex items-center space-x-2 text-[#252460]"><span class="font-semibold">Date:</span><span>{{ $event['date'] }}</span></div>
                                        <div class="flex items-center space-x-2 text-[#252460]"><span class="font-semibold">Time:</span><span>{{ $event['time'] }}</span></div>
                                        <div class="flex items-center space-x-2 text-[#252460]"><span class="font-semibold">Location:</span><span>{{ $event['location'] }}</span></div>
                                        <div class="flex items-center space-x-2 text-[#252460]"><span class="font-semibold">Registered:</span><span>{{ $event['registered'] }}/{{ $event['spots'] }}</span></div>
                                    </div>
                                    <div class="mb-4">
                                        <div class="h-2 bg-gray-200 rounded-full overflow-hidden">
                                            <div class="h-full bg-[#252460] rounded-full transition-all duration-500" style="width: {{ $percent }}%"></div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <a href="{{ route('contact') }}" class="inline-flex items-center bg-[#252460] hover:bg-[#252460]/90 text-white px-5 py-3 rounded-lg transition-all">Register Now <span class="ml-2">→</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div x-show="tab === 'past'" x-transition class="grid md:grid-cols-3 gap-6">
                @foreach($pastEvents as $event)
                    <div class="p-6 h-full glass-card border border-[#252460]/20 hover:border-[#252460]/50 transition-all duration-300 rounded-2xl">
                        <span class="mb-3 inline-block bg-gray-200 text-[#252460] border-0 px-3 py-1 rounded-full text-xs">{{ $event['category'] }}</span>
                        <h3 class="text-xl mb-3 text-[#252460]">{{ $event['title'] }}</h3>
                        <p class="text-[#252460]/80 mb-4">{{ $event['description'] }}</p>
                        <div class="flex items-center justify-between text-sm gap-4">
                            <div class="flex items-center space-x-2 text-[#252460]"><span class="font-semibold">Date:</span><span>{{ $event['date'] }}</span></div>
                            <div class="flex items-center space-x-2 text-[#252460]"><span class="font-semibold">Attendees:</span><span>{{ $event['attendees'] }}</span></div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="glass-card border border-[#252460]/30 p-12 rounded-2xl text-center">
                <h2 class="text-4xl lg:text-5xl mb-6 text-[#252460]">Don't Miss Out on <span class="text-[#252460]">Future Events</span></h2>
                <p class="text-xl text-[#252460] mb-8">Stay updated with our latest events and workshops by joining our community</p>
                <a href="{{ route('contact') }}" class="inline-flex items-center bg-[#252460] hover:bg-[#252460]/90 text-white px-8 py-4 rounded-lg transition-all">Join Our Newsletter <span class="ml-2">→</span></a>
            </div>
        </div>
    </section>
</div>
@endsection
