<div class="modal-header">
     <h5 class="modal-title" id="myModalLabel">Upload Dokumen Progress Penawaran</h5>
     <button type="button" class="btn-close" data-bs-target="#modalDetailPenawaran" data-bs-dismiss="modal" data-bs-toggle="modal" aria-label="Close"></button>
</div>

<div class="modal-body">
     <form id="form_upload_doc_progress_penawaran">
          <div class="row mb-3">
               <p></p>
               <div class="col-10">
                    <p>Pilih berkas : <input type="file" id="file_doc_progress_penawaran" name="file" multiple> </p>
               </div>
               <div class="col-2">
                    <button type="submit" class="btn btn-primary btn-sm" class="fa fa-upload"></i> Upload</button>
               </div>
          </div>
          <table id="tableUploadDocPenawaran" style="width:100%" class="table datatable-basic">
               <thead>
                    <tr>
                         <th>Nama File</th>
                         <th>Download</th>
                         <th>Delete</th>
                    </tr>
               </thead>
               <tbody>
                    @foreach($dp as $d)
                    <tr id="tr_dpp_{{$d->id_doc_prg_penawaran}}">
                         <td>{{$d->filename}}</td>
                         <td>
                              <a class='btn btn-soft-success btn-sm' href='{{ asset("upload/Penawaran/$pw->penawaran_id/Progress Penawaran/$pw->id_progress/$pw->tgl_progress/$d->filename") }}' target="_blank">
                                   <i class="fa fa-download"></i>
                              </a>
                         </td>
                         <td>
                              <a class='btn btn-soft-danger btn-sm' href='#' onclick="deleteDokumenProgressPenawaran('{{$d->id_doc_prg_penawaran}}','upload/Penawaran/{{$pw->penawaran_id}}/Progress Penawaran/{{$pw->id_progress}}/{{$pw->tgl_progress}}/{{$d->filename}}')">
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
     $('#tableUploadDocPenawaran').dataTable({});

     $('#form_upload_doc_progress_penawaran').submit((event) => {
          //event prevent default is used to stop event refresh the page.
          event.preventDefault();

          //Set new FormData object
          var form_data = new FormData();

          let id_progress = '{{ $pw->id_progress }}';
          let tanggal = '{{ $pw->tgl_progress }}';
          let penawaran_id = '{{ $pw->penawaran_id }}';

          //Set token and method
          form_data.append('_token', '{{ csrf_token() }}');
          form_data.append('_method', 'POST');
          form_data.append('tanggal', tanggal);
          form_data.append('penawaran_id', penawaran_id);
          // Read selected files leght
          let totalfiles = document.getElementById('file_doc_progress_penawaran').files.length;

          //Add the filet to form_data object
          for (let index = 0; index < totalfiles; index++) {
               form_data.append("files[]", document.getElementById('file_doc_progress_penawaran').files[index]);
          }

          //Set URL
          let act = pubdir + 'upload_dokumen_progress_penawaran/' + id_progress;

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
                              target: document.getElementById('form_upload_doc_progress_penawaran'),
                              title: "Success",
                              text: "Upload file berhasil",
                              icon: 'success',
                              showConfirmButton: false,
                              timer: 2000,
                         });

                         var tdp = $('#tableUploadDocPenawaran').DataTable();

                         //Add the uploaded data to new row 
                         for (let index = 0; index < totalfiles; index++) {
                              //set new file name
                              var fileName = document.getElementById('file_doc_progress_penawaran').files[index].name;

                              //Get file name from form input
                              tdp.row.add([
                                   `${fileName}`,
                                   `<a href='{{ asset('upload/Penawaran/${penawaran_id}/Progress Penawaran/${id_progress}/${tanggal}/${fileName}') }}' class='btn btn-soft-success btn-sm' target="_blank"><i class="fa fa-download"></i></a>`,
                                   `<a href='#' class='btn btn-soft-danger btn-sm' onclick="deleteDokumenProgressPenawaran('${data.lastId[index]}','upload/Penawaran/${penawaran_id}/Progress Penawaran/${id_progress}/${tanggal}/${fileName}')"><i class="fa fa-trash"></i></a>`
                              ]).node().id = "tr_dpp_" + data.lastId[index];

                              tdp.draw();
                         }
                    } else {
                         Swal.fire({
                              target: document.getElementById('form_upload_doc_progress_penawaran'),
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

     function deleteDokumenProgressPenawaran(id, path) {
          Swal.fire({
               target: document.getElementById('tableUploadDocPenawaran'),
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
                    let act = pubdir + 'delete_dokumen_progress_penawaran/' + id;

                    $.ajax({
                         url: act,
                         type: 'POST',
                         data: {
                              _token: '{{ csrf_token() }}',
                              _method: 'POST',
                              path: path
                         },
                         success: function(data) {
                              if (data.status === "success") {

                                   $('#tableUploadDocPenawaran').DataTable().row("#tr_dpp_" + id).remove().draw();

                                   Swal.fire({
                                        target: document.getElementById('tableUploadDocPenawaran'),
                                        title: 'Terhapus!',
                                        text: 'Data berhasil terhapus',
                                        icon: 'success',
                                        showConfirmButton: false,
                                        timer: 2000,
                                   });
                              } else {
                                   Swal.fire({
                                        target: document.getElementById('tableUploadDocPenawaran'),
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