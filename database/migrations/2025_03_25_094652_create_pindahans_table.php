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
        Schema::create('pindahans', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->uuid('penduduk_id');
            $table->enum('status_pindahan', ['masuk', 'keluar']);
            $table->date('tanggal_pindah');
            $table->text('alamat_asal_tujuan')->nullable();
            
            $table->foreign('penduduk_id')->references('uuid')->on('penduduk')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pindahans');
    }
};
