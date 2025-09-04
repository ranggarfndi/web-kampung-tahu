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
    <section id="pengurus" class="py-16 sm:py-20 bg-white">
        <div class="container mx-auto px-6 lg:px-12">
            {{-- Judul Section --}}
            <div class="text-center mb-12">
                <h2 class="font-serif text-3xl sm:text-4xl font-bold text-primary">Tim Kami</h2>
                <p class="mt-2 text-lg text-text-light">Orang-orang di balik kualitas dan cita rasa Kampung Tahu.</p>
            </div>

            {{-- Grid untuk Kartu Pengurus --}}
            <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-8">

                @forelse ($pengurus as $p)
                    {{-- Kartu Pengurus --}}
                    <div
                        class="bg-background rounded-t-full rounded-b-2xl shadow-lg text-center overflow-hidden transform hover:-translate-y-2 transition-transform duration-300">
                        <img src="{{ asset('storage/' . $p->gambar) }}" alt="{{ $p->nama }}"
                            class="w-full h-80 object-cover object-top">
                        <div class="p-6">
                            <h3 class="font-serif text-2xl font-semibold text-primary">
                                {{ $p->nama }}
                            </h3>

                            {{-- Ikon Sosial Media --}}
                            <div class="flex justify-center space-x-4 mt-4">
                                @if ($p->instagram)
                                    <a href="{{ $p->instagram }}" target="_blank" aria-label="Instagram"
                                        class="text-text-light hover:text-primary transition-colors">
                                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.69 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.204-.012 3.584-.069 4.85c-.148 3.252-1.691 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.85-.069-3.252-.148-4.771-1.69-4.919-4.919-.058-1.265-.07-1.644-.07-4.85 0-3.204.012-3.584.069-4.849.149-3.252 1.668-4.771 4.919-4.919 1.266-.058 1.645-.07 4.85-.07zm0-2.163c-3.259 0-3.667.014-4.947.072-4.435.201-6.737 2.407-6.938 6.843-.058 1.28-.07 1.688-.07 4.948 0 3.26.014 3.667.072 4.947.201 4.435 2.407 6.737 6.843 6.938 1.28.058 1.688.07 4.948.07 3.259 0 3.667-.014 4.947-.072 4.435-.201 6.737-2.407 6.938-6.843.058-1.28.07-1.688.07-4.948 0-3.259-.014-3.667-.072-4.947-.201-4.435-2.407-6.737-6.843-6.938-1.28-.058-1.688-.07-4.948-.07z M12 8.138c-2.136 0-3.862 1.726-3.862 3.862s1.726 3.862 3.862 3.862 3.862-1.726 3.862-3.862-1.726-3.862-3.862-3.862zm0 6.162c-1.269 0-2.3-1.031-2.3-2.3s1.031-2.3 2.3-2.3 2.3 1.031 2.3 2.3-1.031 2.3-2.3 2.3zm4.87-6.726c-.53 0-.96.43-.96.96s.43.96.96.96.96-.43.96-.96-.43-.96-.96-.96z" />
                                        </svg>
                                    </a>
                                @endif
                                @if ($p->no_hp)
                                    <a href="https://wa.me/{{ $p->no_hp }}" target="_blank" aria-label="WhatsApp"
                                        class="text-text-light hover:text-primary transition-colors">
                                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.894 11.892-1.99 0-3.903-.52-5.586-1.457l-6.162 1.688a.625.625 0 01-.761-.761M6.512 17.585c1.584 1.041 3.457 1.621 5.432 1.621 5.448 0 9.89-4.442 9.891-9.891-.001-5.448-4.442-9.89-9.89-9.89-5.449 0-9.891 4.442-9.891 9.891 0 2.05.579 3.998 1.619 5.669l-1.053 3.85h3.85a.625.625 0 01.595.741" />
                                        </svg>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="col-span-3 text-center text-text-light">Saat ini belum ada data pengurus untuk ditampilkan.
                    </p>
                @endforelse
            </div>

            {{-- Tombol Lihat Selengkapnya --}}
            <div class="text-center mt-12">
                <a href="/pengurus" class="font-semibold text-primary hover:text-accent transition-colors text-lg">
                    Lihat Seluruh Tim &rarr;
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
