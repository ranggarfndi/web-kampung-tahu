@extends('layouts.app')

@section('title', $p->nama . ' - Tim Kami')

@section('content')

    <main class="relative pt-24 overflow-hidden bg-gradient-to-br from-secondary/20 via-white to-secondary/20">
        {{-- Pola SVG di Latar Belakang --}}
        <div class="absolute top-0 right-0 text-primary/10 opacity-40 z-0 transform translate-x-1/4 -translate-y-1/4">
            <svg width="600" height="600" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="300" cy="300" r="300" fill="url(#pattern-detail)" />
                <defs>
                    <pattern id="pattern-detail" patternContentUnits="objectBoundingBox" width=".05" height=".05">
                        <use xlink:href="#dot-detail" transform="scale(.025)" />
                    </pattern>
                    <path id="dot-detail" d="M10 5a5 5 0 100-10 5 5 0 000 10z" fill="currentColor" />
                </defs>
            </svg>
        </div>

        <div class="container relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-8 pb-16 lg:pb-20">

            {{-- Breadcrumbs --}}
            <nav class="text-sm mb-8" aria-label="Breadcrumb">
                <ol class="list-none p-0 inline-flex space-x-2">
                    <li class="flex items-center"><a href="{{ url('/') }}"
                            class="text-gray-500 hover:text-primary">Home</a></li>
                    <li class="flex items-center"><svg class="h-5 w-5 text-gray-400" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                        </svg><a href="{{ route('pengurus') }}" class="text-gray-500 hover:text-primary">Tim Kami</a></li>
                    <li class="flex items-center"><svg class="h-5 w-5 text-gray-400" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                        </svg><span class="text-gray-800 font-semibold">{{ $p->nama }}</span></li>
                </ol>
            </nav>

            {{-- Konten Detail Pengurus --}}
            <div
                class="bg-white/70 backdrop-blur-lg p-8 md:p-12 rounded-2xl shadow-xl max-w-4xl mx-auto border border-white/50">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center md:gap-12">
                    {{-- Foto --}}
                    <div class="md:col-span-1 flex justify-center">
                        <div class="w-48 h-48 sm:w-60 sm:h-60 overflow-hidden rounded-full shadow-lg">
                            <img src="{{ asset('storage/' . $p->gambar) }}" alt="{{ $p->nama }}"
                                class="w-full h-full object-cover object-top">
                        </div>
                    </div>
                    {{-- Informasi --}}
                    <div class="md:col-span-2 text-center md:text-left">
                        <h1 class="font-serif text-3xl md:text-4xl font-bold text-primary">{{ $p->nama }}</h1>
                        <p class="text-accent text-lg font-semibold mt-1">{{ $p->jabatan }}</p>

                        <div
                            class="prose prose-sm max-w-none text-text-dark opacity-80 leading-relaxed my-6 text-center md:text-left">
                            {!! $p->deskripsi !!}
                        </div>

                        {{-- Tombol Sosial Media --}}
                        <div class="flex justify-center md:justify-start items-center space-x-3 mt-6">
                            @if ($p->instagram)
                                <a href="{{ $p->instagram }}" target="_blank"
                                    class="inline-flex items-center gap-2 bg-gradient-to-r from-purple-500 to-pink-500 text-white font-semibold text-sm py-2 px-4 rounded-lg shadow-md hover:shadow-lg transition-all transform hover:scale-105">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.024.06 1.378.06 3.808s-.012 2.784-.06 3.808c-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.024.048-1.378.06-3.808.06s-2.784-.012-3.808-.06c-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.048-1.024-.06-1.378-.06-3.808s.012-2.784.06-3.808c.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 016.08 2.525c.636-.247 1.363-.416 2.427-.465C9.53 2.013 9.884 2 12.315 2zM12 7a5 5 0 100 10 5 5 0 000-10zm0 8a3 3 0 110-6 3 3 0 010 6zm5.25-8.25a1.25 1.25 0 100-2.5 1.25 1.25 0 000 2.5z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span>Instagram</span>
                                </a>
                            @endif
                            @if ($p->no_hp)
                                <a href="https://wa.me/{{ $p->no_hp }}" target="_blank"
                                    class="inline-flex items-center gap-2 bg-green-500 hover:bg-green-600 text-white font-semibold text-sm py-2 px-4 rounded-lg shadow-md hover:shadow-lg transition-all transform hover:scale-105">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.894 11.892-1.99 0-3.903-.52-5.586-1.457l-6.162 1.688a.625.625 0 01-.761-.761z" />
                                    </svg>
                                    <span>WhatsApp</span>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
