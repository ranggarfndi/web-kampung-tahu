@extends('layouts.app')

@section('title', 'Tentang Kami - Kampung Tahu')

@section('content')

    {{-- ========= HERO SECTION START ========= --}}
    <section class="relative pt-24 overflow-hidden bg-gradient-to-br from-secondary/30 via-white to-secondary/30">
        {{-- Pola Dots SVG di Latar Belakang (sudut kanan atas) --}}
        <div class="absolute top-0 right-0 text-accent/10 opacity-60 z-0 transform translate-x-1/3 -translate-y-1/3">
            <svg width="400" height="400" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="200" cy="200" r="200" fill="url(#pattern-hero)" />
                <defs>
                    <pattern id="pattern-hero" patternContentUnits="objectBoundingBox" width=".05" height=".05">
                        <use xlink:href="#dot-hero" transform="scale(.025)" />
                    </pattern>
                    <path id="dot-hero" d="M10 5a5 5 0 100-10 5 5 0 000 10z" fill="currentColor" />
                </defs>
            </svg>
        </div>
        <div class="container relative z-20 max-w-7xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
            <div class="grid items-center grid-cols-1 gap-12 lg:grid-cols-2 lg:py-20">
                {{-- Kolom Teks Hero --}}
                <div class="text-center lg:text-left">
                    <h1 class="font-serif text-4xl font-extrabold leading-tight md:text-5xl lg:text-6xl text-primary">
                        Latar Belakang Kampung Tahu Binjai
                    </h1>
                    <p class="max-w-xl mx-auto mt-6 text-md md:text-xl opacity-80 text-text-dark lg:mx-0 italic">
                        Kampung Tahu Binjai berdiri tidak lepas dari latar belakangnya yang
                        sudah dikenal oleh masyarakat luas sebagai sentra industri tahu di Kota
                        Binjai. Dasar dari pengalaman dan latar belakang yang dimiliki, kemudian
                        lahirlah inisiatif Kampung Tahu Binjai yang diciptakan agar kedepannya
                        industri tahu di Kota Binjai dapat dikenal dan memiliki indentitas yang
                        legal. Tahu - tahu yang sudah diwariskan sejak puluhan tahun, menjadi
                        bukti nyata bahwa Kampung Tahu Binjai mampu berdiri dan
                        mempertahankan diri di era globalisasi modern.
                    </p>
                </div>
                {{-- Kolom Gambar Hero --}}
                <div class="relative flex items-center justify-center order-first lg:order-last">
                    <div class="absolute w-4/5 h-4/5 transform -rotate-6 bg-secondary rounded-3xl"></div>
                    <img src="{{ asset('images/hero.jpg') }}" alt="Produk Unggulan Kampung Tahu"
                        class="relative z-10 w-full max-w-md shadow-2xl rounded-3xl">
                </div>
            </div>
        </div>
    </section>
    {{-- ========= HERO SECTION END ========= --}}

    {{-- ========= SEJARAH START ========= --}}
    <main class="py-20 bg-white lg:py-24">
        <div class="container max-w-7xl px-4 mx-auto sm:px-6 lg:px-8">
            <div class="relative grid items-center grid-cols-1 lg:grid-cols-5 gap-8">
                {{-- Kolom Gambar (3/5 bagian) --}}
                <div class="lg:col-span-3">
                    <img src="{{ asset('images/tentang-tahu.jpg') }}" alt="Proses pembuatan tahu tradisional"
                        class="object-cover w-full h-auto shadow-xl aspect-video rounded-2xl">
                </div>
                {{-- Kolom Teks (2/5 bagian) dengan posisi tumpang tindih --}}
                <div class="z-10 lg:col-span-2 lg:-ml-16">
                    <div class="p-8 bg-white shadow-lg lg:p-10 rounded-2xl">
                        <h2 class="font-serif text-3xl font-bold md:text-4xl text-primary mb-5">Tentang Kami</h2>
                        <div class="space-y-4 leading-relaxed opacity-80 text-text-dark">
                            <p>
                                Kampung Tahu Binjai lahir disebuah jalan lorong kecil, yang memiliki keunikan dan potensi.
                                Industri yang sudah terjaga dengan turun temurun diwariskan untuk melestarikan pembuatan
                                tahu yang masih tradisional.
                            </p>
                            <p>
                                Sebuah jalan lorong kecil yang tidak memiliki identitas, seiring berjalannya waktu akhirnya
                                kami menemukan identitas dengan wajah baru dan dikenal banyak orang dengan julukan Kampung
                                Tahu Binjai. Kami ciptakan tahu-tahu berkualitas untuk dirasakan orang banyak dengan cita
                                rasa khas Tahu Binjai.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    {{-- ========= SEJARAH END ========= --}}

    {{-- ========= VISI & MISI START ========= --}}
    <section
        class="relative py-20 overflow-hidden bg-gradient-to-br from-primary/10 via-green-50/30 to-primary/10 lg:py-24">
        <div class="container max-w-7xl px-4 mx-auto sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto mb-16 text-center">
                <h2 class="font-serif text-3xl font-bold md:text-4xl text-primary">Visi & Misi</h2>
                <p class="mt-4 text-lg opacity-70 text-text-dark">Fondasi yang menggerakkan setiap langkah dan inovasi kami
                    di Kampung Tahu.</p>
            </div>

            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 max-w-5xl mx-auto">
                {{-- Kartu Visi --}}
                <div
                    class="p-8 transition-transform duration-300 transform bg-white shadow-lg rounded-xl hover:-translate-y-2">
                    <div class="flex items-center mb-5">
                        <div class="p-3 mr-4 rounded-full bg-accent/20 text-accent">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="font-serif text-2xl font-bold text-primary">Visi Kami</h3>
                    </div>
                    <p class="leading-relaxed opacity-80 text-text-dark">
                        “Menjadikan Kampung Tahu Binjai sebagai pusat unggulan kuliner dan
                        ekonomi kreatif berbasis tahu yang inovatif, berdaya saing, berkelanjutan,
                        serta memberikan manfaat sosial, budaya, dan ekonomi bagi
                        masyarakat.
                        ”
                    </p>
                </div>
                {{-- Kartu Misi --}}
                <div
                    class="p-8 transition-transform duration-300 transform bg-white shadow-lg rounded-xl hover:-translate-y-2">
                    <div class="flex items-center mb-5">
                        <div class="p-3 mr-4 rounded-full bg-accent/20 text-accent">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4">
                                </path>
                            </svg>
                        </div>
                        <h3 class="font-serif text-2xl font-bold text-primary">Misi Kami</h3>
                    </div>
                    <ul class="space-y-3 opacity-80 text-text-dark">
                        <li class="flex items-start"><span class="mt-1 mr-3 text-accent">✓</span>
                            <span><strong>Kualitas (Quality):</strong> Menjaga standar kebersihan, rasa, dan mutu produk tahu agar tetap dipercaya konsumen.</span>
                        </li>
                        <li class="flex items-start"><span class="mt-1 mr-3 text-accent">✓</span>
                            <span><strong>Inovasi (Innovation):</strong> Harus menghadirkan olahan tahu baru yang mengikuti tren tanpa meninggalkan cita rasa khas Binjai.</span>
                        </li>
                        <li class="flex items-start"><span class="mt-1 mr-3 text-accent">✓</span>
                            <span><strong>Pemberdayaan (Empowerment):</strong> Memberi ruang bagi masyarakatlokal untuk tumbuh bersama melalui usaha berbasis tahu.</span>
                        </li>
                        <li class="flex items-start"><span class="mt-1 mr-3 text-accent">✓</span>
                            <span><strong>Kebersamaan (Community):</strong> Membangun solidaritas warga, Kolaborasi UMKM, serta gotong royong demi kemajuan Kampung Tahu Binjai.</span>
                        </li>
                        <li class="flex items-start"><span class="mt-1 mr-3 text-accent">✓</span>
                            <span><strong>Kebersamaan (Community):</strong> Mengelola sumber daya dan limbah tahu secara ramah lingkungan serta berorientasi jangka panjang.</span>
                        </li>
                        <li class="flex items-start"><span class="mt-1 mr-3 text-accent">✓</span>
                            <span><strong>Identitas Lokal (Local Pride):</strong> Menjadikan tahu sebagai ikon khas Binjai yang membanggakan daerah di tingkat nasional maupun internasional.</span>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </section>
    {{-- ========= VISI & MISI END ========= --}}

    {{-- ========= NILAI KAMI START ========= --}}
    <section class="py-20 bg-white lg:py-24">
        <div class="container max-w-7xl px-4 mx-auto sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto mb-16 text-center">
                <h2 class="font-serif text-3xl font-bold md:text-4xl text-primary">Nilai Inti Kami</h2>
                <p class="mt-4 text-lg opacity-70 text-text-dark">Tiga pilar yang menjadi landasan kami dalam berkarya dan
                    melayani.</p>
            </div>
            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                {{-- Nilai 1: Kualitas --}}
                <div class="p-8 text-center bg-secondary/10 border border-secondary/20 rounded-xl">
                    <div
                        class="flex items-center justify-center w-16 h-16 p-4 mx-auto mb-5 rounded-full bg-primary/10 text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold text-primary">Kualitas Terbaik</h3>
                    <p class="opacity-70 text-text-dark">Dari biji kedelai pilihan hingga proses alami, kami memastikan
                        setiap produk memiliki kualitas premium.</p>
                </div>
                {{-- Nilai 2: Komunitas --}}
                <div class="p-8 text-center bg-secondary/10 border border-secondary/20 rounded-xl">
                    <div
                        class="flex items-center justify-center w-16 h-16 p-4 mx-auto mb-5 rounded-full bg-primary/10 text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold text-primary">Pemberdayaan Lokal</h3>
                    <p class="opacity-70 text-text-dark">Kami tumbuh bersama para pengrajin lokal, menciptakan ekosistem
                        yang saling mendukung dan sejahtera.</p>
                </div>
                {{-- Nilai 3: Tradisi --}}
                <div class="p-8 text-center bg-secondary/10 border border-secondary/20 rounded-xl">
                    <div
                        class="flex items-center justify-center w-16 h-16 p-4 mx-auto mb-5 rounded-full bg-primary/10 text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold text-primary">Warisan Resep</h3>
                    <p class="opacity-70 text-text-dark">Melestarikan resep asli turun-temurun adalah cara kami menjaga
                        keaslian cita rasa yang dicintai.</p>
                </div>
            </div>
        </div>
    </section>
    {{-- ========= NILAI KAMI END ========= --}}

    {{-- ========= CALL TO ACTION START ========= --}}
    <section class="bg-gradient-to-r from-secondary to-yellow-700">
        <div class="container max-w-7xl px-4 py-16 mx-auto text-center sm:px-6 lg:px-8">
            <h2 class="font-serif text-3xl font-bold text-white">Siap Mencicipi Kelezatan Tahu Kami?</h2>
            <p class="max-w-2xl mx-auto mt-4 text-lg text-white opacity-90">
                Jelajahi beragam produk kami atau kunjungi langsung Kampung Tahu untuk pengalaman yang tak terlupakan.
            </p>
            <div class="flex flex-col items-center justify-center gap-4 mt-8 sm:flex-row">
                <a href="{{ route('produk') }}"
                    class="inline-block w-full text-center text-primary bg-white font-bold py-3 px-6 rounded-full text-base sm:text-lg shadow-lg transform hover:scale-105 transition-transform duration-300 sm:w-auto">
                    Lihat Produk
                </a>
                <a href="{{ route('kontak') }}"
                    class="inline-block w-full text-center text-white bg-black/20 backdrop-blur-sm font-bold py-3 px-6 rounded-full text-base sm:text-lg shadow-lg transform hover:scale-105 transition-transform duration-300 sm:w-auto">
                    Kunjungi Kami
                </a>
            </div>
        </div>
    </section>
    {{-- ========= CALL TO ACTION END ========= --}}

@endsection
