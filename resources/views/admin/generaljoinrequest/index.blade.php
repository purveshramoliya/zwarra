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
          <div class="row">
           <div class="col-12 col-md-12 col-lg-6">
              <h1 class="poppins-semibold zw_46 zw_text_AF2245 mt-2">General Join Requests</h1>
            </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="row">
          <div class="col-12">
            <div class="card zw_card">

              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <div class="pre_next">
                  {{ $generaljoinrequest->links() }}
                </div>
                <!-- resources/views/main_view.blade.php -->
                <!-- Add more buttons/links for other status as needed -->
                 <div class="row">
                  <div class="col-12">
                    <a class="btn zw_service_btn active" href="{{ route('generalrequest.type', ['type' => 'Insurance']) }}">Insurance Company Join Requests</a>
                    <a class="btn zw_service_btn" href="{{ route('generalrequest.type', ['type' => 'Nurse']) }}">Nurse Join Requests</a>
                     <a class="btn zw_service_btn" href="{{ route('generalrequest.type', ['type' => 'Corporate Wellness']) }}">Corporate Wellness Requests</a>
                    <a class="btn zw_service_btn" href="{{ route('generaljoinrequest.index') }}">All</a>
                  </div>
                </div>
                <table class="table table-hover text-nowrap zw_table">
                  <thead class="zw_bg_AF2245 zw_text_ffffff">
                    <tr>
                      <th class="poppins-medium zw_18">Date</th>
                      <th class="poppins-medium zw_18">First Name</th>
                      <th class="poppins-medium zw_18">Last Name</th>
                      <th class="poppins-medium zw_18">Email</th>
                      <th class="poppins-medium zw_18">Phone</th>
                      <th class="poppins-medium zw_18">Status</th>
                      <th class="poppins-medium zw_18" colspan="2"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($generaljoinrequest as $generaljoinrequest)
                    <tr class="m-4">
                      <td class="poppins-regular zw_14 zw_text_333333">{{ \Carbon\Carbon::parse($generaljoinrequest->CreatedAt)->format('d-m-Y') }}</td>
                      
                    
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $generaljoinrequest->Firstname }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $generaljoinrequest->Lastname }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $generaljoinrequest->Email }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $generaljoinrequest->Phone }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333" >
                     
                        <form id="statusForm" class="statusForm">
                          @csrf
                          <input type="hidden" name="gid" id="gid" class="gid" value="{{ $generaljoinrequest->id }}">
                          <input type="checkbox" data-toggle="toggle" data-size="sm" id="StatusUpdate" class="StatusUpdate" data-on="Active" data-off="In Active"  {{ $generaljoinrequest->Status ? 'checked' : '' }}> 
                        </form>     
                      </td>
                       <td class="poppins-regular zw_14 zw_text_333333">
                        <a class="btn zw_text_AF2245 zw_a zw_24" href="{{ route('generaljoinrequest.show',$generaljoinrequest->id) }}"><i class="fa fa-edit" aria-hidden="true"></i> </a>
                        </td>
                      <td>
                        <form action="{{ route('generaljoinrequest.destroy',$generaljoinrequest->id) }}" method="POST">
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
       $('.StatusUpdate').change(function() {
        var status = $(this).prop('checked');
        var gid = $(this).closest('.statusForm').find('.gid').val();
        
        
        $.ajax({
          url: "{{ route('gupdate.status') }}",
          method: 'POST',
          data: {
            _token: "{{ csrf_token() }}",
            id:  gid,
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
</body>
</html>