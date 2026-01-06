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
        Schema::create('riwayat_diagnosas', function (Blueprint $table) {
            $table->id();
            $table->string('hasil_gangguan'); // Nama gangguan tertinggi
            $table->double('skor_persen');    // Nilai CF akhirnya
            $table->json('data_gejala');     // Gejala yang dipilih user (disimpan sebagai JSON)
            $table->timestamps();            // Ini otomatis menyimpan waktu diagnosa
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_diagnosas');
    }
};
