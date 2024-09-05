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
            <a href="{{ route('services.index') }}" class="poppins-medium zw_18 zw_text_333333 zw_a zw_back">
              <i class="fas fa-arrow-left right mr-2"></i>Back
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <h3 class="poppins-semibold zw_34 zw_text_AF2245 mt-3">Add new service</h3>
          </div>
          <!-- left column -->
          <div class="col-md-12">
            <!-- <div class="pull-right">
              <a class="btn btn-primary m-2" href="{{ route('services.index') }}"> Back</a>
            </div> -->
            <!-- general form elements -->
            <div class="card card-primary">
              <!-- <div class="card-header m-2">
                <h3 class="card-title">Add new service provider</h3>
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
              <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$id}}">
                <div class="card-body">
                  <div class="form-row zw_form_row">
                    <div class="form-group col-md-6">
                      <label for="exampleInputErname" class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">En Healthcare</label>
                      <select name="Enhealthcare" class="custom-select poppins-regular zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none">
                         <option value="">Select Option</option>
                        @foreach($dropdownOptions as $option)
                        <option value="{{ $option->id . ':' . $option->Enname }}">{{ $option->Enname }}</option>
                        @endforeach
                      </select>
                      </select>

                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputArhealthcare" class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">Ar Healthcare <span style="color: red;">*</span></label>
                      <!-- <input type="text" name="Arhealthcare" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputArhealthcare" placeholder="Enter Ar Healthcare"> -->
                      <select name="Arhealthcare" class="custom-select poppins-regular zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none">
                        <option>Arhealthcare</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-row zw_form_row">
                    <div class="form-group col-md-6">
                      <label for="exampleInputEnservicename" class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">En Servicename <span style="color: red;">*</span></label>
                      <!-- <input type="text" name="Enservicename" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputEnservicename" placeholder="Enter En Servicename"> -->
                      <select name="Enservicename" class="custom-select poppins-regular zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none">
                         <option value="">Select Option</option>
                        @foreach($sdropdownOptions as $option)
                        <option value="{{ $option->id . ':' . $option->Enname }}">{{ $option->Enname }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputArservicename" class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">Ar Servicename <span style="color: red;">*</span></label>
                      <!-- <input type="text" name="Arservicename" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputArservicename" placeholder="Enter Ar Servicename"> -->
                      <select name="Arservicename" class="custom-select poppins-regular zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none">
                        <option>Arservicename</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-row zw_form_row">
                    <div class="form-group col-md-6">
                      <label for="exampleInputEnsubservicename" class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">En Sub Servicename <span style="color: red;">*</span></label>
                      <!-- <input type="text" name="Ensubservicename" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputEnsubservicename" placeholder="Enter En Sub Servicename"> -->
                      <select name="Ensubservicename" class="custom-select poppins-regular zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none">
                        <option value="">Select Option</option>
                        @foreach($ssdropdownOptions as $option)
                        <option value="{{ $option->id . ':' . $option->Enname }}">{{ $option->Enname }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputArsubservicename" class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">Ar Sub Servicename <span style="color: red;">*</span></label>
                      <!-- <input type="text" name="Arsubservicename" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputArsubservicename" placeholder="Enter Ar Sub Servicename "> -->
                      <select name="Arsubservicename" class="custom-select poppins-regular zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none">
                        <option>Arsubservicename</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-row zw_form_row">
                    <div class="form-group col-md-6">
                      <label for="exampleInputEstimatedtime" class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">Estimated Time for Service <span style="color: red;">*</span></label>
                     <select name="Estimatedtime" class="custom-select poppins-regular zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none">
                        <option value="">Select Option</option>
                        <option value="30">30</option>
                        <option value="45">45</option>
                        <option value="60">60</option>
                        <option value="90">90</option>
                        <option value="120">120</option>
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputPrice" class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">Price <span style="color: red;">*</span></label>
                      <input type="text" name="Price" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputPrice" placeholder="Enter Price ">
                    </div>
                  </div>
                  <div class="form-row zw_form_row">
                    <div class="form-group col-md-6">
                      <label for="exampleInputNewprice" class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535"> New Price <span style="color: red;">*</span></label>
                      <input type="text" name="Newprice" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputNewprice" placeholder="Enter New Price ">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputGender" class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">Gender <span style="color: red;">*</span></label>
                      <select name="Gender" class="custom-select poppins-regular zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none">
                        <option value="">Select</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
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
</body>

</html>