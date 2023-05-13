<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use File;
use DB;

class PengadaanTerbeliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $pg = DB::table('pengadaan')
        ->select('id_pengadaan','pengadaan','pic','tahapan','keterangan_tahapan', 'masa_berlaku', 'masa_berlaku_perpanjangan')
        ->where('jenis_pengadaan','=','Terbeli')
        ->get();

        return view('page.pengadaan_terbeli', compact('pg'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modal.tambah_pengadaan_terbeli');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Get current time to update the current time in updated_at column
        $currentTime = Carbon::now()->timezone('Asia/Jakarta');

        try {
            $kecamatan = implode(", ", $request->kecamatan);
            $kelurahan = implode(", ", $request->kelurahan);
            
            DB::table('pengadaan')->insert([
                'pengadaan' => $request->pengadaan,
                'opd' => $request->opd,
                'alamat' => $request->alamat,
                'luas' => $request->luas,
                'latlng' => $request->coordinate,
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
                'kecamatan' => $kecamatan,
                'kelurahan' => $kelurahan,
                'jenis_pengadaan' => 'Terbeli'
            ]);
            
            $id = DB::getPdo()->lastInsertId();
            
            return response()->json(array("status" => 'success','msg'=>$id),200);
        } catch (\PDOException $e) {
            return response()->json(array("status" => 'failed','msg'=>$e->getMessage()),200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
