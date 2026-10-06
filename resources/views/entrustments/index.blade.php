<x-app-layout>

    <div class="py-10 bg-orange-50 min-h-screen">

        <div class="max-w-7xl mx-auto px-4">

            {{-- HEADER --}}
            <div class="flex flex-col md:flex-row md:justify-between md:items-center mb-8">

                <div>
                    <h1 class="text-4xl font-extrabold text-orange-500">
                        🐾 PawCare Aceh
                    </h1>

                    <p class="text-gray-600 mt-2">
                        Penitipan Kucing
                    </p>
                </div>

                <div class="mt-4 md:mt-0 flex flex-wrap gap-3">

                    <a href="{{ route('entrustments.create') }}"
                       class="bg-blue-500 hover:bg-blue-600 text-white px-5 py-3 rounded-xl shadow-md">
                        + Ajukan Penitipan
                    </a>

                    <a href="{{ route('cats.index') }}"
                       class="bg-orange-500 hover:bg-orange-600 text-white px-5 py-3 rounded-xl shadow-md">
                        ← Data Kucing
                    </a>

                </div>

            </div>


            {{-- ALERT SUCCESS --}}
            @if(session('success'))

                <div class="bg-green-100 border border-green-300 text-green-700 px-4 py-3 rounded-lg mb-6">
                    {{ session('success') }}
                </div>

            @endif


            {{-- DATA PENITIPAN --}}
            @if($entrustments->count())

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

                    @foreach($entrustments as $entrustment)

                        <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition duration-300 p-6">

                            <div class="flex justify-between items-start mb-4">

                                <h2 class="text-2xl font-bold text-gray-800">
                                    {{ $entrustment->nama_kucing }}
                                </h2>

                                <span class="px-3 py-1 rounded-full text-xs bg-yellow-100 text-yellow-700">
                                    {{ ucfirst($entrustment->status) }}
                                </span>

                            </div>


                            {{-- DATA KUCING --}}
                            <div class="space-y-2 text-sm text-gray-600">

                                <p>
                                    <strong>Umur:</strong>
                                    {{ $entrustment->umur }} tahun
                                </p>

                                <p>
                                    <strong>Jenis Kelamin:</strong>
                                    {{ $entrustment->jenis_kelamin }}
                                </p>

                                <p>
                                    <strong>Lokasi:</strong>
                                    {{ $entrustment->lokasi }}
                                </p>

                            </div>


                            {{-- ALASAN --}}
                            <div class="mt-4">

                                <p class="font-semibold text-gray-700">
                                    Alasan Penitipan:
                                </p>

                                <p class="text-gray-600 text-sm mt-1">
                                    {{ $entrustment->alasan }}
                                </p>

                            </div>


                            {{-- DESKRIPSI --}}
                            @if($entrustment->deskripsi)

                                <div class="mt-4">

                                    <p class="font-semibold text-gray-700">
                                        Deskripsi:
                                    </p>

                                    <p class="text-gray-600 text-sm mt-1">
                                        {{ $entrustment->deskripsi }}
                                    </p>

                                </div>

                            @endif


                            {{-- TANGGAL --}}
                            <div class="mt-5 pt-4 border-t border-gray-200">

                                <p class="text-xs text-gray-500">
                                    Diajukan:
                                    {{ $entrustment->created_at->format('d M Y H:i') }}
                                </p>

                            </div>

                        </div>

                    @endforeach

                </div>

            @else

                {{-- BELUM ADA DATA --}}
                <div class="bg-white rounded-2xl shadow-md p-10 text-center">

                    <div class="text-5xl mb-4">
                        🐱
                    </div>

                    <h2 class="text-2xl font-semibold text-gray-700">
                        Belum Ada Pengajuan Penitipan
                    </h2>

                    <p class="text-gray-500 mt-2">
                        Belum ada data kucing yang dititipkan.
                    </p>

                    <a href="{{ route('entrustments.create') }}"
                       class="inline-block mt-5 bg-blue-500 hover:bg-blue-600 text-white px-5 py-3 rounded-xl shadow-md">
                        + Ajukan Penitipan
                    </a>

                </div>

            @endif


            {{-- FOOTER --}}
            <div class="text-center mt-12 text-gray-500 text-sm">

                🐾 PawCare Aceh — Sistem Adopsi dan Perawatan Kucing

            </div>

        </div>

    </div>

</x-app-layout>