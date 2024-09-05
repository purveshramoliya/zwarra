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
            <a href="{{ route('users.index') }}" class="poppins-medium zw_18 zw_text_333333 zw_a zw_back">
              <i class="fas fa-arrow-left right mr-2"></i>Back
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <h3 class="poppins-semibold zw_34 zw_text_AF2245 mt-3">Add New User</h3>
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
              <form action="{{ route('users.create') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                 <div class="form-row zw_form_row">
                    <div class="form-group col-md-6">
                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputname">Firstname</label>
                      <input type="text" name="name" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputname" placeholder="Enter Firstame">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputalastname">Lastname <span style="color: red;">*</span></label>
                      <input type="text" name="lastname" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputarname" placeholder="Enter Lastname">
                    </div>
                  </div>
                 <div class="form-row zw_form_row">
                    <div class="form-group col-md-6">
                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputEmail">Email address <span style="color: red;">*</span></label>
                      <input type="email" name="email" class="form-control @error('Email') is-invalid @enderror poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputEmail" placeholder="Enter Email" value="{{ old('Email') }}" required autofocus>
                      @error('Email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                    <div class="form-group col-md-6">
                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputphone">Phone <span style="color: red;">*</span></label>
                      <input type="phone" name="phone" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputphone" placeholder="Enter Phone">
                    </div>
                  </div>
                 <div class="form-row zw_form_row">
                    <div class="form-group col-md-6">
                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputPassword">Password<span style="color: red;">*</span></label>
                      <input type="password" name="password" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputPassword" placeholder="Enter Password">
                    </div>
                     <div class="form-group col-md-6">
                       <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputCity">City<span style="color: red;">*</span></label>
                       <select name="city" class="custom-select poppins-regular zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none">
                        <option value="">Select</option>
                        <option value="Riyadh">Riyadh</option>
                        <option value="Jeddah">Jeddah</option>
                        <option value="Mecca">Mecca</option>
                        <option value="Medina">Medina</option>
                        <option value="Ad Dammām">Ad Dammām</option>
                        <option value="Tabūk">Tabūk</option>
                        <option value="Al Hufūf">Al Hufūf</option>
                        <option value="Al Qaţīf">Al Qaţīf</option>
                        <option value="Al Ḩillah">Al Ḩillah</option>
                        <option value="Aţ Ţā’if">Aţ Ţā’if</option>
                        <option value="Al Jubayl">Al Jubayl</option>
                        <option value="Buraydah">Buraydah</option>
                        <option value="Ḩafr al Bāţin">Ḩafr al Bāţin</option>
                        <option value="Yanbu">Yanbu</option>
                        <option value="Ḩā’il">Ḩā’il</option>
                        <option value="Abhā">Abhā</option>
                        <option value="Sakākā">Sakākā</option>
                        <option value="Al Qurayyāt">Al Qurayyāt</option>
                        <option value="Jāzān">Jāzān</option>
                        <option value="Najrān">Najrān</option>
                        <option value="Al Wajh">Al Wajh</option>
                        <option value="Arar">Arar</option>
                        <option value="Al Bāḩah">Al Bāḩah</option>
                        <option value="Tathlīth">Tathlīth</option>
                      </select>
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