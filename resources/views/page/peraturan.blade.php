@extends('layouts.dashboard')

@section('breadcrumb')
<div class="mt-lg-4">
     <ol class="breadcrumb p-lg-0">
          <li class="breadcrumb-item"><a href="javascript: void(0);">Dokumen</a></li>
          <li class="breadcrumb-item active">Peraturan</li>
     </ol>
</div>
@endsection

@section('header')
<div class="d-flex justify-content-between">
     <div>
          <h5 class="font-size-18">Peraturan</h5>
          <p>Berikut merupakan data peraturan - peraturan pengadaan tanah dan bangunan non infrastruktur</p>
     </div>
     <div>
          <button class="btn btn-primary btn-sm" data-bs-target="#modalUploadPeraturan" data-bs-toggle="modal" onclick="showModalAddPeraturan()">
               <i class="dripicons-cloud-upload"></i> Upload Peraturan
          </button>
     </div>
</div>
@endsection


@section('main-content')
<div class="card">
     <div class="p-4">
          <h4 class="mb-3">TAHAPAN PENGADAAN TANAH</h4>
          <div class="d-flex justify-content-center">
               <img src="{{asset('assets/images/flow-chart.jpg')}}" height="500px" width="900px" alt="">
          </div>
     </div>
</div>

<div class="card">

     <div class="p-4">
          <h4 class="mb-3">DAFTAR PERATURAN</h4>
          <table id="tablePeraturan" class="table dt-responsive w-100">
               <thead>
                    <th>Judul</th>
                    <th>Type</th>
                    <th>No</th>
                    <th>Tahun</th>  
                    <th>Action</th>
               </thead>
               <tbody>
                    @foreach($pg as $p)
                    <tr id="tr_peraturan_{{$p->id_peraturan}}">
                         <td id="judul_{{$p->id_peraturan}}">{{$p->judul}}</td>
                         <td id="tipe_{{$p->id_peraturan}}">{{$p->tipe}}</td>
                         <td id="nomor_peraturan_{{$p->id_peraturan}}">{{$p->nomor_peraturan}}</td>
                         <td id="tahun_{{$p->id_peraturan}}">{{$p->tahun}}</td>
                         <td>
                              <a class="btn btn-soft-primary btn-sm" href='{{ asset("upload/Peraturan/$p->file_name") }}' target="_blank">
                                   <i class="mdi mdi-eye"></i> View
                              </a>
                              
                              <a class="btn btn-soft-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditDataPeraturan" onclick="showModalEditDataPeraturan('{{$p->id_peraturan}}')">
                                   <i class="bx bx-edit-alt"></i> Edit
                              </a>

                              <a class="btn btn-soft-danger btn-sm" onclick='deletePeraturan("{{$p->id_peraturan}}","upload/Peraturan/{{$p->file_name}}")'>
                                   <i class="mdi mdi-trash-can"></i> Hapus
                              </a>
                         </td>
                    </tr>
                    @endforeach
               </tbody>
          </table>

     </div>

</div>
@endsection


@section('javasc')
$('#tablePeraturan').DataTable({
     order: [[0, 'asc']],
});
@endsection

<script>
     function deletePeraturan(id,path){
          Swal.fire({
               target: document.getElementById('tablePeraturan'),
               title: 'Apakah anda yakin akan menghapus data ini?',
               icon: 'warning',
               showCancelButton: true,
               confirmButtonColor: '#3085d6',
               cancelButtonColor: '#d33',
               confirmButtonText: 'Yakin!',
               cancelButtonText: 'Tidak',
          }).then((result) => {
               if (result.isConfirmed) {

                    let pubdir = "{{asset('')}}";
                    let act = pubdir + 'delete_peraturan/' + id;

                    $.ajax({
                         url: act,
                         type: 'POST',
                         data: {
                              _token: '{{ csrf_token() }}',
                              _method: 'POST',
                              path : path
                         },
                         success: function(data){
                              if(data.status === "success"){
                                   
                                   $('#tablePeraturan').DataTable().row("#tr_peraturan_"+id).remove().draw();
                                   
                                   Swal.fire({
                                        target: document.getElementById('tablePeraturan'),
                                        title: 'Terhapus!',
                                        text: 'Data berhasil terhapus',
                                        icon: 'success',
                                        showConfirmButton: false,
                                        timer: 2000,
                                   });
                              } else {
                                   Swal.fire({
                                        target: document.getElementById('tablePeraturan'),
                                        title: 'Error',
                                        text: data.msg,
                                        icon: 'error',
                                        showConfirmButton: true,
                                   });
                              }
                         }
                    })
               }
          })
     }
</script>

@section("javascript-tambahan")

   

@endsection