<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Olahraga extends Model
{
    protected $table = 'olahraga';

    //nama colom di db
    protected $fillable = [
    	'nama_olahraga',
    	'jenis_olahraga',
    	'jumlah_pemain',
    	'lokasi_main',
    	'alat_yang_digunakan',
    	'waktu_main'
    ];
}
