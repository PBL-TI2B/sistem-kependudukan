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
        Schema::create('penduduk', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->index('uuid');
            $table->string('nik', 16)->unique();
            $table->string('nama_lengkap', 100);
            $table->string('foto', 100)->nullable();
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('tempat_lahir', 50);
            $table->date('tanggal_lahir');
            $table->string('agama', 20);
            $table->string('gol_darah', 10)->nullable();
            $table->enum('status_perkawinan', ['kawin', 'belum kawin']);
            $table->string('tinggi_badan', 20)->nullable();
            $table->enum('status', ['hidup', 'mati']);
        
            $table->uuid('ibu_id')->nullable();
            $table->uuid('ayah_id')->nullable();
        
            $table->foreign('ibu_id')->references('uuid')->on('penduduk')->onDelete('set null');
            $table->foreign('ayah_id')->references('uuid')->on('penduduk')->onDelete('set null');
        
            $table->timestamps();
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penduduk');
    }
};
