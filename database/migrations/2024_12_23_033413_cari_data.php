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
        Schema::create('cari_data', function (Blueprint $table) {
            $table->id('id');  
            $table->string('nama_penghuni', 255);
            $table->string('nama_kamar', 255); 
            $table->id('id_pembayaran', 255);
            $table->string('status', 255);
            $table->timestamps();   
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
