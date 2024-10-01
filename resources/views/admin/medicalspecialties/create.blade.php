@include('admin.layouts.headermodule')

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
            <a href="{{ route('medicalspecialties.index') }}" class="poppins-medium zw_18 zw_text_333333 zw_a zw_back">
              <i class="fas fa-arrow-left right mr-2"></i>Back
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <h3 class="poppins-semibold zw_34 zw_text_AF2245 mt-3 text-center">Add Medical Department</h3>
          </div>
          <!-- left column -->
          <div class="col-md-12">
            <!-- <div class="pull-right">
              <a class="btn btn-primary m-2" href="{{ route('medicalspecialties.index') }}"> Back</a>
            </div> -->
            <!-- general form elements -->
            <div class="card card-primary">
              <!-- <div class="card-header m-2">
                <h3 class="card-title">Add New MedicalSpecialties </h3>
              </div> -->
              <!-- /.card-header -->
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
              <!-- form start -->
              <form action="{{ route('medicalspecialties.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="container mt-5 mb-4">
                    <div class="form-row align-items-center">
                      <div class="col-auto">
                        <img id="imagePreview" src="#" alt="Image Preview" />
                      </div>
                      <div class="col-auto">
                        <label for="exampleInputLogo" class="mt-5 zw_label_height zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">Upload Logo</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" name="Logo" class="custom-file-input" id="exampleInputLogo" onchange="updateFileName(this)">
                            <label class="custom-file-label zw_form_control" for="exampleInputLogo">Choose file</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>


                  <!-- <div class="form-row zw_form_row">
                    <div class="form-group col-md-6">
                      <label for="exampleInputLogo" class="zw_label_height zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">Upload Logo</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="Logo" class="custom-file-input" id="exampleInputLogo" onchange="updateFileName(this)">
                          <label class="custom-file-label zw_form_control" for="exampleInputLogo">Choose file</label>
                        </div>
                      </div>
                    </div>
                  </div> -->
                  <div class="form-row zw_form_row">
                    <div class="form-group col-md-6">
                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputEnname">En name<span style="color: red;">*</span></label>
                      <input type="text" name="Enname" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputEnname" placeholder="En name">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputArname">Ar name <span style="color: red;">*</span></label>
                      <input type="text" name="Arname" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputArname" placeholder="Ar name">
                    </div>
                  </div>
                  <div class="form-row zw_form_row">
                    <div class="form-group col-md-6">
                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputEndescription">Estimated time for a service <span style="color: red;">*</span></label>
                      <select name="Estimatedtime" class="estimatetime form-control zw_form_control mb-4">
                        <option>1 Hour</option>
                        <option>2 Hour </option>
                        <option>3 Hour</option>
                        <option>4 Hour</option>
                        <option>5 Hour</option>
                        <option>6 Hour </option>
                        <option>7 Hour</option>
                        <option>8 Hour</option>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="offset-md-2 col-md-8">
                      <button type="submit" class="btn zw_submit zw_submit_wh">Send</button>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <!-- <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div> -->
              </form>
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

  </div>
</body>

</html>