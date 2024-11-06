@include('healthcare.layouts.headermodule')

<body class="hold-transition sidebar-mini zw_sidebar">
  <div class="wrapper">
    @include('healthcare.layouts.header')
    @include('healthcare.layouts.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper content-wrapper-bg">
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
          <div class="row">
            <div class="col-12 col-md-12 col-lg-12 bg-white p-3">
              <h1 class="poppins-semibold zw_46 zw_text_AF2245 mt-2 mb-3">Reports</h1>
              <form class="zw_search_form pb-3">
                <div class="input-group input-group-sm content-wrapper-bg col-lg-8">
                  <input type="text" name="search" class=" zw_search_input zw_16 poppins-regular" placeholder="Search with name, appointment no or user ID">
                  <div class="input-group-append zw_input-group-append back-none">
                    <button type="submit" class="btn zw_search_button">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div>
              </form>
            </div>

          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- Content Header (Page header) -->
      <section class="content-header">
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
                      <th class="poppins-medium zw_18">Date</th>
                      <th class="poppins-medium zw_18">Appointment No</th>
                      <th class="poppins-medium zw_18">Patient’s Name</th>
                      <th class="poppins-medium zw_18">Phone Number</th>
                      <th class="poppins-medium zw_18">Download Report</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="poppins-regular zw_14 zw_text_333333">2023-11-20</td>
                      <td class="poppins-regular zw_14 zw_text_333333">434545</td>
                      <td class="poppins-regular zw_14 zw_text_333333">Sonia Alam</td>
                      <td class="poppins-regular zw_14 zw_text_333333">+61 2452 106 234 </td>
                      <td class="poppins-regular zw_14 zw_text_333333"><a class="btn zw_btn p-3" href="">Download PDF</a></td>
                    </tr>
                    <tr>
                      <td class="poppins-regular zw_14 zw_text_333333">2023-11-20</td>
                      <td class="poppins-regular zw_14 zw_text_333333">434545</td>
                      <td class="poppins-regular zw_14 zw_text_333333">Sonia Alam</td>
                      <td class="poppins-regular zw_14 zw_text_333333">+61 2452 106 234 </td>
                      <td class="poppins-regular zw_14 zw_text_333333"><a class="btn zw_btn p-3" href="">Download PDF</a></td>
                    </tr>
                    <tr>
                      <td class="poppins-regular zw_14 zw_text_333333">2023-11-20</td>
                      <td class="poppins-regular zw_14 zw_text_333333">434545</td>
                      <td class="poppins-regular zw_14 zw_text_333333">Sonia Alam</td>
                      <td class="poppins-regular zw_14 zw_text_333333">+61 2452 106 234 </td>
                      <td class="poppins-regular zw_14 zw_text_333333"><a class="btn zw_btn p-3" href="">Download PDF</a></td>
                    </tr>
                    <tr>
                      <td class="poppins-regular zw_14 zw_text_333333">2023-11-20</td>
                      <td class="poppins-regular zw_14 zw_text_333333">434545</td>
                      <td class="poppins-regular zw_14 zw_text_333333">Sonia Alam</td>
                      <td class="poppins-regular zw_14 zw_text_333333">+61 2452 106 234 </td>
                      <td class="poppins-regular zw_14 zw_text_333333"><a class="btn zw_btn p-3" href="">Download PDF</a></td>
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
    @include('healthcare.layouts.footer')
  </div>
</body>

</html>