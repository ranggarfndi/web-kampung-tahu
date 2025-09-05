@extends('layouts.app')

@section('title', 'Selamat Datang di Kampung Tahu')

@section('content')

    {{-- ========= HERO SECTION START ========= --}}
    <section class="pt-24 bg-gray-50">
        {{-- max-w-7xl ditambahkan di sini --}}
        <div class="container max-w-7xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
            <div class="grid items-center grid-cols-1 gap-12 lg:grid-cols-2">
                {{-- Kolom Teks Hero --}}
                <div class="text-center lg:text-left">
                    <h1 class="font-serif text-4xl font-extrabold leading-tight sm:text-5xl lg:text-6xl text-primary">
                        Kelezatan Autentik, <span class="text-accent">dari Kampung Tahu.</span>
                    </h1>
                    <p class="max-w-xl mx-auto mt-6 text-base opacity-70 sm:text-lg text-text-dark lg:mx-0">
                        Temukan warisan rasa yang terjaga dalam setiap potongan tahu premium kami, diolah dengan cinta dan
                        tradisi turun-temurun.
                    </p>
                    <div class="flex flex-col gap-4 mt-10 sm:flex-row justify-center lg:justify-start">
                        <a href="#produk"
                            class="inline-block text-center bg-primary text-white font-bold py-3 px-8 rounded-full text-base sm:text-lg shadow-lg hover:bg-opacity-90 transition-transform transform hover:scale-105 duration-300">
                            Lihat Produk
                        </a>
                        <a href="/tentang"
                            class="inline-block text-center border-2 border-primary text-primary font-bold py-3 px-8 rounded-full text-base sm:text-lg hover:bg-primary hover:text-white transition-all duration-300">
                            Cerita Kami
                        </a>
                    </div>
                </div>
                {{-- Kolom Gambar Hero --}}
                <div class="relative flex items-center justify-center order-first lg:order-last">
                    <div class="absolute w-4/5 h-4/5 transform rotate-6 bg-accent/20 rounded-3xl"></div>
                    <img src="{{ asset('images/hero.jpg') }}" alt="Produk Unggulan Kampung Tahu"
                        class="relative z-10 w-full max-w-md shadow-2xl rounded-3xl">
                </div>
            </div>
        </div>
    </section>
    {{-- ========= HERO SECTION END ========= --}}


    {{-- ========= PRODUK UNGGULAN SECTION START ========= --}}
    <section id="produk" class="py-16 bg-white lg:py-24">
        {{-- max-w-7xl ditambahkan di sini --}}
        <div class="container max-w-7xl px-4 mx-auto sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto mb-12 text-center lg:mb-16">
                <h2 class="font-serif text-3xl font-bold md:text-4xl text-primary">Produk Unggulan Kami</h2>
                <p class="mt-4 text-base sm:text-lg opacity-70 text-text-dark">Setiap produk dibuat dengan bahan-bahan
                    pilihan dan sentuhan resep warisan yang melegenda.</p>
            </div>

            <div class="grid grid-cols-2 gap-4 md:grid-cols-2 lg:grid-cols-3 md:gap-8">
                @forelse ($produks as $produk)
                    <div
                        class="flex flex-col overflow-hidden transition-all duration-300 transform bg-white border border-gray-100 rounded-xl shadow-lg group hover:shadow-2xl hover:-translate-y-2">
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
    <section id="paket-wisata" class="py-16 bg-gray-50 lg:py-24">
        {{-- max-w-7xl ditambahkan di sini --}}
        <div class="container max-w-7xl px-4 mx-auto sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto mb-12 text-center lg:mb-16">
                <h2 class="font-serif text-3xl font-bold md:text-4xl text-primary">Jelajahi Kampung Tahu</h2>
                <p class="mt-4 text-base sm:text-lg opacity-70 text-text-dark">Rasakan pengalaman edukatif dan menyenangkan
                    melihat langsung proses pembuatan tahu tradisional.</p>
            </div>

            <div class="grid grid-cols-2 gap-4 md:grid-cols-2 lg:grid-cols-3 md:gap-8">
                @forelse ($paket_wisatas as $paket)
                    <div
                        class="flex flex-col overflow-hidden transition-all duration-300 transform bg-white border border-gray-100 rounded-xl shadow-lg group hover:shadow-2xl hover:-translate-y-2">
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
        {{-- max-w-7xl ditambahkan di sini --}}
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
    <section id="berita" class="py-16 bg-gray-50 lg:py-24">
        {{-- max-w-7xl ditambahkan di sini --}}
        <div class="container max-w-7xl px-4 mx-auto sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto mb-12 text-center lg:mb-16">
                <h2 class="font-serif text-3xl font-bold md:text-4xl text-primary">Kabar Terbaru dari Kami</h2>
                <p class="mt-4 text-base sm:text-lg opacity-70 text-text-dark">Ikuti terus informasi, kegiatan, dan cerita
                    menarik seputar Kampung Tahu.</p>
            </div>

            <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
                @if ($beritas->isNotEmpty())
                    {{-- Berita Utama --}}
                    <a href="{{ route('berita.detail', $beritas->first()->slug) }}"
                        class="block col-span-1 lg:col-span-2 overflow-hidden transition-all duration-300 bg-white rounded-xl shadow-lg group hover:shadow-2xl hover:-translate-y-2">
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

                    {{-- Daftar Berita Lainnya (diubah agar responsif di tablet) --}}
                    <div class="col-span-1 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-1">
                        @foreach ($beritas->skip(1)->take(2) as $berita)
                            <a href="{{ route('berita.detail', $berita->slug) }}"
                                class="flex items-center gap-4 p-4 overflow-hidden transition-all duration-300 bg-white rounded-xl shadow-lg group hover:shadow-xl hover:-translate-y-1">
                                <img src="{{ asset('storage/' . $berita->thumbnail) }}" alt="{{ $berita->judul }}"
                                    class="object-cover w-1/3 rounded-lg aspect-square">
                                <div class="w-2/3">
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
