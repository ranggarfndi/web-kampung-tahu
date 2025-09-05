<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PaketWisata>
 */
class PaketWisataFactory extends Factory
{
    public function definition(): array
    {
        $nama = $this->faker->unique()->words(3, true);

        // --- LOGIKA GAMBAR ---
        $imageName = Str::random(12) . '.jpg';
        $path = 'wisata/' . $imageName;   // simpan di folder 'wisata'

        // Buat folder kalau belum ada
        if (!Storage::disk('public')->exists('wisata')) {
            Storage::disk('public')->makeDirectory('wisata');
        }

        // Download gambar dummy dari picsum
        $response = Http::get('https://picsum.photos/800/800');
        Storage::disk('public')->put($path, $response->body());
        // --- END ---

        return [
            'nama'       => ucfirst($nama),
            'deskripsi'  => $this->faker->paragraph(4),
            'gambar'     => $path, // langsung simpan path relatif
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updated_at' => now(),
        ];
    }
}
