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
            <a href="{{ route('doctorrequest.index') }}" class="poppins-medium zw_18 zw_text_333333 zw_a zw_back">
              <i class="fas fa-arrow-left right mr-2"></i>Back
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <h3 class="poppins-semibold zw_34 zw_text_AF2245 mt-3">Add New Join Doctor Request</h3>
          </div>
          <!-- left column -->
          <div class="col-md-12">
            <!-- <div class="pull-right">
              <a class="btn btn-primary m-2" href="{{ route('doctorrequest.index') }}"> Back</a>
            </div> -->
            <!-- general form elements -->
            <div class="card card-primary">
              <!-- <div class="card-header m-2">
                <h3 class="card-title">Add New Join Doctor Request</h3>
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
              <form action="{{ route('doctorrequest.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                 <div class="form-row zw_form_row">
                    <div class="form-group col-md-6">
                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputErname">En name</label>
                      <input type="text" name="Enname" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputErname" placeholder="Enter ername">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputarname">Ar name <span style="color: red;">*</span></label>
                      <input type="text" name="Arname" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputarname" placeholder="Enter arname">
                    </div>
                  </div>
                 <div class="form-row zw_form_row">
                    <div class="form-group col-md-6">
                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputEmail">Email address <span style="color: red;">*</span></label>
                      <input type="email" name="Email" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputEmail" placeholder="Enter email">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputphone">Phone <span style="color: red;">*</span></label>
                      <input type="phone" name="Phone" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputphone" placeholder="Enter phone">
                    </div>
                  </div>
                 <div class="form-row zw_form_row">
                    <div class="form-group col-md-6">
                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputYearofexp">Year Of Experience <span style="color: red;">*</span></label>
                      <input type="text" name="Yearofexp" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputYearofexp" placeholder="Enter Year Of Experience">
                    </div>
                     <div class="form-group col-md-6">
                       <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputMedicalspec">Doctor Position <span style="color: red;">*</span></label>
                       <select name="Position" class="custom-select poppins-regular zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none">
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
                      <textarea name="Medicalspec" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputMedicalspec" rows="1" placeholder="Enter Medical Specialties"></textarea>
                    </div>
                  </div>
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
</body>

</html>