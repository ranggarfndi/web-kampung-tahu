<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PengurusFactory extends Factory
{
    public function definition(): array
    {
        $nama = $this->faker->name();

        // generate file gambar
        $imageName = Str::random(12) . '.jpg';
        $path = 'penguruses/' . $imageName;

        // pastikan folder ada
        if (!Storage::disk('public')->exists('penguruses')) {
            Storage::disk('public')->makeDirectory('penguruses');
        }

        // download gambar random
        $response = Http::get('https://picsum.photos/600/600');
        Storage::disk('public')->put($path, $response->body());

        return [
            'nama'        => $nama,
            'jabatan'     => $this->faker->jobTitle(),
            'no_hp'       => $this->faker->phoneNumber(),
            'instagram'   => 'https://instagram.com/' . Str::slug($nama),
            'sosmed_lain' => $this->faker->url(),
            'gambar'      => $path,
            'created_at'  => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updated_at'  => now(),
        ];
    }
}
