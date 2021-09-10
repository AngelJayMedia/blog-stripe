<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inria+Sans:wght@300;400;700&family=Inria+Serif:wght@300;400;700&display=swap" rel="stylesheet">

    {{-- AOS --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    {{-- Livewire --}}
    <livewire:styles />

    {{-- Blade UI Kit --}}
    @bukStyles(true)

</head>

<body class="relative font-sans antialiased">
    {{-- Main Nav --}}
    <x-partials.nav />

    <!-- Page Heading -->
    @isset($header))
    <header class="relative overlay hero-header">
        <div class="container flex items-center justify-between h-full pt-16 mx-auto">
            <div class="flex-1 space-y-5">

                @isset($title)
                <h2 class="font-serif font-bold leading-tight text-gray-900 text-8xl" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500">
                    {{ $title }}
                </h2>
                @endisset

                {{-- Subtitle --}}
                @isset($sub)
                <div class="max-w-lg" data-aos="fade-in" data-aos-delay="500" data-aos-duration="500">
                    {{ $sub }}
                </div>
                @endisset
            </div>

            {{-- Image --}}
            <div class="flex-1" data-aos="fade-left" data-aos-offset="200" data-aos-delay="50" data-aos-duration="500">
                @isset($image)
                {{ $image }}
                @endisset
            </div>
        </div>
        <div class="curve curve-bottom"></div>
    </header>
    @endisset

    <div class="font-sans antialiased">
        {{ $slot }}
    </div>

    <x-partials.footer />

    {{-- Blade UI Kit --}}
    @bukScripts(true)

    {{-- Livewire --}}
    <livewire:scripts />
</body>
</html>
