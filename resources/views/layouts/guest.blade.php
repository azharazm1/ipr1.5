<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <div class="bg-gray-50 text-black/50">
    {{-- <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50"> --}}
        <header class="sticky top-0 backdrop-blur-sm z-20">
            {{-- @include('section.header.navBar') --}}
        </header>

        <main
            class="md:min-w-full  sm:max-w-md px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            {{-- class="md:min-w-full  sm:max-w-md px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg"> --}}
            {{ $slot }}
        </main>

        <footer>
            {{-- @include('section.footer.footer') --}}
        </footer>
    </div>
</body>

</html>
