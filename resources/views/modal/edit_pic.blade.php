<div class="modal-header">
     <h5 class="modal-title">Edit PIC</h5>
     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body" id="modalBodyEditPIC">
     <form id="formEditPicPengadaan" class="row">
          <div>
               <p>Silahkan masukkan PIC : </p>
               <input type="text" class="form-control" id="inputEditPIC" value="<?php echo $pc->pic ?>" placeholder="silahkan isi PIC" required>
               <div class="invalid-feedback">
                    Silahkan masukkan PIC
               </div>
          </div>
     </form>
</div>
<div class="modal-footer">
     <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
     <button type="submit" form="formEditPicPengadaan" class="btn btn-primary waves-effect waves-light">Save</button>
</div>

<script>
     $('#formEditPicPengadaan').submit(function(event) {
          //Event preventDefault is used to stop refresh the page
          event.preventDefault();
          let newPic = document.getElementById('inputEditPIC').value;
          let act = pubdir + 'update_pic/' + '{{ $pc->id_pengadaan }}';

          $.ajax({
               type: "PUT",
               url: act,
               data: {
                    _token: '{{ csrf_token() }}',
                    _method: 'PUT',
                    pic: newPic
               },
               success: function(data) {
                    if (data.status === "success") {
                         Swal.fire({
                              target: "#formEditPicPengadaan",
                              icon: 'success',
                              title: 'Success!',
                              text: 'Berhasil mengganti PIC',
                              showConfirmButton: false,
                              timer: 2000,
                         });
                         document.getElementById('pic_{{ $pc->id_pengadaan }}').innerText = newPic;
                    } else {
                         Swal.fire({
                              target: "#formEditPicPengadaan",
                              icon: 'error',
                              title: 'Oops...',
                              text: data.msg,
                         });
                    }
               }
          });
     });
</script>