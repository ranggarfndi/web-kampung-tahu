@extends('layouts.app')

@section('title', $produk->nama . ' - Kampung Tahu')

@section('content')

    {{-- ========= KONTEN DETAIL PRODUK START ========= --}}
    <main class="relative pt-24 overflow-hidden bg-gradient-to-br from-secondary/20 via-white to-white">
        <div class="container max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-8 pb-16 lg:pb-20">
            {{-- Breadcrumbs --}}
            <nav class="text-sm mb-8" aria-label="Breadcrumb">
                <ol class="list-none p-0 inline-flex space-x-2">
                    <li class="flex items-center">
                        <a href="{{ url('/') }}" class="text-gray-500 hover:text-primary transition-colors">Home</a>
                    </li>
                    <li class="flex items-center">
                        <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                        <a href="{{ route('produk') }}"
                            class="text-gray-500 hover:text-primary transition-colors">Produk</a>
                    </li>
                    <li class="flex items-center">
                        <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="text-gray-800 font-semibold">{{ $produk->nama }}</span>
                    </li>
                </ol>
            </nav>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-start">
                {{-- Kolom Gambar Produk --}}
                <div class="lg:sticky lg:top-28">
                    <img src="{{ asset('storage/' . $produk->gambar) }}" alt="{{ $produk->nama }}"
                        class="w-full rounded-2xl shadow-xl aspect-square object-cover">
                </div>

                {{-- Kolom Informasi Produk --}}
                <div>
                    <h1 class="font-serif text-3xl md:text-4xl font-bold text-primary leading-tight mb-4">
                        {{ $produk->nama }}</h1>

                    <p class="text-base text-text-dark opacity-80 leading-relaxed mb-8">
                        {{ \Illuminate\Support\Str::limit($produk->deskripsi, 200) }}
                    </p>

                    <a href="https://api.whatsapp.com/send?phone={{ config('app.wa_phone_number') }}&text=Halo,%20saya%20tertarik%20untuk%20memesan%20produk%20'{{ urlencode($produk->nama) }}'"
                        target="_blank"
                        class="inline-flex items-center gap-3 w-full sm:w-auto justify-center bg-gradient-to-r from-green-500 to-teal-500 text-white font-bold py-3 px-6 rounded-lg text-base shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.894 11.892-1.99 0-3.903-.52-5.586-1.457l-6.162 1.688a.625.625 0 01-.761-.761z" />
                        </svg>
                        <span>Pesan via WhatsApp</span>
                    </a>

                    <hr class="my-8 border-gray-200">

                    <div class="space-y-6">
                        <div>
                            <h3 class="font-bold text-base text-primary mb-2 border-b-2 border-accent pb-2">Deskripsi
                                Lengkap</h3>
                            <div class="prose prose-sm max-w-none text-text-dark opacity-80 leading-relaxed">
                                <p>{{ $produk->deskripsi }}</p>
                            </div>
                        </div>
                        @if ($produk->bahan_bahan)
                            <div>
                                <h3 class="font-bold text-base text-primary mb-2 border-b-2 border-accent pb-2">Bahan-Bahan
                                </h3>
                                <div class="prose prose-sm max-w-none text-text-dark opacity-80 leading-relaxed">
                                    <p>{{ $produk->bahan_bahan }}</p>
                                </div>
                            </div>
                        @endif
                    </div>

                    <hr class="my-8 border-gray-200">

                    <div class="flex items-center gap-4">
                        <span class="font-semibold text-sm text-text-dark">Bagikan:</span>
                        <div class="flex gap-2">
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}" target="_blank"
                                class="text-gray-500 hover:text-blue-600 p-2 rounded-full bg-gray-100 hover:bg-gray-200 transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v2.385z" />
                                </svg>
                            </a>
                            <a href="https://api.whatsapp.com/send?text={{ urlencode($produk->nama . ' - ' . url()->current()) }}"
                                target="_blank"
                                class="text-gray-500 hover:text-green-500 p-2 rounded-full bg-gray-100 hover:bg-gray-200 transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.894 11.892-1.99 0-3.903-.52-5.586-1.457l-6.162 1.688a.625.625 0 01-.761-.761z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    {{-- ========= KONTEN DETAIL PRODUK END ========= --}}


    {{-- ========= PRODUK LAINNYA SECTION START ========= --}}
    @if ($produksLain->isNotEmpty())
        <section
            class="relative py-16 lg:py-20 bg-gradient-to-br from-primary/10 via-green-50/30 to-primary/10 overflow-hidden">
            {{-- Pola SVG --}}
            <div class="absolute top-0 right-0 text-accent/15 opacity-40 z-0 transform translate-x-1/3 -translate-y-1/4">
                <svg viewBox="0 0 1000 250" xmlns="http://www.w3.org/2000/svg">
                    <path fill="currentColor" fill-opacity="1"
                        d="M0,160L83,149.3C167,139,333,117,500,106.7C667,96,833,96,917,96L1000,96L1000,0L917,0C833,0,667,0,500,0C333,0,167,0,83,0L0,0Z">
                    </path>
                </svg>
            </div>
            <div class="container relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="mb-10">
                    <h2 class="font-serif text-2xl md:text-3xl font-bold text-primary">Anda Mungkin Juga Suka</h2>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 sm:gap-6">
                    @foreach ($produksLain as $produkLain)
                        <div
                            class="group bg-white rounded-xl shadow-lg overflow-hidden flex flex-col hover:shadow-2xl transition-all duration-300">
                            <a href="{{ route('produk.detail', $produkLain->slug) }}" class="block overflow-hidden">
                                <img src="{{ asset('storage/' . $produkLain->gambar) }}" alt="{{ $produkLain->nama }}"
                                    class="w-full aspect-square object-cover transition-transform duration-300 group-hover:scale-110">
                            </a>
                            <div class="p-4 flex-grow flex flex-col">
                                <h3 class="font-serif text-base md:text-lg font-bold text-primary mb-2 flex-grow">
                                    <a href="{{ route('produk.detail', $produkLain->slug) }}"
                                        class="hover:text-accent transition-colors duration-300">
                                        {{ $produkLain->nama }}
                                    </a>
                                </h3>
                                <div class="mt-auto">
                                    <div
                                        class="opacity-0 -translate-y-2 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300">
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
    {{-- ========= PRODUK LAINNYA SECTION END ========= --}}

@endsection
