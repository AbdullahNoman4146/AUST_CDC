@extends('layouts.app')

@section('title', 'Team - AUST CDC')


@section('content')
@php
    $executives = [
        [
            'name' => 'Himel Datta Choudhury',
            'position' => 'President',
            'email' => 'president@austcdc.edu',
            'linkedin' => '#',
            'whatsapp' => '+8801XXXXXXXXX',
            'image' => 'b96255a46a67bb0b3635039f2db3555f9a07715d.png',
        ],
        [
            'name' => 'Shah Amanath Syem',
            'position' => 'Vice President',
            'email' => 'vp@austcdc.edu',
            'linkedin' => '#',
            'whatsapp' => '+8801XXXXXXXXX',
            'image' => 'bab0ec3cb5affb48d7a3738a827f0af46f65da04.png',
        ],
        [
            'name' => 'Fahid Inshad Safat',
            'position' => 'General Secretary',
            'email' => 'gs@austcdc.edu',
            'linkedin' => '#',
            'whatsapp' => '+8801XXXXXXXXX',
            'image' => 'aadfcde0ea301240fca85f05c3d28e6920c036ae.png',
        ],
        [
            'name' => 'Shahrin Nusrat Tasnim',
            'position' => 'Joint Secretary',
            'email' => 'jointsec1@austcdc.edu',
            'linkedin' => '#',
            'whatsapp' => '+8801XXXXXXXXX',
            'image' => 'c2df3feffcbab94d62e61befcd487b457c273e8a.png',
        ],
        [
            'name' => 'Md Eyaman Islam',
            'position' => 'Joint Secretary',
            'email' => 'jointsec2@austcdc.edu',
            'linkedin' => '#',
            'whatsapp' => '+8801XXXXXXXXX',
            'image' => '8f64f9fe804fc4f4279b9b904c6bc84c33221e6c.png',
        ],
        [
            'name' => 'Mahir Tanjim',
            'position' => 'Organising Secretary',
            'email' => 'organising@austcdc.edu',
            'linkedin' => '#',
            'whatsapp' => '+8801XXXXXXXXX',
            'image' => '50c83ae66c2bb9bd7e691c671c5d7c6e92d2de60.png',
        ],
    ];

    $directors = [
        [
            'name' => 'Shatirtha Barua Bivore',
            'position' => 'Director',
            'email' => 'pr@austcdc.edu',
            'linkedin' => '#',
            'image' => '4e936220fbdd5d67cc8ba0a9621f607b1a6d0054.png',
        ],
        [
            'name' => 'Mahir Mahmud',
            'position' => 'Director',
            'email' => 'marketing@austcdc.edu',
            'linkedin' => '#',
            'image' => '8c22bd1629ff0f3de61e50fc0ec1c32e74761e05.png',
        ],
        [
            'name' => 'Silvia Islam',
            'position' => 'Director',
            'email' => 'innovation@austcdc.edu',
            'linkedin' => '#',
            'image' => 'dc3c8d6f94eef7b3fb195eea7c7119946e006a6e.png',
        ],
        [
            'name' => 'Rafid Rayyan',
            'position' => 'Director',
            'email' => 'events@austcdc.edu',
            'linkedin' => '#',
            'image' => '0e0e9b5a57c8d009cdfea978de06cbb221836f67.png',
        ],
        [
            'name' => 'Afsara Siddique',
            'position' => 'Director',
            'email' => 'hr@austcdc.edu',
            'linkedin' => '#',
            'image' => '572e2a81d727c7f1c7b22bad3fb07a3803ddadd2.png',
        ],
        [
            'name' => 'Tanzim Hasan',
            'position' => 'Director',
            'email' => 'sponsorship@austcdc.edu',
            'linkedin' => '#',
            'image' => 'b16a4935686ba294cb1a40af23e2fb3a90a53703.png',
        ],
    ];

    $departments = [
        [
            'name' => 'Events & Programs',
            'head' => 'Sarah Islam',
            'members' => 8,
            'description' => 'Organizing workshops, seminars, and career fairs throughout the year.',
            'icon' => '',
        ],
        [
            'name' => 'Marketing & Outreach',
            'head' => 'Kamal Hassan',
            'members' => 6,
            'description' => 'Managing social media, promotions, and member engagement.',
            'icon' => '',
        ],
        [
            'name' => 'Resources & Content',
            'head' => 'Nusrat Jahan',
            'members' => 7,
            'description' => 'Creating and curating career development resources and materials.',
            'icon' => '',
        ],
        [
            'name' => 'Corporate Relations',
            'head' => 'Imran Hossain',
            'members' => 5,
            'description' => 'Building partnerships with companies and alumni networks.',
            'icon' => '',
        ],
    ];

    $teamGroups = [
        [
            'title' => 'Executive Board',
            'description' => "Our leadership team guiding the club's vision, activities, and student-focused initiatives.",
            'members' => $executives,
            'show_whatsapp' => true,
        ],
        [
            'title' => 'Our Directors',
            'description' => 'Specialized leaders overseeing the key functions of the club.',
            'members' => $directors,
            'show_whatsapp' => false,
        ],
    ];
