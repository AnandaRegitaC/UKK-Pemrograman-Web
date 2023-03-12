<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->id();
            $table->string('kode_buku')->nullable();
            $table->string('judul_buku')->nullable();
            $table->string('nama_pengarang')->nullable();
            $table->string('penerbit')->nullable();
            $table->string('sinopsis_buku')->nullable();
            $table->string('kategori_buku')->nullable();
            $table->string('gambar')->nullable();
            $table->integer('stok_buku')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buku');
    }
};
