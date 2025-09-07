@extends('layouts.app')

@section('title', 'Hubungi Kami - Kampung Tahu')

@section('content')

    {{-- ========= PAGE HEADER START ========= --}}
    <section class="pt-24 bg-gray-50">
        <div class="container mx-auto px-6 lg:px-8 py-16 text-center">
            <h1 class="font-serif text-4xl md:text-5xl font-bold text-primary">Hubungi Kami</h1>
            <p class="mt-4 text-lg text-text-dark opacity-70 max-w-3xl mx-auto">
                Kami siap membantu! Dapatkan informasi, pesan produk, atau jadwalkan kunjungan Anda.
            </p>
        </div>
    </section>
    {{-- ========= PAGE HEADER END ========= --}}

    {{-- ========= KONTEN KONTAK START ========= --}}
    <main class="py-16 lg:py-20 bg-white">
        <div class="container mx-auto px-6 lg:px-8">

            {{-- Layout Utama: 1 kolom di mobile, 2 kolom sejajar di desktop --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

                {{-- Kolom Kiri: Informasi Kontak --}}
                <div class="bg-white rounded-2xl shadow-2xl p-8 border border-gray-100 flex flex-col h-full">
                    <h2 class="font-serif text-3xl font-bold text-primary mb-6">Informasi Kontak</h2>
                    <div class="space-y-6">
                        {{-- Alamat --}}
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0 bg-primary/10 text-primary p-3 rounded-full mt-1">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-primary">Alamat</h3>
                                <p class="text-text-dark opacity-80 text-sm mt-1">Jalan Tahu No. 123, Desa Kedelai, Kec. Lezat, Medan, Sumatera Utara, Kode Pos 20222</p>
                            </div>
                        </div>

                        {{-- Telepon --}}
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0 bg-primary/10 text-primary p-3 rounded-full mt-1">
                               <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-primary">Telepon</h3>
                                <a href="https://wa.me/{{ config('app.wa_phone_number') }}" target="_blank" class="text-text-dark opacity-80 text-sm mt-1 hover:text-accent transition-colors">+{{ config('app.wa_phone_number') }} (WhatsApp)</a>
                            </div>
                        </div>
                        
                        {{-- Jam Operasional --}}
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0 bg-primary/10 text-primary p-3 rounded-full mt-1">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-primary">Jam Operasional</h3>
                                <p class="text-text-dark opacity-80 text-sm mt-1">Senin - Sabtu: 08:00 - 17:00 WIB<br>Minggu & Hari Libur: Tutup</p>
                            </div>
                        </div>
                    </div>
                    {{-- Tombol diletakkan di bagian bawah kartu --}}
                    <div class="mt-auto pt-8">
                         <a href="https://api.whatsapp.com/send?phone={{ config('app.wa_phone_number') }}&text=Halo,%20saya%20punya%20pertanyaan."
                           target="_blank"
                           class="inline-flex items-center gap-3 w-full justify-center bg-green-500 hover:bg-green-600 text-white font-bold py-3 px-6 rounded-lg text-base shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.894 11.892-1.99 0-3.903-.52-5.586-1.457l-6.162 1.688a.625.625 0 01-.761-.761z"/></svg>
                            <span>Chat Kami Sekarang</span>
                        </a>
                    </div>
                </div>

                {{-- Kolom Kanan: Peta --}}
                <div class="w-full h-96 lg:h-full rounded-2xl shadow-2xl overflow-hidden min-h-[500px]">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.892150013096!2d98.4529900747325!3d3.612140996361964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3030d7c088ff8261%3A0xd3881911b09e8b29!2sRumah%20Ramah%20Anak%20%26%20Galeri%20Industri%20Perempuan%20Kota%20Binjai%20(Yayasan%20AKSI%20Baik)!5e0!3m2!1sid!2sid!4v1757070194435!5m2!1sid!2sid" {{-- Ganti dengan embed Google Maps Anda --}}
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

            </div>
        </div>
    </main>
    {{-- ========= KONTEN KONTAK END ========= --}}

@endsection