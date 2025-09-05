<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Perintah ini akan menggunakan BeritaFactory untuk membuat 20 data berita.
        // Anda bisa mengubah angka 20 sesuai kebutuhan.
        \App\Models\Berita::factory(20)->create();
    }
}