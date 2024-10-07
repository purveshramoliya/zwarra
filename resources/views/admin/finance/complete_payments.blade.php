@include('admin.layouts.headermodule')

<body class="hold-transition sidebar-mini zw_sidebar">
  <div class="wrapper">
    @include('admin.layouts.header')
    @include('admin.layouts.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6 zw_back">
              <a onclick="history.back()" class="poppins-medium zw_18 zw_text_333333 zw_a zw_back">
                <i class="fas fa-arrow-left right mr-2"></i>Back
              </a>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-12 col-md-12 col-lg-6">
              <h1 class="poppins-semibold zw_46 zw_text_AF2245"> Completed Bookings </h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="row">
          <div class="col-12 col-md-12 col-lg-6">
            <form class="zw_search_form ">
              <div class="input-group input-group-sm">
                <input type="text" name="search" class=" zw_search_input zw_16 poppins-regular" placeholder="Search">
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
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap zw_table">
                  <thead class="zw_bg_AF2245 zw_text_ffffff">
                    <tr>
                      <th class="poppins-medium zw_18">Date</th>
                      <th class="poppins-medium zw_18">Appoinment Id</th>
                      <th class="poppins-medium zw_18">Service Name</th>
                      <th class="poppins-medium zw_18">User Name</th>
                      <th class="poppins-medium zw_18">Phone</th>
                      <th class="poppins-medium zw_18">User Email</th>
                      <th class="poppins-medium zw_18"></th>
                    </tr>
                  </thead>
                  <tbody>

                    <tr class="m-4">
                      <td class="poppins-regular zw_14 zw_text_333333">20/08/24</td>
                      <td class="poppins-regular zw_14 zw_text_333333">Subject</td>
                      <td class="poppins-regular zw_14 zw_text_333333">Nurce Visit</td>
                      <td class="poppins-regular zw_14 zw_text_333333">Rahmat Ali</td>
                      <td class="poppins-regular zw_14 zw_text_333333">57699369</td>
                      <td class="poppins-regular zw_14 zw_text_333333">Rahmat.ali@gmail.com</td>
                      <td>
                        <a class="btn zw_btn_pdf" href="">Upload PDF</a>
                      </td>
                    </tr>
                    <tr class="m-4">
                      <td class="poppins-regular zw_14 zw_text_333333">20/08/24</td>
                      <td class="poppins-regular zw_14 zw_text_333333">Subject</td>
                      <td class="poppins-regular zw_14 zw_text_333333">Nurce Visit</td>
                      <td class="poppins-regular zw_14 zw_text_333333">Rahmat Ali</td>
                      <td class="poppins-regular zw_14 zw_text_333333">57699369</td>
                      <td class="poppins-regular zw_14 zw_text_333333">Rahmat.ali@gmail.com</td>
                      <td>
                        <a class="btn zw_btn_pdf" href="">Upload PDF</a>
                      </td>
                    </tr>
                    <tr class="m-4">
                      <td class="poppins-regular zw_14 zw_text_333333">20/08/24</td>
                      <td class="poppins-regular zw_14 zw_text_333333">Subject</td>
                      <td class="poppins-regular zw_14 zw_text_333333">Nurce Visit</td>
                      <td class="poppins-regular zw_14 zw_text_333333">Rahmat Ali</td>
                      <td class="poppins-regular zw_14 zw_text_333333">57699369</td>
                      <td class="poppins-regular zw_14 zw_text_333333">Rahmat.ali@gmail.com</td>
                      <td>
                        <a class="btn zw_btn_pdf" href="">Upload PDF</a>
                      </td>
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
    @include('admin.layouts.footer')
  </div>
</body>

</html>