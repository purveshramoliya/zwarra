@include('healthcare.layouts.headermodule')

<body class="hold-transition sidebar-mini zw_sidebar">
    <div class="wrapper">
        @include('healthcare.layouts.header')
        @include('healthcare.layouts.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="row mb-2">
                    <div class="col-sm-12 zw_back">
                        <a href="{{ route('healthcare.services.index') }}"
                            class="poppins-medium zw_18 zw_text_333333 zw_a zw_back">
                            <i class="fas fa-arrow-left right mr-2"></i>Back
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="poppins-semibold zw_34 zw_text_AF2245 mt-3">Edit Service</h3>
                    </div>
                    <!-- left column -->
                    <div class="col-md-12">

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
                            <form action="{{ route('healthcare.services.update', ['id' => $subservices->id]) }}"
                                method="POST">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-row zw_form_row">
                                        <div class="form-group col-md-6">
                                            <label
                                                class="zw_label_height zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535"
                                                for="exampleInputService">Service name <span
                                                    style="color: red;">*</span></label>
                                            <select name="Service" class="form-control zw_form_control mb-4 zw_17">
                                                <option value="">Select Option</option>
                                                @foreach ($sdropdownOptions as $option)
                                                    <option value="{{ $option->id . ':' . $option->Enname }}"
                                                        {{ old('Service', $subservices->Mainservicename) == $option->Enname ? 'selected' : '' }}>
                                                        {{ $option->Enname }}
                                                    </option>
                                                @endforeach
                                            </select>

                                        </div>
                                        <div class="form-group col-md-6">
                                            <label
                                                class="zw_label_height zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535"
                                                for="exampleInputServicetype">Sub Service
                                                name <span style="color: red;">*</span></label>
                                            <select name="Servicetype" class="form-control zw_form_control mb-4 zw_17">
                                                <option value="">Select</option>
                                                <option value="{{ $subservices->Servicetype }}" selected="selected">{{ $subservices->Servicetype }}</option>
                                                @if ($subservices->Servicetype == 'Single')
                                                    <option value="Package">Package</option>
                                                @else
                                                    <option value="Single">Single</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row zw_form_row hide" id="Ennameinputhidenshow">
                                        <div class="form-group col-md-6">
                                            <label
                                                class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535"
                                                for="exampleInputEnname">En name</label>
                                            <input type="text" name="Enname"
                                                class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control"
                                                id="exampleInputEnname" value="{{ $subservices->Enname }}"
                                                placeholder="Enter Enname">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label
                                                class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535"
                                                for="exampleInputArname">Ar name <span
                                                    style="color: red;">*</span></label>
                                            <input type="text" name="Arname"
                                                class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control"
                                                id="exampleInputArname" value="{{ $subservices->Arname }}"
                                                placeholder="Enter Arname">
                                        </div>
                                    </div>
                                    <!-- <div class="form-row zw_form_row hide" id="Ennameinputhidenshow">
                                        <div class="form-group col-md-6">
                                            <label
                                                class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535"
                                                for="exampleInputEnname">En name</label>
                                            <input type="text" name="Enname"
                                                class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control"
                                                id="exampleInputEnname" value="{{ $subservices->Enname }}"
                                                placeholder="Enter Enname">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label
                                                class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535"
                                                for="exampleInputArname">Ar name <span
                                                    style="color: red;">*</span></label>
                                            <input type="text" name="Arname"
                                                class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control"
                                                id="exampleInputArname" value="{{ $subservices->Arname }}"
                                                placeholder="Enter Arname">
                                        </div>
                                    </div> -->
                                    <div class="form-row zw_form_row hide" id="packageinputhidenshow">
                                        <div class="form-group col-md-6">
                                            <label
                                                class="zw_label_height zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535"
                                                for="exampleInputPackagename">Package
                                                name</label>
                                            <input type="text" name="Packagename"
                                                class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control"
                                                id="exampleInputPackagename" value="{{ $subservices->Packagename }}"
                                                placeholder="Enter Package name">
                                        </div>
                                    </div>
                                    <div class="form-row zw_form_row">
                                        <div class="form-group col-md-6">
                                            <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputEndescription">
                                                Estimated time for a service <span style="color: red;">*</span>
                                            </label>
                                            <select name="Estimatetime" class="form-control zw_form_control mb-4 zw_17">
                                                <option value="">Select Time</option>
                                                <option value="00:30" {{ old('Estimatetime', $subservices->Estimated_time_for_a_service) == '00:30' ? 'selected' : '' }}>00:30</option>
                                                <option value="00:45" {{ old('Estimatetime', $subservices->Estimated_time_for_a_service) == '00:45' ? 'selected' : '' }}>00:45</option>
                                                <!-- Add more options as needed -->
                                            </select>
                                        </div>
                                        
                                        <div class="form-group col-md-6">
                                            <label
                                                class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535"
                                                for="exampleInputPrice">Price <span style="color: red;">*</span></label>
                                            <input name="Price"
                                                class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control"
                                                id="exampleInputPrice" value="{{ $subservices->Price }}"
                                                placeholder="Enter Price">
                                        </div>
                                    </div>
                                    <div class="form-row zw_form_row">
                                        <div class="form-group col-md-6">
                                            <label
                                                class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535"
                                                for="exampleInputEninstrucation">Change
                                                service price <span style="color: red;">*</span></label>
                                            <input type="text" name="Changeserviceprice"
                                                class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control"
                                                id="exampleInputEninstrucation"
                                                value="{{ $subservices->Change_service_price }}" rows="2"
                                                placeholder="100">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label
                                                class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535"
                                                for="exampleInputArinstrucation">Gender
                                                <span style="color: red;">*</span></label>
                                            <select name="Gender" class="form-control zw_form_control mb-4 zw_17">
                                                <option value="">Select Gender</option>
                                                <option value="Male"
                                                    {{ old('Gender', $subservices->Gender) == 'Male' ? 'selected' : '' }}>
                                                    Male</option>
                                                <option value="Female"
                                                    {{ old('Gender', $subservices->Gender) == 'Female' ? 'selected' : '' }}>
                                                    Female</option>
                                                <option value="Other"
                                                    {{ old('Gender', $subservices->Gender) == 'Other' ? 'selected' : '' }}>
                                                    Other</option>
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
                            {{-- <form action="{{ route('healthcare.services.update', ['id' => $subservices->id]) }}" method="POST" enctype="multipart/form-data">
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
                                                <option value="Lab Test" {{ $subservices->Testcategory == 'Lab Test' ? 'selected' : '' }}>Lab Test</option>
                                                <option value="Body Test" {{ $subservices->Testcategory == 'Body Test' ? 'selected' : '' }}>Body Test</option>
                                            </select>
                                        </div>
                                         <div class="form-group col-md-6">
                                        <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputServicetype">Service Type <span style="color: red;">*</span></label>
                                        <select name="Servicetype" class="custom-select poppins-regular zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none" id="Servicetype">
                                            <option value="{{ $subservices->Servicetype }}" selected="selected">{{ $subservices->Servicetype }}</option>
                                            
                                            @if ($subservices->Servicetype == 'Single')
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
                                            <input type="text" name="Enname" value="{{ $subservices->Enname }}" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputEnname" placeholder="Enter Enname">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputArname">Ar name <span style="color: red;">*</span></label>
                                            <input type="text" name="Arname" value="{{ $subservices->Arname }}" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputArname" placeholder="Enter Arname">
                                        </div>
                                    </div>
                                 
                                    <div class="form-row zw_form_row">
                                        <div class="form-group col-md-6">
                                          <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputService">Service <span style="color: red;">*</span></label>
                                          <select name="Service" class="custom-select poppins-regular zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none">
                                            <option value="{{ $subservices->Service . ':' . $subservices->Mainservicename}}" selected="selected">{{ $subservices->Mainservicename }}</option>
                                            @foreach ($dropdownOptions as $option)
                                                 @if ($option->Enname != $subservices->Mainservicename) <!-- Assuming $selectedValue contains the currently selected ID -->
                                                <option value="{{ $option->id . ':' . $option->Enname }}">{{ $option->Enname }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6 hide" id="packageinputhidenshow">
                                      <label class="zw_label_height zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputPackagename">Package name</label>
                                      <input type="text" name="Packagename" value="{{ $subservices->Packagename }}" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputPackagename" placeholder="Enter Package name">
                                    </div>
                                </div>
                                   
                                    <div class="form-row zw_form_row">
                                        <div class="form-group col-md-6">
                                            <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputEndescription">En Description <span style="color: red;">*</span></label>
                                            <textarea name="Endescription" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputEndescription" rows="2" placeholder="Enter En Description">{{ $subservices->Endescription }}</textarea>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputArdescription">Ar Description <span style="color: red;">*</span></label>
                                            <textarea name="Ardescription" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputArdescription" rows="2" placeholder="Enter Ar Description">{{ $subservices->Ardescription }}</textarea>
                                        </div>
                                    </div>
                                <div class="form-row zw_form_row">
                                    <div class="form-group col-md-6">
                                        <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputEninstrucation">En Instrucation <span style="color: red;">*</span></label>
                                        <textarea name="Eninstrucation" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputEninstrucation" rows="2" placeholder="Enter En Instrucation">{{ $subservices->Eninstrucation }}</textarea>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputArinstrucation">Ar Instrucation <span style="color: red;">*</span></label>
                                        <textarea name="Arinstrucation" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputArinstrucation" rows="2" placeholder="Enter Ar Instrucation">{{ $subservices->Arinstrucation }}</textarea>
                                    </div>
                                </div>
                                <div class="form-row zw_form_row">
                                    <div class="form-group col-md-6">
                                        <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputEntitle">En available test title</label>
                                        <input type="text" name="Entitle" value="{{ $subservices->Entitle }}" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputEntitle" placeholder="Enter En Title">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputArtitle">Ar available test title <span style="color: red;">*</span></label>
                                        <input type="text" name="Artitle" value="{{ $subservices->Artitle }}" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputArtitle" placeholder="Enter Ar Title">
                                    </div>
                                </div>
                                <div class="form-row zw_form_row">
                                    <div class="form-group col-md-6">
                                        <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputPrice">Price <span style="color: red;">*</span></label>
                                        <input name="Price" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" value="{{ $subservices->Price }}" id="exampleInputPrice" placeholder="Enter Price">
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
        </form> --}}
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
        // Initially hide all sections
        $('#Ennameinputhidenshow').hide();
        $('#packageinputhidenshow').hide();

        // Event listener for change on the Servicetype dropdown
        $('[name="Servicetype"]').change(function() {
            var value = $(this).val();

            if (value === 'Package') {
                $('#packageinputhidenshow').show();
                $('#Ennameinputhidenshow').hide();
            } else if (value === 'Single') {
                $('#Ennameinputhidenshow').show();
                $('#packageinputhidenshow').hide();
            } else {
                $('#packageinputhidenshow').hide();
                $('#Ennameinputhidenshow').hide();
            }
        }).trigger('change'); // Trigger change event on page load to set initial visibility

        // Add input value to the list
        $('#addInputValue').click(function() {
            var value = $('#textInput').val().trim();
            if (value && !$('#selectedValuesInput').val().includes(value)) {
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
            selectedValues = selectedValues.filter(item => item); // Remove empty items
            selectedValues.push(value);
            $('#selectedValuesInput').val(selectedValues.join(','));
        }

        // Remove a selected value on click
        $(document).on('click', '.delete', function() {
            var value = $(this).parent().text().trim();
            removeSelectedValue(value);
            $(this).parent().remove();
        });

        function removeSelectedValue(value) {
            var selectedValues = $('#selectedValuesInput').val().split(',');
            selectedValues = selectedValues.filter(item => item !== value);
            $('#selectedValuesInput').val(selectedValues.join(','));
        }
    });
</script>
</body>

</html>