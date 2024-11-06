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

      <!--- small box end-->

      <!-- Content Wrapper. Contains page content -->
      <div class="wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header content-wrapper-bg">
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
                        <a class="btn text-start" href="{{ route('healthcare.dashboard', ['status' => 'Pending']) }}">Pending</a>
                        <a class="btn text-start" href="{{ route('healthcare.dashboard', ['status' => 'Approved']) }}">Approved</a>
                        <a class="btn text-start" href="{{ route('healthcare.dashboard', ['status' => 'Rejected']) }}">Rejected</a>
                        <a class="btn text-start" href="{{ route('healthcare.dashboard', ['status' => 'Completed']) }}">Completed</a>
                        <!-- <a class="btn text-start" href="{{ route('healthcare.dashboard', ['status' => 'InCompleted']) }}">InCompleted</a>
                        <a class="btn text-start" href="{{ route('healthcare.dashboard', ['status' => 'Refund']) }}">Refunded</a> -->
                      </div>

                    </div>
                  </div>
                  <div class="row col-md-12 pt-4 pb-4 bg-white">
                    <div class="col-md-4 pr-5">
                      <p>Select Services</p>
                      <div class="input-group mb-3">
                        <select class="form-control zw_form_control shadow">
                          <option>Select</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4 pr-5">
                      <p>Select Slot Date</p>
                      <div class="input-group mb-3 shadow">
                        <input type="date" id="startDate" class="form-control" placeholder="Start Date" />
                        <input type="date" id="endDate" class="form-control" placeholder="End Date" />
                      </div>
                    </div>

                    <div class="col-md-4 pr-5">
                      <p></p>
                      <div class="input-group mt-3 mb-3">
                        <select class="form-control zw_form_control shadow mt-4">
                          <option class="font-weight-bold">All Appointments </option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <table class="table table-hover text-nowrap zw_table table-responsive">
                    <thead class="zw_bg_AF2245 zw_text_ffffff">
                      <tr>
                        <th class="poppins-medium zw_15">Appointments ID <br><input type="text" placeholder="1232345" class="tableheadersearch"></th>
                        <th class="poppins-medium zw_15">Date & Time<br>
                          <div class="mb-5"></div>
                        </th>
                        <th class="poppins-medium zw_15">Patient Name <br><input type="text" placeholder="Hina Fatima" class="tableheadersearch"></th>
                        <th class="poppins-medium zw_15">Mobile <br><input type="text" placeholder="966458739373" class="tableheadersearch"></th>
                        <th class="poppins-medium zw_15">Email ID <br><input type="text" placeholder="Hina.fatima@gmail.com" class="tableheadersearch"></th>
                        <th class="poppins-medium zw_15">Slot Date & Time <div class="mb-5"></div>
                        </th>
                        <th class="poppins-medium zw_15">Registered <div class="mb-5"></div>
                        </th>
                        <th class="poppins-medium zw_15">Status <div class="mb-5"></div>
                        </th>
                        <th class="poppins-medium zw_15" colspan="3">Price <div class="mb-5"></div>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($booking as $booking)
                      <tr class="m-4" data-id="">
                        <td class="poppins-regular zw_14 zw_text_333333 pt-3 pb-3">05241402176</td>
                        <td class="poppins-regular zw_14 zw_text_333333 pt-3 pb-3">{{ \Carbon\Carbon::parse($booking->Date)->format('jS F Y, h:i:s A') }}</td>
                        <td class="poppins-regular zw_14 zw_text_333333"> @php
                          $patientsJson = $booking->Patients; // Get the JSON string
                          $patients = json_decode($patientsJson, true); // Decode JSON to associative array

                          // Check if decoding was successful and if the result is an array
                          if (json_last_error() === JSON_ERROR_NONE && is_array($patients)) {
                          foreach ($patients as $patient) {
                          // Make sure each $patient is an array and has the required keys
                          if (is_array($patient) && isset($patient['Firstname']) && isset($patient['Lastname'])) {
                          echo "<p>{$patient['Firstname']} {$patient['Lastname']}</p>";
                          }
                          }
                          } else {
                          // Handle errors or empty result
                          echo "<p>Invalid</p>";
                          }
                          @endphp</td>
                        <td class="poppins-regular zw_14 zw_text_333333 pt-3 pb-3">{{ $booking->Phone }}</td>
                        <td class="poppins-regular zw_14 zw_text_333333 pt-3 pb-3">{{ $booking->Email }}</td>
                        <td class="poppins-regular zw_14 zw_text_333333 pt-3 pb-3">10th May 2024
                          11:00 PM - 12:00 AM </td>
                        <td class="poppins-regular zw_14 zw_text_333333 pt-3 pb-3">Completed</td>
                        <td class="poppins-regular zw_14 zw_text_333333 pt-3 pb-3">Incompleted</td>
                        <td class="poppins-regular zw_14 zw_text_333333 pt-3 pb-3">
                          {{ $booking->Price }}
                        </td>
                        <td>
                          <a class="btn zw_btn_pdf" href="">Approve</a>
                          <a class="btn zw_btn_decline" href="{{ route('healthcare.dashboard.decline') }}">Decline</a>

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