<div class="flex px-4 justify-between items-center">
    <div class="text-4xl font-bold">
        <a href="/"><img src="{{ asset('img/ipr-logo.32b474233494f9aaeedf.png') }}" alt=""></a>
    </div>
    <div class="flex">
        <div class="content-center mr-6">
            {{-- <a href="{{ route('pencapaian.ipr') }}" class="mr-4">Pencapaian IPR</a>
            <a href="{{ route('tentang.ipr') }}">Tentang IPR</a> --}}
            <a href="" class="mr-4">Pencapaian IPR</a>
            <a href="">Tentang IPR</a>
        </div>
        <div>
            @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="bg-red-500 hover:bg-red-600 text-white hover:text-black/70 text-lg font-medium px-8 py-2 rounded-lg shadow"
                        >
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="hover:bg-red-500 text-red-600 ring-1 ring-inset ring-red-600 hover:text-white text-lg font-medium px-12 py-2 rounded-lg shadow">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
            @if (Route::has('login'))
                <div class="h-14.5 hidden lg:block"></div>
            @endif
        </div>
    </div>
</div>