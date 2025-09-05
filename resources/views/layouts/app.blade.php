<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    {{-- FAVICON KUSTOM ANDA --}}
    <link rel="icon" href="{{ asset('images/logo-favicon.png') }}" type="image/jpeg">
    
    {{-- Animate.css CDN --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    
    {{-- Swiper.js CDN --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
    {{-- Menggunakan Vite untuk memuat CSS dan JS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>{{ $title ?? 'Kampung Tahu' }}</title>
</head>
<body class="bg-background text-text-dark font-sans antialiased">

    {{-- Memanggil file Navbar --}}
    @include('partials.navbar')

    {{-- Konten utama halaman --}}
    <main>
        @yield('content')
    </main>

    {{-- Memanggil file Footer --}}
    @include('partials.footer')

</body>
</html>