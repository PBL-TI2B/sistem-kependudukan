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
        Schema::create('perangkat_desa', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->uuid('penduduk_id');
            $table->uuid('jabatan_id');

            $table->foreign('penduduk_id')->references('uuid')->on('penduduk')->onDelete('cascade');
            $table->foreign('jabatan_id')->references('uuid')->on('jabatan')->onDelete('cascade');

            $table->string('periode_menjabat', 50);
            $table->enum('status_keaktifan', ['aktif', 'nonaktif']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perangkat_desa');
    }
};
