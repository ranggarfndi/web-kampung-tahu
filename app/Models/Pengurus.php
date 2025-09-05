<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Pengurus extends Model
{
    use HasFactory;

    protected $table = 'penguruses'; // tabel yang dipakai
    protected $guarded = ['id'];     // semua field bisa mass-assignment kecuali id

    // otomatis generate slug dari nama
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
