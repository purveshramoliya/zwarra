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
                        <h3 class="poppins-semibold zw_34 zw_text_AF2245 mt-3">Edit Doctor</h3>
                    </div>
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- <div class="pull-right">
                            <a class="btn btn-primary m-2" href="{{ route('alldoctors.index') }}"> Back</a>
                        </div> -->
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <!-- <div class="card-header">
                                <h3 class="card-title">Edit Doctor</h3>
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
                            <form action="{{ route('alldoctors.update',$alldoctor->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-row zw_form_row">
                                    <div class="form-group col-md-6">
                                      <label for="exampleInputLogo" class="zw_label_height zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">Upload Logo</label>
                                      <div class="input-group">
                                        <div class="custom-file">
                                          <input type="file" name="Logo" class="custom-file-input" id="exampleInputLogo" onchange="updateFileName(this)">
                                          <label class="custom-file-label zw_form_control" for="exampleInputLogo">Choose file</label>
                                        </div>
                                      </div>
                                  </div>
                              </div>
                                    <div class="form-row zw_form_row">
                                        <div class="form-group col-md-6">
                                            <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputErname">En name</label>
                                            <input type="text" name="Enname" value="{{ $alldoctor->Enname }}" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputErname" placeholder="Enter ername">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputarname">Ar name <span style="color: red;">*</span></label>
                                            <input type="text" name="Arname" value="{{ $alldoctor->Arname }}" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputarname" placeholder="Enter arname">
                                        </div>
                                    </div>
                                    <div class="form-row zw_form_row">
                                        <div class="form-group col-md-6">
                                            <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputEmail">Email address <span style="color: red;">*</span></label>
                                            <input type="email" name="email" value="{{ $alldoctor->email }}" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputEmail" placeholder="Enter email">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputPassword">Password <span style="color: red;">*</span></label>
                                            <input type="password" name="Password" value="{{ $alldoctor->Password }}" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputPassword" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="form-row zw_form_row">
                                        <div class="form-group col-md-6">
                                            <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputLicenceno">Licence number <span style="color: red;">*</span></label>
                                            <input type="text" name="Licenceno" value="{{ $alldoctor->Licenceno }}" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputLicenceno" placeholder="Enter licence number">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputphone">Phone <span style="color: red;">*</span></label>
                                            <input type="phone" name="Phone" value="{{ $alldoctor->Phone }}" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputphone" placeholder="Enter phone">
                                        </div>
                                    </div>
                                    <div class="form-row zw_form_row">
                                        <div class="form-group col-md-6">
                                            <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputYearofexp">Year Of Experience <span style="color: red;">*</span></label>
                                            <input type="text" name="Yearofexp" value="{{ $alldoctor->Yearofexp }}" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputYearofexp" placeholder="Enter Year Of Experience">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputPosition">Doctor Position <span style="color: red;">*</span></label>
                                             <select name="Position" class="custom-select poppins-regular zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none">
                                            <option value="{{ $alldoctor->Position }}" selected="selected">{{ $alldoctor->Position }}</option>
                                            @foreach($dropdownOptions as $option)
                                                 @if($option->Enname != $alldoctor->Position) <!-- Assuming $selectedValue contains the currently selected ID -->
                                                <option value="{{$option->Enname }}">{{ $option->Enname }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-row zw_form_row">
                                        <div class="form-group col-md-6">
                                            <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputMedicalspec">Medical Specialties <span style="color: red;">*</span></label>
                                            <textarea name="Medicalspec" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputMedicalspec" rows="2" placeholder="Enter Medical Specialties">{{ $alldoctor->Medicalspec }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-row zw_form_row">
                                    <div class="form-group col-md-6 zw_select_file">
                                      <label for="exampleInputAttachment" class="zw_label_height zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">Upload Attachment</label>
                                      <div class="input-group">
                                        <div class="custom-file">
                                          <input type="file" name="attachment[]" class="custom-file-input" id="exampleInputattachment" onchange="updatemultipleFileName(this)" multiple>
                                          <label class="custom-file-label zw_form_control" for="exampleInputLogo" id="fileLabel">Choose file</label>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div id="selectedFiles"></div>
                                    <div class="row">
                                        <div class="col-12">
                                            <button type="submit" class="btn zw_submit zw_submit_wh">Submit</button>
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
</body>

</html>