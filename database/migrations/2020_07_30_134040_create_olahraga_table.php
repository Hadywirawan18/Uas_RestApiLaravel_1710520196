<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOlahragaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('olahraga', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_olahraga');
            $table->string('jenis_olahraga');
            $table->string('jumlah_pemain');
            $table->string('lokasi_main');
            $table->string('alat_yang_digunakan');
            $table->string('waktu_main');
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
        Schema::dropIfExists('olahraga');
    }
}
