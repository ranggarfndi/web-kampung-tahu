@extends('layouts.app')

@section('title', 'Tim Kami - Kampung Tahu')

@section('content')

    {{-- ========= PAGE HEADER START ========= --}}
    <section class="relative pt-24 overflow-hidden bg-gradient-to-br from-secondary/30 via-white to-secondary/30">
        <div class="container relative z-20 max-w-7xl px-4 py-16 mx-auto text-center sm:px-6 lg:px-8">
            <h1 class="font-serif text-4xl font-bold md:text-5xl text-primary">Tim Kami</h1>
            <p class="max-w-2xl mx-auto mt-4 text-lg opacity-80 text-text-dark">
                Kenali orang-orang berdedikasi di balik kualitas dan cita rasa produk Kampung Tahu.
            </p>
        </div>
    </section>
    {{-- ========= PAGE HEADER END ========= --}}

    {{-- ========= DAFTAR PENGURUS START ========= --}}
    <main class="relative py-20 overflow-hidden bg-white lg:py-24">
        {{-- Pola SVG di Latar Belakang --}}
        <div class="absolute top-0 left-0 text-primary/10 opacity-40 z-0 transform -translate-x-1/2 -translate-y-1/2">
            <svg width="600" height="600" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="300" cy="300" r="300" fill="url(#pattern-pengurus)"/><defs><pattern id="pattern-pengurus" patternContentUnits="objectBoundingBox" width=".05" height=".05"><use xlink:href="#dot-pengurus" transform="scale(.025)"/></pattern><path id="dot-pengurus" d="M10 5a5 5 0 100-10 5 5 0 000 10z" fill="currentColor"/></defs></svg>
        </div>
        <div class="absolute bottom-0 right-0 text-accent/10 opacity-50 z-0 transform translate-x-1/3 translate-y-1/3">
             <svg width="400" height="400" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                <line x1="10" y1="10" x2="90" y2="90" stroke="currentColor" stroke-width="3" stroke-dasharray="10 5"/>
                <line x1="90" y1="10" x2="10" y2="90" stroke="currentColor" stroke-width="3" stroke-dasharray="10 5"/>
            </svg>
        </div>

        <div class="container relative z-10 max-w-7xl px-4 mx-auto sm:px-6 lg:px-8">
            
            @if ($pengurus->isNotEmpty())
                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-6 sm:gap-8">
                    @foreach ($pengurus as $p)
                        {{-- Kartu Pengurus --}}
                        <a href="{{ route('pengurus.detail', $p->slug) }}" class="block text-center group">
                            <div class="relative w-full max-w-[200px] aspect-square mx-auto overflow-hidden rounded-full shadow-lg transform group-hover:scale-105 transition-transform duration-300 border-4 border-white group-hover:border-accent/50">
                                <img src="{{ asset('storage/' . $p->gambar) }}" alt="{{ $p->nama }}" class="w-full h-full object-cover object-top">
                            </div>
                            <div class="mt-4">
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