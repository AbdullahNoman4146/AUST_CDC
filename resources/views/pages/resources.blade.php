@extends('layouts.app')

@section('title', 'Resources - AUST CDC')

@section('content')
@php
    $resumeTemplates = [
        ['name' => 'Modern Professional', 'type' => 'DOCX', 'downloads' => 1250],
        ['name' => 'Tech Industry', 'type' => 'PDF', 'downloads' => 980],
        ['name' => 'Creative Designer', 'type' => 'DOCX', 'downloads' => 756],
        ['name' => 'Fresh Graduate', 'type' => 'PDF', 'downloads' => 1450],
        ['name' => 'Minimalist', 'type' => 'DOCX', 'downloads' => 892],
        ['name' => 'Executive Level', 'type' => 'PDF', 'downloads' => 623],
    ];

    $careerGuides = [
        ['title' => 'Complete Guide to Software Engineering Careers', 'description' => 'Everything you need to know about starting and advancing your career in software development.', 'category' => 'Technology', 'pages' => 45],
        ['title' => 'Breaking into Data Science', 'description' => 'A comprehensive roadmap for aspiring data scientists and analysts.', 'category' => 'Technology', 'pages' => 38],
        ['title' => 'Finance & Banking Career Path', 'description' => 'Navigate your way through various roles in the finance industry.', 'category' => 'Finance', 'pages' => 52],
        ['title' => 'Engineering Project Management', 'description' => 'Learn how to transition from engineering to project management roles.', 'category' => 'Engineering', 'pages' => 41],
        ['title' => 'Entrepreneurship Starter Guide', 'description' => 'Essential steps to launch and grow your own startup.', 'category' => 'Business', 'pages' => 48],
        ['title' => 'Digital Marketing Careers', 'description' => 'Explore opportunities in SEO, content marketing, social media, and analytics.', 'category' => 'Marketing', 'pages' => 35],
    ];

    $videoTutorials = [
        ['title' => 'Mastering the STAR Method for Interviews', 'duration' => '12:45', 'views' => 3250],
        ['title' => 'LinkedIn Networking Strategies', 'duration' => '18:20', 'views' => 2840],
        ['title' => 'Salary Negotiation Tips', 'duration' => '15:30', 'views' => 4120],
        ['title' => 'Building Your Personal Brand', 'duration' => '22:15', 'views' => 2650],
    ];

    $interviewResources = [
        ['title' => 'Top 50 Behavioral Interview Questions', 'description' => 'Common questions with example answers and tips.', 'type' => 'PDF Guide'],
        ['title' => 'Technical Interview Prep Checklist', 'description' => 'Complete preparation guide for coding interviews.', 'type' => 'Checklist'],
        ['title' => 'Case Study Interview Framework', 'description' => 'Structured approach to solving business cases.', 'type' => 'Framework'],
        ['title' => 'Virtual Interview Best Practices', 'description' => 'Stand out in remote interview settings.', 'type' => 'Guide'],
    ];
@endphp

