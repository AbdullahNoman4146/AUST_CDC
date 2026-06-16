@php
    $partners = [
        ['name' => 'Google', 'logo' => 'https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_92x30dp.png'],
        ['name' => 'Microsoft', 'logo' => 'https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE1Mu3b?ver=5c31'],
        ['name' => 'Amazon', 'logo' => 'https://upload.wikimedia.org/wikipedia/commons/a/a9/Amazon_logo.svg'],
        ['name' => 'Facebook', 'logo' => 'https://upload.wikimedia.org/wikipedia/commons/8/89/Facebook_Logo_%282019%29.svg'],
        ['name' => 'Apple', 'logo' => 'https://www.apple.com/ac/globalnav/7/en_US/images/be15095f-5a20-57d0-ad14-cf4c638e223a/globalnav_apple_image__b5er5ngrzxqq_large.svg'],
        ['name' => 'IBM', 'logo' => 'https://upload.wikimedia.org/wikipedia/commons/5/51/IBM_logo.svg'],
    ];
@endphp

<footer class="relative glass-card border-t border-[#252460]/20 text-[#252460]/80">
    <div class="relative border-b border-[#252460]/10 bg-gradient-to-r from-[#252460]/5 via-[#252460]/8 to-[#252460]/5 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <h3 class="text-center text-xs uppercase tracking-wider text-[#252460]/60 mb-4">Our Collaborators</h3>
            <div class="flex items-center justify-center gap-12 md:gap-16 flex-wrap">
                @foreach($partners as $partner)
                    <div class="grayscale hover:grayscale-0 opacity-50 hover:opacity-100 transition-all duration-300 hover:scale-110">
                        <img src="{{ $partner['logo'] }}" alt="{{ $partner['name'] }}" class="h-4 md:h-6 w-auto object-contain">
                    </div>
                @endforeach
            </div>
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-[#252460]/5 to-transparent pointer-events-none"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <div class="flex items-center space-x-3 mb-4">
                    <img src="{{ asset('assets/1d26274429553a360341bc051ba4421303a308f3.png') }}" alt="AUST CDC Logo" class="h-10 w-auto">
                    <div>
                        <h1 class="text-lg font-bold text-[#252460]">AUST CDC</h1>
                        <p class="text-xs text-[#252460]/70">Career Development Club</p>
                    </div>
                </div>
                <p class="text-sm text-[#252460]/70">
                    Empowering students to achieve their career goals through guidance, resources, and networking opportunities.
                </p>
            </div>

            <div>
                <h3 class="text-[#252460] font-semibold mb-4">Quick Links</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('about') }}" class="hover:text-[#252460] transition-colors">About Us</a></li>
                    <li><a href="{{ route('events') }}" class="hover:text-[#252460] transition-colors">Events</a></li>
                    <li><a href="{{ route('resources') }}" class="hover:text-[#252460] transition-colors">Resources</a></li>
                    <li><a href="{{ route('team') }}" class="hover:text-[#252460] transition-colors">Our Team</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-[#252460] font-semibold mb-4">Resources</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('resources') }}" class="hover:text-[#252460] transition-colors">Resume Templates</a></li>
                    <li><a href="{{ route('resources') }}" class="hover:text-[#252460] transition-colors">Interview Tips</a></li>
                    <li><a href="{{ route('resources') }}" class="hover:text-[#252460] transition-colors">Career Guides</a></li>
                    <li><a href="{{ route('resources') }}" class="hover:text-[#252460] transition-colors">Job Portal</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-[#252460] font-semibold mb-4">Contact Us</h3>
                <ul class="space-y-3 text-sm">
                    <li class="flex items-start space-x-2">
                        <span class="mt-1 flex-shrink-0 text-[#252460] font-semibold">Address:</span>
                        <span class="text-[#252460]/70">Ahsanullah University of Science and Technology, Dhaka, Bangladesh</span>
                    </li>
                    <li class="flex items-center space-x-2">
                        <span class="text-[#252460] font-semibold">Email:</span>
                        <a href="mailto:cdc@aust.edu" class="hover:text-[#252460] transition-colors">cdc@aust.edu</a>
                    </li>
                    <li class="flex items-center space-x-2">
                        <span class="text-[#252460] font-semibold">Phone:</span>
                        <span class="text-[#252460]/70">+880-1234-567890</span>
                    </li>
                </ul>

                <div class="flex space-x-3 mt-6">
                    <a href="https://www.facebook.com/austcareerdevelopmentclub" target="_blank" rel="noopener noreferrer" class="w-8 h-8 bg-[#252460]/10 rounded-full flex items-center justify-center hover:bg-[#252460] hover:text-white transition-all duration-300" aria-label="Facebook">f</a>
                    <a href="https://www.instagram.com/austcdc/" target="_blank" rel="noopener noreferrer" class="w-8 h-8 bg-[#252460]/10 rounded-full flex items-center justify-center hover:bg-[#252460] hover:text-white transition-all duration-300" aria-label="Instagram">◎</a>
                    <a href="https://www.linkedin.com/company/austcdc/" target="_blank" rel="noopener noreferrer" class="w-8 h-8 bg-[#252460]/10 rounded-full flex items-center justify-center hover:bg-[#252460] hover:text-white transition-all duration-300" aria-label="LinkedIn">in</a>
                </div>
            </div>
        </div>

        <div class="border-t border-[#252460]/20 mt-8 pt-8 text-sm text-center">
            <p class="text-[#252460]/70">&copy; {{ date('Y') }} AUST Career Development Club. All rights reserved.</p>
        </div>
    </div>
</footer>
