<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use PDOException;
use File;
use Illuminate\Support\Collection;

class PersilController extends Controller
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
        $id = $request->id;

        $pg = DB::table('pengadaan')
        ->select(
            'id_pengadaan',
            'pengadaan'
        )
        ->where('id_pengadaan','=',$id)
        ->first();

        //Compact is used to create array from variables and their values
        return view('modal.add_pemilik_persil', compact('pg'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       try {
            //Get array length from sended data 
            $arrLength = count($request->nama_pemilik);

            //Get the array value
            $namaPemilik = $request->nama_pemilik;
            $kuasa = $request->kuasa;
            $alamatPemilik = $request->alamat_pemilik;
            $npwp = $request->npwp;
            $nopkp = $request->pkp;
            $nik = $request->nik;
            $namaBank = $request->nama_bank;
            $kantorCabangBank = $request->kantor_cabang_bank;
            $noRekening = $request->no_rekening;
            $atasNama = $request->atas_nama;
            $id = $request->id;

            //Insert into database with selected index
            for($i=0;$i<$arrLength; $i++){
                DB::table('pemilik_tanah')
                ->insert([
                    'nama_pemilik' => $namaPemilik[$i],
                    'kuasa' => $kuasa[$i],
                    'npwp' => $npwp[$i],
                    'no_pkp' => $nopkp[$i],
                    'nik' => $nik[$i],
                    'alamat_pemilik' => $alamatPemilik[$i],
                    'nama_bank' => $namaBank[$i],
                    'kantor_cabang_bank' => $kantorCabangBank[$i],
                    'no_rekening' => $noRekening[$i],
                    'atas_nama' => $atasNama[$i],
                    'persil_tanah_id' => $id
                ]);    
            }

            return response()->json(array("status" => 'success','msg'=>''),200);
       } catch (\PDOException $e) {
            return response()->json(array('status'=>'failed','msg'=>$e->getMessage()), 200);
       }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $response)
    {
        $id = $response->id;

        //Get Data From Pemilik Tanah Table
        $pt = DB::table('pemilik_tanah')
        ->select()
        ->where('persil_tanah_id','=',$id)
        ->get();

        //Get Data From Persil Tanah Table
        $st = DB::table('persil_tanah')
        ->select()
        ->where('id_persil_tanah','=', $id)
        ->first();

        return view('modal.detail_persil', compact('pt','st'));
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

    public function addPersilTanah(Request $request)
    {
        try {
            DB::table('persil_tanah')
            ->insert([
                'alas_hak' => $request->alas_hak,
                'kecamatan' => $request->kecamatan,
                'kelurahan' => $request->kelurahan,
                'no_pbb' => $request->no_pbb,
                'kondisi_tanah' => $request->kondisi_tanah,
                'nib' => $request->nib,
                'luas' => $request->luas,
                'keterangan' => $request->keterangan,
                'pengadaan_id' => $request->pengadaan_id,
                'kode_persil' => $request->kode_persil
            ]);

            $id = DB::getPdo()->lastInsertId();
    
            return response()->json(array("status" => "success", "msg" => $id), 200);
        } catch (\PDOException $e) {
            return response()->json(array("status" => "failed", "msg" => $e->getMessage()),200);
        }   
    }

    public function showRincianPembayaran(Request $request){
        //Get ID
        $id = $request->id;
        $idPersil = $request->id_persil;

        //Get pendadaan table
        $kg = DB::table('pengadaan')
        ->select()
        ->where('id_pengadaan', '=', $id)
        ->first();

        //Get Persil tanah table
        $pt = DB::table('persil_tanah')
        ->select()
        ->where('id_persil_tanah','=',$idPersil)
        ->first();

        //Get pemilik tanah table
        $pr = DB::table('pemilik_tanah')
        ->select()
        ->where('persil_tanah_id','=',$idPersil)
        ->get();

        //Get rincian transaksi table
        $rt = DB::table('rincian_transaksi')
        ->select()
        ->where('persil_tanah_id','=',$idPersil)
        ->first();

        //If data rincian transaksi querry not found create a null object
        if(empty($rt)){
            $rt = new \stdClass();
            $rt->id_rincian_transaksi = null;
            $rt->kjpp = null;
            $rt->nilai_uang_ganti_rugi = null;
            $rt->dari = null;
            $rt->kepada = null;
            $rt->berdasarkan = null;
            $rt->created_at = null;
            $rt->updated_at = null;
            $rt->persil_tanah_id = null;
        }

        // //Get pemilik tanah riwayat transaksi table
        // $rt = DB::table('rincian_transaksi')
        // ->select()
        // ->where('persil_tanah_id','=',$idPersil)
        // ->get();

        $rp = DB::table('riwayat_peralihan')
        ->select()
        ->where('persil_tanah_id','=',$idPersil)
        ->get();
        
        return view('modal.perincian_pembayaran', compact('kg','pr','pt','rt','rp'));
    }

    public function showUploadDocPersil(Request $request){
        //Get request id
        $id = $request->id;

        //Get pt persil tanah table
        $pt = DB::table('persil_tanah')
        ->select()
        ->where('id_persil_tanah','=',$id)
        ->first();

        //Get dokumen persil tanah table
        $dp = DB::table('dokumen_persil')
        ->select()
        ->where('persil_tanah_id','=',$id)
        ->get();

        return view('modal.upload_doc_persil', compact('pt','dp'));
    }

    public function addRiwayatPeralihan(Request $request){
        try {
            //Get array length from sended data 
            $arrLength = count($request->riwayat_peralihan);
            $id = $request->id;

            //Get request data from riwayat peralihan
            $riwayatPeralihan = $request->riwayat_peralihan;
            $persentasePph = $request->persentase_pph;
            $totalPph=$request->total_pph;
            $nilaiTransaksiPph = $request->nilai_transaksi_pph;
            $keteranganPeraturanPph = $request->keterangan_peraturan_pph;
            $persentaseBphtb = $request->persentase_bphtb;
            $nilaiTransaksiBphtb = $request->nilai_transaksi_bphtb;
            $totalBphtb = $request->total_bphtb;
            $keteranganPeraturanBphtb = $request->keterangan_peraturan_bphtb;
            $keteranganPpn = $request->keterangan_ppn;
            $nilaiPpn = $request->nilai_ppn;
            $totalPpn = $request->total_ppn;
            $keteranganPeraturanPpn = $request->keterangan_peraturan_ppn;

            //Get current time to update the current time in updated_at column
            $currentTime = Carbon::now()->timezone('Asia/Jakarta');
            DB::table('riwayat_peralihan')->where('persil_tanah_id',$id)->delete();
            for($i=0;$i<$arrLength; $i++){
                DB::table('riwayat_peralihan')
                ->insert([
                    'riwayat_peralihan' => $riwayatPeralihan[$i], 
                    'persentase_pph' => $persentasePph[$i],
                    'nilai_transaksi_pph' => $nilaiTransaksiPph[$i],
                    'total_pph' => $totalPph[$i],
                    'ket_peraturan_pph' => $keteranganPeraturanPph[$i],
                    'persentase_bphtb' => $persentaseBphtb[$i],
                    'nilai_transaksi_bphtb' => $nilaiTransaksiBphtb[$i],
                    'total_bphtb' => $totalBphtb[$i],
                    'ket_peraturan_bphtb' => $keteranganPeraturanBphtb[$i],
                    'ket_ppn' => $keteranganPpn[$i],
                    'ppn' => $nilaiPpn[$i],
                    'total_ppn' => $totalPpn[$i],
                    'ket_peraturan_ppn' => $keteranganPeraturanPpn[$i],
                    'persil_tanah_id'=> $id,
                    'created_at' => $currentTime,
                    'updated_at' => $currentTime
                ]);
            }
            
            return response()->json(array('status'=>'success','msg'=>''), 200);
        } catch (\PDOException $e) {
            return response()->json(array('status'=>'failed','msg'=>$e->getMessage()),200);
        }
    }

    public function uploadDokumenPersil(Request $request){
        
        try {
            //Insert data to db
            $files = $request->file('files');

            //Get current time to update the current time in updated_at column
            $currentTime = Carbon::now()->timezone('Asia/Jakarta');
    
            foreach($files as $value){
                 //Get filename
                $fileName = $value->getClientOriginalName();

                //Insert data to database
                DB::table('dokumen_persil')
                ->insert([
                    'filename' => $fileName,
                    'created_at' => $currentTime,
                    'updated_at' => $currentTime,
                    'persil_tanah_id' => $request->id
                ]);
    
                //Set path
                $path = public_path("upload/Pengadaan/".$request->pengadaan_id."/Dokumen Persil/".$request->id);
                
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
