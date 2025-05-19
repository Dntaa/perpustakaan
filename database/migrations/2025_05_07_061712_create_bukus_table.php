<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('bukus', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('kategori')->nullable();
            $table->string('pengarang');
            $table->string('penerbit')->nullable();
            $table->enum('status', ['Tersedia', 'Dipinjam'])->default('Tersedia');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bukus');  // Menghapus tabel bukus
    }
};
