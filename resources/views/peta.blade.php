<title>RFC - App | {{$title}}</title>
  @extends('partials.headerFooter')
  @include('partials.sidebar')
  @section('content')
<style>
  #map { 
    width: 100%;
    height: 500px; 
    padding: 10px;
    }
</style>
  <main id="main" class="main">

    <div class="pagetitle">
    <h1>Denah Sensor</h1>
    <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Denah Sensor</li>
        </ol>
    </nav>
    </div>
    <!-- End Page Title -->
    <!-- map Start-->
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Denah Sensor</h5>        
        <div id="map"></div>
      </div>
    </div>
    <!-- map Ends-->
    <!-- map script start-->
    <script>
      
      var map = L.map('map').setView([-7.310828658394508, 112.7291890337731], 30);

      var data1 = '1'
      /*===================================================
                            Sensor Markers               
      ===================================================*/
      var sensor1 = L.marker([-7.310847351008935, 112.7291290889539])
          .bindPopup('Nomor Sensor: '+ data1 +'<br>Jenis Sensor: Sensor LoRa<br>Status Sensor : Respon'),
          sensor2 = L.marker([-7.310907210085766, 112.72922162516274])
          .bindPopup('Nomor Sensor: <b>2</b><br>Jenis Sensor: Sensor LoRa<br>Status Sensor : Respon'),
          sensor3 = L.marker([-7.31080677985231, 112.72925180001344])
          .bindPopup('Nomor Sensor: <b>3</b><br>Jenis Sensor: Sensor LoRa<br>Status Sensor : Respon')
      
      var sensorLora = L.layerGroup([sensor1,sensor2,sensor3]);

      /*===================================================
                            OSM  LAYER               
      ===================================================*/
      var osm = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
          attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
      });
      osm.addTo(map);

      /*===================================================
                          TILE LAYER               
      ===================================================*/

      var CartoDB_DarkMatter = L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png', {
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>',
        maxZoom: 30
      });
      CartoDB_DarkMatter.addTo(map);

      /*===================================================
                          GOOGLEMAPS LAYER               
      ===================================================*/

      googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{
          maxZoom: 30,
          subdomains:['mt0','mt1','mt2','mt3']
      });
      googleStreets.addTo(map);

      // Satelite Layer
      googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
        maxZoom: 30,
        subdomains:['mt0','mt1','mt2','mt3']
      });
      googleSat.addTo(map);

      /*===================================================
                      LAYER CONTROL               
      ===================================================*/

      var baseLayers = {
          "Google Satellite":googleSat,
          "Google Street":googleStreets,
      };

      var overlayMaps = {
        "Sensor LoRa": sensorLora
      };

      L.control.layers(baseLayers, overlayMaps).addTo(map);
    </script>
    <!-- map script end -->
  </main>   
  @endsection