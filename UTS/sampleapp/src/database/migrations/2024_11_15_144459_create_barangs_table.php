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
        Schema::create('barangs', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('nama_barang');
            $table->string('kategori');
            $table->decimal('jumlah', 8,)->default(0); 
            $table->foreignId('gudang_id')->constrained('gudangs')->onDelete('cascade');
            $table->string('kode_barang');
            $table->enum('status', ['tersedia', 'habis'])->default('habis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};
