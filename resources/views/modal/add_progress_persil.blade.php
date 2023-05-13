<div class="modal-header">
     <h5 class="modal-title" id="myModalLabel">Tambah Progress</h5>
     <button type="button" class="btn-close" data-bs-dismiss="modal" data-bs-target="#modalDetail" data-bs-toggle="modal" onclick="showDetailPerumahan('{{$pg->id_pengadaan}}','{{$pg->pengadaan}}')"></button>
</div>
<div class="modal-body">
     <form id="formAddJenisKegiatan" class="row needs-validation" novalidate="">
          <div class="col-12 mb-3">
               <label for="inputTglKegiatan" class="form-label">Tanggal Kegiatan : </label>
               <div class="input-group">
                    <input type="date" id="inputTglKegiatan" class="form-control flatpickr-input active" placeholder="Silahkan masukkan tanggal">
               </div>
          </div>
          <div class="col-12 mb-3">
               <label for="inputJenisKegiatan" class="form-label">Jenis Kegiatan : </label>
               <input type="text" id="inputJenisKegiatan" class="form-control" id="inputPengadaan" required="">
               <div class="invalid-feedback">
                    Silahkan masukkan jenis kegiatan
               </div>
          </div>
          <div class="col-12 mb-3">
               <label for="inputNamaKegiatan" class="form-label">Nama Kegiatan : </label>
               <input type="text" id="inputNamaKegiatan" class="form-control" required>
               <div class="invalid-feedback">
                    Silahkan masukkan nama kegiatan
               </div>
          </div>
          <div class="col-12 mb-3">
               <label for="inputProgressSelanjutnya" class="form-label">Progress Selanjutnya : </label>
               <input type="text" class="form-control" id="inputProgressSelanjutnya" required="">
               <div class="invalid-feedback">
                    Silahkan masukkan progress selanjutnya
               </div>
          </div>

     </form>
</div>
<div class="modal-footer">
     <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
     <button type="submit" form="formAddJenisKegiatan" class="btn btn-primary waves-effect waves-light">Tambah Jenis Kegiatan</button>
</div>

<script>
     $('#formAddJenisKegiatan').submit((event) => {
          /* 
               Event prefent default is used to stop the
               default action of the event
          */
          event.preventDefault();


          //Set URL
          let pubdir = "{{asset('')}}";
          let act = pubdir + 'add_progress_persil/' + "{{$pg->id_pengadaan}}";

          let tglKegiatan = document.getElementById('inputTglKegiatan').value;
          let jenisKegiatan = document.getElementById('inputJenisKegiatan').value;
          let namaKegiatan = document.getElementById('inputNamaKegiatan').value;
          let progressSelanjutnya = document.getElementById('inputProgressSelanjutnya').value;

          $.ajax({
               type: "POST",
               url: act,
               data: {
                    _token: '{{ csrf_token() }}',
                    tanggal: tglKegiatan,
                    jenis_kegiatan: jenisKegiatan,
                    nama_kegiatan: namaKegiatan,
                    progress_selanjutnya: progressSelanjutnya,
               },
               success: function(data) {
                    if (data.status === "success") {
                         Swal.fire({
                              target: '#formAddJenisKegiatan',
                              icon: "success",
                              title: "Success",
                              text: "Berhasil menambahkan data jenis kegiatan",
                              timer: 2000
                         })
                    } else {
                         Swal.fire({
                              target: '#formAddJenisKegiatan',
                              icon: "Error",
                              title: "Opps...",
                              text: data.msg,
                              showConfirmButton: true
                         })
                    }
               }
          });

     })
</script>