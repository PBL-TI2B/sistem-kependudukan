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
            $table->uuid('id')->primary();
            $table->char('penduduk_id', 16); // NIK
            $table->uuid('jabatan_id');
            $table->string('periode_menjabat');
            $table->enum('status_keaktifan', ['aktif', 'nonaktif']);
            $table->foreign('jabatan_id')->references('id')->on('jabatan')->onDelete('cascade');
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
