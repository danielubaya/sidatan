@extends('layouts.dashboard')

@section('breadcrumb')
<div class="mt-lg-4">
     <ol class="breadcrumb p-lg-0">
          <li class="breadcrumb-item"><a href="javascript: void(0);">Dokumen</a></li>
          <li class="breadcrumb-item active">Pengadaan Terbeli</li>
     </ol>
</div>
@endsection

@section('header')
<div>
     <h5 class="font-size-18">Pengadaan Terbeli</h5>
     <p> Berikut merupakan tampilan dari data pengadaan terbeli </p>
</div>
@endsection

@section('main-content')

<div class="row">
     <div class="col-12">
          <button type="button" class="btn btn-primary waves-effect waves-light mb-4" data-bs-toggle="modal" data-bs-target="#modalAddPengadaanTerbeli" onclick="showModalPengadaanTerbeli()">
               <i class="bx bx-plus font-size-16 align-middle me-2"></i>Tambah Pengadaan Terbeli Baru
          </button>
          <div class="card">
               <div class="card-body">
                    <table id="dataTableHome" class="table dt-responsive w-100">
                         <thead>
                              <tr>
                                   <th class="sorting sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1">ID</th>
                                   <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1">Nama Pengadaan</th>
                                   <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1">PIC</th>
                                   <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1">Tahap</th>
                                   <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1">Keterangan</th>
                                   <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1"></th>
                                   <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1">Action</th>
                              </tr>
                         </thead>
                         <tbody id="dataTableHomeBody">
                              @foreach($pg as $p)
                              <tr>
                                   <td>
                                        {{$p->id_pengadaan}}
                                   </td>
                                   <td>
                                        <p id="pgdn_{{$p->id_pengadaan}}">
                                             {{$p->pengadaan}}
                                        </p>
                                        <br>
                                        <p class="font-size-12">
                                             Masa Berlaku : 
                                             @if( $p->masa_berlaku_perpanjangan === null)
                                                  {{$p->masa_berlaku}}
                                             @else
                                                  {{$p->masa_berlaku_perpanjangan}}
                                             @endif
                                        </p>
                                   </td>
                                   <td>
                                        <div class="d-flex">
                                             <a class="me-2" data-bs-toggle="modal" data-bs-target="#modalEditPIC">
                                                  <i class="dripicons-document-edit" onclick="showPic('{{$p->id_pengadaan}}')"></i>
                                             </a>
                                             <p id="pic_{{$p->id_pengadaan}}">
                                                  {{$p->pic}}
                                             </p>
                                        </div>
                                   </td>
                                   <td>
                                        <p id="thp_{{$p->id_pengadaan}}">
                                             {{$p->tahapan}}
                                        </p>
                                   </td>
                                   <td>
                                        <p id="ket_{{$p->id_pengadaan}}">
                                             {{$p->keterangan_tahapan}}
                                        </p>
                                   </td>
                                   <td>
                                        <button class="btn btn-warning btn-sm waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#modalDetail" onclick="showDetailPerumahan('{{$p->id_pengadaan}}', '{{$p->pengadaan}}')">
                                             <i class="dripicons-align-justify"></i> Detail
                                        </button>
                                   </td>
                                   <td>
                                        <button type="button" class="btn btn-success btn-sm waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#modalUpdateTahapan" onclick="showUpdateTahapan('{{$p->id_pengadaan}}', '{{$p->pengadaan}}')">
                                             <i class="dripicons-clipboard"></i> Update Status
                                        </button>
                                        <button class="btn btn-danger btn-sm waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#modalDetail" onclick="showDetailPerumahan('{{$p->id_pengadaan}}', '{{$p->pengadaan}}')">
                                             <i class="dripicons-trash"></i> Hapus
                                        </button>
                                   </td>
                              </tr>
                              @endforeach
                    </table>


               </div>
          </div>
          <!-- end cardaa -->
     </div> <!-- end col -->
</div>

