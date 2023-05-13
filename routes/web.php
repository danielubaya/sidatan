<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::middleware(['auth'])->group(function () {

    //Route URL Page
    Route::get('/dokumen/perencanaan', [App\Http\Controllers\PerencanaanController::class, 'index']);
    Route::get('/dokumen/persiapan', [App\Http\Controllers\PersiapanController::class, 'index']);
    Route::get('/dokumen/pelaksanaan', [App\Http\Controllers\PelaksanaanController::class, 'index']);
    Route::get('/dokumen/penyerahan', [App\Http\Controllers\PenyerahanController::class, 'index']);
    Route::get('/dokumen/penawaran', [App\Http\Controllers\PenawaranController::class, 'index']);
    Route::get('/dokumen/peraturan', [App\Http\Controllers\PeraturanController::class, 'index']);
    Route::get('/dokumen/peta_lokasi', [App\Http\Controllers\PetaController::class, 'index']);
    Route::get('/dokumen/upload_shp', [App\Http\Controllers\UploadShpController::class, 'index']);
    Route::get('/dokumen/pengadaan_terbeli', [App\Http\Controllers\PengadaanTerbeliController::class, 'index']);

    //Add Data
    Route::post('add_progress_persil/{id}', [App\Http\Controllers\ProgressController::class, 'store']);
    Route::post('add_pengadaan', [App\Http\Controllers\PengadaanController::class, 'store']);
    Route::post('add_pengadaan_terbeli', [App\Http\Controllers\PengadaanTerbeliController::class, 'store']);
    Route::post('add_penawaran',[App\Http\Controllers\PenawaranController::class, 'store']);
    Route::post('add_pemilik_persil/{id}',[App\Http\Controllers\PersilController::class, 'store']);
    Route::post('add_persil_tanah', [App\Http\Controllers\PersilController::class, 'addPersilTanah']);
    Route::post('add_progress_penawaran/{id}', [App\Http\Controllers\PenawaranController::class, 'addProgressPenawaran']);
    Route::post('add_rincian_transaksi/{id}', [App\Http\Controllers\PenawaranController::class, 'addPerincianPembayaran']);
    Route::post('add_riwayat_peralihan/{id}', [App\Http\Controllers\PersilController::class, 'addRiwayatPeralihan']);

    //Upload
    Route::post('upload_peraturan', [App\Http\Controllers\PeraturanController::class,'store']);
    Route::post('upload_dokumen_pendukung/{id}',[App\Http\Controllers\PengadaanController::class, 'uploadDokumenPendukung']);
    Route::post('upload_dokumen_kegiatan/{id}',[App\Http\Controllers\PengadaanController::class, 'uploadDokumenKegiatan']);
    Route::post('upload_dokumen_persil/{id}',[App\Http\Controllers\PersilController::class, 'uploadDokumenPersil']);
    Route::post('upload_dokumen_penawaran/{id}',[App\Http\Controllers\PenawaranController::class, 'uploadBerkasPenawaran']);
    Route::post('upload_dokumen_progress_penawaran/{id}',[App\Http\Controllers\PenawaranController::class, 'uploadDocProgressPenawaran']);

    //Show modal
    Route::get('show_detail/{id}',[App\Http\Controllers\PengadaanController::class,'show']);
    Route::get('show_edit_pic/{id}',[App\Http\Controllers\PengadaanController::class,'showModalEditPIC']);
    Route::get('show_edit_pengadaan/{id}',[App\Http\Controllers\PengadaanController::class,'showModalEditPengadaan']);
    Route::get('show_update_tahapan/{id}', [App\Http\Controllers\PengadaanController::class,'showModalUpdateTahapan']);
    Route::get('show_add_persil/{id}', [App\Http\Controllers\PersilController::class,'create']);
    Route::get('show_add_progress/{id}', [App\Http\Controllers\ProgressController::class,'create']);
    Route::get('show_upload_doc_kegiatan/{id}', [App\Http\Controllers\ProgressController::class,'showUploadDokumen']);
    Route::get('show_add_pengadaan',[App\Http\Controllers\PengadaanController::class,'create']);
    Route::get('show_add_peraturan',[App\Http\Controllers\PeraturanController::class,'create']);
    Route::get('show_upload_data_pendukung/{id}',[App\Http\Controllers\DataPendukungController::class,'show']);
    Route::get('show_detail_penawaran/{id}', [App\Http\Controllers\PenawaranController::class,'show']);
    Route::get('show_detail_pemilik_persil/{id}', [App\Http\Controllers\PersilController::class,'show']);
    Route::get('show_perincian_pembayaran/{id}', [App\Http\Controllers\PersilController::class,'showRincianPembayaran']);
    Route::get('show_add_tambah_penawaran', [App\Http\Controllers\PenawaranController::class,'create']);
    Route::get('show_edit_penawaran/{id}', [App\Http\Controllers\PenawaranController::class,'edit']);
    Route::get('show_edit_pic_penawaran/{id}', [App\Http\Controllers\PenawaranController::class,'showEditPIC']);
    Route::get('show_upload_doc_persil/{id}', [App\Http\Controllers\PersilController::class,'showUploadDocPersil']);
    Route::get('show_add_tambah_progress/{id}', [App\Http\Controllers\PenawaranController::class,'showTambahProgress']);
    Route::get('show_upload_doc_progress_penawaran/{id}', [App\Http\Controllers\PenawaranController::class,'showUploadDocProgressPenawaran']);
    Route::get('show_modal_add_pengadaan_terbeli', [App\Http\Controllers\PengadaanTerbeliController::class,'create']);
    Route::get('show_modal_edit_data_peraturan/{id}',[App\Http\Controllers\PeraturanController::class,'edit']);

    //Route PUT
    Route::put('update_pengadaans/{id}',[App\Http\Controllers\PengadaanController::class,'update']);
    Route::put('update_tahapan/{id}', [App\Http\Controllers\PengadaanController::class,'updateTahapan']);
    Route::put('update_pic/{id}', [App\Http\Controllers\PengadaanController::class,'updatePic']);
    Route::put('update_pic_penawaran/{id}', [App\Http\Controllers\PenawaranController::class, 'updatePIC']);
    Route::put('update_penawaran/{id}', [App\Http\Controllers\PenawaranController::class,'update']);
    Route::put('update_peraturan/{id}', [App\Http\Controllers\PeraturanController::class,'update']);
    Route::put('update_rincian_pembayaran/{id}',[App\Http\Controllers\PenawaranController::class,'updateRincianPembayaran'] );
    
    //Route delete
    Route::post('delete_peraturan/{id}', [App\Http\Controllers\PeraturanController::class,'destroy']);
    Route::post('delete_dokumen_penawaran/{id}', [App\Http\Controllers\PenawaranController::class,'deleteDokumenPenawaran']);
    Route::post('delete_dokumen_progress_penawaran/{id}', [App\Http\Controllers\PenawaranController::class,'deleteDokumenProgressPenawaran']);
    Route::post('delete_progress_penawaran/{id}', [App\Http\Controllers\PenawaranController::class,'deleteProgressPenawaran']);
    Route::post('delete_penawaran/{id}', [App\Http\Controllers\PenawaranController::class,'destroy']);

    Route::get('/home', [App\Http\Controllers\PengadaanController::class, 'index'])->name('home');    
});
