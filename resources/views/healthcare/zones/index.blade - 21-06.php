
    @include('admin.layouts.headermodule')
    <link href="https://api.mapbox.com/mapbox-gl-js/v3.4.0/mapbox-gl.css" rel="stylesheet">
    <script src="https://api.mapbox.com/mapbox-gl-js/v3.4.0/mapbox-gl.js"></script>
    <link href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-draw/v1.4.3/mapbox-gl-draw.css" rel="stylesheet">
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-draw/v1.4.3/mapbox-gl-draw.js"></script>
    <style>
        body { margin: 0; padding: 0; }
        #map { height:500px; }
        .calculation-box {
            height: 75px;
            width: 150px;
            position: absolute;
            bottom: 40px;
            left: 10px;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 15px;
            text-align: center;
        }
        p { font-family: 'Open Sans'; margin: 0; font-size: 13px; }
    </style>
<body class="hold-transition sidebar-mini zw_sidebar">
    <div class="wrapper">
        @include('admin.layouts.header')
        @include('admin.layouts.sidebar')
        <div class="content-wrapper">
            <div class="row">
                <input type="hidden" id="id" class="id" value="{{$id}}">
                <div class="col-lg-4">
                    <!-- Your existing HTML structure with country, city, and zone dropdowns -->
                    <select name="country_id" id="zone_country_id" class="custom-select poppins-regular zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none form-control">
                        <option value="">Select a country</option>
                        @foreach($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-lg-4">
                    <select name="city_id" id="zone_city_id" class="custom-select poppins-regular zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none form-control">
                        <option value="">Select a city</option>
                    </select>
                </div>
                <div class="col-lg-4">
                    <select name="zone_id" id="zone_id" class="custom-select poppins-regular zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none form-control">
                        <option value="">Select a zone</option>
                    </select>
                </div>
            </div>

            <section class="content-header">
                <div class="container-fluid">
                    <div id="map"></div>
                    <div class="calculation-box">
        <p>Click the map to draw a polygon.</p>
        <div id="calculated-area"></div>
    </div>
                </div>
            </section>
        </div>
    </div>
    @include('admin.layouts.footer')

    <script src="https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.js"></script>
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-draw/v1.4.3/mapbox-gl-draw.js"></script>
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.min.js"></script>

 <script src="https://unpkg.com/@turf/turf@6/turf.min.js"></script>
    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoiYWJkdWxyYTdtYW4iLCJhIjoiY2x0bzlvNTEwMDVoZTJrbWg4bHRxeXRwciJ9._WDrK6r6rayfB4WnardOwA';

        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11', // style URL
            center: [45.0792, 23.8859], // starting position as [lng, lat]
            zoom: 6 // starting zoom
        });

        var Draw = new MapboxDraw({
            displayControlsDefault: true,
            controls: {
                point: true,
                line_string: true,
                polygon: true,
                trash: true,
                combine_features: true,
                uncombine_features: true
            }
        });
        map.addControl(Draw);

        // Optional: Add navigation control (zoom buttons)
        map.addControl(new mapboxgl.NavigationControl());


        // Add geocoder control (optional)
        var geocoder = new MapboxGeocoder({
            accessToken: mapboxgl.accessToken,
            mapboxgl: mapboxgl,
            marker: true, // Disable marker
            placeholder: 'Search for a zone'
        });
        map.addControl(geocoder, 'top-left');

        // Event listener for draw.create
        map.on('draw.create', function(event) {
            var coordinates = event.features[0].geometry.coordinates;
            var shapeType = event.features[0].geometry.type;

            // Get selected dropdown values
            var countryId = $('#zone_country_id').val(); // Example of getting dropdown value
            var cityId = $('#zone_city_id').val();
            var zoneId = $('#zone_id').val();
            var id = $('#id').val();

            // Prepare data for backend
            var data = {
                country_id: countryId,
                city_id: cityId,
                zone_id: zoneId,
                shape_type: shapeType,
                coordinates: coordinates,
                Healthcareid:id
            };

            // Send data to backend
            fetch('/api/save', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },
                body: JSON.stringify(data)
            })
            .then(response => response.json())
            .then(data => {
                console.log('Shape saved successfully:', data);
                // Optionally update UI or perform actions after saving
            })
            .catch(error => {
                console.error('Error saving shape:', error);
            });
        });

        // Function to fetch and display rectangles based on drawn coordinates
         fetch('/api/getrectangles')
            .then(response => response.json())
            .then(data => {
                data.forEach(rectangle => {
                    const coordinates = JSON.parse(rectangle.coordinates);
                    map.addLayer({
                        'id': `rectangle-${rectangle.id}`,
                        'type': 'fill',
                        'source': {
                            'type': 'geojson',
                            'data': {
                                'type': 'Feature',
                                'geometry': {
                                    'type': 'Polygon',
                                    'coordinates': coordinates
                                }
                            }
                        },
                        'layout': {},
                        'paint': {
                            'fill-color': '#888888',
                            'fill-opacity': 0.4
                        }
                    });
                    map.addLayer({
                        'id': `rectangle-outline-${rectangle.id}`,
                        'type': 'line',
                        'source': {
                            'type': 'geojson',
                            'data': {
                                'type': 'Feature',
                                'geometry': {
                                    'type': 'Polygon',
                                    'coordinates': coordinates
                                }
                            }
                        },
                        'layout': {},
                        'paint': {
                            'line-color': '#000',
                            'line-width': 2
                        }
                    });
                });
            })
            .catch(error => {
                console.error('Error fetching rectangles:', error);
            });

        // Update area calculation
        map.on('draw.create', updateArea);
        map.on('draw.delete', updateArea);
        map.on('draw.update', updateArea);

        function updateArea(e) {
            const data = draw.getAll();
            const answer = document.getElementById('calculated-area');
            if (data.features.length > 0) {
                const area = turf.area(data);
                const rounded_area = Math.round(area * 100) / 100;
                answer.innerHTML = `<p><strong>${rounded_area}</strong></p><p>square meters</p>`;
            } else {
                answer.innerHTML = '';
                if (e.type !== 'draw.delete') alert('Click the map to draw a polygon.');
            }
        }
    </script>
    <script>
    // AJAX function to update cities dropdown based on selected country
    $('#zone_country_id').change(function() {
        var countryId = $(this).val();
        $.ajax({
            url: '{{ route("getCitiesByCountry", ":country_id") }}'.replace(':country_id', countryId),
            type: 'GET',
            success: function(data) {
                var citiesDropdown = $('#zone_city_id');
                citiesDropdown.empty();
                citiesDropdown.append('<option value="">Select a city</option>');
                $.each(data, function(index, city) {
                    citiesDropdown.append('<option value="' + city.id + '">' + city.name + '</option>');
                });
            },
            error: function(error) {
                console.error('Error fetching cities:', error);
            }
        });
    });

    // AJAX function to update zones dropdown based on selected city
    $('#zone_city_id').change(function() {
        var cityId = $(this).val();

        $.ajax({
            url: '{{ route("getZonesByCity", ":city_id") }}'.replace(':city_id', cityId),
            type: 'GET',
            success: function(data) {
                var zonesDropdown = $('#zone_id');
                zonesDropdown.empty();
                zonesDropdown.append('<option value="">Select a zone</option>');
                $.each(data, function(index, zone) {
                    zonesDropdown.append('<option value="' + zone.id + '">' + zone.name + '</option>');
                });
            },
            error: function(error) {
                console.error('Error fetching zones:', error);
            }
        });
    });
</script>


