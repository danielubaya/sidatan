<div class="modal-header">
     <h5 class="modal-title" id="myModalLabel">Tambah Pemilik Persil</h5>
     <button type="button" class="btn-close" data-bs-dismiss="modal" data-bs-target="#modalDetail" data-bs-toggle="modal" onclick="showDetailPerumahan('{{$pg->id_pengadaan}}','{{$pg->pengadaan}}')"></button>
</div>

<div class="modal-body">
     <form id="formAddPemilikPersil"></form>
     <div class="pemilik-tanah mb-5">
          
          <div class="row mb-4">
               <div class="col-6">
                    <div class="row">
                         <div class="col-3">
                              <h6 class="mb-3">Kode Persil : </h6>
                         </div>
                         <div class="col-6">
                              <input type="text" class="form-control form-control-sm" id="inputKodePersilTanah" placeholder="Masukkan Kode Persil">
                         </div>
                    </div>
               </div>
               <div class="col-6 d-flex"> 
                    <button class="btn btn-soft-success btn-sm ms-auto" id="btnTambahDataPemilik">
                         Tambah Data Pemilik Tanah
                    </button>
               </div>
          </div>

          <hr>

          <!-- Data pemilik tanah container -->
          <div id="data-pemilik-tanah-persil">
               <div>
                    <h5 class="mt-2 mb-3"> Data Pemilik Tanah </h5>
                    <div class="row mb-2">
                         <div class="col-6">
                              <label for="inputNamaPemilikTanah" class="form-label"> Nama Pemilik Tanah : </label>
                              <input type="text" class="form-control" id="inputNamaPemilikTanah_0" placeholder="Masukkan Nama Pemilik Tanah" required></input>
                         </div>
                         <div class="col-6">
                              <label for="inputKuasa" class="form-label"> Kuasa : </label>
                              <input type="text" class="form-control" id="inputKuasa_0" placeholder="Masukkan Kuasa" required></input>
                         </div>
                    </div>
                    
                    <div class="row mb-2">
                         <div class="col-4">
                              <label for="inputNamaPemilikTanah" class="form-label"> NPWP : </label>
                              <input type="text" class="form-control" id="inputNPWP_0" placeholder="Masukkan NPWP" required></input>
                         </div>
                         <div class="col-4">
                              <label for="inputNamaPemilikTanah" class="form-label"> NO PKP : </label>
                              <input type="text" class="form-control" id="inputPKP_0" placeholder="Masukkan Nomor PKP" required></input>
                         </div>
                         <div class="col-4">
                              <label for="inputNIK" class="form-label"> NIK : </label>
                              <input type="number" class="form-control" id="inputNIK_0" placeholder="Masukkan NIK" required></input>
                         </div>
                    </div>

                    <div class="col-12 mb-2">
                         <label for="inputAlamatPemilik" class="form-label"> Alamat Pemilik : </label>
                         <textarea class="form-control" id="inputAlamatPemilik_0" rows="3"  placeholder="Masukkan Alamat Pemilik" required></textarea>
                         <div class="invalid-feedback">
                              Silahkan masukkan alamat pemilik
                         </div>
                    </div>

                    <div class="row mb-2">
                         <div class="col-6">
                              <label for="inputNamaBank" class="form-label"> Nama Bank : </label>
                              <input type="text" class="form-control" id="inputNamaBank_0"  placeholder="Masukkan Nama Bank" required></input>
                              <div class="invalid-feedback">
                                   Silahkan masukkan kode persil
                              </div>
                         </div>
                         <div class="col-6">
                              <label for="inputNamaPemilikTanah" class="form-label"> Kantor Cabang : </label>
                              <input type="text" class="form-control" id="inputKantorCabang_0" placeholder="Masukkan Kantor Cabang" required></input>
                              <div class="invalid-feedback">
                                   Silahkan masukkan nama pemilik tanah
                              </div>
                         </div>
                    </div>

                    <div class="row mb-2">
                         <div class="col-6">
                              <label for="inputNoRekening" class="form-label"> No Rekening : </label>
                              <input type="number" class="form-control" id="inputNoRekening_0" placeholder="Masukkan No Rekening" required></input>
                              <div class="invalid-feedback">
                                   Silahkan masukkan kode persil
                              </div>
                         </div>
                         <div class="col-6">
                              <label for="inputAtasNama" class="form-label"> Atas Nama : </label>
                              <input type="text" class="form-control" id="inputAtasNama_0"  placeholder="Masukkan Nama Pemilik Rekening"></input>
                              <div class="invalid-feedback">
                                   Silahkan masukkan nama pemilik tanah
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>

     <div class="persil-tanah mb-5">
          <hr>
          <div class="mb-3">
               <h5>Data Persil tanah</h5>
          </div>
          <div class="col-12 mb-2">
               <label for="inputAlasHak" class="form-label"> Alas Hak : </label>
               <textarea class="form-control" id="inputAlasHakPersilTanah" rows="3" placeholder="Masukkan Alas Hak" required></textarea>
               <div class="invalid-feedback">
                    Silahkan masukkan alas hak
               </div>
          </div>

          <div class="mb-3">
               <div class="row mb-2">
                    <div class="col-6">
                         <label for="inputKecamatan" class="form-label"> Kecamatan : </label>
                         <input class="form-control" id="inputKecamatanPersilTanah" placeholder="Masukkan Kecamatan" required></input>
                    </div>
                    <div class="col-6">
                         <label for="inputKelurahan" class="form-label"> Kelurahan : </label>
                         <input class="form-control" id="inputKelurahanPersilTanah" placeholder="Masukkan Kelurahan" required></input>
                    </div>
               </div>

               <div class="row mb-2">
                    <div class="col-6">
                         <label for="inputNoPBB" class="form-label"> No PBB : </label>
                         <input type="number" class="form-control" id="inputNoPBBPersilTanah" placeholder="Masukkan No PBB" required></input>
                    </div>
                    <div class="col-6">
                         <label for="inputKondisiTanah" class="form-label"> Kondisi Tanah : </label>
                         <input type="text" class="form-control" id="inputKondisiTanahPersilTanah" placeholder="Masukkan Kondisi Tanah" required></input>
                         <div class="invalid-feedback">
                              Silahkan masukkan kondisi tanah
                         </div>
                    </div>
               </div>
          </div>

          <div class="mb-3">
               <h6 class="mb-3">Luas tanah : </h6>
               <div class="row">
                    <div class="col-6">
                         <label for="inputNIB" class="form-label"> NIB : </label>
                         <input class="form-control" id="inputNIBPersilTanah" placeholder="Masukkan NIB" required></input>
                         <div class="invalid-feedback">
                              Silahkan masukkan NIB
                         </div>
                    </div>
                    <div class="col-6">
                         <label for="inputLuas" class="form-label"> Luas : </label>
                         <input type="number" class="form-control" id="inputLuasPersilTanah" placeholder="Masukkan Luas" required></input>
                         <div class="invalid-feedback">
                              Silahkan masukkan luas
                         </div>
                    </div>
               </div>
          </div>

          <div class="col-12">
               <label for="inputKeterangan" class="form-label"> Keterangan : </label>
               <textarea class="form-control" id="inputKeteranganPersilTanah" rows="3" placeholder="Masukkan Keterangan" required></textarea>
               <div class="invalid-feedback">
                    Silahkan masukkan keterangan
               </div>
          </div>
     </div>
     </form>
