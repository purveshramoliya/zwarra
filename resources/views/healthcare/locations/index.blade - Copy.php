@include('admin.layouts.headermodule')

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
                    <input type="text" name="country_name" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputEnname" placeholder="Enter Country">
                    <button type="submit" class="btn zw_add_btn float-right poppins-medium zw_18">Add Country</button>
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
                      @foreach($cities as $city)
                        <option value="{{ $city->id }}:{{ $city->name }}">{{ $city->name }}</option>
                      @endforeach
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

            </div>
          </div>
        </div>
        <!-- /.row -->
      </section>
    </div>
    @include('admin.layouts.footer')
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
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


    //get cities list based on country selection

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
