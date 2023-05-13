<div class="modal-header">
     <h5 class="modal-title" id="myModalLabel">Upload Peraturan</h5>
     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
     <form id="formTambahPeraturanBaru" class="row">
          @csrf
          <div class="col-12 mb-2">
               <label for="file_fisik" class="form-label">File : </label>
               <input type="file" id="file_upload_peraturan" class="form-control" required>
               <div class="invalid-feedback">
                    Silahkan masukkan file
               </div>
          </div>
          <div class="col-12 mb-2">
               <label for="exampleInputEmail1" class="form-label">Judul : </label>
               <input type="text" id="inputJudulPeraturan" class="form-control" required></input>
               <div class="invalid-feedback">
                    Silahkan masukkan judul
               </div>
          </div>
          <div class="col-12 mb-2">
               <label for="exampleInputEmail1" class="form-label">Tipe : </label>
               <input type="text" id="inputTipePeraturan" class="form-control" required></input>
               <div class="invalid-feedback">
                    Silahkan masukkan tipe
               </div>
          </div>
          <div class="col-12 mb-2">
               <label for="exampleInputEmail1" class="form-label">No Peraturan</label>
               <input type="text" id="inputNoPeraturan" class="form-control" required></input>
               <div class="invalid-feedback">
                    Silahkan masukkan no peraturan
               </div>
          </div>
          <div class="col-12 mb-2">
               <label for="exampleInputEmail1" class="formx-label">Tahun : </label>
               <input type="number" id="inputTahunPeraturan" class="form-control" required></input>
               <div class="invalid-feedback">
                    Silahkan masukkan tahun
               </div>
          </div>
     </form>
</div>
<div class="modal-footer">
     <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
     <button type="submit" form="formTambahPeraturanBaru" class="btn btn-primary waves-effect waves-light">Tambah Peraturan</button>
</div>
<script>
     $('#formTambahPeraturanBaru').submit(function(event) {
          //Event preventDefault is used to stop refresh the page

          event.preventDefault();
          let form = document.getElementById('formTambahPeraturanBaru');

          // //Get uploaded file
          let fileSelect = document.getElementById('file_upload_peraturan');
          let files = fileSelect.files;
          let file = files[0];
          let fileName = file.name;

          //Get item
          let judul = document.getElementById('inputJudulPeraturan').value;
          let tipePeraturan = document.getElementById('inputTipePeraturan').value;
          let noPeraturan = document.getElementById('inputNoPeraturan').value;
          let tahunPeraturan = document.getElementById('inputTahunPeraturan').value;

          //Declare new object
          let formData = new FormData();
          // Adding data to form

          formData.append('_token', '{{ csrf_token() }}');
          formData.append('_method', 'POST');
          formData.append("file", file);
          formData.append('tipe', tipePeraturan);
          formData.append('no_peraturan', noPeraturan);
          formData.append('tahun', tahunPeraturan);
          formData.append('judul', judul);
          formData.append('file_name', fileName);

          let pubdir = "{{asset('')}}";

          let act = pubdir + "upload_peraturan";

          $.ajax({
               type: "POST",
               processData: false,
               contentType: false,
               cache: false,
               url: act,
               data: formData,
               success: function(data) {

                    if (data.status === "success") {
                         //Set swall fire
                         Swal.fire({
                              target: document.getElementById('formTambahPeraturanBaru'),
                              title: "Success",
                              text: "Berhasil menambahkan peraturan",
                              icon: 'success',
                              showConfirmButton: false,
                              timer: 2000,
                         });

                         //Add row table pertaturan
                         var t = $('#tablePeraturan').DataTable();
                                 
                         t.row.add([
                              `${judul}`,
                              `${tipePeraturan}`,
                              `${noPeraturan}`,
                              `${tahunPeraturan}`,
                              `<a href='{{ asset('upload/Peraturan/${fileName}') }}' class='btn btn-soft-primary btn-sm' target="_blank"><i class="mdi mdi-eye"></i> Views</a>
                              <a class="btn btn-soft-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditDataPeraturan" onclick="showModalEditDataPeraturan('${data.msg}')">
                                   <i class="bx bx-edit-alt"></i> Edit
                              </a>
                              <a class="btn btn-soft-danger btn-sm" onclick='deletePeraturan("${data.msg}","upload/Peraturan/${fileName}")'>
                                   <i class="mdi mdi-trash-can"></i> Hapus
                              </a>`
                         ]).node().id = "tr_peraturan_" + data.msg;
                         
                         t.draw();
                    } else {
                         Swal.fire({
                              target: document.getElementById('formTambahPeraturanBaru'),
                              title: "Error",
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
          });

     });
</script>