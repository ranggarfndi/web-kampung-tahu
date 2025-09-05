<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // PANGGIL BERITA SEEDER DI SINI
        $this->call([
            BeritaSeeder::class,
            // Anda bisa menambahkan seeder lain di sini nanti, contoh:
            // ProdukSeeder::class,
        ]);
    }
}
