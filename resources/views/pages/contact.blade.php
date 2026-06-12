@extends('layouts.app')

@section('title', 'Contact - AUST CDC')

@section('content')
@php
    $contactInfo = [
        ['icon' => '✉️', 'title' => 'Email', 'details' => 'cdc@aust.edu', 'link' => 'mailto:cdc@aust.edu'],
        ['icon' => '📞', 'title' => 'Phone', 'details' => '+880-1234-567890', 'link' => 'tel:+8801234567890'],
        ['icon' => '📍', 'title' => 'Address', 'details' => 'Ahsanullah University of Science and Technology, 141-142 Love Road, Tejgaon, Dhaka-1208, Bangladesh', 'link' => '#'],
    ];

    $socialLinks = [
        ['icon' => 'f', 'name' => 'Facebook', 'link' => '#'],
        ['icon' => '𝕏', 'name' => 'Twitter', 'link' => '#'],
        ['icon' => 'in', 'name' => 'LinkedIn', 'link' => '#'],
        ['icon' => '◎', 'name' => 'Instagram', 'link' => '#'],
    ];

    $officeHours = [
        ['day' => 'Saturday - Wednesday', 'hours' => '10:00 AM - 5:00 PM'],
        ['day' => 'Thursday', 'hours' => '10:00 AM - 3:00 PM'],
        ['day' => 'Friday', 'hours' => 'Closed'],
    ];
@endphp

<div class="min-h-screen">
    <section class="pt-32 pb-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto animate-fade-up">
                <h1 class="text-5xl lg:text-6xl mb-6 text-[#252460]">Get in <span class="text-[#252460]">Touch</span></h1>
                <p class="text-xl text-[#252460]">Have questions or want to join our community? We'd love to hear from you!</p>
            </div>
        </div>
    </section>

    <section class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-3 gap-8 mb-16">
                @foreach($contactInfo as $info)
                    <div class="p-6 glass-card border border-[#252460]/20 hover:border-[#252460]/50 transition-all duration-300 text-center h-full rounded-2xl hover:-translate-y-1">
                        <div class="w-16 h-16 bg-[#252460] rounded-full flex items-center justify-center mx-auto mb-4 text-white text-3xl">{{ $info['icon'] }}</div>
                        <h3 class="text-xl mb-2 text-[#252460]">{{ $info['title'] }}</h3>
                        <a href="{{ $info['link'] }}" class="text-[#252460]/80 hover:text-[#252460] transition-colors">{{ $info['details'] }}</a>
                    </div>
                @endforeach
            </div>

            <div class="grid lg:grid-cols-2 gap-12">
                <div class="p-8 glass-card border border-[#252460]/30 rounded-2xl">
                    <div class="flex items-center space-x-2 mb-6">
                        <span class="text-[#252460] text-2xl">💬</span>
                        <h2 class="text-3xl text-[#252460]">Send us a Message</h2>
                    </div>
                    <form action="#" method="POST" class="space-y-6">
                        @csrf
                        <div>
                            <label for="name" class="text-[#252460] block mb-2">Full Name</label>
                            <input id="name" name="name" type="text" placeholder="Enter your name" class="w-full mt-2 glass border border-[#252460]/30 rounded-lg px-4 py-3 text-[#252460] placeholder:text-[#252460]/70 focus:outline-none focus:ring-2 focus:ring-[#252460]/30">
                        </div>
                        <div>
                            <label for="email" class="text-[#252460] block mb-2">Email</label>
                            <input id="email" name="email" type="email" placeholder="your.email@example.com" class="w-full mt-2 glass border border-[#252460]/30 rounded-lg px-4 py-3 text-[#252460] placeholder:text-[#252460]/70 focus:outline-none focus:ring-2 focus:ring-[#252460]/30">
                        </div>
                        <div>
                            <label for="subject" class="text-[#252460] block mb-2">Subject</label>
                            <input id="subject" name="subject" type="text" placeholder="What is this regarding?" class="w-full mt-2 glass border border-[#252460]/30 rounded-lg px-4 py-3 text-[#252460] placeholder:text-[#252460]/70 focus:outline-none focus:ring-2 focus:ring-[#252460]/30">
                        </div>
                        <div>
                            <label for="message" class="text-[#252460] block mb-2">Message</label>
                            <textarea id="message" name="message" placeholder="Tell us how we can help you..." rows="5" class="w-full mt-2 glass border border-[#252460]/30 rounded-lg px-4 py-3 text-[#252460] placeholder:text-[#252460]/70 focus:outline-none focus:ring-2 focus:ring-[#252460]/30"></textarea>
                        </div>
                        <button type="submit" class="w-full bg-[#252460] hover:bg-[#252460]/90 text-white px-6 py-3 rounded-lg transition-all">✈ Send Message</button>
                    </form>
                </div>

                <div class="space-y-8">
                    <div class="p-8 glass-card border border-[#252460]/30 rounded-2xl">
                        <div class="flex items-center space-x-2 mb-6">
                            <span class="text-[#252460] text-2xl">🕒</span>
                            <h2 class="text-3xl text-[#252460]">Office Hours</h2>
                        </div>
                        <div class="space-y-4">
                            @foreach($officeHours as $schedule)
                                <div class="flex justify-between items-center p-4 glass rounded-lg border border-[#252460]/20 gap-4">
                                    <span class="text-[#252460] font-medium">{{ $schedule['day'] }}</span>
                                    <span class="text-[#252460]/80 text-right">{{ $schedule['hours'] }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="p-8 glass-card border border-[#252460]/30 rounded-2xl">
                        <h2 class="text-3xl mb-6 text-[#252460]">Follow Us</h2>
                        <p class="text-[#252460]/80 mb-6">Stay connected with us on social media for updates on events, resources, and opportunities.</p>
                        <div class="grid grid-cols-2 gap-4">
                            @foreach($socialLinks as $social)
                                <a href="{{ $social['link'] }}" class="flex items-center space-x-3 p-4 glass-card border border-[#252460]/20 hover:border-[#252460]/50 rounded-lg transition-all duration-300 group">
                                    <div class="w-10 h-10 bg-[#252460] rounded-full flex items-center justify-center text-white">{{ $social['icon'] }}</div>
                                    <span class="text-[#252460] font-medium">{{ $social['name'] }}</span>
                                </a>
                            @endforeach
                        </div>
                    </div>

                    <div class="p-6 glass-card border border-[#252460]/30 bg-[#252460]/10 rounded-2xl">
                        <p class="text-[#252460] text-sm"><strong class="text-[#252460]">Note:</strong> For urgent matters, please email us directly at <a href="mailto:cdc@aust.edu" class="text-[#252460] hover:underline">cdc@aust.edu</a>. We typically respond within 24-48 hours.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl mb-8 text-center text-[#252460]">Visit <span class="text-[#252460]">Our Campus</span></h2>
            <div class="overflow-hidden glass-card border border-[#252460]/30 rounded-2xl">
                <div class="w-full h-96 bg-gradient-to-br from-gray-200 to-gray-300 flex items-center justify-center">
                    <div class="text-center px-4">
                        <div class="mx-auto mb-4 text-[#252460] text-5xl">📍</div>
                        <p class="text-[#252460] text-lg">Ahsanullah University of Science and Technology</p>
                        <p class="text-[#252460]/80">141-142 Love Road, Tejgaon, Dhaka-1208</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
