<div class="modal-header">
     <h5 class="modal-title" id="myModalLabel">Detail Persil</h5>
     <button type="button" class="btn-close" data-bs-dismiss="modal" data-bs-target="#modalDetail" data-bs-toggle="modal"></button>
</div>

<div class="modal-body">
     <form id="formAddPemilikPersil"></form>
     <div class="pemilik-tanah mb-3">
          <div class="d-flex justify-content-between mb-3">
               <h5 class="mb-3">Data Pemilik Tanah</h5>
          </div>

          <!-- Data pemilik tanah container -->
          <div id="data-pemilik-tanah-persil">
               @foreach($pt as $p)
                    <div>
                         <h6 class="mb-3">Data Pemilik #<span>{{ $loop->index+1 }}</span></h6>
                         <div class="row mb-2">
                              <div class="col-6">
                                   <label for="inputNamaPemilikTanah" class="form-label"> Nama Pemilik Tanah : </label>
                                   <input type="text" class="form-control" id="inputNamaPemilikTanah_0" value="{{$p->nama_pemilik}}" required></input>
                                   <div class="invalid-feedback">
                                        Silahkan masukkan nama pemilik tanah
                                   </div>
                              </div>
                              <div class="col-6">
                                   <label for="inputKodePersil" class="form-label"> Kuasa : </label>
                                   <input type="text" class="form-control" id="inputKodePersil_0" value="{{$p->kuasa}}" required></input>
                                   <div class="invalid-feedback">
                                        Silahkan masukkan kode persil
                                   </div>
                              </div>
                         </div>

                         <div class="row mb-2">
                              <div class="col-4">
                                   <label for="inputNamaPemilikTanah" class="form-label"> NPWP : </label>
                                   <input type="text" class="form-control" id="inputNPWP_0" value="{{$p->npwp}}" required></input>
                              </div>
                              <div class="col-4">
                                   <label for="inputNamaPemilikTanah" class="form-label"> NO PKP : </label>
                                   <input type="text" class="form-control" id="inputPKP_0" value="{{$p->no_pkp}}" required></input>
                              </div>
                              <div class="col-4">
                                   <label for="inputKodePersil" class="form-label"> NIK : </label>
                                   <input type="number" class="form-control" id="inputNIK_0" value="{{$p->nik}}" required></input>
                              </div>
                         </div>

                         <div class="col-12 mb-2">
                              <label for="inputAlamatPemilik" class="form-label"> Alamat Pemilik : </label>
                              <textarea class="form-control" id="inputAlamatPemilik_0" rows="3" required>{{$p->alamat_pemilik}}</textarea>
                              <div class="invalid-feedback">
                                   Silahkan masukkan alamat pemilik
                              </div>
                         </div>

                         <div class="row mb-2">
                              <div class="col-6">
                                   <label for="inputKodePersil" class="form-label"> Nama Bank : </label>
                                   <input type="text" class="form-control" id="inputNamaBank_0" value="{{$p->nama_bank}}" required></input>
                                   <div class="invalid-feedback">
                                        Silahkan masukkan kode persil
                                   </div>
                              </div>
                              <div class="col-6">
                                   <label for="inputNamaPemilikTanah" class="form-label"> Kantor Cabang : </label>
                                   <input type="text" class="form-control" id="inputKantorCabang_0" value="{{$p->kantor_cabang_bank}}" required></input>
                                   <div class="invalid-feedback">
                                        Silahkan masukkan nama pemilik tanah
                                   </div>
                              </div>
                         </div>

                         <div class="row mb-2">
                              <div class="col-6">
                                   <label for="inputNoRekening" class="form-label"> No Rekening : </label>
                                   <input type="number" class="form-control" id="inputNoRekening_0" value="{{$p->no_rekening}}" required></input>
                                   <div class="invalid-feedback">
                                        Silahkan masukkan kode persil
                                   </div>
                              </div>
                              <div class="col-6">
                                   <label for="inputAtasNama" class="form-label"> Atas Nama : </label>
                                   <input type="text" class="form-control" value="{{$p->atas_nama}}" id="inputAtasNama_0"></input>
                                   <div class="invalid-feedback">
                                        Silahkan masukkan nama pemilik tanah
                                   </div>
                              </div>
                         </div>
                         <hr>
                    </div>
               @endforeach
          </div>
     </div>

     <div class="persil-tanah mb-5">
          <div class="mb-3">
               <h5>Data Persil tanah</h5>
          </div>
          <div class="col-12 mb-2">
               <label for="inputAlasHak" class="form-label"> Alas Hak : </label>
               <textarea class="form-control" id="inputAlasHakPersilTanah" rows="3" required>{{$st->alas_hak}}</textarea>
               <div class="invalid-feedback">
                    Silahkan masukkan alas hak
               </div>
          </div>

          <div class="mb-3">
               <div class="row mb-2">
                    <div class="col-6">
                         <label for="inputKecamatan" class="form-label"> Kecamatan : </label>
                         <input class="form-control" id="inputKecamatanPersilTanah" value="{{$st->kecamatan}}" required></input>
                    </div>
                    <div class="col-6">
                         <label for="inputKelurahan" class="form-label"> Kelurahan : </label>
                         <input class="form-control" id="inputKelurahanPersilTanah" value="{{$st->kelurahan}}" required></input>
                    </div>
               </div>

               <div class="row mb-2">
                    <div class="col-6">
                         <label for="inputNoPBB" class="form-label"> No PBB : </label>
                         <input type="number" class="form-control" id="inputNoPBBPersilTanah" value="{{$st->no_pbb}}" required></input>
                    </div>
                    <div class="col-6">
                         <label for="inputKondisiTanah" class="form-label"> Kondisi Tanah : </label>
                         <input type="text" class="form-control" id="inputKondisiTanahPersilTanah" value="{{$st->kondisi_tanah}}" required></input>
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
                         <input class="form-control" id="inputNIBPersilTanah" value="{{$st->nib}}" required></input>
                         <div class="invalid-feedback">
                              Silahkan masukkan NIB
                         </div>
                    </div>
                    <div class="col-6">
                         <label for="inputLuas" class="form-label"> Luas : </label>
                         <input type="number" class="form-control" id="inputLuasPersilTanah" value="{{$st->luas}}" required></input>
                         <div class="invalid-feedback">
                              Silahkan masukkan luas
                         </div>
                    </div>
               </div>
          </div>

          <div class="col-12">
               <label for="inputKeterangan" class="form-label"> Keterangan : </label>
               <textarea class="form-control" id="inputKeteranganPersilTanah" rows="3" required>{{$st->keterangan}}</textarea>
               <div class="invalid-feedback">
                    Silahkan masukkan alas keterangan
               </div>
          </div>
     </div>
     </form>
</div>


<script>
     
</script>