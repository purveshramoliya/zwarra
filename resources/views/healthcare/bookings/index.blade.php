<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
  @section('styles')
  @endsection
</head>

<body>
  @extends('healthcare.layouts.app')
  @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <div class="container-fluid m-2">


      <!-- Content Wrapper. Contains page content -->
      <div class="wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header content-wrapper-bg">
          <!--- small box end-->
          <div class="content mt-4 mb-4">
            <div class="container">
              <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                <div class="col">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <h4 class="card-title fw-bold fs-6">All requests</h4>
                        <button class="bg-transparent" aria-label="More options">
                          <i class="fa-solid fa-ellipsis-vertical"></i>
                        </button>
                      </div>
                      <div class="d-flex justify-content-between my-2">
                        <h4 class="card-title fw-bold fs-5">3000</h4>
                        <button class="rounded-3 text-success">
                          <i class="fa-solid fa-arrow-up"></i> 20%
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <h4 class="card-title fw-bold fs-6">Pending requests</h4>
                        <button class="bg-transparent" aria-label="More options">
                          <i class="fa-solid fa-ellipsis-vertical"></i>
                        </button>
                      </div>
                      <div class="d-flex justify-content-between my-2">
                        <h4 class="card-title fw-bold fs-5">100</h4>
                        <button class="rounded-3 text-success">
                          <i class="fa-solid fa-arrow-up"></i> 25%
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <h4 class="card-title fw-bold fs-6 text-danger">Rejected requests</h4>
                        <button class="bg-transparent" aria-label="More options">
                          <i class="fa-solid fa-ellipsis-vertical"></i>
                        </button>
                      </div>
                      <div class="d-flex justify-content-between my-2">
                        <h4 class="card-title fw-bold fs-5 text-danger">56</h4>
                        <button class="rounded-3 text-danger">
                          <i class="fa-solid fa-arrow-down"></i> -11%
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <h4 class="card-title fw-bold fs-6">Completed</h4>
                        <button class="bg-transparent" aria-label="More options">
                          <i class="fa-solid fa-ellipsis-vertical"></i>
                        </button>
                      </div>
                      <div class="d-flex justify-content-between my-2">
                        <h4 class="card-title fw-bold fs-5">2800</h4>
                        <button class="rounded-3 text-success">
                          <i class="fa-solid fa-arrow-up"></i> 17%
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <div class="card zw_card">

                <!-- /.card-header -->
                <div class="card-body  p-0">
                  <div class="col-12 d-md-flex ">
                    <div>
                      <a class=" px-3 btn zw_bg_AF2245 zw_text_ffffff d-flex active" href=""><img src="/dist/img/request-icon.png" class="img-fluid" alt="request-icon"> <span class="px-2">Requests</span></a>
                    </div>
                    <div class="mx-3 zw_service_btn w-100 ">
                      <a class="btn text-start mr-5" href="">All Requests</a>
                      <a class="btn text-start mr-5" href="">Pending</a>
                      <a class="btn text-start mr-5" href="">Approved</a>
                      <a class="btn text-start mr-5" href="">Rejected</a>
                      <a class="btn text-start mr-5" href="">Completed</a>
                    </div>

                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
          <!-- /.row -->
        </section>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  @endsection

  @section('scripts')
  <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  @endsection
</body>

</html>