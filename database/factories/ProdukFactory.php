<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produk>
 */
class ProdukFactory extends Factory
{
    public function definition(): array
    {
        $nama = $this->faker->unique()->words(3, true);

        // -- LOGIKA BARU UNTUK GAMBAR (sama dengan BeritaFactory) --
        $imageName = Str::random(12) . '.jpg';
        $path = 'produks/' . $imageName;

        // Buat folder jika belum ada
        if (!Storage::disk('public')->exists('produks')) {
            Storage::disk('public')->makeDirectory('produks');
        }

        // Download gambar dummy dari picsum
        $response = Http::get('https://picsum.photos/640/480');
        Storage::disk('public')->put($path, $response->body());
        // -- END --

        return [
            'nama'        => ucfirst($nama),
            'deskripsi'   => $this->faker->paragraph(3),
            'bahan_bahan' => implode(', ', $this->faker->words(5)),
            'gambar'      => $path, // simpan path relatif
            'created_at'  => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updated_at'  => now(),
        ];
    }
}
