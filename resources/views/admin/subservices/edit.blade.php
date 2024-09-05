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
                        <a href="{{ route('subservices.index') }}" class="poppins-medium zw_18 zw_text_333333 zw_a zw_back">
                            <i class="fas fa-arrow-left right mr-2"></i>Back
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="poppins-semibold zw_34 zw_text_AF2245 mt-3">Edit Sub Service</h3>
                    </div>
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- <div class="pull-right">
                            <a class="btn btn-primary m-2" href="{{ route('subservices.index') }}"> Back</a>
                        </div> -->
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <!-- <div class="card-header">
                                <h3 class="card-title">Edit Main Service</h3>
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
                            <form action="{{ route('subservices.update',$subservice->id) }}" method="POST" enctype="multipart/form-data">
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
                                            <label for="exampleInputtestcategory" class="zw_label_height zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">Test Category</label>
                                         
                                            <select name="Testcategory" class="custom-select poppins-regular zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none">
                                                <option value="Lab Test" {{ $subservice->Testcategory == 'Lab Test' ? 'selected' : '' }}>Lab Test</option>
                                                <option value="Body Test" {{ $subservice->Testcategory == 'Body Test' ? 'selected' : '' }}>Body Test</option>
                                            </select>
                                        </div>
                                         <div class="form-group col-md-6">
                                        <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputServicetype">Service Type <span style="color: red;">*</span></label>
                                        <select name="Servicetype" class="custom-select poppins-regular zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none" id="Servicetype">
                                            <option value="{{ $subservice->Servicetype }}" selected="selected">{{ $subservice->Servicetype }}</option>
                                            
                                            @if($subservice->Servicetype == 'Single')
                                                <option value="Package">Package</option>
                                            @else
                                                <option value="Single">Single</option>   
                                            @endif
                                        </select>
                                    </div>
                                    </div>
                                    <div class="form-row zw_form_row">
                                        <div class="form-group col-md-6">
                                            <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputEnname">En name</label>
                                            <input type="text" name="Enname" value="{{ $subservice->Enname }}" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputEnname" placeholder="Enter Enname">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputArname">Ar name <span style="color: red;">*</span></label>
                                            <input type="text" name="Arname" value="{{ $subservice->Arname }}" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputArname" placeholder="Enter Arname">
                                        </div>
                                    </div>
                                 
                                    <div class="form-row zw_form_row">
                                        <div class="form-group col-md-6">
                                          <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputService">Service <span style="color: red;">*</span></label>
                                          <select name="Service" class="custom-select poppins-regular zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none">
                                            <option value="{{ $subservice->Service . ':' . $subservice->Mainservicename}}" selected="selected">{{ $subservice->Mainservicename }}</option>
                                            @foreach($dropdownOptions as $option)
                                                 @if($option->Enname != $subservice->Mainservicename) <!-- Assuming $selectedValue contains the currently selected ID -->
                                                <option value="{{ $option->id . ':' . $option->Enname }}">{{ $option->Enname }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6 hide" id="packageinputhidenshow">
                                      <label class="zw_label_height zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputPackagename">Package name</label>
                                      <input type="text" name="Packagename" value="{{ $subservice->Packagename }}" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputPackagename" placeholder="Enter Package name">
                                    </div>
                                </div>
                                   
                                    <div class="form-row zw_form_row">
                                        <div class="form-group col-md-6">
                                            <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputEndescription">En Description <span style="color: red;">*</span></label>
                                            <textarea name="Endescription" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputEndescription" rows="2" placeholder="Enter En Description">{{ $subservice->Endescription }}</textarea>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputArdescription">Ar Description <span style="color: red;">*</span></label>
                                            <textarea name="Ardescription" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputArdescription" rows="2" placeholder="Enter Ar Description">{{ $subservice->Ardescription }}</textarea>
                                        </div>
                                    </div>
                                <div class="form-row zw_form_row">
                                    <div class="form-group col-md-6">
                                        <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputEninstrucation">En Instrucation <span style="color: red;">*</span></label>
                                        <textarea name="Eninstrucation" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputEninstrucation" rows="2" placeholder="Enter En Instrucation">{{ $subservice->Eninstrucation }}</textarea>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputArinstrucation">Ar Instrucation <span style="color: red;">*</span></label>
                                        <textarea name="Arinstrucation" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputArinstrucation" rows="2" placeholder="Enter Ar Instrucation">{{ $subservice->Arinstrucation }}</textarea>
                                    </div>
                                </div>
                                <div class="form-row zw_form_row">
                                    <div class="form-group col-md-6">
                                        <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputEntitle">En available test title</label>
                                        <input type="text" name="Entitle" value="{{ $subservice->Entitle }}" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputEntitle" placeholder="Enter En Title">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputArtitle">Ar available test title <span style="color: red;">*</span></label>
                                        <input type="text" name="Artitle" value="{{ $subservice->Artitle }}" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputArtitle" placeholder="Enter Ar Title">
                                    </div>
                                </div>
                                <div class="form-row zw_form_row">
                                    <div class="form-group col-md-6">
                                        <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputPrice">Price <span style="color: red;">*</span></label>
                                        <input name="Price" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" value="{{ $subservice->Price }}" id="exampleInputPrice" placeholder="Enter Price">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputHealthcare">Healthcare <span style="color: red;">*</span></label>
                                        <select name="Healthcare" class="custom-select poppins-regular zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none">
                                            <option value="{{ $subservice->Healthcareid . ':' . $subservice->Healthcare }}" selected="selected">{{ $subservice->Healthcare }}</option>
                                            @foreach($dropdownOptions as $option)
                                                 @if($option->Enname != $subservice->Healthcare) <!-- Assuming $selectedValue contains the currently selected ID -->
                                                <option value="{{ $option->id . ':' .$option->Enname }}">{{ $option->Enname }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <button type="submit" class="btn zw_submit zw_submit_wh">Submit</button>
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
  $(document).ready(function() {
    $('#packageinputhidenshow').hide();
     var Servicetype = document.getElementById('Servicetype').value;
            // Show or hide the selectedValuesInput based on the selected value
            if (Servicetype === 'Package') {
                //$('#Serviceinputhidenshow').show();
                $('#packageinputhidenshow').show();
            } 
            else{
                $('#packageinputhidenshow').hide();
            }

            $('[name="Servicetype"]').change(function() {
            var value = $(this).val();
            // Show or hide the selectedValuesInput based on the selected value
            if (value === 'Package') {
                $('#packageinputhidenshow').show();
               
            } else {
                $('#packageinputhidenshow').hide(); 
            }
          })
        });
</script>
</body>

</html>