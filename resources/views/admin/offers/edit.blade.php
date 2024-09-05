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
                    <a href="{{ route('offers.index') }}" class="poppins-medium zw_18 zw_text_333333 zw_a zw_back">
                        <i class="fas fa-arrow-left right mr-2"></i>Back
                    </a>
                </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <h3 class="poppins-semibold zw_34 zw_text_AF2245 mt-3">Edit Offer</h3>
            </div>
            <!-- left column -->
            <div class="col-md-12">
                        <!-- <div class="pull-right">
                            <a class="btn btn-primary m-2" href="{{ route('offers.index') }}"> Back</a>
                        </div> -->
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <!-- <div class="card-header">
                                <h3 class="card-title">Edit Offer</h3>
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
                            <form action="{{ route('offers.update',$offer->id) }}" method="POST" enctype="multipart/form-data">
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
                                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputName">Name</label>
                                      <input type="text" name="Name"  value="{{ $offer->Name }}" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputName" placeholder="Enter Name">
                                  </div>
                                  <div class="form-group col-md-6">
                                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputCode">Code <span style="color: red;">*</span></label>
                                      <input type="text" name="Code"  value="{{ $offer->Code }}" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputCode" placeholder="Enter Code">
                                  </div>
                              </div>
                              <div class="form-row zw_form_row">
                                <div class="form-group col-md-6">
                                  <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputPercantage">Percantage <span style="color: red;">*</span></label>
                                  <input type="text" name="Percantage"  value="{{ $offer->Percantage }}" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputPercantage" placeholder="Enter Percantage">
                              </div>
                              <div class="form-group col-md-6">
                                  <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputCount">Count <span style="color: red;">*</span></label>
                                  <input type="text" name="Count"  value="{{ $offer->Count }}" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputCount" placeholder="Enter Count">
                              </div>
                          </div>
                          <div class="form-row zw_form_row">
                            <div class="form-group col-md-6">
                              <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputType">Select Type <span style="color: red;">*</span></label>
                              <select name="Type" class="custom-select poppins-regular zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none">
                                 <option value="{{ $offer->Type }}" selected="selected">{{ $offer->Type }}</option>
                                 @if($offer->Type == 'Single')
                                 <option value="Package">Package</option>
                                 @else
                                 <option value="Single">Single</option>   
                                 @endif
                             </select>
                         </div>
                         <div class="form-group col-md-6">
                          <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputServicename">Service Name <span style="color: red;">*</span></label>
                          <select name="Servicename" class="custom-select poppins-regular zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none">
                            <option value="{{ $offer->Servicename }}" selected="selected">{{ $offer->Servicename }}</option>
                            @foreach($sdropdownOptions as $option)
                            @if($option->Enname != $offer->Servicename) <!-- Assuming $selectedValue contains the currently selected ID -->
                            <option value="{{ $option->id . ':' . $option->Enname }}">{{ $option->Enname }}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-row zw_form_row">
                    <div class="form-group col-md-6">
                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputSubservicename">Select Sub Servicename <span style="color: red;">*</span></label>
                      <select name="Subservicename" class="custom-select poppins-regular zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none">
                        <option value="{{ $offer->Subservicename }}" selected="selected">{{ $offer->Subservicename }}</option>
                        @foreach($ssdropdownOptions as $option)
                        @if($option->Enname != $offer->Subservicename) <!-- Assuming $selectedValue contains the currently selected ID -->
                        <option value="{{ $option->id . ':' . $option->Enname }}">{{ $option->Enname }}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-6">
                  <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputHealthcare">Select Healthcare <span style="color: red;">*</span></label>
                  <select name="Healthcare" class="custom-select poppins-regular zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none">
                    <option value="{{ $offer->Healthcarename }}" selected="selected">{{ $offer->Healthcarename}}</option>
                    @foreach($spOptions as $option)
                    @if($option->Enname != $offer->Healthcarename) <!-- Assuming $selectedValue contains the currently selected ID -->
                    <option value="{{ $option->id . ':' . $option->Enname }}">{{ $option->Enname }}</option>
                    @endif
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-row zw_form_row">
            <div class="form-group col-md-6">
              <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputStartdate">Start Date <span style="color: red;">*</span></label>
              <input type="date" name="Startdate"  value="{{ $offer->Startdate }}" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputStartdate" placeholder="Enter Start Date">
          </div>
          <div class="form-group col-md-6">
              <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputEnddate">End Date <span style="color: red;">*</span></label>
              <input type="date" name="Startdate"  value="{{ $offer->Enddate }}" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputEnddate" placeholder="Enter Start Date">
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
</body>
</html>