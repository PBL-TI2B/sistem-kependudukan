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
        Schema::create('riwayat_bantuan', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->uuid('penerima_bantuan_id');
            $table->enum('status', ['diterima', 'belum diterima']);
            $table->date('tanggal_penerimaan');
            $table->text('keterangan')->nullable();

            $table->foreign('penerima_bantuan_id')->references('uuid')->on('penerima_bantuan')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_bantuan');
    }
};
