@extends('layouts.dashboard')

@section('breadcrumb')
<div class="mt-lg-4">
     <ol class="breadcrumb p-lg-0">
          <li class="breadcrumb-item"><a href="javascript: void(0);">Dokumen</a></li>
          <li class="breadcrumb-item active">Penawaran</li>
     </ol>
</div>
@endsection

@section('header')
<div>
     <h5 class="font-size-18">Penawaran</h5>
     <p>Berikut merupakan data pengadaan dengan status Penawaran</p>
</div>
@endsection

@section('main-content')
<div>
     <button type="button" class="btn btn-primary waves-effect waves-light mb-4" data-bs-toggle="modal" data-bs-target="#modalAddPenawaran" onclick="showAddPenawaran()">
          <i class="bx bx-plus font-size-16 align-middle me-2"></i>Tambah Penawaran
     </button>
</div>

<div class="row">
     <div class="col-12">
          <div class="card">
               <div class="card-body">
                    <div id="datatable-buttons_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                         <div class="row">
                              <div class="col-sm-12">
                                   <table id="dataTablePenawaran" class="table dt-responsive w-100">
                                        <thead>
                                             <tr>
                                                  <th></th>
                                                  <th>Nama</th>
                                                  <th>PIC</th>
                                                  <th>Kecamatan</th>
                                                  <th>Kelurahan</th>
                                                  <th>Keterangan</th>
                                                  <th>Progress</th>
                                                  <th>Action</th>
                                             </tr>
                                        </thead>
                                        <tbody>
                                             @foreach( $pn as $p )
                                             <tr id="tr_penawaran_{{$p->id_penawaran}}">
                                                  <td>{{$p->id_penawaran}}</td>
                                                  <td>{{$p->nama}}</td>
                                                  <td>
                                                       <div class="d-flex">
                                                            <a classs="me-2" data-bs-toggle="modal" data-bs-target="#modalEditPICPenawaran" onclick="showEditPicPenawaran('{{ $p->id_penawaran }}')">
                                                                 <i class="dripicons-document-edit"></i>
                                                            </a>     
                                                            <p id="pic_{{$p->id_penawaran}}">
                                                                 {{$p->pic}}       
                                                            </p>
                                                       </div>
                                                  </td>
                                                  <td><?php echo str_replace(",", '<br>', $p->kecamatan) ?></td>
                                                  <td><?php echo str_replace(",", '<br>', $p->kelurahan) ?></td>
                                                  <td>{{$p->keterangan_progress}}</td>
                                                  <td>
                                                  
                                                  </td>
                                                  <td>
                                                       <button class="btn btn-soft-primary btn-sm mb-2" data-bs-toggle="modal" data-bs-target="#modalDetailPenawaran" onclick="showDetailPenawaran('{{ $p->id_penawaran }}','{{ $p->nama }}')">
                                                            <i class="mdi mdi-archive-eye-outline"></i> Detail
                                                       </button>
                                                            <br>
                                                       <button class="btn btn-soft-danger btn-sm" onclick="deletePenawaran('{{$p->id_penawaran}}')">
                                                            <i class="mdi mdi-trash-can"></i> Hapus
                                                       </button>
                                                  </td>
                                             </tr>
                                             @endforeach
                                        </tbody>
                                   </table>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          <!-- end cardaa -->
     </div> <!-- end col -->
</div>
@endsection

<script>
     var pubdir = "{{asset('')}}";

     function deletePenawaran(id){
          Swal.fire({
               title: 'Apakah anda yakin ingin menghapus data penawaran ini ?',
               text: "Seluruh data dan dokumen pada data penawaran ini akan ikut terhapus",
               icon: 'warning',
               showCancelButton: true,
               confirmButtonColor: '#3085d6',
               cancelButtonColor: '#d33',
               confirmButtonText: 'Yakin!',
               cancelButtonText: 'Tidak'
          }).then((result) => {
               if (result.isConfirmed) {

                    let act = pubdir + 'delete_penawaran/' + id;

                    $.ajax({
                         url: act,
                         type: "POST",
                         data: {
                              _method:"POST",
                              _token: '{{ csrf_token() }}',
                         },
                         success: function(data){
                              if (data.status === "success"){
                                   
                                   $('#dataTablePenawaran').DataTable().row("#tr_penawaran_"+id).remove().draw();

                                   Swal.fire({
                                        title: 'Terhapus!',
                                        text: 'Data berhasil terhapus!',
                                        icon: 'success',
                                        showConfirmButton: false,
                                   });
                              } else{
                                   Swal.fire({
                                        title: 'Error!',
                                        text: data.msg,
                                        icon: 'error',
                                        showConfirmButton: false,
                                   });
                              }
                         }
                    });
               }
          })
     }

</script>


@section('javasc')
$('#dataTablePenawaran').DataTable({
     order: [[0, 'asc']],
});
@endsection