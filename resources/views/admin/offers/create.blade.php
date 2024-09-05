 @include('admin.layouts.headermodule')
 <style type="text/css">
   #selectedValues {
  padding: 20px;
  background: #f7e9ec;
}


select {
  width: 300px;
}
 </style>
  <style>
        .selectedValue {
            display: inline-block;
            background-color: #e0e0e0;
            padding: 5px;
            margin: 2px;
            border-radius: 3px;
        }
        .selectedValue .delete {
            cursor: pointer;
            margin-left: 5px;
            color: red;
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
        <div class="row mb-2">
          <div class="col-sm-12 zw_back">
            <a href="{{ route('offers.index') }}" class="poppins-medium zw_18 zw_text_333333 zw_a zw_back">
              <i class="fas fa-arrow-left right mr-2"></i>Back
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <h3 class="poppins-semibold zw_34 zw_text_AF2245 mt-3">Add Offer</h3>
          </div>
          <!-- left column -->
          <div class="col-md-12">
            <!-- <div class="pull-right">
              <a class="btn btn-primary m-2" href="{{ route('doctorpositions.index') }}"> Back</a>
            </div> -->
            <!-- general form elements -->
            <div class="card card-primary">
              <!-- <div class="card-header m-2">
                <h3 class="card-title">Add Doctor Position </h3>
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
              <form action="{{ route('offers.store') }}"  method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-row zw_form_row">
                    <div class="form-group col-md-6">
                      <label for="exampleInputlogo" class="zw_label_height zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">Upload logo</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="Logo" class="custom-file-input" id="exampleInputlogo" onchange="updateFileName(this)">
                          <label class="custom-file-label zw_form_control" for="exampleInputlogo">Choose file</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group col-md-6">
                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputName">Name <span style="color: red;">*</span></label>
                      <input type="text" name="Name" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputArname" placeholder="Enter Name">
                    </div>
                  </div>
                  <div class="form-row zw_form_row">
                    <div class="form-group col-md-6">
                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputCode">Code <span style="color: red;">*</span></label>
                      <input type="text" name="Code" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputCode" placeholder="Enter Code">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputPercantage">Percantage <span style="color: red;">*</span></label>
                      <input type="text" name="Percantage" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputPercantage" placeholder="Enter Percantage">
                    </div>
                  </div>
                   <div class="form-row zw_form_row">
                    <div class="form-group col-md-6">
                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputCount">Count <span style="color: red;">*</span></label>
                      <input type="text" name="Count" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputCode" placeholder="Enter Count">
                    </div>
                    <div class="form-group col-md-6">
                       <label for="exampleInputType" class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">Select Type <span style="color: red;">*</span></label>
                      <select name="Type" class="custom-select poppins-regular zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none">
                        <option value="">Select</option>
                        <option value="Single">Single</option>
                        <option value="Package">Package</option>
                      </select>
                    </div>
                  </div>
                   <div class="form-row zw_form_row">
                    <div class="form-group col-md-6">
                       <label for="exampleInputServicename" class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">Select Service Name <span style="color: red;">*</span></label>
                      <select name="Servicename" class="custom-select poppins-regular zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none">
                        <option value="">Select Option</option>
                        @foreach($sdropdownOptions as $option)
                        <option value="{{$option->Enname }}">{{ $option->Enname }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                       <label for="exampleInputSubservicename" class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">Select Sub Service Name <span style="color: red;">*</span></label>
                     <select name="Subservicename" class="custom-select poppins-regular zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none">
                        <option value="">Select Option</option>
                        @foreach($ssdropdownOptions as $option)
                        <option value="{{$option->Enname }}">{{ $option->Enname }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="form-row zw_form_row">
                    <div class="form-group col-md-6">
                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputCode">Start Date <span style="color: red;">*</span></label>
                      <input type="date" name="StartDate" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputCode" placeholder="Enter Start Date">
                    </div>
                     <div class="form-group col-md-6">
                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputEnddate">End Date <span style="color: red;">*</span></label>
                      <input type="date" name="EndDate" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputCode" placeholder="Enter End Date">
                    </div>
                  </div>
                  <div class="form-row zw_form_row">
                    <div class="form-group col-md-6">
                       <label for="exampleInputHealthcare" class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">Select Healthcare<span style="color: red;">*</span></label>
                       <select name="Healthcare[]" id="Healthcare" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" multiple>
                                              
                        <!-- Options will be populated dynamically -->
                    </select>

                    <div id="selectedValues"></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <button type="submit" class="btn zw_submit zw_submit_wh">Submit</button>
                    </div>
                  </div>
                </div>
                 <input type="hidden" id="selectedValuesInput" name="selectedValues">
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
 $(document).ready(function() {
    function addValue(value, text) {
        var exists = false;
        $('#selectedValues .selectedValue').each(function() {
            if ($(this).data('value') == value) {
                exists = true;
                return false;
            }
        });

        if (!exists) {
            $('#selectedValues').append('<div class="selectedValue" data-value="' + value + '">' + text + '<span class="delete">&times;</span></div>');
            appendSelectedValues(value,text);
        } else {
            alert('Value already exists in the selected list.');
        }
    }

    function appendSelectedValues(value, text) {
        var selectedValues = $('#selectedValuesInput').val();
        if (selectedValues !== '') {
            selectedValues += ',';
        }
        selectedValues += value + ':' + text; // Concatenate value and text with a separator
        $('#selectedValuesInput').val(selectedValues);
    }

    function removeSelectedValue(value) {
        var selectedValues = $('#selectedValuesInput').val().split(',');
        var index = selectedValues.indexOf(value);
        if (index !== -1) {
            selectedValues.splice(index, 1);
        }
        $('#selectedValuesInput').val(selectedValues.join(','));
    }

    $(document).on('click', '.delete', function() {
        var value = $(this).parent().data('value');
        removeSelectedValue(value);
        $(this).parent().remove();
    });

    $.ajax({
        url: '{{ route("fetch.options") }}',
        success: function(data) {
            $.each(data, function(index, option) {
                $('#Healthcare').append('<option value="' + option.id + '">' + option.Enname + '</option>');
            });
        }
    });

    $('#Healthcare').on('change', function() {
        var selectedValues = $(this).val();
        //$('#selectedValues').empty();
        $.each(selectedValues, function(index, value) {
            var text = $('#Healthcare option[value="' + value + '"]').text();
            addValue(value, text);
        });
    });
});

</script>
</body>

</html>