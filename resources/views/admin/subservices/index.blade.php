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
                <span class="mr-3"><img src="{{url('dist/img/zwaara_user.png')}}" alt="Zwaara User" class=" "></span>Our Sub-Services
              </h1>
            </div>

            <div class="col-12 col-md-12 col-lg-6">
              <!-- <a class="btn zw_add_btn float-right  poppins-medium zw_18" href="{{ route('subservices.create', ['id' => request()->id]) }}"> <i class="fas fa-plus right mr-2"></i>Add New Lab Service</a> -->
              <a href="" class="btn zw_add_btn float-right  poppins-medium zw_18 packageservicebtn" data-toggle="modal" data-target="#exampleModal">
                <i class="fas fa-plus right mr-2 mb-1"></i>Add a Sub-Service </a>
              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                  <div class="modal-content">
                    <div class="modal-body">
                      <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="">
                          <!-- /.card-header -->
                          @if ($errors->any()) <div class="alert zw_alert_danger"> There were some problems with your input. <br>
                            <br>
                            <ul> @foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach </ul>
                          </div> @endif
                          <!-- form start -->
                          <form action="{{ route('subservices.store') }}" method="POST" enctype="multipart/form-data"> @csrf <input type="hidden" name="Healthcareid" value="{{ $id }}">
                            <div class="card-body">
                              {{-- <div class="form-row zw_form_row">
																				  <div class="form-group col-md-6"> --}}
                              <div class="form-row align-items-center">
                                <div class="col-auto">
                                  <img id="imagePreview" src="#" alt="Image Preview" />
                                </div>
                                <div class="col-auto">
                                  <label for="exampleInputLogo" class="zw_poppins_regular poppins-regular zw_17 zw_text_111535">Upload Logo</label>
                                  <div class="input-group">
                                    <div class="custom-file">
                                      <input type="file" name="Logo" class="custom-file-input" id="exampleInputLogo" onchange="updateFileName(this)">
                                      <label class="custom-file-label zw_form_control" style="display:none;" for="exampleInputLogo">Choose file</label>
                                    </div>
                                  </div>
                                </div>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: absolute;top: 0;right: 10px;">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              {{-- </div>
																				  </div> --}}
                              <div class="form-row zw_form_row hide" id="Ennameinputhidenshow">
                                <div class="form-group col-md-6">
                                  <label class="zw_label_height zw_poppins_regular poppins-regular zw_17 zw_text_111535" for="exampleInputEnname">En name <span style="color: red;">*</span>
                                  </label>
                                  <input type="text" name="Enname" class="form-control poppins-regular zw_17 zw_text_898B9F zw_form_control" id="exampleInputEnname" placeholder="Enter Enname">
                                </div>
                                <div class="form-group col-md-6">
                                  <label class="zw_label_height zw_poppins_regular poppins-regular zw_17 zw_text_111535" for="exampleInputArname">Ar name <span style="color: red;">*</span>
                                  </label>
                                  <input type="text" name="Arname" class="form-control poppins-regular zw_17 zw_text_898B9F zw_form_control" id="exampleInputArname" placeholder="Enter Arname">
                                </div>
                              </div>
                              <div class="form-row zw_form_row mb-4">
                                <div class="form-group col-md-6">
                                  <label class="zw_label_height zw_poppins_regular poppins-regular zw_17 zw_text_111535" for="exampleInputEndescription">English Description
                                  </label>
                                  <input type="text" name="Endescription" class="form-control poppins-regular zw_17 zw_text_898B9F zw_form_control" id="exampleInputEndescription" rows="2" placeholder="Enter En Description">
                                </div>
                                <div class="form-group col-md-6">
                                  <label class="zw_label_height zw_poppins_regular poppins-regular zw_17 zw_text_111535" for="exampleInputArdescription">Arabic Description
                                  </label>
                                  <input type="text" name="Ardescription" class="form-control poppins-regular zw_17 zw_text_898B9F zw_form_control" id="exampleInputArdescription" rows="2" placeholder="Enter Ar Description">
                                </div>
                              </div>
                              <div class="form-row zw_form_row">
                                <div class="form-group col-md-3">
                                  <select name="Testcategory" class="form-control zw_form_control mb-4 zw_17">
                                    <option value="">Main Services type <span style="color: red;">*</span>
                                    </option>
                                  </select>
                                </div>
                                <div class="form-group col-md-3">
                                  <select name="Service" class="form-control zw_form_control mb-4 zw_17">
                                    <option value="">Services <span style="color: red;">*</span>
                                    </option> @foreach ($sdropdownOptions as $option) <option value="{{ $option->id . ':' . $option->Enname }}">
                                      {{ $option->Enname }}
                                    </option> @endforeach
                                  </select>
                                </div>
                                <div class="form-group col-md-3">
                                  <select name="Servicetype" class="form-control zw_form_control mb-4 zw_17">
                                    <option value="">Sub Service Type <span style="color: red;">*</span></option>
                                    <option value="Single">Single</option>
                                    <option value="Package">Package</option>
                                  </select>
                                </div>
                                <div class="form-group col-md-3">
                                  <select name="Servicetype" class="form-control zw_form_control mb-4 zw_17">
                                    <option value="">Sub Service <span style="color: red;">*</span></option>
                                    <option value="Single">Single</option>
                                    <option value="Package">Package</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-row zw_form_row">
                                <div class="form-group col-md-6">
                                  <label class="zw_label_height zw_poppins_regular poppins-regular zw_17 zw_text_111535" for="exampleInputEninstrucation">English Instrucation</label>
                                  <textarea name="Eninstrucation" class="form-control poppins-regular zw_17 zw_text_898B9F zw_form_control" id="exampleInputEninstrucation" rows="2" placeholder="Enter En Instrucation"></textarea>
                                </div>
                                <div class="form-group col-md-6">
                                  <label class="zw_label_height zw_poppins_regular poppins-regular zw_17 zw_text_111535" for="exampleInputArinstrucation">Arabic Instrucation</label>
                                  <textarea name="Arinstrucation" class="form-control poppins-regular zw_17 zw_text_898B9F zw_form_control" id="exampleInputArinstrucation" rows="2" placeholder="Enter Ar Instrucation"></textarea>
                                </div>
                              </div>
                              <div class="form-row zw_form_row">
                                <div class="form-group col-md-6">
                                  <label class="zw_label_height zw_poppins_regular poppins-regular zw_17 zw_text_111535" for="exampleInputEntitle">English available test title</label>
                                  <input type="text" name="Entitle" class="form-control poppins-regular zw_17 zw_text_898B9F zw_form_control" id="exampleInputEntitle" placeholder="Services">
                                </div>
                                <div class="form-group col-md-6">
                                  <label class="zw_label_height zw_poppins_regular poppins-regular zw_17 zw_text_111535" for="exampleInputArtitle">Arabic available test title
                                  </label>
                                  <input type="text" name="Artitle" class="form-control poppins-regular zw_17 zw_text_898B9F zw_form_control" id="exampleInputArtitle" placeholder="Services">
                                </div>
                              </div>
                              <div class="form-row zw_form_row">
                                <div class="form-group col-md-6">
                                  <label class="zw_label_height zw_poppins_regular poppins-regular zw_17 zw_text_111535" for="exampleInputEntitle">Test Included (English)</label>
                                  <input type="text" name="Entitle" class="form-control poppins-regular zw_17 zw_text_898B9F zw_form_control" id="exampleInputEntitle" placeholder="Enter test name">
                                </div>
                                <div class="form-group col-md-6">
                                  <label class="zw_label_height zw_poppins_regular poppins-regular zw_17 zw_text_111535" for="exampleInputArtitle">Test Included Arabic
                                  </label>
                                  <input type="text" name="Artitle" class="form-control poppins-regular zw_17 zw_text_898B9F zw_form_control" id="exampleInputArtitle" placeholder="Enter test name">
                                </div>
                              </div>
                              <div class="form-row zw_form_row">
                                <div class="form-group col-md-6">
                                  <label class="zw_label_height zw_poppins_regular poppins-regular zw_17 zw_text_111535" for="exampleInputPrice">Price <span style="color: red;">*</span>
                                  </label>
                                  <input name="Price" class="form-control poppins-regular zw_17 zw_text_898B9F zw_form_control" id="exampleInputPrice" placeholder="Enter Price">
                                </div> @if (empty($id)) <div class="form-group col-md-6">
                                  <label class="zw_label_height zw_poppins_regular poppins-regular zw_17 zw_text_111535" for="exampleInputHealthcare">Healthcare <span style="color: red;">*</span>
                                  </label>
                                  <select name="Healthcare" class="form-control zw_form_control mb-4 zw_17">
                                    <option value="">Select Option </option> @foreach ($dropdownOptions as $option) <option value="{{ $option->id . ':' . $option->Enname }}">
                                      {{ $option->Enname }}
                                    </option> @endforeach
                                  </select>
                                </div> @endif
                              </div>
                              <div class="form-row zw_form_row">
                                <div class="form-group col-md-6">
                                  <label class="zw_label_height zw_poppins_regular poppins-regular zw_17 zw_text_111535" for="exampleInputHealthcare">The type of practitioner providing the service <span style="color: red;">*</span>
                                  </label>
                                  <select name="Healthcare" class="form-control zw_form_control mb-4 zw_17">
                                    <option value="">Physical therapy nurse,docor,lab technician,other </option>
                                  </select>
                                </div>
                              </div>
                              <div class="row">
                                <div class="offset-md-2 col-md-8">
                                  <button type="submit" class="btn zw_submit zw_submit_wh">Send</button>
                                </div>
                              </div>
                              <!-- /.card-body -->
                          </form>
                        </div>
                        <!-- /.card -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- <a class="btn zw_add_btn float-right  poppins-medium zw_18 packageservicebtn" href="{{ route('subservices.createbody', ['id' => request()->id]) }}"> <i class="fas fa-plus right mr-2 mb-1"></i>Add a Sub-Service</a> -->
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- <div class="mt-4">
        {{ $subservices->links() }}
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
            <ul class="navbar-nav ml-auto">
              <!-- service Dropdown Menu -->
              <li class="nav-item dropdown">
                <a class="btn zw_lanbtn float-right text-left text-dark poppins-medium zw_18 btn-service-filter mt-2" data-toggle="dropdown" href="#">
                  Service filter <i class="fas float-right fa-angle-down right mr-2 mt-1"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                  <a href="#" class="dropdown-item">
                    English
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">
                    Arebic
                  </a>
                </div>
              </li>

            </ul>
          </div>
        </div
          <div class="row">
        <div class="col-12">
          <div class="card zw_card">
            @if ($message = Session::get('success'))
            <div class="alert zw_alert_success">
              <p>{{ $message }}</p>
            </div>
            @endif
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <div class="pre_next">
                {{ $subservices->links() }}
              </div>
              <table class="table table-hover text-nowrap zw_table pt-2">
                <thead class="zw_bg_AF2245 zw_text_ffffff">
                  <tr>
                    <th class="poppins-medium zw_18 text-center">Image</th>
                    <th class="poppins-medium zw_18">Sub Service Name</th>
                    <th class="poppins-medium zw_18">Price</th>
                    <th class="poppins-medium zw_18">Description</th>
                    <th class="poppins-medium zw_18">Instrucation</th>
                    <th class="poppins-medium zw_18">Single</th>
                    <th class="poppins-medium zw_18">Status</th>
                    <!-- <th class="poppins-medium zw_18">Single</th>
                    <th class="poppins-medium zw_18">Packages</th> -->
                    <th class="poppins-medium zw_18" colspan="2"></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($subservices as $subservice)
                  <tr>
                    <td class="poppins-regular zw_14 zw_text_333333 text-center"><img class="center-block" width="50px" height="" src="{{ asset($subservice->Logo) }}" height="" width="50px" /></td>
                    <td class="poppins-regular zw_14 zw_text_333333">{{ $subservice->Enname }}</td>
                    <td class="poppins-regular zw_14 zw_text_333333">{{ $subservice->Price}}</td>
                    <td class="poppins-regular zw_14 zw_text_333333">
                      <div class="sub-description">{{ $subservice->Endescription }}</div>
                    </td>
                    <td class="poppins-regular zw_14 zw_text_333333">
                      <div class="sub-description">{{ $subservice->Eninstrucation }}</div>
                    </td>
                    <td class="poppins-regular zw_14 zw_text_333333">
                      <a class="btn zw_text_AF2245 zw_a zw_24" href="{{ route('subservices.single',['id' => $subservice->id]) }}"><i class="fa fa-cloud" aria-hidden="true"></i> </a>
                    </td>
                    <td class="poppins-regular zw_14 zw_text_333333">
                      <label class="switch">
                        <form id="statusForm" class="statusForm">
                          <input type="hidden" name="ssid" id="ssid" class="ssid" value="{{ $subservice->id }}">
                          <input type="checkbox" id="StatusUpdate" class="StatusUpdate" data-on="Active" data-off="In Active" {{ $subservice->Status ? 'checked' : '' }}>
                          <span class="slider"></span>
                        </form>
                      </label>
                      <!-- <form id="statusForm" class="statusForm">
                        @csrf
                        <input type="hidden" name="ssid" id="ssid" class="ssid" value="{{ $subservice->id }}">
                        <input type="checkbox" data-toggle="toggle" data-size="sm" id="StatusUpdate" class="StatusUpdate" data-on="Active" data-off="In Active" {{ $subservice->Status ? 'checked' : '' }}>
                      </form> -->
                    </td>
                    <!-- <td class="poppins-regular zw_14 zw_text_333333">
                      <a class="btn zw_text_AF2245 zw_a zw_24" href="{{ route('subservices.single',['id' => $subservice->id]) }}"><i class="fa fa-cloud" aria-hidden="true"></i> </a>
                    </td>
                    <td class="poppins-regular zw_14 zw_text_333333">
                      <a class="btn zw_text_AF2245 zw_a zw_24" href="{{ route('subservices.packages',['id' => $subservice->id]) }}"><i class="fa fa-bars" aria-hidden="true"></i> </a>
                    </td> -->
                    <td class="poppins-regular zw_14 zw_text_333333">
                      <a class="btn zw_text_AF2245 zw_a zw_24" href="{{ route('subservices.show',$subservice->id) }}"><i class="fa fa-edit" aria-hidden="true"></i> </a>
                    </td>
                    <!-- <td class="poppins-regular zw_14 zw_text_333333">
                      <form action="{{ route('subservices.destroy',$subservice->id) }}" method="POST">
                        @csrf
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
</body>

</html>