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
        Schema::create('rt', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->string('nomor_rt', 50);
            $table->uuid('rw_id');
            $table->uuid('perangkat_id');
            
            $table->foreign('perangkat_id')->references('uuid')->on('perangkat_desa')->onDelete('cascade');
            $table->foreign('rw_id')->references('uuid')->on('rw')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rt');
    }
};
