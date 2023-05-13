<div class="row">
     <div class="col-lg-6 col-sm-12 mb-sm-2">
          <div id="map" style="height: 600px;">

          </div>
     </div>
     <div class="col-lg-6 col-sm-12">
          <form id="formAddPengadaan" class="row needs-validation" novalidate>
               @csrf
               <div class="col-8 mb-3">
                    <label for="inputAddPengadaan" class="form-label">Pengadaan : </label>
                    <input type="text" class="form-control" id="inputAddPengadaan" required>
                    <div class="invalid-feedback">
                         Silahkan masukkan pengadaan
                    </div>
               </div>

               <div class="col-4 mb-3">
                    <label for="inputAddOPD" class="form-label">OPD : </label>
                    <input type="text" class="form-control" id="inputAddOPD" required>
                    <div class="invalid-feedback">
                         Silahkan masukkan OPD
                    </div>
               </div>

               <div id="containerLokasi">
                    <div class="d-flex justify-content-between">
                         <div class="col-6 mb-2">
                              <div>
                                   <div class="d-flex justify-content-between mb-2">
                                        <label for="inputKecamatan" class="form-label">Kecamatan : </label>
                                   </div>
                                   <select class="form-select" id="kecamatan_0">
                                        <option selected>Silahkan pilih kecamatan</option>
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
                         </div>
                         <div class="col-6 mb-2 ms-1">
                              <div>
                                   <div class="d-flex justify-content-between mb-2">
                                        <label for="inputKelurahan" class="form-label">Kelurahan : </label>
                                        <a href="#" id="btnAddKecamatan" class="btn btn-soft-success btn-sm">+ Lokasi</a>
                                   </div>

                                   <select class="form-select" id="kelurahan_0">
                                        <option value="Silahkan pilih kecamatan">Silahkan pilih kelurahan</option>
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
                         </div>
                    </div>
               </div>

               <div class="col-12 mb-2">
                    <label for="inputAddAlamat" class="form-label">Alamat : </label>
                    <textarea class="form-control" id="inputAddAlamat" rows="3" required></textarea>
                    <div class="invalid-feedback">
                         Silahkan masukkan Alamat
                    </div>
               </div>

               <div class="col-12">
                    <label class="form-label">Luas : </label>
                    <div class="input-group">
                         <input type="number" step="any" class="form-control" id="inputAddLuas" required>
                         <div class="input-group-append">
                              <span class="input-group-text" style="background-color:#ffffff; color:black;">m<sup>2</sup></span>
                         </div>
                    </div>
                    <div class="invalid-feedback">
                         Silahkan masukkan Luas
                    </div>
               </div>

               <input type="text" class="form-control" id="mapLatLng" hidden>
          </form>
     </div>
</div>

