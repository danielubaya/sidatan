<!-- <div class="d-flex justify-content-between mb-3">
     <div>
          <h4>Perincian Pembayaran</h4>
     </div>
</div>
<div>
     <div class="kegiatan mb-4">
          <h5 class="mb-3">Kegiatan</h5>
          <div class="row mb-2">
               <div class="col-6">
                    <label for="inputKodeKegiatan" class="form-label"> Kode Kegiatan : </label>
                    <input class="form-control" id="inputKodeKegiatan" value="<?php echo $kg->kode_kegiatan ?>" required></input>
                    <div class="invalid-feedback">
                         Silahkan masukkan kode kegiatan
                    </div>
               </div>
               <div class="col-6">
                    <label for="inputKeteranganKegiatan" class="form-label"> Keterangan Kegiatan </label>
                    <input class="form-control" id="inputPenetapanLokasi" value="<?php echo $kg->keterangan_kegiatan ?>" required></input>
                    <div class="invalid-feedback">
                         Silahkan masukkan lokasi
                    </div>
               </div>
          </div>
          <div class="row">
               <div class="col-6">
                    <label for="inputKodeKegiatan" class="form-label"> Kode Rekening : </label>
                    <input class="form-control" id="inputKodeKegiatan" value="<?php echo $kg->kode_rekening ?>" required></input>
                    <div class="invalid-feedback">
                         Silahkan masukkan kode rekening
                    </div>
               </div>
               <div class="col-6">
                    <label for="inputKeteranganKegiatan" class="form-label"> Keterangan Rekening : </label>
                    <input class="form-control" id="inputPenetapanLokasi" value="<?php echo $kg->keterangan_rekening ?>" required></input>
                    <div class="invalid-feedback">
                         Silahkan masukkan keterangan rekening
                    </div>
               </div>
          </div>
     </div>

     <div class="pemilik-tanah mb-4">
          <div class="d-flex justify-content-between mb-3">
               <h5>Data Pemilik Tanah</h5>
          </div>

          <div id="data-pemilik-tanah">
               @foreach($pr as $p)
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
                         <div class="col-6">
                              <label for="inputNamaPemilikTanah" class="form-label"> NPWP : </label>
                              <input type="text" class="form-control" id="inputNPWP_0" value="{{$p->npwp}}" required></input>
                         </div>
                         <div class="col-6">
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
               <textarea class="form-control" id="inputAlasHak" rows="3" required><?php echo $pt->alas_hak ?></textarea>
               <div class="invalid-feedback">
                    Silahkan masukkan alas hak
               </div>
          </div>

          <div class="mb-3">
               <div class="row mb-2">
                    <div class="col-6">
                         <label for="inputKecamatan" class="form-label"> Kecamatan : </label>
                         <input class="form-control" id="inputKecamatan" value="<?php echo $pt->kecamatan ?>" required></input>
                         <div class="invalid-feedback">
                              Silahkan masukkan kecamatan
                         </div>
                    </div>
                    <div class="col-6">
                         <label for="inputKelurahan" class="form-label"> Kelurahan : </label>
                         <input class="form-control" id="inputKelurahan" value="<?php echo $pt->kelurahan ?>" required></input>
                         <div class="invalid-feedback">
                              Silahkan masukkan kecamatan
                         </div>
                    </div>
               </div>

               <div class="row mb-2">
                    <div class="col-6">
                         <label for="inputNoPBB" class="form-label"> No PBB : </label>
                         <input class="form-control" id="inputNoPBB" value="<?php echo $pt->no_pbb ?>" required></input>
                         <div class="invalid-feedback">
                              Silahkan masukkan No PBB
                         </div>
                    </div>
                    <div class="col-6">
                         <label for="inputKondisiTanah" class="form-label"> Kondisi Tanah : </label>
                         <input class="form-control" id="inputKondisiTanah" value="<?php echo $pt->kondisi_tanah ?>" required></input>
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
                         <input class="form-control" id="inputNIB" value="<?php echo $pt->nib ?>" required></input>
                         <div class="invalid-feedback">
                              Silahkan masukkan NIB
                         </div>
                    </div>
                    <div class="col-6">
                         <label for="inputLuas" class="form-label"> Luas : </label>
                         <input class="form-control" id="inputLuas" value="<?php echo $pt->luas ?>" required></input>
                         <div class="invalid-feedback">
                              Silahkan masukkan luas
                         </div>
                    </div>
               </div>
          </div>

          <div class="col-12">
               <label for="inputKeterangan" class="form-label"> Keterangan : </label>
               <textarea class="form-control" id="inputKeterangan" rows="3" required><?php echo $pt->keterangan ?></textarea>
               <div class="invalid-feedback">
                    Silahkan masukkan alas keterangan
               </div>
          </div>
     </div>

     <div class="rincian-transaksi mb-5">
          <h5 class="mb-3">Data rincian transaksi : </h5>
          <div class="row mb-2">
               <div class="col-6">
                    <label for="inputKJPP" class="form-label"> KJPP : </label>
                    <input class="form-control" id="inputKJPP" required></input>
                    <div class="invalid-feedback">
                         Silahkan masukkan alas hak
                    </div>
               </div>
               <div class="col-6">
                    <label for="inputNilaiGantiRugi" class="form-label"> Nilai uang ganti rugi : </label>
                    <input class="form-control" id="inputNilaiGantiRugi" required></input>
                    <div class="invalid-feedback">
                         Silahkan masukkan nilai uang ganti rugi
                    </div>
               </div>
          </div>

          <div class="row mb-2">
               <div class="col-6">
                    <label for="inputDari" class="form-label"> Dari </label>
                    <input class="form-control" id="inputDari" required></input>
                    <div class="invalid-feedback">
                         Silahkan masukkan input dari
                    </div>
               </div>
               <div class="col-6">
                    <label for="inputDari" class="form-label"> Kepada : </label>
                    <input class="form-control" id="inputDari" required></input>
                    <div class="invalid-feedback">
                         Silahkan masukkan input dari
                    </div>
               </div>
          </div>

          <div class="col-12 mb-4">
               <label for="inputBerdasarkan" class="form-label">Berdasarkan : </label>
               <textarea class="form-control" id="inputBerdasarkan" rows="3" required></textarea>
               <div class="invalid-feedback">
                    Silahkan masukkan input berdasarkan
               </div>
          </div>

          <div>
               <div class="form-check mb-4">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                         Rincian Potong Pajak :
                    </label>
               </div>

               <div class="row mb-2">
                    <div class="col-6 mb-2">
                         <label for="inputKJPP" class="form-label">SSP (PPH Final)</label>
                         <select class="form-select" id="inputNilaiSSP" aria-label="Default select example">
                              <option selected>Silahkan pilih persentase...</option>
                              <option value="2.5">2,5 %</option>
                              <option value="5">5 %</option>
                         </select>
                    </div>
                    <div class="col-6">
                         <label for="inputKJPP" class="form-label">Nilai SSP (PPH)</label>
                         <input class="form-control" id="inputNilaiSSP" value="Rp.00" readonly required></input>
                    </div>
                    <div class="col-6">
                         <label for="inputBPHTP" class="form-label">BPHTB</label>
                         <input class="form-control" id="inputBPHTB" value="Rp.00" readonly required></input>
                    </div>
               </div>
          </div>
     </div>

     <div class="pajak-penghasilan-peralihan mb-5">
          <h5 class="mb-3">Pajak Penghasilan Peralihan :</h5>
          <div class="row">
               <div class="col-6">
                    <label for="inputBerdasarkan" class="form-label">Pajak Penghasilan Peralihan</label>
                    <input class="form-control" id="inputBerdasarkan" rows="3" required></input>
                    <div class="invalid-feedback">
                         Silahkan masukkan input berdasarkan
                    </div>
               </div>
               <div class="col-3 text-center">
                    <p class="mt-4"> X 0.0%</p>
               </div>
               <div class="col-3 text-center">
                    <p class="mt-4">Rp. 0</p>
               </div>
          </div>
     </div>

     <div class="pajak-bumi-bangunan mb-5">
          <h5 class="mb-3">Pajak Bumi Bangunan (PBB) : </h5>
          <div class="row d-flex justify-content-between">
               <div class="col-6">
                    <label for="inputPBB" class="form-label">PBB : </label>
                    <input class="form-control" id="inputPBB" required></input>
                    <div class="invalid-feedback">
                         Silahkan masukkan input berdasarkan
                    </div>
               </div>
               <div class="col-3 text-center">
                    <p class="mt-4">Rp. 0</p>
               </div>
          </div>
     </div>

     <div class="total-nilai-ganti">
          <div class="row">
               <div class="col-9">
                    <h5>Total Nilai Ganti : </h5>
               </div>
               <div class="col-3">
                    <p class="text-center"><b>Rp. 0</b></p>
               </div>
          </div>
     </div>
