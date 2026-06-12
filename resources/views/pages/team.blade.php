@extends('layouts.app')

@section('title', 'Team - AUST CDC')

@section('content')
@php
    $executives = [
        ['name' => 'Himel Datta Choudhury', 'position' => 'President', 'department' => 'Executive Panel', 'year' => "Spring '25", 'bio' => 'Leading the club with a vision to empower every student with career development opportunities.', 'email' => 'president@austcdc.edu', 'linkedin' => '#', 'image' => 'b96255a46a67bb0b3635039f2db3555f9a07715d.png'],
        ['name' => 'Shah Amanath Syem', 'position' => 'Vice President', 'department' => 'Executive Panel', 'year' => "Spring '25", 'bio' => 'Supporting strategic initiatives and coordinating with various departments.', 'email' => 'vp@austcdc.edu', 'linkedin' => '#', 'image' => 'bab0ec3cb5affb48d7a3738a827f0af46f65da04.png'],
        ['name' => 'Fahid Inshad Safat', 'position' => 'General Secretary', 'department' => 'Executive Panel', 'year' => "Spring '25", 'bio' => 'Managing club operations, communications, and ensuring seamless coordination.', 'email' => 'gs@austcdc.edu', 'linkedin' => '#', 'image' => 'aadfcde0ea301240fca85f05c3d28e6920c036ae.png'],
        ['name' => 'Shahrin Nusrat Tasnim', 'position' => 'Joint Secretary', 'department' => 'Executive Panel', 'year' => "Spring '25", 'bio' => 'Assisting in club administration and coordinating events and activities.', 'email' => 'jointsec1@austcdc.edu', 'linkedin' => '#', 'image' => 'c2df3feffcbab94d62e61befcd487b457c273e8a.png'],
        ['name' => 'Md Eyaman Islam', 'position' => 'Joint Secretary', 'department' => 'Executive Panel', 'year' => "Spring '25", 'bio' => 'Supporting organizational tasks and member communications.', 'email' => 'jointsec2@austcdc.edu', 'linkedin' => '#', 'image' => '8f64f9fe804fc4f4279b9b904c6bc84c33221e6c.png'],
        ['name' => 'Mahir Tanjim', 'position' => 'Organising Secretary', 'department' => 'Executive Panel', 'year' => "Spring '25", 'bio' => 'Coordinating and organizing all club events, workshops, and activities.', 'email' => 'organising@austcdc.edu', 'linkedin' => '#', 'image' => '50c83ae66c2bb9bd7e691c671c5d7c6e92d2de60.png'],
    ];

    $directors = [
        ['name' => 'Shatirtha Barua Bivore', 'position' => 'Director', 'department' => 'Public Relation & Communication', 'year' => "Spring '25", 'bio' => 'Managing public relations, communications, and club branding initiatives.', 'email' => 'pr@austcdc.edu', 'linkedin' => '#', 'image' => '4e936220fbdd5d67cc8ba0a9621f607b1a6d0054.png'],
        ['name' => 'Mahir Mahmud', 'position' => 'Director', 'department' => 'Marketing & Branding', 'year' => "Spring '25", 'bio' => 'Leading marketing strategies and brand development for the club.', 'email' => 'marketing@austcdc.edu', 'linkedin' => '#', 'image' => '8c22bd1629ff0f3de61e50fc0ec1c32e74761e05.png'],
        ['name' => 'Silvia Islam', 'position' => 'Director', 'department' => 'Innovation & Design', 'year' => "Spring '25", 'bio' => 'Driving creative innovation and design excellence across all club initiatives.', 'email' => 'innovation@austcdc.edu', 'linkedin' => '#', 'image' => 'dc3c8d6f94eef7b3fb195eea7c7119946e006a6e.png'],
        ['name' => 'Rafid Rayyan', 'position' => 'Director', 'department' => 'Event Management', 'year' => "Spring '25", 'bio' => 'Overseeing event planning, execution, and ensuring memorable experiences.', 'email' => 'events@austcdc.edu', 'linkedin' => '#', 'image' => '0e0e9b5a57c8d009cdfea978de06cbb221836f67.png'],
        ['name' => 'Afsara Siddique', 'position' => 'Director', 'department' => 'HR & Administration', 'year' => "Spring '25", 'bio' => 'Managing human resources, team coordination, and administrative functions.', 'email' => 'hr@austcdc.edu', 'linkedin' => '#', 'image' => '572e2a81d727c7f1c7b22bad3fb07a3803ddadd2.png'],
        ['name' => 'Tanzim Hasan', 'position' => 'Director', 'department' => 'Sponsorship & Collaboration', 'year' => "Spring '25", 'bio' => 'Building partnerships with sponsors and fostering strategic collaborations.', 'email' => 'sponsorship@austcdc.edu', 'linkedin' => '#', 'image' => 'b16a4935686ba294cb1a40af23e2fb3a90a53703.png'],
    ];

    $departments = [
        ['name' => 'Events & Programs', 'head' => 'Sarah Islam', 'members' => 8, 'description' => 'Organizing workshops, seminars, and career fairs throughout the year.', 'icon' => '🎯'],
        ['name' => 'Marketing & Outreach', 'head' => 'Kamal Hassan', 'members' => 6, 'description' => 'Managing social media, promotions, and member engagement.', 'icon' => '⚡'],
        ['name' => 'Resources & Content', 'head' => 'Nusrat Jahan', 'members' => 7, 'description' => 'Creating and curating career development resources and materials.', 'icon' => '🏆'],
        ['name' => 'Corporate Relations', 'head' => 'Imran Hossain', 'members' => 5, 'description' => 'Building partnerships with companies and alumni networks.', 'icon' => '👥'],
    ];