</div>

<div class="modal-footer">
     <button type="submit" form="formAddPemilikPersil" class="btn btn-primary waves-effect waves-light">Tambah</button>
</div>

<script>
     var counterDataPemilik = 0;

     //When button tambah data on click
     document.getElementById('btnTambahDataPemilik').addEventListener('click', () => {
          counterDataPemilik++;

          let content = `
               <div class="mt-4" id="contentDataPemilik_${counterDataPemilik}">
                    <hr>
                    <div class="d-flex justify-content-between mb-3 mt-2">
                         <h5> Data Pemilik Tanah #${counterDataPemilik + 1} </h5>
                         <a href="#" class="btn btn-soft-danger btn-sm" onclick="deleteContent()">Hapus</a>
                    </div>

                    <div class="row mb-2">
                         <div class="col-6">
                              <label for="inputNamaPemilikTanah" class="form-label"> Nama Pemilik Tanah : </label>
                              <input class="form-control" id="inputNamaPemilikTanah_${counterDataPemilik}" placeholder="Masukkan Nama Pemilk Tanah #${counterDataPemilik + 1}" required></input>
                              <div class="invalid-feedback">
                                   Silahkan masukkan nama pemilik tanah
                              </div>
                         </div>
                         <div class="col-6">
                              <label for="inputKuasa" class="form-label"> Kuasa : </label>
                              <input class="form-control" id="inputKuasa_${counterDataPemilik}" placeholder="Masukkan Kuasa #${counterDataPemilik + 1}" required></input>
                              <div class="invalid-feedback">
                                   Silahkan masukkan kode persil
                              </div>
                         </div>
                    </div>

                    <div class="row mb-2">
                         <div class="col-4">
                              <label for="inputNamaPemilikTanah" class="form-label"> NPWP : </label>
                              <input type="text" class="form-control" id="inputNPWP_${counterDataPemilik}" placeholder="Masukkan NPWP #${counterDataPemilik + 1}" required></input>
                         </div>
                         <div class="col-4">
                              <label for="inputNamaPemilikTanah" class="form-label"> NO PKP : </label>
                              <input type="text" class="form-control" id="inputPKP_${counterDataPemilik}" placeholder="Masukkan Nomor PKP" required></input>
                         </div>
                         <div class="col-4">
                              <label for="inputNIK" class="form-label"> NIK : </label>
                              <input type="number" class="form-control" id="inputNIK_${counterDataPemilik}" placeholder="Masukkan NIK #${counterDataPemilik + 1}" required></input>
                         </div>
                    </div>

                    <div class="col-12 mb-2">
                         <label for="inputAlamatPemilik" class="form-label"> Alamat Pemilik : </label>
                         <textarea class="form-control" id="inputAlamatPemilik_${counterDataPemilik}" placeholder="Masukkan Alamat Pemilik #${counterDataPemilik + 1}" rows="3" required></textarea>
                         <div class="invalid-feedback">
                              Silahkan masukkan alamat pemilik
                         </div>
                    </div>

                    <div class="row mb-2">
                         <div class="col-6">
                              <label for="inputNamaBank" class="form-label"> Nama Bank : </label>
                              <input class="form-control" id="inputNamaBank_${counterDataPemilik}" placeholder="Masukkan Nama Bank #${counterDataPemilik + 1}" required></input>
                              <div class="invalid-feedback">
                                   Silahkan masukkan kode persil
                              </div>
                         </div>
                         <div class="col-6">
                              <label for="inputNamaPemilikTanah" class="form-label"> Kantor Cabang : </label>
                              <input class="form-control" id="inputKantorCabang_${counterDataPemilik}" placeholder="Masukkan Kantor Cabang #${counterDataPemilik + 1}" required></input>
                              <div class="invalid-feedback">
                                   Silahkan masukkan nama pemilik tanah
                              </div>
                         </div>
                    </div>

                    <div class="row mb-2">
                         <div class="col-6">
                              <label for="inputNoRekening" class="form-label"> No Rekening : </label>
                              <input type="number" class="form-control" id="inputNoRekening_${counterDataPemilik}" placeholder="Masukkan No Rekening #${counterDataPemilik + 1}" required></input>
                              <div class="invalid-feedback">
                                   Silahkan masukkan kode persil
                              </div>
                         </div>
                         <div class="col-6">
                              <label for="inputAtasNama" class="form-label"> Atas Nama : </label>
                              <input class="form-control" id="inputAtasNama_${counterDataPemilik}" placeholder="Masukkan Atas Nama #${counterDataPemilik + 1}" required></input>
                              <div class="invalid-feedback">
                                   Silahkan masukkan nama pemilik tanah
                              </div>
                         </div>
                    </div>
               </div>`;

          document.getElementById("data-pemilik-tanah-persil").insertAdjacentHTML("beforeend", content);
     });

     function deleteContent() {
          document.getElementById(`contentDataPemilik_${counterDataPemilik}`).remove();
          counterDataPemilik--;
     }

     $('#formAddPemilikPersil').submit((e) => {
          e.preventDefault();

          var form_data = new FormData();

          let namaPemilik = [];
          let kuasa = [];
          let npwp = [];
          let pkp = [];
          let nik = [];
          let alamatPemilik = [];
          let namaBank = [];
          let kantorCabang = [];
          let noRekening = [];
          let atasNama = [];
          
          if (counterDataPemilik > 0) {
               for (let index = 0; index <= counterDataPemilik; index++) {
                    namaPemilik[index] = document.getElementById(`inputNamaPemilikTanah_${index}`).value;
                    kuasa[index] = document.getElementById(`inputKuasa_${index}`).value;
                    npwp[index] = document.getElementById(`inputNPWP_${index}`).value;
                    pkp[index] = document.getElementById(`inputPKP_${index}`).value;
                    nik[index] = document.getElementById(`inputNIK_${index}`).value;
                    alamatPemilik[index] = document.getElementById(`inputAlamatPemilik_${index}`).value;
                    namaBank[index] = document.getElementById(`inputNamaBank_${index}`).value;
                    kantorCabang[index] = document.getElementById(`inputKantorCabang_${index}`).value;
                    noRekening[index] = document.getElementById(`inputNoRekening_${index}`).value;
                    atasNama[index] = document.getElementById(`inputAtasNama_${index}`).value;
               }
          } else {
               namaPemilik[0] = document.getElementById(`inputNamaPemilikTanah_0`).value;
               kuasa[0] = document.getElementById(`inputKuasa_0`).value;
               npwp[0] = document.getElementById(`inputNPWP_0`).value;
               pkp[0] = document.getElementById(`inputPKP_0`).value;
               nik[0] = document.getElementById(`inputNIK_0`).value;
               alamatPemilik[0] = document.getElementById(`inputAlamatPemilik_0`).value;
               namaBank[0] = document.getElementById(`inputNamaBank_0`).value;
               kantorCabang[0] = document.getElementById(`inputKantorCabang_0`).value;
               noRekening[0] = document.getElementById(`inputNoRekening_0`).value;
               atasNama[0] = document.getElementById(`inputAtasNama_0`).value;
          }

          //Get value from data persil tanah
          var alasHak = document.getElementById('inputAlasHakPersilTanah').value;
          var kecamatan = document.getElementById('inputKelurahanPersilTanah').value;
          var kelurahan = document.getElementById('inputKelurahanPersilTanah').value;
          var noPBB = document.getElementById('inputNoPBBPersilTanah').value;
          var kondisiTanah = document.getElementById('inputKondisiTanahPersilTanah').value;
          var nib = document.getElementById('inputNIBPersilTanah').value;
          var luas = document.getElementById('inputLuasPersilTanah').value;
          var keterangan = document.getElementById('inputKeteranganPersilTanah').value;
          var kodePersil = document.getElementById('inputKodePersilTanah').value;

          var pubdir = "{{asset('')}}";
          var addPersilTanahURL = pubdir + 'add_persil_tanah';
          
          $.ajax({
               type: 'POST',
               url: addPersilTanahURL,
               data: {
                    _token: '{{ csrf_token() }}',
                    alas_hak: alasHak,
                    kecamatan: kecamatan,
                    kelurahan: kelurahan,
                    no_pbb: noPBB,
                    kondisiTanah: kondisiTanah,
                    nib: nib,
                    luas: luas,
                    keterangan: keterangan,
                    pengadaan_id: '{{ request()->id }}',
                    kode_persil: kodePersil
               },
               success: function(data) {
                    if (data.status === 'success') {
                         var idPersilTanah = data.msg;
     
                         //Send data to persil tanah
                         var url = pubdir + 'add_pemilik_persil/' + idPersilTanah;

                         //Send data to pemilik tanah tabel
                         $.ajax({
                              type: 'POST',
                              url: url,
                              data: {
                                   _token: '{{ csrf_token() }}',
                                   nama_pemilik: namaPemilik,
                                   kuasa: kuasa,
                                   npwp: npwp,
                                   pkp: pkp,
                                   nik: nik,
                                   alamat_pemilik: alamatPemilik,
                                   nama_bank: namaBank,
                                   kantor_cabang_bank: kantorCabang,
                                   no_rekening: noRekening,
                                   atas_nama: atasNama
                              },
                              success: function(data) {
                                   if (data.status === "success") {
                                        //Set new URL 
                                        Swal.fire({
                                             target: '#formAddPemilikPersil',
                                             icon: "success",
                                             title: "Success",
                                             text: "Berhasil menambahkan data",
                                             showConfirmButton: false,
                                             timer: 2000
                                        })
                                   } else {
                                        Swal.fire({
                                             target: '#formAddPemilikPersil',
                                             icon: "error",
                                             title: "Opps...",
                                             text: data.msg,
                                             showConfirmButton: true
                                        })
                                   }
                              },
                              error: function(xhr, ajaxOptions, thrownError) {
                                   alert(xhr.status);
                                   alert(xhr.responseText);
                                   alert(thrownError);
                              }
                         })
                    } else {
                         Swal.fire({
                              target: '#formAddPemilikPersil',
                              icon: "error",
                              title: "Opps...",
                              text: data.msg,
                              showConfirmButton: true
                         })
                    }
               },
               error: function(xhr, ajaxOptions, thrownError) {
                    alert(xhr.status);
                    alert(xhr.responseText);
                    alert(thrownError);
               }
          })
     });
</script>