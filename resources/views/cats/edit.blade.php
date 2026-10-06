<x-app-layout>

    <div class="py-10">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Header -->
            <div class="mb-8">

                 <a href="{{ route('cats.index') }}"
                     style="color: #fb923c !important;"
                     class="inline-flex items-center text-sm font-semibold mb-4">
                     ← Kembali ke Daftar Kucing
                 </a>

                <h1 class="text-3xl font-bold
                           text-gray-900 dark:text-white">
                    Edit Kucing
                </h1>

                <p class="mt-2 text-gray-600 dark:text-gray-400">
                    Perbarui informasi kucing di PawCare Aceh
                </p>

            </div>

            <!-- Error -->
            @if ($errors->any())
                <div class="mb-6 rounded-xl border
                            border-red-300 dark:border-red-700
                            bg-red-50 dark:bg-red-900/30
                            px-5 py-4">

                    <p class="font-semibold text-red-700 dark:text-red-300 mb-2">
                        Terdapat kesalahan:
                    </p>

                    <ul class="list-disc list-inside text-sm
                               text-red-600 dark:text-red-300">

                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach

                    </ul>

                </div>
            @endif

            <!-- Form Card -->
            <div class="bg-white dark:bg-gray-800
                        border border-gray-200 dark:border-gray-700
                        rounded-2xl shadow-lg
                        p-6 sm:p-8">

                <form action="{{ route('cats.update', $cat->id) }}"
                      method="POST">

                    @csrf
                    @method('PUT')

                    <!-- Nama -->
                    <div class="mb-5">

                        <label class="block mb-2 text-sm font-semibold
                                      text-gray-800 dark:text-gray-200">
                            Nama Kucing
                        </label>

                        <input
                            type="text"
                            name="nama"
                            value="{{ old('nama', $cat->nama) }}"
                            required
                            class="w-full rounded-xl
                                   border border-gray-300 dark:border-gray-600
                                   bg-white dark:bg-gray-700
                                   text-gray-900 dark:text-white
                                   placeholder-gray-400
                                   px-4 py-3
                                   focus:border-orange-500
                                   focus:ring-2 focus:ring-orange-500/30"
                            placeholder="Masukkan nama kucing">

                    </div>

                    <!-- Umur -->
                    <div class="mb-5">

                        <label class="block mb-2 text-sm font-semibold
                                      text-gray-800 dark:text-gray-200">
                            Umur
                        </label>

                        <input
                            type="number"
                            name="umur"
                            value="{{ old('umur', $cat->umur) }}"
                            min="0"
                            required
                            class="w-full rounded-xl
                                   border border-gray-300 dark:border-gray-600
                                   bg-white dark:bg-gray-700
                                   text-gray-900 dark:text-white
                                   px-4 py-3
                                   focus:border-orange-500
                                   focus:ring-2 focus:ring-orange-500/30"
                            placeholder="Contoh: 2">

                    </div>

                    <!-- Jenis Kelamin -->
                    <div class="mb-5">

                        <label class="block mb-2 text-sm font-semibold
                                      text-gray-800 dark:text-gray-200">
                            Jenis Kelamin
                        </label>

                        <select
                            name="jenis_kelamin"
                            required
                            class="w-full rounded-xl
                                   border border-gray-300 dark:border-gray-600
                                   bg-white dark:bg-gray-700
                                   text-gray-900 dark:text-white
                                   px-4 py-3
                                   focus:border-orange-500
                                   focus:ring-2 focus:ring-orange-500/30">

                            <option value="Jantan"
                                {{ old('jenis_kelamin', $cat->jenis_kelamin) == 'Jantan' ? 'selected' : '' }}>
                                Jantan
                            </option>

                            <option value="Betina"
                                {{ old('jenis_kelamin', $cat->jenis_kelamin) == 'Betina' ? 'selected' : '' }}>
                                Betina
                            </option>

                        </select>

                    </div>

                    <!-- Ras -->
                    <div class="mb-5">

                        <label class="block mb-2 text-sm font-semibold
                                      text-gray-800 dark:text-gray-200">
                            Ras
                        </label>

                        <input
                            type="text"
                            name="ras"
                            value="{{ old('ras', $cat->ras) }}"
                            class="w-full rounded-xl
                                   border border-gray-300 dark:border-gray-600
                                   bg-white dark:bg-gray-700
                                   text-gray-900 dark:text-white
                                   placeholder-gray-400
                                   px-4 py-3
                                   focus:border-orange-500
                                   focus:ring-2 focus:ring-orange-500/30"
                            placeholder="Contoh: Anggora">

                    </div>

                    <!-- Warna -->
                    <div class="mb-5">

                        <label class="block mb-2 text-sm font-semibold
                                      text-gray-800 dark:text-gray-200">
                            Warna
                        </label>

                        <input
                            type="text"
                            name="warna"
                            value="{{ old('warna', $cat->warna) }}"
                            class="w-full rounded-xl
                                   border border-gray-300 dark:border-gray-600
                                   bg-white dark:bg-gray-700
                                   text-gray-900 dark:text-white
                                   placeholder-gray-400
                                   px-4 py-3
                                   focus:border-orange-500
                                   focus:ring-2 focus:ring-orange-500/30"
                            placeholder="Contoh: Putih, Hitam, Coklat">

                    </div>

                    <!-- Lokasi -->
                    <div class="mb-5">

                        <label class="block mb-2 text-sm font-semibold
                                      text-gray-800 dark:text-gray-200">
                            Lokasi
                        </label>

                        <input
                            type="text"
                            name="lokasi"
                            value="{{ old('lokasi', $cat->lokasi) }}"
                            required
                            class="w-full rounded-xl
                                   border border-gray-300 dark:border-gray-600
                                   bg-white dark:bg-gray-700
                                   text-gray-900 dark:text-white
                                   placeholder-gray-400
                                   px-4 py-3
                                   focus:border-orange-500
                                   focus:ring-2 focus:ring-orange-500/30"
                            placeholder="Contoh: Banda Aceh">

                    </div>

                    <!-- Deskripsi -->
                    <div class="mb-7">

                        <label class="block mb-2 text-sm font-semibold
                                      text-gray-800 dark:text-gray-200">
                            Deskripsi
                        </label>

                        <textarea
                            name="deskripsi"
                            rows="5"
                            class="w-full rounded-xl
                                   border border-gray-300 dark:border-gray-600
                                   bg-white dark:bg-gray-700
                                   text-gray-900 dark:text-white
                                   placeholder-gray-400
                                   px-4 py-3
                                   focus:border-orange-500
                                   focus:ring-2 focus:ring-orange-500/30"
                            placeholder="Masukkan deskripsi kucing">{{ old('deskripsi', $cat->deskripsi) }}</textarea>

                    </div>

                    <!-- Tombol -->
                    <div class="flex flex-col sm:flex-row gap-3">

                        <button
                            type="submit"
                            class="flex-1 rounded-xl
                                   bg-orange-500 hover:bg-orange-600
                                   text-white font-semibold
                                   px-5 py-3
                                   transition">
                            Simpan Perubahan
                        </button>

                        <a
                            href="{{ route('cats.index') }}"
                            class="flex-1 rounded-xl
                                   bg-gray-200 hover:bg-gray-300
                                   dark:bg-gray-700 dark:hover:bg-gray-600
                                   text-gray-800 dark:text-white
                                   font-semibold text-center
                                   px-5 py-3
                                   transition">
                            Batal
                        </a>

                    </div>

                </form>

            </div>

        </div>
    </div>

</x-app-layout>