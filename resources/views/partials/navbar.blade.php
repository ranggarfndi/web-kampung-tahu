<nav class="fixed top-0 w-full z-50 bg-white/80 backdrop-blur-sm shadow-sm transition-all duration-300">
    <div class="container mx-auto px-6 sm:px-8 lg:px-12 py-3 flex justify-between items-center">
        {{-- Logo atau Nama Website --}}
        <a href="/" class="flex items-center gap-3">
            <img src="{{ asset('images/logo.jpg') }}" alt="Logo Kampung Tahu"
                class="h-12 w-12 md:h-14 md:w-14 rounded-full object-cover border-2 border-secondary/50">

            <span class="hidden sm:block font-sans text-xl md:text-2xl font-bold text-primary tracking-wide">
                KAMPUNG TAHU BINJAI
            </span>
        </a>

        {{-- Menu Navigasi Desktop (Muncul di layar besar 'lg' ke atas) --}}
        <div class="hidden lg:flex space-x-8 items-center text-lg">
            <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Beranda</a>
            <a href="/tentang" class="nav-link {{ request()->is('tentang') ? 'active' : '' }}">Tentang</a>
            <a href="/produk" class="nav-link {{ request()->is('produk') ? 'active' : '' }}">Produk</a>
            <a href="/paket-wisata" class="nav-link {{ request()->is('paket-wisata') ? 'active' : '' }}">Paket
                Wisata</a>
            <a href="/pengurus" class="nav-link {{ request()->is('pengurus') ? 'active' : '' }}">Pengurus</a>
            <a href="/berita" class="nav-link {{ request()->is('berita') ? 'active' : '' }}">Berita</a>
            <a href="/kontak" class="nav-link {{ request()->is('kontak') ? 'active' : '' }}">Kontak</a>
        </div>

        {{-- Tombol Mobile Menu (Muncul di layar 'lg' ke bawah) --}}
        <div class="lg:hidden">
            <button id="mobile-menu-button"
                class="text-text-dark focus:outline-none p-2 rounded-md hover:bg-background">
                <svg id="hamburger-icon" class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7">
                    </path>
                </svg>
                <svg id="close-icon" class="w-7 h-7 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
        </div>
    </div>

    {{-- Mobile Menu Dropdown --}}
    <div id="mobile-menu"
        class="lg:hidden bg-white/95 backdrop-blur-sm shadow-lg overflow-hidden max-h-0 transition-all ease-in-out duration-500">
        <div class="py-2">
            <a href="/"
                class="block px-6 py-3 text-lg text-text-dark hover:bg-background {{ request()->is('/') ? 'font-semibold text-primary' : '' }}">Beranda</a>
            <a href="/tentang"
                class="block px-6 py-3 text-lg text-text-dark hover:bg-background {{ request()->is('tentang') ? 'font-semibold text-primary' : '' }}">Tentang</a>
            <a href="/produk"
                class="block px-6 py-3 text-lg text-text-dark hover:bg-background {{ request()->is('produk') ? 'font-semibold text-primary' : '' }}">Produk</a>
            <a href="/paket-wisata"
                class="block px-6 py-3 text-lg text-text-dark hover:bg-background {{ request()->is('paket-wisata') ? 'font-semibold text-primary' : '' }}">Paket
                Wisata</a>
            <a href="/pengurus"
                class="block px-6 py-3 text-lg text-text-dark hover:bg-background {{ request()->is('pengurus') ? 'font-semibold text-primary' : '' }}">Pengurus</a>
            <a href="/berita"
                class="block px-6 py-3 text-lg text-text-dark hover:bg-background {{ request()->is('berita') ? 'font-semibold text-primary' : '' }}">Berita</a>
            <a href="/kontak"
                class="block px-6 py-3 text-lg text-text-dark hover:bg-background {{ request()->is('kontak') ? 'font-semibold text-primary' : '' }}">Kontak</a>
        </div>
    </div>
</nav>

{{-- Styling tambahan untuk link navigasi (tetap sama) --}}
<style>
    .nav-link {
        position: relative;
        color: var(--tw-color-text-dark);
        transition: color 0.3s ease;
    }

    .nav-link:hover {
        color: var(--tw-color-primary);
    }

    .nav-link::after {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        bottom: -5px;
        left: 50%;
        transform: translateX(-50%);
        background-color: var(--tw-color-accent);
        transition: width 0.3s ease;
    }

    .nav-link:hover::after,
    .nav-link.active::after {
        width: 100%;
    }

    .nav-link.active {
        color: var(--tw-color-primary);
        font-weight: 600;
    }
</style>

{{-- JavaScript untuk Toggle Mobile Menu (diperbarui) --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const hamburgerIcon = document.getElementById('hamburger-icon');
        const closeIcon = document.getElementById('close-icon');

        if (mobileMenuButton) {
            mobileMenuButton.addEventListener('click', function() {
                // Toggle animasi slide
                if (mobileMenu.style.maxHeight) {
                    mobileMenu.style.maxHeight = null;
                } else {
                    mobileMenu.style.maxHeight = mobileMenu.scrollHeight + "px";
                }

                // Toggle ikon
                hamburgerIcon.classList.toggle('hidden');
                closeIcon.classList.toggle('hidden');
            });
        }
    });
</script>
