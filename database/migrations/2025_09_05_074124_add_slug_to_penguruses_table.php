<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // Menggunakan nama tabel 'penguruses'
        Schema::table('penguruses', function (Blueprint $table) {
            $table->string('slug')->after('nama')->nullable()->unique();
        });
    }

    public function down()
    {
        // Menggunakan nama tabel 'penguruses'
        Schema::table('penguruses', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
    }
};