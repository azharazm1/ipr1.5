<x-guest-layout>
    <div class="min-h-screen md:min-h-[600px] sm:max-w-3xl mx-auto px-6 py-8 bg-white sm:rounded-lg text-center">
        <!-- Step Indicator with Progress Bar -->
        <div class="flex items-center justify-between mb-4">
            <div class="flex items-center gap-4 w-full">
                <!-- Step 1 -->
                <div class="relative flex-1 flex items-center">
                    <div id="indicator-1"
                        class="w-8 h-8 text-sm flex items-center justify-center bg-red-600 text-white rounded-full transition-colors duration-300">
                        1</div>
                    <div id="line-1"
                        class="absolute w-full h-1 bg-gray-300 left-0 top-1/2 transform translate-y-[-50%] z-[-1] transition-colors duration-300">
                    </div>
                </div>
                <!-- Step 2 -->
                <div class="relative flex-1 flex items-center">
                    <div id="indicator-2"
                        class="w-8 h-8 text-sm flex items-center justify-center bg-gray-300 text-gray-600 rounded-full transition-colors duration-300">
                        2</div>
                    <div id="line-2"
                        class="absolute w-full h-1 bg-gray-300 left-0 top-1/2 transform translate-y-[-50%] z-[-1] transition-colors duration-300">
                    </div>
                </div>
                <!-- Step 3 -->
                <div>
                    <div id="indicator-3"
                        class="w-8 h-8 text-sm flex items-center justify-center bg-gray-300 text-gray-600 rounded-full transition-colors duration-300">
                        3</div>
                </div>
            </div>
        </div>

        <!-- Progress Bar -->
        <div class="w-full bg-gray-200 rounded-full h-2 mb-8">
            <div id="progress-bar" class="bg-red-600 h-2 rounded-full transition-all duration-300" style="width: 30%;">
            </div>
        </div>

        <h1 class="text-2xl text-gray-800 font-semibold mb-8">Pilih Jenis Program yang ingin dimohon:</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-10 justify-items-center">
            {{-- INSAN Card --}}
            <a href="{{ route('permohonan.create', ['jenis' => 'INSAN']) }}"
                class="relative w-80 h-96 px-5 py-8 group rounded-xl bg-gray-200 overflow-hidden shadow-xl transition-transform duration-300">
                <img src="{{ asset('images/INSAN 2.jpeg') }}" alt="INSAN"
                    class="absolute w-full h-full inset-0 object-cover">
                <div
                    class="absolute inset-0 w-full h-full rounded-xl bg-black bg-opacity-0 transition duration-500 backdrop-filter group-hover:bg-opacity-20 group-hover:backdrop-blur">
                </div>
                <div class="absolute inset-x-5 text-white text-left">
                    <h2 class="text-3xl font-bold mb-2 text-red-600">INSAN</h2>
                    <p class="text-xl font-semibold uppercase tracking-wider mb-6">Inisiatif Usahawan Makanan</p>
                    <p class="hidden group-hover:block leading-relaxed">
                        Program Inisiatif Pendapatan Rakyat –
                        <span class="font-semibold">Inisiatif Usahawan Makanan (IPR-INSAN)</span>.
                    </p>
                </div>
                <button
                    class="absolute inset-x-5 bottom-8 py-3 rounded-xl font-semibold bg-white text-red-600 ring-1 ring-inset ring-red-600 shadow-lg hidden transition duration-200 hover:bg-red-500 hover:text-white group-hover:block">
                    Mohon
                </button>
            </a>

            {{-- INTAN Card --}}
            <a href="{{ route('permohonan.create', ['jenis' => 'INTAN']) }}"
                class="relative w-80 h-96 px-5 py-8 group rounded-xl bg-gray-200 overflow-hidden shadow-xl transition-transform duration-300 ">
                <img src="{{ asset('images/INTAN 9.jpeg') }}" alt="INTAN"
                    class="absolute w-full h-full inset-0 object-cover">
                <div
                    class="absolute inset-0 w-full h-full rounded-xl bg-black bg-opacity-0 transition duration-500 backdrop-filter group-hover:bg-opacity-20 group-hover:backdrop-blur">
                </div>
                <div class="absolute inset-x-5 text-white text-left">
                    <h2 class="text-3xl font-bold mb-2 text-red-600">INTAN</h2>
                    <p class="text-xl font-semibold uppercase tracking-wider mb-6">Inisiatif Usahawan Tani</p>
                    <p class="hidden group-hover:block leading-relaxed">
                        Program Inisiatif Pendapatan Rakyat –
                        <span class="font-semibold">Inisiatif Usahawan Tani (IPR-INTAN)</span>.
                    </p>
                </div>
                <button
                    class="absolute inset-x-5 bottom-8 py-3 rounded-xl font-semibold bg-white text-red-600 ring-1 ring-inset ring-red-600 shadow-lg hidden transition duration-200 hover:bg-red-500 hover:text-white group-hover:block">
                    Mohon
                </button>
            </a>
        </div>

        @if (session('success'))
            <div class="mt-8 bg-green-100 text-green-700 p-4 rounded-lg shadow">
                <p>{{ session('success') }}</p>
            </div>
        @endif
    </div>
</x-guest-layout>
