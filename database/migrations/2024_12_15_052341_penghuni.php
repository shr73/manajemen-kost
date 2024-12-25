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
        Schema::create('penghuni_kost', function (Blueprint $table) {
            $table->id('id_penghuni');
            $table->string('nama_penghuni');
            $table->string('nik', 20);
            $table->text('alamat');
            $table->foreignId('id_kamar')->constrained('kamar')->onDelete('cascade');
            $table->string('bulan')->nullable();
            $table->enum('status', ['lunas', 'belum'])->default('belum');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('penghuni');

    }
};
