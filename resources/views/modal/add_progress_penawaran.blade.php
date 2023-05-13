<div class="modal-header">
     <h5 class="modal-title" id="myModalLabel">Tambah Progress Penawaran</h5>
     <button type="button" class="btn-close" data-bs-dismiss="modal" data-bs-target="#modalDetailPenawaran" data-bs-toggle="modal" onclick="showDetailPenawaran('{{$pr->id_penawaran}}','{{ $pr->nama }}')"></button>
</div>
<div class="modal-body">
     <form id="formAddProgressPenawaran">
          <div class="col-12 mb-3">
               <label for="inputTglKegiatan" class="form-label">Tanggal Kegiatan : </label>
               <div class="input-group">
                    <input type="date" id="inputTglKegiatan" class="form-control flatpickr-input active" placeholder="Silahkan masukkan tanggal">
               </div>
          </div>
          <div class="col-12 mb-3">
               <label for="inputJenisKegiatan" class="form-label">Jenis Kegiatan : </label>
               <input type="text" id="inputJenisKegiatan" class="form-control" id="inputPengadaan" required="">
          </div>
          <div class="col-12 mb-3">
               <label for="inputNamaKegiatan" class="form-label">Nama Kegiatan : </label>
               <input type="text" id="inputNamaKegiatan" class="form-control" required>
          </div>
          <div class="col-12 mb-3">
               <label for="inputKeterangan" class="form-label">Keterangan : </label>
               <textarea type="text" class="form-control" id="inputKeterangan" rows="2"></textarea>
          </div>
     </form>
</div>
<div class="modal-footer">
     <button type="submit" form="formAddProgressPenawaran" class="btn btn-primary waves-effect waves-light">Tambah Jenis Kegiatan</button>
</div>

<script>
     $('#formAddProgressPenawaran').submit((event) => {
          /* 
               Event prefent default is used to stop the
               default action of the event
          */
          event.preventDefault();

          //Set URL
          let pubdir = "{{asset('')}}";
          let act = pubdir + 'add_progress_penawaran/' + "{{$pr->id_penawaran}}";

          let tglKegiatan = document.getElementById('inputTglKegiatan').value;
          let jenisKegiatan = document.getElementById('inputJenisKegiatan').value;
          let namaKegiatan = document.getElementById('inputNamaKegiatan').value;
          let progressSelanjutnya = document.getElementById('inputKeterangan').value;
          let keterangan = document.getElementById('inputKeterangan').value;
          
          $.ajax({
               type: "POST",
               url: act,
               data: {
                    _token: '{{ csrf_token() }}',
                    jenis_kegiatan: jenisKegiatan,
                    tanggal: tglKegiatan,
                    nama_kegiatan: namaKegiatan,
                    keterangan: keterangan,
                    progress_selanjutnya: progressSelanjutnya,
               },
               success: function(data) {
                    if (data.status === "success") {
                         Swal.fire({
                              target: '#formAddProgressPenawaran',
                              icon: "success",
                              title: "Success",
                              text: "Berhasil menambahkan progress penawaran",
                              timer: 2000,
                              showConfirmButton: false
                         })
                    } else {
                         Swal.fire({
                              target: '#formAddProgressPenawaran',
                              icon: "error",
                              title: "Opps...",
                              text: data.msg,
                              showConfirmButton: true
                         })
                    }
               }
          });

     })
</script>