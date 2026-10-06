<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lokasi Penampungan - PawCare Aceh</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 min-h-screen">

    <div class="max-w-6xl mx-auto px-6 py-10">

        <!-- Header -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-800">
                📍 Lokasi Penampungan
            </h1>

            <p class="text-gray-600 mt-2">
                Informasi lokasi penampungan kucing PawCare Aceh.
            </p>
        </div>

        <!-- Tombol Kembali -->
        <div class="mb-6">
            <a href="{{ route('cats.index') }}"
               class="inline-block bg-gray-600 hover:bg-gray-700 text-white px-5 py-3 rounded-xl shadow-md">
                ← Kembali ke Data Kucing
            </a>
        </div>

        <!-- Daftar Shelter -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            @forelse ($shelters as $shelter)

                <div class="bg-white rounded-2xl shadow-md p-6">

                    <h2 class="text-xl font-bold text-gray-800 mb-4">
                        🏠 {{ $shelter->nama }}
                    </h2>

                    <div class="space-y-3 text-gray-600">

                        <p>
                            <strong>📍 Alamat:</strong><br>
                            {{ $shelter->alamat }}
                        </p>

                        @if ($shelter->no_telepon)
                            <p>
                                <strong>📞 No. Telepon:</strong><br>
                                {{ $shelter->no_telepon }}
                            </p>
                        @endif

                        @if ($shelter->deskripsi)
                            <p>
                                <strong>ℹ️ Deskripsi:</strong><br>
                                {{ $shelter->deskripsi }}
                            </p>
                        @endif

                    </div>

                </div>

            @empty

                <div class="bg-white rounded-2xl shadow-md p-8 text-center md:col-span-2">
                    <p class="text-gray-500">
                        Belum ada lokasi penampungan yang tersedia.
                    </p>
                </div>

            @endforelse

        </div>

    </div>

</body>
</html>