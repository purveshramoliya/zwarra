@include('admin.layouts.headermodule')
<style>
  #map {
    height: 500px;
  }

  .search-box-container {
    position: absolute;
    top: 10px;
    left: 50%;
    transform: translateX(-50%);
    z-index: 5;
    display: flex;
    justify-content: center;
    margin-bottom: 20px;
  }


  #pac-input {
    width: 22%;
    padding: 10px;
    font-size: 18px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.3);
    border: 1px solid #dcdcdc;
    border-radius: 4px;
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
        <div class="container-fluid">
          <div class="row">
            <div class="col-12 col-md-12 col-lg-6">
              <h1 class="poppins-semibold zw_46 zw_text_AF2245 mt-2">
                <span class="mr-3"><img src="{{ url('dist/img/zwaara_user.png') }}" alt="Zwaara User"></span>Add Countries, Cities & Zones
              </h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="row">
          <div class="container">
            <div id="message"></div>
            <div class="card-body">
              <div class="form-row zw_form_row">
                <!-- Add Country Form -->
                <div class="form-group col-md-6">
                  <form id="country-form" method="POST" action="{{ route('locations.storeCountry') }}">
                    @csrf
                    <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputEnname">Add Country</label>
                    <div class="input-group">
                      <input type="text" name="country_name" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputEnname" placeholder="Enter Country">
                      <div class="input-group-append">
                        <button type="submit" class="btn zw_add_btn poppins-medium zw_18">Add</button>
                      </div>
                    </div>
                  </form>
                </div>

                <!-- Add City Form -->
                <div class="form-group col-md-6">
                  <form id="city-form" method="POST" action="{{ route('locations.storeCity') }}">
                    @csrf
                    <div class="row">
                      <div class="col-md-6">
                        <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputService">Select Country <span style="color: red;">*</span></label>
                        <select name="country_id" id="country_id" class="custom-select poppins-regular zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none">
                          <option value="">Select a country</option>
                          @foreach($countries as $country)
                            <option value="{{ $country->id }}:{{ $country->name }}">{{ $country->name }}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="col-md-6">
                        <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputPackagename">Add City</label>
                        <input type="text" name="city_name" id="city_name" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" placeholder="Enter City name">
                        <button type="submit" class="btn zw_add_btn float-right poppins-medium zw_18">Add City</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>

              <div class="form-row zw_form_row">
                <!-- Add Zone Form -->
                <div class="form-group col-md-12">
                  <form id="zone-form" method="POST" action="{{ route('locations.storeZone') }}">
                    @csrf
                    <div class="row">
                      <div class="form-group col-md-4">
                        <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputService">Select Country <span style="color: red;">*</span></label>
                        <select name="country_id" id="zone_country_id" class="custom-select poppins-regular zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none">
                          <option value="">Select a country</option>
                          @foreach($countries as $country)
                            <option value="{{ $country->id }}:{{ $country->name }}">{{ $country->name }}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="form-group col-md-4">
                        <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputService">Select City <span style="color: red;">*</span></label>
                        <select name="city_id" id="zone_city_id" class="custom-select poppins-regular zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none">
                          <option value="">Select a city</option>
                        </select>
                      </div>
                      <div class="form-group col-md-4">
                        <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputPackagename">Add Zone</label>
                        <input type="text" name="zone_name" id="zone_name" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" placeholder="Enter Zone name">
                        <button type="submit" class="btn zw_add_btn float-right poppins-medium zw_18">Add Zone</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="search-box-container">
              <input id="pac-input" class="controls" type="text" placeholder="Search Box" />
            </div>
            </div>
            <div id="map" style="margin-top:50px;"></div>
          </div>

        </div>
        <!-- /.row -->
      </section>
    </div>
    @include('admin.layouts.footer')
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyALumg-jMw4SvbfGXeT95mrl77hXu2zMc4&libraries=places,drawing&callback=initMap" async defer></script>
  <script>
    
  var map;
  var drawingManager;
  var overlays = [];

  function initMap() {
    // Initialize the map
    map = new google.maps.Map(document.getElementById('map'), {
      center: { lat: 23.8859, lng: 45.0792 },  // Coordinates for Saudi Arabia
      zoom: 6  // Adjust zoom level as needed
    });

    // Initialize the drawing manager with all drawing modes
    drawingManager = new google.maps.drawing.DrawingManager({
      drawingMode: google.maps.drawing.OverlayType.HAND,
      drawingControl: true,
      drawingControlOptions: {
        position: google.maps.ControlPosition.TOP_CENTER,
        drawingModes: [
          google.maps.drawing.OverlayType.MARKER,
          google.maps.drawing.OverlayType.CIRCLE,
          google.maps.drawing.OverlayType.POLYGON,
          google.maps.drawing.OverlayType.POLYLINE,
          google.maps.drawing.OverlayType.RECTANGLE
        ]
      },
      markerOptions: {
        draggable: true
      },
      circleOptions: {
        fillColor: '#ffff00',
        fillOpacity: 0.5,
        strokeWeight: 1,
        clickable: true,
        editable: true,
        zIndex: 1
      },
      polygonOptions: {
        fillColor: '#ADFF2F',
        fillOpacity: 0.5,
        strokeWeight: 1,
        clickable: true,
        editable: true,
        zIndex: 1
      },
      polylineOptions: {
        strokeColor: '#FF6347',
        strokeWeight: 2,
        clickable: true,
        editable: true,
        zIndex: 1
      },
      rectangleOptions: {
        fillColor: '#ADD8E6',
        fillOpacity: 0.5,
        strokeWeight: 1,
        clickable: true,
        editable: true,
        zIndex: 1
      }
    });
    drawingManager.setMap(map);

    google.maps.event.addListener(drawingManager, 'overlaycomplete', function(event) {
      var newOverlay = event.overlay;
      newOverlay.type = event.type;
      overlays.push(newOverlay);

      google.maps.event.addListener(newOverlay, 'click', function() {
        if (confirm('Do you want to delete this shape?')) {
          newOverlay.setMap(null);
          var index = overlays.indexOf(newOverlay);
          if (index !== -1) overlays.splice(index, 1);
        }
      });
    });

    // Initialize the search box
    var input = document.getElementById('pac-input');
    var searchBox = new google.maps.places.SearchBox(input);
    map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

    // Bias the SearchBox results towards current map's viewport.
    map.addListener('bounds_changed', function() {
      searchBox.setBounds(map.getBounds());
    });

    var markers = [];
    // Listen for the event fired when the user selects a prediction and retrieve
    // more details for that place.
    searchBox.addListener('places_changed', function() {
      var places = searchBox.getPlaces();

      if (places.length == 0) {
        return;
      }

      // Clear out the old markers.
      markers.forEach(function(marker) {
        marker.setMap(null);
      });
      markers = [];

      // For each place, get the icon, name and location.
      var bounds = new google.maps.LatLngBounds();
      places.forEach(function(place) {
        if (!place.geometry) {
          console.log("Returned place contains no geometry");
          return;
        }
        var icon = {
          url: place.icon,
          size: new google.maps.Size(71, 71),
          origin: new google.maps.Point(0, 0),
          anchor: new google.maps.Point(17, 34),
          scaledSize: new google.maps.Size(25, 25)
        };

        // Create a marker for each place.
        markers.push(new google.maps.Marker({
          map: map,
          icon: icon,
          title: place.name,
          position: place.geometry.location
        }));

        if (place.geometry.viewport) {
          // Only geocodes have viewport.
          bounds.union(place.geometry.viewport);
        } else {
          bounds.extend(place.geometry.location);
        }
      });
      map.fitBounds(bounds);
    });
  }


    $(document).ready(function() {
      // Add Country
      $('#country-form').on('submit', function(e) {
        e.preventDefault();

        $.ajax({
          url: '{{ route('locations.storeCountry') }}',
          type: 'POST',
          data: $(this).serialize(),
          success: function(response) {
            $('#country_id').append(`<option value="${response.id}:${response.name}">${response.name}</option>`);
            $('#zone_country_id').append(`<option value="${response.id}:${response.name}">${response.name}</option>`);
            $('#country_name').val('');
            $('#message').html('<div class="alert alert-success">Country added successfully</div>');
          },
          error: function(response) {
            $('#message').html('<div class="alert alert-danger">Error adding country</div>');
          }
        });
      });

      // Add City
      $('#city-form').on('submit', function(e) {
        e.preventDefault();

        $.ajax({
          url: '{{ route('locations.storeCity') }}',
          type: 'POST',
          data: $(this).serialize(),
          success: function(response) {
            $('#city_name').val('');
            $('#message').html('<div class="alert alert-success">City added successfully</div>');
          },
          error: function(response) {
            $('#message').html('<div class="alert alert-danger">Error adding city</div>');
          }
        });
      });

      // Add Zone
      $('#zone-form').on('submit', function(e) {
        e.preventDefault();

        $.ajax({
          url: '{{ route('locations.storeZone') }}',
          type: 'POST',
          data: $(this).serialize(),
          success: function(response) {
            $('#zone_name').val('');
            $('#message').html('<div class="alert alert-success">Zone added successfully</div>');
          },
          error: function(response) {
            $('#message').html('<div class="alert alert-danger">Error adding zone</div>');
          }
        });
      });
    });

    // Get cities list based on country selection
    $('#zone_country_id').on('change', function() {
      var countryId = $(this).val();
      if (countryId) {
        $.ajax({
          url: '{{ route('locations.getCities') }}',
          type: 'POST',
          data: {
            country_id: countryId,
            _token: '{{ csrf_token() }}'
          },
          success: function(response) {
            $('#zone_city_id').empty();
            $('#zone_city_id').append('<option value="">Select a city</option>');
            $.each(response.cities, function(key, city) {
              $('#zone_city_id').append('<option value="' + city.id + ':' + city.name + '">' + city.name + '</option>');
            });
          },
          error: function(xhr) {
            console.log(xhr.responseText);
          }
        });
      } else {
        $('#zone_city_id').empty();
        $('#zone_city_id').append('<option value="">Select a city</option>');
      }
    });
  </script>
</body>
</html>
