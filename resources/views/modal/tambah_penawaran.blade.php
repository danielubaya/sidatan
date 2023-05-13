<div class="modal-header" id="">
     <h5 class="modal-title">Tambah Penawaran</h5>
     <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
</div>
<div class="modal-body" id="">
     <div class="row">
          <div class="col-lg-6">
               <div id="mapTambahPenawaran" style="height: 500px;">
                    <p> Peta </p>
               </div>
               <script>
                    //Set map view
                    var map = L.map('mapTambahPenawaran').setView([-7.281946, 112.73893], 12);

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
               </script>
          </div>

          <div class="col-lg-6">
               <div>
                    <form id="formTambahPenawaran">
                         <div class="row">
                              <div class="col-lg-4 col-sm-12 mb-3">
                                   <label for="namaPenawaran" class="form-label">Nama : </label>
                                   <input type="text" class="form-control" id="nama">
                              </div>
                              <div class="col-lg-4 col-sm-12 mb-3">
                                   <label for="tgl-surat" class="form-label">Tgl Surat : </label>
                                   <input type="date" class="form-control" id="tglSuratPenawaran">
                              </div>
                              <div class="col-lg-4 col-sm-12 mb-3">
                                   <label for="perihal" class="form-label">Perihal : </label>
                                   <input type="text" class="form-control" id="perihal">
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

                         <div>
                              <label for="alamat" class="form-label">Alamat Yang Ditawarkan : </label>
                              <textarea class="form-control mb-3" id="alamat" rows="4"></textarea>
                         </div>

                         <div class="row">
                              <div class="col-lg-6 col-sm-12 mb-3">
                                   <label for="luas" class="form-label">Luas (m<sup>2</sup>) : </label>
                                   <input type="number" class="form-control" id="luas">
                              </div>
                              <div class="col-lg-6 col-sm-12 mb-3">
                                   <label for="penawaran" class="form-label">Penawaran (Rp.) : </label>
                                   <input class="form-control" id="penawaran">
                              </div>
                         </div>

                         <div>
                              <label for="ketProgress" class="form-label">Keterangan Progress : </label>
                              <textarea class="form-control mb-3" id="ketProgress" rows="4"></textarea>
                         </div>
                    </form>
               </div>
          </div>
     </div>
</div>
<div class="modal-footer">
     <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
     <button type="submit" form="formTambahPenawaran" class="btn btn-primary waves-effect waves-light">Tambah Pengadaaan</button>
</div>

<script>
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

     //Delete Function
     function deleteContent() {
          document.getElementById(`content_${counter}`).remove();
          counter--;
     }

     var marker = L.marker();
     var latlngCoordinate;

     // Get marker coordinate
     map.on('click', function(e) {
          marker.setLatLng(e.latlng).addTo(map);
          //Set latlng value to string
          latlngCoordinate = e.latlng.lat + "," + e.latlng.lng;
     });

     //Set rupiah currency
     var currencyMask = IMask(
     document.getElementById('penawaran'),
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

     $('#formTambahPenawaran').submit(function(event) {
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
          let act = pubdir + 'add_penawaran';

          let nama = document.getElementById('nama').value;
          let tglSuratPenawaran = document.getElementById('tglSuratPenawaran').value;
          let perihal = document.getElementById('perihal').value;
          let alamat = document.getElementById('alamat').value;
          let luas = document.getElementById('luas').value;
          let ketProgress = document.getElementById('ketProgress').value;
          let penawaran = document.getElementById('penawaran').value;
          
          if (!latlngCoordinate) {
               Swal.fire({
                    target: document.getElementById('formTambahPenawaran'),
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
                         nama: nama,
                         tglSuratPenawaran: tglSuratPenawaran,
                         perihal: perihal,
                         alamat: alamat,
                         luas: luas,
                         latlng: latlngCoordinate,
                         ketProgress: ketProgress,
                         penawaran: penawaran,
                         kecamatan: kecamatan,
                         kelurahan: kelurahan
                    },
                    success: function(data) {
                         if (data.status == "success") {
                              Swal.fire({
                                   target: document.getElementById('formTambahPenawaran'),
                                   title: "Success",
                                   text: "Data behasil ditambahkan",
                                   icon: 'success',
                                   showConfirmButton: false,
                                   timer: 2000,
                              });

                              var t = $('#dataTablePenawaran').DataTable();

                              t.row.add([
                                   `${data.msg}`,
                                   `${nama}`,
                                   `<div class="d-flex">
                                        <a classs="me-2" data-bs-toggle="modal" data-bs-target="#modalEditPICPenawaran" onclick="showEditPicPenawaran('${data.msg}')">
                                             <i class="dripicons-document-edit"></i>
                                        </a>     
                                        <p id="pic_${data.msg}">
                                                 
                                        </p>
                                   </div>`,
                                   `${kecamatan}`,
                                   `${kelurahan}`,
                                   `${ketProgress}`,
                                   ``,
                                   `<button class="btn btn-soft-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalDetailPenawaran" onclick="showDetailPenawaran('${data.msg}','${nama}')">
                                        <i class="mdi mdi-archive-eye-outline"></i> Detail
                                   </button>
                                   <button class="btn btn-soft-danger btn-sm" onclick="deletePenawaran('${data.msg}')">
                                        <i class="mdi mdi-trash-can"></i> Hapus
                                   </button>
                                   `
                              ]).node().id = "tr_penawaran_" + data.msg;

                              t.draw();
                         } else {
                              Swal.fire({
                                   target: document.getElementById('formTambahPenawaran'),
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