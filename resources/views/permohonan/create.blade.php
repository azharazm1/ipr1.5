<x-guest-layout>
    <div class="sm:max-w-2xl mx-auto px-6 py-8 text-gray-800 bg-white overflow-hidden sm:rounded-lg">
        {{-- Title --}}
        <h1 class="text-3xl text-gray-800 font-bold text-center mb-6">
            Borang Permohonan IPR - {{ strtoupper($jenis ?? 'PROGRAM') }}
        </h1>

        {{-- Form Start --}}
        <form action="{{ route('permohonan.store') }}" method="POST" class="space-y-6">
            @csrf
            <input type="hidden" name="jenis_program" value="{{ $jenis }}">

            {{-- SOALAN TAMBAHAN (Hanya untuk INSAN) --}}
            @if ($jenis === 'INSAN')
                <div id="soalan_insan" class="space-y-4">
                    <div>
                        <label class="block font-medium">Adakah anda mempunyai pengalaman dalam penyediaan
                            makanan?</label>
                        <input type="text" name="pengalaman_makanan" value="{{ old('pengalaman_makanan') }}"
                            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-red-500 focus:border-red-500"
                            placeholder="Contoh: Penjaja Nasi Lemak">
                        @error('pengalaman_makanan')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block font-medium">Adakah pernah menerima suntikan tifoid?</label>
                        <select name="tifoid"
                            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-red-500 focus:border-red-500">
                            <option value="">-- Pilih --</option>
                            <option value="Ya" {{ old('tifoid') == 'Ya' ? 'selected' : '' }}>Ya</option>
                            <option value="Tidak" {{ old('tifoid') == 'Tidak' ? 'selected' : '' }}>Tidak</option>
                        </select>
                        @error('tifoid')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block font-medium">Jenis Makanan Bermasak yang diminati</label>
                        <input type="text" name="jenis_makanan" value="{{ old('jenis_makanan') }}"
                            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-red-500 focus:border-red-500"
                            placeholder="Contoh: Mee Goreng, Nasi Lemak">
                        @error('jenis_makanan')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block font-medium">Adakah anda mempunyai kenderaan?</label>
                        <select name="ada_kenderaan" id="ada_kenderaan"
                            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-red-500 focus:border-red-500">
                            <option value="">-- Pilih --</option>
                            <option value="Ya" {{ old('ada_kenderaan') == 'Ya' ? 'selected' : '' }}>Ya</option>
                            <option value="Tidak" {{ old('ada_kenderaan') == 'Tidak' ? 'selected' : '' }}>Tidak
                            </option>
                        </select>

                        <input type="text" id="jenis_kenderaan" name="jenis_kenderaan"
                            value="{{ old('jenis_kenderaan') }}"
                            class="hidden mt-2 w-full border-gray-300 rounded-lg shadow-sm focus:ring-red-500 focus:border-red-500"
                            placeholder="Nyatakan jenis kenderaan">
                        @error('jenis_kenderaan')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            @endif

            {{-- MAKLUMAT DIRI --}}
            <h2 class="text-2xl font-bold mt-8 mb-4 border-b-2 border-red-500 inline-block">Maklumat Diri</h2>

            <div class="space-y-4">
                {{-- Nama --}}
                <div>
                    <label class="block font-medium">Nama Pemohon (Huruf Besar)</label>
                    <input type="text" name="nama" value="{{ old('nama') }}"
                        class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-red-500 focus:border-red-500 uppercase"
                        required>
                    @error('nama')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Kad Pengenalan --}}
                <div>
                    <label class="block font-medium">No. Kad Pengenalan</label>
                    <input type="text" name="no_kp" id="no_kp" value="{{ old('no_kp') }}"
                        placeholder="Contoh: 900101-14-5678" pattern="^[0-9]{6}-[0-9]{2}-[0-9]{4}$"
                        title="Format mesti seperti 900101-14-5678"
                        class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-red-500 focus:border-red-500"
                        required>
                    <small class="text-gray-500">Format: 900101-14-5678</small>
                    @error('no_kp')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Jantina --}}
                <div>
                    <label class="block font-medium">Jantina</label>
                    <select name="jantina"
                        class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-red-500 focus:border-red-500">
                        <option value="">-- Pilih --</option>
                        <option value="Lelaki" {{ old('jantina') == 'Lelaki' ? 'selected' : '' }}>Lelaki</option>
                        <option value="Perempuan" {{ old('jantina') == 'Perempuan' ? 'selected' : '' }}>Perempuan
                        </option>
                    </select>
                    @error('jantina')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Bangsa + Bangsa Lain --}}
                <div>
                    <label class="block font-medium">Bangsa</label>
                    <select name="bangsa" id="bangsa"
                        class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-red-500 focus:border-red-500">
                        <option value="">-- Pilih --</option>
                        <option value="Melayu" {{ old('bangsa') == 'Melayu' ? 'selected' : '' }}>Melayu</option>
                        <option value="Cina" {{ old('bangsa') == 'Cina' ? 'selected' : '' }}>Cina</option>
                        <option value="India" {{ old('bangsa') == 'India' ? 'selected' : '' }}>India</option>
                        <option value="Lain-lain" {{ old('bangsa') == 'Lain-lain' ? 'selected' : '' }}>Lain-lain
                        </option>
                    </select>
                    <input type="text" id="bangsa_lain" name="bangsa_lain" value="{{ old('bangsa_lain') }}"
                        class="hidden mt-2 w-full border-gray-300 rounded-lg shadow-sm focus:ring-red-500 focus:border-red-500"
                        placeholder="Nyatakan bangsa lain">
                    @error('bangsa_lain')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Negeri --}}
                <div>
                    <label class="block font-medium">Negeri Kediaman</label>
                    <select name="negeri" id="negeri"
                        class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-red-500 focus:border-red-500">
                        <option value="">-- Pilih Negeri --</option>
                        @foreach (['Johor', 'Kedah', 'Kelantan', 'Melaka', 'Negeri Sembilan', 'Pahang', 'Perak', 'Perlis', 'Pulau Pinang', 'Sabah', 'Sarawak', 'Selangor', 'Terengganu', 'Wilayah Persekutuan'] as $negeri)
                            <option value="{{ $negeri }}" {{ old('negeri') == $negeri ? 'selected' : '' }}>
                                {{ $negeri }}
                            </option>
                        @endforeach
                    </select>
                    @error('negeri')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Daerah --}}
                <div>
                    <label class="block font-medium">Daerah</label>
                    <div class="relative">
                        <select name="daerah" id="daerah"
                            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-red-500 focus:border-red-500">
                            <option value="">-- Pilih Daerah --</option>
                        </select>
                        <div id="loading-spinner" class="hidden absolute right-3 top-3">
                            <svg class="animate-spin h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10"
                                    stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>

                {{-- Poskod --}}
                <div>
                    <label class="block font-medium">Poskod</label>
                    <input type="text" name="poskod" value="{{ old('poskod') }}"
                        class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-red-500 focus:border-red-500"
                        maxlength="5">
                    @error('poskod')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Alamat --}}
                <div>
                    <label class="block font-medium">Alamat Kediaman (Huruf Besar)</label>
                    <textarea name="alamat" rows="3"
                        class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-red-500 focus:border-red-500 uppercase">{{ old('alamat') }}</textarea>
                    @error('alamat')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Telefon (Two-column format) --}}
                <div>
                    <label class="block font-medium">No. Telefon Bimbit</label>
                    <div class="grid grid-cols-2 gap-3">
                        {{-- Prefix column --}}
                        <div class="flex items-center">
                            <span
                                class="px-3 py-2 bg-gray-100 border border-gray-300 rounded-l-md text-gray-700 select-none">+60</span>
                            <input type="text" name="telefon_prefix" id="telefon_prefix"
                                value="{{ old('telefon_prefix') }}" placeholder="Contoh: 11, 12, 13, 19"
                                pattern="^1[0-9]{1,2}$"
                                title="Masukkan 2 atau 3 digit selepas +60, contoh: 11, 19, 12" maxlength="3"
                                class="flex-1 border-t border-b border-gray-300 rounded-r-md focus:ring-red-500 focus:border-red-500 text-center"
                                required>
                        </div>

                        {{-- Main number column --}}
                        <input type="text" name="telefon_main" id="telefon_main"
                            value="{{ old('telefon_main') }}" placeholder="Contoh: 3456789" pattern="^[0-9]{6,8}$"
                            title="Masukkan 6 hingga 8 digit nombor utama" maxlength="8"
                            class="w-full border-gray-300 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500 text-center"
                            required>
                    </div>

                    <small class="text-gray-500">Contoh: +60 19 - 5546524 atau +60 11 - 33552211</small>

                    @error('telefon_prefix')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                    @error('telefon_main')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>


                {{-- Emel --}}
                <div>
                    <label class="block font-medium">Alamat Emel Aktif</label>
                    <input type="email" name="email" value="{{ old('email') }}"
                        class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-red-500 focus:border-red-500">
                    @error('email')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            {{-- Submit Button --}}
            <div class="text-center mt-8">
                <button type="submit"
                    class="bg-red-500 hover:bg-red-600 text-white font-semibold px-10 py-3 rounded-lg shadow-md hover:shadow-lg transition">
                    Hantar Permohonan
                </button>
            </div>
        </form>
    </div>

    {{-- JS Logic --}}
    <script>
        const negeriSelect = document.getElementById('negeri');
        const daerahSelect = document.getElementById('daerah');
        const spinner = document.getElementById('loading-spinner');
        const bangsaSelect = document.getElementById('bangsa');
        const bangsaLainInput = document.getElementById('bangsa_lain');
        const adaKenderaan = document.getElementById('ada_kenderaan');
        const jenisKenderaan = document.getElementById('jenis_kenderaan');
        const noKpInput = document.getElementById('no_kp');
        const telefonInput = document.getElementById('telefon');

        // Dynamic daerah
        negeriSelect?.addEventListener('change', function() {
            const negeri = this.value;
            daerahSelect.innerHTML = '<option value="">-- Pilih Daerah --</option>';
            if (!negeri) return;
            spinner.classList.remove('hidden');
            fetch(`{{ url('/get-daerah') }}/${negeri}`)
                .then(res => res.json())
                .then(data => {
                    daerahSelect.innerHTML = '<option value="">-- Pilih Daerah --</option>';
                    data.forEach(d => {
                        const opt = document.createElement('option');
                        opt.value = d;
                        opt.textContent = d;
                        daerahSelect.appendChild(opt);
                    });
                })
                .finally(() => spinner.classList.add('hidden'));
        });

        // Bangsa lain
        bangsaSelect?.addEventListener('change', () => {
            bangsaLainInput.classList.toggle('hidden', bangsaSelect.value !== 'Lain-lain');
        });

        // Jenis kenderaan
        adaKenderaan?.addEventListener('change', () => {
            jenisKenderaan.classList.toggle('hidden', adaKenderaan.value !== 'Ya');
        });

        // Auto format IC
        noKpInput?.addEventListener('input', function() {
            let v = this.value.replace(/\D/g, '');
            if (v.length > 6 && v.length <= 8) v = v.slice(0, 6) + '-' + v.slice(6);
            else if (v.length > 8) v = v.slice(0, 6) + '-' + v.slice(6, 8) + '-' + v.slice(8, 12);
            this.value = v;
        });

        // Auto format telefon
        telefonInput?.addEventListener('input', function() {
            let v = this.value.replace(/[^\d+]/g, '');
            if (!v.startsWith('+60') && !v.startsWith('0')) v = '+60';
            v = v.replace('++', '+');
            if (v.startsWith('+60')) {
                let rest = v.replace('+60', '');
                if (rest.length > 3) rest = rest.slice(0, 3) + '-' + rest.slice(3);
                v = '+60' + rest;
            } else if (v.startsWith('0')) {
                if (v.length > 4) v = v.slice(0, 4) + '-' + v.slice(4);
            }
            this.value = v;
        });
    </script>
</x-guest-layout>
