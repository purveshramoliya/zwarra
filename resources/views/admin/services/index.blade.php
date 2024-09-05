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
          <!-- <div class="row mb-2">
            <div class="col-sm-6 zw_back">
              <a href="#" class="poppins-medium zw_18 zw_text_333333 zw_a zw_back">
                <i class="fas fa-arrow-left right mr-2"></i>Back
              </a>
            </div>
          </div> -->
          <div class="row mb-2">
           <div class="col-12 col-md-12 col-lg-6">
              <h1 class="poppins-semibold zw_46 zw_text_AF2245 mt-2">Service</h1>

              <!-- <h1>Services</h1> -->
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
       <!-- <div class="mt-4">
        {{ $service->links() }}
    </div> -->
      <!-- Content Header (Page header) -->
      <section class="content-header">
      <div class="row">
          <div class="col-12 col-md-12 col-lg-6">
            <form class="zw_search_form">
              <div class="input-group input-group-sm">
                <input type="text" name="search" class=" zw_search_input zw_16 poppins-regular" placeholder="Search by name">
                <div class="input-group-append zw_input-group-append">
                  <button type="submit" class="btn zw_search_button zw_bg_ffffff">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
          <div class="col-12 col-md-12 col-lg-6">
          <a class="btn zw_add_btn float-right poppins-medium zw_18" href="{{ route('services.create', ['id' => $id]) }}"> <i class="fas fa-plus right mr-2"></i>Add new service</a>
            <!-- <a class="btn btn-success float-right m-2" href="{{ route('ourservices.create') }}">Add new main service</a> -->
          </div>
        </div>
        <!-- <div class="row">
          <div class="col-12">
            <a class="btn btn-success float-right m-2" href="{{ route('services.create') }}">Add new service</a>
          </div>
        </div> -->
        <div class="row">
          <div class="col-12">
            <div class="card zw_card">
              <!-- <div class="card-header">
                <h3 class="card-title">Service data</h3>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div> -->

              @if ($message = Session::get('success'))
              <div class="alert zw_alert_success">
                <p>{{ $message }}</p>
              </div>
              @endif
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
              <div class="pre_next">
                {{ $service->links() }}
                </div>
                <table class="table table-hover text-nowrap zw_table">
                  <thead class="zw_bg_AF2245 zw_text_ffffff">
                    <tr>
                      <th class="poppins-medium zw_18">Name</th>
                      <th class="poppins-medium zw_18">New Price</th>
                      <th class="poppins-medium zw_18">Service Type</th>
                      <th class="poppins-medium zw_18">Gender</th>
                      <th class="poppins-medium zw_18">Status</th>
                      <th class="poppins-medium zw_18" colspan="2"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($service as $service)
                    <tr>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $service->Enhealthcare }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $service->Newprice }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333"></td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $service->Gender }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333">
                        <!-- <div class="form-switch">
                          <input type="checkbox" class="form-check-input" id="site_state" style="cursor: pointer;">
                        </div> -->
                        <form id="statusForm" class="statusForm">
                          @csrf
                          <input type="hidden" name="sid" id="sid" class="sid" value="{{ $service->id }}">
                          <input type="checkbox" data-toggle="toggle" data-size="sm" id="StatusUpdate" class="StatusUpdate" data-on="Active" data-off="In Active"  {{ $service->Status ? 'checked' : '' }}> 
                        </form>  
                      </td>
                      <td class="poppins-regular zw_14 zw_text_333333">
                        <a class="btn zw_text_AF2245 zw_a zw_24" href="{{ route('services.show',$service->id) }}"><i class="fa fa-edit" aria-hidden="true"></i> </a>
                      </td>
                      <td class="poppins-regular zw_14 zw_text_333333">
                        <form action="{{ route('services.destroy',$service->id) }}" method="POST">
                          <!-- <a class="btn zw_btn" href="{{ route('services.show',$service->id) }}">Show</a> -->
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
        var sid = $(this).closest('.statusForm').find('.sid').val();
        
        $.ajax({
          url: "{{ route('supdate.status') }}",
          method: 'POST',
          data: {
            _token: "{{ csrf_token() }}",
            sid:  sid,
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