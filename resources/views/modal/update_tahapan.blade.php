<h6 class="font-size 12 mb-4">Tahapan saat ini : {{$pg->tahapan}}</h6>
<form id="formUpdateStatus" class="needs-validation" novalidate>
     <select id="tahapanSelected" class="form-select">
          <option value="Perencanaan" selected>Perencanaan</option>
          <option value="Persiapan">Persiapan</option>
          <option value="Pelaksanaan">Pelaksanaan</option>
          <option value="Penyerahan Hasil">Penyerahan Hasil</option>
     </select>
     <div class="col-12 mt-2 mb-2">
          <label for="inputKeterangan" class="form-label">Keterangan : </label>
          <input class="form-control" id="inputKeteranganTahapan" required></input>
          <div class="invalid-feedback">
               Silahkan masukkan keterangan
          </div>
     </div>
</form>
<div class="d-flex mt-3">
     <button type="submit" form="formUpdateStatus" class="btn btn-primary waves-effect waves-light ms-auto">Update</button>
</div>
<script>
     $('#formUpdateStatus').submit((event)=>{
          //Event preventDefault is used to stop refresh the page
          event.preventDefault();
          
               let pubdir = "{{asset('')}}";

               let act = pubdir + 'update_tahapan/' + '{{$pg->id_pengadaan}}';
               let tahapan = document.getElementById("tahapanSelected").value;
               let keterangan = document.getElementById("inputKeteranganTahapan").value;
               
               $.ajax({
                    type: "PUT",
                    url: act,
                    data: {
                         _token: '{{ csrf_token() }}',
                         _method: 'PUT',
                         tahapan: tahapan,
                         keterangan: keterangan
                    },
                    success: function(data) {
                         if (data.status == "success") {
                              Swal.fire({
                                   target: document.getElementById('formUpdateStatus'),
                                   title: "Success",
                                   text: "Edit data pengadaan berhasil",
                                   icon: 'success',
                                   showConfirmButton: false,
                                   timer: 2000,
                              });

                              document.getElementById("ket_{{$pg->id_pengadaan}}").innerText = keterangan;
                              document.getElementById("thp_{{$pg->id_pengadaan}}").innerText = tahapan;
                              
                         } else {
                              Swal.fire({
                                   target: document.getElementById('formUpdateStatus'),
                                   title: "Error",
                                   text: data.msg,
                                   icon: 'error',
                                   showConfirmButton: true,
                              });
                         }
                    }
               });

     })

</script>