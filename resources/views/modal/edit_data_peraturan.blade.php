<div class="modal-header">
     <h5 class="modal-title" id="myModalLabel">Edit Data Peraturan</h5>
     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>

<div class="modal-body">
     <form id="formEditPeraturan" class="row">
          <div class="col-12 mb-2">
               <label for="exampleInputEmail1" class="form-label">Judul : </label>
               <input type="text" id="inputJudulPeraturan" class="form-control" value="<?php echo $pr->judul ?>" required></input>
          </div>
          <div class="col-12 mb-2">
               <label for="exampleInputEmail1" class="form-label">Tipe : </label>
               <input type="text" id="inputTipePeraturan" class="form-control" value="<?php echo $pr->tipe ?>" required></input>
          </div>
          <div class="col-12 mb-2">
               <label for="exampleInputEmail1" class="form-label">No Peraturan</label>
               <input type="text" id="inputNoPeraturan" class="form-control" value="<?php echo $pr->nomor_peraturan ?>" required></input>
          </div>
          <div class="col-12 mb-2">
               <label for="exampleInputEmail1" class="formx-label">Tahun : </label>
               <input type="number" id="inputTahunPeraturan" class="form-control" value="<?php echo $pr->tahun ?>" required></input>
          </div>
     </form>
</div>

<div class="modal-footer">
     <button type="submit" form="formEditPeraturan" class="btn btn-primary waves-effect waves-light">Simpan</button>
</div>

<script>
     $('#formEditPeraturan').submit(function(event) {

          //Event preventDefault is used to stop refresh the page
          event.preventDefault();

          let judulPeraturan = document.getElementById('inputJudulPeraturan').value;
          let tipePeraturan = document.getElementById('inputTipePeraturan').value;
          let noPeraturan = document.getElementById('inputNoPeraturan').value;
          let tahunPeraturan = document.getElementById('inputTahunPeraturan').value;

          let id = '{{$pr->id_peraturan}}';

          let pubdir = "{{asset('')}}";

          let act = pubdir + 'update_peraturan/' + id;

          $.ajax({
               type: "PUT",
               url: act,
               data: {
                    _token: '{{ csrf_token() }}',
                    _method: 'PUT',
                    judul: judulPeraturan,
                    tipe: tipePeraturan,
                    nomorPeraturan: noPeraturan,
                    tahunPeraturan: tahunPeraturan
               },
               success: function(data) {
                    if (data.status === "success") {

                         Swal.fire({
                              target: document.getElementById('formEditPeraturan'),
                              title: "Success",
                              text: "Edit data peraturan berhasil",
                              icon: 'success',
                              showConfirmButton: false,
                              timer: 2000,
                         });

                         document.getElementById('judul_{{$pr->id_peraturan}}').innerText = judulPeraturan;
                         document.getElementById('tipe_{{$pr->id_peraturan}}').innerText = tipePeraturan;
                         document.getElementById('nomor_peraturan_{{$pr->id_peraturan}}').innerText = noPeraturan;
                         document.getElementById('tahun_{{$pr->id_peraturan}}').innerText = tahunPeraturan;
                         
                    } else {
                         Swal.fire({
                              target: document.getElementById('formEditPeraturan'),
                              title: "Error",
                              text: data.msg,
                              icon: 'error',
                              showConfirmButton: true,
                         });
                    }
               }
          });

     });
</script>