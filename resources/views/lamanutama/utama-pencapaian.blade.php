<x-guest-layout>
    <div class="mx-auto max-w-3xl">
        <h1 class="text-center text-4xl font-bold my-5">Pencapaian IPR</h1>
        <p class="text-xl text-center">Inisiatif Pendapatan Rakyat (IPR) mula menunjukkan tanda-tanda awal
            kesan positif dan kisah-kisah ini diharap akan membuka inspirasi kepada
            rakyat supaya lebih ramai menerima manfaat program IPR.</p>
    </div>
    <div class="max-w-5xl mx-auto flex justify-center my-10">
        <iframe width="751" height="422" src="https://www.youtube.com/embed/c8MnEzdo1kw"
            title="Inisiatif Pendapatan Rakyat (IPR)" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>

    <div class="mt-10">
        <h2 class="text-center text-4xl font-bold my-5">Keratan Akhbar</h2>
        <section class="max-w-5xl mx-auto" aria-multiselectable="false">
            <ul class="flex items-center border-b border-slate-200" role="tablist">
                <li class="flex-1" role="presentation ">
                    <button
                        class="inline-flex items-center justify-center w-full h-12 gap-2 px-6 -mb-px text-sm font-medium tracking-wide transition duration-300 border-b-2 border-transparent rounded-t focus-visible:outline-none justify-self-center hover:border-gray-500 focus:border-gray-600 whitespace-nowrap text-slate-700 stroke-slate-700 hover:bg-gray-50 hover:text-gray-500 focus:stroke-gray-600 focus:bg-gray-50 focus:text-gray-600 hover:stroke-gray-600 disabled:cursor-not-allowed disabled:text-slate-500"
                        id="tab-label-1a" role="tab" aria-setsize="3" aria-posinset="1" tabindex="0"
                        aria-controls="tab-panel-1a" aria-selected="true">
                        <span>2024</span>
                    </button>
                </li>
                <li class="flex-1" role="presentation ">
                    <button
                        class="inline-flex items-center justify-center w-full h-12 gap-2 px-6 -mb-px text-sm font-medium tracking-wide transition duration-300 border-b-2 border-transparent rounded-t focus-visible:outline-none justify-self-center hover:border-gray-500 focus:border-gray-600 whitespace-nowrap text-slate-700 stroke-slate-700 hover:bg-gray-50 hover:text-gray-500 focus:stroke-gray-600 focus:bg-gray-50 focus:text-gray-600 hover:stroke-gray-600 disabled:cursor-not-allowed disabled:text-slate-500"
                        id="tab-label-2a" role="tab" aria-setsize="3" aria-posinset="2" tabindex="-1"
                        aria-controls="tab-panel-2a" aria-selected="false">
                        <span>2023</span>
                    </button>
                </li>
            </ul>
            <div>
                <div class="px-6 py-4" id="tab-panel-1a" aria-hidden="false" role="tabpanel"
                    aria-labelledby="tab-label-1a" tabindex="-1">

                    {{-- @include('lamanutama.pencapaian_ipr_keratan') --}}

                </div>
                <div class="hidden px-6 py-4" id="tab-panel-2a" aria-hidden="true" role="tabpanel"
                    aria-labelledby="tab-label-2a" tabindex="-1">

                    {{-- @include('lamanutama.pencapaian_ipr_keratan_2023') --}}

                </div>

            </div>
        </section>
    </div>
    <script>
        document.querySelectorAll('[role="tab"]').forEach((tab) => {
            tab.addEventListener('click', () => {
                // Hide all panels and deselect all tabs
                document.querySelectorAll('[role="tabpanel"]').forEach((panel) => panel.classList.add(
                    'hidden'));
                document.querySelectorAll('[role="tab"]').forEach((t) => t.setAttribute('aria-selected',
                    'false'));

                // Show the selected panel and set the active tab
                const panelId = tab.getAttribute('aria-controls');
                document.getElementById(panelId).classList.remove('hidden');
                tab.setAttribute('aria-selected', 'true');
            });
        });
    </script>

</x-guest-layout>
