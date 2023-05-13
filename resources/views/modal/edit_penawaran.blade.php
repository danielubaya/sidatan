<div class="modal-header" id="">
     <h5 class="modal-title">Edit Penawaran</h5>
     <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
</div>
<div class="modal-body" id="">
     <div>
          <h4 class="mb-2">Penawaran</h4>
     </div>
     <div class="col-lg-12 col-sm-12 mb-sm-2">
          <div class="mb-3">
               <div id="mapEditPenawaran" style="height: 400px;">
                    <p> Peta </p>
               </div>
               <script>
                    //Set map view
                    var map = L.map('mapEditPenawaran').setView([-7.281946, 112.73893], 12);

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
                    var marker = L.marker([{{$pw->latlng}}]).addTo(map);

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

          <div>
               <form id="formEditPenawaran">
                    <div hidden>
                         <input type="text" id="editMapLatLng">
                    </div>

                    <div class="row">
                         <div class="col-lg-4 col-sm-12 mb-3">
                              <label for="namaPenawaran" class="form-label">Nama : </label>
                              <input type="text" class="form-control" id="inputEditNamaPenawaean" value="<?php echo $pw->nama ?>">
                         </div>
                         <div class="col-lg-4 col-sm-12 mb-3">
                              <label for="tgl-surat" class="form-label">Tgl Surat : </label>
                              <input type="date" class="form-control" id="inputEditTglSurat" value="<?php echo $pw->tgl_surat ?>">
                         </div>
                         <div class="col-lg-4 col-sm-12 mb-3">
                              <label for="perihal" class="form-label">Perihal : </label>
                              <input type="text" class="form-control" id="inputEditPerihal" value="<?php echo $pw->perihal ?>">
                         </div>
                    </div>

                    <div id="containerLokasiEdit">
          
                    </div>

                    <div>
                         <label for="alamat" class="form-label">Alamat : </label>
                         <textarea class="form-control mb-3" id="inputEditAlamat" rows="4"></textarea>
                    </div>

                    <div class="row">
                         <div class="col-lg-6 col-sm-12 mb-3">
                              <label for="luas" class="form-label">Luas : </label>
                              <input type="text" class="form-control" id="inputEditLuas">
                         </div>
                         <div class="col-lg-6 col-sm-12 mb-3">
                              <label for="penawaran" class="form-label">Penawaran : </label>
                              <input type="text" class="form-control" id="inputEditPenawaran">
                         </div>
                    </div>

                    <div>
                         <label for="ketProgress" class="form-label">Keterangan Progress : </label>
                         <textarea class="form-control mb-3" id="inputEditKeteranganProgress" rows="4"></textarea>
                    </div>

               </form>
          </div>
     </div>
</div>
</div>
<div class="modal-footer">
     <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
     <button type="submit" form="formEditPenawaran" class="btn btn-primary waves-effect waves-light">Edit Penawaran</button>
</div>

