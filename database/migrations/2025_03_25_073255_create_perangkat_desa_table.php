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
            $table->string('periode_menjabat', 50);
            $table->enum('status_keaktifan', ['aktif', 'nonaktif']);

            $table->foreignId('penduduk_id')->constrained('penduduk')->onDelete('cascade');
            $table->foreignId('jabatan_id')->constrained('jabatan')->onDelete('cascade');
            
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
