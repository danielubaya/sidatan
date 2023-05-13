<div class="modal-header">
     <h5 class="modal-title">Edit PIC Penawaran</h5>
     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body" id="modalBodyEditPIC">
     <form id="formEditPicPenawaran" class="row">
          <div>
               <p>Silahkan masukkan PIC : </p>
               <input type="text" class="form-control" id="inputEditPIC" value="<?php echo $pw->pic ?>" placeholder="silahkan isi PIC" required>
               <div class="invalid-feedback">
                    Silahkan masukkan PIC
               </div>
          </div>
     </form>
</div>
<div class="modal-footer">
     <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
     <button type="submit" form="formEditPicPenawaran" class="btn btn-primary waves-effect waves-light">Save</button>
</div>

<script>
     $('#formEditPicPenawaran').submit(function(event) {
          //Event preventDefault is used to stop refresh the page
          event.preventDefault();
          let newPic = document.getElementById('inputEditPIC').value;
          let act = pubdir + 'update_pic_penawaran/' + '{{ $pw->id_penawaran }}';

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
                              target: "#formEditPicPenawaran",
                              icon: 'success',
                              title: 'Success!',
                              text: 'Berhasil mengganti PIC',
                              showConfirmButton: false,
                              timer: 2000,
                         });

                         document.getElementById('pic_{{ $pw->id_penawaran }}').innerText = newPic;
                    } else {
                         Swal.fire({
                              target: "#formEditPicPenawaran",
                              icon: 'error',
                              title: 'Oops...',
                              text: data.msg,
                         });
                    }
               }
          });
     });
</script>