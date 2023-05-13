@extends('layouts.dashboard')


@section('breadcrumb')
<div class="mt-lg-4">
     <ol class="breadcrumb p-lg-0">
          <li class="breadcrumb-item"><a href="javascript: void(0);">Dokumen</a></li>
          <li class="breadcrumb-item active">Upload Shapefile</li>
     </ol>
</div>
@endsection

@section('header')
<div>
     <h5 class="font-size-18">Upload Shapefile</h5>
</div>
@endsection


@section('main-content')
<div class="card" style="height: 75vh;">

     <div class="card-body">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
               <li class="nav-item" role="presentation">
                    <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab" aria-selected="true">
                         <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                         <span class="d-none d-sm-block">PENLOK</span>
                    </a>
               </li>
               <li class="nav-item" role="presentation">
                    <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab" aria-selected="false" tabindex="-1">
                         <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                         <span class="d-none d-sm-block">PERSIL</span>
                    </a>
               </li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content p-3 text-muted">
               <div class="tab-pane active show" id="home" role="tabpanel">
                    <div class="col-md-12" style="text-align: left" id="divupload_0">
                         <h3 class="mb-4">Upload Shapefile PENLOK</h3>
                         <div class="mb-2">
                              File SHP:<input type="file" id="shp_0" name="shp_0" style="display: inline;width:200px" />
                              <span id="pesanshp_0"></span>
                         </div>

                         <div class="mb-2">
                              File SHX:<input type="file" id="shx_0" name="shx_0" style="display: inline;width:200px" />
                              <span id="pesanshx_0"></span>
                         </div>

                         <div class="mb-2">
                              File DBF:<input type="file" id="dbf_0" name="dbf_0" style="display: inline;width:200px" />
                              <span id="pesandbf_0"></span>
                         </div>

                         <div class="mb-4">
                              File PRJ:<input type="file" id="prj_0" name="prj_0" style="display: inline;width:200px" />
                              <span id="pesanprj_0"></span>
                         </div>

                         <button class="btn btn-primary" onclick="upload_shapefile('siteplan','shp_0','shx_0','dbf_0','prj_0')">Upload</button>
                    </div>
               </div>
               <div class="tab-pane" id="profile" role="tabpanel">
               <div class="col-md-12" style="text-align: left" id="divupload_0">
                         <h3 class="mb-4">Upload Shapefile PERSIL</h3>
                         <div class="mb-2">
                              File SHP:<input type="file" id="shp_0" name="shp_0" style="display: inline;width:200px" />
                              <span id="pesanshp_0"></span>
                         </div>

                         <div class="mb-2">
                              File SHX:<input type="file" id="shx_0" name="shx_0" style="display: inline;width:200px" />
                              <span id="pesanshx_0"></span>
                         </div>

                         <div class="mb-2">
                              File DBF:<input type="file" id="dbf_0" name="dbf_0" style="display: inline;width:200px" />
                              <span id="pesandbf_0"></span>
                         </div>

                         <div class="mb-4">
                              File PRJ:<input type="file" id="prj_0" name="prj_0" style="display: inline;width:200px" />
                              <span id="pesanprj_0"></span>
                         </div>

                         <button class="btn btn-primary" onclick="upload_shapefile('siteplan','shp_0','shx_0','dbf_0','prj_0')">Upload</button>
                    </div>
               </div>
          </div>
     </div><!-- end card-body -->
</div>
@endsection

