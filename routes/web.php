<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', HomeController::class);

Route::get('/tentang', [HomeController::class, 'tentang']);

// ROUTE BARU UNTUK HALAMAN PRODUK
Route::get('/produk', [PageController::class, 'produk'])->name('produk');
Route::get('/produk/{slug}', [PageController::class, 'produkDetail'])->name('produk.detail');

// ROUTE BARU UNTUK HALAMAN PAKET WISATA
Route::get('/paket-wisata', [PageController::class, 'paketWisata'])->name('paket-wisata');
Route::get('/paket-wisata/{slug}', [PageController::class, 'paketWisataDetail'])->name('paket-wisata.detail');

// ROUTE BARU UNTUK HALAMAN KONTAK
Route::get('/kontak', [PageController::class, 'kontak'])->name('kontak');

// ROUTE BARU UNTUK HALAMAN PENGURUS
Route::get('/pengurus', [PageController::class, 'pengurus'])->name('pengurus');
Route::get('/pengurus/{slug}', [PageController::class, 'pengurusDetail'])->name('pengurus.detail');

// ROUTE BARU UNTUK HALAMAN BERITA
Route::get('/berita', [PageController::class, 'berita'])->name('berita');
Route::get('/berita/{slug}', [PageController::class, 'beritaDetail'])->name('berita.detail');