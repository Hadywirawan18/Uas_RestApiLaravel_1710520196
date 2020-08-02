<?php

namespace App\Http\Controllers;
use App\Olahraga;

use Illuminate\Http\Request;

class ApiOlahragaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Olahraga::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = array(
            'nama_olahraga' => $request->nama_olahraga,
            'jenis_olahraga' => $request->jenis_olahraga,
            'jumlah_pemain' => $request->jumlah_pemain,
            'lokasi_main' => $request->lokasi_main,
            'alat_yang_digunakan' => $request->alat_yang_digunakan,
            'waktu_main' => $request->waktu_main
        );
        return Olahraga::create($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Olahraga::where('id',$id)->first();

        if(!empty($data)){
            return $data;
        }else{
            $res = ['message' => 'data tidak ada'];
            return response()->json($res, 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Olahraga::where('id',$id)->first();
        if(!empty($data)){
            $d = array(
                'nama_olahraga' => $request->get('nama_olahraga'),
                'jenis_olahraga' => $request->jenis_olahraga,
                'jumlah_pemain' => $request->jumlah_pemain,
                'lokasi_main' => $request->lokasi_main,
                'alat_yang_digunakan' => $request->alat_yang_digunakan,
                'waktu_main' => $request->waktu_main
            );
            return Olahraga::where('id', $id)->update($d);
        }else{
            $res = ['message' => 'data tidak ada'];
            return response()->json($res, 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Olahraga::where('id',$id)->delete();
        if ($data) {
            $res = ['message' => 'Data Berhasil di Hapus'];
            return response()->json($res,'404');
        }else{
            $res = ['message' => 'Hapus Data Gagal'];
            return response()->json($res,404);
        }
    }
}
