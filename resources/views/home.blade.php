@extends('layouts.app')

@section('title', 'Selamat Datang di Kampung Tahu')

@section('content')
    {{-- ========= HERO SECTION START ========= --}}
    <section class="relative h-screen bg-cover bg-center flex items-center justify-center pt-20"
        style="background-image: url('/images/hero.jpg');">

        {{-- Overlay Gelap Lebih Halus --}}
        <div class="absolute inset-0 bg-primary opacity-60"></div>

        {{-- Konten Teks --}}
        <div class="relative z-10 text-center text-white px-6 max-w-4xl mx-auto">
            <h1 class="text-4xl md:text-6xl font-serif font-bold leading-tight mb-4 drop-shadow-lg">
                Jelajahi Kelezatan Autentik <br> dari <span class="text-accent">Kampung Tahu</span>
            </h1>
            <p class="text-lg md:text-xl mb-8 font-light leading-relaxed">
                Warisan rasa yang terjaga, diolah dengan cinta dan tradisi. Temukan tahu berkualitas premium kami.
            </p>
            <a href="#produk"
                class="group inline-flex items-center justify-center bg-gradient-to-r from-accent to-yellow-500 hover:from-yellow-500 hover:to-accent text-primary font-bold py-3 px-8 rounded-full text-lg shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">

                <span>Lihat Produk Kami</span>

            </a>
        </div>
    </section>
    {{-- ========= HERO SECTION END ========= --}}

    {{-- ========= TENTANG KAMI SECTION START ========= --}}
    <section id="tentang" class="py-16 sm:py-20 bg-background">
        <div class="container mx-auto px-6 lg:px-12">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

                {{-- Kolom Gambar --}}
                <div class="w-full">
                    <img src="{{ asset('images/tentang-kami.jpg') }}" alt="Tentang Kampung Tahu"
                        class="rounded-xl shadow-lg w-full h-auto object-cover aspect-square">
                </div>

                {{-- Kolom Teks --}}
                <div class="text-center lg:text-left">
                    <h2 class="font-serif text-3xl sm:text-4xl font-bold text-primary mb-4">
                        Warisan Rasa, Generasi ke Generasi
                    </h2>
                    <p class="text-text-dark opacity-80 leading-relaxed mb-6">
                        Kampung Tahu lebih dari sekadar tempat produksi; ini adalah rumah bagi tradisi dan komunitas. Sejak
                        puluhan tahun lalu, kami mendedikasikan diri untuk menghasilkan tahu berkualitas terbaik dengan
                        resep autentik yang diwariskan dari para pendahulu kami.
                    </p>
                    <p class="text-text-dark opacity-80 leading-relaxed mb-8">
                        Setiap gigitan adalah cerita tentang dedikasi, bahan baku pilihan, dan kehangatan sebuah keluarga
                        besar.
                    </p>
                    <a href="/tentang"
                        class="inline-block border-2 border-primary text-primary font-bold py-3 px-8 rounded-full text-lg hover:bg-primary hover:text-white transition-all duration-300">
                        Baca Cerita Kami
                    </a>
                </div>

            </div>
        </div>
    </section>
    {{-- ========= TENTANG KAMI SECTION END ========= --}}

    {{-- ========= PRODUK UNGGULAN SECTION START ========= --}}
    <section id="produk" class="py-16 sm:py-20 bg-white"> {{-- Latar diubah agar kontras --}}
        <div class="container mx-auto px-6 lg:px-12">
            {{-- Judul Section --}}
            <div class="text-center mb-12">
                <h2 class="font-serif text-3xl sm:text-4xl font-bold text-primary">Produk Unggulan Kami</h2>
                <p class="mt-2 text-lg text-text-light">Dibuat dari bahan-bahan pilihan dengan resep warisan.</p>
            </div>

            {{-- Grid untuk Kartu Produk --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                @forelse ($produks as $produk)
                    {{-- Kartu Produk (Desain Baru disamakan dengan Paket Wisata) --}}
                    <div
                        class="group bg-background rounded-xl shadow-lg overflow-hidden flex flex-col transform hover:-translate-y-2 transition-transform duration-300">
                        <div class="relative">
                            <img src="{{ asset('storage/' . $produk->gambar) }}" alt="{{ $produk->nama }}"
                                class="w-full h-56 object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                            <h3 class="absolute bottom-0 left-0 p-5 font-serif text-2xl font-bold text-white">
                                {{ $produk->nama }}
                            </h3>
                        </div>
                        <div class="p-6 flex-grow flex flex-col">
                            <p class="text-text-dark opacity-80 text-sm leading-relaxed mb-6 flex-grow min-h-[80px]">
                                {{ \Illuminate\Support\Str::limit($produk->deskripsi, 120) }}
                            </p>
                            <a href="https://api.whatsapp.com/send?phone={{ config('app.wa_phone_number') }}&text=Halo,%20saya%20tertarik%20dengan%20produk%20'{{ urlencode($produk->nama) }}'"
                                target="_blank"
                                class="inline-block w-full mt-4 text-center bg-primary hover:bg-opacity-90 text-white font-bold py-3 px-8 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
                                Pesan via WhatsApp
                            </a>
                        </div>
                    </div>
                @empty
                    <p class="col-span-3 text-center text-text-light">Saat ini belum ada produk untuk ditampilkan.</p>
                @endforelse

            </div>

            {{-- Tombol Lihat Selengkapnya --}}
            <div class="text-center mt-12">
                <a href="/produk" class="font-semibold text-primary hover:text-accent transition-colors text-lg">
                    Lihat Semua Produk &rarr;
                </a>
            </div>
        </div>
    </section>
    {{-- ========= PRODUK UNGGULAN SECTION END ========= --}}

    {{-- ========= PAKET WISATA SECTION START ========= --}}
    <section id="paket-wisata" class="py-16 sm:py-20 bg-background">
        <div class="container mx-auto px-6 lg:px-12">
            {{-- Judul Section --}}
            <div class="text-center mb-12">
                <h2 class="font-serif text-3xl sm:text-4xl font-bold text-primary">Jelajahi Kampung Tahu</h2>
                <p class="mt-2 text-lg text-text-light">Pengalaman edukatif dan menyenangkan untuk semua kalangan.</p>
            </div>

            {{-- Grid untuk Kartu Paket Wisata --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                @forelse ($paket_wisatas as $paket)
                    {{-- Kartu Paket Wisata --}}
                    <div
                        class="group bg-white rounded-xl shadow-lg overflow-hidden flex flex-col transform hover:-translate-y-2 transition-transform duration-300">
                        <div class="relative">
                            <img src="{{ asset('storage/' . $paket->gambar) }}" alt="{{ $paket->nama }}"
                                class="w-full h-56 object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                            <h3 class="absolute bottom-0 left-0 p-5 font-serif text-2xl font-bold text-white">
                                {{ $paket->nama }}
                            </h3>
                        </div>
                        <div class="p-6 flex-grow flex flex-col">
                            {{-- Deskripsi dari Rich Editor --}}
                            <div class="prose prose-sm text-text-dark opacity-80 mb-6 flex-grow">
                                {!! $paket->deskripsi !!}
                            </div>
                            <a href="https://api.whatsapp.com/send?phone={{ config('app.wa_phone_number') }}&text=Halo,%20saya%20tertarik%20dengan%20Paket%20Wisata%20'{{ urlencode($paket->nama) }}'"
                                target="_blank"
                                class="inline-block w-full mt-4 text-center bg-accent hover:bg-yellow-600 text-primary font-bold py-3 px-8 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
                                Pesan Tur Ini
                            </a>
                        </div>
                    </div>
                @empty
                    <p class="col-span-3 text-center text-text-light">Saat ini belum ada paket wisata untuk ditampilkan.</p>
                @endforelse

            </div>

            {{-- Tombol Lihat Selengkapnya --}}
            <div class="text-center mt-12">
                <a href="/paket-wisata" class="font-semibold text-primary hover:text-accent transition-colors text-lg">
                    Lihat Semua Paket Wisata &rarr;
                </a>
            </div>
        </div>
    </section>
    {{-- ========= PAKET WISATA SECTION END ========= --}}

    {{-- ========= PENGURUS SECTION START ========= --}}
<section id="pengurus" class="py-20 lg:py-24 bg-white">
    <div class="container mx-auto px-6 lg:px-8">
        {{-- Judul Section --}}
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="font-serif text-3xl md:text-4xl font-bold text-primary">Tim Kami</h2>
            <p class="mt-4 text-lg text-text-dark opacity-70">
                Kenali orang-orang berdedikasi di balik kualitas dan cita rasa produk Kampung Tahu.
            </p>
        </div>

        {{-- Grid untuk Kartu Pengurus --}}
        {{-- Menampilkan maksimal 3 pengurus sesuai controller --}}
        <div class="grid grid-cols-2 sm:grid-cols-3 gap-8 lg:max-w-4xl lg:mx-auto">

            @forelse ($pengurus as $p)
                {{-- Kartu Pengurus yang bisa diklik --}}
                <a href="{{ route('pengurus.detail', $p->slug) }}" class="group block text-center">
                    {{-- Gambar --}}
                    <div class="relative w-full max-w-[200px] aspect-square mx-auto overflow-hidden rounded-full shadow-lg transform group-hover:scale-105 transition-transform duration-300">
                        <img src="{{ asset('storage/' . $p->gambar) }}" alt="{{ $p->nama }}" class="w-full h-full object-cover object-top">
                    </div>
                    {{-- Nama & Jabatan --}}
                    <div class="mt-4">
                        <h3 class="font-serif text-xl font-bold text-primary group-hover:text-accent transition-colors duration-300">
                            {{ $p->nama }}
                        </h3>
                        <p class="text-text-dark opacity-70 text-sm mt-1">{{ $p->jabatan }}</p>
                    </div>
                </a>
            @empty
                <p class="col-span-3 text-center text-text-light">Saat ini belum ada data tim untuk ditampilkan.</p>
            @endforelse
            
        </div>

        {{-- Tombol Lihat Selengkapnya --}}
        <div class="text-center mt-16">
            <a href="{{ route('pengurus') }}" class="font-semibold text-primary hover:text-accent transition-colors text-lg group">
                Lihat Seluruh Tim <span class="transition-transform duration-300 group-hover:ml-2">&rarr;</span>
            </a>
        </div>
    </div>
</section>
{{-- ========= PENGURUS SECTION END ========= --}}

    {{-- ========= BERITA TERBARU SECTION START ========= --}}
    <section id="berita-slider-container" class="relative w-full h-screen group">

        <div class="absolute top-0 left-0 z-20 p-8 md:p-12">
            <h2 class="font-serif text-white text-2xl font-semibold tracking-wider border-b-2 border-accent pb-2">
                Berita Terbaru
            </h2>
        </div>
        <div class="swiper berita-slider-fullscreen h-full">
            <div class="swiper-wrapper">

                @forelse ($beritas as $berita)
                    <div class="swiper-slide">
                        <a href="/berita/{{ $berita->slug }}" class="absolute inset-0 w-full h-full">
                            <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                                style="background-image: url('{{ asset('storage/' . $berita->thumbnail) }}');">
                            </div>
                            <div
                                class="absolute inset-0 bg-primary/60 group-hover:bg-primary/70 transition-colors duration-300">
                            </div>

                            <div class="relative z-10 p-8 md:p-12 w-full h-full flex flex-col justify-end text-white">
                                <div>
                                    <h2
                                        class="font-serif text-3xl md:text-5xl font-bold leading-tight mb-4 hover:text-accent transition-colors duration-300">
                                        {{ \Illuminate\Support\Str::limit($berita->judul, 60) }}
                                    </h2>

                                    <p class="hidden md:block max-w-2xl text-lg leading-relaxed opacity-90 mb-6">
                                        {{ \Illuminate\Support\Str::limit(strip_tags($berita->isi), 150) }}
                                    </p>

                                    {{-- POSISI TANGGAL DIPINDAHKAN KE SINI --}}
                                    @if ($berita->createdAt)
                                        <p class="text-sm opacity-80 mb-6">
                                            Diunggah pada {{ $berita->createdAt->format('d F Y') }}
                                        </p>
                                    @endif

                                    <span
                                        class="inline-block bg-accent text-primary font-bold py-3 px-8 rounded-full text-lg shadow-lg transition-all duration-300 transform hover:scale-105">
                                        Baca Selengkapnya
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                @empty
                    <div class="swiper-slide relative bg-gray-700 text-white flex items-center justify-center">
                        <p class="text-2xl">Saat ini belum ada berita untuk ditampilkan.</p>
                    </div>
                @endforelse

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    {{-- ========= BERITA TERBARU SECTION END ========= --}}

    {{-- Kode JavaScript dan Style (TETAP SAMA) --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const swiper = new Swiper('.berita-slider-fullscreen', {
                effect: 'fade',
                loop: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        });
    </script>
    <style>
        #berita-slider-container .swiper-button-next,
        #berita-slider-container .swiper-button-prev {
            color: white;
            opacity: 0.5;
            transition: opacity 0.3s ease;
            --swiper-navigation-size: 32px;
        }

        #berita-slider-container:hover .swiper-button-next,
        #berita-slider-container:hover .swiper-button-prev {
            opacity: 1;
        }

        .swiper-pagination-bullet {
            background: rgba(255, 255, 255, 0.5);
            width: 12px;
            height: 12px;
            opacity: 1;
        }

        .swiper-pagination-bullet-active {
            background: var(--tw-color-accent);
        }
    </style>

@endsection
