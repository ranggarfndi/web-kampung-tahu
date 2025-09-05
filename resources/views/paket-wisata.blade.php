@extends('layouts.app')

@section('title', 'Paket Wisata Edukasi - Kampung Tahu')

@section('content')

    {{-- ========= PAGE HEADER START ========= --}}
    <section class="pt-24 bg-gray-50">
        <div class="container mx-auto px-6 lg:px-8 py-16 text-center">
            <h1 class="font-serif text-4xl md:text-5xl font-bold text-primary">Paket Wisata Edukasi</h1>
            <p class="mt-4 text-lg text-text-dark opacity-70 max-w-2xl mx-auto">
                Rasakan pengalaman unik dan menyenangkan belajar membuat tahu langsung dari para ahlinya di Kampung Tahu.
            </p>
        </div>
    </section>
    {{-- ========= PAGE HEADER END ========= --}}

    {{-- ========= DAFTAR PAKET WISATA START ========= --}}
    <main class="py-20 lg:py-24 bg-white">
        <div class="container mx-auto px-6 lg:px-8">
            
            @if ($paket_wisatas->isNotEmpty())
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($paket_wisatas as $paket)
                        {{-- Kartu Paket Wisata --}}
                        <div class="group bg-white rounded-xl shadow-lg overflow-hidden flex flex-col transform hover:-translate-y-2 hover:shadow-2xl transition-all duration-300">
                            <a href="{{ route('paket-wisata.detail', $paket->slug) }}" class="block">
                                <img src="{{ asset('storage/' . $paket->gambar) }}" alt="{{ $paket->nama }}" class="w-full aspect-square object-cover transition-transform duration-300 group-hover:scale-110">
                            </a>
                            <div class="p-6 flex-grow flex flex-col">
                                <h3 class="font-serif text-2xl font-bold text-primary mb-3">
                                    <a href="{{ route('paket-wisata.detail', $paket->slug) }}" class="hover:text-accent transition-colors duration-300">
                                        {{ $paket->nama }}
                                    </a>
                                </h3>
                                <div class="prose prose-sm text-text-dark opacity-80 leading-relaxed mb-6 flex-grow">
                                    {!! \Illuminate\Support\Str::limit($paket->deskripsi, 120) !!}
                                </div>
                                <div class="mt-auto">
                                    <a href="{{ route('paket-wisata.detail', $paket->slug) }}" class="block w-full text-center bg-primary text-white font-bold py-3 px-6 rounded-lg shadow-md hover:bg-opacity-90 transition-all duration-300">
                                        Lihat Detail Paket
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- Pagination Links --}}
                <div class="mt-16">
                    {{ $paket_wisatas->links() }}
                </div>

            @else
                <div class="text-center py-16">
                    <h2 class="text-2xl font-semibold text-gray-700">Oops!</h2>
                    <p class="mt-2 text-lg text-gray-500">Saat ini belum ada paket wisata untuk ditampilkan.</p>
                </div>
            @endif

        </div>
    </main>
    {{-- ========= DAFTAR PAKET WISATA END ========= --}}

@endsection