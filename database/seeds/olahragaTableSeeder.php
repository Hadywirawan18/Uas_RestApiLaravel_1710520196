<?php

use Illuminate\Database\Seeder;
use App\Olahraga;

class olahragaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array (

        'nama_olahraga' => 'Bulu Tangkis',
    	'jenis_olahraga' => 'Raket',
    	'jumlah_pemain' => 'dua orang pada sektor tunggal atau dua pasangan pada sektor ganda',
    	'lokasi_main' => 'Lapangan Bulu Tangkis',
    	'alat_yang_digunakan' => 'Raket, Bola Kok',
    	'waktu_main' => '45 menit (Tergantung Wasit)'
        );

        Olahraga::create($data);
    }
}
