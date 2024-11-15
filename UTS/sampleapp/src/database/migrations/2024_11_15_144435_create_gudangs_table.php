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
        Schema::create('gudangs', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('nama_gudang');
            $table->string('lokasi');
            $table->decimal('kapasitas', 8)->default(0);
            $table->decimal('kapasitas_terpakai', 8)->default(0);
            $table->enum('status', ['aktif', 'non aktif'])->default('aktif');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gudangs');
    }
};