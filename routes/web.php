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