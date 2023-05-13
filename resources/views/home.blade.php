@extends('layouts.dashboard')

@section('breadcrumb')
<div class="mt-lg-4">
     <ol class="breadcrumb p-lg-0">
          <li class="breadcrumb-item"><a href="javascript: void(0);">Status</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
     </ol>
</div>
@endsection

@section('header')
<div>
     <h5 class="font-size-18">Welcome</h5>
     <p>Selamat datang di aplikasi Sistem Informasi Pengadaan Tanah</p>
</div>
@endsection

@section('main-content')

<div class="card">
     <div class="p-4">
          <div class="d-flex justify-content-center mt-2 mb-4">
               <h5>Tampilan Grafik Berdasarkan Tahapan</h5>
          </div>

          <div class="progress" style="height: 20px;">
               <div class="progress-bar bg-danger" role="progressbar" style="width:25%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
               <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
               <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
               <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>

          </div>
     </div>

     <div class="d-flex justify-content-center">
          <ul class="list-group flex-sm-row">
               <li class="list-group-item" style="border: 0px;"><span class="fa fa-square" style="color: #FD625E;"></span> Perencanaan</li>
               <li class="list-group-item" style="border: 0px;"><span class="fa fa-square" style="color: #5156be;"></span> Persiapan</li>
               <li class="list-group-item" style="border: 0px;"><span class="fa fa-square" style="color: #ff8c00;"></span> Pelaksanaan</li>
               <li class="list-group-item" style="border: 0px;"><span class="fa fa-square" style="color: #33CC99;"></span> Penyerahan</li>
          </ul>
     </div>
</div>

<div class="row">
     <div class="col-12">
          <button type="button" class="btn btn-primary waves-effect waves-light mb-4" data-bs-toggle="modal" data-bs-target="#modalAddNewProject" onclick="showAddPengadaan()">
               <i class="bx bx-plus font-size-16 align-middle me-2"></i>Tambah Pengadaan Baru
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
                              <tr id="tr_home_{{$p->id_pengadaan}}">
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
                                        <button class="btn btn-danger btn-sm waves-effect waves-light" onclick="deletePengadaan('{{$p->id_pengadaan}}')">
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

<script>
     
</script>

@section("javascript-tambahan")

          function deletePengadaan(id){
               Swal.fire({
                    title: 'Apakah anda yakin akan menghapus data ini?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yakin!',
                    cancelButtonText: 'Tidak',
               }).then((result) => {
                    if (result.isConfirmed) {

                         $('#dataTableHome').DataTable().row("#tr_home_"+id).remove().draw();

                         Swal.fire({
                              title: 'Terhapus!',
                              text: 'Data berhasil terhapus',
                              icon: 'success',
                              showConfirmButton: false,
                              timer: 2000,
                         })
                    }
               })
          }
@endsection