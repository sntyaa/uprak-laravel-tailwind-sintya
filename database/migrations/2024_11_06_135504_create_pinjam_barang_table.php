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
        Schema::create('pinjam_barang', function (Blueprint $table) {
            $table->id();
            $table->integer('id_pinjam');
            $table->string('peminjam');
            $table->date('tgl_pinjam');
            $table->integer('id_barang');
            $table->string('nama_barang');
            $table->integer('jml_barang');
            $table->date('tgl_kembali');
            $table->string('kondisi');
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
        Schema::dropIfExists('pinjam_barang');
    }
};