<script>
     //Set map view
     var map = L.map('map').setView([-7.281946, 112.73893], 12);

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

     var marker = L.marker();
     var latlngCoordinate;

     // Get marker coordinate
     map.on('click', function(e) {
          marker.setLatLng(e.latlng).addTo(map);
          //Set latlng value to string
          latlngCoordinate = e.latlng.lat + "," + e.latlng.lng;

     });


     // Dynamic Combo Box

     //Get element div
     let btnAddKecamatan = document.getElementById("btnAddKecamatan");
     let containerLokasi = document.getElementById("containerLokasi");

     let kecamatan = [
          "Silahkan pilih kecamatan",
          "Tegalsari",
          "Simokerto",
          "Genteng",
          "Bubutan",
          "Gubeng",
          "Gunung Anyar",
          "Sukolilo",
          "Tambaksari",
          "Mulyorejo",
          "Rungkut",
          "Tenggilis Mejoyo",
          "Benowo",
          "Pakal",
          "Asemrowo",
          "Sukomanunggal",
          "Tandes",
          "Sambikerep",
          "Lakarsantri",
          "Bulak",
          "Kenjeran",
          "Semampir",
          "Pabean Cantian",
          "Krembangan",
          "Wonokromo",
          "Wonocolo",
          "Wiyung",
          "Karang Pilang",
          "Jambangan",
          "Gayungan",
          "Dukuh Pakis",
          "Sawahan"
     ];

     let kelurahan = [
          "Silahkan pilih kecamatan",
          "Dukuh Kupang",
          "Dukuh Pakis",
          "Gunung Sari",
          "Pradah Kalikendal",
          "Dukuh Menanggal",
          "Gayungan",
          "Ketintang",
          "Menanggal",
          "Jambangan",
          "Karah",
          "Kebonsari",
          "Pangesangan",
          "Karang Pilang",
          "Kebraon",
          "Kedurus",
          "Waru Gunung",
          "Banyu Urip",
          "Kupang Krajan",
          "Pakis",
          "Petemon",
          "Putat Jaya",
          "Sawahan",
          "Babatan",
          "Balas Klumprik",
          "Jajar Tunggal",
          "Wiyung",
          "Bendul Merisi",
          "Jemur Wonosari",
          "Margorejo",
          "Sidosermo",
          "Siwalankerto",
          "Darmo",
          "Jagir",
          "Ngagel",
          "Ngagel Rejo",
          "Sawunggaling",
          "Wonokromo",
          "Airlangga",
          "Baratajaya",
          "Gubeng",
          "Kertajaya",
          "Mojo",
          "Pucang Sewu",
          "Gunung Anyar",
          "Gunung Anyar Tambak",
          "Rungkut Menanggal",
          "Rungkut Tengah",
          "Dukuh Sutorejo",
          "Kalijudan",
          "Kalisari",
          "Kejawan Putih Tambak",
          "Manya Sabrangan",
          "Mulyorejo",
          "Kalirungkut",
          "Kedung Baruk",
          "Medokan Ayu",
          "Penjaringansari",
          "Rungkut Kidul",
          "Wonorejo Rungkut",
          "Gebang Putih",
          "Keputih",
          "Klampis Ngasem",
          "Medokan Semampir",
          "Menur Pumpungan",
          "Nginden Jangkungan",
          "Semolowaru",
          "Dukuh Setro",
          "Gading",
          "Kapasmadya Baru",
          "Pacarkeling",
          "Pacarkembang",
          "Ploso",
          "Rangkah",
          "Tambaksari",
          "Kendangsari",
          "Kutisari",
          "Panjang Jiwo",
          "Tenggilis Mejoyo",
          "Alun-alun Contong",
          "Bubutan",
          "Gundih",
          "Jepara",
          "Tembok Dukuh",
          "Embong Kaliasin",
          "Genteng",
          "Kapasari",
          "Ketabang",
          "Peneleh",
          "Kapasan",
          "Sidodadi",
          "Simokerto",
          "Simolawang",
          "Tambakrejo",
          "Dr.Soetomo",
          "Kedungdoro",
          "Keputran",
          "Tegalsari",
          "Wonorejo Tegalsari",
          "Bulak",
          "Kedung Cowek",
          "Kenjeran",
          "Sukolilo Baru",
          "Bulak Banteng",
          "Sidotopo Wetan",
          "Tambak Wedi",
          "Tanah Kali Kedinding",
          "Dupak",
          "Kemayoran",
          "Krembangan Selatan",
          "Morokrembangan",
          "Perak Barat",
          "Bongkaran",
          "Krembangan Utara",
          "Nyamplungan",
          "Perak Timur",
          "Perak Utara",
          "Tanjung Perak",
          "Ampel",
          "Pegirian",
          "Sidotopo",
          "Ujung",
          "Wonokusumo",
          "Asem Rowo",
          "Genting Kalianak",
          "Tambak Sarioso",
          "Kandangan",
          "Romokalisari",
          "Sememi",
          "Tambak Oso Wilangun",
          "Bangkingan",
          "Jeruk",
          "Lakarsantri",
          "Lidah Kulon",
          "Lidah Wetan",
          "Sumurwelut",
          "Babat Jerawat",
          "Benowo",
          "Pakal",
          "Sumber Rejo",
          "Beringin",
          "Lontar",
          "Made",
          "Sambikerep",
          "Putat Gede",
          "Simomulyo",
          "Simomulyo Baru",
          "Sonokwijenan",
          "Sukomanunggal",
          "Tanjungsari",
          "Balongsari",
          "Banjar Sugihan",
          "Karang Poh",
          "Manukan Kulon",
          "Manukan Wetan",
          "Tandes"
     ];

     let counter = 0;
     //Add button add event addEventListener

     btnAddKecamatan.addEventListener('click', function() {
          counter++;

          let content = `
          <div class="d-flex justify-content-between" id="content_${counter}">
               <div class="col-6 mb-2">
                    <div class="d-flex justify-content-between mb-1 mt-2">
                         <label class="form-label">Kecamatan : </label>
                    </div>
                    
                    <select class="form-select kecamatan-class" id="kecamatan_${counter}">
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
          
          <div class="col-6 mb-2 ms-1">
               <div class="d-flex justify-content-between mb-1 mt-2">
                    <label class="form-label">Kelurahan : </label>
                    <a href="#" id="" class="btn btn-soft-danger btn-sm" onclick="deleteContent()">Hapus</a>
               </div>
               
               <select class="form-select kelurahan-class" id="kelurahan_${counter}">
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
          </div>`

          document.getElementById("containerLokasi").insertAdjacentHTML("beforeend", content);

     });

     function deleteContent() {
          document.getElementById(`content_${counter}`).remove();
          counter--;
     }

     $('#formAddPengadaan').submit(function(event) {
          //Event preventDefault is used to stop refresh the page
          event.preventDefault();

          var form_data = new FormData();

          let kecamatan = [];
          let kelurahan = [];

          if (counter > 0) {
               for (let index = 0; index <= counter; index++) {
                    kecamatan[index] = document.getElementById(`kecamatan_${index}`).value;
                    kelurahan[index] = document.getElementById(`kelurahan_${index}`).value;
               }
          } else {
               kecamatan[0] = document.getElementById(`kecamatan_0`).value;
               kelurahan[0] = document.getElementById(`kelurahan_0`).value;
          }

          let pubdir = "{{asset('')}}";
          let act = pubdir + 'add_pengadaan_terbeli';

          let pengadaan = document.getElementById('inputAddPengadaan').value;
          let opd = document.getElementById('inputAddOPD').value;
          let alamat = document.getElementById('inputAddAlamat').value;
          let luas = document.getElementById('inputAddLuas').value;

          if (!latlngCoordinate) {
               Swal.fire({
                    target: document.getElementById('formAddPengadaan'),
                    title: "Opps...",
                    text: "Silahkan pilih lokasi terlebih dahulu",
                    icon: 'error',
                    showConfirmButton: false,
                    timer: 2000,
               });
          } else {
               $.ajax({
                    type: "POST",
                    url: act,
                    data: {
                         _token: '{{ csrf_token() }}',
                         _method: 'POST',
                         pengadaan: pengadaan,
                         opd: opd,
                         alamat: alamat,
                         luas: luas,
                         coordinate: latlngCoordinate,
                         kecamatan: kecamatan,
                         kelurahan: kelurahan
                    },
                    success: function(data) {
                         if (data.status == "success") {
                              Swal.fire({
                                   target: document.getElementById('formAddPengadaan'),
                                   title: "Success",
                                   text: "Data behasil ditambahkan",
                                   icon: 'success',
                                   showConfirmButton: false,
                                   timer: 2000,
                              });

                              var t = $('#dataTableHome').DataTable();

                              t.row.add([
                                   `${data.msg}`,
                                   `${pengadaan}`,
                                   `<a class="me-2" data-bs-toggle="modal" data-bs-target="#modalEditPIC">
                                        <i class="dripicons-document-edit" onclick="showPic('${data.msg}')"></i>
                              </a>`,
                                   "",
                                   "",
                                   `<button class="btn btn-outline-warning waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#modalDetail" onclick="showDetailPerumahan('${data.msg}', '${pengadaan}')">
                                        Detail
                                   </button>`,
                                   `<button type="button" class="btn btn-success waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#modalUpdateTahapan" onclick="showUpdateTahapan('${data.msg}', '${pengadaan}')">Update Status</button>`
                              ]).draw();
                         } else {
                              Swal.fire({
                                   target: document.getElementById('formAddPengadaan'),
                                   title: "Error",
                                   text: data.msg,
                                   icon: 'error',
                                   showConfirmButton: true,
                              });
                         }
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                         alert(xhr.status);
                         alert(xhr.responseText);
                         alert(thrownError);
                    }
               });
          }
     });
</script>