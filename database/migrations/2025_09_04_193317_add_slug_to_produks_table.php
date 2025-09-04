<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Kode ini akan dijalankan saat migrasi
        Schema::table('produks', function (Blueprint $table) {
            // Menambahkan kolom 'slug' setelah kolom 'nama'
            // Dibuat nullable() dulu karena kita sudah punya data
            $table->string('slug')->after('nama')->nullable()->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Kode ini untuk membatalkan migrasi jika diperlukan
        Schema::table('produks', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
    }
};