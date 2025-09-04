<footer class="bg-accent text-primary">
    <div class="container mx-auto px-6 py-10">
        {{-- Kontainer utama dengan garis pemisah vertikal di layar besar --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-y-10 md:gap-x-8 md:divide-x md:divide-primary/20">

            {{-- Kolom 1: Tentang (dengan padding horizontal) --}}
            <div class="col-span-1 px-4 md:px-8 text-center md:text-left">
                <h3 class="font-serif text-xl font-bold mb-3">Kampung Tahu</h3>
                <p class="text-sm leading-relaxed opacity-80">
                    Menjaga warisan rasa autentik melalui tahu berkualitas premium yang diolah secara turun-temurun.
                </p>
            </div>

            {{-- Kolom 2: Menu Navigasi (dengan padding horizontal) --}}
            <div class="col-span-1 px-4 md:px-8 text-center md:text-left">
                <h3 class="font-serif text-lg font-semibold mb-3">Menu</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="/"
                            class="opacity-80 hover:opacity-100 hover:underline transition-opacity">Beranda</a></li>
                    <li><a href="/tentang"
                            class="opacity-80 hover:opacity-100 hover:underline transition-opacity">Tentang</a></li>
                    <li><a href="/produk"
                            class="opacity-80 hover:opacity-100 hover:underline transition-opacity">Produk</a></li>
                    <li><a href="/paket-wisata"
                            class="opacity-80 hover:opacity-100 hover:underline transition-opacity">Paket Wisata</a>
                    </li>
                    <li><a href="/kontak"
                            class="opacity-80 hover:opacity-100 hover:underline transition-opacity">Kontak</a></li>
                </ul>
            </div>

            {{-- Kolom 3: Info Kontak (dengan padding horizontal) --}}
            <div class="col-span-1 px-4 md:px-8 text-center md:text-left">
                <h3 class="font-serif text-lg font-semibold mb-3">Hubungi Kami</h3>
                <ul class="space-y-3 text-sm">
                    <li class="flex items-start justify-center md:justify-start">
                        <svg class="w-4 h-4 mr-3 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="opacity-80">Jl. Sentosa No. 123, Desa Makmur, Kab. Sejahtera</span>
                    </li>
                    <li class="flex items-center justify-center md:justify-start">
                        <svg class="w-4 h-4 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z">
                            </path>
                        </svg>
                        <span class="opacity-80">+62 812 3456 7890</span>
                    </li>
                </ul>
            </div>

            {{-- Kolom 4: Sosial Media (dengan padding horizontal) --}}
            <div class="col-span-1 px-4 md:px-8 text-center md:text-left">
                <h3 class="font-serif text-lg font-semibold mb-3">Ikuti Kami</h3>
                <div class="flex space-x-3 justify-center md:justify-start">

                    {{-- Ikon Instagram --}}
                    <a href="#" aria-label="Instagram"
                        class="w-10 h-10 rounded-full bg-primary/20 text-primary hover:bg-primary hover:text-accent flex items-center justify-center transition-all duration-300 transform hover:scale-110">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.69 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.204-.012 3.584-.069 4.85c-.148 3.252-1.691 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.85-.069-3.252-.148-4.771-1.69-4.919-4.919-.058-1.265-.07-1.644-.07-4.85 0-3.204.012-3.584.069-4.849.149-3.252 1.668-4.771 4.919-4.919 1.266-.058 1.645-.07 4.85-.07zm0-2.163c-3.259 0-3.667.014-4.947.072-4.435.201-6.737 2.407-6.938 6.843-.058 1.28-.07 1.688-.07 4.948 0 3.26.014 3.667.072 4.947.201 4.435 2.407 6.737 6.843 6.938 1.28.058 1.688.07 4.948.07 3.259 0 3.667-.014 4.947-.072 4.435-.201 6.737 2.407 6.938-6.843.058-1.28.07-1.688.07-4.948 0-3.259-.014-3.667-.072-4.947-.201-4.435-2.407-6.737-6.843-6.938-1.28-.058-1.688-.07-4.948-.07z M12 8.138c-2.136 0-3.862 1.726-3.862 3.862s1.726 3.862 3.862 3.862 3.862-1.726 3.862-3.862-1.726-3.862-3.862-3.862zm0 6.162c-1.269 0-2.3-1.031-2.3-2.3s1.031-2.3 2.3-2.3 2.3 1.031 2.3 2.3-1.031 2.3-2.3 2.3zm4.87-6.726c-.53 0-.96.43-.96.96s.43.96.96.96.96-.43.96-.96-.43-.96-.96-.96z" />
                        </svg>
                    </a>

                    {{-- Ikon Facebook --}}
                    <a href="#" aria-label="Facebook"
                        class="w-10 h-10 rounded-full bg-primary/20 text-primary hover:bg-primary hover:text-accent flex items-center justify-center transition-all duration-300 transform hover:scale-110">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                        </svg>
                    </a>

                    {{-- Tambahkan ikon lain di sini dengan gaya yang sama --}}

                </div>
            </div>
        </div>

        {{-- Garis pemisah horizontal dan copyright --}}
        <div class="border-t border-primary/20 mt-10 pt-6 text-center text-sm">
            <p class="opacity-70">&copy; {{ date('Y') }} Kampung Tahu. Didesain dengan ❤️ di Medan.</p>
        </div>
    </div>
</footer>
