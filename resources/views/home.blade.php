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
        {{-- <header class="sticky top-0 backdrop-blur-sm z-20">
            @include('lamanutama.utama-nav')
        </header> --}}

        <main class="md:min-w-full  sm:max-w-md px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <div class="flex flex-wrap">
                <div class="w-full sm:w-7/12 mb-10">
                    <div class="container mx-auto h-full sm:p-5">
                        @include('lamanutama.utama-nav')
                        <div class="container px-4 lg:flex mt-10 items-center h-4/5 lg:mt-0">
                            {{-- mobile view only --}}
                            <img src="{{ asset('images/INTAN 6.jpeg') }}" alt="gambar-makcik-roti-canai"
                                class="block sm:hidden w-full h-48 object-cover">
                            {{-- mobile view only --}}

                            <div class="w-full">
                                <h1 class="text-4xl lg:text-6xl font-bold text-gray-800">Basmi miskin tegar.<span
                                        class="text-orange-500"></span>
                                    Tambah pendapatan rakyat.</h1>
                                <div class="w-20 h-2 bg-red-500 my-4"></div>
                                <p class="text-xl mb-10 text-gray-800">IPR fokus dengan strategi serampang dua mata
                                    untuk menambah
                                    pendapatan
                                    keluarga miskin tegar dan B40 pada masa yang sama berusaha menyelesaikan masalah
                                    ekonomi harian
                                    menerusi inisiatif-inisiatif IPR.</p>
                                {{-- <a href="{{ route('tentang.ipr') }}"
                                    class="bg-red-500 hover:bg-red-600 text-white hover:text-black/70 text-lg font-medium px-8 py-2 rounded-lg shadow inline-block">
                                    Selanjutnya
                                </a> --}}
                                <a href="{{ route('permohonan.index') }}"
                                    class="hover:bg-red-500 text-red-600 ring-1 ring-inset ring-red-600 hover:text-white text-lg font-medium px-12 py-2 rounded-lg shadow inline-block">
                                    Mohon Sekarang
                                </a>
                            </div>
                        </div>

                        @include('lamanutama.utama-footer')

                    </div>
                </div>
                {{-- desktop view only --}}
                <img src="{{ asset('images/INTAN 6.jpeg') }}" alt="gambar-makcik-roti-canai"
                    class="hidden sm:block w-full h-48 object-cover sm:h-screen sm:w-5/12">
                {{-- desktop view only --}}
            </div>
        </main>

        {{-- <footer>
            @include('lamanutama.utama-footer')
        </footer> --}}
    </div>
</body>

</html>
