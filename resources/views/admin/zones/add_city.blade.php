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
                        <h3 class="poppins-semibold zw_34 zw_text_AF2245 mt-3">Add City</h3>
                    </div>
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="">
                            <!-- form start -->
                            <form action="" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-row zw_form_row">
                                        <div class="form-group col-md-6">
                                            <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputEnname">EN Country Name</label>
                                            <select name="Enname" class="form-control zw_18">
                                                <option value="">EN Name</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputArname">AR Country Name</label>
                                            <select name="Arname" class="form-control zw_18">
                                                <option value="">Ar Name</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row zw_form_row">
                                        <div class="form-group col-md-6">
                                            <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputEnname">EN City Name</label>
                                            <input type="text" name="Enname" class="form-control poppins-regular zw_18 zw_text_898B9F" id="exampleInputEnname" placeholder="EN Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputArname">AR City Name</label>
                                            <input type="text" name="Arname" class="form-control poppins-regular zw_18 zw_text_898B9F" id="exampleInputArname" placeholder="Ar Name">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-12">
                                        <form class="zw_search_form ">
                                            <div class="input-group input-group-sm">
                                                <input type="text" name="search" class=" zw_search_input zw_16 poppins-regular" placeholder="Search nearest location">
                                                <div class="input-group-append zw_input-group-append">
                                                    <button type="submit" class="btn zw_search_button zw_bg_ffffff">
                                                        <i class="fas fa-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="container-fluid mt-4 mb-4">
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
            center: [45.0792, 23.8859],
            zoom: 6
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

        map.on('draw.create', function(event) {
            const urlParams = new URLSearchParams(window.location.search);
            const id = urlParams.get('id') || '0';

            console.log(id);

            var coordinates = event.features[0].geometry.coordinates;
            var shapeType = event.features[0].geometry.type;

            var countryId = $('#zone_country_id').val();
            var cityId = $('#zone_city_id').val();
            var zoneId = $('#zone_id').val();

            var data = {
                country_id: countryId,
                city_id: cityId,
                zone_id: zoneId,
                shape_type: shapeType,
                coordinates: coordinates,
                healthcare_id: id
            };

            fetch('/save', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    body: JSON.stringify(data)
                })
                .then(response => {
                    if (!response.ok) {
                        return response.json().then(err => {
                            throw new Error(err.message);
                        });
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.success) {
                        // Swal.fire({
                        //     title: 'Success!',
                        //     text: 'Zone saved successfully',
                        //     icon: 'success',
                        //     confirmButtonText: 'OK'
                        // });
                    } else {
                        // Swal.fire({
                        //     title: 'Error!',
                        //     text: data.message,
                        //     icon: 'error',
                        //     confirmButtonText: 'OK'
                        // });
                    }
                    console.log('Response data:', data);
                })
                .catch(error => {
                    // Swal.fire({
                    //     title: 'Error!',
                    //     text: 'Zone Is Alredy Exit',
                    //     icon: 'error',
                    //     confirmButtonText: 'OK'
                    // });
                    console.error('Error saving shape:', error);
                });

        });

        // function fetchAndDisplayShapes() {
        //     const urlParams = new URLSearchParams(window.location.search);
        //     const id = urlParams.get('id') || '0';

        //     fetch(`/getrectangles?id=${id}`, {
        //             headers: {
        //                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        //                 'Content-Type': 'application/json'
        //             }
        //         })
        //         .then(response => {
        //             if (!response.ok) {
        //                 throw new Error('Network response was not ok');
        //             }
        //             return response.json();
        //         })
        //         .then(data => {
        //             data.forEach(shape => {
        //                 var coordinates = JSON.parse(shape.coordinates);

        //                 map.addLayer({
        //                     id: `shape-${shape.id}`,
        //                     type: 'fill',
        //                     source: {
        //                         type: 'geojson',
        //                         data: {
        //                             type: 'Feature',
        //                             geometry: {
        //                                 type: shape.shape_type,
        //                                 coordinates: coordinates
        //                             }
        //                         }
        //                     },
        //                     layout: {},
        //                     paint: {
        //                         'fill-color': '#888888',
        //                         'fill-opacity': 0.4
        //                     }
        //                 });

        //                 map.addLayer({
        //                     id: `shape-outline-${shape.id}`,
        //                     type: 'line',
        //                     source: {
        //                         type: 'geojson',
        //                         data: {
        //                             type: 'Feature',
        //                             geometry: {
        //                                 type: shape.shape_type,
        //                                 coordinates: coordinates
        //                             }
        //                         }
        //                     },
        //                     layout: {},
        //                     paint: {
        //                         'line-color': '#af2245',
        //                         'line-width': 2
        //                     }
        //                 });
        //             });
        //         })
        //         .catch(error => {
        //             console.error('Error fetching shapes:', error);
        //         });
        // }

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
                    if (error.status === 401) {
                        window.location.href = '{{ route("login") }}';
                    }
                }
            });
        });

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