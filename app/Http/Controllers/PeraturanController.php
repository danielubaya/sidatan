<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use File;

class PeraturanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pg = DB::table('peraturan')
        ->select()
        ->get();

        return view('page.peraturan',compact('pg'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modal.add_upload_peraturan');
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
            //Get file
            $file = $request->file('file');
            //Set file uploaded file path
            $path = public_path('upload/Peraturan');
            //Get filename
            $fileName = $file->getClientOriginalName();

            //Checking file directory path if path is doesnt exist move to the path.
            if (!File::isDirectory($path)) {
                File::makeDirectory($path, 0777, true, true);
                $file->move($path, $fileName);
            } else {
                $file->move($path, $fileName);
            }

            //Get current time to update the current time in updated_at and created_at column
            $currentTime = Carbon::now()->timezone('Asia/Jakarta');
            
            //Send all information to peraturan table
            DB::table('peraturan')->insert([
                'judul' => $request->judul,
                'tipe' => $request->tipe,
                'nomor_peraturan' => $request->no_peraturan,
                'tahun' => $request->tahun,
                'file_name' => $request->file_name,
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ]);

            //Get last inserted id
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
    public function edit(Request $request)
    {
        $id = $request->id;

        $pr = DB::table('peraturan')
        ->where('id_peraturan','=',$id)
        ->first();

        return view('modal.edit_data_peraturan',compact('pr'));
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
        try {
            $id = $request->id;
            //Get current time to update the current time in updated_at column
            $currentTime = Carbon::now()->timezone('Asia/Jakarta');

            DB::table('peraturan')
            ->where('id_peraturan','=',$id)
            ->update([
                'judul' => $request->judul,
                'tipe' => $request->tipe,
                'nomor_peraturan' => $request->nomorPeraturan,
                'tahun' => $request->tahunPeraturan,
                'updated_at' => $currentTime
            ]);

            return response()->json(array('status'=>'success','message'=>''));
        } catch (\PDOException $e) {
            return response()->json(array('status'=>'failed','message'=>$e->getMessage()));
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
        try {
            $filePath = $request->path;
            $id = $request->id;

            if (file_exists($filePath) == true) {
                File::delete($filePath);

                DB::table('peraturan')->where('id_peraturan', '=', $id)->delete();
                
                return response()->json(array(
                    'status' => 'success',
                    'msg' => 'Data berhasil dihapus',
                ), 200);
                
            } else {
                return response()->json(array(
                    'status' => 'failed',
                    'msg' => '',
                ), 200);
            }

        } catch (\PDOException $e) {
            return response()->json(array('message'=>'failed','message'=> $e->getMessage()));
        }
    }
}
