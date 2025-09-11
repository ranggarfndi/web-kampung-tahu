@extends('layouts.app')

@section('title', 'Berita & Kegiatan - Kampung Tahu')

@section('content')

    {{-- ========= PAGE HEADER START ========= --}}
    <section class="relative pt-24 pb-20 overflow-hidden bg-gradient-to-br from-secondary/30 via-white to-secondary/30">
        {{-- Pola SVG di Latar Belakang --}}
        <div class="absolute top-0 right-0 text-primary/10 opacity-40 z-0 transform translate-x-1/4 -translate-y-1/4">
            <svg width="600" height="600" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="300" cy="300" r="300" fill="url(#pattern-header)" />
                <defs>
                    <pattern id="pattern-header" patternContentUnits="objectBoundingBox" width=".05" height=".05">
                        <use xlink:href="#dot-header" transform="scale(.025)" />
                    </pattern>
                    <path id="dot-header" d="M10 5a5 5 0 100-10 5 5 0 000 10z" fill="currentColor" />
                </defs>
            </svg>
        </div>
        <div class="container relative z-20 max-w-7xl px-4 py-16 mx-auto text-center sm:px-6 lg:px-8">
            <h1 class="font-serif text-4xl font-bold md:text-5xl text-primary">Berita & Kegiatan</h1>
            <p class="max-w-2xl mx-auto mt-4 text-lg opacity-80 text-text-dark">
                Ikuti terus kabar terbaru, acara, dan cerita menarik dari komunitas kami di Kampung Tahu.
            </p>
        </div>
    </section>
    {{-- ========= PAGE HEADER END ========= --}}

    {{-- ========= DAFTAR BERITA START ========= --}}
    <main class="relative py-20 overflow-hidden bg-white lg:py-24">
        <div class="container max-w-7xl px-4 mx-auto sm:px-6 lg:px-8">
            @if ($beritas->isNotEmpty())
                <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                    @foreach ($beritas as $item)
                        <a href="{{ route('berita.detail', $item->slug) }}"
                            class="block overflow-hidden transition-all duration-300 bg-secondary/10 border border-secondary/20 rounded-xl shadow-lg group hover:shadow-2xl hover:-translate-y-2">
                            <img src="{{ asset('storage/' . $item->thumbnail) }}" alt="{{ $item->judul }}"
                                class="object-cover w-full transition-transform duration-300 aspect-video group-hover:scale-110">
                            <div class="p-6">
                                <p class="mb-2 text-sm opacity-60 text-text-dark">{{ $item->created_at->format('d F Y') }}
                                </p>
                                <h3
                                    class="font-serif text-xl font-bold text-primary group-hover:text-accent transition-colors duration-300">
                                    {{ \Illuminate\Support\Str::limit($item->judul, 60) }}</h3>
                                <p class="mt-3 text-sm leading-relaxed opacity-80 text-text-dark">
                                    {{ \Illuminate\Support\Str::limit(strip_tags($item->isi), 120) }}
                                </p>
                            </div>
                        </a>
                    @endforeach
                </div>

                {{-- Pagination Links --}}
                <div class="mt-16">
                    {{ $beritas->links() }}
                </div>
            @else
                <div class="py-16 text-center">
                    <h2 class="text-2xl font-semibold text-gray-700">Oops!</h2>
                    <p class="mt-2 text-lg text-gray-500">Saat ini belum ada berita untuk ditampilkan.</p>
                </div>
            @endif
        </div>
    </main>
    {{-- ========= DAFTAR BERITA END ========= --}}
@endsection
