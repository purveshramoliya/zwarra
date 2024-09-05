
    @include('healthcare.layouts.headermodule')

    <meta name="csrf-token" content="{{ csrf_token() }}">
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
        @include('healthcare.layouts.header')
        @include('healthcare.layouts.sidebar')
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-3">
                    <!-- Your existing HTML structure with country, city, and zone dropdowns -->
                    <select name="country_id" id="zone_country_id" class="custom-select poppins-regular zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none form-control">
                        <option value="">Select a country</option>
                        @foreach($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-lg-3">
                    <select name="city_id" id="zone_city_id" class="custom-select poppins-regular zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none form-control">
                        <option value="">Select a city</option>
                    </select>
                </div>
                <div class="col-lg-3">
                    <select name="zone_id" id="zone_id" class="custom-select poppins-regular zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none form-control">
                        <option value="">Select a zone</option>
                    </select>
                </div>
                <div class="col-lg-3">
            <a class="btn zw_add_btn poppins-medium zw_14 mt-1" href=""> <i class="fas fa-plus right mr-2"></i>Add zone</a>
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
                <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap zw_table">
                            <thead class="zw_bg_AF2245 zw_text_ffffff">
                                <tr>
                                    <th class="poppins-medium zw_18">Country</th>
                                    <th class="poppins-medium zw_18">City</th>
                                    <th class="poppins-medium zw_18">Zone</th>
                                    <th class="poppins-medium zw_18">Healthcare</th>
                                    <th class="poppins-medium zw_18" colspan="2"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($zones as $zone)
                                <tr>
                                    <td class="poppins-regular zw_14 zw_text_333333">{{ $zone->country->name }}</td>
                                    <td class="poppins-regular zw_14 zw_text_333333">{{ $zone->city->name }}</td>
                                    <td class="poppins-regular zw_14 zw_text_333333">{{ $zone->zones->name }}</td>
                                    <td class="poppins-regular zw_14 zw_text_333333">@if(!empty($zone->serviceprovider) && !empty($zone->serviceprovider->Enname))
                                        {{ $zone->serviceprovider->Enname }}
                                    @endif
                                    </td>
                                    <td class="poppins-regular zw_14 zw_text_333333">
                                   <form id="statusForm" class="statusForm">
                                    @csrf
                                    <input type="hidden" name="hzoneid" id="hzoneid" class="hzoneid" value="{{ $zone->id }}">
                                    <input type="checkbox" data-toggle="toggle" data-size="sm" id="StatusUpdate" class="StatusUpdate" data-on="Active" data-off="In Active"  {{ $zone->Status ? 'checked' : '' }}> 
                                  </form> 
                                </td>
                                    <td>
                                    <form action="{{ route('zones.destroy',$zone->id) }}" method="POST">
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
            </section>
        </div>
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

map.addControl(new mapboxgl.NavigationControl());

var geocoder = new MapboxGeocoder({
    accessToken: mapboxgl.accessToken,
    mapboxgl: mapboxgl,
    marker: true,
    placeholder: 'Search for a zone'
});
map.addControl(geocoder, 'top-left');

map.on('draw.create', function(event) {
    var coordinates = event.features[0].geometry.coordinates;
    var shapeType = event.features[0].geometry.type;

    var countryId = $('#zone_country_id').val();
    var cityId = $('#zone_city_id').val();
    var zoneId = $('#zone_id').val();
    var id = $('#id').val();

    var data = {
        country_id: countryId,
        city_id: cityId,
        zone_id: zoneId,
        shape_type: shapeType,
        coordinates: coordinates,
        Healthcareid: id
    };

    fetch('/hsave', {
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
            throw new Error('Network response was not ok');
        }
        return response.json();
    })
    .then(data => {
        console.log('Shape saved successfully:', data);
    })
    .catch(error => {
        console.error('Error saving shape:', error);
    });
});

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
          id:  hzoneid,
          status: status
        },
        success: function(response) {
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



