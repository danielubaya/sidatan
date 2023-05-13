     <div class="row h-100">
          <div class="col-md-3">
               <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link mb-2 active" id="v-pills-pengadaan-tab" data-bs-toggle="pill" href="#v-pills-pengadaan" role="tab"><i class="bx bx-notepad"></i> Pengadaan </a>
                    <a class="nav-link mb-2" id="v-pills-pemilik-persil-tab" data-bs-toggle="pill" href="#v-pills-pemilik-persil" role="tab"><i class="bx bx-copy-alt"></i> Persil dan Pembayaran</a>
                    <a class="nav-link mb-2" id="v-pills-data-progress-tab" data-bs-toggle="pill" href="#v-pills-progress" role="tab"><i class="bx bxs-bar-chart-alt-2"></i> Progress</a>
                    <a class="nav-link mb-2" id="v-pills-data-pendukung-tab" data-bs-toggle="pill" href="#v-pills-data-pendukung" role="tab"><i class="bx bx-support"></i> Data Pendukung</a>
                    <a class="nav-link mb-2" id="v-pills-status-history-tab" data-bs-toggle="pill" href="#v-pills-status-history" role="tab"><i class="bx bx-history"></i> Status History</a>
                    <a class="nav-link" id="v-pills-file-history-tab" data-bs-toggle="pill" href="#v-file-history" role="tab"><i class="bx bx-folder-open"></i> File History</a>
               </div>
          </div><!-- end col -->

          <div class="col-md-9">
               <div class="tab-content text-muted mt-4 mt-md-0" id="v-pills-tabContent">
                    <div class="tab-pane fade active show" id="v-pills-pengadaan" role="tabpanel">
                         <div class="d-flex justify-content-between">
                              <div>
                                   <h4 class="mb-2">Pengadaan</h4>
                              </div>
                              <div>
                                   <button class="btn btn-soft-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditPengadaan" onclick="showEditPengadaan('<?php echo $pg->id_pengadaan ?>')">
                                        <i class="bx bx-edit-alt"></i>
                                        Edit Pengadaan
                                   </button>
                              </div>
                         </div>

                         <div>
                              <div class="col-lg-12 col-sm-12 mb-sm-2">
                                   <div id="mapDetail" style="height: 400px;">
                                        <p> Peta </p>
                                   </div>
                                   <script>
                                        //Set map view
                                        var map = L.map('mapDetail').setView([-7.281946, 112.73893], 12);
                                       
                                        //Add open street map layer
                                        var osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                        maxZoom: 19,
                                        });

                                        //Add osm layer to map
                                        osm.addTo(map);

                                        //Declaring a map layer
                                        var googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
                                        maxZoom: 20,
                                        subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
                                        });
                                        var googleHybrid = L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}', {
                                        maxZoom: 20,
                                        subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
                                        });
                                        var googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
                                        maxZoom: 20,
                                        subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
                                        });

                                        //Create the base map
                                        var baseMaps = {
                                             "OpenStreetMap": osm,
                                             "Google Street": googleStreets,
                                             "Google Satellite": googleSat,
                                             "Google Hybrid": googleHybrid,
                                        };

                                        //Add into leaflet layer control
                                        var layerControl = L.control.layers(baseMaps).addTo(map);
                                        L.marker([{{$pg->latlng}}]).addTo(map);
                                        
                                        setTimeout(function() {
                                             map.invalidateSize();
                                        }, 1000);
                                   </script>
                              </div>
                              <div class="col-lg-12 col-sm-12">
                                   <form id="formAddNewProject" class="row needs-validation" novalidate="">
                                        <div class="col-6 mb-3">
                                             <label for="detailPengadaan" class="form-label">Pengadaan : </label>
                                             <input type="text" class="form-control" id="detailPengadaan" value="<?php echo $pg->pengadaan ?>" readonly>
                                        </div>
                                        
                                        <div class="col-6 mb-3">
                                             <label for="detailOPD" class="form-label">OPD : </label>
                                             <input type="text" class="form-control" id="detailOPD" value="<?php echo $pg->opd ?>" readonly>
                                        </div>

                                        <div id="containerLokasi">
                                             
                                        </div>

                                        <div class="col-12 mb-2">
                                             <label for="detailAlamat" class="form-label">Alamat : </label>
                                             <textarea class="form-control" id="detailAlamat" rows="3" readonly><?php echo $pg->alamat; ?></textarea>
                                        </div>

                                        <div class="col-12 mb-4">
                                             <label class="form-label">Luas : </label>
                                             <div class="input-group">
                                                  <input type="number" class="form-control" id="inputLuas" value="<?php echo $pg->luas ?>" readonly>
                                                  <div class="input-group-append">
                                                       <span class="input-group-text" style="background-color:#ffffff; color:black;">m<sup>2</sup></span>
                                                  </div>
                                                  <div class="invalid-feedback">
                                                       Silahkan masukkan luas
                                                  </div>
                                             </div>
                                        </div>

                                        <div class="penerbit mb-4">
                                             <div>
                                                  <label for="inputEditPenetapanLokasi" class="form-label">Penerbit : </label>
                                             </div>

                                             <div class="row">
                                                  <div class="col-6">
                                                       <input class="form-check-input" type="radio" name="flexRadioDefault" id="radioBtnWalikota" checked>
                                                       <label class="form-check-label" for="radioBtnWalikota">
                                                       Walikota (< 5 Ha)
                                                       </label>
                                                  </div>
                                                  <div class="col-6 ">
                                                       <input class="form-check-input" type="radio" name="flexRadioDefault" id="radioBtnGubernur">
                                                       <label class="form-check-label" for="radioBtnGubernur">
                                                       Gubernur (> 5 Ha)
                                                       </label>
                                                  </div>
                                             </div>
                                        </div>

                                        <div class="masa-berlaku mb-4">
                                             <div class="row">
                                                  <div class="col-6 mb-2">
                                                       <label for="inputPenetapanLokasi" class="form-label">Penetapan Lokasi : </label>
                                                       <input class="form-control" id="inputPenetapanLokasi" value="<?php echo $pg->penetapan_lokasi ?>" readonly></input>
                                                       <div class="invalid-feedback">
                                                            Silahkan masukkan lokasi
                                                       </div>
                                                  </div>
                                                  <div class="col-6 mb-2">
                                                       <label for="inputPenetapanLokasi" class="form-label">No SK Penlok : </label>
                                                       <input class="form-control" id="inputPenetapanLokasi" value="<?php echo $pg->no_sk_penlok ?>" readonly></input>
                                                       <div class="invalid-feedback">
                                                            Silahkan masukkan no sk penlok
                                                       </div>
                                                  </div>
                                             </div>
                                        
                                             <div class="row">
                                                  <div class="col-6 mb-2">
                                                       <label for="inputPenetapanLokasi" class="form-label" id="basicDate">Tanggal SK Penlok : </label>
                                                       <div class="input-group">
                                                            <input type="date" value="<?php echo $pg->tgl_sk_penlok ?>" class="form-control" readonly>
                                                       </div>
                                                  </div>
                                                  <div class="col-6 mb-2">
                                                       <label for="inputKodeKegiatan" class="form-label"> Masa Berlaku Sampai : </label>
                                                       <div class="input-group">
                                                            <input type="date" class="form-control" value="<?php echo $pg->masa_berlaku ?>" readonly>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>

                                        @if($pg->perpanjangan_penetapan_lokasi != null)
                                             <div class="perpanjangan mb-4">
                                                  <div class="form-check mb-3">
                                                       <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked onclick="return false;">
                                                       <label class="form-check-label" for="flexCheckDefault">
                                                       Perpanjangan
                                                       </label>
                                                  </div>
                                                  <div class="row mb-2">
                                                       <div class="col-6">
                                                            <label for="inputPenetapanLokasi" class="form-label">Perpanjangan Penetapan Lokasi : </label>
                                                            <input class="form-control" id="inputPenetapanLokasi" value="<?php echo $pg->perpanjangan_penetapan_lokasi ?>" readonly></input>
                                                            <div class="invalid-feedback">
                                                                 Silahkan masukkan lokasi
                                                            </div>
                                                       </div>
                                                       <div class="col-6">
                                                            <label for="inputPenetapanLokasi" class="form-label">No SK Perpanjangan Penlok : </label>
                                                            <input class="form-control" id="inputPenetapanLokasi" value="<?php echo $pg->no_sk_perpanjangan_penlok ?>" readonly></input>
                                                            <div class="invalid-feedback">
                                                                 Silahkan masukkan lokasi
                                                            </div>
                                                       </div>
                                                  </div>

                                                  <div class="row">
                                                       <div class="col-6">
                                                            <label for="inputPenetapanLokasi" class="form-label" id="basicDate">Tanggal SK Perpanjangan Penlok : </label>
                                                            <div class="input-group">
                                                                 <input type="date" class="form-control" value="<?php echo $pg->tgl_sk_perpanjangan_penlok ?>" readonly>
                                                            </div>
                                                       </div>
                                                       <div class="col-6">
                                                            <label for="inputKodeKegiatan" class="form-label"> Masa Berlaku Sampai : </label>
                                                            <input type="date" class="form-control" value="<?php echo $pg->masa_berlaku_perpanjangan ?>" readonly>
                                                       </div>
                                                  </div>
                                             </div>
                                        
                                             <div class="kegiatan">
                                                  <div class="row mb-2">
                                                       <div class="col-6">
                                                            <label for="inputKodeKegiatan" class="form-label"> Kode Kegiatan : </label>
                                                            <input class="form-control" id="inputKodeKegiatan" value="<?php echo $pg->kode_kegiatan ?>" readonly></input>
                                                            <div class="invalid-feedback">
                                                                 Silahkan masukkan kode kegiatan
                                                            </div>
                                                       </div>
                                                       <div class="col-6">
                                                            <label for="inputKeteranganKegiatan" class="form-label"> Keterangan Kegiatan : </label>
                                                            <input class="form-control" id="inputPenetapanLokasi" value="<?php echo $pg->keterangan_kegiatan ?>" readonly></input>
                                                            <div class="invalid-feedback">
                                                                 Silahkan masukkan lokasi
                                                            </div>
                                                       </div>
                                                  </div>
                                                  <div class="row">
                                                       <div class="col-6">
                                                            <label for="inputKodeKegiatan" class="form-label"> Kode Rekening Belanja : </label>
                                                            <input class="form-control" id="inputKodeKegiatan" value="<?php echo $pg->kode_rekening ?>" readonly></input>
                                                            <div class="invalid-feedback">
                                                                 Silahkan masukkan kode rekening
                                                            </div>
                                                       </div>
                                                       <div class="col-6">
                                                            <label for="inputKeteranganKegiatan" class="form-label"> Keterangan Rekening : </label>
                                                            <input class="form-control" id="inputPenetapanLokasi" value="<?php echo $pg->keterangan_rekening ?>" readonly></input>
                                                            <div class="invalid-feedback">
                                                                 Silahkan masukkan keterangan rekening
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                        @endif
                                   </form>
                              </div>
                         </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-pemilik-persil" role="tabpanel">
                         <div class="d-flex justify-content-between mb-2">
                              <div>
                                   <h4>Pemilik Persil</h4>
                              </div>
                              <div>
                                   <button class="btn btn-soft-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalAddPemilikPersil" onclick="showAddPemilikPersil('{{$pg->id_pengadaan}}')">
                                        <i class="dripicons-plus"></i>
                                        Tambah Pemilik Persil
                                   </button>
                              </div>
                         </div>
                         <div>
                              <table class="table dt-responsive w-100 dataTableDetail">
                                   <thead>
                                        <tr>
                                             <th>Kode Persil</th>
                                             <th>Nama Pemilik</th>
                                             <th>Alas Hak</th>
                                             <th></th>
                                             <th></th>
                                             <th>Action</th>
                                        </tr>
                                   </thead>
                                   <tbody>
                                        @foreach($pt as $p)
                                        <tr>
                                             <td>{{$p->kode_persil}}</td>
                                             <td>
                                                  {{$p->nama_pemilik_list}}
                                             </td>
                                             <td>Alas Hak</td>
                                             <td>
                                                  <button class="btn btn-soft-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalDetailPemilikPersil" onclick="showDetailPemilikPersil('{{$p->id_persil_tanah}}')">
                                                       <i class="mdi mdi-eye"></i>Detail
                                                  </button>
                                             </td>
                                             <td>
                                                  <button class="btn btn-soft-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalRincianPembayaran" onclick="showModalRincianPembayaran('{{$pg->id_pengadaan}}','{{$p->id_persil_tanah}}')">
                                                       <i class="dripicons-list"></i>Rincian Pembayaran
                                                  </button>
                                             </td>
                                             <td>
                                                  <div class="mb-2">
                                                       <button class="btn btn-soft-success btn-sm" data-bs-toggle="modal" data-bs-target="#modalUploadPemilikPersil" onclick="showUploadDocPersil('{{$p->id_persil_tanah}}')">
                                                            <i class="dripicons-upload"></i>
                                                            Upload file
                                                       </button>
                                                  </div>
                                                  <div class="div">
                                                       <button class="btn btn-soft-danger btn-sm">
                                                            <i class="dripicons-trash"></i>Hapus Persil
                                                       </button>
                                                  </div>
                                             </td>
                                        </tr>
                                        @endforeach           
                                   </tbody>
                              </table>
                         </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-progress" role="tabpanel">
                         <div class="d-flex justify-content-between mb-4">
                              <h4>Progress</h4>
                              <button class="btn btn-soft-primary" data-bs-toggle="modal" data-bs-target="#modalAddProgress" onclick="showAddProgress('{{$pg->id_pengadaan}}')"><i class="bx bx-plus-medical"></i>Tambah Progress</button>
                         </div>
                         <div>
                              <table id="tableProgress" class="table dt-responsive w-100 dataTableDetail">
                                   <thead>
                                        <tr>
                                             <th>Tanggal</th>
                                             <th>Jenis Kegiatan</th>
                                             <th>Nama Kegiatan</th>
                                             <th>Progress Selanjutnya</th>
                                             <th>Action</th>
                                        </tr>
                                   </thead>
                                   <tbody>
                                        @foreach($pr as $r)
                                        <tr id="tr_progress_{{$r->id_progress}}">
                                             <td>{{$r->tanggal}}</td>
                                             <td>{{$r->jenis_kegiatan}}</td>
                                             <td>{{$r->nama_kegiatan}}</td>
                                             <td>{{$r->progress_selanjutnya}}</td>
                                             <td>
                                                  <button class="btn btn-soft-success btn-sm mb-2" data-bs-toggle="modal" data-bs-target="#modalUploadDokumenKegiatan" onclick="showUploadModalKegiatan('{{ $r->id_progress }}','{{$r->nama_kegiatan}}')">
                                                       <i class="dripicons-archive"></i>
                                                       Dok. Kegiatan
                                                  </button>
                                                  <button class="btn btn-soft-warning btn-sm mb-2" data-bs-toggle="modal" data-bs-target="#modalSettingReminder">
                                                       <i class="dripicons-calendar"></i>
                                                       Sett. Reminder
                                                  </button>
                                                  <button class="btn btn-soft-danger btn-sm" onclick="deleteProgress('{{$r->id_progress}}')">
                                                       <i class="dripicons-trash"></i>
                                                       Hapus
                                                  </button>
                                             </td>
                                           
                                        </tr>
                                        @endforeach
                                      
                                   </tbody>
                              </table>
                         </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-data-pendukung" role="tabpanel">
                         <div class="d-flex justify-content-between mb-3">
                              <div>
                                   <h4>Data Pendukung</h4>
                              </div>
                         </div>
                         <div class="d-flex mb-3">
                              <div class="col-9">
                                   <p>Pilih berkas : <input type="file" id="file_data_pendukung"> </p>
                              </div>
                              <div class="ms-auto">
                                   <button type="button" class="btn btn-primary btn-sm"  id="btn-submit-data-pedukung" class="fa fa-upload"></i> Upload</button>
                              </div>
                         </div>
                         <table id="tableDataPendukung" class="table dt-responsive w-100 dataTableDetail">
                              <thead>
                                   <tr>
                                        <th class="sorting">Nama Berkas</th>
                                        <th class="sorting">Download</th>
                                        <th class="sorting">Delete</th>
                                   </tr>
                              </thead>
                              <tbody>
                                   @foreach($dp as $d)
                                   <tr>
                                        <td>{{$d->nama_berkas}}</td>
                                        <td>
                                             <a class="btn btn-soft-success btn-sm" href='{{ asset("upload/Pengadaan/$d->id/Dokumen Pendukung/$d->nama_berkas") }}' target="_blank">
                                                  <i class="fa fa-download"></i> Download
                                             </a>
                                        </td>
                                        <td>
                                             <a class="btn btn-soft-danger btn-sm" href='' target="_blank">
                                                  <i class="fa fa-trash"></i> Delete
                                             </a>
                                        </td>
                                   </tr>
                                   @endforeach
                              </tbody>
                         </table>

                    </div>
                    <div class="tab-pane fade" id="v-pills-perincian-pembayaran" role="tabpanel">
                         <div class="d-flex justify-content-between mb-4">
                              <div>
                                   <h4>Perincian Pembayaran</h4>
                              </div>
                         </div>
                         <div>
                              <div class="kegiatan mb-5">
                                   <h5 class="mb-3">Kegiatan</h5>
                                   <div class="row mb-2">
                                        <div class="col-6">
                                             <label for="inputKodeKegiatan" class="form-label"> Kode Kegiatan : </label>
                                             <input class="form-control" id="inputKodeKegiatan" required></input>
                                             <div class="invalid-feedback">
                                                  Silahkan masukkan kode kegiatan
                                             </div>
                                        </div>
                                        <div class="col-6">
                                             <label for="inputKeteranganKegiatan" class="form-label"> Keterangan Kegiatan </label>
                                             <input class="form-control" id="inputPenetapanLokasi" required></input>
                                             <div class="invalid-feedback">
                                                  Silahkan masukkan lokasi
                                             </div>
                                        </div>
                                   </div>
                                   <div class="row">
                                        <div class="col-6">
                                             <label for="inputKodeKegiatan" class="form-label"> Kode Rekening : </label>
                                             <input class="form-control" id="inputKodeKegiatan" required></input>
                                             <div class="invalid-feedback">
                                                  Silahkan masukkan kode rekening
                                             </div>
                                        </div>
                                        <div class="col-6">
                                             <label for="inputKeteranganKegiatan" class="form-label"> Keterangan Rekening : </label>
                                             <input class="form-control" id="inputPenetapanLokasi" required></input>
                                             <div class="invalid-feedback">
                                                  Silahkan masukkan keterangan rekening
                                             </div>
                                        </div>
                                   </div>
                              </div>

                              <div class="pemilik-tanah mb-5">
                                   <div class="d-flex justify-content-between mb-3">
                                        <h5 class="mb-3">Data Pemilik Tanah</h5>
                                        <button class="btn btn-soft-primary btn-sm">
                                             Tambah data
                                        </button>
                                   </div>

                                   <!-- Data pemilik tanah container -->
                                   <div id="data-pemilik-tanah">
                                        <div>
                                             <div class="row mb-2">
                                                  <div class="col-6">
                                                       <label for="inputNamaPemilikTanah" class="form-label"> Nama Pemilik Tanah : </label>
                                                       <input class="form-control" id="inputNamaPemilikTanah" required></input>
                                                       <div class="invalid-feedback">
                                                            Silahkan masukkan nama pemilik tanah
                                                       </div>
                                                  </div>
                                                  <div class="col-6">
                                                       <label for="inputKodePersil" class="form-label"> Kode Persil : </label>
                                                       <input class="form-control" id="inputKodePersil" required></input>
                                                       <div class="invalid-feedback">
                                                            Silahkan masukkan kode persil
                                                       </div>
                                                  </div>
                                             </div>

                                             <div class="col-12 mb-2">
                                                  <label for="inputAlamatPemilik" class="form-label"> Alamat Pemilik : </label>
                                                  <textarea class="form-control" id="inputAlamatPemilik" rows="3" required></textarea>
                                                  <div class="invalid-feedback">
                                                       Silahkan masukkan alamat pemilik
                                                  </div>
                                             </div>

                                             <div class="row mb-2">
                                                  <div class="col-6">
                                                       <label for="inputKodePersil" class="form-label"> Nama Bank : </label>
                                                       <input class="form-control" id="inputKodePersil" required></input>
                                                       <div class="invalid-feedback">
                                                            Silahkan masukkan kode persil
                                                       </div>
                                                  </div>
                                                  <div class="col-6">
                                                       <label for="inputNamaPemilikTanah" class="form-label"> Kantor Cabang : </label>
                                                       <input class="form-control" id="inputNamaPemilikTanah" required></input>
                                                       <div class="invalid-feedback">
                                                            Silahkan masukkan nama pemilik tanah
                                                       </div>
                                                  </div>
                                             </div>

                                             <div class="row mb-2">
                                                  <div class="col-6">
                                                       <label for="inputNoRekening" class="form-label"> No Rekening : </label>
                                                       <input class="form-control" id="inputNoRekening" required></input>
                                                       <div class="invalid-feedback">
                                                            Silahkan masukkan kode persil
                                                       </div>
                                                  </div>
                                                  <div class="col-6">
                                                       <label for="inputAtasNama" class="form-label"> Atas Nama : </label>
                                                       <input class="form-control" id="inputAtasNama" required></input>
                                                       <div class="invalid-feedback">
                                                            Silahkan masukkan nama pemilik tanah
                                                       </div>
                                                  </div>
                                             </div>

                                             <div class="row">
                                                  <div class="col-6">
                                                       <label for="inputKodeKegiatan" class="form-label"> Kode Rekening : </label>
                                                       <input class="form-control" id="inputKodeKegiatan" required></input>
                                                       <div class="invalid-feedback">
                                                            Silahkan masukkan kode rekening
                                                       </div>
                                                  </div>
                                                  <div class="col-6">
                                                       <label for="inputKeteranganKegiatan" class="form-label"> Keterangan Rekening : </label>
                                                       <input class="form-control" id="inputPenetapanLokasi" required></input>
                                                       <div class="invalid-feedback">
                                                            Silahkan masukkan keterangan rekening
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>

                              <div class="persil-tanah mb-5">
                                   <div class="mb-3">
                                        <h5>Data Persil tanah</h5>
                                   </div>
                                   <div class="col-12 mb-2">
                                        <label for="inputAlasHak" class="form-label"> Alas Hak : </label>
                                        <textarea class="form-control" id="inputAlasHak" rows="3" required></textarea>
                                        <div class="invalid-feedback">
                                             Silahkan masukkan alas hak
                                        </div>
                                   </div>

                                   <div class="mb-3">
                                        <div class="row mb-2">
                                             <div class="col-6">
                                                  <label for="inputKecamatan" class="form-label"> Kecamatan : </label>
                                                  <input class="form-control" id="inputKecamatan" required></input>
                                                  <div class="invalid-feedback">
                                                       Silahkan masukkan kecamatan
                                                  </div>
                                             </div>
                                             <div class="col-6">
                                                  <label for="inputKelurahan" class="form-label"> Kelurahan : </label>
                                                  <input class="form-control" id="inputKelurahan" required></input>
                                                  <div class="invalid-feedback">
                                                       Silahkan masukkan kecamatan
                                                  </div>
                                             </div>
                                        </div>

                                        <div class="row mb-2">
                                             <div class="col-6">
                                                  <label for="inputNoPBB" class="form-label"> No PBB : </label>
                                                  <input class="form-control" id="inputNoPBB" required></input>
                                                  <div class="invalid-feedback">
                                                       Silahkan masukkan No PBB
                                                  </div>
                                             </div>
                                             <div class="col-6">
                                                  <label for="inputKondisiTanah" class="form-label"> Kondisi Tanah : </label>
                                                  <input class="form-control" id="inputKondisiTanah" required></input>
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
                                                  <input class="form-control" id="inputNIB" required></input>
                                                  <div class="invalid-feedback">
                                                       Silahkan masukkan NIB
                                                  </div>
                                             </div>
                                             <div class="col-6">
                                                  <label for="inputLuas" class="form-label"> Luas : </label>
                                                  <input class="form-control" id="inputLuas" required></input>
                                                  <div class="invalid-feedback">
                                                       Silahkan masukkan luas
                                                  </div>
                                             </div>
                                        </div>
                                   </div>

                                   <div class="col-12">
                                        <label for="inputKeterangan" class="form-label"> Keterangan : </label>
                                        <textarea class="form-control" id="inputKeterangan" rows="3" required></textarea>
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
                                                  <label for="inputKJPP" class="form-label">SSPoooox (PPH Final)</label>
                                                  <select class="form-select" aria-label="Default select example">
                                                       <option selected>Silahkan pilih persentase...</option>
                                                       <option value="2.5">2,5 %</option>
                                                       <option value="5">5 %</option>
                                                  </select>
                                             </div>
                                             <div class="col-6">
                                                  <label for="inputKJPP" class="form-label">Nilai SSP (PPH)</label>
                                                  <input class="form-control" id="nilaiSSP" value="Rp.00" readonly required></input>
                                             </div>
                                             <div class="col-6">
                                                  <label for="inputBPHTP" class="form-label">BPHTP</label>
                                                  <input class="form-control" id="nilaiSSP" value="Rp.00" readonly required></input>
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
                         </div>

                    </div>
                    <div class="tab-pane fade" id="v-pills-status-history" role="tabpanel">
                         <table class="table dt-responsive nowrap w-100 dataTable no-footer dtr-inline collapsed">
                              <thead>
                                   <tr>
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1">Tanggal</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1">Tahapan Lama</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1">Tahapan Baru</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1">Diupdate Oleh</th>
                                   </tr>
                              </thead>
                              <tbody>
                                   <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                   </tr>
                              </tbody>
                         </table>
                    </div>
                    <div class="tab-pane fade" id="v-file-history" role="tabpanel">
                         <table class="table dt-responsive nowrap w-100 dataTable no-footer dtr-inline collapsed">
                              <thead>
                                   <tr>
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1">Nama File</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1">Jenis File</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1">Tanggal</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1">User</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1">Status</th>
                                   </tr>
                              </thead>
                              <tbody>
                                   <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                   </tr>
                              </tbody>
                         </table>
                    </div>
               </div><!--  end col -->
          </div>
     </div>
     
