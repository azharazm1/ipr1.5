<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <div class="bg-gray-50 text-black/50">
        {{-- <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50"> --}}
        <header class="sticky top-0 backdrop-blur-sm z-20 p-2">
            @include('lamanutama.utama-nav')
        </header>

        <main class="md:min-w-full sm:max-w-md px-6 py-4 bg-white overflow-hidden sm:rounded-lg">
            {{-- class="md:min-w-full  sm:max-w-md px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg"> --}}
            {{ $slot }}
        </main>

        <footer class="p-6">
            @include('lamanutama.utama-footer')
        </footer>
    </div>
</body>

</html>
