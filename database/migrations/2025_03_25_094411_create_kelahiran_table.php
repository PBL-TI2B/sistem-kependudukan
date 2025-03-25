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
        Schema::create('kelahiran', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->uuid('penduduk_id');
            $table->string('anak_ke', 50);
            $table->string('berat', 50)->nullable();
            $table->string('panjang', 50)->nullable();
            $table->datetime('waktu_lahir')->nullable();
            $table->string('lokasi', 50)->nullable();
            $table->text('keterangan');

            $table->foreign('penduduk_id')->references('uuid')->on('penduduk')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelahiran');
    }
};
