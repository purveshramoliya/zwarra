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
                <a href="{{ route('bookings.index') }}" class="poppins-medium zw_18 zw_text_333333 zw_a zw_back">
                    <i class="fas fa-arrow-left right mr-2"></i>Back
                </a>
            </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
              <h3 class="poppins-semibold zw_34 zw_text_AF2245 mt-3">Edit Order</h3>
          </div>
          <!-- left column -->
          <div class="col-md-12">
            <!-- <div class="pull-right">
              <a class="btn btn-primary m-2" href="{{ route('bookings.index') }}"> Back</a>
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
              <form action="{{ route('bookings.update',$booking->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-row zw_form_row">
                    <div class="form-group col-md-6">
                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputServiceprovider">Select Service Provider <span style="color: red;">*</span></label>
                      <select name="Serviceprovider" class="custom-select poppins-regular zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none">
                        <option value="{{ $booking->Serviceprovider }}" selected="selected">{{ $booking->Serviceprovider }}</option>
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputServicename">Select Servicename <span style="color: red;">*</span></label>
                      <select name="Servicename" class="custom-select poppins-regular zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none">
                        <option value="{{ $booking->Servicename }}" selected="selected">{{ $booking->Servicename }}</option>
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-row zw_form_row">
                    <div class="form-group col-md-6">
                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputType">Select Username <span style="color: red;">*</span></label>
                      <select name="Username" class="custom-select poppins-regular zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none">
                        <option value="{{ $booking->Username }}" selected="selected">{{ $booking->Username }}</option>
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputPhone">Phone <span style="color: red;">*</span></label>
                      <input type="phone" name="Phone" value="{{ $booking->Phone }}" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputPhone" placeholder="Enter Phone">
                    </div>
                  </div>
                  <div class="form-row zw_form_row">
                    <div class="form-group col-md-6">
                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputEmail">Email <span style="color: red;">*</span></label>
                      <input type="email" name="Email" value="{{ $booking->Email }}" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputEmail" placeholder="Enter Email">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputType">Select Status <span style="color: red;">*</span></label>
                      <select name="Type" class="custom-select poppins-regular zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none">
                        <option value="{{ $booking->Type }}" selected="selected">{{ $booking->Type }}</option>
                        <option>Completed</option>
                        <option>InCompleted</option>
                        <option>Cancelled</option>
                        <option>Refund</option>
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