</div> -->

<div class="row">
     <div class="col-md-3">
          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
               <a class="nav-link mb-2 active" id="v-pills-kegiatan-tab" data-bs-toggle="pill" href="#v-pills-kegiatan" role="tab"><i class="bx bx-receipt"></i> Data Kegiatan</a>
               <a class="nav-link mb-2" id="v-pills-pemilik-tanah-tab" data-bs-toggle="pill" href="#v-pills-pemilik-tanah" role="tab"><i class="bx bx-user-check"></i> Data Pemilik Tanah</a>
               <a class="nav-link mb-2" id="v-pills-persil-tanah-tab" data-bs-toggle="pill" href="#v-pills-persil-tanah" role="tab"><i class="bx bx-layer"></i> Data Persil tanah</a>
               <a class="nav-link" id="v-pills-rincian-tanah-tab" data-bs-toggle="pill" href="#v-pills-rincian-tanah" role="tab"><i class="bx bx-bar-chart"></i> Data Rincian Transaksi</a>
          </div>
     </div>
     <div class="col-md-9">
          <div class="tab-content text-muted mt-4 mt-md-0" id="v-pills-tabContent">
               <div class="tab-pane fade show active" id="v-pills-kegiatan" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <div class="kegiatan mb-4">
                         <h5 class="mb-3">Kegiatan</h5>
                         <div class="row mb-2">
                              <div class="col-6">
                                   <label for="inputKodeKegiatan" class="form-label"> Kode Kegiatan : </label>
                                   <input class="form-control" id="inputKodeKegiatan" value="<?php echo $kg->kode_kegiatan ?>" required></input>
                                   <div class="invalid-feedback">
                                        Silahkan masukkan kode kegiatan
                                   </div>
                              </div>
                              <div class="col-6">
                                   <label for="inputKeteranganKegiatan" class="form-label"> Keterangan Kegiatan </label>
                                   <input class="form-control" id="inputPenetapanLokasi" value="<?php echo $kg->keterangan_kegiatan ?>" required></input>
                                   <div class="invalid-feedback">
                                        Silahkan masukkan lokasi
                                   </div>
                              </div>
                         </div>
                         <div class="row">
                              <div class="col-6">
                                   <label for="inputKodeKegiatan" class="form-label"> Kode Rekening : </label>
                                   <input class="form-control" id="inputKodeKegiatan" value="<?php echo $kg->kode_rekening ?>" required></input>
                                   <div class="invalid-feedback">
                                        Silahkan masukkan kode rekening
                                   </div>
                              </div>
                              <div class="col-6">
                                   <label for="inputKeteranganKegiatan" class="form-label"> Keterangan Rekening : </label>
                                   <input class="form-control" id="inputPenetapanLokasi" value="<?php echo $kg->keterangan_rekening ?>" required></input>
                                   <div class="invalid-feedback">
                                        Silahkan masukkan keterangan rekening
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
               <div class="tab-pane fade" id="v-pills-pemilik-tanah" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div class="pemilik-tanah mb-4">
                         <div class="d-flex justify-content-between mb-3">
                              <h5>Data Pemilik Tanah</h5>
                         </div>
                         <div id="data-pemilik-tanah">
                              @foreach($pr as $p)
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
                                             <label for="inputNamaPemilikTanah" class="form-label"> No PKP </label>
                                             <input type="text" class="form-control" id="inpuNoPKP_0" value="{{$p->no_pkp}}" required></input>
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
               </div>
               <div class="tab-pane fade" id="v-pills-persil-tanah" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                    <div class="persil-tanah mb-5">
                         <div class="mb-3">
                              <h5>Data Persil tanah</h5>
                         </div>

                         <div class="col-12 mb-2">
                              <label for="inputAlasHak" class="form-label"> Alas Hak : </label>
                              <textarea class="form-control" id="inputAlasHak" rows="3" required><?php echo $pt->alas_hak ?></textarea>
                         </div>

                         <div class="mb-3">
                              <div class="row mb-2">
                                   <div class="col-6">
                                        <label for="inputKecamatan" class="form-label"> Kecamatan : </label>
                                        <input class="form-control" id="inputKecamatan" value="<?php echo $pt->kecamatan ?>" required></input>
                                        <div class="invalid-feedback">
                                             Silahkan masukkan kecamatan
                                        </div>
                                   </div>
                                   <div class="col-6">
                                        <label for="inputKelurahan" class="form-label"> Kelurahan : </label>
                                        <input class="form-control" id="inputKelurahan" value="<?php echo $pt->kelurahan ?>" required></input>
                                        <div class="invalid-feedback">
                                             Silahkan masukkan kecamatan
                                        </div>
                                   </div>
                              </div>

                              <div class="row mb-2">
                                   <div class="col-6">
                                        <label for="inputNoPBB" class="form-label"> No PBB : </label>
                                        <input class="form-control" id="inputNoPBB" value="<?php echo $pt->no_pbb ?>" required></input>
                                        <div class="invalid-feedback">
                                             Silahkan masukkan No PBB
                                        </div>
                                   </div>
                                   <div class="col-6">
                                        <label for="inputKondisiTanah" class="form-label"> Kondisi Tanah : </label>
                                        <input class="form-control" id="inputKondisiTanah" value="<?php echo $pt->kondisi_tanah ?>" required></input>
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
                                        <input class="form-control" id="inputNIB" value="<?php echo $pt->nib ?>" required></input>
                                        <div class="invalid-feedback">
                                             Silahkan masukkan NIB
                                        </div>
                                   </div>
                                   <div class="col-6">
                                        <label for="inputLuas" class="form-label"> Luas : </label>
                                        <input class="form-control" id="inputLuas" value="<?php echo $pt->luas ?>" required></input>
                                        <div class="invalid-feedback">
                                             Silahkan masukkan luas
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="col-12">
                              <label for="inputKeterangan" class="form-label"> Keterangan : </label>
                              <textarea class="form-control" id="inputKeterangan" rows="3" required><?php echo $pt->keterangan ?></textarea>
                              <div class="invalid-feedback">
                                   Silahkan masukkan alas keterangan
                              </div>
                         </div>
                    </div>
               </div>

               <div class="tab-pane fade" id="v-pills-rincian-tanah" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                    <div class="rincian-transaksi">
                         <div id="data-rincian-transaksi">
                              <h5 class="mb-3">Data rincian transaksi : </h5>
                              <div class="row mb-2">
                                   <div class="col-6">
                                        <label for="inputKJPP" class="form-label"> KJPP : </label>
                                        <input class="form-control" id="inputKjppRincianTransaksi" placeholder="Masukkan KJPP" value="<?php echo $rt->kjpp ?>"/>
                                   </div>
                                   <div class="col-6">
                                        <label for="inputNilaiGantiRugi" class="form-label"> Nilai uang ganti rugi : </label>
                                        <input class="form-control" id="inputNilaiGantiRugiRincianTransaksi" placeholder="Nilai Uang Ganti Rugi" value="<?php echo $rt->nilai_uang_ganti_rugi ?>"/>
                                   </div>
                              </div>
                              <div class="row mb-2">
                                   <div class="col-6">
                                        <label for="inputDari" class="form-label"> Dari </label>
                                        <input class="form-control" id="inputDariRincianTransaksi" placeholder="Masukkan Dari" value="<?php echo $rt->dari ?>"/>
                                   </div>
                                   <div class="col-6">
                                        <label for="inputDari" class="form-label"> Kepada : </label>
                                        <input class="form-control" id="inputKepadaRincianTransaksi" placeholder="Masukkan Kepada" value="<?php echo $rt->kepada ?>"/>
                                   </div>
                              </div>
                              <div class="col-12 mb-3">
                                   <label for="inputBerdasarkan" class="form-label">Berdasarkan : </label>
                                   <textarea class="form-control" id="inputBerdasarkanRincianTransaksi" rows="3" placeholder="Masukkan Berdasarkan"><?php echo $rt->berdasarkan ?></textarea>
                              </div>
                              <div class="d-flex justify-content-end">
                                   @if($rt->kjpp === null)
                                        <button class="btn btn-soft-success btn-sm" id="btnSimpanRincian" onclick="addRincianPembayaran()">Simpan Rincian Transaksi</button>
                                   @else
                                        <button class="btn btn-soft-success btn-sm" id="btnUpdateRincian" onclick="updateRincianPembayaran()">Update Rincian Transaksi</button>
                                   @endif
                              </div>
                         <div>

                         <hr>

                         <div class="mt-4">
                              <div class="d-flex justify-content-between">
                                   <h5 class="mb-3">Riwayat Peralihan : </h5>
                                   <button id="btnPlusRiwayatPeralihan" class="btn btn-soft-primary btn-sm">Tambah Riwayat</button>
                              </div>

                              @if($rp->count()>0)
                                   
                              <div id="riwayat-peralihan">
                                   <?php $no=0;
                                        $i=-1;
                                    ?>
                                   @foreach($rp as $r)
                                   <?php $no++;
                                        $i++;
                                   ?>
                                   <div>
                                        <div class="col-12 mb-4">
                                             <label for="inputRiwayatPeralihan" class="form-label">Riwayat Peralihan #{{$no}} : </label>
                                             <textarea class="form-control" id="inputRiwayatPeralihan_{{$i}}" rows="3" placeholder="Masukkan Keterangan Peralihan" required>{{$r->riwayat_peralihan}}</textarea>
                                        </div>

                                        <div class="accordion mb-4" id="accordionPanelsStayOpenExample">
                                             <div class="accordion-item">
                                                  <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                                       <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpenPPH_{{$i}}" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
                                                            <strong>PPH</strong>
                                                       </button>
                                                  </h2>
                                                  <div id="panelsStayOpenPPH_{{$i}}" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne" style="">
                                                       <div class="accordion-body">
                                                            <div class="row mb-4">
                                                                 <div class="col-4">
                                                                      <label for="inputKJPP" class="form-label">SSP (PPH Final)</label>
                                                                      <select onchange="calculateSSP('{{$i}}')" class="form-select" id="inputPresentasePPH_{{$i}}" aria-label="Default select example">
                                                                           <option value="0.025" 
                                                                           @if($r->persentase_pph==0.025)
                                                                           selected
                                                                           @endif
                                                                           >2,5 %</option>
                                                                           <option value="0.05"
                                                                           @if($r->persentase_pph==0.05)
                                                                           selected
                                                                           @endif
                                                                           >5 %</option>
                                                                      </select>
                                                                 </div>
                                                                 <div class="col-4">
                                                                      <label for="inputNilaiTransaksi_{{$i}}" class="form-label"> Nilai Transaksi Tanah </label>
                                                                      <input
                                                                      value="{{$r->nilai_transaksi_pph}}"
                                                                      type="text" class="form-control" id="inputNilaiTransaksiPPH_{{$i}}" placeholder="Masukkan Nilai Transaksi Tanah" onkeyup="calculateSSP('{{$i}}')"></input>
                                                                 </div>
                                                                 <div class="col-4">
                                                                      <label for="inputNilaiAlasHak_{{$i}}" class="form-label"> Rp. </label>
                                                                      <input value="{{$r->total_pph}}"
                                                                      type="text" class="form-control" id="inputNilaiTotalPPH_{{$i}}" readonly></input>
                                                                 </div>
                                                            </div>

                                                            <div class="col-12">
                                                                 <label for="inputKeteranganPeraturanPPH_{{$i}}" class="form-label"> Keterangan Peraturan </label>
                                                                 <textarea type="text" class="form-control" rows="3" id="inputKeteranganPeraturanPPH_{{$i}}"  required>{{$r->ket_peraturan_pph}}</textarea>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                             <div class="accordion-item">
                                                  <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                                       <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpenBPHTP_{{$i}}" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                                            <strong>BPHTB</strong>
                                                       </button>
                                                  </h2>
                                                  <div id="panelsStayOpenBPHTP_{{$i}}" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo" style="">
                                                       <div class="accordion-body">
                                                            <div class="row mb-4">
                                                                 <div class="col-4">
                                                                      <label for="inputKJPP" class="form-label">BPHTB</label>
                                                                      <select class="form-select" id="inputPresentaseBPHTB_{{$i}}" aria-label="Default select example">
                                                                           <option value="0.05">5 %</option>
                                                                      </select>
                                                                 </div>
                                                                 <div class="col-4">
                                                                      <label for="inputNilaiTransaksi_{{$i}}" class="form-label"> Nilai Transaksi Tanah - 75.000.000</label>
                                                                      <input type="text" value="{{$r->nilai_transaksi_bphtb}}" class="form-control" id="inputNilaiTransaksiBPHTB_{{$i}}" readonly='1' placeholder=""></input>
                                                                 </div>
                                                                 <div class="col-4">
                                                                      <label for="inputTotalBPHTB_{{$i}}" class="form-label"> Rp. </label>
                                                                      <input type="text" class="form-control" id="inputTotalBPHTB_{{$i}}" readonly  value="{{$r->total_bphtb}}"></input>
                                                                 </div>
                                                            </div>

                                                            <div class="col-12">
                                                                 <label for="inputKeteranganPeraturanBPHTB_{{$i}}" class="form-label"> Keterangan Peraturan </label>
                                                                 <textarea type="text" class="form-control" rows="3" id="inputKeteranganPeraturanBPHTB_{{$i}}" >{{$r->ket_peraturan_bphtb}}</textarea>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                             <div class="accordion-item">
                                                  <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                                       <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpenPPN_{{$i}}" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                                            <strong>PPN</strong>
                                                       </button>
                                                  </h2>
                                                  <div id="panelsStayOpenPPN_{{$i}}" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree" style="">
                                                       <div class="accordion-body">
                                                            <div class="row mb-4">
                                                                 <div class="col-4">
                                                                      <label for="inputKJPP" class="form-label">Keterangan</label>
                                                                      <input type="text" value="{{$r->ket_ppn}}" class="form-control" id="inputKeteranganPPN_{{$i}}" placeholder="Masukkan Keterangan"></input>
                                                                 </div>
                                                                 <div class="col-4">
                                                                      <label for="inputAlasHak" class="form-label"> PPN </label>
                                                                      
                                                                      <select onchange="calculatePPN('{{$i}}')" class="form-select" id="inputPresentasePPN_{{$i}}" aria-label="Default select example">
                                                                           <option value="0" 
                                                                           @if($r->ppn==0)
                                                                           selected
                                                                           @endif
                                                                           >Tanpa PPN</option>
                                                                           <option value="0.11"
                                                                           @if($r->ppn==0.11)
                                                                           selected
                                                                           @endif
                                                                           >PPN 11%</option>
                                                                      </select>                                                                 </div>
                                                                 <div class="col-4">
                                                                      <label for="inputTotalPPN" class="form-label"> Rp. </label>
                                                                      <input type="text" class="form-control" id="inputTotalPPN_{{$i}}" value="{{$r->total_ppn}}"></input>
                                                                 </div>
                                                            </div>

                                                            <div class="col-12">
                                                                 <label for="inputAlasHak" class="form-label"> Keterangan Peraturan </label>
                                                                 <textarea type="text" class="form-control" rows="3" id="inputKeteranganPeraturanPPN_{{$i}}">{{$r->ket_peraturan_ppn}}</textarea>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>

                                   </div>

                                   @endforeach
                              </div>



                              @else


                              <div id="riwayat-peralihan">
                                   <div>
                                        <div class="col-12 mb-4">
                                             <label for="inputRiwayatPeralihan" class="form-label">Riwayat Peralihan #1 : </label>
                                             <textarea class="form-control" id="inputRiwayatPeralihan_0" rows="3" placeholder="Masukkan Keteranga Peralihan" required></textarea>
                                        </div>

                                        <div class="accordion mb-4" id="accordionPanelsStayOpenExample">
                                             <div class="accordion-item">
                                                  <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                                       <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpenPPH_0" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
                                                            <strong>PPH</strong>
                                                       </button>
                                                  </h2>
                                                  <div id="panelsStayOpenPPH_0" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne" style="">
                                                       <div class="accordion-body">
                                                            <div class="row mb-4">
                                                                 <div class="col-4">
                                                                      <label for="inputKJPP" class="form-label">SSP (PPH Final)</label>
                                                                      <select onchange="calculateSSP('0')" class="form-select" id="inputPresentasePPH_0" aria-label="Default select example">
                                                                           <option value="0.025" selected>2,5 %</option>
                                                                           <option value="0.05">5 %</option>
                                                                      </select>
                                                                 </div>
                                                                 <div class="col-4">
                                                                      <label for="inputNilaiTransaksi_0" class="form-label"> Nilai Transaksi Tanah </label>
                                                                      <input
                                                                      
                                                                      type="text" class="form-control" id="inputNilaiTransaksiPPH_0" placeholder="Masukkan Nilai Transaksi Tanah" onkeyup="calculateSSP('0')"></input>
                                                                 </div>
                                                                 <div class="col-4">
                                                                      <label for="inputNilaiAlasHak_0" class="form-label"> Rp. </label>
                                                                      <input type="text" class="form-control" id="inputNilaiTotalPPH_0" readonly></input>
                                                                 </div>
                                                            </div>

                                                            <div class="col-12">
                                                                 <label for="inputKeteranganPeraturanPPH_0" class="form-label"> Keterangan Peraturan </label>
                                                                 <textarea type="text" class="form-control" rows="3" id="inputKeteranganPeraturanPPH_0"  required></textarea>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                             <div class="accordion-item">
                                                  <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                                       <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpenBPHTP_0" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                                            <strong>BPHTB</strong>
                                                       </button>
                                                  </h2>
                                                  <div id="panelsStayOpenBPHTP_0" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo" style="">
                                                       <div class="accordion-body">
                                                            <div class="row mb-4">
                                                                 <div class="col-4">
                                                                      <label for="inputKJPP" class="form-label">BPHTB</label>
                                                                      <select class="form-select" id="inputPresentaseBPHTB_0" aria-label="Default select example">
                                                                           <option value="0.05">5 %</option>
                                                                      </select>
                                                                 </div>
                                                                 <div class="col-4">
                                                                      <label for="inputNilaiTransaksi_0" class="form-label"> Nilai Transaksi Tanah - 75.000.000</label>
                                                                      <input type="text" class="form-control" id="inputNilaiTransaksiBPHTB_0" readonly='1' placeholder=""></input>
                                                                 </div>
                                                                 <div class="col-4">
                                                                      <label for="inputTotalBPHTB_0" class="form-label"> Rp. </label>
                                                                      <input type="text" class="form-control" id="inputTotalBPHTB_0" readonly></input>
                                                                 </div>
                                                            </div>

                                                            <div class="col-12">
                                                                 <label for="inputKeteranganPeraturanBPHTB_0" class="form-label"> Keterangan Peraturan </label>
                                                                 <textarea type="text" class="form-control" rows="3" id="inputKeteranganPeraturanBPHTB_0" ></textarea>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                             <div class="accordion-item">
                                                  <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                                       <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpenPPN_0" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                                            <strong>PPN</strong>
                                                       </button>
                                                  </h2>
                                                  <div id="panelsStayOpenPPN_0" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree" style="">
                                                       <div class="accordion-body">
                                                            <div class="row mb-4">
                                                                 <div class="col-4">
                                                                      <label for="inputKJPP" class="form-label">Keterangan</label>
                                                                      <input type="text" class="form-control" id="inputKeteranganPPN_0" placeholder="Masukkan Keterangan"></input>
                                                                 </div>
                                                                 <div class="col-4">
                                                                      <label for="inputAlasHak" class="form-label"> PPN </label>
                                                                      
                                                                      <select onchange="calculatePPN('0')" class="form-select" id="inputPresentasePPN_0" aria-label="Default select example">
                                                                           <option value="0" selected>Tanpa PPN</option>
                                                                           <option value="0.11">PPN 11%</option>
                                                                      </select>                                                                 </div>
                                                                 <div class="col-4">
                                                                      <label for="inputTotalPPN" class="form-label"> Rp. </label>
                                                                      <input type="text" class="form-control" id="inputTotalPPN_0" value="0"></input>
                                                                 </div>
                                                            </div>

                                                            <div class="col-12">
                                                                 <label for="inputAlasHak" class="form-label"> Keterangan Peraturan </label>
                                                                 <textarea type="text" class="form-control" rows="3" id="inputKeteranganPeraturanPPN_0"></textarea>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>

                                   </div>
                              </div>

                              
                              @endif

                              <div class="d-flex mt-3">
                                   <button id="btnSimpanRiwayatPeralihan" class="btn btn-soft-warning btn-sm ms-auto">
                                        Simpan Riwayat Peralihan
                                   </button>
                              </div>
                         </div>
                         <hr>
                         <div class="pajak-bumi-bangunan mb-3">
                              <div class="d-flex justify-content-">
                                   <h5 class="mb-3">Pajak Bumi Bangunan (PBB) : </h5>
                              </div>
                              
                              <div class="row d-flex justify-content-between">
                                   <div class="col-4">
                                        <label for="inputPBB" class="form-label">Keterangan PBB : </label>
                                        <input class="form-control" id="inputKetPBB" placeholder="Masukkan Keterangan PBB"></input>
                                   </div>
                                   <div class="col-4">
                                        <label for="inputPBB" class="form-label">PBB  </label>
                                        <input class="form-control" id="inputPBB" placeholder="Masukkan PBB"></input>
                                   </div>
                                   <div class="col-4">
                                        <label for="inputTotalPBB" class="form-label"> Rp. </label>
                                        <input type="text" class="form-control" id="inputTotalPBB_0" value="0"></input>
                                   </div>
                              
                              </div>
                              <div class="col-12 mt-3">
                                   <textarea type="text" class="form-control" rows="3" id="inputKeteranganPeraturanPBB" placeholder="Masukkan Keterangan Peraturan PBB"></textarea>
                              </div>
                              <div class="d-flex justify-content-end">
                              
                                   <button class="btn btn-soft-success btn-sm" id="btnUpdateRincian" onclick="updatePBB()">Update PBB</button>
                              </div>
                         </div>

                         
                         <div>
                              <div class="row d-flex justify-content-between mb-2">
                                   <div class="col-8">
                                        <h3>Total : </h2>
                                   </div>
                                   <div class="col-4 text-right">
                                        <H3>Rp. <span id='span_total'>00.00</span></H3>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>

               <!-- <div class="pajak-penghasilan-peralihan mb-5">
                    <h5 class="mb-3">Pajak Penghasilan Peralihan :</h5>
                    <div class="row">
                         <div class="col-6">
                              <label for="inputBerdasarkan" class="form-label">Pajak Penghasilan Peralihan</label>
                              <input class="form-control" id="inputBerdasarkan" rows="3" required></input>
                              <div class="invalid-feedback">
                                   Silahkan masukkan input berdasarkan
                              </div>
                         </div>
                         <div class="col-3 text-center">
                              <p class="mt-4"> X 0.0%</p>
                         </div>
                         <div class="col-3 text-center">
                              <p class="mt-4">Rp. 0</p>
                         </div>
                    </div>
               </div>

               <div class="pajak-bumi-bangunan mb-5">
                    <h5 class="mb-3">Pajak Bumi Bangunan (PBB) : </h5>
                    <div class="row d-flex justify-content-between">
                         <div class="col-6">
                              <label for="inputPBB" class="form-label">PBB : </label>
                              <input class="form-control" id="inputPBB" required></input>
                              <div class="invalid-feedback">
                                   Silahkan masukkan input berdasarkan
                              </div>
                         </div>
                         <div class="col-3 text-center">
                              <p class="mt-4">Rp. 0</p>
                         </div>
                    </div>
               </div>

               <div class="total-nilai-ganti">
                    <div class="row">
                         <div class="col-9">
                              <h5>Total Nilai Ganti : </h5>
                         </div>
                         <div class="col-3">
                              <p class="text-center"><b>Rp. 0</b></p>
                         </div>
                    </div>
               </div> -->
          </div>
     </div>
