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
          <!-- <div class="row mb-2">
            <div class="col-sm-6 zw_back">
              <a href="" class="poppins-medium zw_18 zw_text_333333 zw_a zw_back">
                <i class="fas fa-arrow-left right mr-2"></i>Back
              </a>
            </div>
          </div> -->
          <div class="row mb-2">
            <div class="col-sm-6 zw_back">
              <a onclick="history.back()" class="poppins-medium zw_18 zw_text_333333 zw_a zw_back">
                <i class="fas fa-arrow-left right mr-2"></i>Back
              </a>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-md-12 col-lg-6">
              <h1 class="poppins-semibold zw_46 zw_text_AF2245 mt-2">
                <span class="mr-3"><img src="{{url('dist/img/zwaara_user.png')}}" alt="Zwaara User" class=" "></span>Doctor Position
              </h1>
              <h5 class="pt-2" style="font-size: 12px;">You have 10 list of main services</h5>
              <!-- <p class="poppins-regular zw_16 zw_text_111535 mt-2 mb-1">You have 10 Positions</p> -->
              <!-- <h1>Doctor Positions</h1> -->
            </div>
            <div class="col-12 col-md-12 col-lg-6">
              <!-- <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active"> Doctor Positions</li>
              </ol> -->
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- <div class="mt-4">
        {{ $doctorpositions->links() }}
      </div> -->
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="row">
          <div class="col-12 col-md-12 col-lg-6">
            <form class="zw_search_form ">
              <div class="input-group input-group-sm">
                <input type="text" name="search" class=" zw_search_input zw_16 poppins-regular" placeholder="Search">
                <div class="input-group-append zw_input-group-append">
                  <button type="submit" class="btn zw_search_button zw_bg_ffffff">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
          <div class="col-12 col-md-12 col-lg-6">
            <button type="button" class="btn zw_add_btn float-right  poppins-medium zw_18" data-toggle="modal" data-target="#exampleModal">
              Add Doctor Position
            </button>
            <!-- Modal -->
            <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <!-- <div class="modal-header">
                    <h5 class="poppins-semibold zw_text_AF2245 mt-3 mb-3 text-center">Add Doctor Position</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div> -->
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-sm-12">
                        <h3 class="poppins-semibold zw_text_AF2245 mt-3 mb-3 text-center">Add Doctor Position</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: absolute;top: 0;right: 10px;">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <!-- left column -->
                      @if ($errors->any())
                      <div class="alert zw_alert_danger col-md-12">
                        There were some problems with your input.<br><br>
                        <ul>
                          @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                          @endforeach
                        </ul>
                      </div>
                      @endif
                      <div class="error-message text-danger"></div>
                      <div class="col-md-12">
                        <div class="container mb-4">
                          <div class="form-row align-items-center">
                            <div class="col-auto">
                              <img id="imagePreview" src="#" alt="Image Preview" />
                            </div>
                            <div class="col-auto">
                              <label for="exampleInputLogo" class="pt-4 zw_label_height zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">Upload Logo</label>
                              <div class="input-group">
                                <div class="custom-file">
                                  <input type="file" name="Logo" class="custom-file-input" id="exampleInputLogo" onchange="updateFileName(this)">
                                  <label class="custom-file-label zw_form_control" for="exampleInputLogo">Choose file</label>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- general form elements -->
                        <div class="">

                          <!-- form start -->
                          <form id="myForm" action="{{ route('doctorpositions.store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                              <div class="form-row zw_form_row">
                                <div class="form-group col-md-6">
                                  <label class="zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputEnname">En name <span style="color: red;">*</span></label>
                                  <input type="text" name="Enname" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputEnname" placeholder="En name">
                                  <div class="error-message text-danger Enname-error"></div>
                                </div>
                                <div class="form-group col-md-6">
                                  <label class="zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputArname">Ar name <span style="color: red;">*</span></label>
                                  <input type="text" name="Arname" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputArname" placeholder="Ar name">
                                  <div class="error-message text-danger Arname-error"></div>
                                </div>
                              </div>
                              <div class="form-row zw_form_row">
                                <div class="form-group col-md-6">
                                  <label class="zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleEnspecialties">EN Medical department</label>
                                  <select name="Enmedicaldepartment" class="estimatetime form-control zw_form_control mb-4">
                                    <option value="">Select Option</option>
                                    @foreach($dropdownOptions as $option)
                                    <option value="{{ $option->id . ':' . $option->Enname }}">{{ $option->Enname }}</option>
                                    @endforeach
                                  </select>
                                </div>
                                <div class="form-group col-md-6">
                                  <label class="zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputARspecialties">AR Medical specialities</label>
                                  <select name="Armedicaldepartment" class="estimatetime form-control zw_form_control mb-4">
                                    <option>option 1</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-row zw_form_row" style="margin-top: -20px;">
                                <div class="form-group col-md-6">
                                  <label class="zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputPrice">Price</label>
                                  <input type="text" name="Price" class="estimatetime form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputPrice" placeholder="Enter Price">
                                </div>
                              </div>
                              <div class="row">
                                <div class="offset-md-1 col-md-10">
                                  <button type="submit" class="btn zw_submit zw_submit_wh">Send</button>
                                </div>
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

            <!-- <a class="btn zw_add_btn float-right  poppins-medium zw_18"  href="{{ route('doctorpositions.create') }}"> <i class="fas fa-plus right mr-2"></i>Add Doctor Position</a> -->
          </div>
        </div>
        <div class="row">
          <!-- <div class="col-12">
            <a class="btn btn-success float-right m-2" href="{{ route('doctorpositions.create') }}">Add New Doctor Position</a>
          </div> -->
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card zw_card">
              <!-- <div class="card-header">
                <h3 class="card-title">Our Doctor Position </h3>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div> -->

              @if ($message = Session::get('success'))
              <div class="alert zw_alert_success">
                <p>{{ $message }}</p>
              </div>
              @endif
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <div class="pre_next">
                  {{ $doctorpositions->links() }}
                </div>
                <table class="table table-hover text-nowrap zw_table">
                  <thead class="zw_bg_AF2245 zw_text_ffffff">
                    <tr>
                      <th class="poppins-medium zw_18 text-center">Image</th>
                      <th class="poppins-medium zw_18 text-left">En Name</th>
                      <th class="poppins-medium zw_18 text-left">Ar Name</th>
                      <th class="poppins-medium zw_18">Status</th>
                      <!-- <th class="poppins-medium zw_18">Price</th> -->
                      <th class="poppins-medium zw_18" colspan="2"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($doctorpositions as $doctorpositions)
                    <tr>
                      <td class="poppins-regular zw_14 zw_text_333333 text-center">
                        @if(!empty($doctorpositions->Logo) && file_exists(public_path($doctorpositions->Logo)))
                        <img class="center-block" width="50" src="{{ asset($doctorpositions->Logo) }}" alt="Medical Specialty Logo" />
                        @else
                        <img class="center-block" width="50" src="{{ asset('uploads/images.png')}}" alt="Placeholder Logo" />
                        @endif
                      </td>
                      <td class="poppins-regular zw_14 zw_text_333333 text-left pl-3">{{ $doctorpositions->Enname }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333 text-left pl-3">{{ $doctorpositions->Arname }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333">
                        <label class="switch">
                          <form id="statusForm" class="statusForm">
                            <input type="hidden" name="msid" id="msid" class="msid" value="{{ $doctorpositions->id }}">
                            <input type="checkbox" id="StatusUpdate" class="StatusUpdate" data-on="Active" data-off="In Active" {{ $doctorpositions->Status ? 'checked' : '' }}>
                            <span class="slider"></span>
                          </form>
                        </label>

                      </td>
                      <!-- <td class="poppins-regular zw_14 zw_text_333333">{{ $doctorpositions->Price }}</td> -->
                      <td class="poppins-regular zw_14 zw_text_333333">
                        <a class="btn zw_text_AF2245 zw_a zw_24" href="{{ route('doctorpositions.show',$doctorpositions->id) }}"><i class="fa fa-edit" aria-hidden="true"></i> </a>
                      </td>
                      <!-- <td class="poppins-regular zw_14 zw_text_333333">
                        <form action="{{ route('doctorpositions.destroy',$doctorpositions->id) }}" method="POST"> -->
                      <!-- <a class="btn zw_btn" href="{{ route('doctorpositions.show',$doctorpositions->id) }}">Show</a> -->
                      <!-- @csrf
                          @method('DELETE')
                          <button type="submit" class="btn zw_text_AF2245 zw_a zw_24"><i class="fas fa-trash"></i></button>
                        </form>
                      </td> -->
                    </tr>
                    @endforeach
                  </tbody>
                </table>
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
    function updateFileName(input) {
      const file = input.files[0];
      const label = input.nextElementSibling;

      if (file) {
        label.textContent = file.name;
        const reader = new FileReader();
        reader.onload = function(e) {
          const imagePreview = document.getElementById('imagePreview');
          imagePreview.src = e.target.result;
          imagePreview.style.display = 'inline'; // Show inline
        };
        reader.readAsDataURL(file);
      } else {
        label.textContent = 'Choose file';
        document.getElementById('imagePreview').style.display = 'none';
      }
    }
  </script>
  <script>
    $(document).ready(function() {
      $('.StatusUpdate').change(function() {
        var status = $(this).prop('checked');
        var msid = $(this).closest('.statusForm').find('.dpid').val();

        $.ajax({
          url: "{{ route('dpupdate.status') }}",
          method: 'POST',
          data: {
            _token: "{{ csrf_token() }}",
            id: msid,
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
  <!-- Your Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form id="myForm" action="{{ route('doctorpositions.store') }}" method="POST">
          @csrf
          <div class="modal-body">
            <input type="text" name="position" required class="form-control" placeholder="Position">
            <div class="error-message text-danger"></div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script>
    $(document).ready(function() {
      $('#myForm').on('submit', function(e) {
        e.preventDefault();
        $('.error-message').text(''); // Clear previous errors

        $.ajax({
          type: 'POST',
          url: $(this).attr('action'),
          data: $(this).serialize(),
          success: function(response) {
            $('.modal').modal('hide'); // Hide modal on success
            console.log(response.success);
            if (response.success) {
              // Prepend the success message
              $('.zw_card').prepend(
                '<div class="alert alert-success zw_alert_success">' +
                '<p>Data has been saved successfully!</p>' +
                '</div>'
              );

              // Optionally fade out the message after a few seconds
              setTimeout(function() {
                $('.zw_alert_success').fadeOut();
              }, 3000);
              location.reload();
            }
            // location.reload();
          },
          error: function(xhr) {
            if (xhr.status === 422) {
              const errors = xhr.responseJSON.errors;
              for (let key in errors) {
                // Join multiple error messages with a line break if needed
                const errorMessage = errors[key].join('<br>');
                $(`.${key}-error`).html(errorMessage); // Use .html() to insert line breaks
              }
            }
          }
        });
      });
    });
  </script>
</body>

</html>