<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use File;

class PenawaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pn = DB::table('penawaran')
        ->select()
        ->get();

        return view('page.penawaran', compact('pn'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modal.tambah_penawaran');
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

            DB::table('penawaran')->insert([
                'nama' => $request->nama,
                'tgl_surat' => $request->tglSuratPenawaran,
                'perihal' => $request->perihal,
                'kecamatan' => $request->luas,
                'kelurahan' => $request->coordinate,
                'alamat' => $request->alamat,
                'latlng' => $request->latlng,
                'kecamatan' => $kecamatan,
                'kelurahan' => $kelurahan,
                'luas' => $request->luas,
                'penawaran' => $request->penawaran,
                'keterangan_progress' => $request->ketProgress,
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ]);
            
            $id = DB::getPdo()->lastInsertId();
            
            return response()->json(array("status" => 'success', 'msg' => $id), 200);
        } catch (\PDOException $e) {
            return response()->json(array("status" => 'failed', 'msg' => $e->getMessage()), 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $id = $request->id;

        $pw = DB::table('penawaran')
        ->select()
        ->where('id_penawaran','=',$id)
        ->first();

        $dp = DB::table('berkas_penawaran')
        ->select()
        ->where('penawaran_id','=',$id)
        ->get();

        $pp = DB::table('progress_penawaran')
        ->select()
        ->where('penawaran_id','=',$id)
        ->get();

        return view('modal.detail_penawaran', compact('pw','dp','pp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $id = $request->id;

        $pw = DB::table('penawaran')
        ->select()
        ->where('id_penawaran','=',$id)
        ->first();

        return view('modal.edit_penawaran', compact('pw'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;

        //Get current time to update the current time in updated_at column
        $currentTime = Carbon::now()->timezone('Asia/Jakarta');

        try {
            $pg = DB::table('penawaran')
            ->where('id_penawaran', $id)
            ->update([
                'pengadaan' => $request->pengadaan,
                'alamat' => $request->alamat,
                'luas' => $request->luas,
                'penetapan_lokasi' => $request->penetapanLokasi,
                'no_sk_penlok' => $request->noSkPenlok,
                'tgl_sk_penlok' => $request->tglSkPenlok,
                'masa_berlaku' => $request->masaBerlaku,
                'kode_kegiatan' => $request->kodeKegiatan,
                'perpanjangan_penetapan_lokasi' => $request->perpanjanganLokasi,
                'no_sk_perpanjangan_penlok' => $request->noSkPerpanjangan,
                'tgl_sk_perpanjangan_penlok' => $request->tglSkPerpanjangan,
                'masa_berlaku_perpanjangan' => $request->tglMasaBerlakuPerpanjangan,
                'kode_kegiatan' => $request->kodeKegiatan,
                'keterangan_kegiatan' => $request->keteranganKegiatan,
                'kode_rekening' => $request->kodeRekening,
                'keterangan_rekening' => $request->keteranganRekening,
                'latlng' => $request->latlng,
                'updated_at' => $currentTime
            ]);

            return response()->json(array("status" => 'success','msg'=>''),200);
        } catch (\PDOException $e) {
            return response()->json(array('status' => 'failed', 'msg' => $e->getMessage()), 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;

        try {
            //Set path
            $path = "upload/Penawaran/".$id;

            //Delete uploaded files data in berkas penawaran
            DB::table('dokumen_progress_penawaran')
            ->where('penawaran_id','=',$id)
            ->delete();

            //Delete data in berkas penawaran table
            DB::table('berkas_penawaran')
            ->where('penawaran_id','=',$id)
            ->delete();

            //Delete data in progress_penawaran table
            DB::table('progress_penawaran')
            ->where('penawaran_id','=',$id)
            ->delete();

            //Delete data in penawaran table
            DB::table('penawaran')
            ->where('id_penawaran','=',$id)
            ->delete();

            //Delete directory berkas penawaran
            File::deleteDirectory(public_path($path));

            return response()->json(array("status"=>"success","msg"=>"",200));
        } catch (\PDOException $e) {
            return response()->json(array("status"=>"failed","msg"=>$e->getMessage(),200));
        }
    }

    public function deleteProgressPenawaran(Request $request){
        $idProgressPenawaran = $request->id;
        $idPenawaran = $request->penawaran_id;

        try {
            //Set path
            $path = "upload/Penawaran/".$idPenawaran."/Progress Penawaran/".$idProgressPenawaran;

            //Delete uploaded files data in berkas penawaran
            DB::table('dokumen_progress_penawaran')
            ->where('progress_penawaran_id','=',$idProgressPenawaran)
            ->delete();

            //Delete data in progress_penawaran table
            DB::table('progress_penawaran')
            ->where('id_progress','=',$idProgressPenawaran)
            ->delete();

            //Delete directory berkas penawaran
            File::deleteDirectory(public_path($path));

            return response()->json(array("status"=>"success","msg"=>"",200));
        } catch (\PDOException $e) {
            return response()->json(array("status"=>"failed","msg"=>$e->getMessage(),200));
        }
    }

    public function showEditPIC(Request $request){
        $id = $request->id;

        $pw = DB::table('penawaran')
        ->select('id_penawaran','pic')
        ->where('id_penawaran', $id)
        ->first();

        return view('modal.edit_pic_penawaran', compact('pw'));
    }

    public function updatePic(Request $request){
        try {
            $id = $request->id;

            DB::table('penawaran')
            ->where('id_penawaran','=',$id)
            ->update([
                'pic' => $request->pic
            ]);
    
            return response()->json(array("status" => 'success','msg'=>''),200);
        } catch (\PDOException $e) {
            return response()->json(array("status" => 'failed','msg'=>$e),200);
        }
    }

    public function uploadBerkasPenawaran(Request $request){
        try {
            //Insert data to db
            $files = $request->file('files');

            //Get current time to update the current time in updated_at column
            $currentTime = Carbon::now()->timezone('Asia/Jakarta');
    
            //Create last id array
            $lastId = [];

            foreach($files as $value){
                 //Get filename
                $fileName = $value->getClientOriginalName();

                //Insert data to database
                DB::table('berkas_penawaran')
                ->insert([
                    'filename' => $fileName,
                    'created_at' => $currentTime,
                    'updated_at' => $currentTime,
                    'penawaran_id' => $request->id
                ]);

                //Get last id from the last inserted items
                $getLatId = DB::getPdo()->lastInsertId();
                
                //Push the lastest id in to the array
                array_push($lastId,$getLatId);

                //Set path
                $path = public_path("upload/Penawaran/".$request->id."/Dokumen Penawaran/");
                
                //Checking file directory path if path is doesnt exist move to the path.
                if (!File::isDirectory($path)) {
                    File::makeDirectory($path, 0777, true, true);
                    $value->move($path, $fileName);
                } else {
                    $value->move($path, $fileName);
                }
            }
            
            return response()->json(array('status'=>'success','msg'=>'','lastId'=>$lastId),200);
        } catch (\PDOException $e) {
            return response()->json(array('status'=>'failed','msg'=>$e->getMessage()),200);
        }
    }

    public function showTambahProgress(Request $request){
        $id = $request->id;

        $pr = DB::table('penawaran')
        ->select()
        ->where("id_penawaran","=", $id)
        ->first();

        return view('modal.add_progress_penawaran', compact('pr'));
    }

    public function addProgressPenawaran(Request $request){
        try {
            //Get current time to update the current time in updated_at column
            $currentTime = Carbon::now()->timezone('Asia/Jakarta');

            DB::table('progress_penawaran')
            ->insert([
                'jenis_kegiatan' => $request->jenis_kegiatan,
                'tgl_progress' => $request->tanggal,
                'nama_kegiatan' => $request->nama_kegiatan,
                'keterangan' => $request->keterangan,
                'penawaran_id' => $request->id,
                'created_at' => $currentTime,
                'updated_at' => $currentTime
            ]);

            return response()->json(array('status'=>'success','msg' => ''),200);
        } catch (\PDOException $e) {
            return response()->json(array('status'=>'failed','msg' => $e->getMessage()),200);
        }
    }

    public function showUploadDocProgressPenawaran(Request $request)
    {
        $id = $request->id;

        $pw = DB::table('progress_penawaran')
        ->select()
        ->where('id_progress','=',$id)
        ->first();

        $dp = DB::table('dokumen_progress_penawaran')
        ->select()
        ->where('progress_penawaran_id','=',$id)
        ->get();

        return view('modal.upload_doc_progress_penawaran',compact('pw','dp'));
    }

    public function uploadDocProgressPenawaran(Request $request){
        try {
            //Insert data to db
            $files = $request->file('files');

            //Get current time to update the current time in updated_at column
            $currentTime = Carbon::now()->timezone('Asia/Jakarta');
            
            $idPenawaran = $request->penawaran_id;

            //Last id array is used to store the last id
            $lastId =[];

            foreach($files as $value){
                //Get filename
                $fileName = $value->getClientOriginalName();

                //Insert data to database
                DB::table('dokumen_progress_penawaran')
                ->insert([
                    'filename' => $fileName,
                    'created_at' => $currentTime,
                    'updated_at' => $currentTime,
                    'progress_penawaran_id' => $request->id,
                    'penawaran_id' => $idPenawaran
                ]);

                //Get last id from the last inserted items
                $getLatId = DB::getPdo()->lastInsertId();
                
                //Push the lastest id in to the array
                array_push($lastId,$getLatId);  
    
                //Set path
                $path = public_path("upload/Penawaran/".$idPenawaran."/Progress Penawaran/".$request->id."/".$request->tanggal);
                
                //Checking file directory path if path is doesnt exist move to the path.
                if (!File::isDirectory($path)) {
                    File::makeDirectory($path, 0777, true, true);
                    $value->move($path, $fileName);
                } else {
                    $value->move($path, $fileName);
                }
            }
            
            return response()->json(array('status'=>'success','msg'=>"",'lastId'=>$lastId),200);
        } catch (\PDOException $e) {
            return response()->json(array('status'=>'failed','msg'=>$e->getMessage()),200);
        }
    }

    public function deleteDokumenPenawaran(Request $request){
        try {
            $id = $request->id;
            $filePath = $request->path;

            //Deleting files
            if (file_exists($filePath) == true) {
                File::delete($filePath);

                //Delete data in table dokumen progress penawaran
                DB::table('berkas_penawaran')
                ->where('id_berkas_penawaran','=',$id)
                ->delete();

                return response()->json(array(
                    'status' => 'success',
                    'msg' => 'Data berhasil dihapus',
                ), 200);
                
            } else {
                return response()->json(array(
                    'status' => 'failed',
                    'msg' => 'Path not found',
                ), 200);
            }

        } catch (\PDOException $e) {
            return response()->json(array(
                'status' => 'failed',
                'msg' => $e->getMessage(),
            ), 200);
        }
    }

    public function deleteDokumenProgressPenawaran(Request $request){
        try {
            $id = $request->id;
            $filePath = $request->path;

            //Deleting files
            if (file_exists($filePath) == true) {
                File::delete($filePath);

                //Delete data in table dokumen progress penawaran
                DB::table('dokumen_progress_penawaran')
                ->where('id_doc_prg_penawaran','=',$id)
                ->delete();

                return response()->json(array(
                    'status' => 'success',
                    'msg' => 'Data berhasil dihapus',
                ), 200);
                
            } else {
                return response()->json(array(
                    'status' => 'failed',
                    'msg' => 'Path not found',
                ), 200);
            }

        } catch (\PDOException $e) {
            return response()->json(array(
                'status' => 'failed',
                'msg' => $e->getMessage(),
            ), 200);
        }
    }

    public function updateRincianPembayaran(Request $request){
          try {
              $id = $request->id;
              //Get current time to update the current time in updated_at column
              $currentTime = Carbon::now()->timezone('Asia/Jakarta');

              DB::table('rincian_transaksi')
              ->where("persil_tanah_id","=",$id)
              ->update([
                  'kjpp' => $request->kjpp,
                  'nilai_uang_ganti_rugi' => $request->nilai_ganti_rugi,
                  'dari' => $request->dari,
                  'kepada' => $request->kepada,
                  'berdasarkan' => $request->berdasarkan,
                  'updated_at' => $currentTime,
              ]);
             
  
              return response()->json(array(
                  'status' => 'success',
                  'msg' => '',
              ), 200);
  
          } catch (\PDOException $e) {
              return response()->json(array(
                  'status' => 'failed',
                  'msg' => $e->getMessage(),
              ), 200);
          }
    }

    public function addPerincianPembayaran(Request $request){

        //Get current time to update the current time in updated_at column
        $currentTime = Carbon::now()->timezone('Asia/Jakarta');

        try {
            DB::table('rincian_transaksi')
            ->insert([
                'kjpp' => $request->kjpp,
                'nilai_uang_ganti_rugi' => $request->nilai_ganti_rugi,
                'dari' => $request->dari,
                'kepada' => $request->kepada,
                'berdasarkan' => $request->berdasarkan,
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
                'persil_tanah_id' => $request->id
            ]);

            return response()->json(array(
                'status' => 'success',
                'msg' => '',
            ), 200);

        } catch (\PDOException $e) {
            return response()->json(array(
                'status' => 'failed',
                'msg' => $e->getMessage(),
            ), 200);
        }
    }
}
