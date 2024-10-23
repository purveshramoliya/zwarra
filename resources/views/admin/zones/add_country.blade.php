@include('admin.layouts.headermodule')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.css' rel='stylesheet' />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
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

        <div class="content-wrapper">
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
                        <h3 class="poppins-semibold zw_34 zw_text_AF2245 mt-3">Add Country</h3>
                    </div>
                    <div class="col-md-12">
                        <div class="">
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
                            <form action="{{ route('countries.store') }}" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="form-row zw_form_row">
                                        <div class="form-group col-md-6">
                                            <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="Enname">EN Country Name</label>
                                            <input type="text" name="Enname" class="form-control poppins-regular zw_18 zw_text_898B9F" id="Enname" placeholder="EN Name" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="Arname">AR Country Name</label>
                                            <input type="text" name="Arname" class="form-control poppins-regular zw_18 zw_text_898B9F" id="Arname" placeholder="AR Name" required>
                                        </div>
                                    </div>
                                    <input type="hidden" name="coordinates" id="coordinates" required>
                                    <div class="col-12 col-md-12 col-lg-12 mt-4 mb-4">
                                        <div id="map" class="col-md-12"></div>
                                        <div class="calculation-box">
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
                    </div>
                </div>
            </section>
        </div>
        @include('admin.layouts.footer')
    </div>
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.js'></script>
    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoiYWJkdWxyYTdtYW4iLCJhIjoiY2x0bzlvNTEwMDVoZTJrbWg4bHRxeXRwciJ9._WDrK6r6rayfB4WnardOwA'; // Replace with your actual token
        const map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11',
            center: [0, 0], // Initial center
            zoom: 2
        });

        const coordinates = [];

        map.on('click', (e) => {
            const lng = e.lngLat.lng;
            const lat = e.lngLat.lat;
            coordinates.push([lng, lat]); // Store as an array

            new mapboxgl.Marker().setLngLat([lng, lat]).addTo(map);
            document.getElementById('coordinates').value = JSON.stringify(coordinates);
        });
        const geocoder = new MapboxGeocoder({
            accessToken: mapboxgl.accessToken,
            mapboxgl: mapboxgl,
            marker: true,
            placeholder: 'Search for a Country'
        });
        map.addControl(geocoder, 'top-left');
        // document.getElementById('countryForm').addEventListener('submit', async (e) => {
        //     e.preventDefault();
        //     const formData = new FormData(e.target);
        //     const data = Object.fromEntries(formData);

        //     const response = await fetch('/countries', {
        //         method: 'POST',
        //         headers: {
        //             'X-CSRF-TOKEN': '{{ csrf_token() }}', // Include CSRF token
        //             'Content-Type': 'application/json'
        //         },
        //         body: JSON.stringify(data)
        //     });

        //     if (response.ok) {
        //         alert('Country saved successfully!');
        //         fetchCountries(); // Fetch and display updated data
        //     } else {
        //         alert('Error saving country');
        //     }
        // });

        async function fetchCountries() {
            const response = await fetch('/countries');
            const countries = await response.json();

            countries.forEach(country => {
                const coords = JSON.parse(country.coordinates);
                coords.forEach(coord => {
                    new mapboxgl.Marker().setLngLat(coord).addTo(map);
                });
            });
        }

        // Call fetchCountries when the page loads
        window.onload = fetchCountries;
    </script>
</body>

</html>