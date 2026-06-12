<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="AUST Career Development Club - Anticipate, Adapt, Accelerate.">
    <title>@yield('title', 'AUST CDC')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-white text-[#252460] antialiased">
    <div class="min-h-screen grid-pattern">
        @include('components.navbar')

        <main>
            @yield('content')
        </main>

        @include('components.footer')
    </div>
</body>
</html>
