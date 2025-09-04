<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = [
        'gambar',
        'nama',
        'slug',
        'deskripsi',
        'bahan_bahan',
    ];

    protected static function boot()
    {
        parent::boot();

        // Event ini berjalan SETIAP KALI produk BARU akan dibuat.
        static::creating(function ($produk) {
            // Membuat slug dari nama produk, contoh: "Tahu Sutra Spesial" -> "tahu-sutra-spesial"
            $produk->slug = Str::slug($produk->nama);
        });

        // Event ini berjalan SETIAP KALI produk yang SUDAH ADA akan di-update.
        static::updating(function ($produk) {
            // Cek jika field 'nama' berubah. Jika ya, buat ulang slug-nya.
            if ($produk->isDirty('nama')) {
                $produk->slug = Str::slug($produk->nama);
            }
        });
    }
}