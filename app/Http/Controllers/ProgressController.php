<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Carbon\Carbon;
class ProgressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $pg = DB::table('pengadaan')
        ->select('id_pengadaan', 'pengadaan')
        ->where('id_pengadaan','=',$request->id)
        ->first();

        return view('modal.add_progress_persil', compact('pg'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //Get current time 
         $currentTime = Carbon::now()->timezone('Asia/Jakarta');

         try {
             DB::table('progress')->insert([
                'pengadaan_id' => $request->id,
                'tanggal' => $request->tanggal,
                'jenis_kegiatan' => $request->jenis_kegiatan,
                'nama_kegiatan' => $request->nama_kegiatan,
                'progress_selanjutnya' => $request->progress_selanjutnya,
                'created_at' => $currentTime
             ]);
            return response()->json(array('status' => 'success','msg'=>''),200);
         } catch (\PDOException $e) {
            return response()->json(array('status' => 'failed', 'msg' => $e->getMessage()), 200);
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

    public function showUploadDokumen(Request $request)
    {
        $id = $request->id;

        $pg = DB::table('progress')
        ->select('id_progress','tanggal','pengadaan_id')
        ->where('id_progress','=', $id)
        ->first();

        $dk = DB::table('dokumen_kegiatan')
        ->select()
        ->where('progress_id','=',$id)
        ->get();

        return view('modal.upload_doc_progress', compact('pg','dk'));
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
