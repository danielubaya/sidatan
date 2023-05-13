<?php

namespace App\Http\Controllers;

use App\Models\Pengadaan;
use Illuminate\Http\Request;
use DB;
use App\Models\Perumahan;
use Carbon\Carbon;
use File;

class PengadaanController extends Controller
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
        ->where('jenis_pengadaan','=','Berjalan')
        ->get();

        return view('home', compact('pg'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modal.tambah_pengadaan');
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
                'jenis_pengadaan' => 'Berjalan'
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
        $pg = DB::table('pengadaan')
        ->select(
            'id_pengadaan',
            'pengadaan',
            'opd',
            'alamat',
            'luas',
            'penetapan_lokasi',
            'no_sk_penlok',
            'tgl_sk_penlok',
            'masa_berlaku',
            'kode_kegiatan',
            'perpanjangan_penetapan_lokasi',
            'no_sk_perpanjangan_penlok',
            'tgl_sk_perpanjangan_penlok',
            'masa_berlaku_perpanjangan',
            'kode_kegiatan',
            'keterangan_kegiatan',
            'kode_rekening',
            'keterangan_rekening',
            'latlng',
            'perpanjangan_penetapan_lokasi',
            'no_sk_perpanjangan_penlok',
            'tgl_sk_perpanjangan_penlok',
            'masa_berlaku_perpanjangan',
            'kecamatan',
            'kelurahan',
            'penerbit'
            )
        ->where('id_pengadaan', '=', $id)
        ->first();

        $pr = DB::table('progress')
        ->where('pengadaan_id','=',$id)
        ->get();

        $dp = DB::table('data_pendukung')
        ->where('pengadaan_id','=',$id)
        ->get();

        $pt = DB::table('persil_tanah')
        ->select('persil_tanah.id_persil_tanah', 'persil_tanah.kode_persil', DB::raw("string_agg(pemilik_tanah.nama_pemilik, ', ') AS nama_pemilik_list"))
        ->join('pemilik_tanah','persil_tanah.id_persil_tanah','=','pemilik_tanah.persil_tanah_id')
        ->where('pengadaan_id', '=', $id)
        ->groupBy('id_persil_tanah')
        ->get();

        return view('modal.detail', compact('pg','pr','dp','pt'));
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
        //Get current time to update the current time in updated_at column
        $currentTime = Carbon::now()->timezone('Asia/Jakarta');

        try {
            $pg = DB::table('pengadaan')
            ->where('id_pengadaan', $id)
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
                'updated_at' => $currentTime,
                'penerbit' => $request->penerbit
            ]);
            
            return response()->json(array("status" => 'success','msg'=>''),200);
        } catch (\PDOException $e) {
            return response()->json(array('status' => 'failed', 'msg' => $e->getMessage()), 400);
        }
    }

    public function updateTahapan(Request $request, $id)
    {
        //Get current time to update the current time in updated_at column
        $currentTime = Carbon::now()->timezone('Asia/Jakarta');

        try {
            $pg = DB::table('pengadaan')
            ->where('id_pengadaan', $id)
            ->update([
               'tahapan' => $request->tahapan,
               'keterangan_tahapan' => $request->keterangan,
               'updated_at' => $currentTime
            ]);

            return response()->json(array("status" => 'success','msg'=>''),200);
        } catch (\PDOException $e) {
            return response()->json(array('status' => 'failed', 'msg' => $e->getMessage()), 400);
        }
    }

    public function updatePIC(Request $request, $id)
    {
        //Get current time to update the current time in updated_at column
        $currentTime = Carbon::now()->timezone('Asia/Jakarta');

        try {
            $pg = DB::table('pengadaan')
            ->where('id_pengadaan', $id)
            ->update([
                'pic' => $request->pic,
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
    public function destroy($id)
    {
        //
    }

    /*
        Show Modal Detail
    */
    public function showModalDetail(Request $request){
        return view('modal.detail');
    }

    //Show modal edit PIC
    public function showModalEditPIC(Request $request){
        $id = $request->id;

        $pc = DB::table('pengadaan')
            ->select('pic','id_pengadaan')
            ->where('id_pengadaan','=',$id)
            ->first();

        return view('modal.edit_pic', compact('pc'));
    }

    //Show modal update tahapan
    public function showModalUpdateTahapan(Request $request){
        $id = $request->id;

        $pg = DB::table('pengadaan')
        ->select('tahapan','id_pengadaan','keterangan_tahapan')
        ->where('id_pengadaan','=',$id)
        ->first();

        return view('modal.update_tahapan', compact('pg'));
    }

    public function showModalPerincianPembayaran(Request $request){
        $id = $request->id;

        return view('modal.perincian_pembayaran');
    }

     //Show modal edit PIC
     public function showModalEditPengadaan(Request $request){
        $id = $request->id;

        $pg = DB::table('pengadaan')
        ->select(
            'id_pengadaan',
            'pengadaan',
            'opd',
            'alamat',
            'luas',
            'penetapan_lokasi',
            'no_sk_penlok',
            'tgl_sk_penlok',
            'masa_berlaku',
            'kode_kegiatan',
            'perpanjangan_penetapan_lokasi',
            'no_sk_perpanjangan_penlok',
            'tgl_sk_perpanjangan_penlok',
            'masa_berlaku_perpanjangan',
            'kode_kegiatan',
            'keterangan_kegiatan',
            'kode_rekening',
            'keterangan_rekening',
            'latlng',
            'kecamatan',
            'kelurahan'
            )
        ->where('id_pengadaan', '=', $id)
        ->first();

        return view('modal.edit_pengadaan', compact('pg'));
    }

    public function uploadDokumenPendukung(Request $request){
        try {
            $id = $request->id;
        
            //Get file
            $file = $request->file('file');
            //Set file uploaded file path
            $path = public_path('upload/Pengadaan/'.$id.'/Dokumen Pendukung');
            //Get filename
            $fileName = $file->getClientOriginalName();
    
            //Checking file directory path if path is doesnt exist move to the path.
            if (!File::isDirectory($path)) {
                File::makeDirectory($path, 0777, true, true);
                $file->move($path, $fileName);
            } else {
                $file->move($path, $fileName);
            }
            
            //Get current time to update the current time in updated_at column
            $currentTime = Carbon::now()->timezone('Asia/Jakarta');

            //Insert data to database 
            DB::table('data_pendukung')
            ->insert([
                'nama_berkas' => $request->nama_berkas,
                'created_at' => $currentTime,
                'updated_at' => $currentTime
            ]);

            $lastId = DB::getPdo()->lastInsertId();

            return response()->json(array('status'=>'success','msg'=>$lastId));
        } catch (\PDOException $e) {
            return response()->json(array('status'=>'failed','msg'=>$e->getMessage()));
        }
    }

    public function uploadDokumenKegiatan(Request $request){
        try {
            //Insert data to db
            $files = $request->file('files');

            //Get current time to update the current time in updated_at column
            $currentTime = Carbon::now()->timezone('Asia/Jakarta');
    
            foreach($files as $value){
                 //Get filename
                $fileName = $value->getClientOriginalName();

                //Insert data to database
                DB::table('dokumen_kegiatan')
                ->insert([
                    'tanggal' => $request->tanggal,
                    'filename' => $fileName,
                    'progress_id' => $request->id,
                    'created_at' => $currentTime,
                    'updated_at' => $currentTime,
                    'pengadaan_id' => $request->pengadaan_id
                ]);
    
                //Set path
                $path = public_path("upload/Pengadaan/".$request->pengadaan_id."/Dokumen Kegiatan/".$request->id.'/'.$request->tanggal);
               
                //Checking file directory path if path is doesnt exist move to the path.
                if (!File::isDirectory($path)) {
                    File::makeDirectory($path, 0777, true, true);
                    $value->move($path, $fileName);
                } else {
                    $value->move($path, $fileName);
                }
            }
            
            return response()->json(array('status'=>'success','msg'=>""),200);
        } catch (\PDOException $e) {
            return response()->json(array('status'=>'failed','msg'=>$e->getMessage()),200);
        }
    }


}