<script>

     //Delete progress
     function deleteProgress(id){
          Swal.fire({
               target: document.getElementById('tableProgress'),
               title: 'Apakah anda yakin akan menghapus data ini?',
               icon: 'warning',
               showCancelButton: true,
               confirmButtonColor: '#3085d6',
               cancelButtonColor: '#d33',
               confirmButtonText: 'Yakin!',
               cancelButtonText: 'Tidak',
          }).then((result) => {
               if (result.isConfirmed) {

                    $('#tableProgress').DataTable().row("#tr_progress_"+id).remove().draw();

                    Swal.fire({
                         target: document.getElementById('tableProgress'),
                         title: 'Terhapus!',
                         text: 'Data berhasil terhapus',
                         icon: 'success',
                         showConfirmButton: false,
                         timer: 2000,
                    })
               }
          })
     }

     //Delete dokumen progress

     //Data table
     $('.dataTableDetail').DataTable({});

     //Set Selected Radio Button Penerbit in Pengadaan Tab
     var penerbitPengadaan = '{{$pg->penerbit}}';
     
     if(penerbitPengadaan === 'Walikota (> 5 Ha)'){
          document.getElementById('radioBtnWalikota').checked = true;
     }else {
          document.getElementById('radioBtnGubernur').checked = true;
     }
     
     document.getElementById('btn-submit-data-pedukung').addEventListener('click',(event)=>{
               //Get uploaded file 
               let fileSelect = document.getElementById('file_data_pendukung');
               let files = fileSelect.files;
               let file = files[0];
               let fileName = file.name;
               
               //Create new object
               let formData = new FormData();

               //Adding file
               formData.append('_token', '{{ csrf_token() }}');
               formData.append('_method', 'POST');
               formData.append('file', file);
               formData.append('nama_berkas',fileName);

               let id = '{{$pg->id_pengadaan}}';
               let pubdir = "{{asset('')}}";

               let act = pubdir + "upload_dokumen_pendukung/" + id;

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
                                   target: document.getElementById('tableDataPendukung'),
                                   title: "Success",
                                   text: "Menambahkan data pendukung berhasil",
                                   icon: 'success',
                                   showConfirmButton: false,
                                   timer: 2000,
                              });

                              var t = $('#tableDataPendukung').DataTable();

                              t.row.add([
                                   `${fileName}`,
                                   `<a href='{{ asset('upload/Pengadaan/${id}/Dokumen Pendukung/${fileName}') }}' class='btn btn-soft-primary btn-sm' target="_blank"><i class="mdi mdi-eye"></i> Download</a>`,
                                   `<a href='' class='btn btn-soft-danger btn-sm' target="_blank"><i class="mdi mdi-trash-can-outline"></i> Hapus</a>`,
                                   ]).draw();
                         } else {
                              Swal.fire({
                                   target: document.getElementById('file_data_pendukung'),
                                   title: "Error",
                                   text: data.msg,
                                   icon: 'error',
                                   showConfirmButton: true,
                              });
                         }
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                         alert(xhr.status);
                         alert(xhr.responseText);
                         alert(thrownError);
                    }
               });
     })

     //Get value kecamatan and kelurahan from database
     var kecamatan = `{{$pg->kecamatan}}`;
     var kelurahan = `{{$pg->kelurahan}}`;

     //Split the value into the array
     var arrKec = kecamatan.split(",");
     var arrKel = kelurahan.split(",");
    
     arrKec.forEach((value, index) => {
          var content = `
               <div class="row">
                    <div class="col-lg-6 col-sm-12 mb-3">
                         <label for="luas" class="form-label">Kecamatan : </label>
                         <input type="text" class="form-control" value=${value} readonly>
                    </div>
                    <div class="col-lg-6 col-sm-12 mb-3">
                         <label for="penawaran" class="form-label">Kelurahan : </label>
                         <input type="text" class="form-control" value=${arrKel[index]} readonly>
                    </div>
               </div>`

          document.getElementById("containerLokasi").insertAdjacentHTML("beforeend",content);
     });
</script>