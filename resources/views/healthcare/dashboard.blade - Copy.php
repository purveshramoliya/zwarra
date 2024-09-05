<!DOCTYPE html>
<html>
<head>
  <title>Zwarra Admin Panel</title>
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
        <div class="content">
          <div class="container">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
              <div class="col">
                <div class="card h-100">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <h4 class="card-title fw-bold fs-6">All requests</h4>
                      <button class="bg-transparent"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                    </div>
                    <div class="d-flex justify-content-between my-2">
                      <h4 class="card-title fw-bold fs-5">3000</h4>
                      <button class="rounded-3 zw_bg_22E27A1A zw_text_22E27A"><i class="fa-solid fa-arrow-up"></i> 20%</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="card h-100">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <h4 class="card-title fw-bold fs-6">Pending request</h4>
                      <button class="bg-transparent"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                    </div>
                    <div class="d-flex justify-content-between my-2">
                      <h4 class="card-title fw-bold fs-5">100</h4>
                      <button class="rounded-3 zw_bg_22E27A1A zw_text_22E27A"><i class="fa-solid fa-arrow-up"></i> 25%</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="card h-100">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <h4 class="card-title fw-bold fs-6 zw_text_AF2245">Rejected requests</h4>
                      <button class="bg-transparent"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                    </div>
                    <div class="d-flex justify-content-between my-2">
                      <h4 class="card-title fw-bold fs-5 zw_text_AF2245">56</h4>
                      <button class="rounded-3 zw_text_AF2245 zw_bg_E93F3F1A"><i class="fa-solid fa-arrow-down"></i> -11%</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="card h-100 ">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <h4 class="card-title fw-bold fs-6">Completed</h4>
                      <button class="bg-transparent"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                    </div>
                    <div class="d-flex justify-content-between my-2">
                      <h4 class="card-title fw-bold fs-5">2800</h4>
                      <button class="rounded-3 zw_bg_22E27A1A zw_text_22E27A"><i class="fa-solid fa-arrow-up"></i> 17%</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--- small box end-->

        <!-- Content Wrapper. Contains page content -->
        <div class="wrapper">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <div class="row">
              <div class="col-12">
                <div class="card zw_card">

                  <!-- /.card-header -->
                  <div class="card-body  p-0">
                    <!-- resources/views/main_view.blade.php -->
                    <!-- Add more buttons/links for other status as needed -->
                    <div class="row my-4">

                      <div class="col-12 d-md-flex ">
                        <div>
                         <a class=" px-3 btn zw_bg_AF2245 zw_text_ffffff d-flex active" href=""><img src="/dist/img/request-icon.png" class="img-fluid" alt="request-icon"> <span class="px-2">Requests</span></a>
                       </div>
                       <div class="mx-3 zw_service_btn w-100 ">
                        <a class="btn text-start" href="{{ route('healthcare.dashboard') }}">All Requests</a>
                        <a class="btn text-start" href="{{ route('dashboard.status', ['status' => 'Pending']) }}">Pending</a>
                        <a class="btn text-start" href="{{ route('dashboard.status', ['status' => 'Approved']) }}">Approved</a>
                        <a class="btn text-start" href="{{ route('dashboard.status', ['status' => 'Rejected']) }}">Rejected</a>
                        <a class="btn text-start" href="{{ route('dashboard.status', ['status' => 'Completed']) }}">Completed</a>
                        <a class="btn text-start" href="{{ route('dashboard.status', ['status' => 'InCompleted']) }}">InCompleted</a>
                        <a class="btn text-start" href="{{ route('dashboard.status', ['status' => 'Refund']) }}">Refunded</a>
                      </div>

                    </div>
                  </div>
                  <table class="table table-hover text-nowrap zw_table">
                    <thead class="zw_bg_AF2245 zw_text_ffffff">
                      <tr>
                        <th class="poppins-medium zw_18">Date</th>
                        <th class="poppins-medium zw_18">Name</th>
                        <th class="poppins-medium zw_18">Email</th>
                        <th class="poppins-medium zw_18">Phone</th>
                        <th class="poppins-medium zw_18">Service Name</th>
                        <th class="poppins-medium zw_18" colspan="3"></th>
                      </tr>
                    </thead>
                    <tbody>
                     @foreach ($booking as $booking)
                     <tr class="m-4">
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $booking->Date }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $booking->Patientname }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $booking->Email }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $booking->Phone }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $booking->Servicename }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333" >
                        <form id="statusForm" class="statusForm">
                          @csrf
                          <input type="hidden" name="did" id="did" class="did" value="{{ $booking->id }}">
                          <input type="checkbox" data-toggle="toggle" data-size="sm" id="StatusUpdate" class="StatusUpdate" data-on="Approved" data-off="Rejected" {{ $booking->Status === 'Approved' ? 'checked' : '' }}>
                          
                        </form>     
                      </td>
                      <td>
                        <a class="btn zw_text_AF2245 zw_a zw_24" href="{{ route('bookings.show',$booking->id) }}"><i class="fa fa-edit" aria-hidden="true"></i> </a>
                      </td>
                    </tr>
                    @endforeach

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
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
   $('.StatusUpdate').change(function() {
    var status = $(this).prop('checked');
    var did = $(this).closest('.statusForm').find('.did').val();
    console.log(status);
    console.log(did);
    
    $.ajax({
      url: "{{ route('dupdate.status') }}",
      method: 'POST',
      data: {
        _token: "{{ csrf_token() }}",
        id:  did,
        status: status
      },
      success: function(response) {
        console.log('Status updated successfully');
                // You can add any additional logic here if needed
      },
      error: function(xhr, status, error) {
        console.error('Error updating status:', error);
      }
    });
  });
 });
</script>
@endsection

@section('scripts')
<link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
@endsection
</body>

</html>