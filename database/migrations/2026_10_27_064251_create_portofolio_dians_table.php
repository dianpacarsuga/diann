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
        Schema::create('Portofolio_1049', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->string('jabatan');
        $table->text('deskripsi');
        $table->string('foto')->nullable();
        $table->string('email');
        $table->string('telepon');
        $table->string('alamat');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Portofolio_1049');
    }
};
