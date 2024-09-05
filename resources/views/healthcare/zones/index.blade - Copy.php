<!DOCTYPE html>
<html>
<head>
    <title>Healthcare Locator</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet-draw@1.0.4/dist/leaflet.draw.css" />
    <style>
        #map { height: 500px; }
    </style>
    @include('admin.layouts.headermodule')
</head>
<body class="hold-transition sidebar-mini zw_sidebar">
  <div class="wrapper">
    @include('admin.layouts.header')
    @include('admin.layouts.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
    <div id="map"></div>
</div>
</section>
</div>
</div>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/leaflet-draw@1.0.4/dist/leaflet.draw.js"></script>
    <script>
       var map = L.map('map').setView([23.8859, 45.0792], 6);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Add a custom marker
        var marker = L.marker([24.7136, 46.6753]).addTo(map); // Riyadh coordinates
        marker.bindPopup("<b>Riyadh</b>").openPopup();

        var drawnItems = new L.FeatureGroup();
        map.addLayer(drawnItems);

        var drawControl = new L.Control.Draw({
            edit: {
                featureGroup: drawnItems
            },
            draw: {
                polygon: false,
                marker: false,
                polyline: false,
                rectangle: true,
                circle: false
            }
        });
        map.addControl(drawControl);

        map.on(L.Draw.Event.CREATED, function (event) {
            var layer = event.layer;
            drawnItems.addLayer(layer);

            if (layer instanceof L.Rectangle) {
                var bounds = layer.getBounds();
                var coordinates = {
                    northEast: bounds.getNorthEast(),
                    southWest: bounds.getSouthWest()
                };

                // Convert coordinates to JSON
                var coordinatesJson = JSON.stringify(coordinates);

                // Send the coordinates to the backend
                fetch('/api/rectangles', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify({ coordinates: coordinatesJson })
                })
                .then(response => response.json())
                .then(data => {
                    console.log('Success:', data);
                })
                .catch((error) => {
                    console.error('Error:', error);
                });
            }
        });
    </script>
</body>
</html>
