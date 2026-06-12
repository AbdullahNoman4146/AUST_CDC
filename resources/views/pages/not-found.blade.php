@extends('layouts.app')

@section('title', 'Page Not Found - AUST CDC')

@section('content')
<div class="min-h-screen flex items-center justify-center px-4 py-20">
    <div class="text-center max-w-2xl animate-fade-up">
        <div class="mb-8">
            <div class="inline-flex items-center justify-center w-32 h-32 bg-[#252460] rounded-full mb-6 text-white text-6xl">🔎</div>
        </div>

        <div class="text-9xl font-bold text-[#252460] mb-4">404</div>
        <h1 class="text-4xl lg:text-5xl mb-4 text-[#252460]">Page Not Found</h1>
        <p class="text-xl text-[#252460]/80 mb-8">Sorry, we couldn't find the page you're looking for. It might have been moved or deleted.</p>

        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('home') }}" class="inline-flex items-center justify-center bg-[#252460] hover:bg-[#252460]/90 text-white px-6 py-3 rounded-lg transition-all">🏠 Go to Homepage</a>
            <button type="button" onclick="window.history.back()" class="inline-flex items-center justify-center border border-[#252460] text-[#252460] hover:bg-[#252460]/10 px-6 py-3 rounded-lg transition-all">← Go Back</button>
        </div>

        <div class="mt-12 glass-card p-6 rounded-lg border border-[#252460]/20">
            <p class="text-[#252460]">Looking for something specific? Try visiting our <a href="{{ route('home') }}" class="text-[#252460] hover:underline">homepage</a> or <a href="{{ route('contact') }}" class="text-[#252460] hover:underline">contact us</a> for assistance.</p>
        </div>
    </div>
</div>
@endsection
