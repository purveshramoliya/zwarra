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
              <h1 class="poppins-semibold zw_46 zw_text_AF2245 mt-2">Service Providers</h1>
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
            <a class="btn zw_add_btn float-right m-2 poppins-medium zw_18" href="{{ route('serviceproviders.create') }}"> <i class="fas fa-plus right mr-2"></i>Add New Service Provider</a>
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
            @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif

              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <div class="pre_next">
                  {{ $serviceproviders->links() }}
                </div>
                <!-- resources/views/main_view.blade.php -->
                <!-- Add more buttons/links for other status as needed -->
                 <div class="row">
                  <div class="col-12">
                    <a class="btn zw_service_btn active" href="{{ route('serviceproviders.index') }}">All</a>
                    <a class="btn zw_service_btn active" href="{{ route('serviceproviders.status', ['status' => 'Medical']) }}">Medical</a>
                    <a class="btn zw_service_btn" href="{{ route('serviceproviders.status', ['status' => 'Non Medical']) }}">Non Medical</a>
                    <a class="btn zw_service_btn" href="{{ route('serviceproviders.status', ['status' => 'Various Visits']) }}">Various Visits</a>
                    <a class="btn zw_service_btn" href="{{ route('serviceproviders.status', ['status' => 'Visiting Individuals']) }}">Visiting Individuals</a>
                  </div>
                </div>
                <table class="table table-hover text-nowrap zw_table">
                  <thead class="zw_bg_AF2245 zw_text_ffffff">
                    <tr>
                      <th class="poppins-medium zw_18">Date</th>
                      <th class="poppins-medium zw_18">Logo</th>
                      <th class="poppins-medium zw_18">Name</th>
                      <th class="poppins-medium zw_18">Vat</th>
                      <th class="poppins-medium zw_18">Email</th>
                      <th class="poppins-medium zw_18">Phone</th>
                      <th class="poppins-medium zw_18">Status</th>
                      <th class="poppins-medium zw_18" colspan="4"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($serviceproviders as $serviceprovider)
                    <tr class="m-4">
                      <td class="poppins-regular zw_14 zw_text_333333">{{ \Carbon\Carbon::parse($serviceprovider->CreatedAt)->format('d-m-Y') }}</td>
                      
                      <td class="poppins-regular zw_14 zw_text_333333"><img class="center-block" width="50px" height="" src="{{ asset($serviceprovider->Logo_url) }}" /></td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $serviceprovider->Enname }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $serviceprovider->Vat }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $serviceprovider->email }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $serviceprovider->Phone }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333" >
                       <!--  <div class="form-switch">
                          <input type="checkbox" class="form-check-input" id="site_state" style="cursor: pointer;">
                        </div> -->
                        <form id="statusForm" class="statusForm">
                          @csrf
                          <input type="hidden" name="spid" id="spid" class="spid" value="{{ $serviceprovider->id }}">
                          <input type="checkbox" data-toggle="toggle" data-size="sm" id="StatusUpdate" class="StatusUpdate" data-on="Active" data-off="In Active"  {{ $serviceprovider->Status ? 'checked' : '' }}> 
                        </form>     
                      </td>
                      <td>
                        <a class="btn zw_btn" href="{{ route('zones.index',['id' =>$serviceprovider->id]) }}">Zone</a>
                        <a class="btn zw_btn" href="{{ route('subservices.index',['id' =>$serviceprovider->id]) }}">Services</a>
                      </td>
                       <td>
                        <a class="btn zw_text_AF2245 zw_a zw_24" href="{{ route('serviceproviders.show',$serviceprovider->id) }}"><i class="fa fa-edit" aria-hidden="true"></i> </a>
                      </td>
                      <td>
                        <form action="{{ route('serviceproviders.destroy',$serviceprovider->id) }}" method="POST">
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
        var spid = $(this).closest('.statusForm').find('.spid').val();
        
        console.log(status);
        console.log(spid);
        
        $.ajax({
          url: "{{ route('spupdate.status') }}",
          method: 'POST',
          data: {
            _token: "{{ csrf_token() }}",
            id:  spid,
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