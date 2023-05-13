@extends('layouts.dashboard')

@section('breadcrumb')
<div class="mt-lg-4">
     <ol class="breadcrumb p-lg-0">
          <li class="breadcrumb-item"><a href="javascript: void(0);">Peta</a></li>
          <li class="breadcrumb-item active">Peta Sebaran</li>
     </ol>
</div>
@endsection

@section('header')
<div>
     <h5 class="font-size-18">Peta Sebaran</h5>
     <p>Berikut merupakan tampilan peta sebaran</p>
</div>
@endsection


@section('main-content')
     <card class="card">    
          <div id="map" style="height: 70vh"></div>
     </card>
  
     
     <!-- <div class="container">
          <div id="map" style="width: 150px;"></div>
     </div> -->
@endsection

@section('javasc')
     
     //Set map view
     var map = L.map('map').setView([-7.281946 ,112.73893], 12);

     //Add open street map layer
     var osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {maxZoom: 19, attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'});
     
     //Add osm layer to map
     osm.addTo(map);
     
     //Declaring a map layer
     var googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{ maxZoom: 20, subdomains:['mt0','mt1','mt2','mt3'] });
     var googleHybrid = L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}',{ maxZoom: 20, subdomains:['mt0','mt1','mt2','mt3'] });
     var googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{ maxZoom: 20, subdomains:['mt0','mt1','mt2','mt3']});

     //Create the base map
     var baseMaps = {
          "OpenStreetMap": osm,
          "Google Street":googleStreets,
          "Google Satellite": googleSat,
          "Google Hybrid":googleHybrid,
     };

     //Add into leaflet layer control
     var layerControl = L.control.layers(baseMaps).addTo(map);
@endsection