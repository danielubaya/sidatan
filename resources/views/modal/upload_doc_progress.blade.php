<div class="row">
     <div class="mb-3">
          <form id="form_upload_berkas_kegiatan" class="row" enctype="multipart/form-data">
               <div class="col-10">
                    <p>Pilih berkas : <input type="file" id="file_berkas_kegiatan" name="file" multiple> </p>
               </div>
               <div class="col-2">
                    <button type="sumbit" class="btn btn-primary btn-sm" class="fa fa-upload"></i> Upload</button>
               </div>
          <form>
     </div>
     
     <div class="col-lg-12">
          <table id="dataTableDocProgress" class="table datatable-basic">
               <thead>
                    <tr>
                         <th>Nama File</th>
                         <th>Download</th>
                         <th>Delete</th>
                    </tr>
               </thead>
               <tbody id="tabel_modalUploadFisik">
                    @foreach($dk as $d)
                         <tr>
                              <td>{{$d->filename}}</td>
                              <td>
                                   <a class='btn btn-soft-success btn-sm' href='{{ asset("upload/Pengadaan/$d->pengadaan_id/Dokumen Kegiatan/$d->progress_id/$d->tanggal/$d->filename") }}' target="_blank">
                                        <i class="fa fa-download"></i>
                                   </a>
                              </td>
                              <td>
                                   <a class='btn btn-soft-danger btn-sm' href='' target="_blank">
                                        <i class="fa fa-trash"></i>
                                   </a>
                              </td>
                         </tr>
                    @endforeach
               </tbody>
          </table>
     </div>
</div>

<script>
     $('#dataTableDocProgress').dataTable({});

     $('#form_upload_berkas_kegiatan').submit((event)=>{
          //event prevent default is used to stop event refresh the page.
          event.preventDefault();

          //Set new FormData object
          var form_data = new FormData();

          let tanggal = '{{ $pg->tanggal }}';
          let id_pengadaan = '{{ $pg->pengadaan_id }}';
          let id_progress = '{{ $pg->id_progress }}';

          //Set token and method
          form_data.append('_token', '{{ csrf_token() }}');
          form_data.append('_method', 'POST');
          form_data.append('tanggal', tanggal);
          form_data.append('pengadaan_id', id_pengadaan);

          // Read selected files leght
          let totalfiles = document.getElementById('file_berkas_kegiatan').files.length;
          
          //Add the filet to form_data object
          for (let index = 0; index < totalfiles; index++) {
               form_data.append("files[]", document.getElementById('file_berkas_kegiatan').files[index]);
          }
        
          //Set URL
          let act = pubdir + 'upload_dokumen_kegiatan/' + id_progress;

          $.ajax({
               url: act,
               type: 'POST',
               data: form_data,
               dataType: 'json',
               contentType: false,
               processData: false,
               success: function (data) {
                    if(data.status === "success"){
                         Swal.fire({
                              target: document.getElementById('form_upload_berkas_kegiatan'),
                              title: "Success",
                              text: "Upload file berhasil",
                              icon: 'success',
                              showConfirmButton: false,
                              timer: 2000,
                         });
                       
                         var tdp = $('#dataTableDocProgress').DataTable();

                         //Add the uploaded data to new row 
                         for (let index = 0; index < totalfiles; index++) {
                              //set new file name
                              var fileName = document.getElementById('file_berkas_kegiatan').files[index].name;
                              
                              //Get file name from form input
                              tdp.row.add([
                                   `${fileName}`,
                                   `<a href='{{ asset('upload/Pengadaan/${id_pengadaan}/Dokumen Kegiatan/${id_progress}/${tanggal}/${fileName}') }}' class='btn btn-soft-success btn-sm' target="_blank"><i class="fa fa-download"></i> Download</a>`,
                                   `<a href='{{ asset('upload/Pengadaan/${id_pengadaan}/Dokumen Kegiatan/${id_progress}/${tanggal}/${fileName}') }}' class='btn btn-soft-danger btn-sm' target="_blank"><i class="fa fa-trash"></i> Delete</a>`
                              ]).draw();
                         }
                    } else {
                         Swal.fire({
                              target: document.getElementById('form_upload_berkas_kegiatan'),
                              title: "Success",
                              text: data.msg,
                              icon: 'error',
                              showConfirmButton: true,
                         });
                    }
               },
               error: function(xhr, ajaxOptions, thrownError) {
                    alert(xhr.status);
                    alert(xhr.responseText);
                    alert(thrownError);
               }
          })
     })
  
</script>