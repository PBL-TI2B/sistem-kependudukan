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
        Schema::create('domisili', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->uuid('penduduk_id');
            $table->uuid('rt_id');
            $table->enum('status_tempat_tinggal', ['tetap', 'sementara']);

            $table->foreign('penduduk_id')->references('uuid')->on('penduduk')->onDelete('cascade');
            $table->foreign('rt_id')->references('uuid')->on('rt')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('domisili');
    }
};
