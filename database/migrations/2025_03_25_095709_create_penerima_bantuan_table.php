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
        Schema::create('penerima_bantuan', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->uuid('kurang_mampu_id');
            $table->uuid('bantuan_id');
            $table->enum('status', ['aktif', 'selesai', 'ditolak']);
            $table->date('tanggal_penerimaan');
            $table->text('keterangan')->nullable();

            $table->foreign('kurang_mampu_id')->references('uuid')->on('kurang_mampu')->cascadeOnDelete();
            $table->foreign('bantuan_id')->references('uuid')->on('bantuan')->cascadeOnDelete();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penerima_bantuan');
    }
};
