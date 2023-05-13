<div class="modal-header">
     <h5 class="modal-title" id="myModalLabel">Edit Pengadaan</h5>
     <button type="button" class="btn-close" data-bs-dismiss="modal" data-bs-target="#modalDetail" data-bs-toggle="modal" onclick="showDetailPerumahan('{{$pg->id_pengadaan}}','{{$pg->pengadaan}}')"></button>
</div>
<div class="modal-body" id="">
     <div>
          <h4 class="mb-2">Pengadaan</h4>
     </div>

     <div>
          <div class="col-lg-12 col-sm-12 mb-sm-2">
               <div id="mapEditPengadaan" style="height: 400px;">
                    <p> Peta </p>
               </div>
               <script>
                    //Set map view
                    var map = L.map('mapEditPengadaan').setView([-7.281946, 112.73893], 12);

                    setTimeout(function() {
                         map.invalidateSize();
                    }, 1000);

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
                    var marker = L.marker([{{$pg->latlng}}]).addTo(map);

                    // Get marker coordinate
                    map.on('click', function(e) {
                         marker.setLatLng(e.latlng).addTo(map);
                         //Set latlng value to string
                         latlngCoordinate = e.latlng.lat + "," + e.latlng.lng;
                         //Iniate value into the text input
                         document.getElementById("editMapLatLng").value = latlngCoordinate;
                    });
               </script>
          </div>
          <div class="col-lg-12 col-sm-12">
               <form id="formEditPengadaan">
                    <div class="row mb-3">
                         <div class="col-6">
                              <label for="inputEditPengadaan" class="form-label">Pengadaan : </label>
                              <input type="text" class="form-control" id="inputEditPengadaan" value="<?php echo $pg->pengadaan ?>" ="">
                              <div class="invalid-feedback">
                                   Silahkan masukkan pengadaan
                              </div>
                         </div>

                         <div class="col-6">
                              <label for="inputEditOPD" class="form-label">OPD : </label>
                              <input type="text" class="form-control" id="inputEditOPD" value="<?php echo $pg->opd ?>" ="">
                              <div class="invalid-feedback">
                                   Silahkan masukkan OPD
                              </div>
                         </div>
                    </div>
                    
                    <div id="containerLokasiPengadaan">

                    </div>

                    <div class="col-12 mb-2">
                         <label for="inpuEditAlamat" class="form-label">Alamat : </label>
                         <textarea class="form-control" id="inpuEditAlamat" rows="3" ><?php echo $pg->alamat; ?></textarea>
                         <div class="invalid-feedback">
                              Silahkan masukkan alamat
                         </div>
                    </div>

                    <div class="col-12 mb-3">
                         <label for="inputEditLuas" class="form-label">Luas : </label>
                         <div class="input-group">
                              <input type="number" class="form-control" id="inputEditLuas" value="<?php echo $pg->luas ?>" >
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

                    <div class="masa-berlaku mb-3">
                         <div class="row">
                              <div class="col-6 mb-2">
                                   <label for="inputEditPenetapanLokasi" class="form-label">Penetapan Lokasi : </label>
                                   <input class="form-control" id="inputEditPenetapanLokasi" value="<?php echo $pg->penetapan_lokasi ?>" ></input>
                                   <div class="invalid-feedback">
                                        Silahkan masukkan lokasi
                                   </div>
                              </div>
                              <div class="col-6 mb-2">
                                   <label for="inputEditNoSkPenlok" class="form-label">No SK Penlok : </label>
                                   <input class="form-control" id="inputEditNoSkPenlok" value="<?php echo $pg->no_sk_penlok ?>" ></input>
                                   <div class="invalid-feedback">
                                        Silahkan masukkan no sk penlok
                                   </div>
                              </div>
                         </div>

                         <div class="row">
                              <div class="col-6 mb-2">
                                   <label for="inputEditTglSkPenlok" class="form-label" id="basicDate">Tanggal SK Penlok : </label>
                                   <div class="input-group">
                                        <input type="date" id="inputEditTglSkPenlok" value="<?php echo $pg->tgl_sk_penlok ?>" class="form-control">
                                   </div>
                              </div>
                              <div class="col-6 mb-2">
                                   <label for="inputEditMasaBerlaku" class="form-label"> Masa Berlaku Sampai : </label>
                                   <div class="input-group">
                                        <input type="date" id="inputEditMasaBerlaku" class="form-control" value="<?php echo $pg->masa_berlaku ?>">
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="perpanjangan mb-4">
                         <div class="form-check mb-3">
                              <input class="form-check-input" type="checkbox" value="" id="checkbox-perpanjangan">
                              <label class="form-check-label" for="flexCheckDefault">
                                   Perpanjangan Penlok
                              </label>
                         </div>

                         <div id="perpanjangan-penlok" style="display: none;">
                              <div class="row mb-2">
                                   <div class="col-6">
                                        <label for="inputEditPrpjLokasi" class="form-label">Perpanjangan Penetapan Lokasi : </label>
                                        <input class="form-control" id="inputEditPrpjLokasi" value="<?php echo $pg->perpanjangan_penetapan_lokasi ?>" ></input>
                                        <div class="invalid-feedback">
                                             Silahkan masukkan lokasi
                                        </div>
                                   </div>
                                   <div class="col-6">
                                        <label for="inputEditNoSkPerpanjangan" class="form-label">No SK Perpanjangan Penlok : </label>
                                        <input class="form-control" id="inputEditNoSkPerpanjangan" value="<?php echo $pg->no_sk_perpanjangan_penlok ?>" ></input>
                                        <div class="invalid-feedback">
                                             Silahkan masukkan lokasi
                                        </div>
                                   </div>
                              </div>

                              <div class="row">
                                   <div class="col-6">
                                        <label for="inputEditTglSkPerpanjangan" class="form-label" id="basicDate">Tanggal SK Perpanjangan Penlok : </label>
                                        <div class="input-group">
                                             <input type="date" id="inputEditTglSkPerpanjangan" class="form-control" value="<?php echo $pg->tgl_sk_perpanjangan_penlok ?>">
                                        </div>
                                   </div>
                                   <div class="col-6">
                                        <label for="inputEditTglMsBerlakuPj" class="form-label"> Masa Berlaku Sampai : </label>
                                        <input type="date" id="inputEditTglMsBerlakuPj" class="form-control" value="<?php echo $pg->masa_berlaku_perpanjangan ?>">
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="kegiatan">
                         <div class="row mb-2">
                              <div class="col-6">
                                   <label for="inputEditKodeKegiatan" class="form-label"> Kode Kegiatan : </label>
                                   <input class="form-control" id="inputEditKodeKegiatan" value="<?php echo $pg->kode_kegiatan ?>" ></input>
                                   <div class="invalid-feedback">
                                        Silahkan masukkan kode kegiatan
                                   </div>
                              </div>
                              <div class="col-6">
                                   <label for="inputEditKeteranganKegiatan" class="form-label"> Keterangan Kegiatan : </label>
                                   <input class="form-control" id="inputEditKeteranganKegiatan" value="<?php echo $pg->keterangan_kegiatan ?>" ></input>
                                   <div class="invalid-feedback">
                                        Silahkan masukkan keterangan kegiatan
                                   </div>
                              </div>
                         </div>
                         <div class="row">
                              <div class="col-6">
                                   <label for="inputEditKodeRekening" class="form-label"> Kode Rekening Belanja : </label>
                                   <input class="form-control" id="inputEditKodeRekening" value="<?php echo $pg->kode_rekening ?>" ></input>
                                   <div class="invalid-feedback">
                                        Silahkan masukkan kode rekening
                                   </div>
                              </div>
                              <div class="col-6">
                                   <label for="inputEditKeteranganRekening" class="form-label"> Keterangan Rekening : </label>
                                   <input class="form-control" id="inputEditKeteranganRekening" value="<?php echo $pg->keterangan_rekening ?>" ></input>
                                   <div class="invalid-feedback">
                                        Silahkan masukkan keterangan rekening
                                   </div>
                              </div>
                         </div>

                         <div class="col-12 mt-3" hidden>
                              <label for="editMapLatLng" class="form-label"> LatLng : </label>
                              <input class="form-control" id="editMapLatLng" value="<?php echo $pg->latlng ?>"></input>
                              <div class="invalid-feedback">
                                   Silahkan masukkan keterangan rekening
                              </div>
                         </div>
                    </div>
               </form>
          </div>
     </div>
