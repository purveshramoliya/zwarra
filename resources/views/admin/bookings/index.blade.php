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
              <button onclick="history.back()" style="background:none;" class="poppins-medium zw_18 zw_text_333333 zw_a zw_back">
                <i class="fas fa-arrow-left right mr-2"></i>Back
              </button>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-12 col-md-12 col-lg-6">
              <h1 class="poppins-semibold zw_46 zw_text_AF2245">Appointments </h1>
            </div>
          </div>
          <div class="row col-md-12 mt-4">
            <div class="col-md-3">
              <label for="basic-url">Select Services</label>
              <div class="input-group mb-3">
                <select class="form-control zw_form_control">
                  <option>Select</option>
                </select>
              </div>
            </div>
            <div class="col-md-3">
              <label for="startDate">Select Slot Date</label>
              <div class="input-group mb-3">
                <input type="date" id="startDate" class="form-control" placeholder="Start Date" />
                <input type="date" id="endDate" class="form-control" placeholder="End Date" />
              </div>
            </div>

            <div class="col-md-3">
              <label for="basic-url"></label>
              <div class="input-group mb-3">
                <select class="form-control zw_form_control">
                  <option class="font-weight-bold">All Appointments </option>
                </select>
              </div>
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
              <div class="alert alert-success">
                <p>{{ $message }}</p>
              </div>
              @endif
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <div class="pre_next">
                  {{ $booking->links() }}
                </div>

                <table class="table table-hover text-nowrap zw_table">
                  <thead class="zw_bg_AF2245 zw_text_ffffff">
                    <tr>
                      <th class="poppins-medium zw_18">Appointments ID</th>
                      <th class="poppins-medium zw_18">Date & Time</th>
                      <th class="poppins-medium zw_18">Patient Name</th>
                      <th class="poppins-medium zw_18">Mobile</th>
                      <th class="poppins-medium zw_18">Email ID</th>
                      <th class="poppins-medium zw_18">Slot Date & Time</th>
                      <th class="poppins-medium zw_18">Registered</th>
                      <th class="poppins-medium zw_18">Status</th>
                      <th class="poppins-medium zw_18" colspan="3">Price</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($booking as $booking)
                    <tr class="m-4" data-id="{{ $booking->id }}">
                      <td class="poppins-regular zw_14 zw_text_333333">
                        <p>APP05241407426</p>
                        <p>Home Visit</p>
                        <p>Vitamin IV Drip</p>
                        <p>Female</p>
                      </td>
                      <td class="poppins-regular zw_14 zw_text_333333">
                        {{ \Carbon\Carbon::parse($booking->Date)->format('jS F Y, h:i:s A') }}
                      </td>

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
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $booking->Phone }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $booking->Email }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333">
                        <p>10th May 2024</p>
                        <p>11:00 PM - 12:00 AM</p>
                      </td>
                      <td class="poppins-regular zw_14 zw_text_333333">Completed</td>
                      <td class="poppins-regular zw_14 zw_text_333333">
                        Incompleted
                        <!-- <select name="status" class="status-dropdown poppins-regular zw_form_control zw_14 zw_text_333333 zw_box_shadow_none">
                          <option value="Approved" {{ $booking->Status == 'Approved' ? 'selected' : '' }}>Approved</option>
                          <option value="Rejected" {{ $booking->Status == 'Rejected' ? 'selected' : '' }}>Rejected</option>
                          <option value="Incompleted" {{ $booking->Status == 'Incompleted' ? 'selected' : '' }}>Incompleted</option>
                          <option value="Completed" {{ $booking->Status == 'Completed' ? 'selected' : '' }}>Completed</option>
                          <option value="Pending" {{ $booking->Status == 'Pending' ? 'selected' : '' }}>Pending</option>
                          <option value="Refund" {{ $booking->Status == 'Refund' ? 'selected' : '' }}>Refund</option>
                        </select> -->
                      </td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $booking->Price }}</td>
                      <td>
                        <a class="btn zw_btn_pdf" href="">Approve</a>
                        <a class="btn zw_btn_decline" href="{{ route('admin.bookingsDecline') }}">Decline</a>
                        <a class="btn zw_text_AF2245 zw_a zw_24" href="{{ route('bookings.show',$booking->id) }}"><i class="fas fa-angle-right right zw_text_AF2245 zw_16"></i> </a>
                        
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <!-- Bootstrap Modal for Comment -->
              <div class="modal fade" id="commentModal" tabindex="-1" role="dialog" aria-labelledby="commentModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="commentModalLabel">Add a Comment</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <textarea id="commentText" class="form-control" placeholder="Add a comment"></textarea>
                    </div>
                    <div class="modal-footer">

                      <button type="button" class="btn zw_submit zw_submit_wh" id="submitComment">Submit</button>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </section>
    </div>
    @include('admin.layouts.footer')
  </div>
  <script>
    $(document).ready(function() {
      $('.status-dropdown').change(function() {
        var status = $(this).val();
        var appointmentId = $(this).closest('tr').data('id');

        if (status === 'Rejected') {
          $('#commentModal').data('appointment-id', appointmentId).modal('show');
        } else {
          updateStatus(appointmentId, status);
        }
      });

      $('#submitComment').click(function() {
        var comment = $('#commentText').val();
        var appointmentId = $('#commentModal').data('appointment-id');

        updateStatus(appointmentId, 'Rejected', comment);
        $('#commentModal').modal('hide');
        $('#commentText').val('');
      });

      function updateStatus(id, status, comment = '') {
        $.ajax({
          url: "{{ route('bookings.update', '') }}/" + id,
          method: 'PUT',
          data: {
            _token: '{{ csrf_token() }}',
            status: status,
            comment: comment
          },
          success: function(response) {
            //alert('Status updated successfully');
            $('tr[data-id="' + id + '"] .status-dropdown').val(status);
          },
          error: function(response) {
            // alert('Error updating status');
          }
        });
      }
    });
  </script>
</body>

</html>