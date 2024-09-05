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
              <a href="" class="poppins-medium zw_18 zw_text_333333 zw_a zw_back">
                <i class="fas fa-arrow-left right mr-2"></i>Back
              </a>
            </div>
          </div>
          <div class="row mb-2">
           <div class="col-12 col-md-12 col-lg-6">
              <h1 class="poppins-semibold zw_46 zw_text_AF2245">New Appointments </h1>
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
                <input type="text" name="search" class=" zw_search_input zw_16 poppins-regular" placeholder="Search by Healthcare">
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
              <div class="alert alert-success">
                <p>{{ $message }}</p>
              </div>
              @endif
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                 <!-- Add more buttons/links for other status as needed -->
                 <div class="row">
                  <div class="col-12">
                    <a class="btn zw_service_btn active" href="{{ route('bookings.index') }}">All</a>
                    <a class="btn zw_service_btn active" href="{{ route('bookings.status', ['status' => 'Pending']) }}">Pending </a>
                    <a class="btn zw_service_btn active" href="{{ route('bookings.status', ['status' => 'Approved']) }}">Approved </a>
                    <a class="btn zw_service_btn active" href="{{ route('bookings.status', ['status' => 'Rejected']) }}">Rejected </a>
                    <a class="btn zw_service_btn" href="{{ route('bookings.status', ['status' => 'Completed']) }}">Completed </a>
                     <a class="btn zw_service_btn" href="{{ route('bookings.status', ['status' => 'InCompleted']) }}">InCompleted </a>
                    <a class="btn zw_service_btn" href="{{ route('bookings.status', ['status' => 'Refund']) }}">Refunded</a>
                  </div>
                </div>
              <div class="pre_next">
                  {{ $booking->links() }}
              </div>

                <table class="table table-hover text-nowrap zw_table">
                  <thead class="zw_bg_AF2245 zw_text_ffffff">
                    <tr>
                      <th class="poppins-medium zw_18">Date</th>
                      <th class="poppins-medium zw_18">Healthcare</th>
                      <th class="poppins-medium zw_18">Service Name</th>
                      <th class="poppins-medium zw_18">Patient Name</th>
                      <th class="poppins-medium zw_18">Phone</th>
                      <th class="poppins-medium zw_18">Email</th>
                      <th class="poppins-medium zw_18" colspan="3"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($booking as $booking)
                    <tr class="m-4" data-id="{{ $booking->id }}">
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $booking->Date }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $booking->Healthcare }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $booking->Servicename }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333">

                      @php
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
                      @endphp

                      </td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $booking->Phone }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $booking->Email }}</td>
                      <!-- <td class="poppins-regular zw_14 zw_text_333333" >
                        <form id="statusForm" class="statusForm">
                          @csrf
                          <input type="hidden" name="bid" id="bid" class="bid" value="{{ $booking->id }}">
                          <input type="checkbox" data-toggle="toggle" data-size="sm" id="StatusUpdate" class="StatusUpdate" data-on="Approved" data-off="Rejected" {{ $booking->Status === 'Approved' ? 'checked' : '' }}> 

                        </form>     
                      </td> -->
                      <td class="poppins-regular zw_14 zw_text_333333">
                        <select name="status" class="status-dropdown poppins-regular zw_form_control zw_14 zw_text_333333 zw_box_shadow_none">
                            <option value="Approved" {{ $booking->Status == 'Approved' ? 'selected' : '' }}>Approved</option>
                            <option value="Rejected" {{ $booking->Status == 'Rejected' ? 'selected' : '' }}>Rejected</option>
                            <option value="Incompleted" {{ $booking->Status == 'Incompleted' ? 'selected' : '' }}>Incompleted</option>
                            <option value="Completed" {{ $booking->Status == 'Completed' ? 'selected' : '' }}>Completed</option>
                            <option value="Pending" {{ $booking->Status == 'Pending' ? 'selected' : '' }}>Pending</option>
                            <option value="Refund" {{ $booking->Status == 'Refund' ? 'selected' : '' }}>Refund</option>
                        </select>
                      </td>
                      <td>
                        <a class="btn zw_text_AF2245 zw_a zw_24" href="{{ route('bookings.show',$booking->id) }}"><i class="fa fa-edit" aria-hidden="true"></i> </a>
                      </td>
            
                      <td>
                        <form action="{{ route('bookings.destroy',$booking->id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                           <button type="submit" class="btn zw_text_AF2245 zw_a zw_24"><i class="fas fa-trash"></i></button>
                        </form>
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
                $('tr[data-id="'+id+'"] .status-dropdown').val(status);
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