</div>
<div class="modal-footer">
     <button type="submit" form="formEditPengadaan" class="btn btn-primary waves-effect waves-light">Save</button>
</div>

<script>

     //Get value kecamatan and kelurahan from database
     var kecamatan = `{{$pg->kecamatan}}`;
     var kelurahan = `{{$pg->kelurahan}}`;

     console.log(kecamatan);

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

          document.getElementById("containerLokasiPengadaan").insertAdjacentHTML("beforeend",content);
     });

     //If checked box are checked
     document.getElementById("checkbox-perpanjangan").addEventListener('click',()=>{
          
          let comboBox = document.getElementById("checkbox-perpanjangan").checked;
          
          if(comboBox === true){
               document.getElementById('perpanjangan-penlok').style.display = 'block';
               
               //Set Masa Berlaku Perpanjangan Penlok 
               let valueSkPerpanjanganPenlok = document.getElementById('inputEditMasaBerlaku').value;
               let date = new Date(valueSkPerpanjanganPenlok);
               
               //Calculate Date Masa Perpanjangan
               let calculateDateMasaPerpanjangan = new Date(date.getFullYear() + 1, date.getMonth(), date.getDate() + 1);

               //Covert date to YYYY-MM-DD
               let finalResultPerpanjangan = new Date(calculateDateMasaPerpanjangan).toISOString().split('T')[0];

               //Set to input date masa berlaku perpanjangan
               document.getElementById('inputEditTglMsBerlakuPj').value = finalResultPerpanjangan;
          } else {
               document.getElementById('perpanjangan-penlok').style.display = 'none';
          }

     });
 

     //Set tanggal SK Penlok
     document.getElementById('inputEditTglSkPenlok').addEventListener('change', () => {
          //Set date value
          let valueSkPenlok = document.getElementById('inputEditTglSkPenlok').value;
          let date = new Date(valueSkPenlok);

          //Set result
          let calculateDate = new Date(date.getFullYear() + 3, date.getMonth(), date.getDate() + 1);

          //Covert date to YYYY-MM-DD
          let finalResult = new Date(calculateDate).toISOString().split('T')[0];

          document.getElementById('inputEditMasaBerlaku').value = finalResult;
     })


     $('#formEditPengadaan').submit(function(event) {
          //Event preventDefault is used to stop refresh the page
          event.preventDefault();
  
          let form = document.getElementById('formEditPengadaan');

          let id = '{{$pg->id_pengadaan}}';

          let pengadaan = document.getElementById('inputEditPengadaan').value;
          let opd = document.getElementById('inputEditOPD').value;
          let alamat = document.getElementById('inpuEditAlamat').value;
          let penetapanLokasi = document.getElementById('inputEditPenetapanLokasi').value;
          let noSkPenlok = document.getElementById('inputEditNoSkPenlok').value;
          let tglSkPenlok = document.getElementById('inputEditTglSkPenlok').value;
          let masaBerlaku = document.getElementById('inputEditMasaBerlaku').value;
          let kodeKegiatan = document.getElementById('inputEditKodeKegiatan').value;
          let keteranganKegiatan = document.getElementById('inputEditKodeKegiatan').value;
          let kodeRekening = document.getElementById('inputEditKodeRekening').value;
          let keteranganRekening = document.getElementById('inputEditKeteranganRekening').value;
          let luas = document.getElementById('inputEditLuas').value;
          let latlng = document.getElementById('editMapLatLng').value;

          let penerbit = "";

          //Get Value Radio Button
          if (document.getElementById('radioBtnWalikota').checked){
               penerbit = "Walikota (< 5 Ha)";
          } else {
               penerbit = "Gubernur (> 5 Ha)";
          }

          //Declare null variable
          let perpanjanganLokasi = "";
          let noSkPerpanjangan = "";
          let tglSkPerpanjangan = "";
          let tglMasaBerlakuPerpanjangan = "";
               
          //Get status checked combo box
          let comboBox = document.getElementById("checkbox-perpanjangan").checked;

          //if combobox checked set the value
          if (comboBox === true){
               perpanjanganLokasi = document.getElementById('inputEditPrpjLokasi').value;
               noSkPerpanjangan = document.getElementById('inputEditNoSkPerpanjangan').value;
               tglSkPerpanjangan = document.getElementById('inputEditTglSkPerpanjangan').value;
               tglMasaBerlakuPerpanjangan = document.getElementById('inputEditTglMsBerlakuPj').value;
          } 

          let pubdir = "{{asset('')}}";

          let act = pubdir + 'update_pengadaans/' + id;

               $.ajax({
                    type: "PUT",
                    url: act,
                    data: {
                         _token: '{{ csrf_token() }}',
                         _method: 'PUT',
                         id: id,
                         pengadaan: pengadaan,
                         opd: opd,
                         alamat: alamat,
                         penetapanLokasi: penetapanLokasi,
                         noSkPenlok: noSkPenlok,
                         tglSkPenlok: tglSkPenlok,
                         masaBerlaku: masaBerlaku,
                         perpanjanganLokasi: perpanjanganLokasi,
                         noSkPerpanjangan: noSkPerpanjangan,
                         tglSkPerpanjangan: tglSkPerpanjangan,
                         tglMasaBerlakuPerpanjangan: tglMasaBerlakuPerpanjangan,
                         kodeKegiatan: kodeKegiatan,
                         keteranganKegiatan: keteranganKegiatan,
                         kodeRekening: kodeRekening,
                         keteranganRekening: keteranganRekening,
                         luas: luas,
                         latlng: latlng,
                         penerbit: penerbit
                    },
                    success: function(data) {
                         if (data.status == "success") {
                              
                              Swal.fire({
                                   target: document.getElementById('formEditPengadaan'),
                                   title: "Success",
                                   text: "Edit data pengadaan berhasil",
                                   icon: 'success',
                                   showConfirmButton: false,
                                   timer: 2000,
                              });

                              document.getElementById('pgdn_{{$pg->id_pengadaan}}').innerText = pengadaan;
                              
                         } else {
                              Swal.fire({
                                   target: document.getElementById('formEditPengadaan'),
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