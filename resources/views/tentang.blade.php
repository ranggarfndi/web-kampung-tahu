@extends('layouts.app')

@section('title', 'Tentang Kami - Kampung Tahu')

@section('content')

    {{-- ========= HERO SECTION START ========= --}}
    {{-- Menambahkan pt-24 untuk memberi ruang bagi navbar fixed --}}
    <section class="pt-24 bg-gray-50">
        <div class="container mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center py-16 lg:py-20">
                {{-- Kolom Teks Hero --}}
                <div class="text-center lg:text-left">
                    <h1 class="font-serif text-4xl md:text-5xl lg:text-6xl font-extrabold text-primary leading-tight">
                        Warisan Rasa, Dedikasi Tanpa Batas.
                    </h1>
                    <p class="mt-6 text-lg md:text-xl text-text-dark opacity-70 max-w-xl mx-auto lg:mx-0">
                        Selamat datang di Kampung Tahu, tempat tradisi pembuatan tahu terbaik bertemu dengan inovasi untuk
                        menciptakan cita rasa yang tak terlupakan.
                    </p>
                </div>
                {{-- Kolom Gambar Hero --}}
                <div class="relative flex justify-center items-center">
                    <div class="absolute w-4/5 h-4/5 bg-secondary rounded-3xl transform -rotate-6"></div>
                    <img src="{{ asset('images/tentang-banner.jpg') }}" alt="Produk Unggulan Kampung Tahu"
                        class="relative rounded-3xl shadow-2xl w-full max-w-md z-10">
                </div>
            </div>
        </div>
    </section>
    {{-- ========= HERO SECTION END ========= --}}

    {{-- ========= SEJARAH START ========= --}}
    <main class="py-20 lg:py-24 bg-white">
        <div class="container mx-auto px-6 lg:px-8">
            <div class="relative grid grid-cols-1 lg:grid-cols-5 gap-8 items-center">
                {{-- Kolom Gambar (3/5 bagian) --}}
                <div class="lg:col-span-3">
                    <img src="{{ asset('images/sejarah-image.jpg') }}" alt="Proses pembuatan tahu tradisional"
                        class="rounded-2xl shadow-xl w-full h-auto object-cover aspect-video">
                </div>
                {{-- Kolom Teks (2/5 bagian) dengan posisi tumpang tindih --}}
                <div class="lg:col-span-2 lg:-ml-16 z-10">
                    <div class="bg-white p-8 lg:p-10 rounded-2xl shadow-lg">
                        <h2 class="font-serif text-3xl md:text-4xl font-bold text-primary mb-5">Awal Mula Cerita Kami</h2>
                        <div class="space-y-4 text-text-dark opacity-80 leading-relaxed">
                            <p>
                                Lahir dari industri rumahan pada tahun 1980, Kampung Tahu adalah buah dari kerja keras dan
                                resep turun-temurun. Kami memulai dengan komitmen sederhana: menghasilkan tahu terbaik dari
                                kedelai pilihan.
                            </p>
                            <p>
                                Kini, kami telah berkembang menjadi sebuah komunitas pengrajin yang berdedikasi melestarikan
                                warisan kuliner sekaligus menjadi destinasi wisata edukasi yang membanggakan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    {{-- ========= SEJARAH END ========= --}}

    {{-- ========= VISI & MISI START ========= --}}
    <section class="py-20 lg:py-24 bg-gray-50">
        <div class="container mx-auto px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="font-serif text-3xl md:text-4xl font-bold text-primary">Visi & Misi</h2>
                <p class="mt-4 text-lg text-text-dark opacity-70">Fondasi yang menggerakkan setiap langkah dan inovasi kami
                    di Kampung Tahu.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
                {{-- Kartu Visi --}}
                <div
                    class="bg-white p-8 rounded-xl shadow-lg transform hover:-translate-y-2 transition-transform duration-300">
                    <div class="flex items-center mb-5">
                        <div class="bg-accent/20 text-accent p-3 rounded-full mr-4">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="font-serif text-2xl font-bold text-primary">Visi Kami</h3>
                    </div>
                    <p class="text-text-dark opacity-80 leading-relaxed">
                        Menjadi pusat pelestarian tradisi tahu berkualitas yang dikenal secara nasional dan menjadi ikon
                        agrowisata edukatif terdepan di Indonesia.
                    </p>
                </div>
                {{-- Kartu Misi --}}
                <div
                    class="bg-white p-8 rounded-xl shadow-lg transform hover:-translate-y-2 transition-transform duration-300">
                    <div class="flex items-center mb-5">
                        <div class="bg-accent/20 text-accent p-3 rounded-full mr-4">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4">
                                </path>
                            </svg>
                        </div>
                        <h3 class="font-serif text-2xl font-bold text-primary">Misi Kami</h3>
                    </div>
                    <ul class="space-y-3 text-text-dark opacity-80">
                        <li class="flex items-start"><span class="mr-3 mt-1 text-accent">✓</span><span>Menjaga
                                <strong>kualitas tertinggi</strong> dalam setiap potongan tahu.</span></li>
                        <li class="flex items-start"><span class="mr-3 mt-1 text-accent">✓</span><span>Memberdayakan
                                <strong>komunitas pengrajin lokal</strong> secara berkelanjutan.</span></li>
                        <li class="flex items-start"><span class="mr-3 mt-1 text-accent">✓</span><span>Menyediakan
                                <strong>pengalaman wisata edukasi</strong> yang tak terlupakan.</span></li>
                        <li class="flex items-start"><span class="mr-3 mt-1 text-accent">✓</span><span>Terus
                                <strong>berinovasi</strong> dalam menciptakan produk turunan tahu.</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    {{-- ========= VISI & MISI END ========= --}}

    {{-- ========= NILAI KAMI START ========= --}}
    <section class="py-20 lg:py-24 bg-white">
        <div class="container mx-auto px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="font-serif text-3xl md:text-4xl font-bold text-primary">Nilai Inti Kami</h2>
                <p class="mt-4 text-lg text-text-dark opacity-70">Tiga pilar yang menjadi landasan kami dalam berkarya dan
                    melayani.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                {{-- Nilai 1: Kualitas --}}
                <div class="text-center p-8 border border-gray-200 rounded-xl">
                    <div
                        class="mx-auto bg-primary/10 text-primary p-4 rounded-full w-16 h-16 flex items-center justify-center mb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-primary mb-2">Kualitas Terbaik</h3>
                    <p class="text-text-dark opacity-70">Dari biji kedelai pilihan hingga proses alami, kami memastikan
                        setiap produk memiliki kualitas premium.</p>
                </div>
                {{-- Nilai 2: Komunitas --}}
                <div class="text-center p-8 border border-gray-200 rounded-xl">
                    <div
                        class="mx-auto bg-primary/10 text-primary p-4 rounded-full w-16 h-16 flex items-center justify-center mb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-primary mb-2">Pemberdayaan Lokal</h3>
                    <p class="text-text-dark opacity-70">Kami tumbuh bersama para pengrajin lokal, menciptakan ekosistem
                        yang saling mendukung dan sejahtera.</p>
                </div>
                {{-- Nilai 3: Tradisi --}}
                <div class="text-center p-8 border border-gray-200 rounded-xl">
                    <div
                        class="mx-auto bg-primary/10 text-primary p-4 rounded-full w-16 h-16 flex items-center justify-center mb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-primary mb-2">Warisan Resep</h3>
                    <p class="text-text-dark opacity-70">Melestarikan resep asli turun-temurun adalah cara kami menjaga
                        keaslian cita rasa yang dicintai.</p>
                </div>
            </div>
        </div>
    </section>
    {{-- ========= NILAI KAMI END ========= --}}

    {{-- ========= CALL TO ACTION START ========= --}}
    <section class="bg-secondary">
        <div class="container mx-auto px-6 lg:px-8 py-16 text-center">
            <h2 class="font-serif text-3xl font-bold text-white">Siap Mencicipi Kelezatan Tahu Kami?</h2>
            <p class="mt-4 text-lg text-white opacity-90 max-w-2xl mx-auto">
                Jelajahi beragam produk kami atau kunjungi langsung Kampung Tahu untuk pengalaman yang tak terlupakan.
            </p>
            <div class="mt-8 flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="#"
                    class="inline-block w-full sm:w-auto bg-white text-primary font-bold py-3 px-6 rounded-full text-base sm:text-lg shadow-lg transform hover:scale-105 transition-transform duration-300 text-center">
                    Lihat Produk
                </a>
                <a href="#"
                    class="inline-block w-full sm:w-auto bg-primary text-white font-bold py-3 px-6 rounded-full text-base sm:text-lg shadow-lg transform hover:scale-105 transition-transform duration-300 text-center">
                    Kunjungi Kami
                </a>
            </div>
        </div>
    </section>
    {{-- ========= CALL TO ACTION END ========= --}}

@endsection
