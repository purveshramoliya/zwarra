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
          <!-- <div class="row mb-2">
            <div class="col-sm-6 zw_back">
              <a href="" class="poppins-medium zw_18 zw_text_333333 zw_a zw_back">
                <i class="fas fa-arrow-left right mr-2"></i>Back
              </a>
            </div>
          </div> -->
          <div class="row">
            <div class="col-12 col-md-12 col-lg-6">
              <h1 class="poppins-semibold zw_46 zw_text_AF2245 mt-2">
                <span class="mr-3"><img src="{{url('dist/img/zwaara_user.png')}}" alt="Zwaara User" class=" "></span>Rejected requests
              </h1>
              <h5 class="pt-2" style="font-size: 12px;">You have 10 Rejected requests</h5>
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
          <div class="col-12 col-md-12 col-lg-6">
            <!-- <a class="btn zw_add_btn float-right  poppins-medium zw_18" href="{{ route('ourservices.create') }}"> <i class="fas fa-plus right mr-2"></i>Add Main Service</a> -->
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card zw_card">
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <div class="pre_next">

                </div>
                <table class="table table-hover text-nowrap zw_table">
                  <thead class="zw_bg_AF2245 zw_text_ffffff">
                    <tr>
                      <th class="poppins-medium zw_18">Date</th>
                      <th class="poppins-medium zw_18">En Name</th>
                      <th class="poppins-medium zw_18">Ar Name</th>
                      <th class="poppins-medium zw_18" colspan="2">Rejected description</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="poppins-regular zw_14 zw_text_333333">10-02-23</td>
                      <td class="poppins-regular zw_14 zw_text_333333">Home Med Clinics</td>
                      <td class="poppins-regular zw_14 zw_text_333333">Rahmat</td>
                      <td class="poppins-regular zw_14 zw_text_333333">jaddah</td>
                      <td class="poppins-regular zw_14 zw_text_333333"><i class="fas fa-angle-right right zw_text_AF2245 zw_16" data-toggle="modal" data-target="#exampleModal"></i></td>
                      <!-- Modal -->
                      <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">

                            <div class="modal-body">
                              <div class="">
                                <div class="col-sm-12">
                                  <h5 class="poppins-semibold zw_text_AF2245 mt-3 mb-3 text-center">Healthcare Details</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: absolute;top: 0;right: 10px;">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="row col-md-12 text-center zw_12 p-3" style="background: rgba(175, 34, 69, 0.1);">
                                  <div class="col-md-3">
                                    <b>Healthcare</b>
                                    <p class="mt-3">alfaDoctor Support</p>
                                  </div>
                                  <div class="col-md-2">
                                    <b>Health issue</b>
                                    <p class="mt-3">Heart Problem</p>
                                  </div>
                                  <div class="col-md-2">
                                    <b>total price</b>
                                    <p class="mt-3">300</p>
                                  </div>
                                  <div class="col-md-2">
                                    <b>Phone</b>
                                    <p class="mt-3">+92-3111231816</p>
                                  </div>
                                  <div class="col-md-3">
                                    <b>Healthcare email</b>
                                    <p class="mt-3">Zwaara.care@gmail.com</p>
                                  </div>
                                </div>
                              </div>
                              <div class="">
                                <div class="col-sm-12">
                                  <h5 class="poppins-semibold zw_text_AF2245 mt-3 mb-3 text-center">Patient Details</h5>
                                </div>
                                <div class="row col-md-12 text-center zw_12 pt-3 mb-4" style="background: rgba(175, 34, 69, 0.1);">
                                  <div class="col-md-2">
                                    <b>En name</b>
                                    <p class="mt-3">Shanila Noor</p>
                                  </div>
                                  <div class="col-md-2">
                                    <b>Ar name</b>
                                    <p class="mt-3">شانيلا نور</p>
                                  </div>
                                  <div class="col-md-2">
                                    <b>National ID</b>
                                    <p class="mt-3">333333333</p>
                                  </div>
                                  <div class="col-md-2">
                                    <b>Phone</b>
                                    <p class="mt-3">+92-3111231816</p>
                                  </div>
                                  <div class="col-md-2">
                                    <b>Email</b>
                                    <p class="mt-3">Zwaara.care@gmail.com</p>
                                  </div>
                                  <div class="col-md-2">
                                    <b>Booked date</b>
                                    <p class="mt-3">28-04-23</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
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