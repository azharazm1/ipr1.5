<x-guest-layout>
    <div class="flex flex-wrap">
        <div class="w-full sm:w-7/12 mb-10">
            <div class="container mx-auto h-full sm:p-5">
               @include('lamanutama.utama-nav')
                <div class="container px-4 lg:flex mt-10 items-center h-4/5 lg:mt-0">
                    <div class="w-full">
                        <h1 class="text-4xl lg:text-6xl font-bold">Basmi miskin tegar.<span class="text-orange-500"></span>
                            Tambah pendapatan rakyat.</h1>
                        <div class="w-20 h-2 bg-red-500 my-4"></div>
                        <p class="text-xl mb-10">IPR fokus dengan strategi serampang dua mata untuk menambah pendapatan
                            keluarga miskin tegar dan B40 pada masa yang sama berusaha menyelesaikan masalah ekonomi harian
                            menerusi inisiatif-inisiatif IPR.</p>
                        <button
                            class="bg-red-500 hover:bg-red-600 text-white hover:text-black/70 text-lg font-medium px-8 py-2 rounded-lg shadow"><a href="">Selanjutnya</a>
                        </button>
                        <button
                            class="hover:bg-red-500 text-red-600 ring-1 ring-inset ring-red-600 hover:text-white text-lg font-medium px-12 py-2 rounded-lg shadow"><a href="" >Daftar</a>
                        </button>
                    </div>
                </div>

             @include('lamanutama.utama-footer')

            </div>
        </div>
        <img src="{{ asset('img/makcik-roti-canai.40b91a1debc13ea2a7c4.png') }}" alt="gambar-makcik-roti-canai"
            class="w-full h-48 object-cover sm:h-screen sm:w-5/12">
    </div>
</x-guest-layout>