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
                        class="w-8 h-8 text-sm flex items-center justify-center bg-red-600 text-white rounded-full transition-colors duration-300">
                        2</div>
                    <div id="line-2"
                        class="absolute w-full h-1 bg-gray-300 left-0 top-1/2 transform translate-y-[-50%] z-[-1] transition-colors duration-300">
                    </div>
                </div>
                <!-- Step 3 -->
                <div>
                    <div id="indicator-3"
                        class="w-8 h-8 text-sm flex items-center justify-center bg-red-600 text-white rounded-full transition-colors duration-300">
                        3</div>
                </div>
            </div>
        </div>

        <!-- Progress Bar -->
        <div class="w-full bg-gray-200 rounded-full h-2 mb-8">
            <div id="progress-bar" class="bg-red-600 h-2 rounded-full transition-all duration-300" style="width: 100%;">
            </div>
        </div>

        <h1 class="text-xl md:text-2xl text-gray-800 font-semibold mb-8">Untuk sebarang persoalan lanjut sila hubungi kami di
             helpdesk.ipr@ekonomi.gov.my</h1>

        @if (session('success'))
            <div class="mt-8 bg-green-100 text-green-700 p-4 rounded-lg shadow">
                <p>{{ session('success') }}</p>
            </div>
        @endif

        <div class="text-center mt-8 flex flex-wrap justify-center gap-4">
            {{-- Back to Home Button --}}
            <a href="{{ route('home') }}"
                class="inline-flex items-center justify-center gap-2 hover:bg-red-500 text-red-600 ring-1 ring-inset ring-red-600 hover:text-white text-lg font-medium px-12 py-2 rounded-lg shadow transition">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"
                    fill="currentColor">
                    <path d="M10 20v-6h4v6h5v-8h3L12 3L2 12h3v8z" />
                </svg>
                Laman Utama
            </a>
        </div>

    </div>
</x-guest-layout>
