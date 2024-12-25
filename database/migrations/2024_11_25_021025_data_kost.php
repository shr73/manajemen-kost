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
        //
        Schema::create('kamar_kost', function (Blueprint $table) {
            $table->id('id_kamar'); // ID unik untuk setiap kamar
            $table->string('nomor_kamar', 10); // Nomor atau kode kamar
            $table->string('tipe_kamar', 50); // Tipe kamar (Single, Deluxe, VIP)
            $table->decimal('harga', 10, 2); // Harga sewa kamar
            $table->enum('status', ['Tersedia', 'Disewa'])->default('Tersedia'); // Status kamar
            $table->timestamps(); // created_at dan updated_at
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
