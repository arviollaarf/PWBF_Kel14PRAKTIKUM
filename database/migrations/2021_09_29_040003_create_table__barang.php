<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBarang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table__barang', function (Blueprint $table) {
            $table->id();
            $table -> string('kode_barang',5);
            $table -> string('nama_barang',20);
            $table -> string('stock_barang');
            $table -> string('harga_jual_barang');


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
        Schema::dropIfExists('table__barang');
    }
}
