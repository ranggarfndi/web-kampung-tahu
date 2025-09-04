<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Produk;
use App\Models\Pengurus;
use App\Models\PaketWisata;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $beritas = Berita::latest()->take(5)->get();
        $produks = Produk::latest()->take(3)->get();
        $paket_wisatas = PaketWisata::latest()->take(3)->get();

        // 2. Ambil 3 data pengurus terbaru
        $pengurus = Pengurus::latest()->take(3)->get();

        // 3. Kirim semua data ke view
        return view('home', [
            'beritas' => $beritas,
            'produks' => $produks,
            'paket_wisatas' => $paket_wisatas,
            'pengurus' => $pengurus, // <-- Tambahkan data pengurus
        ]);
    }

    public function tentang()
    {
        // Method ini hanya bertugas menampilkan view 'tentang'
        return view('tentang');
    }
}