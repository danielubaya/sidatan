<!doctype html>
<html lang="en">

<head>
     <meta charset="utf-8" />
     <title>SIDATAN - Sistem Informasi Pengadaan Tanah</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
     <meta content="Themesbrand" name="author" />
     <meta name="csrf-token" content="{{ csrf_token() }}">
     
     <!-- App favicon -->
     <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

     <!-- preloader css -->
     <link rel="stylesheet" href="{{asset('assets/css/preloader.min.css')}}" type="text/css" />

     <!-- Bootstrap Css -->
     <link href="{{asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
     <!-- Icons Css -->
     <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
     <!-- App Css-->
     <link href="{{asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

     <!-- IMPORTANT NOTES -->
     <!-- Changed --bs-modal-zindex at public/assets/css/bootstrap.mim.css from 1055 to 1100-->

     <!-- DataTables -->
     <link href="{{asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
     <link href="{{asset('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

     <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />

     <!-- Make sure you put this AFTER Leaflet's CSS -->
     <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>

     <!-- iMask -->
     <script src="https://unpkg.com/imask"></script>
     
</head>

<body data-sidebar="brand" data-layout-scrollable="true">

     <!-- <body data-layout="horizontal"> -->

     <!-- Begin page -->
     <div id="layout-wrapper">
          <header id="page-topbar">
               <div class="navbar-header">
                    <div class="d-flex">
                         <!-- LOGO -->
                         <div class="navbar-brand-box">
                              <a href="index.html" class="logo logo-dark">
                                   <span class="logo-sm">
                                        <img src="{{asset('assets/images/sidatan-logo-2.png')}}" alt="" height="24">
                                   </span>
                                   <span class="logo-lg">
                                        <img src="{{asset('assets/images/sidatan-logo-2.png')}}" alt="" height="24"> <span class="logo-txt">SIDATAN</span>
                                   </span>
                              </a>

                              <a href="index.html" class="logo logo-light">
                                   <span class="logo-sm">
                                        <img src="{{asset('assets/images/sidatan-logo-2.png')}}" alt="" height="24">
                                   </span>
                                   <span class="logo-lg">
                                        <img src="{{asset('assets/images/sidatan-logo-2.png')}}" alt="" height="24"> <span class="logo-txt">SIDATAN</span>
                                   </span>
                              </a>
                         </div>

                         <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
                              <i class="fa fa-fw fa-bars"></i>
                         </button>

                         <div class="d-none d-lg-block">
                              <div>
                                   @yield("breadcrumb")
                              </div>
                         </div>
                    </div>


               </div>
          </header>

          <!-- ========== Left Sidebar Start ========== -->
          <div class="vertical-menu mm-active">

               <div data-simplebar="init" class="h-100 mm-show">
                    <div class="simplebar-wrapper" style="margin: 0px;">
                         <div class="simplebar-height-auto-observer-wrapper">
                              <div class="simplebar-height-auto-observer"></div>
                         </div>
                         <div class="simplebar-mask">
                              <div class="simplebar-offset" style="right: -16.8px; bottom: 0px;">
                                   <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;">
                                        <div class="simplebar-content" style="padding: 0px;">

                                             <!--- Sidemenu -->
                                             <div id="sidebar-menu" class="mm-active">
                                                  <!-- Left Menu Start -->
                                                  <ul class="metismenu list-unstyled mm-show" id="side-menu">
                                                       <li class="mb-3">
                                                            <a href="#">
                                                                 <span data-feather="user"></span>
                                                                 <span>{{ Auth::user()->name }}</span>
                                                            </a>
                                                       </li>

                                                       <li>
                                                            <a href="javascript: void(0);" class="has-arrow">
                                                                 <span data-feather="home"></span>
                                                                 <span data-key="t-pengadaan">Pengadaan</span>
                                                            </a>
                                                            <ul class="sub-menu mm-collapse">
                                                                 <li>
                                                                      <a href="/home">
                                                                           <span data-key="t-berjalan">Pengadaan Berjalan</span>
                                                                      </a>
                                                                 </li>
                                                                 <li>
                                                                      <a href="/dokumen/pengadaan_terbeli">
                                                                           <span data-key="t-terbeli">Pengadaan Terbeli</span>
                                                                      </a>
                                                                 </li>
                                                            </ul>
                                                       </li>

                                                       <li>
                                                            <a href="javascript: void(0);" class="has-arrow">
                                                                 <span data-feather="list"></span>
                                                                 <span data-key="t-penawaran">Penawaran</span>
                                                            </a>
                                                            <ul class="sub-menu mm-collapse" aria-expanded="false">
                                                                 <li>
                                                                      <a href="/dokumen/penawaran">
                                                                           <span data-key="t-penawaran-tanah">Penawaran Tanah</span>
                                                                      </a>
                                                                 </li>
                                                            </ul>
                                                       </li>

                                                       <li>
                                                            <a href="javascript: void(0);" class="has-arrow">
                                                                 <span data-feather="map"></span>
                                                                 <span data-key="t-peta">Peta</span>
                                                            </a>
                                                            <ul class="sub-menu mm-collapse" aria-expanded="false">
                                                                 <li>
                                                                      <a href="/dokumen/peta_lokasi">
                                                                           <span data-key="t-peta-lokasi">Peta Lokasi</span>
                                                                      </a>
                                                                 </li>
                                                                 <li>
                                                                      <a href="/dokumen/upload_shp">
                                                                           <span data-key="t-upload-shp">Upload SHP</span>
                                                                      </a>
                                                                 </li>
                                                            </ul>
                                                       </li>

                                                       <li>
                                                            <a href="/dokumen/peraturan">
                                                                 <span data-feather="book"></span>
                                                                 <span data-key="t-peta-lokasi">Peraturan</span>
                                                            </a>
                                                       </li>

                                                       <li>
                                                            <form id="formLogout" method="POST" action="{{ route('logout') }}">
                                                                 @csrf
                                                                 
                                                                 <a onclick="document.getElementById('formLogout').submit();">
                                                                      <span data-feather="log-out"></span>
                                                                      <span data-key="t-log-out">Log Out</span>
                                                                 </a>
                                                                      
                                                            </form>
                                                       </li>
                                                  </ul>

                                             </div>
                                             <!-- Sidebar -->
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="simplebar-placeholder" style="width: auto; height: 995px;"></div>
                    </div>
                    <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                         <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                    </div>
                    <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                         <div class="simplebar-scrollbar" style="height: 465px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
                    </div>
               </div>
          </div>
          <!-- Left Sidebar End -->

          <!-- ============================================================== -->
          <!-- Start right Content here -->
          <!-- ============================================================== -->
          <div class="main-content">

               <div class="page-content">
                    <div class="container-fluid">

                         <!-- start page title -->
                         <div class="row">
                              <div class="col-12">
                                   <div class="page-title-box">
                                        @yield("header")
                                   </div>
                                   <div>
                                        @yield("main-content")
                                   </div>
                              </div>
                         </div>
                         <!-- end page title -->

                    </div> <!-- container-fluid -->
               </div>
               <!-- End Page-content -->


               <footer class="footer">
                    <div class="container-fluid">
                         <div class="row text-center">
                              <p class="mb-0">Copyright <script>
                                   document.write(new Date().getFullYear())
                                   </script> <a href="#">DPRKPP Kota Surabaya.</a></p>
                         </div>
                    </div>
               </footer>
          </div>
          <!-- end main content-->

     </div>
     <!-- END layout-wrapper -->


     <!-- Right Sidebar -->
     <div class="right-bar">
          <div data-simplebar class="h-100">
               <div class="rightbar-title d-flex align-items-center p-3">

                    <h5 class="m-0 me-2">Theme Customizer</h5>

                    <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                         <i class="mdi mdi-close noti-icon"></i>
                    </a>
               </div>

               <!-- Settings -->
               <hr class="m-0" />

               <div class="p-4">
                    <h6 class="mb-3">Layout</h6>
                    <div class="form-check form-check-inline">
                         <input class="form-check-input" type="radio" name="layout" id="layout-vertical" value="vertical">
                         <label class="form-check-label" for="layout-vertical">Vertical</label>
                    </div>
                    <div class="form-check form-check-inline">
                         <input class="form-check-input" type="radio" name="layout" id="layout-horizontal" value="horizontal">
                         <label class="form-check-label" for="layout-horizontal">Horizontal</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2">Layout Mode</h6>

                    <div class="form-check form-check-inline">
                         <input class="form-check-input" type="radio" name="layout-mode" id="layout-mode-light" value="light">
                         <label class="form-check-label" for="layout-mode-light">Light</label>
                    </div>
                    <div class="form-check form-check-inline">
                         <input class="form-check-input" type="radio" name="layout-mode" id="layout-mode-dark" value="dark">
                         <label class="form-check-label" for="layout-mode-dark">Dark</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2">Layout Width</h6>

                    <div class="form-check form-check-inline">
                         <input class="form-check-input" type="radio" name="layout-width" id="layout-width-fuild" value="fuild" onchange="document.body.setAttribute('data-layout-size', 'fluid')">
                         <label class="form-check-label" for="layout-width-fuild">Fluid</label>
                    </div>
                    <div class="form-check form-check-inline">
                         <input class="form-check-input" type="radio" name="layout-width" id="layout-width-boxed" value="boxed" onchange="document.body.setAttribute('data-layout-size', 'boxed')">
                         <label class="form-check-label" for="layout-width-boxed">Boxed</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2">Layout Position</h6>

                    <div class="form-check form-check-inline">
                         <input class="form-check-input" type="radio" name="layout-position" id="layout-position-fixed" value="fixed" onchange="document.body.setAttribute('data-layout-scrollable', 'false')">
                         <label class="form-check-label" for="layout-position-fixed">Fixed</label>
                    </div>
                    <div class="form-check form-check-inline">
                         <input class="form-check-input" type="radio" name="layout-position" id="layout-position-scrollable" value="scrollable" onchange="document.body.setAttribute('data-layout-scrollable', 'true')">
                         <label class="form-check-label" for="layout-position-scrollable">Scrollable</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2">Topbar Color</h6>

                    <div class="form-check form-check-inline">
                         <input class="form-check-input" type="radio" name="topbar-color" id="topbar-color-light" value="light" onchange="document.body.setAttribute('data-topbar', 'light')">
                         <label class="form-check-label" for="topbar-color-light">Light</label>
                    </div>
                    <div class="form-check form-check-inline">
                         <input class="form-check-input" type="radio" name="topbar-color" id="topbar-color-dark" value="dark" onchange="document.body.setAttribute('data-topbar', 'dark')">
                         <label class="form-check-label" for="topbar-color-dark">Dark</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Size</h6>

                    <div class="form-check sidebar-setting">
                         <input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-default" value="default" onchange="document.body.setAttribute('data-sidebar-size', 'lg')">
                         <label class="form-check-label" for="sidebar-size-default">Default</label>
                    </div>
                    <div class="form-check sidebar-setting">
                         <input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-compact" value="compact" onchange="document.body.setAttribute('data-sidebar-size', 'md')">
                         <label class="form-check-label" for="sidebar-size-compact">Compact</label>
                    </div>
                    <div class="form-check sidebar-setting">
                         <input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-small" value="small" onchange="document.body.setAttribute('data-sidebar-size', 'sm')">
                         <label class="form-check-label" for="sidebar-size-small">Small (Icon View)</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Color</h6>

                    <div class="form-check sidebar-setting">
                         <input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-light" value="light" onchange="document.body.setAttribute('data-sidebar', 'light')">
                         <label class="form-check-label" for="sidebar-color-light">Light</label>
                    </div>
                    <div class="form-check sidebar-setting">
                         <input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-dark" value="dark" onchange="document.body.setAttribute('data-sidebar', 'dark')">
                         <label class="form-check-label" for="sidebar-color-dark">Dark</label>
                    </div>
                    <div class="form-check sidebar-setting">
                         <input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-brand" value="brand" onchange="document.body.setAttribute('data-sidebar', 'brand')">
                         <label class="form-check-label" for="sidebar-color-brand">Brand</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2">Direction</h6>

                    <div class="form-check form-check-inline">
                         <input class="form-check-input" type="radio" name="layout-direction" id="layout-direction-ltr" value="ltr">
                         <label class="form-check-label" for="layout-direction-ltr">LTR</label>
                    </div>
                    <div class="form-check form-check-inline">
                         <input class="form-check-input" type="radio" name="layout-direction" id="layout-direction-rtl" value="rtl">
                         <label class="form-check-label" for="layout-direction-rtl">RTL</label>
                    </div>
               </div>

          </div> <!-- end slimscroll-menu-->
     </div>
     <!-- /Right-bar -->


     <!-- Right bar overlay-->
     <div class="rightbar-overlay"></div>

     <!-- JAVASCRIPT -->
     <script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
     <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
     <script src="{{asset('assets/libs/metismenu/metisMenu.min.js')}}"></script>
     <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
     <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>
     <script src="{{asset('assets/libs/feather-icons/feather.min.js')}}"></script>

     <!-- Required datatable js -->
     <script src="{{asset('assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
     <script src="{{asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>

     <!-- Buttons examples -->
     <script src="{{asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
     <script src="{{asset('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
     <script src="{{asset('assets/libs/jszip/jszip.min.js')}}"></script>
     <script src="{{asset('assets/libs/pdfmake/build/pdfmake.min.js')}}"></script>
     <script src="{{asset('assets/libs/pdfmake/build/vfs_fonts.js')}}"></script>
     <script src="{{asset('assets/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
     <script src="{{asset('assets/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
     <script src="{{asset('assets/libs/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>

     <!-- Responsive examples -->
     <script src="{{asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
     <script src="{{asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>

     <!-- Datatable init js -->
     <script src="{{asset('assets/js/pages/datatables.init.js')}}"></script>

     <!-- pace js -->
     <script src="{{asset('assets/libs/pace-js/pace.min.js')}}"></script>
     <script src="{{asset('assets/js/app.js')}}"></script>

     <!-- Script.js -->
     <script src="{{asset('assets/js/script.js')}}"></script>

     <!-- Sweet Alerts js -->
     <script src="{{asset('assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>
     <script src="{{asset('assets/libs/sweetalert2/sweetalert2.all.min.js')}}"></script>

     <!-- Sweet Alerts js -->
     <script src="{{asset('assets/js/pages/form-validation.init.js')}}"></script>

     <!-- eChart js -->
     <script src="{{asset('assets/libs/echarts/echarts.min.js')}}"></script>

     <!-- Dropdown js -->
     <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
     <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />

     <!-- leaflet map.init -->
     <!-- <script src="{{asset('assets/js/pages/leaflet-us-states.js')}}"></script>
     <script src="{{asset('assets/js/pages/leaflet-map.init.js')}}"></script> -->

     <!-- Flat Picker -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
     <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

     <!-- Choices JS -->
     <script src="
     https://cdn.jsdelivr.net/npm/choices.js@10.2.0/public/assets/scripts/choices.min.js
     "></script>
     
     <link href="
     https://cdn.jsdelivr.net/npm/choices.js@10.2.0/public/assets/styles/choices.min.css
     " rel="stylesheet">

     <!-- Modal Edit PIC -->
     <div id="modalEditPIC" class="modal fade" tabindex="-1" data-bs-scroll="true" style="display: none;">
          <div class="modal-dialog">
               <div class="modal-content" id="modalContentEditPIC">
                  
               </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
     </div>

     <!-- Modal Detail Status Project -->
     <div id="modalDetail" class="modal fade" tabindex="-1" data-bs-scroll="true" style="display: none;">
          <div class="modal-dialog modal-xl">
               <div class="modal-content">
                    <div class="modal-header">
                         <h5 class="modal-title" id="modalDetailTitle">Detail Pengadaan : {Nama Pengadaan}</h5>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body position-relative" id="modalDetailBody">
                    
                    </div>
                    <div class="modal-footer">
                    </div>
               </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
     </div>

     <!-- Modal Detail Status Project -->
     <div id="modalDetail" class="modal fade" tabindex="-1" data-bs-scroll="true" style="display: none;">
          <div class="modal-dialog modal-xl">
               <div class="modal-content">
                    <div class="modal-header">
                         <h5 class="modal-title" id="modalDetailTitle">Detail Pengadaan : {Nama Pengadaan}</h5>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body position-relative" id="modalDetailBody">
                    
                    </div>
                    <div class="modal-footer">
                    </div>
               </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
     </div>

     <!-- Modal Detail Penawaran Status Project -->
     <div id="modalDetailPenawaran" class="modal fade" tabindex="-1" data-bs-scroll="true" style="display: none;">
          <div class="modal-dialog modal-xl">
               <div class="modal-content">
                    <div class="modal-header">
                         <h5 class="modal-title" id="modalDetailPenawaranTitle"></h5>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body position-relative" id="modalDetailPenawaranBody">

                    </div>
                    <div class="modal-footer">
                    </div>
               </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
     </div>

     <!-- Modal Add New Project -->
     <div id="modalAddNewProject" class="modal fade" tabindex="-1" data-bs-scroll="true" style="display: none;">
          <div class="modal-dialog modal-xl">
               <div class="modal-content">
                    <div class="modal-header">
                         <h5 class="modal-title" id="myModalLabel">Project Pengadaan Baru</h5>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="modalBodyAddNewProject">
                    
                    </div>
                    <div class="modal-footer">
                         <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                         <button type="submit" form="formAddPengadaan" class="btn btn-primary waves-effect waves-light">Tambah Pengadaaan</button>
                    </div>

               </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
     </div>

     
     <!-- Modal Edit Pengadaan -->
     <div id="modalEditPengadaan" class="modal fade" tabindex="-1" data-bs-scroll="true" style="display: none;">
          <div class="modal-dialog modal-xl">
               <div class="modal-content" id="modalContentEditPengadaan">

               </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
     </div>


     <!-- Modal Update Tahapan Project -->
     <div id="modalUpdateTahapan" class="modal fade" tabindex="-1" data-bs-scroll="true" style="display: none;">
          <div class="modal-dialog">
               <div class="modal-content">
                    <div class="modal-header">
                         <h5 class="modal-title" id="modalUpdateTahapanTitle">Update Tahapan</h5>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="modalUpdateTahapanBody">
                        
                    </div>
               </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
     </div>

     <!-- Modal Add Pemilik Persil -->
     <div id="modalAddPemilikPersil" class="modal fade" tabindex="-1" data-bs-scroll="true" style="display: none;">
          <div class="modal-dialog modal-xl">
               <div class="modal-content" id="modalContentPemilikPersil">
                    
               </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
     </div>

     <!-- Modal Add Progress Project -->
     <div id="modalAddProgress" class="modal fade" tabindex="-1" data-bs-scroll="true" style="display: none;">
          <div class="modal-dialog">
               <div class="modal-content" id="modalProgressContent">


               </div><!-- /.modal-content -->
          </div>
     </div>

     <!-- Modal Upload Dokumen Kegiatan Project -->
     <div id="modalUploadDokumenKegiatan" class="modal fade" tabindex="-1" data-bs-scroll="true" style="display: none;">
          <div class="modal-dialog">
               <div class="modal-content">
                    <div class="modal-header">
                         <h5 class="modal-title" id="modalUploadDocKegiatanTitle">Upload Dokumen Kegiatan</h5>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" data-bs-target="#modalDetail" data-bs-toggle="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="modalContentUploadDokumenKegiatan">
                       
                    </div>
               </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
     </div>

     <!-- Modal Upload Peraturan Project -->
     <div id="modalUploadPeraturan" class="modal fade" tabindex="-1" data-bs-scroll="true" style="display: none;">
          <div class="modal-dialog">
               <div class="modal-content" id="modalContentPeraturan">
                  
               </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
     </div>

     <!-- Modal Rincian Pembayaran -->
     <div id="modalRincianPembayaran" class="modal fade" tabindex="-1" data-bs-scroll="true" style="display: none;">
          <div class="modal-dialog modal-xl">
               <div class="modal-content">
                    <div class="modal-header">
                         <h5 class="modal-title">Rincian Pembayaran</h5>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" data-bs-target="#modalDetail" data-bs-toggle="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="modalBodyRincianPembayaran">
                       
                    </div>
                    <div class="modal-footer">
                    
                    </div>
               </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
     </div>

     <!-- Modal Upload Dokumen Data Pendukung -->
     <div id="modalUploadDataPendukung" class="modal fade" tabindex="-1" data-bs-scroll="true" style="display: none;">
          <div class="modal-dialog">
               <div class="modal-content">
                    <div class="modal-header">
                         <h5 class="modal-title">Upload Dokumen Data Pendukung</h5>
                         <button type="button" class="btn-close" data-bs-target="#modalDetail" data-bs-dismiss="modal" data-bs-toggle="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="modalBodyDataPendukung">
                       
                    </div>
               </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
     </div>

     <!-- Modal Add Penawaran Project -->
     <div id="modalAddPenawaran" class="modal fade" tabindex="-1" data-bs-scroll="true" style="display: none;">
          <div class="modal-dialog modal-xl">
               <div class="modal-content" id="modalContentAddPenawaran">
                   
               </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
     </div>

     <!-- Modal Edit Penawaran -->
     <div id="modalEditPenawaran" class="modal fade" tabindex="-1" data-bs-scroll="true" style="display: none;">
          <div class="modal-dialog modal-xl">
               <div class="modal-content" id="modalContentEditPenawaran">
                   
               </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
     </div>

     <!-- Modal Edit PIC -->
     <div id="modalEditPICPenawaran" class="modal fade" tabindex="-1" data-bs-scroll="true" style="display: none;">
          <div class="modal-dialog">
               <div class="modal-content" id="modalContentEditPICPenawaran">
                  
               </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
     </div>

     <!-- Modal Detail Pemilik Persil -->
     <div id="modalDetailPemilikPersil" class="modal fade" tabindex="-1" data-bs-scroll="true" style="display: none;">
          <div class="modal-dialog modal-xl">
               <div class="modal-content" id="modalContentDetailPemilikPersil">

               </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
     </div>

     <!-- Modal Upload Dokumen Pemilik Persil -->
     <div id="modalUploadPemilikPersil" class="modal fade" tabindex="-1" data-bs-scroll="true" style="display: none;">
          <div class="modal-dialog">
               <div class="modal-content" id="modalContentUploadPemilikPersil">
                    
               </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
     </div>

     <!-- Modal Tambah Progress Penawaran -->
     <div id="modalTambahProgressPenawaran" class="modal fade" tabindex="-1" data-bs-scroll="true" style="display: none;">
          <div class="modal-dialog">
               <div class="modal-content" id="modalContentTambahProgressPenawaran">
                    
               </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
     </div>

     <!-- Modal Upload Dokumen Progress Penawaran Tanah -->
     <div id="modalUploadDokumenProgressPenawaranTanah" class="modal fade" tabindex="-1" data-bs-scroll="true" style="display: none;">
          <div class="modal-dialog">
               <div class="modal-content" id="modalContentUploadDokumenProgressPenawaranTanah">
                    
               </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
     </div>

     <!-- Modal Upload Dokumen Pengadaan Terbeli -->
     <div id="modalAddPengadaanTerbeli" class="modal fade" tabindex="-1" data-bs-scroll="true" style="display: none;">
          <div class="modal-dialog modal-xl">
               <div class="modal-content">
                    <div class="modal-content">
                         <div class="modal-header">
                              <h5 class="modal-title" id="myModalLabel">Project Pengadaan Terbeli Baru</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                         </div>
                         <div class="modal-body" id="modalContentAddPengadaanTerbeli">
                         
                         </div>
                         <div class="modal-footer">
                              <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                              <button type="submit" form="formAddPengadaan" class="btn btn-primary waves-effect waves-light">Tambah Pengadaaan</button>
                         </div>
                    </div>
               </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
     </div>

     <!-- Modal Edit Data Peraturan-->
     <div id="modalEditDataPeraturan" class="modal fade" tabindex="-1" data-bs-scroll="true" style="display: none;">
          <div class="modal-dialog">
               <div class="modal-content" id="modalContentEditDataPeraturan">
                    
               </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
     </div>

     <script>
          $(document).ready(function() {
               @yield('javasc')
               $('#datatable_penawaran').DataTable();
          });

          var pubdir = "{{asset('')}}";

          function showModalEditDataPeraturan(id){
               $('#modalContentEditDataPeraturan').html("<div class='text-center'><div class='spinner-border text-primary m-1' role='status'><span class='sr-only'>Loading...</span></div></div>");
               var act = pubdir + 'show_modal_edit_data_peraturan/' + id;
               
               $.ajax({
                    url: act,
                    success: function(data){
                         $('#modalContentEditDataPeraturan').html(data);
                    }
               })
          }

          function showModalPengadaanTerbeli(){
               $('#modalContentAddPengadaanTerbeli').html("<div class='text-center'><div class='spinner-border text-primary m-1' role='status'><span class='sr-only'>Loading...</span></div></div>");
               var act = pubdir + 'show_modal_add_pengadaan_terbeli';

               $.ajax({
                    url: act,
                    success: function(data){
                         $('#modalContentAddPengadaanTerbeli').html(data);
                    }
               })
          }

          function showModalUploadDocModalPenawaranProgress(id){
               $('#modalContentUploadDokumenProgressPenawaranTanah').html("<div class='text-center'><div class='spinner-border text-primary m-1' role='status'><span class='sr-only'>Loading...</span></div></div>");
               var act = pubdir + 'show_upload_doc_progress_penawaran/'+id;

               $.ajax({
                    url: act,
                    success: function(data){
                         $('#modalContentUploadDokumenProgressPenawaranTanah').html(data);
                    }
               })
          }

          function showModalTambahProgressPenawaran(id){
               $('#modalContentTambahProgressPenawaran').html("<div class='text-center'><div class='spinner-border text-primary m-1' role='status'><span class='sr-only'>Loading...</span></div></div>");
               var act = pubdir + 'show_add_tambah_progress/'+id;

               $.ajax({
                    url: act,
                    success: function(data){
                         $('#modalContentTambahProgressPenawaran').html(data);
                    }
               })
          }

          function showUploadDocPersil(id){
               $('#modalContentUploadPemilikPersil').html("<div class='text-center'><div class='spinner-border text-primary m-1' role='status'><span class='sr-only'>Loading...</span></div></div>");
               var act = pubdir + 'show_upload_doc_persil/' + id;

               $.ajax({
                    url: act,
                    success: function(data){
                         $('#modalContentUploadPemilikPersil').html(data);
                    }
               })
          }

          function showDetailPemilikPersil(id){
               $('#modalContentDetailPemilikPersil').html("<div class='text-center'><div class='spinner-border text-primary m-1' role='status'><span class='sr-only'>Loading...</span></div></div>");
               var act = pubdir + 'show_detail_pemilik_persil/' + id;
               
               $.ajax({
                    url: act,
                    success: function(data){
                         $('#modalContentDetailPemilikPersil').html(data);
                    }
               })
          }

          function showEditPicPenawaran(id){
               $('#modalContentEditPICPenawaran').html("<div class='text-center'><div class='spinner-border text-primary m-1' role='status'><span class='sr-only'>Loading...</span></div></div>");
               var act = pubdir + 'show_edit_pic_penawaran/' + id;
               
               $.ajax({
                    url: act,
                    success: function(data){
                         $('#modalContentEditPICPenawaran').html(data);
                    }
               })
          }

          function showEditPenawaran(id){
               $('#modalContentEditPenawaran').html("<div class='text-center'><div class='spinner-border text-primary m-1' role='status'><span class='sr-only'>Loading...</span></div></div>");
               var act = pubdir + 'show_edit_penawaran/' + id;
               
               $.ajax({
                    url: act,
                    success: function(data){
                         $('#modalContentEditPenawaran').html(data);
                    }
               })
          }

          function showAddPenawaran(){
               $('#modalContentAddPenawaran').html("<div class='text-center'><div class='spinner-border text-primary m-1' role='status'><span class='sr-only'>Loading...</span></div></div>");
               var act = pubdir + 'show_add_tambah_penawaran/';

               $.ajax({
                    url: act,
                    success: function(data){
                         $('#modalContentAddPenawaran').html(data);
                    }
               })
          }

          function showDetailPenawaran(id, penawaran){
               $('#modalDetailPenawaranTitle').html("Penawaran - " + penawaran)
               $('#modalDetailPenawaranBody').html("<div class='text-center'><div class='spinner-border text-primary m-1' role='status'><span class='sr-only'>Loading...</span></div></div>");
               var act = pubdir + 'show_detail_penawaran/'+ id;

               $.ajax({
                    url: act,
                    success: function(data){
                         $('#modalDetailPenawaranBody').html(data);
                    }
               })
          }

          function showDataPendukung(id){
               $('modalBodyDataPendukung').html("<div class='text-center'><div class='spinner-border text-primary m-1' role='status'><span class='sr-only'>Loading...</span></div></div>");
               var act = pubdir + 'show_upload_data_pendukung/'+ id;

               $.ajax({
                    url: act,
                    success: function(data){
                         $('#modalBodyDataPendukung').html(data);
                    }
               })
          }

          function showModalRincianPembayaran(id_pengadaan, id_persil){
               console.log(id_pengadaan, id_persil);
               
               $('modalBodyRincianPembayaran').html("<div class='text-center'><div class='spinner-border text-primary m-1' role='status'><span class='sr-only'>Loading...</span></div></div>");
               var act = pubdir + 'show_perincian_pembayaran/'+ id_pengadaan;
               
               $.ajax({
                    url: act,
                    data:{
                         id_persil: id_persil
                    },
                    success: function(data){
                         $('#modalBodyRincianPembayaran').html(data);
                    }
               });
          }
          
          function showModalAddPeraturan(){
               $('modalContentPeraturan').html("<div class='text-center'><div class='spinner-border text-primary m-1' role='status'><span class='sr-only'>Loading...</span></div></div>");
               var act = pubdir + 'show_add_peraturan';
               
               $.ajax({
                    url: act,
                    success: function(data){
                         $('#modalContentPeraturan').html(data);
                    }
               });
          }

          function showUploadModalKegiatan(id, judul){
               $("#modalUploadDocKegiatanTitle").html("Upload Dokumen Kegiatan - " + judul);
               $('modalContentUploadDokumenKegiatan').html("<div class='text-center'><div class='spinner-border text-primary m-1' role='status'><span class='sr-only'>Loading...</span></div></div>");
               var act = pubdir + 'show_upload_doc_kegiatan/' + id;

               $.ajax({
                    url: act,
                    success: function(data){
                         $('#modalContentUploadDokumenKegiatan').html(data);
                    }
               });
          }

          function showAddProgress(id){
               $('#modalProgressContent').html("<div class='text-center'><div class='spinner-border text-primary m-1' role='status'><span class='sr-only'>Loading...</span></div></div>");
               var act = pubdir + 'show_add_progress/' + id;

               $.ajax({
                    url: act,
                    success: function(data){
                         $('#modalProgressContent').html(data);
                    }
               })
          }

          function showAddPemilikPersil(id){
               $('#modalContentPemilikPersil').html("<div class='text-center'><div class='spinner-border text-primary m-1' role='status'><span class='sr-only'>Loading...</span></div></div>");
               var act = pubdir + 'show_add_persil/' + id;

               $.ajax({
                    url: act,
                    success: function(data){
                         $('#modalContentPemilikPersil').html(data);
                    }
               })
          }

          function showDetailPerumahan(id, judul){
			$("#modalDetailTitle").html(judul);
			$("#modalDetailBody").html("<div class='text-center'><div class='spinner-border text-primary m-1' role='status'><span class='sr-only'>Loading...</span></div></div>");
			var act = pubdir + 'show_detail/' + id;

			$.ajax({
				url: act,
				success: function(data) {
					$("#modalDetailBody").html(data);
				}
			});
		}

          function showAddPengadaan(){
               $("#modalBodyAddNewProject").html("<div class='text-center'><div class='spinner-border text-primary m-1' role='status'><span class='sr-only'>Loading...</span></div></div>");
			var act = pubdir + 'show_add_pengadaan';

			$.ajax({
				url: act,
				success: function(data) {
					$("#modalBodyAddNewProject").html(data);
				}
			});
          }

          function showEditPengadaan(id){
               $("#modalContentEditPengadaan").html("<div class='text-center'><div class='spinner-border text-primary m-1' role='status'><span class='sr-only'>Loading...</span></div></div>");
			var act = pubdir + 'show_edit_pengadaan/' + id;
               
			$.ajax({
				url: act,
				success: function(data) {
					$("#modalContentEditPengadaan").html(data);
				}
			});
          }

          function showUpdateTahapan(id, judul){
               $("#modalUpdateTahapanTitle").html(judul);
			$("#modalUpdateTahapanBody").html("<div class='text-center'><div class='spinner-border text-primary m-1' role='status'><span class='sr-only'>Loading...</span></div></div>");
			var act = pubdir + 'show_update_tahapan/' + id;

			$.ajax({
				url: act,
				success: function(data) {
					$("#modalUpdateTahapanBody").html(data);
				}
			});
          }

          function showPic(id) {
			$("#modalContentEditPIC").html("<div class='text-center'><div class='spinner-border text-primary m-1' role='status'><span class='sr-only'>Loading...</span></div></div>");
			var act = pubdir + 'show_edit_pic/' + id;

			$.ajax({
				url: act,
				success: function(data) {
					$("#modalContentEditPIC").html(data);
				}
			});
		}

          function addNewPengadaan(){
               let pengadaan = document.getElementById("inputAddPengadaan").value;
               let opd = document.getElementById("inputAddOPD").value;
               let kecamatan = document.getElementById("inputAddKecamatan").value;
               let kelurahan = document.getElementById("inputAddKelurahan").value;
               let alamat = document.getElementById("inputAddAlamat").value;
               let luas = document.getElementById("inputAddLuas").value;

               let act = pubdir + 'tambahPengadaan';
               
               $.ajax({
                    type:"POST",
                    url: act,
                    data: {
                         token: '{{ csrf_token() }}',
					method: 'POST',
                         pengadaan: pengadaan,
                         opd: opd,
                         kecamatan: kecamatan,
                         kelurahan: kelurahan,
                         alamat: alamat,
                         luas : luas,
                         latlng: "0.0"
				},
				success: function(data) {
					if(data.msg == "success"){
                              Swal.fire({
							target: document.getElementById(pengadaan),
							title: "Success",
							text: "Tambah data pengadaan berhasil",
							icon: 'success',
						});
                         } else {
                              Swal.fire({
							target: document.getElementById(pengadaan),
							title: "Error",
							text: "Tambah data pengadaan berhasil",
							icon: 'error',
                                   showConfirmButton: true,
						});
                         }
				}
               });
          }

          @yield('javascript-tambahan')
     </script>

</body>



</html>