@endphp

<div class="team-page">
    <section class="team-hero">
        <div class="team-container">
            <div class="team-hero-inner animate-fade-up">
                <div class="team-eyebrow-pill">
                    <span class="team-eyebrow-dot"></span>
                    <span>AUST Career Development Club</span>
                </div>

                <h1 class="team-hero-title">
                    Meet Our Team for
                    <span class="team-season-badge">Spring &apos;25</span>
                </h1>

                <p class="team-hero-text">
                    Dedicated students working together to empower the AUST community with career development opportunities and meaningful professional growth.
                </p>
            </div>
        </div>
    </section>

    @foreach($teamGroups as $group)
        <section class="team-section">
            <div class="team-container">
                <div class="team-section-header">
                    <p class="team-kicker">Our People</p>
                    <h2 class="team-section-title">{{ $group['title'] }}</h2>
                    <p class="team-section-desc">{{ $group['description'] }}</p>
                </div>

                <div class="team-grid">
                    @foreach($group['members'] as $member)
                        @php
                            $whatsappNumber = !empty($member['whatsapp'])
                                ? preg_replace('/\D+/', '', $member['whatsapp'])
                                : null;
                        @endphp

                        <article class="team-card">
                            <div class="team-card-photo">
                                <img src="{{ asset('assets/' . $member['image']) }}" alt="{{ $member['name'] }}">
                            </div>

                            <div class="team-card-body">
                                <h3 class="team-card-name">{{ $member['name'] }}</h3>
                                <p class="team-card-position">{{ $member['position'] }}</p>

                                <div class="team-card-actions">
                                    <div class="team-social-list">
                                        @if(!empty($member['linkedin']))
                                            <a
                                                href="{{ $member['linkedin'] }}"
                                                target="_blank"
                                                rel="noreferrer"
                                                class="team-social-link"
                                                aria-label="{{ $member['name'] }} LinkedIn"
                                            >in</a>
                                        @endif

                                        @if(!empty($member['email']))
                                            <a
                                                href="mailto:{{ $member['email'] }}"
                                                class="team-social-link"
                                                aria-label="Email {{ $member['name'] }}"
                                            >Email</a>
                                        @endif

                                        @if($group['show_whatsapp'] && !empty($whatsappNumber))
                                            <a
                                                href="https://wa.me/{{ $whatsappNumber }}"
                                                target="_blank"
                                                rel="noreferrer"
                                                class="team-social-link whatsapp"
                                                aria-label="WhatsApp {{ $member['name'] }}"
                                            >Call</a>
                                        @endif
                                    </div>

                                    @if($group['show_whatsapp'] && !empty($member['whatsapp']))
                                        <a
                                            href="https://wa.me/{{ $whatsappNumber }}"
                                            target="_blank"
                                            rel="noreferrer"
                                            class="team-whatsapp-chip"
                                        >WhatsApp: {{ $member['whatsapp'] }}</a>
                                    @endif
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>
    @endforeach

    <section class="team-section-soft">
        <div class="team-container">
            <div class="team-section-header">
                <p class="team-kicker">Club Structure</p>
                <h2 class="team-section-title">Our Departments</h2>
                <p class="team-section-desc">Specialized teams working on different aspects of career development.</p>
            </div>

            <div class="department-grid">
                @foreach($departments as $dept)
                    <article class="department-card">
                        <div class="department-card-inner">
                            <div class="department-icon">{{ strtoupper(substr($dept['name'], 0, 1)) }}</div>

                            <div class="department-content">
                                <h3 class="department-title">{{ $dept['name'] }}</h3>
                                <p class="department-meta">
                                    Head: {{ $dept['head'] }}
                                    <span class="department-dot">•</span>
                                    {{ $dept['members'] }} Members
                                </p>
                                <p class="department-desc">{{ $dept['description'] }}</p>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="team-cta-section">
        <div class="team-cta-wrapper">
            <div class="team-cta-card">
                <div class="team-cta-icon">J</div>

                <h2 class="team-cta-title">Want to Join Our Team?</h2>

                <p class="team-cta-text">
                    We're always looking for passionate students to join our team and make a difference in the AUST community.
                </p>

                <a href="{{ route('contact') }}" class="team-cta-button">Apply Now</a>
            </div>
        </div>
    </section>
</div>
@endsection
