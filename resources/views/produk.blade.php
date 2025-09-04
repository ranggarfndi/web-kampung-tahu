@extends('layouts.app')

@section('title', 'Produk Kami - Kampung Tahu')

@section('content')

    {{-- ========= PAGE HEADER START (VERSI SIMPLE) ========= --}}
    <section class="pt-24 bg-gray-50">
        <div class="container mx-auto px-6 lg:px-8 py-16 text-center">
            <h1 class="font-serif text-4xl md:text-5xl font-bold text-primary">Produk Unggulan Kami</h1>
            <p class="mt-4 text-lg text-text-dark opacity-70 max-w-2xl mx-auto">
                Setiap produk dibuat dengan bahan baku kedelai pilihan dan resep warisan untuk menjamin kualitas dan cita rasa terbaik.
            </p>
        </div>
    </section>
    {{-- ========= PAGE HEADER END ========= --}}

    {{-- ========= DAFTAR PRODUK START ========= --}}
    <main class="py-20 lg:py-24 bg-white">
        <div class="container mx-auto px-6 lg:px-8">
            
            @if ($produks->isNotEmpty())
                {{-- INI BAGIAN YANG DIUBAH --}}
                <div class="grid grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-8">
                    @foreach ($produks as $produk)
                        {{-- Kartu Produk - Desain Baru --}}
                        <div class="group bg-white rounded-xl shadow-lg overflow-hidden flex flex-col transform hover:-translate-y-2 hover:shadow-2xl transition-all duration-300">
                            {{-- Gambar Produk (Ukuran dipaksa sama) --}}
                            <a href="{{ route('produk.detail', $produk->slug) }}" class="block">
                                <img src="{{ asset('storage/' . $produk->gambar) }}" alt="{{ $produk->nama }}" class="w-full aspect-square object-cover transition-transform duration-300 group-hover:scale-110">
                            </a>
                            
                            {{-- Konten Kartu --}}
                            <div class="p-4 md:p-6 flex-grow flex flex-col">
                                {{-- Judul --}}
                                <h3 class="font-serif text-lg md:text-2xl font-bold text-primary mb-3">
                                    <a href="{{ route('produk.detail', $produk->slug) }}" class="hover:text-accent transition-colors duration-300">
                                        {{ $produk->nama }}
                                    </a>
                                </h3>
                                
                                {{-- Deskripsi Singkat --}}
                                <p class="text-text-dark opacity-80 text-xs md:text-sm leading-relaxed mb-6 flex-grow">
                                    {{ \Illuminate\Support\Str::limit($produk->deskripsi, 80) }}
                                </p>
                                
                                {{-- Tombol Aksi (diletakkan di paling bawah) --}}
                                <div class="mt-auto">
                                    <a href="{{ route('produk.detail', $produk->slug) }}" class="block w-full text-center bg-primary text-white font-bold text-sm md:text-base py-3 px-4 md:px-6 rounded-lg shadow-md hover:bg-opacity-90 transition-all duration-300">
                                        Lihat Detail
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- Pagination Links --}}
                <div class="mt-16">
                    {{ $produks->links() }}
                </div>

            @else
                <div class="text-center py-16">
                    <h2 class="text-2xl font-semibold text-gray-700">Oops!</h2>
                    <p class="mt-2 text-lg text-gray-500">Saat ini belum ada produk untuk ditampilkan.</p>
                </div>
            @endif

        </div>
    </main>
    {{-- ========= DAFTAR PRODUK END ========= --}}

@endsection