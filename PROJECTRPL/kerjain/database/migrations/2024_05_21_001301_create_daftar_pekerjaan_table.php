<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('daftar_pekerjaan', function (Blueprint $table) {
            $table->id();
            $table->string('judul_pekerjaan');
            $table->string('kota');
            $table->string('jenis_pekerjaan');
            $table->string('waktu_bekerja');
            $table->string('gaji');
            $table->string('deskripsi_pekerjaan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftar_pekerjaan');
    }
};
