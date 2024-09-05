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
            <a href="{{ route('images.index') }}" class="poppins-medium zw_18 zw_text_333333 zw_a zw_back">
              <i class="fas fa-arrow-left right mr-2"></i>Back
            </a>
          </div>
        </div>
        <div class="row">
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
              <form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-row zw_form_row">
                    <div class="form-group col-md-6">
                     <label for="exampleInputtitle" class="zw_label_height zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">Title</label>
                      <input type="text" name="title" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputCode" placeholder="Enter title">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputCode">Description <span style="color: red;">*</span></label>
                       <textarea name="description" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputIssues" rows="1" placeholder="Enter Description"></textarea>
                    </div>
                  </div>
                  <div class="form-row zw_form_row">
                    <div class="form-group col-md-6">
                     <label for="exampleInputlogo" class="zw_label_height zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">Upload Banner</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="image" class="custom-file-input" id="exampleInputlogo" onchange="updateFileName(this)">
                          <label class="custom-file-label zw_form_control" for="exampleInputlogo">Choose file</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group col-md-6">
                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputCode">Redirect Url <span style="color: red;">*</span></label>
                      <input type="url" name="redirect_url" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputCode" placeholder="Enter Redirect Url">
                    </div>
                  </div>
                 
                  <div class="row">
                    <div class="col-12">
                      <button type="submit" class="btn zw_submit zw_submit_wh">Add Banner</button>
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
</body>

</html>