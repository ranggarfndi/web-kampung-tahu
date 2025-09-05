@extends('layouts.app')

@section('title', $paket->nama . ' - Kampung Tahu')

@section('content')

    <main class="pt-24 bg-white">
        <div class="container mx-auto px-6 lg:px-8 pt-8 pb-16 lg:pb-20">

            {{-- Breadcrumbs --}}
            <nav class="text-sm mb-8" aria-label="Breadcrumb">
                <ol class="list-none p-0 inline-flex space-x-2">
                    <li class="flex items-center"><a href="{{ url('/') }}" class="text-gray-500 hover:text-primary">Home</a></li>
                    <li class="flex items-center"><svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" /></svg><a href="{{ route('paket-wisata') }}" class="text-gray-500 hover:text-primary">Paket Wisata</a></li>
                    <li class="flex items-center"><svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" /></svg><span class="text-gray-800 font-semibold">{{ $paket->nama }}</span></li>
                </ol>
            </nav>

            {{-- Konten Detail Paket Wisata --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-start">
                <div class="lg:sticky lg:top-28">
                    <img src="{{ asset('storage/' . $paket->gambar) }}" alt="{{ $paket->nama }}" class="w-full rounded-2xl shadow-xl aspect-square object-cover">
                </div>
                <div>
                    <h1 class="font-serif text-3xl md:text-4xl font-bold text-primary leading-tight mb-4">{{ $paket->nama }}</h1>
                    <div class="prose prose-lg max-w-none text-text-dark opacity-80 leading-relaxed mb-8">
                        {!! $paket->deskripsi !!}
                    </div>
                    <a href="https://api.whatsapp.com/send?phone={{ config('app.wa_phone_number') }}&text=Halo,%20saya%20tertarik%20dengan%20Paket%20Wisata%20'{{ urlencode($paket->nama) }}'"
                       target="_blank"
                       class="inline-flex items-center gap-3 w-full sm:w-auto justify-center bg-green-500 hover:bg-green-600 text-white font-bold py-3 px-6 rounded-lg text-base shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.894 11.892-1.99 0-3.903-.52-5.586-1.457l-6.162 1.688a.625.625 0 01-.761-.761z"/></svg>
                        <span>Pesan Tur Ini</span>
                    </a>
                </div>
            </div>
        </div>
    </main>

    {{-- Paket Wisata Lainnya --}}
    @if($paketsLain->isNotEmpty())
    <section class="py-16 lg:py-20 bg-gray-50">
        <div class="container mx-auto px-6 lg:px-8">
            <div class="mb-10">
                <h2 class="font-serif text-2xl md:text-3xl font-bold text-primary">Lihat Paket Lainnya</h2>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 sm:gap-6">
                @foreach ($paketsLain as $paketLain)
                    <div class="group bg-white rounded-xl shadow-lg overflow-hidden flex flex-col hover:shadow-2xl transition-all duration-300">
                        <a href="{{ route('paket-wisata.detail', $paketLain->slug) }}" class="block overflow-hidden">
                            <img src="{{ asset('storage/' . $paketLain->gambar) }}" alt="{{ $paketLain->nama }}" class="w-full aspect-square object-cover transition-transform duration-300 group-hover:scale-110">
                        </a>
                        <div class="p-4 flex-grow flex flex-col">
                            <h3 class="font-serif text-base md:text-lg font-bold text-primary mb-2 flex-grow">
                                <a href="{{ route('paket-wisata.detail', $paketLain->slug) }}" class="hover:text-accent transition-colors duration-300">
                                    {{ $paketLain->nama }}
                                </a>
                            </h3>
                            <div class="mt-auto">
                                <div class="opacity-0 -translate-y-2 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300">
                                    <span class="block w-full text-center text-primary font-bold text-xs md:text-sm">
                                        Lihat Detail &rarr;
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

@endsection