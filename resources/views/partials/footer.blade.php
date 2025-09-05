<footer class="bg-black text-accent">
    <div class="container mx-auto px-6 py-12">
        {{-- Grid utama --}}
        <div
            class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-y-10 md:gap-x-8 md:divide-x md:divide-accent/20">

            {{-- Kolom 1: Tentang --}}
            <div class="col-span-1 px-4 md:px-8 text-center md:text-left">
                <h3 class="font-serif text-2xl font-bold mb-3 text-accent">Kampung Tahu</h3>
                <p class="text-sm leading-relaxed text-text-light">
                    Menjaga warisan rasa autentik melalui tahu berkualitas premium yang diolah secara turun-temurun.
                </p>
            </div>

            {{-- Kolom 2: Menu Navigasi --}}
            <div class="col-span-1 px-4 md:px-8 text-center md:text-left">
                <h3 class="font-serif text-lg font-semibold mb-3 text-accent">Menu</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="/" class="hover:text-secondary transition-colors">Beranda</a></li>
                    <li><a href="/tentang" class="hover:text-secondary transition-colors">Tentang</a></li>
                    <li><a href="/produk" class="hover:text-secondary transition-colors">Produk</a></li>
                    <li><a href="/paket-wisata" class="hover:text-secondary transition-colors">Paket Wisata</a></li>
                    <li><a href="/kontak" class="hover:text-secondary transition-colors">Kontak</a></li>
                </ul>
            </div>

            {{-- Kolom 3: Info Kontak --}}
            <div class="col-span-1 px-4 md:px-8 text-center md:text-left">
                <h3 class="font-serif text-lg font-semibold mb-3 text-accent">Hubungi Kami</h3>
                <ul class="space-y-3 text-sm text-text-light">
                    <li class="flex items-start justify-center md:justify-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-3 text-accent"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 11c0-1.105-.895-2-2-2s-2 .895-2 2 .895 2 2 2 2-.895 2-2zM4 12c0 4.418 3.582 8 8 8s8-3.582 8-8-3.582-8-8-8-8 3.582-8 8z" />
                        </svg>
                        Jl. Sentosa No. 123, Desa Makmur, Kab. Sejahtera
                    </li>
                    <li class="flex items-center justify-center md:justify-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-3 text-accent"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5h2l2 10h11l2-6H6" />
                        </svg>
                        +62 812 3456 7890
                    </li>
                </ul>
            </div>

            {{-- Kolom 4: Sosial Media --}}
            <div class="col-span-1 px-4 md:px-8 text-center md:text-left">
                <h3 class="font-serif text-lg font-semibold mb-3 text-accent">Ikuti Kami</h3>
                <div class="flex space-x-4 justify-center md:justify-start">
                    {{-- Instagram --}}
                    <a href="#" aria-label="Instagram"
                        class="w-10 h-10 rounded-full bg-accent/10 text-accent hover:bg-accent hover:text-black flex items-center justify-center transition-all duration-300 transform hover:scale-110">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path
                                d="M7.5 3h9a4.5 4.5 0 014.5 4.5v9a4.5 4.5 0 01-4.5 4.5h-9A4.5 4.5 0 013 16.5v-9A4.5 4.5 0 017.5 3z" />
                            <path d="M16.5 7.5h.01M12 9a3 3 0 100 6 3 3 0 000-6z" />
                        </svg>
                    </a>
                    {{-- Facebook --}}
                    <a href="#" aria-label="Facebook"
                        class="w-10 h-10 rounded-full bg-accent/10 text-accent hover:bg-accent hover:text-black flex items-center justify-center transition-all duration-300 transform hover:scale-110">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path
                                d="M17 2h-2a5 5 0 00-5 5v2H8v3h2v8h3v-8h2.5l.5-3H13V7a2 2 0 012-2h2V2z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        {{-- Footer bottom --}}
        <div class="border-t border-accent/20 mt-10 pt-6 text-center text-sm text-text-light">
            <p>&copy; {{ date('Y') }} <span class="text-accent">Kampung Tahu</span>. Didesain dengan ❤️ di Medan.</p>
        </div>
    </div>
</footer>
