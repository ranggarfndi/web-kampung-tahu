@extends('layouts.app')

@section('title', 'Tim Kami - Kampung Tahu')

@section('content')

    {{-- ========= PAGE HEADER START ========= --}}
    <section class="pt-24 bg-gray-50">
        <div class="container mx-auto px-6 lg:px-8 py-16 text-center">
            <h1 class="font-serif text-4xl md:text-5xl font-bold text-primary">Tim Kami</h1>
            <p class="mt-4 text-lg text-text-dark opacity-70 max-w-2xl mx-auto">
                Kenali orang-orang berdedikasi di balik kualitas dan cita rasa produk Kampung Tahu.
            </p>
        </div>
    </section>
    {{-- ========= PAGE HEADER END ========= --}}

    {{-- ========= DAFTAR PENGURUS START ========= --}}
    <main class="py-20 lg:py-24 bg-white">
        <div class="container mx-auto px-6 lg:px-8">
            
            @if ($pengurus->isNotEmpty())
                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-6 sm:gap-8">
                    @foreach ($pengurus as $p)
                        {{-- Kartu Pengurus yang Diperbarui --}}
                        <a href="{{ route('pengurus.detail', $p->slug) }}" class="group block bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden text-center">
                            <div class="relative w-full aspect-square overflow-hidden mb-4">
                                {{-- Gambar Profil dengan Animasi Zoom --}}
                                <img src="{{ asset('storage/' . $p->gambar) }}" alt="{{ $p->nama }}" 
                                     class="w-full h-full object-cover object-top transform group-hover:scale-110 transition-transform duration-300 rounded-t-xl">
                                {{-- Overlay untuk efek --}}
                                <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                            </div>
                            <div class="p-4 pt-0">
                                <h3 class="font-serif text-xl font-bold text-primary group-hover:text-accent transition-colors duration-300">
                                    {{ $p->nama }}
                                </h3>
                                <p class="text-text-dark opacity-70 text-sm mt-1">{{ $p->jabatan }}</p>
                            </div>
                        </a>
                    @endforeach
                </div>

                {{-- Pagination Links --}}
                <div class="mt-16">
                    {{ $pengurus->links() }}
                </div>

            @else
                <div class="text-center py-16">
                    <h2 class="text-2xl font-semibold text-gray-700">Oops!</h2>
                    <p class="mt-2 text-lg text-gray-500">Saat ini belum ada data tim untuk ditampilkan.</p>
                </div>
            @endif

        </div>
    </main>
    {{-- ========= DAFTAR PENGURUS END ========= --}}

@endsection