<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
// Tambahkan dua facade ini untuk mengelola HTTP request dan file
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Berita>
 */
class BeritaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $judul = fake()->sentence(6);

        $isi = collect(fake()->paragraphs(mt_rand(10, 15)))
            ->map(fn ($p) => "<p>$p</p>")
            ->implode('');

        // -- LOGIKA BARU UNTUK GAMBAR --
        // 1. Definisikan nama file acak & path tujuan
        $imageName = Str::random(12) . '.jpg';
        $path = 'beritas/' . $imageName;

        // 2. Buat direktori jika belum ada
        if (!Storage::disk('public')->exists('beritas')) {
            Storage::disk('public')->makeDirectory('beritas');
        }

        // 3. Download gambar dari picsum.photos dan simpan ke storage
        $response = Http::get('https://picsum.photos/1280/720');
        Storage::disk('public')->put($path, $response->body());
        // -- SELESAI --

        return [
            'judul' => $judul,
            'isi' => $isi,
            // 4. Simpan path relatif gambar, BUKAN URL lengkap
            'thumbnail' => $path,
            'created_at' => fake()->dateTimeBetween('-1 year', 'now'),
            'updated_at' => now(),
        ];
    }
}