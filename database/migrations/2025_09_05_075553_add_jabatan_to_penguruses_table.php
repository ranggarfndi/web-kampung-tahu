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
        Schema::table('penguruses', function (Blueprint $table) {
            // Menambahkan kolom 'jabatan' setelah kolom 'nama'
            // Dibuat nullable() agar tidak error pada data yang sudah ada
            $table->string('jabatan')->after('nama')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('penguruses', function (Blueprint $table) {
            $table->dropColumn('jabatan');
        });
    }
};