<?php

namespace App\Http\Controllers;

// PASTIKAN SEMUA MODEL INI SUDAH DI-IMPORT
use App\Models\Berita;
use App\Models\PaketWisata;
use App\Models\Pengurus;
use App\Models\Produk;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Menampilkan halaman utama (homepage).
     */
    public function home()
    {
        $produks = Produk::latest()->take(3)->get();
        $paket_wisatas = PaketWisata::latest()->take(3)->get();
        $pengurus = Pengurus::latest()->take(3)->get();
        $beritas = Berita::latest()->take(4)->get();
        return view('home', compact('produks', 'paket_wisatas', 'pengurus', 'beritas'));
    }

    /**
     * Menampilkan halaman daftar semua produk.
     */
    public function produk()
    {
        $produks = Produk::latest()->paginate(9); // Menampilkan 9 produk per halaman
        return view('produk', compact('produks'));
    }

    /**
     * Menampilkan halaman detail satu produk.
     */
    public function produkDetail($slug)
    {
        // Cari produk berdasarkan slug, jika tidak ada tampilkan 404
        $produk = Produk::where('slug', $slug)->firstOrFail();
        
        // Ambil 4 produk lain selain yang sedang dilihat
        $produksLain = Produk::where('id', '!=', $produk->id)->latest()->take(4)->get(); 
        
        return view('produk-detail', compact('produk', 'produksLain'));
    }

    // METHOD BARU UNTUK HALAMAN DAFTAR PAKET WISATA
    public function paketWisata()
    {
        $paket_wisatas = PaketWisata::latest()->paginate(6); // Menampilkan 6 paket per halaman
        return view('paket-wisata', compact('paket_wisatas'));
    }

    // METHOD BARU UNTUK HALAMAN DETAIL PAKET WISATA
    public function paketWisataDetail($slug)
    {
        $paket = PaketWisata::where('slug', $slug)->firstOrFail(); // Cari paket berdasarkan slug
        $paketsLain = PaketWisata::where('id', '!=', $paket->id)->latest()->take(4)->get(); // Ambil 4 paket lain
        return view('paket-wisata-detail', compact('paket', 'paketsLain'));
    }

    // METHOD BARU UNTUK HALAMAN KONTAK
    public function kontak()
    {
        return view('kontak');
    }

    // METHOD BARU UNTUK HALAMAN DAFTAR PENGURUS
    public function pengurus()
    {
        $pengurus = Pengurus::latest()->paginate(12); // Menampilkan 12 pengurus per halaman
        return view('pengurus', compact('pengurus'));
    }

    // METHOD BARU UNTUK HALAMAN DETAIL PENGURUS
    public function pengurusDetail($slug)
    {
        $p = Pengurus::where('slug', $slug)->firstOrFail(); // Cari pengurus berdasarkan slug
        return view('pengurus-detail', compact('p'));
    }

    // METHOD BARU UNTUK HALAMAN DAFTAR BERITA
    public function berita()
    {
        $beritas = Berita::latest()->paginate(6); // Menampilkan 6 berita per halaman
        return view('berita', compact('beritas'));
    }

    // METHOD BARU UNTUK HALAMAN DETAIL BERITA
    public function beritaDetail($slug)
    {
        $berita = Berita::where('slug', $slug)->firstOrFail();
        $beritasLain = Berita::where('id', '!=', $berita->id)->latest()->take(4)->get();
        return view('berita-detail', compact('berita', 'beritasLain'));
    }
}