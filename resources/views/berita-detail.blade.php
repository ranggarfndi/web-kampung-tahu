@extends('layouts.app')

@section('title', $berita->judul)

@section('content')

    <main class="pt-24 bg-white">
        <div class="container px-6 py-10 mx-auto lg:px-8">
            {{-- BANNER & JUDUL --}}
            <div class="max-w-4xl mx-auto">
                {{-- Breadcrumbs --}}
                <nav class="text-sm" aria-label="Breadcrumb">
                    <ol class="inline-flex p-0 space-x-2 list-none">
                        <li class="flex items-center"><a href="{{ url('/') }}"
                                class="text-gray-500 hover:text-primary">Home</a></li>
                        <li class="flex items-center"><svg class="w-5 h-5 text-gray-400" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                            </svg><a href="{{ route('berita') }}" class="text-gray-500 hover:text-primary">Berita</a></li>
                    </ol>
                </nav>

                <h1 class="mt-4 font-serif text-3xl font-bold leading-tight md:text-4xl text-primary">{{ $berita->judul }}
                </h1>
                <p class="mt-3 text-base opacity-70 text-text-dark">Diunggah pada {{ $berita->created_at->format('d F Y') }}
                </p>

                <img class="object-cover w-full my-8 rounded-xl aspect-video shadow-lg"
                    src="{{ asset('storage/' . $berita->thumbnail) }}" alt="{{ $berita->judul }}">
            </div>

            {{-- KONTEN & SIDEBAR --}}
            <div class="gap-12 lg:grid lg:grid-cols-12">
                {{-- Konten Artikel --}}
                <div class="lg:col-span-8">
                    <div
                        class="prose max-w-none prose-lg prose-indigo prose-p:text-text-dark prose-headings:text-primary prose-a:text-accent">
                        {!! $berita->isi !!}
                    </div>
                </div>

                {{-- Sidebar Berita Lainnya --}}
                <div class="mt-12 lg:col-span-4 lg:mt-0">
                    <div class="lg:sticky lg:top-28">
                        <h3 class="font-serif text-2xl font-bold text-primary">Berita Terbaru</h3>
                        <div class="mt-4 space-y-6">
                            @foreach ($beritasLain as $itemLain)
                                <a href="{{ route('berita.detail', $itemLain->slug) }}" class="block group">
                                    <p class="font-semibold text-primary group-hover:text-accent">{{ $itemLain->judul }}</p>
                                    <p class="mt-1 text-sm opacity-60 text-text-dark">
                                        {{ $itemLain->created_at->format('d F Y') }}</p>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
