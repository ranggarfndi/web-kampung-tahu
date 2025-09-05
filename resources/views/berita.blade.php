@extends('layouts.app')

@section('title', 'Berita & Kegiatan - Kampung Tahu')

@section('content')

    {{-- PAGE HEADER --}}
    <section class="pt-24 bg-gray-50">
        <div class="container px-6 py-16 mx-auto text-center lg:px-8">
            <h1 class="font-serif text-4xl font-bold md:text-5xl text-primary">Berita & Kegiatan</h1>
            <p class="max-w-2xl mx-auto mt-4 text-lg opacity-70 text-text-dark">
                Ikuti terus kabar terbaru, acara, dan cerita menarik dari komunitas kami di Kampung Tahu.
            </p>
        </div>
    </section>

    {{-- DAFTAR BERITA --}}
    <main class="py-20 bg-white lg:py-24">
        <div class="container px-6 mx-auto lg:px-8">
            @if ($beritas->isNotEmpty())
                <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                    @foreach ($beritas as $item)
                        <a href="{{ route('berita.detail', $item->slug) }}"
                            class="block overflow-hidden transition-all duration-300 bg-white rounded-xl shadow-lg group hover:shadow-2xl hover:-translate-y-2">
                            <img src="{{ asset('storage/' . $item->thumbnail) }}" alt="{{ $item->judul }}"
                                class="object-cover w-full transition-transform duration-300 aspect-video group-hover:scale-110">
                            <div class="p-6">
                                <p class="mb-2 text-sm opacity-60 text-text-dark">{{ $item->created_at->format('d F Y') }}
                                </p>
                                <h3 class="font-serif text-xl font-bold text-primary group-hover:text-accent">
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
@endsection
