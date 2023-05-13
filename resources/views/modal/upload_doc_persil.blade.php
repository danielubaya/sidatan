<div class="modal-header">
     <h5 class="modal-title" id="myModalLabel">Upload Dokumen Pemilik Persil</h5>
     <button type="button" class="btn-close" data-bs-target="#modalDetail" data-bs-dismiss="modal" data-bs-toggle="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
     <form id="form_upload_doc_persil">
          <div class="row mb-3">
               <p></p>
               <div class="col-10">
                    <p>Pilih berkas : <input type="file" id="file_doc_persil" name="file" multiple> </p>
               </div>
               <div class="col-2">
                    <button type="submit" class="btn btn-primary btn-sm" class="fa fa-upload"></i> Upload</button>
               </div>
          </div>
          <table id="tableUploadDoc" style="width:100%" class="table datatable-basic">
               <thead>
                    <tr>
                         <th>Nama File</th>
                         <th>Download</th>
                         <th>Action</th>
                    </tr>
               </thead>
               <tbody>
                    @foreach($dp as $d)
                    <tr>
                         <td>{{$d->filename}}</td>
                         <td>
                              <a class='btn btn-soft-success btn-sm' href='{{ asset("upload/Pengadaan/$pt->pengadaan_id/Dokumen Persil/$d->persil_tanah_id/$d->filename") }}' target="_blank">
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
     </form>
</div>

<script>

     $('#tableUploadDoc').dataTable({});

     $('#form_upload_doc_persil').submit((event) => {
          //event prevent default is used to stop event refresh the page.
          event.preventDefault();

          //Set new FormData object
          var form_data = new FormData();

          let id_persil_tanah = '{{$pt->id_persil_tanah}}';
          let id_pengadaan_persil = '{{$pt->pengadaan_id}}';  
          
          //Set token and method
          form_data.append('_token', '{{ csrf_token() }}');
          form_data.append('_method', 'POST');
          form_data.append('pengadaan_id','{{$pt->pengadaan_id}}');

          // Read selected files leght
          let totalfiles = document.getElementById('file_doc_persil').files.length;

          //Add the filet to form_data object
          for (let index = 0; index < totalfiles; index++) {
               form_data.append("files[]", document.getElementById('file_doc_persil').files[index]);
          }

          //Set URL
          let act = pubdir + 'upload_dokumen_persil/' + id_persil_tanah;

          $.ajax({
               url: act,
               type: 'POST',
               data: form_data,
               dataType: 'json',
               contentType: false,
               processData: false,
               success: function(data) {
                    if (data.status === "success") {

                         Swal.fire({
                              target: document.getElementById('form_upload_doc_persil'),
                              title: "Success",
                              text: "Upload file berhasil",
                              icon: 'success',
                              showConfirmButton: false,
                              timer: 2000,
                         });

                         var tud = $('#tableUploadDoc').DataTable();

                         //Add the uploaded data to new row 
                         for (let index = 0; index < totalfiles; index++) {
                              //set new file name
                              var fileName = document.getElementById('file_doc_persil').files[index].name;
                              //Get file name from form input
                              tud.row.add([
                                   `${fileName}`,
                                   `<a href='{{ asset('upload/Pengadaan/${id_pengadaan_persil}/Dokumen Persil/${id_persil_tanah}/${fileName}') }}' class='btn btn-soft-success btn-sm' target="_blank"><i class="fa fa-download"></i> Download</a>`,
                                   `<a href='' class='btn btn-soft-danger btn-sm' target="_blank"><i class="fa fa-trash"></i> Delete</a>`
                              ]).draw();
                         }

                    } else {
                         Swal.fire({
                              target: document.getElementById('form_upload_doc_persil'),
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