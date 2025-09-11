@extends('layouts.app')

@section('title', 'Selamat Datang di Kampung Tahu')

@section('content')

    {{-- ========= HERO SECTION START ========= --}}
    <section class="relative pt-24 overflow-hidden bg-gradient-to-br from-secondary/40 via-white to-secondary/40">
        {{-- Pola SVG di Latar Belakang --}}
        <div class="absolute inset-x-0 bottom-0 text-primary/10 opacity-40 z-0">
            <svg viewBox="0 0 1440 320" xmlns="http://www.w3.org/2000/svg">
                <path fill="currentColor" fill-opacity="1"
                    d="M0,160L48,160C96,160,192,160,288,170.7C384,181,480,203,576,208C672,213,768,203,864,176C960,149,1056,107,1152,101.3C1248,96,1344,128,1392,144L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                </path>
            </svg>
        </div>

        <div class="container relative z-10 max-w-7xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
            <div class="grid items-center grid-cols-1 gap-12 lg:grid-cols-2">
                {{-- Kolom Teks Hero --}}
                <div class="text-center lg:text-left">
                    <h1 class="font-serif text-4xl font-extrabold leading-tight sm:text-5xl lg:text-6xl text-primary">
                        Kelezatan Autentik, <span class="text-accent">dari Kampung Tahu.</span>
                    </h1>
                    <p class="max-w-xl mx-auto mt-6 text-base opacity-90 sm:text-lg text-text-dark lg:mx-0">
                        Website Kampung Tahu Binjai. Temukan warisan rasa yang terjaga dalam setiap potongan tahu premium
                        kami, diolah dengan cinta dan tradisi turun-temurun.
                    </p>
                    <div class="flex flex-col gap-4 mt-10 sm:flex-row justify-center lg:justify-start">
                        <a href="#produk"
                            class="inline-block text-center bg-primary text-white font-bold py-3 px-8 rounded-full text-base sm:text-lg shadow-lg hover:bg-opacity-90 transition-transform transform hover:scale-105 duration-300">
                            Lihat Produk
                        </a>
                        <a href="/tentang"
                            class="inline-block text-center bg-white border-2 border-primary text-primary font-bold py-3 px-8 rounded-full text-base sm:text-lg hover:bg-primary hover:text-white transition-all duration-300">
                            Cerita Kami
                        </a>
                    </div>
                </div>

                {{-- Kolom Video YouTube (Class order-first dan lg:order-last dihapus) --}}
                <div class="relative flex items-center justify-center">
                    {{-- Bentuk dekoratif di belakang video --}}
                    <div class="absolute w-full max-w-md transform rotate-6 bg-accent/60 rounded-3xl aspect-video"></div>

                    {{-- Wrapper untuk video responsif --}}
                    <div class="relative z-10 w-full max-w-md overflow-hidden shadow-2xl rounded-2xl aspect-video">
                        {{-- GANTI DENGAN KODE EMBED YOUTUBE ANDA --}}
                        <iframe class="absolute top-0 left-0 w-full h-full"
                            src="https://www.youtube.com/embed/Z1xeGvEWuLo?si=FwR3vOjem9k1h3Qw" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- ========= HERO SECTION END ========= --}}


    {{-- ========= PRODUK UNGGULAN SECTION START ========= --}}
    <section id="produk" class="relative py-16 overflow-hidden bg-white lg:py-24">
        <div class="container relative z-10 max-w-7xl px-4 mx-auto sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto mb-12 text-center lg:mb-16">
                <h2 class="font-serif text-3xl font-bold md:text-4xl text-primary">Produk Unggulan Kami</h2>
                <p class="mt-4 text-base sm:text-lg opacity-70 text-text-dark">Setiap produk dibuat dengan bahan-bahan
                    pilihan dan sentuhan resep warisan yang melegenda.</p>
            </div>

            <div class="grid grid-cols-2 gap-4 md:grid-cols-2 lg:grid-cols-3 md:gap-8">
                @forelse ($produks as $produk)
                    <div
                        class="flex flex-col overflow-hidden transition-all duration-300 transform bg-secondary/20 border border-secondary/30 rounded-xl shadow-lg group hover:shadow-2xl hover:-translate-y-2">
                        <a href="{{ route('produk.detail', $produk->slug) }}" class="block overflow-hidden">
                            <img src="{{ asset('storage/' . $produk->gambar) }}" alt="{{ $produk->nama }}"
                                class="object-cover w-full transition-transform duration-300 aspect-square group-hover:scale-110">
                        </a>
                        <div class="flex flex-col flex-grow p-4 md:p-6">
                            <h3 class="font-serif text-xl font-bold md:text-2xl text-primary">{{ $produk->nama }}</h3>
                            <p class="flex-grow mt-3 text-xs leading-relaxed sm:text-sm opacity-80 text-text-dark">
                                {{ \Illuminate\Support\Str::limit($produk->deskripsi, 80) }}
                            </p>
                            <div class="mt-6">
                                <a href="https://api.whatsapp.com/send?phone={{ config('app.wa_phone_number') }}&text=Halo,%20saya%20tertarik%20dengan%20produk%20'{{ urlencode($produk->nama) }}'"
                                    target="_blank"
                                    class="inline-flex items-center justify-center w-full gap-2 px-4 py-3 text-xs font-bold text-white transition-all duration-300 transform rounded-lg shadow-md sm:text-sm bg-gradient-to-r from-green-500 to-teal-500 hover:shadow-xl hover:scale-105">
                                    <svg class="hidden w-5 h-5 sm:inline" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.894 11.892-1.99 0-3.903-.52-5.586-1.457l-6.162 1.688a.625.625 0 01-.761-.761z" />
                                    </svg>
                                    <span>Pesan WA</span>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-center col-span-full text-text-light">Saat ini belum ada produk untuk ditampilkan.</p>
                @endforelse
            </div>

            <div class="mt-16 text-center">
                <a href="{{ route('produk') }}"
                    class="inline-block text-base font-semibold transition-colors sm:text-lg text-primary hover:text-accent group">
                    Lihat Semua Produk <span class="transition-transform duration-300 group-hover:ml-2">&rarr;</span>
                </a>
            </div>
        </div>
    </section>
    {{-- ========= PRODUK UNGGULAN SECTION END ========= --}}


    {{-- ========= PAKET WISATA SECTION START ========= --}}
    <section id="paket-wisata"
        class="relative py-16 overflow-hidden bg-gradient-to-br from-primary/30 via-green-50/40 to-primary/30 lg:py-24">
        <div class="container relative z-10 max-w-7xl px-4 mx-auto sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto mb-12 text-center lg:mb-16">
                <h2 class="font-serif text-3xl font-bold md:text-4xl text-primary">Jelajahi Kampung Tahu</h2>
                <p class="mt-4 text-base sm:text-lg opacity-70 text-text-dark">Rasakan pengalaman edukatif dan menyenangkan
                    melihat langsung proses pembuatan tahu tradisional.</p>
            </div>

            <div class="grid grid-cols-2 gap-4 md:grid-cols-2 lg:grid-cols-3 md:gap-8">
                @forelse ($paket_wisatas as $paket)
                    <div
                        class="flex flex-col overflow-hidden transition-all duration-300 transform bg-white border border-gray-200 rounded-xl shadow-lg group hover:shadow-2xl hover:-translate-y-2">
                        <a href="{{ route('paket-wisata.detail', $paket->slug) }}" class="block overflow-hidden">
                            <img src="{{ asset('storage/' . $paket->gambar) }}" alt="{{ $paket->nama }}"
                                class="object-cover w-full transition-transform duration-300 aspect-square group-hover:scale-110">
                        </a>
                        <div class="flex flex-col flex-grow p-4 md:p-6">
                            <h3 class="font-serif text-xl font-bold md:text-2xl text-primary">{{ $paket->nama }}</h3>
                            <div class="flex-grow mt-3 prose-sm opacity-80 text-text-dark text-xs sm:text-sm">
                                {!! \Illuminate\Support\Str::limit($paket->deskripsi, 80) !!}
                            </div>
                            <div class="mt-6">
                                <a href="https://api.whatsapp.com/send?phone={{ config('app.wa_phone_number') }}&text=Halo,%20saya%20tertarik%20dengan%20Paket%20Wisata%20'{{ urlencode($paket->nama) }}'"
                                    target="_blank"
                                    class="inline-block w-full px-4 py-3 text-xs font-bold text-center text-primary transition-all duration-300 transform sm:text-sm bg-accent rounded-lg shadow-md hover:bg-yellow-500 hover:shadow-xl hover:scale-105">
                                    Pesan Tur Ini
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-center col-span-full text-text-light">Saat ini belum ada paket wisata untuk ditampilkan.
                    </p>
                @endforelse
            </div>

            <div class="mt-16 text-center">
                <a href="{{ route('paket-wisata') }}"
                    class="inline-block text-base font-semibold transition-colors sm:text-lg text-primary hover:text-accent group">
                    Lihat Semua Paket Wisata <span class="transition-transform duration-300 group-hover:ml-2">&rarr;</span>
                </a>
            </div>
        </div>
    </section>
    {{-- ========= PAKET WISATA SECTION END ========= --}}


    {{-- ========= PENGURUS SECTION START ========= --}}
    <section id="pengurus" class="py-16 bg-white lg:py-24">
        <div class="container max-w-7xl px-4 mx-auto sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto mb-12 text-center lg:mb-16">
                <h2 class="font-serif text-3xl font-bold md:text-4xl text-primary">Tim Kami</h2>
                <p class="mt-4 text-base sm:text-lg opacity-70 text-text-dark">
                    Kenali orang-orang berdedikasi di balik kualitas dan cita rasa produk Kampung Tahu.
                </p>
            </div>

            <div class="grid grid-cols-2 gap-6 sm:grid-cols-3 sm:gap-8 lg:max-w-4xl lg:mx-auto">
                @forelse ($pengurus as $p)
                    <a href="{{ route('pengurus.detail', $p->slug) }}" class="block text-center group">
                        <div
                            class="relative w-full max-w-[150px] sm:max-w-[200px] aspect-square mx-auto overflow-hidden rounded-full shadow-lg transform group-hover:scale-105 transition-transform duration-300">
                            <img src="{{ asset('storage/' . $p->gambar) }}" alt="{{ $p->nama }}"
                                class="object-cover object-top w-full h-full">
                        </div>
                        <div class="mt-4">
                            <h3
                                class="font-serif text-lg font-bold sm:text-xl transition-colors duration-300 text-primary group-hover:text-accent">
                                {{ $p->nama }}
                            </h3>
                            <p class="mt-1 text-sm opacity-70 text-text-dark">{{ $p->jabatan }}</p>
                        </div>
                    </a>
                @empty
                    <p class="col-span-full text-center text-text-light">Saat ini belum ada data tim untuk ditampilkan.</p>
                @endforelse
            </div>

            <div class="mt-16 text-center">
                <a href="{{ route('pengurus') }}"
                    class="inline-block text-base font-semibold transition-colors sm:text-lg text-primary hover:text-accent group">
                    Lihat Seluruh Tim <span class="transition-transform duration-300 group-hover:ml-2">&rarr;</span>
                </a>
            </div>
        </div>
    </section>
    {{-- ========= PENGURUS SECTION END ========= --}}


    {{-- ========= BERITA TERBARU SECTION START ========= --}}
    <section id="berita"
        class="relative py-16 overflow-hidden bg-gradient-to-tl from-secondary/40 via-white to-secondary/40 lg:py-24">
        <div class="container relative z-10 max-w-7xl px-4 mx-auto sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto mb-12 text-center lg:mb-16">
                <h2 class="font-serif text-3xl font-bold md:text-4xl text-primary">Kabar Terbaru dari Kami</h2>
                <p class="mt-4 text-base sm:text-lg opacity-70 text-text-dark">Ikuti terus informasi, kegiatan, dan cerita
                    menarik seputar Kampung Tahu.</p>
            </div>

            <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
                @if ($beritas->isNotEmpty())
                    <a href="{{ route('berita.detail', $beritas->first()->slug) }}"
                        class="block col-span-1 lg:col-span-2 overflow-hidden transition-all duration-300 bg-white/60 backdrop-blur-sm rounded-xl shadow-lg group hover:shadow-2xl hover:-translate-y-2">
                        <img src="{{ asset('storage/' . $beritas->first()->thumbnail) }}"
                            alt="{{ $beritas->first()->judul }}"
                            class="object-cover w-full transition-transform duration-300 aspect-video group-hover:scale-105">
                        <div class="p-6">
                            @if ($beritas->first()->created_at)
                                <p class="mb-2 text-sm opacity-60 text-text-dark">
                                    {{ $beritas->first()->created_at->format('d F Y') }}</p>
                            @endif
                            <h3 class="font-serif text-xl font-bold sm:text-2xl text-primary group-hover:text-accent">
                                {{ \Illuminate\Support\Str::limit($beritas->first()->judul, 60) }}</h3>
                            <p class="mt-3 text-sm leading-relaxed opacity-80 text-text-dark">
                                {{ \Illuminate\Support\Str::limit(strip_tags($beritas->first()->isi), 150) }}
                            </p>
                        </div>
                    </a>

                    <div class="col-span-1 space-y-8">
                        @foreach ($beritas->skip(1)->take(2) as $berita)
                            <a href="{{ route('berita.detail', $berita->slug) }}"
                                class="block overflow-hidden transition-all duration-300 bg-white/60 backdrop-blur-sm rounded-xl shadow-lg group hover:shadow-xl hover:-translate-y-1">
                                <img src="{{ asset('storage/' . $berita->thumbnail) }}" alt="{{ $berita->judul }}"
                                    class="object-cover w-full transition-transform duration-300 aspect-video group-hover:scale-105">
                                <div class="p-5">
                                    @if ($berita->created_at)
                                        <p class="mb-1 text-xs opacity-60 text-text-dark">
                                            {{ $berita->created_at->format('d F Y') }}</p>
                                    @endif
                                    <h4 class="font-serif font-bold leading-tight text-primary group-hover:text-accent">
                                        {{ \Illuminate\Support\Str::limit($berita->judul, 50) }}
                                    </h4>
                                </div>
                            </a>
                        @endforeach
                    </div>
                @else
                    <p class="text-center col-span-full text-text-light">Saat ini belum ada berita untuk ditampilkan.</p>
                @endif
            </div>
            <div class="mt-16 text-center">
                <a href="{{ route('berita') }}"
                    class="inline-block text-base font-semibold transition-colors sm:text-lg text-primary hover:text-accent group">
                    Lihat Semua Berita <span class="transition-transform duration-300 group-hover:ml-2">&rarr;</span>
                </a>
            </div>
        </div>
    </section>
    {{-- ========= BERITA TERBARU SECTION END ========= --}}

@endsection
