@extends('web.components.app')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

    <style>
        .map-header {
            text-align: center;
            font-weight: bold;
            margin-top: 30px;
            margin-bottom: 20px;
        }

        #map {
            width: 80%;
            height: 400px;
            margin: 0 auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>

    <div class="container" >
      
        <h1 class="map-header">Lokasi Kami di Semarang</h1>

        
        <div id="map"></div>
    </div>
    <script>
        var map = L.map('map').setView([-6.982647445238567, 110.4090498667486], 17); // Ganti dengan lokasi kamu

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);

        var marker = L.marker([-6.982647445238567, 110.4090498667486]).addTo(map);
        marker.bindPopup(
            '<a href="https://www.google.com/maps?q=-6.982647445238567,110.4090498667486" target="_blank">Lihat di Google Maps</a>'
            ).openPopup();
    </script>
@endsection
