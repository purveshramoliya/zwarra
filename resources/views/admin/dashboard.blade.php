<!DOCTYPE html>
<html>
<head>
  <title>Zwarra Admin Panel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
  @section('styles')
  @endsection
</head>
<body>
  @extends('admin.layouts.app')
  @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
           <div class="content p-3">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
              <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-center align-items-center">
                            <h4 class="card-title fw-bold fs-10 zw_text_AF2245 nowrap-text">Total Appointments</h4>
                            <button class="bg-transparent"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                        </div>
                        <div class="d-flex justify-content-center align-items-center my-2">
                            <h4 class="card-title fw-bold fs-2 zw_text_AF2245">{{$totalBookings}}</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100">
                  <div class="card-body">
                    <div class="d-flex justify-content-center align-items-center">
                      <h4 class="card-title fw-bold fs-10 zw_text_AF2245 nowrap-text">Approved Appoinments</h4>
                      <button class="bg-transparent"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                    </div>
                    <div class="d-flex justify-content-center align-items-center my-2">
                      <h4 class="card-title fw-bold fs-2 zw_text_AF2245">{{$approvedBookings}}</h4>
                      <!-- <button class="rounded-3 zw_text_AF2245 zw_bg_E93F3F1A"><i class="fa-solid fa-arrow-down"></i> -11%</button> -->
                    </div>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="card h-100">
                  <div class="card-body">
                    <div class="d-flex justify-content-center align-items-center">
                      <h4 class="card-title fw-bold fs-10 zw_text_AF2245 nowrap-text">Cancelled Appointments</h4>
                      <button class="bg-transparent"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                    </div>
                    <div class="d-flex justify-content-center align-items-center my-2">
                      <h4 class="card-title fw-bold fs-2 zw_text_AF2245">{{$cancelledBookings}}</h4>
                      <!-- <button class="rounded-3 zw_bg_22E27A1A zw_text_22E27A"><i class="fa-solid fa-arrow-up"></i> 25%</button> -->
                    </div>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="card h-100 ">
                  <div class="card-body">
                    <div class="d-flex justify-content-center align-items-center">
                      <h4 class="card-title fw-bold fs-10 zw_text_AF2245 nowrap-text">Completed Appointments</h4>
                      <button class="bg-transparent"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                    </div>
                    <div class="d-flex justify-content-center align-items-center my-2">
                      <h4 class="card-title fw-bold fs-2 zw_text_AF2245">{{$completedBookings}}</h4>
                      <!-- <button class="rounded-3 zw_bg_22E27A1A zw_text_22E27A"><i class="fa-solid fa-arrow-up"></i> 17%</button> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="row">
           <div class="content p-3">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
              <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-center align-items-center">
                            <h4 class="card-title fw-bold fs-10 zw_text_AF2245 nowrap-text">Visit Completed (Today)</h4>
                            <button class="bg-transparent"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                        </div>
                        <div class="d-flex justify-content-center align-items-center my-2">
                            <h4 class="card-title fw-bold fs-2 zw_text_AF2245">{{$dailyCompleted}}</h4>
                        </div>
                    </div>
                </div>
            </div>

              <div class="col">
                <div class="card h-100">
                  <div class="card-body">
                    <div class="d-flex justify-content-center align-items-center">
                      <h4 class="card-title fw-bold fs-10 zw_text_AF2245 nowrap-text">Visit Cancelled (Today)</h4>
                      <button class="bg-transparent"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                    </div>
                    <div class="d-flex justify-content-center align-items-center my-2">
                      <h4 class="card-title fw-bold fs-2 zw_text_AF2245">{{$dailyCancelled}}</h4>
                      <!-- <button class="rounded-3 zw_bg_22E27A1A zw_text_22E27A"><i class="fa-solid fa-arrow-up"></i> 25%</button> -->
                    </div>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="card h-100">
                  <div class="card-body">
                    <div class="d-flex justify-content-center align-items-center">
                      <h4 class="card-title fw-bold fs-10 zw_text_AF2245 nowrap-text">Visit Approved (Today)</h4>
                      <button class="bg-transparent"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                    </div>
                    <div class="d-flex justify-content-center align-items-center my-2">
                      <h4 class="card-title fw-bold fs-2 zw_text_AF2245">{{$dailyApproved}}</h4>
                      <!-- <button class="rounded-3 zw_text_AF2245 zw_bg_E93F3F1A"><i class="fa-solid fa-arrow-down"></i> -11%</button> -->
                    </div>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="card h-100 ">
                  <div class="card-body">
                    <div class="d-flex justify-content-center align-items-center">
                      <h4 class="card-title fw-bold fs-10 zw_text_AF2245 nowrap-text">Refunded (Today)</h4>
                      <button class="bg-transparent"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                    </div>
                    <div class="d-flex justify-content-center align-items-center my-2">
                      <h4 class="card-title fw-bold fs-2 zw_text_AF2245">{{$dailyRefund}}</h4>
                      <!-- <button class="rounded-3 zw_bg_22E27A1A zw_text_22E27A"><i class="fa-solid fa-arrow-up"></i> 17%</button> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="row">
           <div class="content p-3">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
              <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-center align-items-center">
                            <h4 class="card-title fw-bold fs-10 zw_text_AF2245 nowrap-text">Total Revenue</h4>
                            <button class="bg-transparent"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                        </div>
                        <div class="d-flex justify-content-center align-items-center my-2">
                            <h4 class="card-title fw-bold fs-2 zw_text_AF2245">{{$totalrevenue}}</h4>
                        </div>
                    </div>
                </div>
            </div>

              <div class="col">
                <div class="card h-100">
                  <div class="card-body">
                    <div class="d-flex justify-content-center align-items-center">
                      <h4 class="card-title fw-bold fs-10 zw_text_AF2245 nowrap-text">Visit Reference Amount</h4>
                      <button class="bg-transparent"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                    </div>
                    <div class="d-flex justify-content-center align-items-center my-2">
                      <h4 class="card-title fw-bold fs-2 zw_text_AF2245">{{$dailyCancelled}}</h4>
                      <!-- <button class="rounded-3 zw_bg_22E27A1A zw_text_22E27A"><i class="fa-solid fa-arrow-up"></i> 25%</button> -->
                    </div>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="card h-100">
                  <div class="card-body">
                    <div class="d-flex justify-content-center align-items-center">
                      <h4 class="card-title fw-bold fs-10 zw_text_AF2245 nowrap-text">Total Doctors</h4>
                      <button class="bg-transparent"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                    </div>
                    <div class="d-flex justify-content-center align-items-center my-2">
                      <h4 class="card-title fw-bold fs-2 zw_text_AF2245">{{$totalDoctors}}</h4>
                      <!-- <button class="rounded-3 zw_text_AF2245 zw_bg_E93F3F1A"><i class="fa-solid fa-arrow-down"></i> -11%</button> -->
                    </div>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="card h-100 ">
                  <div class="card-body">
                    <div class="d-flex justify-content-center align-items-center">
                      <h4 class="card-title fw-bold fs-10 zw_text_AF2245 nowrap-text">Total Service Providers</h4>
                      <button class="bg-transparent"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                    </div>
                    <div class="d-flex justify-content-center align-items-center my-2">
                      <h4 class="card-title fw-bold fs-2 zw_text_AF2245">{{$totalServiceProviders}}</h4>
                      <!-- <button class="rounded-3 zw_bg_22E27A1A zw_text_22E27A"><i class="fa-solid fa-arrow-up"></i> 17%</button> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
          <!-- ./col -->
        </div>
        <!--- small box end-->
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection

  @section('scripts')
  <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  @endsection
</body>

</html>