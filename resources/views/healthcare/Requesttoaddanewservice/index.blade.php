@include('healthcare.layouts.headermodule')

<body class="hold-transition sidebar-mini zw_sidebar">
  <div class="wrapper">
    @include('healthcare.layouts.header')
    @include('healthcare.layouts.sidebar')

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
              <h1 class="poppins-semibold zw_46 zw_text_AF2245 mt-2">Request to add a new service</h1>
            </div>
            <div class="col-12 col-md-12 col-lg-6">
            <a class="btn zw_btn float-right  poppins-medium zw_18" href="{{route('Requesttoaddanewservice.create')}}">Add Service Packages</a>
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