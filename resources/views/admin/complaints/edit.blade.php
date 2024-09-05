@include('admin.layouts.headermodule')

<body class="hold-transition sidebar-mini zw_sidebar">
  <div class="wrapper">
    @include('admin.layouts.header')
    @include('admin.layouts.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <div class="pull-right">
              <a class="btn btn-primary m-2" href="{{ route('complaints.index') }}"> Back</a>
            </div>
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Complaint</h3>
              </div>
              <!-- /.card-header -->
              @if ($errors->any())
              <div class="alert alert-danger">
                There were some problems with your input.<br><br>
                <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
              @endif
              <!-- form start -->
              <form action="{{ route('complaints.update',$complaint->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="exampleInputName">Name</label>
                      <input type="text" name="Name" value="{{ $complaint->Name }}" class="form-control" id="exampleInputName" placeholder="Enter Name">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputIssues">Issues</label>
                      <textarea name="Issues" class="form-control" id="exampleInputIssues" rows="4" placeholder="Enter Issues">{{ $complaint->Issues }}</textarea>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="exampleInputPhone">Phone <span style="color: red;">*</span></label>
                      <input type="phone" name="Phone" value="{{ $complaint->Phone }}" class="form-control" id="exampleInputPhone" placeholder="Enter Phone">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputEmail">Email <span style="color: red;">*</span></label>
                      <input type="email" name="Email" value="{{ $complaint->Email }}" class="form-control" id="exampleInputEmail" placeholder="Enter Email">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
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