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
        Schema::create('laporan_stoks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('gudang_id')->constrained('gudangs')->onDelete('cascade');
            $table->date('tanggal_laporan');
            $table->decimal('total_barang', 10, 2)->default(0);
            $table->decimal('total_kategori', 10, 2)->default(0);
            $table->decimal('barang_habis', 10, 2)->default(0);
            $table->decimal('barang_tersedia', 10, 2)->default(0);
            $table->text('catatan_laporan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan_stoks');
    }
};
