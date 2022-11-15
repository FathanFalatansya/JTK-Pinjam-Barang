<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatapeminjamenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datapeminjaman', function (Blueprint $table) {
            $table->id();
            $table->string('Nim', 9);
            $table->string('Nama_Barang', 30);
            $table->string('Kode_Barang', 9);
            $table->string('Jumlah_Barang', 3);
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
        Schema::dropIfExists('datapeminjamen');
    }
}
