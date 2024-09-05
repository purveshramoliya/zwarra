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
            <h3 class="poppins-semibold zw_34 zw_text_AF2245 mt-3">Add New Sub Service</h3>
          </div>
          <!-- left column -->
          <div class="col-md-12">
            <!-- <div class="pull-right">
              <a class="btn btn-primary m-2" href="{{ route('subservices.index') }}"> Back</a>
            </div> -->
            <!-- general form elements -->
            <div class="card card-primary">
              <!-- <div class="card-header m-2">
                <h3 class="card-title">Add New Mainservice </h3>
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
              <form action="{{ route('subservices.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                 <input type="hidden" name="Healthcareid" value="{{$id}}">
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
                      <label for="exampleInputtestcategory" class="zw_label_height zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">Test Category <span style="color: red;">*</span></label>
                      <select name="Testcategory" class="custom-select poppins-regular zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none">
                        <option value="">Select</option>
                        <option value="Lab Test" selected>Lab Test</option>
                        <option value="Body Test">Body Test</option>
                      </select>
                    </div>
                     <div class="form-group col-md-6">
                      <label class="zw_label_height zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputServicetype">Service Type <span style="color: red;">*</span></label>
                      <select name="Servicetype" class="custom-select poppins-regular zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none">
                        <option value="">Select</option>
                        <option value="Single">Single</option>
                        <option value="Package">Package</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-row zw_form_row hide" id="Ennameinputhidenshow">
                    <div class="form-group col-md-6">
                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputEnname">En name</label>
                      <input type="text" name="Enname" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputEnname" placeholder="Enter Enname">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputArname">Ar name <span style="color: red;">*</span></label>
                      <input type="text" name="Arname" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputArname" placeholder="Enter Arname">
                    </div>
                  </div>
                   <div class="form-row zw_form_row hide" id="packageinputhidenshow">
                    <div class="form-group col-md-6">
                      <label class="zw_label_height zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputPackagename">Package name</label>
                      <input type="text" name="Packagename" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputPackagename" placeholder="Enter Package name">
                    </div>
                  </div>
                   <div class="form-row zw_form_row">
                    <div class="form-group col-md-6">
                      <label class="zw_label_height zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputService">Service <span style="color: red;">*</span></label>
                      <select name="Service" class="custom-select poppins-regular zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none">
                        <option value="">Select Option</option>
                        @foreach($sdropdownOptions as $option)
                        <option value="{{ $option->id . ':' . $option->Enname }}">{{ $option->Enname }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group col-md-6 hide" id="Serviceinputhidenshow">
                      <label class="zw_label_height zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputService">Service Package <span style="color: red;">*</span></label>
                      <div id="selectedValuesContainer"></div>
                      <input type="hidden" name="selectedValues" id="selectedValuesInput">
                      <input type="text" name="Packageservices" id="textInput" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputPrice" placeholder="Enter Package Service">
                      <!-- purvesh css-->
                      <button class="btn zw_btn packageservicebtn" type="button" id="addInputValue">Add Package Service</button>
                    </div>
                  </div>
                   
                  <div class="form-row zw_form_row">
                    <div class="form-group col-md-6">
                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputEndescription">En Description <span style="color: red;">*</span></label>
                      <textarea name="Endescription" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputEndescription" rows="2" placeholder="Enter En Description"></textarea>
                    </div>
                    <div class="form-group col-md-6">
                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputArdescription">Ar Description <span style="color: red;">*</span></label>
                      <textarea name="Ardescription" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputArdescription" rows="2" placeholder="Enter Ar Description"></textarea>
                    </div>
                  </div>
                  <div class="form-row zw_form_row">
                    <div class="form-group col-md-6">
                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputEninstrucation">En Instrucation <span style="color: red;">*</span></label>
                      <textarea name="Eninstrucation" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputEninstrucation" rows="2" placeholder="Enter En Instrucation"></textarea>
                    </div>
                    <div class="form-group col-md-6">
                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputArinstrucation">Ar Instrucation <span style="color: red;">*</span></label>
                      <textarea name="Arinstrucation" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputArinstrucation" rows="2" placeholder="Enter Ar Instrucation"></textarea>
                    </div>
                  </div>
                  <div class="form-row zw_form_row">
                    <div class="form-group col-md-6">
                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputEntitle">En available test title</label>
                      <input type="text" name="Entitle" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputEntitle" placeholder="Enter En Title">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputArtitle">Ar available test title <span style="color: red;">*</span></label>
                      <input type="text" name="Artitle" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputArtitle" placeholder="Enter Ar Title">
                    </div>
                  </div>
                  <div class="form-row zw_form_row">
                    <div class="form-group col-md-6">
                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputPrice">Price <span style="color: red;">*</span></label>
                      <input name="Price" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputPrice" placeholder="Enter Price">
                    </div>
                    @if(empty($id))
                    <div class="form-group col-md-6">
                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputHealthcare">Healthcare <span style="color: red;">*</span></label>
                       <select name="Healthcare" class="custom-select poppins-regular zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none">
                        <option value="">Select Option</option>
                        @foreach($dropdownOptions as $option)
                        <option value="{{ $option->id . ':' . $option->Enname }}">{{ $option->Enname }}</option>
                        @endforeach
                      </select>
                    </div>
                    @endif
                  </div>
              
                  <!-- <div class="form-row zw_form_row">
                    <div class="form-group col-md-4">
                       <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535"  for="exampleInputStatus">Status <span style="color: red;">*</span></label>
                      <input type="radio" name="Status" value="1" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputStatus" placeholder="Status">
                    </div>
                  </div> -->
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
    $('#addInputValue').click(function() {
      var value = $('#textInput').val();
      if (value.trim() !== '') {
        addValue(value);
        $('#textInput').val('');
      }
    });

    function addValue(value) {
      $('#selectedValuesContainer').append('<div class="selectedValue">' + value + '<span class="delete">&times;</span></div>');
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


</body>

</html>