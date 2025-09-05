<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Pengurus extends Model
{
    use HasFactory;

    /**
     * Nama tabel yang terhubung dengan model ini.
     * @var string
     */
    protected $table = 'penguruses'; // <-- TAMBAHKAN BARIS INI

    /**
     * Izinkan semua kolom diisi massal kecuali 'id'.
     */
    protected $guarded = ['id'];

    /**
     * Method untuk otomatisasi slug.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($pengurus) {
            $pengurus->slug = Str::slug($pengurus->nama);
        });

        static::updating(function ($pengurus) {
            if ($pengurus->isDirty('nama')) {
                $pengurus->slug = Str::slug($pengurus->nama);
            }
        });
    }
}