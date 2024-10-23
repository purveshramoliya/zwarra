@include('admin.layouts.headermodule')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href='https://api.mapbox.com/mapbox-gl-js/v2.7.0/mapbox-gl.css' rel='stylesheet' />
<script src='https://api.mapbox.com/mapbox-gl-js/v2.7.0/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.css' rel='stylesheet' />
<script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.min.js'></script>
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
                    <div id="error-message"></div>
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
                            <form action="{{ route('saveCitymap') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-row zw_form_row">
                                        <div class="form-group col-md-6">
                                            <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputEnname">EN Country Name</label>
                                            <select id="Enname" name="Enname" class="form-control zw_18">
                                                <option value="">EN Name</option>
                                                @foreach($countries as $contry)
                                                <option value="{{$contry->id}}">{{$contry->Enname}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputArname">AR Country Name</label>
                                            <select name="Arname" class="form-control zw_18">
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
                                            <input type="text" id="Encityname" name="Encityname" class="form-control poppins-regular zw_18 zw_text_898B9F" id="exampleInputEnname" placeholder="EN Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputArname">AR City Name</label>
                                            <input type="text" id="Arcityname" name="Arcityname" class="form-control poppins-regular zw_18 zw_text_898B9F" id="exampleInputArname" placeholder="Ar Name">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-12">
                                        <div class="input-group input-group-sm">
                                            <input type="text" id="search-input" class="zw_search_input zw_16 poppins-regular" placeholder="Search nearest location">
                                            <div class="input-group-append zw_input-group-append">
                                                <button id="search-button" type="button" class="btn zw_search_button zw_bg_ffffff">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="col-12 col-md-12 col-lg-12">
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
                                    </div> -->
                                    <div class="container-fluid mt-4 mb-4">
                                        <input type="hidden" id="coordinates" name="coordinates">
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
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.js'></script>
    </div>
    <script>
        // Set your Mapbox access token
        mapboxgl.accessToken = 'pk.eyJ1IjoiYWJkdWxyYTdtYW4iLCJhIjoiY2x0bzlvNTEwMDVoZTJrbWg4bHRxeXRwciJ9._WDrK6r6rayfB4WnardOwA';

        // Initialize the Mapbox map
        const map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11',
            center: [0, 0], // Initial center coordinates
            zoom: 2
        });

        const coordinates = []; // Array to store marker coordinates

        // Click event to add markers
        map.on('click', (e) => {
            const lng = e.lngLat.lng;
            const lat = e.lngLat.lat;
            coordinates.push([lng, lat]);

            new mapboxgl.Marker().setLngLat([lng, lat]).addTo(map);
            document.getElementById('coordinates').value = JSON.stringify(coordinates); // Save coordinates in a hidden input (if needed)
        });

        // Function to set the map center
        function setMapCenter(lng, lat, zoomLevel) {
            map.flyTo({
                center: [lng, lat],
                zoom: zoomLevel,
                essential: true // Animation is considered essential
            });
        }

        // Event listener for country selection
        document.getElementById('Enname').addEventListener('change', function() {
            const selectedCountry = this.value;
            fetch(`/getRectanglesCity/${selectedCountry}`)
                .then(response => response.json())
                .then(data => {
                    if (data.coordinates) {
                        const [lng, lat] = data.coordinates;
                        const zoomLevel = 5; // Desired zoom level
                        setMapCenter(lng, lat, zoomLevel);
                    }
                });
        });

        // Initialize the geocoder
        // const geocoder = new MapboxGeocoder({
        //     accessToken: mapboxgl.accessToken,
        //     mapboxgl: mapboxgl,
        //     marker: true,
        //     placeholder: 'Search for a zone'
        // });
        // map.addControl(geocoder, 'top-left');

        // Event listener for search button
        document.getElementById('search-input').addEventListener('input', function() {
            const query = this.value; // Get the current value of the input
            if (query) {
                // Make a request to the Mapbox Geocoding API
                fetch(`https://api.mapbox.com/geocoding/v5/mapbox.places/${encodeURIComponent(query)}.json?access_token=${mapboxgl.accessToken}`)
                    .then(response => response.json())
                    .then(data => {
                        if (data.features.length > 0) {
                            const result = data.features[0];
                            const [lng, lat] = result.center;

                            // Center the map on the search result
                            map.flyTo({
                                center: [lng, lat],
                                zoom: 8, // Zoom level for the result
                                essential: true // Animation is considered essential
                            });

                            // Clear existing markers
                            clearMarkers();

                            // Add a marker for the search result
                            new mapboxgl.Marker().setLngLat([lng, lat]).addTo(map);
                        } else {
                            // alert('No results found.');
                        }
                    })
                    .catch(error => {
                        console.error('Error fetching geocoding data:', error);
                        // alert('Error fetching location. Please try again.');
                    });
            }
        });

        // Fetch countries and display markers on the map
        async function fetchCountries() {
            try {
                const response = await fetch('/getRectanglesCity');
                const countries = await response.json();

                countries.forEach(country => {
                    const coords = JSON.parse(country.coordinates);
                    coords.forEach(coord => {
                        new mapboxgl.Marker().setLngLat(coord).addTo(map);
                    });
                });
            } catch (error) {
                console.error('Error fetching countries:', error);
                // alert('There was an error fetching the country data. Please try again later.');
            }
        }

        // Call fetchCountries when the page loads
        window.onload = fetchCountries;
        </script>
</body>

</html>