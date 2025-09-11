@extends('layouts.app')

@section('title', $berita->judul)

@section('content')

    <main class="relative pt-24 overflow-hidden bg-gradient-to-br from-secondary/20 via-white to-white">
        {{-- Pola SVG di Latar Belakang --}}
        <div class="absolute top-0 left-0 text-primary/10 opacity-40 z-0 transform -translate-x-1/2 -translate-y-1/2">
            <svg width="800" height="800" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="400" cy="400" r="400" fill="url(#pattern-detail)" />
                <defs>
                    <pattern id="pattern-detail" patternContentUnits="objectBoundingBox" width=".05" height=".05">
                        <use xlink:href="#dot-detail" transform="scale(.025)" />
                    </pattern>
                    <path id="dot-detail" d="M10 5a5 5 0 100-10 5 5 0 000 10z" fill="currentColor" />
                </defs>
            </svg>
        </div>

        <div class="container max-w-7xl px-4 sm:px-6 lg:px-8 py-10 mx-auto">
            <div class="gap-12 lg:grid lg:grid-cols-12">

                {{-- Konten Artikel Utama (Kolom Kiri) --}}
                <div class="lg:col-span-8">
                    <div
                        class="bg-white/70 backdrop-blur-lg p-6 sm:p-8 md:p-10 rounded-2xl shadow-xl border border-white/50">
                        {{-- Breadcrumbs --}}
                        <nav class="text-sm mb-6" aria-label="Breadcrumb">
                            <ol class="inline-flex p-0 space-x-2 list-none">
                                <li class="flex items-center"><a href="{{ url('/') }}"
                                        class="text-gray-500 hover:text-primary">Home</a></li>
                                <li class="flex items-center"><svg class="w-5 h-5 text-gray-400" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd" />
                                    </svg><a href="{{ route('berita') }}"
                                        class="text-gray-500 hover:text-primary">Berita</a></li>
                            </ol>
                        </nav>

                        {{-- Judul dan Tanggal --}}
                        <h1 class="font-serif text-3xl font-bold leading-tight md:text-4xl text-primary">
                            {{ $berita->judul }}</h1>
                        <p class="mt-3 text-base opacity-70 text-text-dark">Diunggah pada
                            {{ $berita->created_at->format('d F Y') }}</p>

                        {{-- Gambar Utama --}}
                        <img class="object-cover w-full my-8 rounded-xl aspect-video shadow-lg"
                            src="{{ asset('storage/' . $berita->thumbnail) }}" alt="{{ $berita->judul }}">

                        {{-- Isi Artikel --}}
                        <div
                            class="prose max-w-none prose-lg prose-indigo prose-p:text-text-dark prose-headings:text-primary prose-a:text-accent">
                            {!! $berita->isi !!}
                        </div>
                    </div>
                </div>

                {{-- Sidebar Berita Lainnya (Kolom Kanan) --}}
                <div class="mt-12 lg:col-span-4 lg:mt-0">
                    <div class="lg:sticky lg:top-28">
                        <h3 class="font-serif text-2xl font-bold text-primary mb-6">Berita Terbaru</h3>
                        <div class="space-y-6">
                            @foreach ($beritasLain as $itemLain)
                                {{-- Kartu Berita Visual untuk Sidebar --}}
                                <a href="{{ route('berita.detail', $itemLain->slug) }}"
                                    class="flex items-center gap-4 p-4 overflow-hidden transition-all duration-300 bg-white rounded-xl shadow-lg group hover:shadow-xl hover:-translate-y-1">
                                    <img src="{{ asset('storage/' . $itemLain->thumbnail) }}" alt="{{ $itemLain->judul }}"
                                        class="object-cover w-1/3 rounded-lg aspect-square">
                                    <div class="w-2/3">
                                        <h4
                                            class="font-serif font-bold leading-tight text-primary group-hover:text-accent transition-colors duration-300">
                                            {{ \Illuminate\Support\Str::limit($itemLain->judul, 50) }}
                                        </h4>
                                        <p class="mt-1 text-xs opacity-60 text-text-dark">
                                            {{ $itemLain->created_at->format('d F Y') }}</p>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
