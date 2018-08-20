<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class crud_pemasukan extends Model
{
    //
    protected $fillable = ['jenis_barang','nama_barang','kode_barang','merk_barang','jml_barang'];
}
