<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrudPemasukansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crud_pemasukans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('jenis_barang');
            $table->string('nama_barang');
            $table->string('kode_barang');
            $table->string('merk_barang');
            $table->integer('jml_barang');
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
        Schema::dropIfExists('crud_pemasukans');
    }
}
