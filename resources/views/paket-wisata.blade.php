@extends('layouts.app')

@section('title', 'Paket Wisata Edukasi - Kampung Tahu')

@section('content')

    {{-- ========= PAGE HEADER START ========= --}}
    <section class="relative pt-24 pb-20 overflow-hidden bg-gradient-to-br from-secondary/30 via-white to-secondary/30">
        <div class="container relative z-20 max-w-7xl px-4 py-16 mx-auto text-center sm:px-6 lg:px-8">
            <h1 class="font-serif text-4xl font-bold md:text-5xl text-primary">Paket Wisata Edukasi</h1>
            <p class="max-w-2xl mx-auto mt-4 text-lg opacity-80 text-text-dark">
                Rasakan pengalaman unik dan menyenangkan belajar membuat tahu langsung dari para ahlinya di Kampung Tahu.
            </p>
        </div>
    </section>
    {{-- ========= PAGE HEADER END ========= --}}

    {{-- ========= DAFTAR PAKET WISATA START ========= --}}
    <main class="relative py-20 overflow-hidden bg-white lg:py-24">
        {{-- Pola SVG di Latar Belakang --}}
        <div class="absolute top-0 right-0 text-secondary/10 opacity-50 z-0 transform translate-x-1/3 -translate-y-1/3">
            <svg width="600" height="600" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="300" cy="300" r="300" fill="url(#pattern-paket)" />
                <defs>
                    <pattern id="pattern-paket" patternContentUnits="objectBoundingBox" width=".05" height=".05">
                        <use xlink:href="#dot-paket" transform="scale(.025)" />
                    </pattern>
                    <path id="dot-paket" d="M10 5a5 5 0 100-10 5 5 0 000 10z" fill="currentColor" />
                </defs>
            </svg>
        </div>

        <div class="container relative z-10 max-w-7xl px-4 mx-auto sm:px-6 lg:px-8">

            @if ($paket_wisatas->isNotEmpty())
                <div class="grid grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-8">
                    @foreach ($paket_wisatas as $paket)
                        {{-- Kartu Paket Wisata --}}
                        <div
                            class="group bg-secondary/10 rounded-xl shadow-lg overflow-hidden flex flex-col transform hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 border border-secondary/20">
                            <a href="{{ route('paket-wisata.detail', $paket->slug) }}" class="block">
                                <img src="{{ asset('storage/' . $paket->gambar) }}" alt="{{ $paket->nama }}"
                                    class="w-full aspect-square object-cover transition-transform duration-300 group-hover:scale-110">
                            </a>
                            <div class="p-4 md:p-6 flex-grow flex flex-col">
                                <h3 class="font-serif text-xl md:text-2xl font-bold text-primary mb-3">
                                    <a href="{{ route('paket-wisata.detail', $paket->slug) }}"
                                        class="hover:text-accent transition-colors duration-300">
                                        {{ $paket->nama }}
                                    </a>
                                </h3>
                                <div
                                    class="prose prose-sm text-text-dark opacity-80 leading-relaxed mb-6 flex-grow text-xs sm:text-sm">
                                    {!! \Illuminate\Support\Str::limit($paket->deskripsi, 80) !!}
                                </div>
                                <div class="mt-auto">
                                    <a href="https://api.whatsapp.com/send?phone={{ config('app.wa_phone_number') }}&text=Halo,%20saya%20tertarik%20dengan%20Paket%20Wisata%20'{{ urlencode($paket->nama) }}'"
                                        target="_blank"
                                        class="inline-block w-full px-4 py-3 text-xs font-bold text-center text-primary transition-all duration-300 transform sm:text-sm bg-accent rounded-lg shadow-md hover:bg-yellow-500 hover:shadow-xl hover:scale-105">
                                        Pesan Tur Ini
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- Pagination Links --}}
                <div class="mt-16">
                    {{ $paket_wisatas->links() }}
                </div>
            @else
                <div class="text-center py-16">
                    <h2 class="text-2xl font-semibold text-gray-700">Oops!</h2>
                    <p class="mt-2 text-lg text-gray-500">Saat ini belum ada paket wisata untuk ditampilkan.</p>
                </div>
            @endif

        </div>
    </main>
    {{-- ========= DAFTAR PAKET WISATA END ========= --}}

@endsection
