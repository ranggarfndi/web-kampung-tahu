<footer class="bg-black text-accent">
    <div class="container mx-auto px-6 py-12">
        {{-- Grid utama --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-y-10 md:gap-x-8 md:divide-x md:divide-accent/20">

            {{-- Kolom 1: Tentang --}}
            <div class="col-span-1 px-4 md:px-8 text-center md:text-left">
                <h3 class="font-serif text-2xl font-bold mb-3 text-accent">Kampung Tahu Binjai</h3>
                <p class="text-sm leading-relaxed text-text-light">
                    Website Kampung Tahu Binjai. Menjaga warisan rasa autentik melalui tahu berkualitas premium yang
                    diolah secara turun-temurun.
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
                    <li><a href="/admin" class="hover:text-secondary transition-colors">Admin</a></li>
                </ul>
            </div>

            {{-- Kolom 3: Info Kontak --}}
            <div class="col-span-1 px-4 md:px-8 text-center md:text-left">
                <h3 class="font-serif text-lg font-semibold mb-3 text-accent">Hubungi Kami</h3>
                <ul class="space-y-3 text-sm text-text-light">
                    {{-- Alamat dengan Ikon Map Pin yang Benar --}}
                    <li class="flex items-start justify-center md:justify-start">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-5 h-5 mr-3 text-accent flex-shrink-0 mt-0.5">
                            <path fill-rule="evenodd"
                                d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 004.6-5.187c1.555-2.518 2.46-5.513 2.46-8.687C19.5 5.57 16.03 2 11.75 2S4 5.57 4 10.012c0 3.175.904 6.17 2.46 8.687a16.975 16.975 0 004.6 5.187zM12 13.25a3.25 3.25 0 100-6.5 3.25 3.25 0 000 6.5z"
                                clip-rule="evenodd" />
                        </svg>
                        <span>Jl. Sukun, Kel. Suka Maju, Kec. Binjai Bar., Kota Binjai, Sumatera Utara, 20716</span>
                    </li>

                    {{-- Telepon dengan Ikon Phone yang Benar --}}
                    <li class="flex items-center justify-center md:justify-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-3 text-accent flex-shrink-0"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <a href="tel:+6281376973928" class="hover:text-accent transition-colors">(+62) 813-7697-3928</a>
                    </li>
                    <li class="flex items-center justify-center md:justify-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-3 text-accent flex-shrink-0"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <a href="tel:+6281370011511" class="hover:text-accent transition-colors">(+62) 813-7001-1511</a>
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
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path
                                d="M7.5 3h9a4.5 4.5 0 014.5 4.5v9a4.5 4.5 0 01-4.5 4.5h-9A4.5 4.5 0 013 16.5v-9A4.5 4.5 0 017.5 3z" />
                            <path d="M16.5 7.5h.01M12 9a3 3 0 100 6 3 3 0 000-6z" />
                        </svg>
                    </a>
                    {{-- Facebook --}}
                    <a href="#" aria-label="Facebook"
                        class="w-10 h-10 rounded-full bg-accent/10 text-accent hover:bg-accent hover:text-black flex items-center justify-center transition-all duration-300 transform hover:scale-110">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path d="M17 2h-2a5 5 0 00-5 5v2H8v3h2v8h3v-8h2.5l.5-3H13V7a2 2 0 012-2h2V2z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        {{-- Footer bottom --}}
        <div class="border-t border-accent/20 mt-10 pt-6 text-center text-sm text-text-light">
            <p>&copy; {{ date('Y') }} <span class="text-accent">Website Kampung Tahu</span> Binjai</p>
        </div>
    </div>
</footer>
