@extends('layouts.app')

@section('title', 'About - AUST CDC')

@section('content')
@php
    $objectives = [
        'Provide career counseling and mentorship to AUST students',
        'Organize workshops, seminars, and training sessions on professional skills',
        'Facilitate networking opportunities with industry professionals and alumni',
        'Offer resources and tools for resume building, interview preparation, and job searching',
        'Host career fairs and recruitment events with top companies',
        'Create a supportive community for career development and professional growth',
    ];

    $values = [
        ['icon' => '💡', 'title' => 'Innovation', 'description' => 'Embracing new ideas and creative approaches to career development'],
        ['icon' => '🤍', 'title' => 'Excellence', 'description' => 'Striving for the highest standards in everything we do'],
        ['icon' => '👥', 'title' => 'Collaboration', 'description' => 'Working together to achieve common goals and support each other'],
        ['icon' => '⚡', 'title' => 'Impact', 'description' => 'Making a meaningful difference in students\' career journeys'],
    ];
@endphp

<div class="min-h-screen">
    <section class="pt-32 pb-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto animate-fade-up">
                <h1 class="text-5xl lg:text-6xl mb-6 text-[#252460]">About <span class="text-[#252460]">AUST CDC</span></h1>
                <p class="text-xl text-[#252460]">The premier student organization dedicated to empowering AUST students with the skills, knowledge, and connections they need to succeed in their careers.</p>
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12">
                <div class="p-8 h-full glass-card border-2 border-[#252460]/30 hover:border-[#252460] transition-all duration-300 rounded-2xl">
                    <div class="w-16 h-16 bg-[#252460] rounded-2xl flex items-center justify-center mb-6 text-white text-3xl">🎯</div>
                    <h2 class="text-3xl mb-4 text-[#252460]">Our Mission</h2>
                    <p class="text-[#252460]/80 text-lg">To empower AUST students with the knowledge, skills, and connections needed to excel in their chosen careers. We strive to bridge the gap between academic learning and professional success through comprehensive career development programs, mentorship, and industry engagement.</p>
                </div>
                <div class="p-8 h-full glass-card border-2 border-[#252460]/30 hover:border-[#252460] transition-all duration-300 rounded-2xl">
                    <div class="w-16 h-16 bg-[#252460] rounded-2xl flex items-center justify-center mb-6 text-white text-3xl">👁️</div>
                    <h2 class="text-3xl mb-4 text-[#252460]">Our Vision</h2>
                    <p class="text-[#252460]/80 text-lg">To be the leading career development club in Bangladesh, recognized for our commitment to student success and our innovative approach to career preparation. We envision a future where every AUST student is equipped with the tools and confidence to pursue their dream career.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="glass-card p-8 lg:p-12 rounded-2xl border border-[#252460]/30">
                <h2 class="text-4xl mb-6 text-[#252460] text-center">Our <span class="text-[#252460]">Story</span></h2>
                <p class="text-[#252460]/80 text-lg mb-4">Founded in 2015, the AUST Career Development Club emerged from a simple observation: students needed more support in navigating their career paths. What started as a small group of passionate students has grown into one of the most active and impactful clubs on campus.</p>
                <p class="text-[#252460]/80 text-lg">Over the years, we've helped thousands of students land their dream jobs, provided countless hours of mentorship, and built a thriving community of professionals who continue to support each other long after graduation. Our commitment to excellence and innovation has made us a trusted partner for both students and industry leaders.</p>
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl lg:text-5xl mb-12 text-center text-[#252460]">Our <span class="text-[#252460]">Objectives</span></h2>
            <div class="space-y-4">
                @foreach($objectives as $objective)
                    <div class="flex items-start space-x-4 glass-card p-6 rounded-xl hover:border-[#252460]/50 border border-[#252460]/20 transition-all duration-300">
                        <div class="w-8 h-8 bg-[#252460] text-white rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <span>{{ $loop->iteration }}</span>
                        </div>
                        <p class="text-[#252460]/80 text-lg flex-1">{{ $objective }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl lg:text-5xl mb-4 text-center text-[#252460]">Core <span class="text-[#252460]">Values</span></h2>
            <p class="text-xl text-[#252460]/80 text-center max-w-2xl mx-auto mb-12">The principles that guide everything we do</p>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach($values as $value)
                    <div class="p-6 text-center h-full glass-card border border-[#252460]/20 hover:border-[#252460]/50 transition-all duration-300 rounded-2xl hover:scale-105">
                        <div class="w-16 h-16 bg-[#252460] rounded-2xl flex items-center justify-center mx-auto mb-4 text-white text-3xl">{{ $value['icon'] }}</div>
                        <h3 class="text-xl mb-3 text-[#252460]">{{ $value['title'] }}</h3>
                        <p class="text-[#252460]/80">{{ $value['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-20 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-4xl lg:text-5xl mb-4 text-[#252460]">Our <span class="text-[#252460]">Impact</span></h2>
                <p class="text-xl text-[#252460]/80 max-w-2xl mx-auto">Making a real difference in students' career journeys</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center glass-card p-8 rounded-2xl border border-[#252460]/30 hover:border-[#252460] transition-all duration-300">
                    <div class="mx-auto mb-4 text-[#252460] text-5xl">📈</div>
                    <div class="text-5xl mb-2 text-[#252460]">2500+</div>
                    <p class="text-[#252460]/80">Students Guided</p>
                </div>
                <div class="text-center glass-card p-8 rounded-2xl border border-[#252460]/30 hover:border-[#252460] transition-all duration-300">
                    <div class="mx-auto mb-4 text-[#252460] text-5xl">👥</div>
                    <div class="text-5xl mb-2 text-[#252460]">150+</div>
                    <p class="text-[#252460]/80">Workshops Conducted</p>
                </div>
                <div class="text-center glass-card p-8 rounded-2xl border border-[#252460]/30 hover:border-[#252460] transition-all duration-300">
                    <div class="mx-auto mb-4 text-[#252460] text-5xl">🏆</div>
                    <div class="text-5xl mb-2 text-[#252460]">1000+</div>
                    <p class="text-[#252460]/80">Successful Placements</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="order-2 lg:order-1">
                    <h2 class="text-4xl lg:text-5xl mb-6 text-[#252460]">A Team <span class="text-[#252460]">United in Impact</span></h2>
                    <div class="space-y-4 text-[#252460]/80 text-lg leading-relaxed">
                        <p>A team driven by <strong class="text-[#252460]">purpose</strong>, connected by <strong class="text-[#252460]">collaboration</strong> and united in <strong class="text-[#252460]">impact</strong>. Through coordination and mutual trust, ideas are shaped into real outcomes.</p>
                        <p>Together, we create opportunities, empower futures and move forward with vision. At <strong class="text-[#252460]">AUSTCDC</strong>, challenges are anticipated, clarity guides adaptation and progress gains strength with every step.</p>
                    </div>
                </div>
                <div class="order-1 lg:order-2 relative">
                    <div class="relative rounded-2xl overflow-hidden border-2 border-[#252460]/30 hover:border-[#252460]/60 transition-all duration-300">
                        <img src="{{ asset('assets/a2b4677e7ad705a733c75294674a032fd05bfe57.png') }}" alt="AUST CDC Team - Empowering Dreams & Fostering Growth" class="w-full h-auto">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent pointer-events-none"></div>
                    </div>
                    <div class="absolute -inset-4 bg-[#252460]/20 rounded-2xl blur-2xl -z-10"></div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