<script>
     //Get value kecamatan and kelurahan from database
     var kecamatan = `{{$pw->kecamatan}}`;
     var kelurahan = `{{$pw->kelurahan}}`;

     //Split the value into the array
     var arrKec = kecamatan.split(",");
     var arrKel = kelurahan.split(",");

     var counter = 0;
     arrKec.forEach((value, index) => {
          counter++

          var content = `
               <div class="row">
               <div class="col-6 mb-2">
                    <div class="d-flex justify-content-between mb-1 mt-2">
                         <label class="form-label">Kecamatan : </label>
                    </div>
                    
                    <select class="form-select" id="kecamatan_${index}">
                         <option value="Silahkan pilih kecamatan">Silahkan pilih kecamatan</option>
                         <option value="Tegalsari">Tegalsari</option>
                         <option value="Simokerto">Simokerto</option>
                         <option value="Genteng">Genteng</option>
                         <option value="Bubutan">Bubutan</option>
                         <option value="Gubeng">Gubeng</option>
                         <option value="Gunung Anyar">Gunung Anyar</option>
                         <option value="Sukolilo">Sukolilo</option>
                         <option value="Tambaksari">Tambaksari</option>
                         <option value="Mulyorejo">Mulyorejo</option>
                         <option value="Rungkut">Rungkut</option>
                         <option value="Tenggilis Mejoyo">Tenggilis Mejoyo</option>
                         <option value="Benowo">Benowo</option>
                         <option value="Pakal">Pakal</option>
                         <option value="Asemrowo">Asemrowo</option>
                         <option value="Sukomanunggal">Sukomanunggal</option>
                         <option value="Tandes">Tandes</option>
                         <option value="Sambikerep">Sambikerep</option>
                         <option value="Lakarsantri">Lakarsantri</option>
                         <option value="Bulak">Bulak</option>
                         <option value="Kenjeran">Kenjeran</option>
                         <option value="Semampir">Semampir</option>
                         <option value="Pabean Cantian">Pabean Cantian</option>
                         <option value="Krembangan">Krembangan</option>
                         <option value="Wonokromo">Wonokromo</option>
                         <option value="Wonocolo">Wonocolo</option>
                         <option value="Wiyung">Wiyung</option>
                         <option value="Karang Pilang">Karang Pilang</option>
                         <option value="Jambangan">Jambangan</option>
                         <option value="Gayungan">Gayungan</option>
                         <option value="Dukuh Pakis">Dukuh Pakis</option>
                         <option value="Sawahan">Sawahan</option>
                    </select>
               </div>
          
               <div class="col-6 mb-2">
                    <div class="d-flex justify-content-between mb-1 mt-2">
                         <label class="form-label">Kecamatan : </label>
                    </div>
                    
                    <select class="form-select" id="kelurahan_${index}">
                    <option value="Silahkan pilih kecamatan">Silahkan pilih kecamatan</option>
                    <option value="Dukuh Kupang">Dukuh Kupang</option>
                    <option value="Dukuh Pakis">Dukuh Pakis</option>
                    <option value="Gunung Sari">Gunung Sari</option>
                    <option value="Pradah Kalikendal">Pradah Kalikendal</option>
                    <option value="Dukuh Menanggal">Dukuh Menanggal</option>
                    <option value="Gayungan">Gayungan</option>
                    <option value="Ketintang">Ketintang</option>
                    <option value="Menanggal">Menanggal</option>
                    <option value="Jambangan">Jambangan</option>
                    <option value="Karah">Karah</option>
                    <option value="Kebonsari">Kebonsari</option>
                    <option value="Pangesangan">Pangesangan</option>
                    <option value="Karang Pilang">Karang Pilang</option>
                    <option value="Kebraon">Kebraon</option>
                    <option value="Kedurus">Kedurus</option>
                    <option value="Waru Gunung">Waru Gunung</option>
                    <option value="Banyu Urip">Banyu Urip</option>
                    <option value="Kupang Krajan">Kupang Krajan</option>
                    <option value="Pakis">Pakis</option>
                    <option value="Petemon">Petemon</option>
                    <option value="Putat Jaya">Putat Jaya</option>
                    <option value="Sawahan">Sawahan</option>
                    <option value="Babatan">Babatan</option>
                    <option value="Balas Klumprik">Balas Klumprik</option>
                    <option value="Jajar Tunggal">Jajar Tunggal</option>
                    <option value="Wiyung">Wiyung</option>
                    <option value="Bendul Merisi">Bendul Merisi</option>
                    <option value="Jemur Wonosari">Jemur Wonosari</option>
                    <option value="Margorejo">Margorejo</option>
                    <option value="Sidosermo">Sidosermo</option>
                    <option value="Siwalankerto">Siwalankerto</option>
                    <option value="Darmo">Darmo</option>
                    <option value="Jagir">Jagir</option>
                    <option value="Ngagel">Ngagel</option>
                    <option value="Ngagel Rejo">Ngagel Rejo</option>
                    <option value="Sawunggaling">Sawunggaling</option>
                    <option value="Wonokromo">Wonokromo</option>
                    <option value="Airlangga">Airlangga</option>
                    <option value="Baratajaya">Baratajaya</option>
                    <option value="Gubeng">Gubeng</option>
                    <option value="Kertajaya">Kertajaya</option>
                    <option value="Mojo">Mojo</option>
                    <option value="Pucang Sewu">Pucang Sewu</option>
                    <option value="Gunung Anyar">Gunung Anyar</option>
                    <option value="Gunung Anyar Tambak">Gunung Anyar Tambak</option>
                    <option value="Rungkut Menanggal">Rungkut Menanggal</option>
                    <option value="Rungkut Tengah">Rungkut Tengah</option>
                    <option value="Dukuh Sutorejo">Dukuh Sutorejo</option>
                    <option value="Kalijudan">Kalijudan</option>
                    <option value="Kalisari">Kalisari</option>
                    <option value="Kejawan Putih Tambak">Kejawan Putih Tambak</option>
                    <option value="Manya Sabrangan">Manya Sabrangan</option>
                    <option value="Mulyorejo">Mulyorejo</option>
                    <option value="Kalirungkut">Kalirungkut</option>
                    <option value="Kedung Baruk">Kedung Baruk</option>
                    <option value="Medokan Ayu">Medokan Ayu</option>
                    <option value="Penjaringansari">Penjaringansari</option>
                    <option value="Rungkut Kidul">Rungkut Kidul</option>
                    <option value="Wonorejo Rungkut">Wonorejo Rungkut</option>
                    <option value="Gebang Putih">Gebang Putih</option>
                    <option value="Keputih">Keputih</option>
                    <option value="Klampis Ngasem">Klampis Ngasem</option>
                    <option value="Medokan Semampir">Medokan Semampir</option>
                    <option value="Menur Pumpungan">Menur Pumpungan</option>
                    <option value="Nginden Jangkungan">Nginden Jangkungan</option>
                    <option value="Semolowaru">Semolowaru</option>
                    <option value="Dukuh Setro">Dukuh Setro</option>
                    <option value="Gading">Gading</option>
                    <option value="Kapasmadya Baru">Kapasmadya Baru</option>
                    <option value="Pacarkeling">Pacarkeling</option>
                    <option value="Pacarkembang">Pacarkembang</option>
                    <option value="Ploso">Ploso</option>
                    <option value="Rangkah">Rangkah</option>
                    <option value="Tambaksari">Tambaksari</option>
                    <option value="Kendangsari">Kendangsari</option>
                    <option value="Kutisari">Kutisari</option>
                    <option value="Panjang Jiwo">Panjang Jiwo</option>
                    <option value="Tenggilis Mejoyo">Tenggilis Mejoyo</option>
                    <option value="Alun-alun Contong">Alun-alun Contong</option>
                    <option value="Bubutan">Bubutan</option>
                    <option value="Gundih">Gundih</option>
                    <option value="Jepara">Jepara</option>
                    <option value="Tembok Dukuh">Tembok Dukuh</option>
                    <option value="Embong Kaliasin">Embong Kaliasin</option>
                    <option value="Genteng">Genteng</option>
                    <option value="Kapasari">Kapasari</option>
                    <option value="Ketabang">Ketabang</option>
                    <option value="Peneleh">Peneleh</option>
                    <option value="Kapasan">Kapasan</option>
                    <option value="Sidodadi">Sidodadi</option>
                    <option value="Simokerto">Simokerto</option>
                    <option value="Simolawang">Simolawang</option>
                    <option value="Tambakrejo">Tambakrejo</option>
                    <option value="Dr.Soetomo">Dr.Soetomo</option>
                    <option value="Kedungdoro">Kedungdoro</option>
                    <option value="Keputran">Keputran</option>
                    <option value="Tegalsari">Tegalsari</option>
                    <option value="Wonorejo Tegalsari">Wonorejo Tegalsari</option>
                    <option value="Bulak">Bulak</option>
                    <option value="Kedung Cowek">Kedung Cowek</option>
                    <option value="Kenjeran">Kenjeran</option>
                    <option value="Sukolilo Baru">Sukolilo Baru</option>
                    <option value="Bulak Banteng">Bulak Banteng</option>
                    <option value="Sidotopo Wetan">Sidotopo Wetan</option>
                    <option value="Tambak Wedi">Tambak Wedi</option>
                    <option value="Tanah Kali Kedinding">Tanah Kali Kedinding</option>
                    <option value="Dupak">Dupak</option>
                    <option value="Kemayoran">Kemayoran</option>
                    <option value="Krembangan Selatan">Krembangan Selatan</option>
                    <option value="Morokrembangan">Morokrembangan</option>
                    <option value="Perak Barat">Perak Barat</option>
                    <option value="Bongkaran">Bongkaran</option>
                    <option value="Krembangan Utara">Krembangan Utara</option>
                    <option value="Nyamplungan">Nyamplungan</option>
                    <option value="Perak Timur">Perak Timur</option>
                    <option value="Perak Utara">Perak Utara</option>
                    <option value="Tanjung Perak">Tanjung Perak</option>
                    <option value="Ampel">Ampel</option>
                    <option value="Pegirian">Pegirian</option>
                    <option value="Sidotopo">Sidotopo</option>
                    <option value="Ujung">Ujung</option>
                    <option value="Wonokusumo">Wonokusumo</option>
                    <option value="Asem Rowo">Asem Rowo</option>
                    <option value="Genting Kalianak">Genting Kalianak</option>
                    <option value="Tambak Sarioso">Tambak Sarioso</option>
                    <option value="Kandangan">Kandangan</option>
                    <option value="Romokalisari">Romokalisari</option>
                    <option value="Sememi">Sememi</option>
                    <option value="Tambak Oso Wilangun">Tambak Oso Wilangun</option>
                    <option value="Bangkingan">Bangkingan</option>
                    <option value="Jeruk">Jeruk</option>
                    <option value="Lakarsantri">Lakarsantri</option>
                    <option value="Lidah Kulon">Lidah Kulon</option>
                    <option value="Lidah Wetan">Lidah Wetan</option>
                    <option value="Sumurwelut">Sumurwelut</option>
                    <option value="Babat Jerawat">Babat Jerawat</option>
                    <option value="Benowo">Benowo</option>
                    <option value="Pakal">Pakal</option>
                    <option value="Sumber Rejo">Sumber Rejo</option>
                    <option value="Beringin">Beringin</option>
                    <option value="Lontar">Lontar</option>
                    <option value="Made">Made</option>
                    <option value="Sambikerep">Sambikerep</option>
                    <option value="Putat Gede">Putat Gede</option>
                    <option value="Simomulyo">Simomulyo</option>
                    <option value="Simomulyo Baru">Simomulyo Baru</option>
                    <option value="Sonokwijenan">Sonokwijenan</option>
                    <option value="Sukomanunggal">Sukomanunggal</option>
                    <option value="Tanjungsari">Tanjungsari</option>
                    <option value="Balongsari">Balongsari</option>
                    <option value="Banjar Sugihan">Banjar Sugihan</option>
                    <option value="Karang Poh">Karang Poh</option>
                    <option value="Manukan Kulon">Manukan Kulon</option>
                    <option value="Manukan Wetan">Manukan Wetan</option>
                    <option value="Tandes">Tandes</option>
                    </select>
               </div>
          <div>`;

          document.getElementById("containerLokasiEdit").insertAdjacentHTML("beforeend",content);

          document.getElementById(`kecamatan_${index}`).value = value.trim();
          console.log(arrKel[index].trim());
          document.getElementById(`kelurahan_${index}`).value = arrKel[index].trim();
          
     });

     // $('formEditPenawaran').submit((e) => {
     //      e.preventDefault();

     //      let pubdir = "{{asset('')}}";

     //      let act = pubdir + 'update_penawaran/' + id;


     // });
</script>