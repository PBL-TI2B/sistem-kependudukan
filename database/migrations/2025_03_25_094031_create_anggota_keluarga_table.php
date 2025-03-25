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
        Schema::create('anggota_keluarga', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->uuid('kk_id');
            $table->uuid('penduduk_id');
            $table->uuid('status_keluarga_id');

            $table->foreign('kk_id')->references('uuid')->on('kartu_keluarga')->onDelete('cascade');
            $table->foreign('penduduk_id')->references('uuid')->on('penduduk')->onDelete('cascade');
            $table->foreign('status_keluarga_id')->references('uuid')->on('status_keluarga')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggota_keluarga');
    }
};