<div class="min-h-screen" x-data="{ tab: 'templates' }">
    <section class="pt-32 pb-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto animate-fade-up">
                <div class="inline-flex items-center space-x-2 glass px-4 py-2 rounded-full mb-6">
                    <span class="sr-only">Resources</span>
                    <span class="text-sm text-[#252460]">Free Career Resources</span>
                </div>
                <h1 class="text-5xl lg:text-6xl mb-6 text-[#252460]">Career Development <span class="text-[#252460]">Resources</span></h1>
                <p class="text-xl text-[#252460]">Access our comprehensive library of templates, guides, and tutorials to boost your career</p>
            </div>

            <div class="max-w-2xl mx-auto mt-8">
                    <div class="relative glass-card p-2 rounded-lg">
                    <input type="text" placeholder="Search resources..." class="w-full bg-transparent border-0 text-[#252460] placeholder:text-[#252460]/70 focus:outline-none px-4 py-3">
                </div>
            </div>
        </div>
    </section>

    <section class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid w-full max-w-2xl mx-auto grid-cols-2 md:grid-cols-4 glass-card mb-12 rounded-lg p-1 gap-1">
                <button @click="tab = 'templates'" :class="tab === 'templates' ? 'bg-[#252460] text-white' : 'text-[#252460]'" class="rounded-md px-4 py-2 transition-all">Templates</button>
                <button @click="tab = 'guides'" :class="tab === 'guides' ? 'bg-[#252460] text-white' : 'text-[#252460]'" class="rounded-md px-4 py-2 transition-all">Guides</button>
                <button @click="tab = 'videos'" :class="tab === 'videos' ? 'bg-[#252460] text-white' : 'text-[#252460]'" class="rounded-md px-4 py-2 transition-all">Videos</button>
                <button @click="tab = 'interview'" :class="tab === 'interview' ? 'bg-[#252460] text-white' : 'text-[#252460]'" class="rounded-md px-4 py-2 transition-all">Interview</button>
            </div>

            <div x-show="tab === 'templates'" x-transition>
                <h2 class="text-3xl mb-8 text-center text-[#252460]">Resume <span class="text-[#252460]">Templates</span></h2>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($resumeTemplates as $template)
                        <div class="p-6 glass-card border border-[#252460]/20 hover:border-[#252460]/50 transition-all duration-300 h-full flex flex-col justify-between rounded-2xl hover:-translate-y-1">
                            <div>
                                <div class="w-12 h-12 bg-[#252460] rounded-lg flex items-center justify-center mb-4 text-white text-2xl">{{ strtoupper(substr($template['type'], 0, 1)) }}</div>
                                <h3 class="text-xl mb-2 text-[#252460]">{{ $template['name'] }}</h3>
                                <div class="flex items-center justify-between mb-4">
                                    <span class="bg-gray-200 text-[#252460] border-0 px-3 py-1 rounded-full text-xs">{{ $template['type'] }}</span>
                                    <span class="text-sm text-[#252460]/80">{{ number_format($template['downloads']) }} downloads</span>
                                </div>
                            </div>
                            <a href="#" class="w-full bg-[#252460] hover:bg-[#252460]/90 text-white px-4 py-3 rounded-lg text-center transition-all">⬇ Download</a>
                        </div>
                    @endforeach
                </div>
            </div>

            <div x-show="tab === 'guides'" x-transition>
                <h2 class="text-3xl mb-8 text-center text-[#252460]">Career <span class="text-[#252460]">Guides</span></h2>
                <div class="grid md:grid-cols-2 gap-6">
                    @foreach($careerGuides as $guide)
                        <div class="p-6 glass-card border border-[#252460]/20 hover:border-[#252460]/50 transition-all duration-300 h-full flex flex-col justify-between rounded-2xl hover:-translate-y-1">
                            <div>
                                <div class="flex items-start justify-between mb-4">
                                    <div class="w-12 h-12 bg-[#252460] rounded-lg flex items-center justify-center text-white text-2xl">{{ strtoupper(substr($guide['category'], 0, 1)) }}</div>
                                    <span class="bg-[#252460] text-white border-0 px-3 py-1 rounded-full text-xs">{{ $guide['category'] }}</span>
                                </div>
                                <h3 class="text-xl mb-2 text-[#252460]">{{ $guide['title'] }}</h3>
                                <p class="text-[#252460]/80 mb-4">{{ $guide['description'] }}</p>
                                <p class="text-sm text-[#252460]/70">{{ $guide['pages'] }} pages</p>
                            </div>
                            <a href="#" class="w-full mt-4 border border-[#252460] text-[#252460] hover:bg-[#252460]/10 px-4 py-3 rounded-lg text-center transition-all">↗ Read Guide</a>
                        </div>
                    @endforeach
                </div>
            </div>

            <div x-show="tab === 'videos'" x-transition>
                <h2 class="text-3xl mb-8 text-center text-[#252460]">Video <span class="text-[#252460]">Tutorials</span></h2>
                <div class="grid md:grid-cols-2 gap-6">
                    @foreach($videoTutorials as $video)
                        <div class="p-6 glass-card border border-[#252460]/20 hover:border-[#252460]/50 transition-all duration-300 rounded-2xl hover:-translate-y-1">
                            <div class="flex items-start space-x-4">
                                <div class="w-16 h-16 bg-[#252460] rounded-lg flex items-center justify-center flex-shrink-0 text-white text-3xl">▶</div>
                                <div class="flex-1">
                                    <h3 class="text-lg mb-2 text-[#252460]">{{ $video['title'] }}</h3>
                                    <div class="flex items-center space-x-4 text-sm text-[#252460]/80">
                                        <span>{{ $video['duration'] }}</span><span>•</span><span>{{ number_format($video['views']) }} views</span>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="block w-full mt-4 border border-[#252460] text-[#252460] hover:bg-[#252460]/10 px-4 py-3 rounded-lg text-center transition-all">Watch Now</a>
                        </div>
                    @endforeach
                </div>
            </div>

            <div x-show="tab === 'interview'" x-transition>
                <h2 class="text-3xl mb-8 text-center text-[#252460]">Interview <span class="text-[#252460]">Preparation</span></h2>
                <div class="grid md:grid-cols-2 gap-6">
                    @foreach($interviewResources as $resource)
                        <div class="p-6 glass-card border border-[#252460]/20 hover:border-[#252460]/50 transition-all duration-300 h-full flex flex-col justify-between rounded-2xl hover:-translate-y-1">
                            <div>
                                <span class="mb-3 inline-block bg-[#252460] text-white border-0 px-3 py-1 rounded-full text-xs">{{ $resource['type'] }}</span>
                                <h3 class="text-xl mb-2 text-[#252460]">{{ $resource['title'] }}</h3>
                                <p class="text-[#252460]/80">{{ $resource['description'] }}</p>
                            </div>
                            <a href="#" class="w-full mt-4 bg-[#252460] hover:bg-[#252460]/90 text-white px-4 py-3 rounded-lg text-center transition-all">⬇ Download</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="glass-card border border-[#252460]/30 p-12 rounded-2xl text-center">
                <h2 class="text-4xl lg:text-5xl mb-6 text-[#252460]">Need More <span class="text-[#252460]">Help?</span></h2>
                <p class="text-xl text-[#252460] mb-8">Our mentors are here to provide personalized guidance for your career journey</p>
                <a href="{{ route('contact') }}" class="inline-flex items-center bg-[#252460] hover:bg-[#252460]/90 text-white px-8 py-4 rounded-lg transition-all">Book a Mentorship Session <span class="ml-2">↗</span></a>
            </div>
        </div>
    </section>
</div>
@endsection
