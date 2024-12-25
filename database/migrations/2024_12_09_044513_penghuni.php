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
        Schema::create('penghuni', function (Blueprint $table) {
            $table->id('id_penghuni'); 
            $table->string('nama', 255); 
            $table->string('jenis_kelamin', 10); 
            $table->string('pekerjaan', 255)->nullable(); 
            $table->enum('status_pernikahan', ['belum menikah', 'menikah', 'janda/duda']);
            $table->string('no_hp', 15);
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
