<x-guest-layout>
    <div class="relative h-140 mix-blend-hard-light text-white overflow-hidden">
        <div class="absolute inset-0">
            <img src="{{ asset('img/makcik-roti-canai.40b91a1debc13ea2a7c4.png') }}" alt="Background Image"
                class="object-cover object-center w-full h-full" />
            <div class="absolute inset-0 bg-black opacity-50"></div>
        </div>

        <div class="relative z-10 flex flex-col justify-center items-center h-full text-center">
            <h1 class="text-6xl leading-tight mb-4">Basmi miskin tegar</h1>
            <p class="text-3xl text-gray-300 mb-8">Tambah pendapatan rakyat.</p>
        </div>
    </div>

    <div class="hero max-w-5xl mx-auto min-h-screen mt-10">

        <div class="flex flex-col  gap-6 md:flex-row items-center max-w-8xl">
            <div class="w-full md:w-1/2 lg:pr-10">
                <img src="{{ asset('img/ladang-teh.4fe49516b70aa4a0ec3c.png') }}">
            </div>
            <div class="w-full md:w-1/2 justify-center md:justify-end">
                <p class="text-2xl py-6">
                    IPR fokus dengan strategi serampang dua mata untuk menambah pendapatan keluarga miskin tegar dan
                    B40
                    pada masa yang sama berusaha menyelesaikan masalah ekonomi harian menerusi inisiatif-inisiatif
                    IPR.
                </p>
                <p class="text-2xl py-6">
                    IPR menumpukan usaha membasmi kemiskinan dan menambah pendapatan rakyat menerusi inisiatif
                    pertanian, perniagaan makanan dan operator perkhidmatan
                </p>
                <p class="text-2xl py-6">
                    IPR akan mewujudkan ekosistem antara pemohon, pemegang taruh dan masyarakat setempat.
                </p>
                <div class="bg-orange-600 p-6 text-white">
                    <p class="text-2xl py-2">Syarat-syarat pemohon:</p>
                    <ul class="list-disc list-inside pl-4 text-2xl py-2">
                        <li>Warganegara Malaysia</li>
                        <li>Pemohon adalah daripada golongan berpendapatan B40 dan miskin tegar</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    {{-- <div class="hero max-w-5xl mx-auto min-h-screen mt-10">
        <div class="hero-content flex-col lg:flex-row">
            <img src="{{ asset('img/ladang-teh.4fe49516b70aa4a0ec3c.png') }}" class="max-w-sm rounded-lg shadow-2xl" />
            <div>
                <p class="text-2xl py-6">
                    IPR fokus dengan strategi serampang dua mata untuk menambah pendapatan keluarga miskin tegar dan B40
                    pada masa yang sama berusaha menyelesaikan masalah ekonomi harian menerusi inisiatif-inisiatif IPR.
                </p>
                <p class="text-2xl py-6">
                    IPR menumpukan usaha membasmi kemiskinan dan menambah pendapatan rakyat menerusi inisiatif
                    pertanian, perniagaan makanan dan operator perkhidmatan
                </p>
                <p class="text-2xl py-6">
                    IPR akan mewujudkan ekosistem antara pemohon, pemegang taruh dan masyarakat setempat.
                </p>
                <div class="bg-orange-600 p-4 text-white">
                    <p class="text-2xl py-2">Syarat-syarat pemohon:</p>
                    <ul class="list-disc list-inside pl-4 text-2xl py-2">
                        <li>Warganegara Malaysia</li>
                        <li>Pemohon adalah daripada golongan berpendapatan B40 dan miskin tegar</li>
                    </ul>
                </div>
            </div>
        </div>


    </div> --}}

    <div class="items-center justify-center">

        <h3 class="text-center text-4xl font-medium mb-6">Kategori Inisiatif Pendapatan Rakyat</h3>

        <div class="p-1 lg:flex items-center justify-center space-x-4">
            <div class="relative w-80 h-96 px-5 py-8 group rounded-xl bg-gray-200 overflow-hidden shadow-xl">
                <img src="{{ asset('img/tanah-cameron-highlands.83f912fc05b8e74221f8.png') }}" alt=""
                    class="absolute w-full h-full inset-0 object-cover">
                <div
                    class="absolute inset-0 w-full h-full rounded-xl bg-black bg-opacity-0 transition duration-500 backdrop-filter group-hover:bg-opacity-20 group-hover:backdrop-blur">
                </div>
                <div class="absolute inset-x-5 text-white">
                    <h2 class="text-3xl font-semibold mb-2">Usahawan</h2>
                    <p class="text-xl font-medium uppercase tracking-wider mb-6">Tani</p>
                    <p class="hidden group-hover:block">Menstransformasikan kehidupan menerusi Inisiatif Pendapatan
                        Rakyat – Inisiatif Usahawan Tani (IPR-INTAN)
                    </p>
                </div>
                <button
                    class="absolute inset-x-5 bottom-8 py-3 rounded-xl font-semibold bg-white shadow-lg hidden transition duration-200 hover:bg-gray-300 group-hover:block">Selanjutnya</button>
            </div>

            <div class="relative w-80 h-96 px-5 py-8 group rounded-xl bg-gray-200 overflow-hidden shadow-xl">
                <img src="{{ asset('img/jual-nasi-tomato.c37897b412a03fad4599.png') }}" alt=""
                    class="absolute w-full h-full inset-0 object-cover">
                <div
                    class="absolute inset-0 w-full h-full rounded-xl bg-black bg-opacity-0 transition duration-500 backdrop-filter group-hover:bg-opacity-20 group-hover:backdrop-blur">
                </div>
                <div class="absolute inset-x-5 text-white">
                    <h2 class="text-3xl font-semibold mb-2">Usahawan</h2>
                    <p class="text-xl font-medium uppercase tracking-wider mb-6">Makanan</p>
                    <p class="hidden group-hover:block">Menstransformasikan kehidupan menerusi Inisiatif Pendapatan
                        Rakyat – Inisiatif Usahawan Makanan (IPR-INSAN)
                    </p>
                </div>
                <button
                    class="absolute inset-x-5 bottom-8 py-3 rounded-xl font-semibold bg-white shadow-lg hidden transition duration-200 hover:bg-gray-300 group-hover:block">Selanjutnya</button>
            </div>

            <div class="relative w-80 h-96 px-5 py-8 group rounded-xl bg-gray-200 overflow-hidden shadow-xl">
                <img src="{{ asset('img/juruteknik-aircond.eea266a4c19816d067b6.png') }}" alt=""
                    class="absolute w-full h-full inset-0 object-cover">
                <div
                    class="absolute inset-0 w-full h-full rounded-xl bg-black bg-opacity-0 transition duration-500 backdrop-filter group-hover:bg-opacity-20 group-hover:backdrop-blur">
                </div>
                <div class="absolute inset-x-5 text-white">
                    <h2 class="text-3xl font-semibold mb-2">Operator</h2>
                    <p class="text-xl font-medium uppercase tracking-wider mb-6">Perkhidmatan</p>
                    <p class="hidden group-hover:block">Menstransformasikan kehidupan menerusi Inisiatif Pendapatan
                        Rakyat – Inisiatif Operator Perkhidmatan (IPR-IKHSAN)
                    </p>
                </div>
                <button
                    class="absolute inset-x-5 bottom-8 py-3 rounded-xl font-semibold bg-white shadow-lg hidden transition duration-200 hover:bg-gray-300 group-hover:block">Selanjutnya</button>
            </div>
        </div>

    </div>

    <div class="flex flex-wrap mt-10 max-w-5xl mx-auto">
        <div class="sm:w-5/12 mb-10">
            <div class="container mx-auto h-full sm:p-10 bg-yellow-50">
                <div class="container px-4 lg:flex mt-10 items-center h-full lg:mt-0">
                    <div class="w-full">
                        <h1 class="text-2xl lg:text-4xl font-bold">Sertai Komuniti IPR (Off-Takers)</h1>
                        <div class="w-20 h-2 bg-red-500 my-4"></div>
                        <p class="text-xl mb-10">Adakah anda syarikat pertanian yang mencari pekebun kecil untuk
                            memasarkan tanaman mereka?</p>
                        <p class="text-xl mb-10">Adakah anda ingin membantu peniaga kecil menjual makanan mereka secara
                            mudah dan murah pada kualiti yang berpatutan?</p>
                        <p class="text-xl mb-10">Adakah anda ingin mencari pekerja sambilan untuk melakukan kerja-kerja
                            pembersihan?</p>
                        <p class="text-xl mb-10">Sertai komuniti IPR dan anda akan dipadankan atau dihubungkan dengan
                            mereka yang memohon di IPR.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="sm:w-7/12 mb-10">
            <div class="container mx-auto h-full sm:p-10">
                <div class="container px-4 lg:flex mt-10 items-center h-full lg:mt-0">
                    <div class="w-full">
                        <h1 class="text-2xl font-semibold">Siapakah sasaran penggerak IPR untuk membantu atau dipadankan
                            dengan golongan pemohon ini:</h1>
                        <div class="w-20 h-2 bg-red-500 my-4"></div>
                        <p class="text-xl font-semibold mb-2">Inisiatif Usahawan Tani (INTAN)</p>
                        <ul class="list-disc ml-4 text-xl">
                            <li>Syarikat pertanian</li>
                            <li>Rantaian peruncitan makanan</li>
                            <li>Pengeksport</li>
                            <li>Agensi-agensi kerajaan berkaitan</li>
                            <li>Koperasi</li>
                        </ul>

                        <p class="text-xl font-semibold mt-6 mb-2">Inisiatif Usahawan Makanan (INSAN)</p>
                        <ul class="list-disc ml-4 text-xl">
                            <li>Pengusaha mesin menjual (vending machine)</li>
                            <li>Syarikat-syarikat yang ingin menyediakan kemudahan makanan kepada pekerja-pekerja mereka
                            </li>
                            <li>Pemilik atau pengusaha premis-premis agensi kerajaan pada peringkat Persekutuan dan
                                Negeri</li>
                            <li>Institusi pendidikan seperti sekolah, kolej dan universiti yang berhasrat untuk
                                menggunakan mesin menjual untuk menyediakan makanan kepada pelajar, staf dan pelawat
                            </li>
                            <li>Stesen-stesen LRT</li>
                            <li>Hospital dan kemudahan kesihatan yang berhasrat untuk menggunakan mesin menjual untuk
                                menyediakan makanan kepada pesakit, pelawat dan staf</li>
                        </ul>

                        <p class="text-xl font-semibold mt-6 mb-2">Inisiatif Operator Perkhidmatan (IKHSAN)</p>
                        <ul class="list-disc ml-4 text-xl">
                            <li>Syarikat-syarikat swasta yang memerlukan pekerja-pekerja sambilan untuk tujuan
                                pembersihan premis</li>
                            <li>Premis-premis agensi kerajaan</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mx-auto max-w-2xl bg-orange-500 p-16 rounded-md">
        <a href="{{ route('register') }}"
            class="text-center text-4xl font-semibold text-white flex justify-center">Daftar Sekarang <span
                class="ml-4 content-center">@svg('heroicon-c-arrow-right')</span>
        </a>
    </div>

</x-guest-layout>
