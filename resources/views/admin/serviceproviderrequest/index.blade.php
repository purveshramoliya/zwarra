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
              <h1 class="poppins-semibold zw_46 zw_text_AF2245 mt-2">Service Provider Request</h1>
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
                <input type="text" name="search" class=" zw_search_input zw_16 poppins-regular" placeholder="Search by Name">
                <div class="input-group-append zw_input-group-append">
                  <button type="submit" class="btn zw_search_button zw_bg_ffffff">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
          <div class="col-12 col-md-12 col-lg-6">
            <a class="btn zw_add_btn float-right m-2 poppins-medium zw_18" href="{{ route('serviceproviderrequest.create') }}"> <i class="fas fa-plus right mr-2"></i>Add Service Provider Request</a>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card zw_card">
              @if ($message = Session::get('success'))
              <div class="alert zw_alert_success">
                <p>{{ $message }}</p>
              </div>
              @endif
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <div class="pre_next">
                  {{ $serviceproviderrequest->links() }}
                </div>
                <!-- resources/views/main_view.blade.php -->
                <table class="table table-hover text-nowrap zw_table">
                  <thead class="zw_bg_AF2245 zw_text_ffffff">
                    <tr>
                      <th class="poppins-medium zw_18">Date</th>
                      <th class="poppins-medium zw_18">Name</th>
                      <th class="poppins-medium zw_18">Email</th>
                      <th class="poppins-medium zw_18">Phone</th>
                      <th class="poppins-medium zw_18">Status</th>
                      <th class="poppins-medium zw_18" colspan="4"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($serviceproviderrequest as $serviceproviderrequest)
                    <tr class="m-4">
                      <td class="poppins-regular zw_14 zw_text_333333">{{ \Carbon\Carbon::parse($serviceproviderrequest->created_at)->format('d-m-Y') }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $serviceproviderrequest->healthcare }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $serviceproviderrequest->email }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $serviceproviderrequest->phone }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333" >
                      
                        <form id="statusForm" class="statusForm">
                          @csrf
                          <input type="hidden" name="srid" id="srid" class="srid" value="{{ $serviceproviderrequest->id }}">
                          <input type="checkbox" data-toggle="toggle" data-size="sm" id="StatusUpdate" class="StatusUpdate" data-on="Active" data-off="In Active"  {{ $serviceproviderrequest->Status ? 'checked' : '' }}> 
                        </form>     
                      </td>
                      <td class="poppins-regular zw_14 zw_text_333333">
                     <a class="btn zw_text_AF2245 zw_a zw_24" href="{{ route('serviceproviderrequest.show',$serviceproviderrequest->id) }}"><i class="fa fa-edit" aria-hidden="true"></i> </a>
                      </td>
                      <td>
                        <form action="{{ route('serviceproviderrequest.destroy',$serviceproviderrequest->id) }}" method="POST">
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
        var srid = $(this).closest('.statusForm').find('.srid').val();
        
        $.ajax({
          url: "{{ route('srupdate.status') }}",
          method: 'POST',
          data: {
            _token: "{{ csrf_token() }}",
            id:  srid,
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