</div>
</div>

<script>
     updateTotal();
     var counter = <?php if($rp->count()>0) echo ($rp->count()-1) ; else echo 0 ?>;

     var pubdir = "{{asset('')}}";
     var url;
     var id_persil = "{{$pt->id_persil_tanah}}"

     function updateTotal()
     {
          var total=0;
          for(i=0;i<10;i++)
          {    var v=document.getElementById(`inputNilaiTotalPPH_${i}`);

               if(v===null)
               {

               }
               else
               {
                    var bphtb = parseInt(document.getElementById(`inputNilaiTotalPPH_${i}`).value.replace(/\./g,''));
                    total=total+bphtb;
               }

                v=document.getElementById(`inputTotalBPHTB_${i}`);

               if(v===null)
               {

               }
               else
               {
                    var ppn = parseInt(document.getElementById(`inputTotalBPHTB_${i}`).value.replace(/\./g,''));
                    total=total+ppn;
               }
               
                v=document.getElementById(`inputTotalPPN_${i}`);

               if(v===null)
               {

               }
               else
               {
                    var ppn = parseInt(document.getElementById(`inputTotalPPN_${i}`).value.replace(/\./g,''));
                    total=total+ppn;
               }


          }
          $("#span_total").html(toRupiah(total))
     }

     function addRincianPembayaran(){
          let kjpp = document.getElementById('inputKjppRincianTransaksi').value;
          let nilaiGantiRugi = document.getElementById('inputNilaiGantiRugiRincianTransaksi').value;
          let dari = document.getElementById('inputDariRincianTransaksi').value;
          let kepada = document.getElementById('inputKepadaRincianTransaksi').value;
          let berdasarkan = document.getElementById('inputBerdasarkanRincianTransaksi').value;

          url = pubdir + 'add_rincian_transaksi/' + id_persil;

          $.ajax({
               url: url,
               type: "POST",
               data: {
                    _method: 'POST',
                    _token: '{{ csrf_token() }}',
                    kjpp: kjpp,
                    nilai_ganti_rugi: nilaiGantiRugi,
                    dari: dari,
                    kepada: kepada,
                    berdasarkan: berdasarkan
               }, 
               success : function(data){
                    if(data.status === "success"){
                         Swal.fire({
                              target: "#riwayat-peralihan",
                              icon: 'success',
                              title: 'Success!',
                              text: 'Berhasil menambah riwayat transaksi',
                              showConfirmButton: false,
                              timer: 2000,
                         });
                    } else {
                         Swal.fire({
                              target: "#riwayat-peralihan",
                              icon: 'error',
                              title: 'Error!',
                              text: data.msg,
                              showConfirmButton: true,
                         });
                    }
               }
          });
     }

     function updateRincianPembayaran(){
          let kjpp = document.getElementById('inputKjppRincianTransaksi').value;
          let nilaiGantiRugi = document.getElementById('inputNilaiGantiRugiRincianTransaksi').value;
          let dari = document.getElementById('inputDariRincianTransaksi').value;
          let kepada = document.getElementById('inputKepadaRincianTransaksi').value;
          let berdasarkan = document.getElementById('inputBerdasarkanRincianTransaksi').value;

          url = pubdir + 'update_rincian_pembayaran/' + id_persil;

          $.ajax({
               url: url,
               type: "PUT",
               data: {
                    _token: '{{ csrf_token() }}',
                    kjpp: kjpp,
                    nilai_ganti_rugi: nilaiGantiRugi,
                    dari: dari,
                    kepada: kepada,
                    berdasarkan: berdasarkan
               }, 
               success : function(data){
                    if(data.status === "success"){
                         Swal.fire({
                              target: "#riwayat-peralihan",
                              icon: 'success',
                              title: 'Success!',
                              text: 'Berhasil mengubah riwayat transaksi',
                              showConfirmButton: false,
                              timer: 2000,
                         });
                    } else {
                         Swal.fire({
                              target: "#riwayat-peralihan",
                              icon: 'error',
                              title: 'Error!',
                              text: data.msg,
                              showConfirmButton: true,
                         });
                    }
               }
          });
     }

     //Set rupiah currency
     var currencyMask = IMask(
     document.getElementById('inputNilaiGantiRugiRincianTransaksi'),
     {
          mask: 'Rp.num',
          blocks: {
               num: {
               // nested masks are available!
               mask: Number,
               thousandsSeparator: '.'
               }
          }
     });
  
     //Add button add event addEventListener
     btnPlusRiwayatPeralihan.addEventListener('click', function() {
          counter++;
          var urut=counter+1;
          let content = `<div id="contentDataRiwayatPeralihan_${counter}" >
               <div id="riwayat-peralihan_${counter}">
                                   <div>
                                        <div class="col-12 mb-4">
                                             <label for="inputRiwayatPeralihan" class="form-label">Riwayat Peralihan #${urut} : </label>
                                             <textarea class="form-control" id="inputRiwayatPeralihan_${counter}" rows="3" placeholder="Masukkan Keterangan Peralihan" required></textarea>
                                        </div>

                                        <div class="accordion mb-4" id="accordionPanelsStayOpenExample">
                                             <div class="accordion-item">
                                                  <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                                       <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpenPPH_${counter}" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
                                                            <strong>PPH</strong>
                                                       </button>
                                                  </h2>
                                                  <div id="panelsStayOpenPPH_${counter}" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne" style="">
                                                       <div class="accordion-body">
                                                            <div class="row mb-4">
                                                                 <div class="col-4">
                                                                      <label for="inputKJPP" class="form-label">SSP (PPH Final)</label>
                                                                      <select onchange="calculateSSP('${counter}')" class="form-select" id="inputPresentasePPH_${counter}" aria-label="Default select example">
                                                                           <option value="0.025" selected>2,5 %</option>
                                                                           <option value="0.05">5 %</option>
                                                                      </select>
                                                                 </div>
                                                                 <div class="col-4">
                                                                      <label for="inputNilaiTransaksi_${counter}" class="form-label"> Nilai Transaksi Tanah </label>
                                                                      <input
                                                                      
                                                                      type="text" class="form-control" id="inputNilaiTransaksiPPH_${counter}" placeholder="Masukkan Nilai Transaksi Tanah" onkeyup="calculateSSP('${counter}')"></input>
                                                                 </div>
                                                                 <div class="col-4">
                                                                      <label for="inputNilaiAlasHak_${counter}" class="form-label"> Rp. </label>
                                                                      <input type="text" class="form-control" id="inputNilaiTotalPPH_${counter}" readonly></input>
                                                                 </div>
                                                            </div>

                                                            <div class="col-12">
                                                                 <label for="inputKeteranganPeraturanPPH_${counter}" class="form-label"> Keterangan Peraturan </label>
                                                                 <textarea type="text" class="form-control" rows="3" id="inputKeteranganPeraturanPPH_${counter}"  required></textarea>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                             <div class="accordion-item">
                                                  <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                                       <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpenBPHTP_${counter}" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                                            <strong>BPHTB</strong>
                                                       </button>
                                                  </h2>
                                                  <div id="panelsStayOpenBPHTP_${counter}" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo" style="">
                                                       <div class="accordion-body">
                                                            <div class="row mb-4">
                                                                 <div class="col-4">
                                                                      <label for="inputKJPP" class="form-label">BPHTB</label>
                                                                      <select class="form-select" id="inputPresentaseBPHTB_${counter}" aria-label="Default select example">
                                                                           <option value="0.05">5 %</option>
                                                                      </select>
                                                                 </div>
                                                                 <div class="col-4">
                                                                      <label for="inputNilaiTransaksi_${counter}" class="form-label"> Nilai Transaksi Tanah - 75.000.000</label>
                                                                      <input type="text" class="form-control" id="inputNilaiTransaksiBPHTB_${counter}" readonly='1' placeholder=""></input>
                                                                 </div>
                                                                 <div class="col-4">
                                                                      <label for="inputTotalBPHTB_${counter}" class="form-label"> Rp. </label>
                                                                      <input type="text" class="form-control" id="inputTotalBPHTB_${counter}" readonly></input>
                                                                 </div>
                                                            </div>

                                                            <div class="col-12">
                                                                 <label for="inputKeteranganPeraturanBPHTB_${counter}" class="form-label"> Keterangan Peraturan </label>
                                                                 <textarea type="text" class="form-control" rows="3" id="inputKeteranganPeraturanBPHTB_${counter}" ></textarea>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                             <div class="accordion-item">
                                                  <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                                       <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpenPPN_${counter}" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                                            <strong>PPN</strong>
                                                       </button>
                                                  </h2>
                                                  <div id="panelsStayOpenPPN_${counter}" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree" style="">
                                                       <div class="accordion-body">
                                                            <div class="row mb-4">
                                                                 <div class="col-4">
                                                                      <label for="inputKJPP" class="form-label">Keterangan</label>
                                                                      <input type="text" class="form-control" id="inputKeteranganPPN_${counter}" placeholder="Masukkan Keterangan"></input>
                                                                 </div>
                                                                 <div class="col-4">
                                                                      <label for="inputAlasHak" class="form-label"> PPN </label>
                                                                      
                                                                      <select onchange="calculatePPN('${counter}')" class="form-select" id="inputPresentasePPN_${counter}" aria-label="Default select example">
                                                                           <option value="0" selected>Tanpa PPN</option>
                                                                           <option value="0.11">PPN 11%</option>
                                                                      </select>                                                                 </div>
                                                                 <div class="col-4">
                                                                      <label for="inputTotalPPN" class="form-label"> Rp. </label>
                                                                      <input type="text" class="form-control" id="inputTotalPPN_${counter}" value="0"></input>
                                                                 </div>
                                                            </div>

                                                            <div class="col-12">
                                                                 <label for="inputAlasHak" class="form-label"> Keterangan Peraturan </label>
                                                                 <textarea type="text" class="form-control" rows="3" id="inputKeteranganPeraturanPPN_${counter}"></textarea>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>

                                   </div>
                              </div>
                         </div>`

          document.getElementById("riwayat-peralihan").insertAdjacentHTML("beforeend", content);
     });

     btnSimpanRiwayatPeralihan.addEventListener('click', function() {
          let riwayatPeralihan = [];

          let persentasePPH = [];
          let nilaiTransaksiPPH = [];
          let totalPPH = [];
          let keteranganPeraturanPPH = [];

          let persentaseBPHTB = [];
          let nilaiTransaksiBPHTB = [];
          let totalBPHTB = [];
          let keteranganPeraturanBPHTB = [];

          let keteranganPPN = [];
          let nilaiPPN = [];
          let totalPPN = [];
          let keteranganPeraturanPPN = [];

          if (counter > 0){
               for(let index=0; index <=counter; index++){
                    //get data input from riwayat peralihan
                    riwayatPeralihan[index] = document.getElementById(`inputRiwayatPeralihan_${index}`).value;

                    //get data input from PPH
                    persentasePPH[index] = document.getElementById(`inputPresentasePPH_${index}`).value;
                    nilaiTransaksiPPH[index] = document.getElementById(`inputNilaiTransaksiPPH_${index}`).value;
                    totalPPH[index] = document.getElementById(`inputNilaiTotalPPH_${index}`).value;
                    keteranganPeraturanPPH[index]=document.getElementById(`inputKeteranganPeraturanPPH_${index}`).value;
                     
                    //get data input from BPHTB
                    persentaseBPHTB[index] = document.getElementById(`inputPresentaseBPHTB_${index}`).value;
                    nilaiTransaksiBPHTB[index] = document.getElementById(`inputNilaiTransaksiBPHTB_${index}`).value;
                    totalBPHTB[index] = document.getElementById(`inputTotalBPHTB_${index}`).value;
                    keteranganPeraturanBPHTB[index] = document.getElementById(`inputKeteranganPeraturanBPHTB_${index}`).value;

                    //get data input from PPN
                    keteranganPPN[index] = document.getElementById(`inputKeteranganPPN_${index}`).value;
                    nilaiPPN[index] = document.getElementById(`inputPresentasePPN_${index}`).value;
                    totalPPN[index] = document.getElementById(`inputTotalPPN_${index}`).value;
                    keteranganPeraturanPPN[index] = document.getElementById(`inputKeteranganPeraturanPPN_${index}`).value;
               }
          } else {
               riwayatPeralihan[0] = document.getElementById(`inputRiwayatPeralihan_0`).value;

               //get data input from PPH
               persentasePPH[0] = document.getElementById(`inputPresentasePPH_0`).value;
               nilaiTransaksiPPH[0] = document.getElementById(`inputNilaiTransaksiPPH_0`).value;
               totalPPH[0] = document.getElementById(`inputNilaiTotalPPH_0`).value;
               keteranganPeraturanPPH[0] = document.getElementById(`inputKeteranganPeraturanPPH_0`).value;
               //get data input from BPHTB
               persentaseBPHTB[0] = document.getElementById(`inputPresentaseBPHTB_0`).value;
               nilaiTransaksiBPHTB[0] = document.getElementById(`inputNilaiTransaksiBPHTB_0`).value;
               totalBPHTB[0] = document.getElementById(`inputTotalBPHTB_0`).value;
               keteranganPeraturanBPHTB[0] = document.getElementById(`inputKeteranganPeraturanBPHTB_0`).value;

               //get data input from PPN
               keteranganPPN[0] = document.getElementById(`inputKeteranganPPN_0`).value;
               nilaiPPN[0] = document.getElementById(`inputPresentasePPN_0`).value;
               totalPPN[0] = document.getElementById(`inputTotalPPN_0`).value;
               keteranganPeraturanPPN[0] = document.getElementById(`inputKeteranganPeraturanPPN_0`).value;
          }

          url = pubdir + "add_riwayat_peralihan/" + id_persil;

          $.ajax({
               url: url,
               type: "POST",
               data: {
                    _method: 'POST',
                    _token: '{{ csrf_token() }}',
                    riwayat_peralihan: riwayatPeralihan,
                    persentase_pph: persentasePPH,
                    nilai_transaksi_pph: nilaiTransaksiPPH,
                    total_pph:totalPPH,
                    keterangan_peraturan_pph: keteranganPeraturanPPH,
                    persentase_bphtb: persentaseBPHTB,
                    nilai_transaksi_bphtb: nilaiTransaksiBPHTB,
                    total_bphtb: totalBPHTB,
                    keterangan_peraturan_bphtb: keteranganPeraturanBPHTB,
                    keterangan_ppn: keteranganPPN,
                    nilai_ppn: nilaiPPN,
                    total_ppn: totalPPN,
                    keterangan_peraturan_ppn: keteranganPeraturanPPN
               }, 
               success : function(data){
                    if(data.status === "success"){
                         Swal.fire({
                              target: "#riwayat-peralihan",
                              icon: 'success',
                              title: 'Success!',
                              text: 'Berhasil menambah riwayat transaksi',
                              showConfirmButton: false,
                              timer: 2000,
                         });
                    } else {
                         Swal.fire({
                              target: "#riwayat-peralihan",
                              icon: 'error',
                              title: 'Error!',
                              text: data.msg,
                              showConfirmButton: true,
                         });
                    }
               }
          });
     });

     function toRupiah(val) {
  // remove sign if negative

          var sign = 1;
          if (val < 0) {
          sign = -1;
          val = -val;
          }

          // trim the number decimal point if it exists
          let num = val.toString().includes(',') ? val.toString().split(',')[0] : val.toString();
          let len = num.toString().length;
          let result = '';
          let count = 1;

          for (let i = len - 1; i >= 0; i--) {
          result = num.toString()[i] + result;
          if (count % 3 === 0 && count !== 0 && i !== 0) {
               result = '.' + result;
          }
          count++;
          }

          // add number after decimal point
          if (val.toString().includes(',')) {
          result = result + ',' + val.toString().split(',')[1];
          }
          // return result with - sign if negative
          return sign < 0 ? '-' + result : result;
          }

     function calculateSSP(index) {
          var nilaiTransaksiPPH = parseInt(document.getElementById(`inputNilaiTransaksiPPH_${index}`).value.replace(/\./g,''));


          //Set auto text to input nilai transaksi
          var nilaiTransaksiBPHTB=0;
          if(nilaiTransaksiPPH>75000000)
          {
               nilaiTransaksiBPHTB=nilaiTransaksiPPH-75000000;
          }
          document.getElementById(`inputNilaiTransaksiBPHTB_${index}`).value = toRupiah(nilaiTransaksiBPHTB);
         
          var persentasePPH = parseFloat(document.getElementById(`inputPresentasePPH_${index}`).value);

          //var totalNilaiTransaksiPPH = nilaiTransaksiPPH - (nilaiTransaksiPPH * persentasePPH);
          //var totalNilaiTransaksiBPHTB = nilaiTransaksiPPH - (nilaiTransaksiPPH * 0.05);
          var totalNilaiTransaksiPPH = (nilaiTransaksiPPH * persentasePPH);
          var totalNilaiTransaksiBPHTB = (nilaiTransaksiBPHTB * 0.05);

          if (isNaN(nilaiTransaksiPPH)){
               document.getElementById(`inputNilaiTotalPPH_${index}`).value = "";
               document.getElementById(`inputTotalBPHTB_${index}`).value = "";
          } else {
               document.getElementById(`inputNilaiTotalPPH_${index}`).value = toRupiah(totalNilaiTransaksiPPH);
               document.getElementById(`inputTotalBPHTB_${index}`).value = toRupiah(totalNilaiTransaksiBPHTB);
          }

          document.getElementById(`inputNilaiTransaksiPPH_${index}`).value=toRupiah(nilaiTransaksiPPH);
          updateTotal();
     }


     function calculatePPN(index) {
          var nilaiTransaksiPPH = parseInt(document.getElementById(`inputNilaiTransaksiPPH_${index}`).value.replace(/\./g,''));


          //Set auto text to input nilai transaksi
          
          var persentasePPN = parseFloat(document.getElementById(`inputPresentasePPN_${index}`).value);

          //var totalNilaiTransaksiPPH = nilaiTransaksiPPH - (nilaiTransaksiPPH * persentasePPH);
          //var totalNilaiTransaksiBPHTB = nilaiTransaksiPPH - (nilaiTransaksiPPH * 0.05);
          var totalNilaiTransaksiPPN = (nilaiTransaksiPPH * persentasePPN);
          
          
          document.getElementById(`inputTotalPPN_${index}`).value=toRupiah(totalNilaiTransaksiPPN);
          updateTotal();
     }

     function calculateBPHTB(index) {
          var nilaiTransaksiBPHTB = parseInt(document.getElementById(`inputNilaiTransaksiBPHTB_${index}`).value.replace(/\./g,''));

          //Set auto text to input nilai transaksi
          document.getElementById(`inputNilaiTransaksiPPH_${index}`).value = toRupiah(nilaiTransaksiBPHTB);
          //var totalNilaiTransaksiBPHTB = parseInt(nilaiTransaksiBPHTB) - (parseInt(nilaiTransaksiBPHTB) * 0.05);
          var totalNilaiTransaksiBPHTB =(parseInt(nilaiTransaksiBPHTB) * 0.05);

          //Set nilai total pph
          var persentasePPH = parseFloat(document.getElementById(`inputPresentasePPH_${index}`).value);
          var nilaiTransaksiPPH = document.getElementById(`inputNilaiTransaksiPPH_${index}`).value.replace(/\./g,'');
          //var totalNilaiTransaksiPPH = nilaiTransaksiPPH - (nilaiTransaksiPPH * persentasePPH);
          var totalNilaiTransaksiPPH = (nilaiTransaksiBPHTB * persentasePPH);
          
          if (isNaN(nilaiTransaksiBPHTB)){
               document.getElementById(`inputTotalBPHTB_${index}`).value = "";
               document.getElementById(`inputNilaiTotalPPH_${index}`).value = "";
          } else {
               document.getElementById(`inputNilaiTotalPPH_${index}`).value = toRupiah(totalNilaiTransaksiPPH);
               document.getElementById(`inputTotalBPHTB_${index}`).value = toRupiah(totalNilaiTransaksiBPHTB);
          }
          document.getElementById(`inputNilaiTransaksiBPHTB_${index}`).value=toRupiah(nilaiTransaksiBPHTB);
          updateTotal();
     }


     function deleteContent() {
          document.getElementById(`contentDataRiwayatPeralihan_${counter}`).remove();
          counter--;
     }
</script>