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
            'name' => 'admin',
            'email' => 'admin@kampungtahu.com',
            'password' => bcrypt('admin'),
            'is_admin' => true,
        ]);

        // PANGGIL BERITA SEEDER DI SINI
        // $this->call([
        //     BeritaSeeder::class,
        //     ProdukSeeder::class,
        //     PaketWisataSeeder::class,
        //     PengurusSeeder::class,
        // ]);
    }
}
