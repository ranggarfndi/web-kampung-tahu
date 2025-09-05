<?php
// database/migrations/xxxx_xx_xx_xxxxxx_add_slug_to_beritas_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('beritas', function (Blueprint $table) {
            $table->string('slug')->after('judul')->nullable()->unique();
        });
    }

    public function down()
    {
        Schema::table('beritas', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
    }
};