<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str; // 1. PASTIKAN BARIS INI ADA

class Berita extends Model
{
    use HasFactory;

    /**
     * Izinkan semua kolom diisi secara massal kecuali 'id'.
     * Ini lebih praktis daripada menggunakan $fillable.
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * 2. TAMBAHKAN SELURUH METHOD DI BAWAH INI
     * Method ini akan otomatis membuat atau memperbarui slug dari kolom 'judul'.
     */
    protected static function boot()
    {
        parent::boot();

        // Event ini berjalan SETIAP KALI berita BARU akan dibuat.
        static::creating(function ($berita) {
            // Membuat slug dari judul, contoh: "Judul Berita Baru" -> "judul-berita-baru"
            $berita->slug = Str::slug($berita->judul);
        });

        // Event ini berjalan SETIAP KALI berita yang SUDAH ADA akan di-update.
        static::updating(function ($berita) {
            // Cek jika field 'judul' berubah. Jika ya, buat ulang slug-nya.
            if ($berita->isDirty('judul')) {
                $berita->slug = Str::slug($berita->judul);
            }
        });
    }
}