@include('doctor.layouts.headermodule')

<body class="hold-transition sidebar-mini zw_sidebar">
  <div class="wrapper">
    @include('doctor.layouts.header')
    @include('doctor.layouts.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6 zw_back">
              <a href="#" class="poppins-medium zw_18 zw_text_333333 zw_a zw_back">
                <i class="fas fa-arrow-left right mr-2"></i>Back
              </a>

            </div>
          </div>
          <div class="row mb-2">
           <div class="col-12 col-md-12 col-lg-6">
              <h1 class="poppins-semibold zw_46 zw_text_AF2245 mt-2">Bookings</h1>
            </div>
           
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- Content Header (Page header) -->
      <section class="content-header">
      <div class="row">
          <div class="col-12 col-md-12 col-lg-6">
            <form class="zw_search_form">
              <div class="input-group input-group-sm">
                <input type="text" name="search" class=" zw_search_input zw_16 poppins-regular" placeholder="Search by name">
                <div class="input-group-append zw_input-group-append">
                  <button type="submit" class="btn zw_search_button zw_bg_ffffff">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card zw_card">

              @if ($message = Session::get('success'))
              <div class="alert zw_alert_success">
                <p>{{ $message }}</p>
              </div>
              @endif
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap zw_table">
                  <thead class="zw_bg_AF2245 zw_text_ffffff">
                    <tr>
                      <th class="poppins-medium zw_18">Name</th>
                      <th class="poppins-medium zw_18">New Price</th>
                      <th class="poppins-medium zw_18">Service Type</th>
                      <th class="poppins-medium zw_18">Gender</th>
                      <th class="poppins-medium zw_18">Status</th>
                      <th class="poppins-medium zw_18" colspan="2"></th>
                    </tr>
                  </thead>
                  <tbody>
                     <tr>
                      <td class="poppins-regular zw_14 zw_text_333333"></td>
                       <td class="poppins-regular zw_14 zw_text_333333"></td>
                        <td class="poppins-regular zw_14 zw_text_333333"></td>
                         <td class="poppins-regular zw_14 zw_text_333333"></td>
                          <td class="poppins-regular zw_14 zw_text_333333"></td>
                           <td class="poppins-regular zw_14 zw_text_333333"></td>
                            <td class="poppins-regular zw_14 zw_text_333333"></td>
                          </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </section>
    </div>
    @include('doctor.layouts.footer')
  </div>
</body>

</html>