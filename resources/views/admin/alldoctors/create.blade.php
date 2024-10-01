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
            <a href="{{ route('alldoctors.index') }}" class="poppins-medium zw_18 zw_text_333333 zw_a zw_back">
              <i class="fas fa-arrow-left right mr-2"></i>Back
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <h3 class="poppins-semibold zw_34 zw_text_AF2245 mt-3 ml-4">Add New Doctor</h3>
          </div>
          <!-- left column -->
          <div class="col-md-12">
            <!-- <div class="pull-right">
              <a class="btn btn-primary m-2" href="{{ route('alldoctors.index') }}"> Back</a>
            </div> -->
            <!-- general form elements -->
            <div class="">
              <!-- <div class="card-header m-2">
                <h3 class="card-title">Add New Doctor</h3>
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
              <form action="{{ route('alldoctors.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="container pt-5">
                    <div class="form-row align-items-center">
                      <div class="col-auto">
                        <img id="imagePreview" src="#" alt="Image Preview" />
                      </div>
                      <div class="col-auto">
                        <label for="exampleInputLogo" class="zw_label_height zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">Upload Logo</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" name="Logo" style="" class="custom-file-input" id="exampleInputLogo" onchange="updateFileName(this)">
                            <label class="custom-file-label zw_form_control" style="display:none;" for="exampleInputLogo">Choose file</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- <div class="form-row zw_form_row">
                     <div class="form-group col-md-6 zw_select_file">
                      <label for="exampleInputlogo" class="zw_label_height zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">Upload logo</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="Logo" class="custom-file-input" id="exampleInputlogo" onchange="updateFileName(this)">
                          <label class="custom-file-label zw_form_control" for="exampleInputlogo">Choose file</label>
                        </div>
                      </div> -->
                  <!-- <input type="file" name="Logo" id="Logo"> -->
                  <!-- </div>
                  </div> -->
                  <div class="form-row zw_form_row">
                    <div class="form-group col-md-6">
                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputErname">En name <span style="color: red;">*</span></label>
                      <input type="text" name="Enname" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputErname" placeholder="Name">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputarname">Ar name <span style="color: red;">*</span></label>
                      <input type="text" name="Arname" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputarname" placeholder="Ar name">
                    </div>
                  </div>
                  <div class="form-row zw_form_row">
                    <div class="form-group col-md-6">
                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputEmail">Email<span style="color: red;">*</span></label>
                      <input type="email" name="Email" class="form-control @error('Email') is-invalid @enderror poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputEmail" placeholder="Enter email" value="{{ old('Email') }}" required autofocus>

                      @error('Email')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                    <div class="form-group col-md-6">
                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputPassword">Password <span style="color: red;">*</span></label>
                      <input type="password" name="Password" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputPassword" placeholder="Password">
                    </div>
                  </div>
                  <div class="form-row zw_form_row">
                    <div class="form-group col-md-6">
                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputLicenceno">Licence number <span style="color: red;">*</span></label>
                      <input type="text" name="Licenceno" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputLicenceno" placeholder="licence number">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputphone">Phone <span style="color: red;">*</span></label>
                      <input type="phone" name="Phone" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputphone" placeholder="Enter phone">
                    </div>
                  </div>
                  <div class="form-row zw_form_row">
                    <div class="form-group col-md-6">
                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputYearofexp">Year Of Experiences <span style="color: red;">*</span></label>
                      <input type="text" name="Yearofexp" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputYearofexp" placeholder="Enter Year Of Experience">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="examplePosition">Doctor Position<span style="color: red;">*</span></label>
                      <select name="Position" class="form-control zw_form_control">
                        <option value="">Select Option</option>
                        @foreach($dropdownOptions as $option)
                        <option value="{{$option->Enname}}">{{ $option->Enname }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="form-row zw_form_row">
                    <div class="form-group col-md-6">
                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputMedicalspec">Medical Specialties <span style="color: red;">*</span></label>
                      <select name="Medicalspec" class="form-control zw_form_control">
                        <option value="Medical Specialist">Medical Specialist</option>
                      </select>
                      <!-- <textarea name="Medicalspec" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputMedicalspec" rows="2" placeholder="Enter Medical Specialties"></textarea> -->
                    </div>
                    <div class="form-group col-md-6">
                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputMedicalspec">Special Price</label>
                      <input type="text" name="Arname" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputarname" placeholder="Special Price">
                    </div>
                  </div>
                  <!-- <div class="form-row zw_form_row">
                    <div class="form-group col-md-6">
                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputMedicalspec">Medical Specialties <span style="color: red;">*</span></label>
                      <textarea name="Medicalspec" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputMedicalspec" rows="2" placeholder="Enter Medical Specialties"></textarea>
                    </div>
                  </div> -->
                  <div class="form-row zw_form_row mt-3">
                    <div class="form-group col-md-6 zw_select_file zw_poppins_regular">
                      <label for="file-upload" class="" style="cursor: pointer;font-weight: 600;">
                        <i class="fa fa-plus mr-3" aria-hidden="true"></i> Upload Attachment <span style="color: red;">*</span>
                      </label>
                      <input type="file" name="attachment[]" id="file-upload" style="display: none;" accept="image/*" onchange="handleFileSelect(event)">
                      <!-- <label for="exampleInputattachment" class="zw_label_height zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">Upload Attachment <span style="color: red;">*</span></label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="attachment[]" class="custom-file-input" id="exampleInputattachment" onchange="updatemultipleFileName(this)" multiple>
                          <label class="custom-file-label zw_form_control" for="exampleInputlogo" id="fileLabel">Choose file</label>
                        </div>
                      </div> -->
                    </div>
                    <div class="col-md-6">
                      <button type="submit" class="btn float-right add-doctor-save">Save</button>
                    </div>
                  </div>
                  <!-- <div class="form-row zw_form_row">
                    <div class="form-group col-md-6 zw_select_file">
                      <label for="exampleInputattachment" class="zw_label_height zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">Upload Attachment</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="attachment[]" class="custom-file-input" id="exampleInputattachment" onchange="updatemultipleFileName(this)" multiple>
                          <label class="custom-file-label zw_form_control" for="exampleInputlogo" id="fileLabel">Choose file</label>
                        </div>
                      </div>
                    </div>
                  </div> -->
                  <div id="selectedFiles"></div>
                  <!-- <div class="row">
                    <div class="col-12">
                      <button type="submit" class="btn zw_submit zw_submit_wh">Submit</button>
                    </div>
                  </div> -->
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
  </div>
  <script>
    function updatemultipleFileName(input) {
      var files = input.files;
      var label = document.getElementById("fileLabel");
      var fileNames = [];
      for (var i = 0; i < files.length; i++) {
        fileNames.push(files[i].name);
      }
      //label.innerText = fileNames.join(', ') || 'Choose file';

      // Display selected file names below the upload fields
      var selectedFilesDiv = document.getElementById("selectedFiles");
      selectedFilesDiv.innerHTML = fileNames.join('<br>') || '';
    }
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