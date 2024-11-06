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
            <a href="{{ route('healthcare.services.index') }}" class="poppins-medium zw_18 zw_text_333333 zw_a zw_back">
              <i class="fas fa-arrow-left right mr-2"></i>Back
            </a>
          </div>
        </div>
        <div class="row">
          <!-- <div class="col-sm-12">
            <h3 class="poppins-semibold zw_34 zw_text_AF2245 mt-3">Request to add a new service</h3>
          </div> -->
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
              <div class="inline-container mt-3 mb-3">
                <img src="/images/Black.png" alt="Black Image" class="inline-image">
                <h3 class="poppins-semibold zw_34 zw_text_AF2245 mt-3 text-center">Request to add a new service</h3>
              </div>

              <!-- form start -->
              <form action="{{ route('healthcare.services.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-row zw_form_row hide" id="Ennameinputhidenshow">
                    <div class="form-group col-md-6">
                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputEnname">EN HealthCare <span style="color: red;">*</span></label>
                      <input type="text" name="EnHealthCare" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputEnname" placeholder="EN HealthCare">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputArname">AR HealthCare <span style="color: red;">*</span></label>
                      <input type="text" name="ARHealthCare*" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputArname" placeholder="AR HealthCare">
                    </div>
                  </div>
                  <div class="form-row zw_form_row">
                    <div class="form-group col-md-6">
                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputEndescription">EN Service name <span style="color: red;">*</span></label>
                      <input type="text" name="Endescription" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputEndescription" rows="2" placeholder=" EN Service name">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputArdescription">AR Service name<span style="color: red;">*</span></label>
                      <input type="text" name="Ardescription" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputArdescription" rows="2" placeholder="الرعاىة الصحية">
                    </div>
                  </div>
                  <div class="form-row zw_form_row">
                    <div class="form-group col-md-6">
                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputEninstrucation">EN Sub Service name <span style="color: red;">*</span></label>
                      <input type="text" name="Endescription" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputEndescription" rows="2" placeholder=" EN Service name">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputArinstrucation">AR Sub Service name <span style="color: red;">*</span></label>
                      <input type="text" name="Arinstrucation" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputArinstrucation" rows="2" placeholder="الرعاىة الصحية">
                    </div>
                  </div>
                  <div class="form-row zw_form_row">
                    <div class="form-group col-md-6">
                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputEntitle">Estimated time for service <span style="color: red;">*</span></label>
                      <input type="text" name="Entitle" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputEntitle" placeholder="Enter En Title">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputPrice">Price <span style="color: red;">*</span></label>
                      <input name="Price" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputPrice" placeholder="Enter Price">
                    </div>
                  </div>
                  <div class="form-row zw_form_row">
                    <div class="form-group col-md-6">
                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputPrice">Gender<span style="color: red;">*</span> </label>
                      <select name="Servicetype" class="form-control zw_form_control">
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                      </select>
                    </div>
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
</body>

</html>