@endphp

<div class="min-h-screen">
    <section class="pt-32 pb-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto animate-fade-up">
                <h1 class="text-5xl lg:text-6xl mb-6 text-[#252460]">Meet Our <span class="text-[#252460]">Team</span></h1>
                <p class="text-xl text-[#252460]">Dedicated students working together to empower the AUST community with career development resources and opportunities</p>
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl mb-4 text-center text-[#252460]">Executive <span class="text-[#252460]">Board</span></h2>
            <p class="text-center text-[#252460]/80 mb-12 max-w-2xl mx-auto">Our leadership team guiding the club's vision and initiatives</p>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach($executives as $member)
                    <div class="relative p-8 border border-gray-200 hover:border-[#252460] transition-all duration-300 h-full bg-white backdrop-blur-sm rounded-2xl hover:-translate-y-2">
                        <div class="flex justify-center mb-6">
                            <div class="relative w-32 h-32 rounded-full overflow-hidden ring-4 ring-[#252460]/20 hover:ring-[#252460]/40 transition-all duration-300">
                                <img src="{{ asset('assets/' . $member['image']) }}" alt="{{ $member['name'] }}" class="w-full h-full object-cover" style="object-position: center center;">
                            </div>
                        </div>
                        <div class="text-center space-y-2">
                            <h3 class="text-xl font-bold text-[#252460]">{{ $member['name'] }}</h3>
                            <p class="text-base font-semibold text-[#252460]">{{ $member['position'] }}</p>
                            <p class="text-sm text-[#252460]/80">{{ $member['department'] }}</p>
                            <p class="text-sm text-[#252460]/70">{{ $member['year'] }}</p>
                        </div>
                        <p class="text-sm text-[#252460]/80 text-center mt-4 leading-relaxed">{{ $member['bio'] }}</p>
                        <div class="flex justify-center gap-3 mt-6">
                            <a href="mailto:{{ $member['email'] }}" class="w-9 h-9 rounded-full border border-gray-300 flex items-center justify-center text-[#252460]/80 hover:border-[#252460] hover:text-[#252460] hover:bg-[#252460]/10 transition-all duration-300">✉</a>
                            <a href="{{ $member['linkedin'] }}" class="w-9 h-9 rounded-full border border-gray-300 flex items-center justify-center text-[#252460]/80 hover:border-[#252460] hover:text-[#252460] hover:bg-[#252460]/10 transition-all duration-300">in</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl mb-4 text-center text-[#252460]">Our <span class="text-[#252460]">Directors</span></h2>
            <p class="text-center text-[#252460]/80 mb-12 max-w-2xl mx-auto">Specialized leaders overseeing key areas of the club</p>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach($directors as $member)
                    <div class="relative p-8 border border-gray-200 hover:border-[#252460] transition-all duration-300 h-full bg-white backdrop-blur-sm rounded-2xl hover:-translate-y-2">
                        <div class="flex justify-center mb-6">
                            <div class="relative w-32 h-32 rounded-full overflow-hidden ring-4 ring-[#252460]/20 hover:ring-[#252460]/40 transition-all duration-300">
                                <img src="{{ asset('assets/' . $member['image']) }}" alt="{{ $member['name'] }}" class="w-full h-full object-cover scale-110" style="object-position: center 30%;">
                            </div>
                        </div>
                        <div class="text-center space-y-2">
                            <h3 class="text-xl font-bold text-[#252460]">{{ $member['name'] }}</h3>
                            <p class="text-base font-semibold text-[#252460]">{{ $member['position'] }}</p>
                            <p class="text-sm text-[#252460]/80">{{ $member['department'] }}</p>
                            <p class="text-sm text-[#252460]/70">{{ $member['year'] }}</p>
                        </div>
                        <p class="text-sm text-[#252460]/80 text-center mt-4 leading-relaxed">{{ $member['bio'] }}</p>
                        <div class="flex justify-center gap-3 mt-6">
                            <a href="mailto:{{ $member['email'] }}" class="w-9 h-9 rounded-full border border-gray-300 flex items-center justify-center text-[#252460]/80 hover:border-[#252460] hover:text-[#252460] hover:bg-[#252460]/10 transition-all duration-300">✉</a>
                            <a href="{{ $member['linkedin'] }}" class="w-9 h-9 rounded-full border border-gray-300 flex items-center justify-center text-[#252460]/80 hover:border-[#252460] hover:text-[#252460] hover:bg-[#252460]/10 transition-all duration-300">in</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl mb-4 text-center text-[#252460]">Our <span class="text-[#252460]">Departments</span></h2>
            <p class="text-center text-[#252460]/80 mb-12 max-w-2xl mx-auto">Specialized teams working on different aspects of career development</p>

            <div class="grid md:grid-cols-2 gap-8">
                @foreach($departments as $dept)
                    <div class="p-8 glass-card border border-[#252460]/20 hover:border-[#252460]/50 transition-all duration-300 h-full rounded-2xl hover:scale-105">
                        <div class="flex items-start space-x-4">
                            <div class="w-16 h-16 bg-[#252460] rounded-2xl flex items-center justify-center flex-shrink-0 text-white text-3xl">{{ $dept['icon'] }}</div>
                            <div class="flex-1">
                                <h3 class="text-2xl mb-2 text-[#252460]">{{ $dept['name'] }}</h3>
                                <p class="text-sm text-[#252460] mb-3">Head: {{ $dept['head'] }} • {{ $dept['members'] }} Members</p>
                                <p class="text-[#252460]/80">{{ $dept['description'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="glass-card border border-[#252460]/30 p-12 rounded-2xl text-center">
                <div class="mx-auto mb-6 text-[#252460] text-6xl">👥</div>
                <h2 class="text-4xl lg:text-5xl mb-6 text-[#252460]">Want to <span class="text-[#252460]">Join Our Team?</span></h2>
                <p class="text-xl text-[#252460] mb-8">We're always looking for passionate students to join our team and make a difference in the AUST community</p>
                <a href="{{ route('contact') }}" class="inline-flex bg-[#252460] hover:bg-[#252460]/90 text-white px-8 py-4 rounded-lg transition-all">Apply Now</a>
            </div>
        </div>
    </section>
</div>
@endsection
