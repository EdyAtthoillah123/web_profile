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
        Schema::create('profile', function (Blueprint $table) {
            $table->id('id');
            $table->string('nama');
            $table->string('ttl');
            $table->string('alamat');
            $table->string('Agama');
            $table->string('Kewarganegaraan');
            $table->string('no_hp');
            $table->string('email');
            $table->text('deskripsi')->nullable();
            $table->string('image')->nullable();
            $table->string('background')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile');
    }
};
