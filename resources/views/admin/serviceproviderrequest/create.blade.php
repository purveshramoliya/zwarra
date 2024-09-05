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
            <a href="{{ route('serviceproviderrequest.index') }}" class="poppins-medium zw_18 zw_text_333333 zw_a zw_back">
              <i class="fas fa-arrow-left right mr-2"></i>Back
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <h3 class="poppins-semibold zw_34 zw_text_AF2245 mt-3">Add new Healthcare request</h3>
          </div>
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
             
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
              <form action="{{ route('serviceproviderrequest.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-row zw_form_row">
                    <div class="form-group col-md-6">
                    <label for="exampleInputEmail1" class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">Healthcare Name <span style="color: red;">*</span></label>
                    <input type="text" name="healthcare" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputErname" placeholder="Enter Enname">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="exampleInputEmail1" class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">Register Number</label>
                    <input type="text" name="registernumber" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputarname" placeholder="Enter Arname">
                    </div>
                    
                  </div>
                  <div class="form-row zw_form_row">
                    <div class="form-group col-md-6">
                      <label for="exampleInputEmail1" class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">Email address <span style="color: red;">*</span></label>
                      <input type="email" name="email" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputphone" class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">Phone <span style="color: red;">*</span></label>
                      <input type="phone" name="phone" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputphone" placeholder="Enter phone">
                    </div>
                  </div>
                  <div class="form-row zw_form_row">
                  <div class="form-group col-md-6">
                    <label for="multipleSelectField" class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">Select Service</label>
                       <select name="service_type[]" id="service_type" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" multiple>
                        <option value="Home visit">Home visit</option>
                        <option value="Tele medicine">Tele medicine</option>
                        <option value="All">All</option>
                        <option value="Other">Other</option>                    
                    </select>

                    <div id="selectedValues"></div>
                    <input type="hidden" id="selectedValuesInput" name="selectedValues">
                  </div>
                  <div class="form-group col-md-6">
                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputArdescription">Description <span style="color: red;">*</span></label>
                      <textarea name="description" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputArdescription" rows="2" placeholder="Enter Ar Description"></textarea>
                    </div>
                </div>
                  <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn zw_submit zw_submit_wh">Submit</button>
                    </div> 
                  </div>
                </div>
                <!-- /.card-body -->
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
        selectedValues += value; // Concatenate value and text with a separator
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

    $('#service_type').on('change', function() {
        var selectedValues = $(this).val();
        //$('#selectedValues').empty();
        $.each(selectedValues, function(index, value) {
            var text = $('#service_type option[value="' + value + '"]').text();
            addValue(value, text);
        });
    });
});

</script>
</body>

</html>