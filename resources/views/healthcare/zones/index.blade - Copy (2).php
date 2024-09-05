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
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap zw_table">
                  <thead class="zw_bg_AF2245 zw_text_ffffff">
                    <tr>
                      <th class="poppins-medium zw_18">Coordinates</th>
                      <th class="poppins-medium zw_18">Healthcare</th>
                      <th class="poppins-medium zw_18" colspan="2"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($zone as $zone)
                    <tr>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $zone->coordinates }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $zone->Healthcareid }}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
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
                var urlParams = new URLSearchParams(window.location.search);
                var serviceProviderId = urlParams.get('id');

                // Send the coordinates and ID to the backend
                fetch('/api/rectangles', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify({
                        id: serviceProviderId,
                        coordinates: coordinatesJson
                    })
                })
                .then(response => response.json())
                .then(data => {
                    console.log('Success:', data);
                    // Refresh rectangles on the map after adding new rectangle
                    fetchAndDisplayRectangles(serviceProviderId);
                })
                .catch((error) => {
                    console.error('Error:', error);
                });
            }
        });

        // Function to fetch and display rectangles based on healthcare_id
        function fetchAndDisplayRectangles() {
            var urlParams = new URLSearchParams(window.location.search);
            var serviceProviderId = urlParams.get('id');

            fetch(`/api/fetchrectangles?id=${serviceProviderId}`)
                .then(response => response.json())
                .then(rectangles => {
                    rectangles.forEach(rectangle => {
                        var coordinates = JSON.parse(rectangle.coordinates);
                        var bounds = L.latLngBounds([coordinates.southWest.lat, coordinates.southWest.lng], [coordinates.northEast.lat, coordinates.northEast.lng]);
                        var rectangleLayer = L.rectangle(bounds, {color: "#ff7800", weight: 1});
                        rectangleLayer.addTo(map);
                    });
                })
                .catch(error => {
                    console.error('Error fetching rectangles:', error);
                });
        }

        // Fetch and display rectangles when the page loads
        fetchAndDisplayRectangles();
    </script>

</body>
</html>
