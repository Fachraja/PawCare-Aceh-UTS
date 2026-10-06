<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kucing - PawCare Aceh</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen">

    <div class="max-w-4xl mx-auto px-6 py-10">

        <!-- Header -->
        <div class="mb-6">
            <a href="{{ route('cats.index') }}"
               class="text-sm text-blue-600 hover:text-blue-800">
                ← Kembali ke Daftar Kucing
            </a>

            <h1 class="text-3xl font-bold text-gray-800 mt-3">
                Detail Kucing
            </h1>

            <p class="text-gray-500 mt-1">
                Informasi lengkap mengenai kucing di PawCare Aceh
            </p>
        </div>

        <!-- Card -->
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">

            <div class="grid md:grid-cols-2">

                <!-- Foto -->
                <div class="bg-gray-50 flex items-center justify-center p-6">

                    @if($cat->foto)
                        <img
                            src="{{ asset('storage/' . $cat->foto) }}"
                            alt="{{ $cat->nama }}"
                            class="w-full max-h-[420px] object-cover rounded-xl"
                        >
                    @else
                        <div class="w-full h-80 bg-gray-200 rounded-xl
                                    flex items-center justify-center">
                            <div class="text-center text-gray-400">
                                <div class="text-6xl mb-3">🐱</div>
                                <p>Belum ada foto</p>
                            </div>
                        </div>
                    @endif

                </div>

                <!-- Informasi -->
                <div class="p-8">

                    <div class="flex items-start justify-between gap-4 mb-6">

                        <div>
                            <h2 class="text-3xl font-bold text-gray-800">
                                {{ $cat->nama }}
                            </h2>

                            <p class="text-gray-500 mt-1">
                                {{ $cat->ras ?? 'Ras tidak diketahui' }}
                            </p>
                        </div>

                        <span class="px-3 py-1 rounded-full text-sm font-semibold
                            {{ $cat->status === 'tersedia'
                                ? 'bg-green-100 text-green-700'
                                : 'bg-gray-100 text-gray-600' }}">
                            {{ ucfirst($cat->status) }}
                        </span>

                    </div>

                    <!-- Data Kucing -->
                    <div class="space-y-4">

                        <div class="flex justify-between border-b pb-3">
                            <span class="text-gray-500">
                                Umur
                            </span>

                            <span class="font-medium text-gray-800">
                                {{ $cat->umur }} tahun
                            </span>
                        </div>

                        <div class="flex justify-between border-b pb-3">
                            <span class="text-gray-500">
                                Jenis Kelamin
                            </span>

                            <span class="font-medium text-gray-800">
                                {{ $cat->jenis_kelamin }}
                            </span>
                        </div>

                        <div class="flex justify-between border-b pb-3">
                            <span class="text-gray-500">
                                Ras
                            </span>

                            <span class="font-medium text-gray-800">
                                {{ $cat->ras ?? '-' }}
                            </span>
                        </div>

                        <div class="flex justify-between border-b pb-3">
                            <span class="text-gray-500">
                                Warna
                            </span>

                            <span class="font-medium text-gray-800">
                                {{ $cat->warna ?? '-' }}
                            </span>
                        </div>

                        <div class="flex justify-between border-b pb-3">
                            <span class="text-gray-500">
                                Lokasi
                            </span>

                            <span class="font-medium text-gray-800">
                                {{ $cat->lokasi }}
                            </span>
                        </div>

                    </div>

                    <!-- Deskripsi -->
                    <div class="mt-6">
                        <h3 class="font-semibold text-gray-800 mb-2">
                            Deskripsi
                        </h3>

                        <p class="text-gray-600 leading-relaxed">
                            {{ $cat->deskripsi ?? 'Belum ada deskripsi untuk kucing ini.' }}
                        </p>
                    </div>

                    <!-- Tombol -->
                    <div class="flex gap-3 mt-8">

                        <a href="{{ route('cats.edit', $cat) }}"
                           class="flex-1 text-center bg-blue-600 hover:bg-blue-700
                                  text-white font-semibold py-3 rounded-lg">
                            Edit Data
                        </a>

                        <a href="{{ route('cats.index') }}"
                           class="flex-1 text-center bg-gray-200 hover:bg-gray-300
                                  text-gray-700 font-semibold py-3 rounded-lg">
                            Kembali
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</body>
</html>