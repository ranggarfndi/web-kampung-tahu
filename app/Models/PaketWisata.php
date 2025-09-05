<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class PaketWisata extends Model
{
    use HasFactory;

    protected $fillable = [
        'gambar',
        'nama',
        'deskripsi',
        'slug',
    ];

    protected static function boot()
    {
        parent::boot();

        // Saat create
        static::creating(function ($paket) {
            $paket->slug = Str::slug($paket->nama);
        });

        // Saat update nama
        static::updating(function ($paket) {
            if ($paket->isDirty('nama')) {
                $paket->slug = Str::slug($paket->nama);
            }
        });
    }
}
