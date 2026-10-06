<x-app-layout>

    <div class="py-10 bg-orange-50 min-h-screen">

        <div class="max-w-3xl mx-auto px-4">

            {{-- Header --}}
            <div class="mb-8">

                <a href="{{ route('cats.index') }}"
                   class="text-orange-600 hover:text-orange-800 text-sm font-medium">
                    ← Kembali ke PawCare Aceh
                </a>

                <h1 class="text-3xl font-extrabold text-gray-800 mt-4">
                    🐾 Ajukan Penitipan Kucing
                </h1>

                <p class="text-gray-600 mt-2">
                    Isi data kucing yang ingin dititipkan kepada PawCare Aceh.
                </p>

            </div>

            {{-- Error --}}
            @if ($errors->any())

                <div class="bg-red-100 border border-red-300
                            text-red-700 px-4 py-3 rounded-xl mb-6">

                    <p class="font-semibold mb-2">
                        Terdapat kesalahan:
                    </p>

                    <ul class="list-disc list-inside text-sm">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>

                </div>

            @endif

            {{-- Form --}}
            <div class="bg-white rounded-2xl shadow-lg p-6 md:p-8">

                <form action="{{ route('entrustments.store') }}"
                      method="POST">

                    @csrf

                    {{-- Nama Kucing --}}
                    <div class="mb-5">

                        <label for="nama_kucing"
                               class="block text-sm font-semibold text-gray-700 mb-2">
                            Nama Kucing
                        </label>

                        <input
                            type="text"
                            id="nama_kucing"
                            name="nama_kucing"
                            value="{{ old('nama_kucing') }}"
                            placeholder="Contoh: Mochi"
                            required
                            class="w-full border border-gray-300 rounded-xl
                                   px-4 py-3 focus:outline-none
                                   focus:ring-2 focus:ring-orange-300">

                    </div>

                    {{-- Umur --}}
                    <div class="mb-5">

                        <label for="umur"
                               class="block text-sm font-semibold text-gray-700 mb-2">
                            Umur Kucing
                        </label>

                        <input
                            type="number"
                            id="umur"
                            name="umur"
                            value="{{ old('umur') }}"
                            min="0"
                            placeholder="Contoh: 2"
                            required
                            class="w-full border border-gray-300 rounded-xl
                                   px-4 py-3 focus:outline-none
                                   focus:ring-2 focus:ring-orange-300">

                        <p class="text-xs text-gray-500 mt-1">
                            Masukkan umur dalam tahun.
                        </p>

                    </div>

                    {{-- Jenis Kelamin --}}
                    <div class="mb-5">

                        <label for="jenis_kelamin"
                               class="block text-sm font-semibold text-gray-700 mb-2">
                            Jenis Kelamin
                        </label>

                        <select
                            id="jenis_kelamin"
                            name="jenis_kelamin"
                            required
                            class="w-full border border-gray-300 rounded-xl
                                   px-4 py-3 bg-white
                                   focus:outline-none
                                   focus:ring-2 focus:ring-orange-300">

                            <option value="">
                                -- Pilih Jenis Kelamin --
                            </option>

                            <option value="Jantan"
                                {{ old('jenis_kelamin') == 'Jantan' ? 'selected' : '' }}>
                                Jantan
                            </option>

                            <option value="Betina"
                                {{ old('jenis_kelamin') == 'Betina' ? 'selected' : '' }}>
                                Betina
                            </option>

                        </select>

                    </div>

                    {{-- Lokasi --}}
                    <div class="mb-5">

                        <label for="lokasi"
                               class="block text-sm font-semibold text-gray-700 mb-2">
                            Lokasi Kucing
                        </label>

                        <input
                            type="text"
                            id="lokasi"
                            name="lokasi"
                            value="{{ old('lokasi') }}"
                            placeholder="Contoh: Banda Aceh"
                            required
                            class="w-full border border-gray-300 rounded-xl
                                   px-4 py-3 focus:outline-none
                                   focus:ring-2 focus:ring-orange-300">

                    </div>

                    {{-- Alasan --}}
                    <div class="mb-5">

                        <label for="alasan"
                               class="block text-sm font-semibold text-gray-700 mb-2">
                            Alasan Penitipan
                        </label>

                        <textarea
                            id="alasan"
                            name="alasan"
                            rows="4"
                            placeholder="Jelaskan alasan kucing perlu dititipkan..."
                            required
                            class="w-full border border-gray-300 rounded-xl
                                   px-4 py-3 focus:outline-none
                                   focus:ring-2 focus:ring-orange-300">{{ old('alasan') }}</textarea>

                    </div>

                    {{-- Deskripsi --}}
                    <div class="mb-6">

                        <label for="deskripsi"
                               class="block text-sm font-semibold text-gray-700 mb-2">
                            Deskripsi Tambahan
                        </label>

                        <textarea
                            id="deskripsi"
                            name="deskripsi"
                            rows="4"
                            placeholder="Contoh: Kucing sudah divaksin, aktif, dan terbiasa dengan manusia."
                            class="w-full border border-gray-300 rounded-xl
                                   px-4 py-3 focus:outline-none
                                   focus:ring-2 focus:ring-orange-300">{{ old('deskripsi') }}</textarea>

                    </div>

                    {{-- Tombol --}}
                    <div class="flex flex-col sm:flex-row gap-3">

                        <a href="{{ route('cats.index') }}"
                           class="flex-1 text-center bg-gray-200
                                  hover:bg-gray-300 text-gray-700
                                  font-semibold py-3 rounded-xl">
                            Batal
                        </a>

                        <button
                            type="submit"
                            class="flex-1 bg-orange-500
                                   hover:bg-orange-600 text-white
                                   font-semibold py-3 rounded-xl">
                            🐾 Kirim Pengajuan
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</x-app-layout>