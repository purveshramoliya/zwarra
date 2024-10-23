@include('healthcare.layouts.headermodule')

<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="https://api.mapbox.com/mapbox-gl-js/v3.4.0/mapbox-gl.css" rel="stylesheet">
<script src="https://api.mapbox.com/mapbox-gl-js/v3.4.0/mapbox-gl.js"></script>
<link href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-draw/v1.4.3/mapbox-gl-draw.css" rel="stylesheet">
<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-draw/v1.4.3/mapbox-gl-draw.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
<style>
    body {
        margin: 0;
        padding: 0;
    }

    #map {
        height: 500px;
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

    .addzonbtn {
        background: #af2245 !important;
    }

    .error {
        color: red;
    }
</style>

<body class="hold-transition sidebar-mini zw_sidebar">
    <div class="wrapper">
        @include('healthcare.layouts.header')
        @include('healthcare.layouts.sidebar')
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6 zw_back">
                            <a href="#" class="poppins-medium zw_18 zw_text_333333 zw_a zw_back">
                                <i class="fas fa-arrow-left right mr-2"></i>Back
                            </a>

                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-12 col-md-12 col-lg-6">
                            <h1 class="poppins-semibold zw_46 zw_text_AF2245 mt-2">Zones</h1>
                        </div>
                        <div class="col-12 col-md-12 col-lg-6">
                            <!-- <a class="btn zw_add_btn float-right  poppins-medium zw_18" href="http://127.0.0.1:8000/admin/subservices/create"> <i class="fas fa-plus right mr-2"></i>Add New Lab Service</a> -->
                            <a href="" class="btn zw_add_btn float-right  poppins-medium zw_18  Non-registered-Patients" data-toggle="modal" data-target="#exampleModal">
                                </i>Add Zone</a>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <h3 class="poppins-semibold zw_34 zw_text_AF2245 mt-3 mb-3 text-center">Add Zone</h3>
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
                                                        <form id="zoneForm" method="POST">
                                                            @csrf
                                                            <div class="card-body">
                                                                <div class="form-row zw_form_row">
                                                                    <div class="form-group col-md-6">
                                                                        <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputEnname">EN Country Name</label>
                                                                        <select id="zone_country_id" name="country_id" class="form-control zw_18">
                                                                            <option value="">Select Country</option>
                                                                            @foreach($countries as $contry)
                                                                            <option value="{{$contry->id}}">{{$contry->Enname}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputArname">AR Country Name</label>
                                                                        <select id="ar_zone_country_id" name="Acountryname" class="form-control zw_18">
                                                                            <option value="">Select Country</option>
                                                                            @foreach($countries as $contry)
                                                                            <option value="{{$contry->id}}">{{$contry->Arname}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-row zw_form_row">
                                                                    <div class="form-group col-md-6">
                                                                        <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputEnname">EN City Name</label>
                                                                        <select id="zone_city_id" name="city_id" class="form-control zw_18">
                                                                            <option value="">Select City</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <input class="form-check-input" type="hidden" name="Arname" id="Arname" value="su1">
                                                                        <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputArname">AR City Name</label>
                                                                        <select id="ar_zone_city_id" name="Arcityname" class="form-control zw_18">
                                                                            <option value="">Select City</option>

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-row zw_form_row">
                                                                    <div class="form-group col-md-6">
                                                                        <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="zone_id">Select Zone</label>

                                                                    </div>

                                                                    <!-- <div class="form-group col-md-6">
                                                                        <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="flexRadioDefault1">Select Zone</label>
                                                                        @foreach($zoness as $zone)
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio" name="zone_id" id="zone_id" value="{{$zone->Enname}}" checked>
                                                                            <label class="form-check-label ml-3" for="flexRadioDefault1">
                                                                                {{$zone->Enname}}
                                                                            </label>
                                                                        </div>
                                                                        @endforeach
                                                                    </div> -->

                                                                </div>
                                                                <div class="col-12 col-md-12 col-lg-12">
                                                                    <div class="input-group input-group-sm">
                                                                        <input type="text" id="search-input" class="zw_search_input zw_16 poppins-regular" placeholder="Search City">
                                                                        <div class="input-group-append zw_input-group-append">
                                                                            <button id="search-button" type="button" class="btn zw_search_button zw_bg_ffffff">
                                                                                <i class="fas fa-search"></i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="container-fluid">
                                                                    <div id="modal-map" style="width:100%; height:400px;"></div>
                                                                    <div class="calculation-box">
                                                                        <p>Click the map to draw a polygon.</p>
                                                                        <div id="calculated-area"></div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <button type="submit" class="btn zw_submit zw_submit_wh Non-registered-Patients">Save</button>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </form>
                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>
                                                <!-- /.card -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <a class="btn zw_add_btn float-right  poppins-medium zw_18 packageservicebtn" href="http://127.0.0.1:8000/admin/subservice/createbody"> <i class="fas fa-plus right mr-2 mb-1"></i>Add a Sub-Service</a> -->
                            </div>
                        </div>

                    </div>
                </div><!-- /.container-fluid -->
            </section>


            <section class="content-header">
                <div class="card-body table-responsive p-0">
                    @if(session('success'))
                    <div id="successAlert" class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif

                    @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                    @endif

                    <table class="table table-hover text-nowrap zw_table">
                        <thead class="zw_bg_AF2245 zw_text_ffffff">
                            <tr>
                                <th class="poppins-medium zw_18">En Name</th>
                                <th class="poppins-medium zw_18">Ar Name</th>
                                <th class="poppins-medium zw_18">Status</th>
                                <th class="poppins-medium zw_18">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($zones as $zone)
                            <tr>
                                <td class="poppins-regular zw_14 zw_text_333333">{{ $zone->Enname }}</td>
                                <td class="poppins-regular zw_14 zw_text_333333">{{ $zone->Arname }}</td>
                                <td class="poppins-regular zw_14 zw_text_333333">
                                    <form id="statusForm" class="statusForm">
                                        @csrf
                                        <input type="hidden" name="hzoneid" id="hzoneid" class="hzoneid" value="{{ $zone->id }}">
                                        <input type="checkbox" data-toggle="toggle" data-size="sm" id="StatusUpdate" class="StatusUpdate" data-on="Active" data-off="In Active" {{ $zone->Status ? 'checked' : '' }}>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{ route('healthcare.zones.delete',$zone->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn zw_text_AF2245 zw_a zw_24"><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="container-fluid">
                    <div id="map" style="width:100% !important"></div>
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
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
    <script src="https://unpkg.com/@turf/turf@6/turf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <script>
        $(document).ready(function() {
            // Initialize validation
            $('#zoneForm').validate({
                rules: {
                    country_id: {
                        required: true
                    },
                    city_id: {
                        required: true
                    },
                    zone_id: {
                        required: true
                    }
                },
                messages: {
                    country_id: {
                        required: "Please select a country."
                    },
                    city_id: {
                        required: "Please select a city."
                    },
                    zone_id: {
                        required: "Please select a zone."
                    }
                },
                submitHandler: function(form) {
                    var formData = new FormData(form); // Create FormData object

                    $.ajax({
                        url: '/hsave', // Get action URL from form
                        type: 'POST',
                        data: formData,
                        contentType: false, // Let jQuery set the content type
                        processData: false, // Prevent jQuery from converting the data
                        success: function(response) {
                            if (response.success) {
                                Swal.fire({
                                    title: 'Success!',
                                    text: response.success,
                                    icon: 'success',
                                    confirmButtonText: 'OK'
                                }).then(() => {
                                    // Hide the modal
                                    $('#exampleModal').modal('hide');
                                    location.reload();
                                    fetchAndDisplayShapes(); // Call your function to fetch and display shapes
                                });
                            }
                        },
                        error: function(xhr) {
                            var errorMessage = xhr.responseJSON && xhr.responseJSON.error ? xhr.responseJSON.error : 'An error occurred.';
                            Swal.fire({
                                title: 'Error!',
                                text: errorMessage,
                                icon: 'error',
                                confirmButtonText: 'OK'
                            });
                        }
                    });
                }
            });
        });
        // Function to show the alert
        function showSuccessAlert() {
            const alert = document.getElementById('successAlert');
            alert.style.display = 'block'; // Show the alert
            setTimeout(() => {
                alert.style.display = 'none'; // Hide the alert after 5 seconds
            }, 3000);
        }

        // Call the function when needed
        showSuccessAlert(); // You can call this after a successful operation
    </script>
    <script>
        $(document).ready(function() {
            $('#zone_city_id').change(function() {
                var cityId = $(this).val();

                // Clear existing zones
                $('.form-check').remove(); // Remove existing zone checkboxes

                if (cityId) {
                    // Fetch zones based on the selected city ID
                    $.ajax({
                        url: '/get-zones', // Replace with your endpoint
                        type: 'GET',
                        data: {
                            city_id: cityId
                        },
                        success: function(data) {
                            // Assuming `data` is an array of zone objects
                            $.each(data, function(index, zone) {
                                var checkbox = '<div class="form-check">' +
                                    '<input class="form-check-input" type="checkbox" name="zone_id[]" id="zone_' + zone.Enname + '" value="' + zone.Enname + '">' +
                                    '<label class="form-check-label ml-3" for="zone_' + zone.Enname + '">' + zone.Enname + '</label>' +
                                    '</div>';
                                $('.form-group.col-md-6:last').append(checkbox); // Append to the zone section
                            });

                            // Check the first checkbox by default
                            if (data.length > 0) {
                                $('input[name="zone_id[]"]').first().prop('checked', true);
                            }

                            // Ensure the first checkbox is checked by default and allow multiple checks afterward
                            $('input[name="zone_id[]"]').change(function() {
                                if ($(this).is(':checked')) {
                                    // Optionally, you can implement any custom logic here
                                }
                            });
                        },
                        error: function(xhr) {
                            console.error('Error fetching zones:', xhr);
                        }
                    });
                }
            });
        });
    </script>
    <script>
        let map; // Main map
        let modalMap; // Modal map
        let modalGeocoder; // Geocoder for modal map

        $(document).ready(function() {
            // Set up CSRF token for all AJAX requests
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // Initialize both maps
            initializeMaps();
        });

        // Function to initialize both maps
        function initializeMaps() {
            mapboxgl.accessToken = 'pk.eyJ1IjoiYWJkdWxyYTdtYW4iLCJhIjoiY2x0bzlvNTEwMDVoZTJrbWg4bHRxeXRwciJ9._WDrK6r6rayfB4WnardOwA'; // Replace with your access token

            // Main map
            map = new mapboxgl.Map({
                container: 'map',
                style: 'mapbox://styles/mapbox/streets-v11',
                center: [0, 0],
                zoom: 2
            });
            map.addControl(new mapboxgl.NavigationControl());

            // Modal map
            modalMap = new mapboxgl.Map({
                container: 'modal-map',
                style: 'mapbox://styles/mapbox/streets-v11',
                center: [0, 0],
                zoom: 2
            });
            modalMap.addControl(new mapboxgl.NavigationControl());

            // Initialize the geocoder for the modal map
            modalGeocoder = new MapboxGeocoder({
                accessToken: mapboxgl.accessToken,
                mapboxgl: mapboxgl,
                marker: true,
                placeholder: 'Search for a City'
            });

            // Add the geocoder control to the modal map
            modalMap.addControl(modalGeocoder, 'top-left');

            // Listen for geocoder results
            modalGeocoder.on('result', (event) => {
                const [lng, lat] = event.result.geometry.coordinates;

                // Center the modal map on the selected result
                modalMap.flyTo({
                    center: [lng, lat],
                    zoom: 12, // Adjust zoom level as needed
                    essential: true // Essential for animation
                });

                // Add a marker for the selected location
                new mapboxgl.Marker()
                    .setLngLat([lng, lat])
                    .addTo(modalMap);
            });

            // Fetch and display shapes after maps are initialized
            fetchAndDisplayShapes();
        }
        // Event listener for search button
        document.getElementById('search-button').addEventListener('click', function() {
            const query = document.getElementById('search-input').value;
            if (query) {
                // Make a request to the Mapbox Geocoding API
                fetch(`https://api.mapbox.com/geocoding/v5/mapbox.places/${encodeURIComponent(query)}.json?access_token=${mapboxgl.accessToken}`)
                    .then(response => response.json())
                    .then(data => {
                        if (data.features.length > 0) {
                            const result = data.features[0];
                            const [lng, lat] = result.center;

                            // Center the modal map on the search result
                            modalMap.flyTo({
                                center: [lng, lat],
                                zoom: 12, // Adjust zoom level for the result
                                essential: true // Essential for animation
                            });

                            // Add a marker for the search result
                            new mapboxgl.Marker().setLngLat([lng, lat]).addTo(modalMap);
                        } else {
                            alert('No results found.');
                        }
                    })
                    .catch(error => {
                        console.error('Error fetching geocoding data:', error);
                        alert('Error fetching location. Please try again.');
                    });
            } else {
                alert('Please enter a City to search.');
            }
        });
        // Fetch shapes and display on both maps
        function fetchAndDisplayShapes() {
            fetch(`/hgetrectangles`, {
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
                        const coordinates = JSON.parse(shape.coordinates);
                        addShapeToMap(shape, coordinates);
                    });
                })
                .catch(error => {
                    console.error('Error fetching shapes:', error);
                });
        }

        // Function to add shape to both maps
        function addShapeToMap(shape, coordinates) {
            const geojson = {
                type: 'Feature',
                geometry: {
                    type: shape.shape_type,
                    coordinates: coordinates
                }
            };

            // Add shape to main map
            map.addLayer({
                id: `shape-${shape.id}`,
                type: 'fill',
                source: {
                    type: 'geojson',
                    data: geojson
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
                    data: geojson
                },
                layout: {},
                paint: {
                    'line-color': '#af2245',
                    'line-width': 2
                }
            });

            // Add shape to modal map
            modalMap.addLayer({
                id: `modal-shape-${shape.id}`,
                type: 'fill',
                source: {
                    type: 'geojson',
                    data: geojson
                },
                layout: {},
                paint: {
                    'fill-color': '#888888',
                    'fill-opacity': 0.4
                }
            });

            modalMap.addLayer({
                id: `modal-shape-outline-${shape.id}`,
                type: 'line',
                source: {
                    type: 'geojson',
                    data: geojson
                },
                layout: {},
                paint: {
                    'line-color': '#af2245',
                    'line-width': 2
                }
            });
        }
        $('#zone_country_id').change(function() {
            var countryId = $(this).val();
            $.ajax({
                url: '{{ route("getCitiesByCountry", ":country_id") }}'.replace(':country_id', countryId),
                type: 'GET',
                success: function(data) {
                    var citiesDropdown = $('#zone_city_id');
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
        $('#ar_zone_country_id').change(function() {
            var countryId = $(this).val();
            $.ajax({
                url: '{{ route("getCitiesByCountry", ":country_id") }}'.replace(':country_id', countryId),
                type: 'GET',
                success: function(data) {
                    var citiesDropdown = $('#ar_zone_city_id');
                    citiesDropdown.empty();
                    citiesDropdown.append('<option value="">Select city</option>');
                    $.each(data, function(index, city) {
                        citiesDropdown.append('<option value="' + city.id + '">' + city.Arcityname + '</option>');
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
    <script>
        // Function to hide messages after 3 seconds
        function hideMessages() {
            const successMessage = document.getElementById('success-message');
            const errorMessage = document.getElementById('error-message');

            if (successMessage) {
                setTimeout(() => {
                    successMessage.style.display = 'none';
                }, 3000); // Hide after 3 seconds
            }

            if (errorMessage) {
                setTimeout(() => {
                    errorMessage.style.display = 'none';
                }, 3000); // Hide after 3 seconds
            }
        }

        // Call the function when the document is ready
        document.addEventListener('DOMContentLoaded', hideMessages);
    </script>
    <script>
        $(document).ready(function() {
            $('.StatusUpdate').change(function() {
                var status = $(this).prop('checked');
                var hzoneid = $(this).closest('.statusForm').find('.hzoneid').val();
                console.log(hzoneid);

                $.ajax({
                    url: "{{ route('hzoneupdate.status') }}",
                    method: 'POST',
                    data: {
                        _token: "{{ csrf_token() }}",
                        id: hzoneid,
                        status: status
                    },
                    success: function(response) {
                        location.reload();
                        console.log('Status updated successfully');
                        // You can add any additional logic here if needed
                    },
                    error: function(xhr, status, error) {
                        console.error('Error updating status:', error);
                    }
                });
            });
        });
    </script>