@include('healthcare.layouts.headermodule')
<style>
  .error {
    color: red;
  }
</style>

<body class="hold-transition sidebar-mini zw_sidebar">
  <div class="wrapper">
    @include('healthcare.layouts.header')
    @include('healthcare.layouts.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row row mt-4 mb-4">
            <div class="col-12 col-md-12 col-lg-6">
              <h1 class="poppins-semibold zw_46 zw_text_AF2245 mt-2">
                <span class="mr-3"></span> our services
              </h1>
              <!-- <p class="poppins-regular zw_16 zw_text_111535 mt-2 mb-1">You have 14 List of Sub-services</p> -->
            </div>
            <div class="col-12 col-md-12 col-lg-6">
              <!-- Button trigger modal -->
              <button type="button" class="btn zw_btn float-right  poppins-medium zw_18"
                data-toggle="modal" data-target="#exampleModal">
                Add Service Packages
              </button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="">
                      <h3 class="poppins-semibold zw_34 zw_text_AF2245 mt-3 text-center mt-4">Add
                        Services</h3>
                      <button type="button" class="close btn-close" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="row">

                        <!-- left column -->
                        <div class="col-md-12">
                          <!-- general form elements -->
                          <div class="">

                            <!-- form start -->
                            <form id="form" method="POST">
                              @csrf
                              <div class="card-body">
                                <div class="form-row zw_form_row">
                                  <div class="form-group col-md-6">
                                    <label
                                      class="zw_label_height zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535"
                                      for="exampleInputService">Service name <span
                                        style="color: red;">*</span></label>
                                    <select name="Service"
                                      class="form-control zw_form_control mb-4 zw_17">
                                      <option value="">Select Option
                                      </option>
                                      @foreach ($sdropdownOptions as $option)
                                      <option
                                        value="{{ $option->id . ':' . $option->Enname }}">
                                        {{ $option->Enname }}
                                      </option>
                                      @endforeach
                                    </select>
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label
                                      class="zw_label_height zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535"
                                      for="exampleInputServicetype">Sub Service
                                      name <span
                                        style="color: red;">*</span></label>
                                    <select name="Servicetype"
                                      class="form-control zw_form_control mb-4 zw_17">
                                      <option value="">Select</option>
                                      <option value="Single">Single</option>
                                      <option value="Package">Package</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="form-row zw_form_row hide"
                                  id="Ennameinputhidenshow">
                                  <div class="form-group col-md-6">
                                    <label
                                      class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535"
                                      for="exampleInputEnname">En name</label>
                                    <input type="text" name="Enname"
                                      class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control"
                                      id="exampleInputEnname"
                                      placeholder="Enter Enname">
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label
                                      class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535"
                                      for="exampleInputArname">Ar name <span
                                        style="color: red;">*</span></label>
                                    <input type="text" name="Arname"
                                      class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control"
                                      id="exampleInputArname"
                                      placeholder="Enter Arname">
                                  </div>
                                </div>
                                <div class="form-row zw_form_row hide"
                                  id="packageinputhidenshow">
                                  <div class="form-group col-md-6">
                                    <label
                                      class="zw_label_height zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535"
                                      for="exampleInputPackagename">Package
                                      name</label>
                                    <input type="text" name="Packagename"
                                      class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control"
                                      id="exampleInputPackagename"
                                      placeholder="Enter Package name">
                                  </div>
                                  <div class="form-group col-md-6 hide"
                                    id="Serviceinputhidenshow">
                                    <label
                                      class="zw_label_height zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535"
                                      for="exampleInputService">Service Package
                                      <span style="color: red;">*</span></label>
                                    <div id="selectedValuesContainer"></div>
                                    <input type="hidden" name="selectedValues"
                                      id="selectedValuesInput">
                                    <input type="text" name="Packageservices"
                                      id="textInput"
                                      class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control"
                                      id="exampleInputPrice"
                                      placeholder="Enter Package Service">
                                    <!-- purvesh css-->
                                    <button class="btn zw_btn packageservicebtn"
                                      type="button" id="addInputValue">Add
                                      Package Service</button>
                                  </div>
                                </div>
                                <div class="form-row zw_form_row">
                                  <div class="form-group col-md-6">
                                    <label
                                      class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535"
                                      for="exampleInputEndescription">Estimated
                                      time for a service<span
                                        style="color: red;">*</span></label>
                                    <select name="Estimatetime"
                                      class="form-control zw_form_control mb-4 zw_17">
                                      <option value="">Select Time</option>
                                      <option value="00:30">00:30</option>
                                      <option value="00:45">00:45</option>
                                    </select>
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label
                                      class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535"
                                      for="exampleInputPrice">Price <span
                                        style="color: red;">*</span></label>
                                    <input name="Price"
                                      class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control"
                                      id="exampleInputPrice"
                                      placeholder="Enter Price">
                                  </div>
                                </div>
                                <div class="form-row zw_form_row">
                                  <div class="form-group col-md-6">
                                    <label
                                      class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535"
                                      for="exampleInputEninstrucation">Change
                                      service price <span
                                        style="color: red;">*</span></label>
                                    <input type="text"
                                      name="Changeserviceprice"
                                      class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control"
                                      id="exampleInputEninstrucation"
                                      rows="2" placeholder="100">
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label
                                      class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535"
                                      for="exampleInputArinstrucation">Gender
                                      <span style="color: red;">*</span></label>
                                    <select name="Gender"
                                      class="form-control zw_form_control mb-4 zw_17">
                                      <option value="">Select Gender
                                      </option>
                                      <option value="Male">Male</option>
                                      <option value="Female">Female</option>
                                      <option value="Other">Other</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="row mt-4">
                                  <div class="offset-md-4 col-md-4">
                                    <button type="submit"
                                      class="btn healthcare-services-btn zw_submit_wh">Send</button>
                                  </div>
                                </div>
                            </form>
                          </div>
                          <!-- /.card -->
                        </div>
                        <!-- /.card-body -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="row mb-4">
          <div class="col-12 col-md-12 col-lg-6">
            <form class="zw_search_form" method="GET" action="{{ route('healthcare.services.index') }}">
            <div class="input-group input-group-sm">
                <input type="text" name="search" class="zw_search_input zw_16 poppins-regular" placeholder="Search">
                <div class="input-group-append zw_input-group-append">
                  <button type="submit" class="btn zw_search_button zw_bg_ffffff">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
            </form>

          </div>
        </div>
        <div class="row">
          <!-- <div class="col-12">
            <a class="btn btn-success float-right m-2" href="{{ route('subservices.create') }}">Add new sub service</a>
          </div> -->
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card zw_card">
              @if ($message = Session::get('success'))
              <div class="alert zw_alert_success">
                <p>{{ $message }}</p>
              </div>
              @endif
              <div id="alertContainer"></div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <div class="pre_next">
                  {{ $subservicessingle->links() }}
                </div>
                <p class="d-flex">
                  <a class="btn services-package-tab col-md-6 me-2" data-toggle="collapse"
                    href="#multiCollapseExample1" role="button" aria-expanded="true"
                    aria-controls="multiCollapseExample1" data-parent="#accordion">Services
                    package</a>
                  <button class="btn services-single-tab col-md-6" type="button"
                    data-toggle="collapse" data-target="#multiCollapseExample2"
                    aria-expanded="false" aria-controls="multiCollapseExample2"
                    data-parent="#accordion">Services single</button>
                </p>

                <div id="accordion">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="collapse multi-collapse show" id="multiCollapseExample1"
                        data-parent="#accordion">
                        <div class="card card-body">
                          <table class="table table-hover text-nowrap zw_table">
                            <thead class="zw_bg_AF2245 zw_text_ffffff">
                              <tr>
                                <th class="poppins-medium zw_18">Image</th>
                                <th class="poppins-medium zw_18">Arabic Name</th>
                                <th class="poppins-medium zw_18">English Name</th>
                                <th class="poppins-medium zw_18">Price</th>
                                <th class="poppins-medium zw_18">Gender</th>
                                <th class="poppins-medium zw_18" colspan="2"></th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($subservicespackage as $subservice)
                              <tr>
                                <td class="poppins-regular zw_14 zw_text_333333">
                                  <img class="center-block" width="50px"
                                    src="/images/healthcareservicesimage.png" />
                                </td>
                                <td class="poppins-regular zw_14 zw_text_333333">
                                  {{ $subservice->Arname }}
                                </td>
                                <td class="poppins-regular zw_14 zw_text_333333">
                                  {{ $subservice->Enname }}
                                </td>
                                <td class="poppins-regular zw_14 zw_text_333333">
                                  {{ $subservice->Price }}
                                </td>
                                <td class="poppins-regular zw_14 zw_text_333333">
                                  {{ $subservice->Gender }}
                                </td>
                                <td class="poppins-regular zw_14 zw_text_333333">
                                  <a class="btn zw_text_AF2245 zw_a zw_24"
                                    href="{{ route('healthcare.services.show', ['id' => $subservice->id]) }}"><i
                                      class="fa fa-edit"
                                      aria-hidden="true"></i></a>
                                </td>
                                <td class="poppins-regular zw_14 zw_text_333333">
                                  <form
                                    action="{{ route('healthcare.services.destroy', ['id' => $subservice->id]) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                      class="btn zw_text_AF2245 zw_a zw_24"><i
                                        class="fas fa-trash"></i></button>
                                  </form>
                                </td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="collapse multi-collapse" id="multiCollapseExample2"
                        data-parent="#accordion">
                        <div class="card card-body">
                          <table class="table table-hover text-nowrap zw_table">
                            <thead class="zw_bg_AF2245 zw_text_ffffff">
                              <tr>
                                <th class="poppins-medium zw_18">Image</th>
                                <th class="poppins-medium zw_18">Arabic Name</th>
                                <th class="poppins-medium zw_18">English Name</th>
                                <th class="poppins-medium zw_18">Price</th>
                                <th class="poppins-medium zw_18">Gender</th>
                                <th class="poppins-medium zw_18" colspan="2"></th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($subservicessingle as $subservice)
                              <tr>
                                <td class="poppins-regular zw_14 zw_text_333333">
                                  <img class="center-block" width="50px"
                                    src="/images/healthcareservicesimage.png" />
                                </td>
                                <td class="poppins-regular zw_14 zw_text_333333">
                                  {{ $subservice->Arname }}
                                </td>
                                <td class="poppins-regular zw_14 zw_text_333333">
                                  {{ $subservice->Enname }}
                                </td>
                                <td class="poppins-regular zw_14 zw_text_333333">
                                  {{ $subservice->Price }}
                                </td>
                                <td class="poppins-regular zw_14 zw_text_333333">
                                  {{ $subservice->Gender }}
                                </td>
                                <td class="poppins-regular zw_14 zw_text_333333">
                                  <a class="btn zw_text_AF2245 zw_a zw_24"
                                    href="{{ route('healthcare.services.show', ['id' => $subservice->id]) }}"><i
                                      class="fa fa-edit"
                                      aria-hidden="true"></i></a>
                                </td>
                                <td class="poppins-regular zw_14 zw_text_333333">
                                  <form
                                    action="{{ route('healthcare.services.destroy', ['id' => $subservice->id]) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                      class="btn zw_text_AF2245 zw_a zw_24"><i
                                        class="fas fa-trash"></i></button>
                                  </form>
                                </td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </section>
    </div>
    @include('admin.layouts.footer')
  </div>
  <script>
    $(document).ready(function() {
      $('.StatusUpdate').change(function() {
        var status = $(this).prop('checked');
        var ssid = $(this).closest('.statusForm').find('.ssid').val();

        $.ajax({
          url: "{{ route('ssupdate.status') }}",
          method: 'POST',
          data: {
            _token: "{{ csrf_token() }}",
            id: ssid,
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
  <script>
    $(document).ready(function() {
      $('#addInputValue').click(function() {
        var value = $('#textInput').val();
        if (value.trim() !== '') {
          addValue(value);
          $('#textInput').val('');
        }
      });

      function addValue(value) {
        $('#selectedValuesContainer').append('<div class="selectedValue">' + value +
          '<span class="delete">&times;</span></div>');
        appendSelectedValues(value);
      }

      function appendSelectedValues(value) {

        var selectedValues = $('#selectedValuesInput').val().split(',');
        var index = selectedValues.indexOf('');
        if (index !== -1) {
          selectedValues.splice(index, 1);
        }
        selectedValues.push(value);
        $('#selectedValuesInput').val(selectedValues.join(','));

        // Append the value to the container below the input field
        //c $('#selectedValuesContainer').append('<div>' + value + '<span class="delete">&times;</span></div>');
      }

      $(document).on('click', '.delete', function() {
        var value = $(this).parent().text().trim();
        removeSelectedValue(value);
        $(this).parent().remove();
      });

      function removeSelectedValue(value) {
        var selectedValues = $('#selectedValuesInput').val().split(',');
        var index = selectedValues.indexOf(value);
        if (index !== -1) {
          selectedValues.splice(index, 1);
        }
        $('#selectedValuesInput').val(selectedValues.join(','));

        // Remove the value from the container below the input field
        $('#selectedValuesContainer').find('div:contains("' + value + '")').remove();
      }
      // Event listener for the change event on the Servicetype dropdown
      $('#Serviceinputhidenshow').hide();
      $('#Ennameinputhidenshow').hide();
      $('#packageinputhidenshow').hide();
      $('[name="Servicetype"]').change(function() {
        var value = $(this).val();
        // Show or hide the selectedValuesInput based on the selected value
        if (value === 'Package') {
          $('#Serviceinputhidenshow').show();
          $('#packageinputhidenshow').show();
          $('#Ennameinputhidenshow').hide();
        } else {
          $('#Serviceinputhidenshow').hide();
          $('#packageinputhidenshow').hide();
          $('#Ennameinputhidenshow').show();
        }
      });
    });
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>

  <script>
    $(document).ready(function() {
      $("#form").validate({
        rules: {
          Service: {
            required: true
          },
          Servicetype: {
            required: true
          },
          Estimatetime: {
            required: true
          },
          Price: {
            required: true,
            number: true,
            min: 0
          },
          Changeserviceprice: {
            required: true,
            number: true,
            min: 0
          },
          Gender: {
            required: true
          },
        },
        messages: {
          Service: "Please select a service.",
          Servicetype: "Please select a service type.",
          Estimatetime: "Please select the estimated time.",
          Price: {
            required: "Please enter the price.",
            number: "Please enter a valid number.",
            min: "Price must be a positive number."
          },
          Changeserviceprice: {
            required: "Please enter the service price.",
            number: "Please enter a valid number.",
            min: "Price must be a positive number."
          },
          Gender: "Please select a gender.",
        },
        errorPlacement: function(error, element) {
          error.addClass('invalid-feedback'); // Add a class for styling
          element.closest('.form-group').append(error); // Append error to the form group
        },
        highlight: function(element) {
          $(element).addClass('is-invalid'); // Add a class for highlighting errors
        },
        unhighlight: function(element) {
          $(element).removeClass('is-invalid'); // Remove error highlight
        },
        submitHandler: function(form) {
          var formData = new FormData(form);
          $.ajax({
            type: 'POST',
            url: '{{ route("healthcare.services.store") }}',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
              $('.modal').modal('hide');
              showAlert('success', 'Services Added successfully!');
              // Reload the current page
              location.reload();

            },
            error: function(response) {
              showAlert('danger', 'An error occurred. Please try again.');
            }

          });
        }
      });

      // Custom method for file size validation
      function showAlert(type, message) {
        const alertHTML = `
    <div class="alert alert-${type} alert-dismissible fade show" role="alert">
        ${message}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
`;
        $('#alertContainer').html(alertHTML);
        setTimeout(function() {
          $('.alert').alert('close');
        }, 3000);

      }
    });
  </script>


</body>

</html>