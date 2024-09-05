@include('healthcare.layouts.headermodule')

<body class="hold-transition sidebar-mini zw_sidebar">
  <div class="wrapper">
    @include('healthcare.layouts.header')
    @include('healthcare.layouts.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <!-- <div class="row mb-2">
            <div class="col-sm-6 zw_back">
              <a href="" class="poppins-medium zw_18 zw_text_333333 zw_a zw_back">
                <i class="fas fa-arrow-left right mr-2"></i>Back
              </a>
            </div>
          </div> -->
          <div class="row">
           <div class="col-12 col-md-12 col-lg-6">
              <h1 class="poppins-semibold zw_46 zw_text_AF2245 mt-2">
              <span class="mr-3"><img src="{{url('dist/img/zwaara_user.png')}}" alt="Zwaara User" class=" "></span> Services</h1>
              <!-- <p class="poppins-regular zw_16 zw_text_111535 mt-2 mb-1">You have 14 List of Sub-services</p> -->
            </div>
            <!--<div class="col-12 col-md-12 col-lg-6">
              <h1>Our Sub Services</h1>
            </div> -->
           <div class="col-12 col-md-12 col-lg-6">
              <a class="btn zw_add_btn float-right  poppins-medium zw_18" href="{{ route('services.create') }}"> <i class="fas fa-plus right mr-2"></i>Add New Lab Service</a>
              <a class="btn zw_add_btn float-right  poppins-medium zw_18 packageservicebtn" href="{{ route('services.createbody') }}"> <i class="fas fa-plus right mr-2 mb-1"></i>Add New Body Service</a>
              <!-- <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active"> Our Sub Services</li>
              </ol> -->
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
       <!-- <div class="mt-4">
        {{ $subservices->links() }}
    </div> -->
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="row">
          <div class="col-12 col-md-12 col-lg-6">
            <form class="zw_search_form ">
              <div class="input-group input-group-sm">
                <input type="text" name="search" class=" zw_search_input zw_16 poppins-regular" placeholder="Search by Sub Servicename">

                <div class="input-group-append zw_input-group-append">
                  <button type="submit" class="btn zw_search_button zw_bg_ffffff">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
          <div class="col-12 col-md-12 col-lg-6">
            <ul class="navbar-nav ml-auto">
              <!-- service Dropdown Menu -->
              <li class="nav-item dropdown">
                <a class="btn zw_lanbtn float-right poppins-medium zw_18" data-toggle="dropdown" href="#">
                  Service filter <i class="fas fa-angle-down right mr-2"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                  <a href="#" class="dropdown-item">
                    English
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">
                    Arebic
                  </a>
                </div>
              </li>

            </ul>
          </div>
        </div>
        <div class="row">
          <!-- <div class="col-12">
            <a class="btn btn-success float-right m-2" href="{{ route('subservices.create') }}">Add new sub service</a>
          </div> -->
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card zw_card">
              <!-- <div class="card-header">
                <h3 class="card-title">Our Sub Services </h3>
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
                  {{ $subservices->links() }}
              </div>
                <table class="table table-hover text-nowrap zw_table">
                  <thead class="zw_bg_AF2245 zw_text_ffffff">
                    <tr>
                      <th class="poppins-medium zw_18">Image</th>
                      <th class="poppins-medium zw_18">Servicename</th>
                      <th class="poppins-medium zw_18">Sub Servicename</th>
                      <th class="poppins-medium zw_18">Price</th>
                      <th class="poppins-medium zw_18">Description</th>
                      <th class="poppins-medium zw_18">Instrucation</th>
                      <th class="poppins-medium zw_18">Status</th>
                      <th class="poppins-medium zw_18" colspan="2"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($subservices as $subservice)
                    <tr>
                      <td class="poppins-regular zw_14 zw_text_333333"><img class="center-block" width="50px" height="" src="{{ asset($subservice->Logo) }}" height="" width="50px" /></td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $subservice->Mainservicename }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $subservice->Enname }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $subservice->Price }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $subservice->Endescription }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $subservice->Eninstrucation }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333">
                        <form id="statusForm" class="statusForm">
                          @csrf
                          <input type="hidden" name="ssid" id="ssid" class="ssid" value="{{ $subservice->id }}">
                          <input type="checkbox" data-toggle="toggle" data-size="sm" id="StatusUpdate" class="StatusUpdate" data-on="Active" data-off="In Active"  {{ $subservice->Status ? 'checked' : '' }}> 
                        </form> 
                      </td>
                      <td class="poppins-regular zw_14 zw_text_333333">
                         <a class="btn zw_text_AF2245 zw_a zw_24" href="{{ route('healthcare.services.show', ['id' => $subservice->id]) }}"><i class="fa fa-edit" aria-hidden="true"></i> </a>
                      </td>
                      <td class="poppins-regular zw_14 zw_text_333333">
                        <form action="{{ route('healthcare.services.destroy', ['id' => $subservice->id]) }}" method="POST">
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
        var ssid = $(this).closest('.statusForm').find('.ssid').val();
        
        $.ajax({
          url: "{{ route('ssupdate.status') }}",
          method: 'POST',
          data: {
            _token: "{{ csrf_token() }}",
            id:  ssid,
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