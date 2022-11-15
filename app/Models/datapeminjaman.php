<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class datapeminjaman extends Model
{
    protected $table = "datapeminjaman";
    protected $primarykey ="id";
    protected $fillable = ['id', 'Nim','Nama_Barang', 'Kode_Barang', 'Jumlah_Barang'];
}