<!-- Modal Upload Dokumen Project -->
<div id="modalUpload" class="modal fade" tabindex="-1" data-bs-scroll="true" style="display: none;">
     <div class="modal-dialog">
          <div class="modal-content">
               <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Upload Dokumen</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                    <div class="row">
                         <div class="col-10">
                              <p>Pilih berkas : <input type="file" id="file_fisik" name="file"> </p>
                         </div>
                         <div class="col-2">
                              <button type="button" class="btn btn-primary btn-sm" class="fa fa-upload"></i> Upload</button>
                         </div>
                         <div class="col-lg-12">
                              <div class="container">
                                   <input type="text" onkeyup="search('searchBastFisik','tabel_modalUploadFisik')" class="form-control form-control-sm" placeholder="Search..." aria-controls="example2" id="searchBastFisik">
                              </div>
                              <table class="table datatable-basic">
                                   <thead>
                                        <tr>
                                             <th>Nama File</th>
                                             <th>Download</th>
                                             <th>Action</th>
                                        </tr>
                                   </thead>
                                   <tbody id="tabel_modalUploadFisik">
                                        <tr>
                                             <td>Nama Dokumen</td>
                                             <td>
                                                  <button type="button" class="btn btn-success btn-sm"><i class="fa fa-download"></i></button>
                                             </td>
                                             <td>
                                                  <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                             </td>
                                        </tr>
                                   </tbody>
                              </table>
                         </div>
                    </div>


               </div>

          </div><!-- /.modal-content -->
     </div><!-- /.modal-dialog -->
</div>

<!-- Modal Setting Reminder Project -->
<div id="modalSettingReminder" class="modal fade" tabindex="-1" data-bs-scroll="true" style="display: none;">
     <div class="modal-dialog">
          <div class="modal-content">
               <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Set Reminder - {Nama Kegiatan}</h5>
                    <button type="button" class="btn-close" data-bs-target="#modalDetail" data-bs-dismiss="modal" data-bs-toggle="modal"></button>
               </div>
               <div class="modal-body">
                    <div class="input-group">
                         <span class="input-group-text"><i class="bx bx-calendar-event"></i></span>
                         <input type="text" class="form-control flatpickr-input active" placeholder="Silahkan masukkan tanggal" id="basicDate" readonly="readonly">
                    </div>
               </div>
               <div class="modal-footer">
                    <button class="btn btn-primary">Simpan</button>
               </div>
          </div><!-- /.modal-content -->
     </div><!-- /.modal-dialog -->
</div>

<!-- Modal Edit Pemilik Persil -->
<div id="modalEditPemilikPersil" class="modal fade" tabindex="-1" data-bs-scroll="true" style="display: none;">
     <div class="modal-dialog modal-xl">
          <div class="modal-content">
               <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Edit Pemilik Persil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#modalDetail" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                    <div class="row">
                         <div class="col-4 mb-2">
                              <label class="form-label">Nama Pemilik : </label>
                              <div class="input-group">
                                   <input type="text" class="form-control" id="inputNamaPemilik" required>
                                   <div class="invalid-feedback">
                                        Silahkan masukkan luas
                                   </div>
                              </div>
                         </div>
                         <div class="col-4 mb-2">
                              <label class="form-label">Alas Hak : </label>
                              <div class="input-group">
                                   <input type="number" class="form-control" id="inputAlasHak" required>
                                   <div class="invalid-feedback">
                                        Silahkan masukkan luas
                                   </div>
                              </div>
                         </div>
                         <div class="col-4 mb-2">
                              <label class="form-label">Luas Bidang : </label>
                              <div class="input-group">
                                   <input type="number" class="form-control" id="inputLuas" required>
                                   <div class="input-group-append">
                                        <span class="input-group-text" style="background-color:#ffffff; color:black;">m<sup>2</sup></span>
                                   </div>
                                   <div class="invalid-feedback">
                                        Silahkan masukkan luas
                                   </div>
                              </div>

                         </div>
                         <div class="col-12 mb-2">
                              <label for="inputKeterangan" class="form-label">Keterangan : </label>
                              <textarea class="form-control" id="inputKeterangan" rows="5" required></textarea>
                              <div class="invalid-feedback">
                                   Silahkan masukkan keterangan
                              </div>
                         </div>
                    </div>
               </div>
               <div class="modal-footer">
                    <button type="submit" form="formAddNewProject" class="btn btn-primary waves-effect waves-light">Save</button>
               </div>
          </div><!-- /.modal-content -->
     </div><!-- /.modal-dialog -->
</div>

@endsection

@section("javasc")
$('#dataTableHome').DataTable({});

@endsection


@section("javascript-tambahan")


@endsection