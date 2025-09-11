@extends('layouts.app')

@section('title', 'Produk Kami - Kampung Tahu')

@section('content')

    {{-- ========= PAGE HEADER START ========= --}}
    <section class="relative pt-24 pb-20 overflow-hidden bg-gradient-to-br from-secondary/30 via-white to-secondary/30">
        {{-- Gelombang penyambung ke section berikutnya --}}
        <div class="absolute inset-x-0 bottom-0 text-white z-10">
        </div>
        <div class="container relative z-20 max-w-7xl px-4 py-16 mx-auto text-center sm:px-6 lg:px-8">
            <h1 class="font-serif text-4xl font-bold md:text-5xl text-primary">Produk Unggulan Kami</h1>
            <p class="max-w-2xl mx-auto mt-4 text-lg opacity-80 text-text-dark">
                Setiap produk dibuat dengan bahan baku kedelai pilihan dan resep warisan untuk menjamin kualitas dan cita
                rasa terbaik.
            </p>
        </div>
    </section>
    {{-- ========= PAGE HEADER END ========= --}}

    {{-- ========= DAFTAR PRODUK START ========= --}}
    <main class="relative py-20 overflow-hidden bg-white lg:py-24">
        {{-- Pola Dots SVG di Latar Belakang (kiri atas) --}}
        <div class="absolute top-0 left-0 text-primary/10 opacity-40 z-0 transform -translate-x-1/2 -translate-y-1/2">
            <svg width="600" height="600" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="300" cy="300" r="300" fill="url(#pattern-produk)" />
                <defs>
                    <pattern id="pattern-produk" patternContentUnits="objectBoundingBox" width=".05" height=".05">
                        <use xlink:href="#dot-produk" transform="scale(.025)" />
                    </pattern>
                    <path id="dot-produk" d="M10 5a5 5 0 100-10 5 5 0 000 10z" fill="currentColor" />
                </defs>
            </svg>
        </div>
        {{-- Pola Gelombang SVG (kanan bawah) --}}
        <div
            class="absolute bottom-0 right-0 text-secondary/15 opacity-50 z-0 transform translate-x-1/3 translate-y-1/2 -rotate-6">
            <svg viewBox="0 0 1440 320" xmlns="http://www.w3.org/2000/svg">
                <path fill="currentColor" fill-opacity="1"
                    d="M0,192L48,181.3C96,171,192,149,288,149.3C384,149,480,171,576,176C672,181,768,171,864,149.3C960,128,1056,96,1152,90.7C1248,85,1344,107,1392,117.3L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                </path>
            </svg>
        </div>

        <div class="container relative z-10 max-w-7xl px-4 mx-auto sm:px-6 lg:px-8">
            @if ($produks->isNotEmpty())
                <div class="grid grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-8">
                    @foreach ($produks as $produk)
                        {{-- Kartu Produk - Desain Baru --}}
                        <div
                            class="group bg-secondary/10 rounded-xl shadow-lg overflow-hidden flex flex-col transform hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 border border-secondary/20">
                            <a href="{{ route('produk.detail', $produk->slug) }}" class="block">
                                <img src="{{ asset('storage/' . $produk->gambar) }}" alt="{{ $produk->nama }}"
                                    class="w-full aspect-square object-cover transition-transform duration-300 group-hover:scale-110">
                            </a>

                            <div class="p-4 md:p-6 flex-grow flex flex-col">
                                <h3 class="font-serif text-lg md:text-2xl font-bold text-primary mb-3">
                                    <a href="{{ route('produk.detail', $produk->slug) }}"
                                        class="hover:text-accent transition-colors duration-300">
                                        {{ $produk->nama }}
                                    </a>
                                </h3>

                                <p class="text-text-dark opacity-80 text-xs md:text-sm leading-relaxed mb-6 flex-grow">
                                    {{ \Illuminate\Support\Str::limit($produk->deskripsi, 80) }}
                                </p>

                                <div class="mt-auto">
                                    <a href="{{ route('produk.detail', $produk->slug) }}"
                                        class="block w-full text-center bg-primary text-white font-bold text-sm md:text-base py-3 px-4 md:px-6 rounded-lg shadow-md hover:bg-opacity-90 transition-all duration-300">
                                        Lihat Detail
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- Pagination Links --}}
                <div class="mt-16">
                    {{ $produks->links() }}
                </div>
            @else
                <div class="text-center py-16">
                    <h2 class="text-2xl font-semibold text-gray-700">Oops!</h2>
                    <p class="mt-2 text-lg text-gray-500">Saat ini belum ada produk untuk ditampilkan.</p>
                </div>
            @endif

        </div>
    </main>
    {{-- ========= DAFTAR PRODUK END ========= --}}

@endsection
