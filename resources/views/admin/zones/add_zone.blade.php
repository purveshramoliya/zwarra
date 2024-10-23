@include('admin.layouts.headermodule')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="https://api.mapbox.com/mapbox-gl-js/v3.4.0/mapbox-gl.css" rel="stylesheet">
<script src="https://api.mapbox.com/mapbox-gl-js/v3.4.0/mapbox-gl.js"></script>
<link href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-draw/v1.4.3/mapbox-gl-draw.css" rel="stylesheet">
<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-draw/v1.4.3/mapbox-gl-draw.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
<style>
    #map {
        height: 400px;
    }

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

    p {
        font-family: 'Open Sans';
        margin: 0;
        font-size: 13px;
    }
</style>

<body class="hold-transition sidebar-mini zw_sidebar">
    <div class="wrapper">
        @include('admin.layouts.header')
        @include('admin.layouts.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="row mb-2">
                    <div class="col-sm-12 zw_back">
                        <a href="{{ route('ourservices.index') }}" class="poppins-medium zw_18 zw_text_333333 zw_a zw_back">
                            <i class="fas fa-arrow-left right mr-2"></i>Back
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="poppins-semibold zw_34 zw_text_AF2245 mt-3">Add Zone</h3>
                    </div>
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="">
                            <!-- form start -->
                            @if ($errors->any())
                            <div class="alert zw_alert_danger">
                                There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <form action="{{ url('save') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-row zw_form_row">
                                        <div class="form-group col-md-6">
                                            <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputEnname">EN Country Name</label>
                                            <select id="Encountryname" name="Encountryname" class="form-control zw_18">
                                                <option value="">EN Name</option>
                                                @foreach($countries as $contry)
                                                <option value="{{$contry->id}}">{{$contry->Enname}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputArname">AR Country Name</label>
                                            <select id="Arcountryname"name="Arcountryname" class="form-control zw_18">
                                                <option value="">Ar Name</option>
                                                @foreach($countries as $contry)
                                                <option value="{{$contry->id}}">{{$contry->Arname}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row zw_form_row">
                                        <div class="form-group col-md-6">
                                            <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputEnname">EN City Name</label>
                                            <select id="Encityname" name="Encityname" class="form-control zw_18">
                                                <option value="">Select City</option>
                                               
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputArname">AR City Name</label>
                                            <select id="Arcityname" name="Arcityname" class="form-control zw_18">
                                                <option value="">Select City</option>
                                               
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row zw_form_row">
                                        <div class="form-group col-md-6">
                                            <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputEnname">EN Add Zone Name</label>
                                            <input type="text" id="Enzonename" name="Enzonename" class="form-control poppins-regular zw_18 zw_text_898B9F" id="exampleInputEnname" placeholder="Enter Zone Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputArname">Ar Add Zone Name</label>
                                            <input type="text" id="Arzonename" name="Arzonename" class="form-control poppins-regular zw_18 zw_text_898B9F" id="exampleInputArname" placeholder="Enter Zone Name">
                                        </div>
                                    </div>
                                    <div class="container-fluid mt-4 mb-4">
                                        <input type="hidden" id="coordinates" name="coordinates">
                                        <input type="hidden" id="shapetype" name="shapetype">
                                        <div id="map" class="col-md-12"></div>
                                        <div class="calculation-box">
                                            <!-- <p>Click the map to draw a polygon.</p> -->
                                            <div id="calculated-area"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <button type="submit" class="btn zw_submit zw_submit_wh">Save</button>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!--/.col (right) -->
    </div>
    </section>
    </div>
    @include('admin.layouts.footer')
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.js"></script>
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-draw/v1.4.3/mapbox-gl-draw.js"></script>
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
    <script src="https://unpkg.com/@turf/turf@6/turf.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            // Set up CSRF token for all AJAX requests
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            fetchAndDisplayShapes();
        });

        mapboxgl.accessToken = 'pk.eyJ1IjoiYWJkdWxyYTdtYW4iLCJhIjoiY2x0bzlvNTEwMDVoZTJrbWg4bHRxeXRwciJ9._WDrK6r6rayfB4WnardOwA';

        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11',
            center: [0, 0],
            zoom: 2
        });

        var draw = new MapboxDraw({
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
        map.addControl(draw);

        map.addControl(new mapboxgl.NavigationControl());

        var geocoder = new MapboxGeocoder({
            accessToken: mapboxgl.accessToken,
            mapboxgl: mapboxgl,
            marker: true,
            placeholder: 'Search for a zone'
        });
        map.addControl(geocoder, 'top-left');

        function setMapCenter(lng, lat, zoomLevel) {
            map.flyTo({
                center: [lng, lat],
                zoom: zoomLevel, // Set the zoom level dynamically
                essential: true // Animation is considered essential
            });
        }


        // Event listener for country selection
        document.getElementById('Encountryname').addEventListener('change', function() {
            const selectedCountry = this.value;
            fetch(`/getRectanglesCity/${selectedCountry}`)
                .then(response => response.json())
                .then(data => {
                    if (data.coordinates) {
                        const [lng, lat] = data.coordinates;
                        const zoomLevel = 5; // Set your desired zoom level here
                        setMapCenter(lng, lat, zoomLevel);
                    }
                });
        });
        map.on('draw.create', function(event) {
            const urlParams = new URLSearchParams(window.location.search);
            const id = urlParams.get('id') || '0';
            var coordinates = event.features[0].geometry.coordinates;
            var coordinatesJson = JSON.stringify(coordinates);

            // Set the value of the hidden input field
            var shape_type = event.features[0].geometry.type;
            document.getElementById('shapetype').value = shape_type;
            document.getElementById('coordinates').value = coordinatesJson;
          
        });

        function fetchAndDisplayShapes() {
            const urlParams = new URLSearchParams(window.location.search);
            const id = urlParams.get('id') || '0';

            fetch(`/getrectangles?id=${id}`, {
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'Content-Type': 'application/json'
                    }
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    data.forEach(shape => {
                        var coordinates = JSON.parse(shape.coordinates);

                        map.addLayer({
                            id: `shape-${shape.id}`,
                            type: 'fill',
                            source: {
                                type: 'geojson',
                                data: {
                                    type: 'Feature',
                                    geometry: {
                                        type: shape.shape_type,
                                        coordinates: coordinates
                                    }
                                }
                            },
                            layout: {},
                            paint: {
                                'fill-color': '#888888',
                                'fill-opacity': 0.4
                            }
                        });

                        map.addLayer({
                            id: `shape-outline-${shape.id}`,
                            type: 'line',
                            source: {
                                type: 'geojson',
                                data: {
                                    type: 'Feature',
                                    geometry: {
                                        type: shape.shape_type,
                                        coordinates: coordinates
                                    }
                                }
                            },
                            layout: {},
                            paint: {
                                'line-color': '#af2245',
                                'line-width': 2
                            }
                        });
                    });
                })
                .catch(error => {
                    console.error('Error fetching shapes:', error);
                });
        }

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
        $('#Encountryname').change(function() {
            var countryId = $(this).val();
            $.ajax({
                url: '{{ route("getCitiesByCountry", ":country_id") }}'.replace(':country_id', countryId),
                type: 'GET',
                success: function(data) {
                    var citiesDropdown = $('#Encityname');
                    citiesDropdown.empty();
                    citiesDropdown.append('<option value="">Select city</option>');
                    $.each(data, function(index, city) {
                        citiesDropdown.append('<option value="' + city.id + '">' + city.name + '</option>');
                    });
                },
                error: function(error) {
                    console.error('Error fetching cities:', error);
                    if (error.status === 401) {
                        window.location.href = '{{ route("login") }}';
                    }
                }
            });
        });
        $('#Arcountryname').change(function() {
            var countryId = $(this).val();
            $.ajax({
                url: '{{ route("getCitiesByCountry", ":country_id") }}'.replace(':country_id', countryId),
                type: 'GET',
                success: function(data) {
                    var citiesDropdown = $('#Arcityname');
                    citiesDropdown.empty();
                    citiesDropdown.append('<option value="">Select city</option>');
                    $.each(data, function(index, city) {
                        citiesDropdown.append('<option value="' + city.id + '">' + city.name + '</option>');
                    });
                },
                error: function(error) {
                    console.error('Error fetching cities:', error);
                    if (error.status === 401) {
                        window.location.href = '{{ route("login") }}';
                    }
                }
            });
        });
    </script>
    </div>
</body>

</html>