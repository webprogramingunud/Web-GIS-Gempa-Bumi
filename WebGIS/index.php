 <!DOCTYPE html>
 <html>
 <head>
    <title>WebGIS Gempa Bumi</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>
   <style type="text/css">
   body{
       padding: 0;
       margin: 0;
       font-family: 'Segoe UI';
   }
    #mapid {
        height:100vh;
        width: 100%;
    }
    header{
        position: absolute;
        top: 10px;
        left: 60px;
        z-index: 1000;
        background: #fffb;
        padding: 0px 10px;
    }
    </style>
</head>
<body>
    <header>
		<div class="title">
            <h3>WebGIS Gempa Bumi</h3>
        </div>
	</header>
    <div id="mapid"></div>
</body>
 <!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>
   <script type="text/javascript">
    var today = new Date();
    var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
    var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
    var dateTime = date+' '+time;

    var mymap = L.map('mapid').setView([-8.435562,115.1483693], 10);
        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1,
        accessToken: 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw'
    }).addTo(mymap);

    //Ubah Sendiri nanti//
    var buleleng    = L.circleMarker([-8.1186787,115.0801284], {color: 'red',}).addTo(mymap).bindPopup(
        'Waktu: 13-Jan-21 <br> Lintang: -2.87 <br> Bujur: 136.94 <br> Magnitudo: 5.7 <br> Kedalaman: 74km <br> Wilayah: 30 km Tenggara SINGARAJA');
    var denpasar    = L.circleMarker([-8.6726769,115.1542328], {color: 'red',}).addTo(mymap).bindPopup(
        'Waktu: 13-Jan-21 <br> Lintang: -2.87 <br> Bujur: 136.94 <br> Magnitudo: 5.7 <br> Kedalaman: 74km <br> Wilayah: 30 km Tenggara SINGARAJA');
    var tabanan     = L.circleMarker([-8.5384745,115.0845271], {color: 'red',}).addTo(mymap).bindPopup(
        'Waktu: 13-Jan-21 <br> Lintang: -2.87 <br> Bujur: 136.94 <br> Magnitudo: 5.7 <br> Kedalaman: 74km <br> Wilayah: 30 km Tenggara SINGARAJA');
    var bangli      = L.circleMarker([-8.3339605,115.2049076], {color: 'red',}).addTo(mymap).bindPopup(
        'Waktu: 13-Jan-21 <br> Lintang: -2.87 <br> Bujur: 136.94 <br> Magnitudo: 5.7 <br> Kedalaman: 74km <br> Wilayah: 30 km Tenggara SINGARAJA');
    var badung      = L.circleMarker([-8.5454848,114.8873489], {color: 'red',}).addTo(mymap).bindPopup(
        'Waktu: 13-Jan-21 <br> Lintang: -2.87 <br> Bujur: 136.94 <br> Magnitudo: 5.7 <br> Kedalaman: 74km <br> Wilayah: 30 km Tenggara SINGARAJA');
    var gianyar     = L.circleMarker([-8.481907,115.1581651], {color: 'red',}).addTo(mymap).bindPopup(
        'Waktu: 13-Jan-21 <br> Lintang: -2.87 <br> Bujur: 136.94 <br> Magnitudo: 5.7 <br> Kedalaman: 74km <br> Wilayah: 30 km Tenggara SINGARAJA');
    var karangasem  = L.circleMarker([-8.4501437,115.5893459], {color: 'red',}).addTo(mymap).bindPopup(
        'Waktu: 13-Jan-21 <br> Lintang: -2.87 <br> Bujur: 136.94 <br> Magnitudo: 5.7 <br> Kedalaman: 74km <br> Wilayah: 30 km Tenggara SINGARAJA');
    var klungkung   = L.circleMarker([-8.5407927,115.3849776], {color: 'red',}).addTo(mymap).bindPopup(
        'Waktu: 13-Jan-21 <br> Lintang: -2.87 <br> Bujur: 136.94 <br> Magnitudo: 5.7 <br> Kedalaman: 74km <br> Wilayah: 30 km Tenggara SINGARAJA');
    var negara      = L.circleMarker([-8.3568675,114.5736279], {color: 'red',}).addTo(mymap).bindPopup(
        'Waktu: 13-Jan-21 <br> Lintang: -2.87 <br> Bujur: 136.94 <br> Magnitudo: 5.7 <br> Kedalaman: 74km <br> Wilayah: 30 km Tenggara SINGARAJA');
   
    var popup = L.popup();
    function onMapClick(e) {
    popup
        .setLatLng(e.latlng)
        .setContent("Koordinat: " + e.latlng.toString())
        .openOn(mymap);
    }
    mymap.on('click', onMapClick);

   </script>
</html>