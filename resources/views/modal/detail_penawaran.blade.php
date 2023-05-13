     <div class="row h-100">
          <div class="col-md-3">
               <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link mb-2 active" id="v-pills-penawaran-tab" data-bs-toggle="pill" href="#v-pills-penawaran" role="tab"><i class=" bx bx-detail"></i> Penawaran </a>
                    <a class="nav-link mb-2" id="v-pills-progress-tab" data-bs-toggle="pill" href="#v-pills-progress" role="tab"><i class="bx bx-slider-alt"></i> Progress </a>
                    <a class="nav-link mb-2" id="v-pills-progress-tab" data-bs-toggle="pill" href="#v-pills-upload-berkas-penawaran" role="tab"><i class="bx bx-archive-out"></i> Berkas Penawaran </a>
               </div>
          </div><!-- end col -->
          <div class="col-md-9">
               <div class="tab-content text-muted mt-4 mt-md-0" id="v-pills-tabContent">
                    <div class="tab-pane fade active show" id="v-pills-penawaran" role="tabpanel">
                         <div class="d-flex justify-content-between">
                              <div>
                                   <h4 class="mb-2">Penawaran</h4>
                              </div>
                              <div>
                                   <button class="btn btn-soft-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditPenawaran" onclick="showEditPenawaran('{{ $pw->id_penawaran }}')">
                                        <i class="bx bx-edit-alt"></i>
                                        Edit Penawaran
                                   </button>
                              </div>
                         </div>
                         <div>
                              <div class="col-lg-12 col-sm-12 mb-sm-2">
                                   <div class="mb-3">
                                        <div id="mapDetailPenawaran" style="height: 400px;">
                                             <p> Peta </p>
                                        </div>
                                        <script>
                                             //Set map view
                                             var map = L.map('mapDetailPenawaran').setView([-7.281946, 112.73893], 12);

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
                                             L.marker([{{$pw->latlng}}]).addTo(map);
                                        </script>
                                   </div>

                                   <div>
                                        <form id="formEditPenawaran">
                                             <div class="row">
                                                  <div class="col-lg-4 col-sm-12 mb-3">
                                                       <label for="namaPenawaran" class="form-label">Nama : </label>
                                                       <input type="text" class="form-control" id="namaPenawaran" value="<?php echo $pw->nama ?>" readonly>
                                                  </div>
                                                  <div class="col-lg-4 col-sm-12 mb-3">
                                                       <label for="tgl-surat" class="form-label">Tgl Surat : </label>
                                                       <input type="date" class="form-control" id="tglSurat" value="<?php echo $pw->tgl_surat ?>" readonly>
                                                  </div>
                                                  <div class="col-lg-4 col-sm-12 mb-3">
                                                       <label for="perihal" class="form-label">Perihal : </label>
                                                       <input type="text" class="form-control" id="perihal" value="<?php echo $pw->perihal ?>" readonly>
                                                  </div>
                                             </div>

                                             <div id="containerLokasi">
                                                 
                                             </div>

                                             <div>
                                                  <label for="alamat" class="form-label">Alamat : </label>
                                                  <textarea class="form-control mb-3" id="alamat" rows="4" readonly><?php echo $pw->alamat ?></textarea>
                                             </div>

                                             <div class="row">
                                                  <div class="col-lg-6 col-sm-12 mb-3">
                                                       <label for="luas" class="form-label">Luas : </label>
                                                       <input type="text" class="form-control" id="luas" value="<?php echo $pw->luas ?>" readonly>
                                                  </div>
                                                  <div class="col-lg-6 col-sm-12 mb-3">
                                                       <label for="penawaran" class="form-label">Penawaran : </label>
                                                       <input type="text" class="form-control" id="penawaran" value="<?php echo $pw->penawaran ?>" readonly>
                                                  </div>
                                             </div>

                                             <div>
                                                  <label for="ketProgress" class="form-label">Keterangan Progress : </label>
                                                  <textarea class="form-control mb-3" id="ketProgress" rows="4" readonly><?php echo $pw->keterangan_progress ?></textarea>
                                             </div>

                                        </form>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-progress" role="tabpanel">
                         <div class="d-flex justify-content-between mb-3">
                              <div>
                                   <h4 class="mb-2">Progress</h4>
                              </div>
                              <div>
                                   <button class="btn btn-soft-primary" data-bs-toggle="modal" data-bs-target="#modalTambahProgressPenawaran" onclick="showModalTambahProgressPenawaran('{{$pw->id_penawaran}}')">Tambah Progress</button>
                              </div>
                         </div>
                         <div>
                              <table id="dataTableProgressPenawaran" class="table dt-responsive w-100">
                                   <thead>
                                        <th>Tanggal</th>
                                        <th>Jenis Kegiatan</th>
                                        <th>Nama Kegiatan</th>
                                        <th>Keterangan</th>
                                        <th>Action</th>
                                   </thead>
                                   <tbody>
                                        @foreach($pp as $p)
                                             <tr id="tr_progress_penawaran_{{$p->id_progress}}">
                                                  <td>{{$p->tgl_progress}}</td>
                                                  <td>{{$p->jenis_kegiatan}}</td>
                                                  <td>{{$p->nama_kegiatan}}</td>
                                                  <td>{{$p->keterangan}}</td>
                                                  <td>
                                                       <button class="btn btn-soft-success btn-sm mb-2" data-bs-target="#modalUploadDokumenProgressPenawaranTanah" data-bs-toggle="modal" onclick="showModalUploadDocModalPenawaranProgress('{{$p->id_progress}}')">
                                                            <i class="dripicons-upload"></i> Upload Berkas
                                                       </button>
                                                  
                                                       <button class="btn btn-soft-danger btn-sm" onclick="deleteProgressPenawaran('{{$p->id_progress}}','{{$p->penawaran_id}}')">
                                                            <i class="dripicons-trash"></i> Delete
                                                       </button>

                                                  </td>
                                             </tr>
                                        @endforeach
                                   </tbody>
                              </table>
                         </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-upload-berkas-penawaran" role="tabpanel">
                         <div>
                              <h4 class="mb-2">Berkas Penawaran</h4>
                         </div>
                         
                         <form id="form_berkas_penawaran">
                              <div class="d-flex justify-content-between mb-2">
                                   <div>
                                        <p>Pilih berkas : <input type="file" id="file_berkas_penawaran" name="file" multiple> </p>
                                   </div>
                                   <div>
                                        <button type="sumbit" class="btn btn-primary btn-sm" class="fa fa-upload"></i> Upload</button>
                                   </div>
                              </div>
                         </form>
                         
                         <div>
                              <table id="dataTableBerkasPenawaran" class="table dt-responsive w-100">
                                   <thead>
                                        <th>Nama Berkas</th>
                                        <th>Download</th>
                                        <th>Delete</th>
                                   </thead>
                                   <tbody>
                                   @foreach($dp as $d)
                                        <tr id="tr_bp_{{$d->id_berkas_penawaran}}">
                                             <td>{{$d->filename}}</td>
                                             <td>
                                                  <a href='{{ asset("upload/Penawaran/$pw->id_penawaran/Dokumen Penawaran/$d->filename") }}' class='btn btn-soft-success btn-sm' target="_blank"><i class="fa fa-download"></i> Download</a>
                                             </td>
                                             <td>
                                                  <a href='#' class='btn btn-soft-danger btn-sm' onclick="deleteDokumenPenawaran('{{$d->id_berkas_penawaran}}','upload/Penawaran/{{$pw->id_penawaran}}/Dokumen Penawaran/{{$d->filename}}')"><i class="fa fa-trash"></i> Delete</a>
                                             </td>
                                        </tr>
                                   @endforeach
                                   </tbody>
                              </table>
                         </div>

                    </div>
               </div><!--  end col -->
          </div>
     </div>

     <script>
          $('#dataTableProgressPenawaran').dataTable({})

          $('#dataTableBerkasPenawaran').dataTable({})

          //Get value kecamatan and kelurahan from database
          var kecamatan = `{{$pw->kecamatan}}`;
          var kelurahan = `{{$pw->kelurahan}}`;

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

          var pubdir = "{{asset('')}}";

          //Upload file berkas penawaran
          $('#form_berkas_penawaran').submit((event) => {
               //event prevent default is used to stop event refresh the page.
               event.preventDefault();

               //Set new FormData object
               var form_data = new FormData();

               let id_penawaran = '{{$pw->id_penawaran}}';

               //Set token and method
               form_data.append('_token', '{{ csrf_token() }}');
               form_data.append('_method', 'POST');

               // Read selected files leght
               let totalfiles = document.getElementById('file_berkas_penawaran').files.length;
               
               //Add the filet to form_data object
               for (let index = 0; index < totalfiles; index++) {
                    form_data.append("files[]", document.getElementById('file_berkas_penawaran').files[index]);
               }

               //Set URL
               let act = pubdir + 'upload_dokumen_penawaran/' + id_penawaran;

               $.ajax({
                    url: act,
                    type: 'POST',
                    data: form_data,
                    dataType: 'json',
                    contentType: false,
                    processData: false,
                    success: function(data) {
                         if (data.status === "success") {

                              Swal.fire({
                                   target: document.getElementById('form_berkas_penawaran'),
                                   title: "Success",
                                   text: "Upload file berhasil",
                                   icon: 'success',
                                   showConfirmButton: false,
                                   timer: 2000,
                              });

                              var tud = $('#dataTableBerkasPenawaran').DataTable();

                              //Add the uploaded data to new row 
                              for (let index = 0; index < totalfiles; index++) {
                                   //set new file name
                                   var fileName = document.getElementById('file_berkas_penawaran').files[index].name;
                                   
                                   //Get file name from form input
                                   var addRow = tud.row.add([
                                        `${fileName}`,
                                        `<a href='{{ asset('upload/Penawaran/${id_penawaran}/Dokumen Penawaran/${fileName}') }}' class='btn btn-soft-success btn-sm' target="_blank"><i class="fa fa-download"></i> Download</a>`,
                                        `<a href='#' class='btn btn-soft-danger btn-sm' onclick='deleteDokumenPenawaran("${data.lastId[index]}","upload/Penawaran/${id_penawaran}/Dokumen Penawaran/${fileName}")'><i class="fa fa-trash"></i> Delete</a>`
                                   ]).node().id = "tr_bp_" + data.lastId[index];

                                   tud.draw();
                              }
                         } else {
                              Swal.fire({
                                   target: document.getElementById('form_berkas_penawaran'),
                                   title: "Opps...",
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
               })
          })         

          function deleteDokumenPenawaran(id,path){
               Swal.fire({
                    target: document.getElementById('dataTableBerkasPenawaran'),
                    title: 'Apakah anda yakin akan menghapus data ini?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yakin!',
                    cancelButtonText: 'Tidak',
               }).then((result) => {
                    if (result.isConfirmed) {

                         let act = pubdir + 'delete_dokumen_penawaran/' + id;

                         $.ajax({
                              url: act,
                              type: 'POST',
                              data: {
                                   _token: '{{ csrf_token() }}',
                                   _method: 'POST',
                                   path : path
                              },
                              success: function(data){
                                   if(data.status === "success"){
                                        
                                        $('#dataTableBerkasPenawaran').DataTable().row("#tr_bp_"+id).remove().draw();
          
                                        Swal.fire({
                                             target: document.getElementById('dataTableBerkasPenawaran'),
                                             title: 'Terhapus!',
                                             text: 'Data berhasil terhapus',
                                             icon: 'success',
                                             showConfirmButton: false,
                                             timer: 2000,
                                        });
                                   } else {
                                        Swal.fire({
                                             target: document.getElementById('dataTableBerkasPenawaran'),
                                             title: 'Error',
                                             text: data.msg,
                                             icon: 'error',
                                             showConfirmButton: true,
                                        });
                                   }
                              }
                         })

                    }
               })
          }

          function deleteProgressPenawaran(id_progress,penawaran_id){

               Swal.fire({
                    target: document.getElementById('dataTableProgressPenawaran'),
                    title: 'Apakah anda yakin akan menghapus progress ini?',
                    text: 'Seluruh berkas dokumen progress akan ikut Terhapus',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yakin!',
                    cancelButtonText: 'Tidak',
               }).then((result) => {
                    if (result.isConfirmed) {

                         let act = pubdir + 'delete_progress_penawaran/' + id_progress;
                         
                         $.ajax({
                              url: act,
                              type: 'POST',
                              data: {
                                   _token: '{{ csrf_token() }}',
                                   _method: 'POST',
                                   penawaran_id: penawaran_id
                              },
                              success: function(data){
                                   if(data.status === "success"){
                                        
                                        $('#dataTableProgressPenawaran').DataTable().row("#tr_progress_penawaran_"+id_progress).remove().draw();
          
                                        Swal.fire({
                                             target: document.getElementById('dataTableProgressPenawaran'),
                                             title: 'Terhapus!',
                                             text: 'Data berhasil terhapus',
                                             icon: 'success',
                                             showConfirmButton: false,
                                             timer: 2000,
                                        });
                                        
                                   } else {
                                        Swal.fire({
                                             target: document.getElementById('dataTableProgressPenawaran'),
                                             title: 'Error',
                                             text: data.msg,
                                             icon: 'error',
                                             showConfirmButton: true,
                                        });
                                   }
                              }
                         });
                    }
               })
          }

     </script>