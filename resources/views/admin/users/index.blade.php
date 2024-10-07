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
              <a onclick="history.back()" class="poppins-medium zw_18 zw_text_333333 zw_a zw_back">
                <i class="fas fa-arrow-left right mr-2"></i>Back
              </a>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-12 col-md-12 col-lg-6">
              <h1 class="poppins-semibold zw_46 zw_text_AF2245 mt-2">
                <span class="mr-3"><img src="{{url('dist/img/zwaara_user.png')}}" alt="Zwaara User" class=" "></span>Users
              </h1>
              <!-- <p class="poppins-regular zw_16 zw_text_111535 mt-2 mb-1">You have 4 Join request doctors</p> -->
            </div>
            <div class="col-12 col-md-12 col-lg-6">
              <!-- <a class="btn zw_add_btn float-right m-2 poppins-medium zw_18" href="{{ route('users.create') }}"> <i class="fas fa-plus right mr-2"></i>Add New User</a> -->

              <!-- <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Service Provider</li>
              </ol> -->
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- <div class="mt-4">
        {{ $user->links() }}
    </div> -->
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="row">
          <div class="col-12 col-md-12 col-lg-6">
            <form class="zw_search_form ">
              <div class="input-group input-group-sm">
                <input type="text" name="search" class=" zw_search_input zw_16 poppins-regular" placeholder="Search">
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
              <!-- <div class="card-header">
                <h3 class="card-title">Service provider data</h3>
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
                <!-- Add more buttons/links for other status as needed -->
                <div class="row">
                  <div class="col-12">
                    <a class="btn zw_service_btn active" href="{{ route('users.status', ['status' => 1]) }}">Active Users</a>
                    <a class="btn zw_service_btn" href="{{ route('users.status', ['status' => 0]) }}">DeActive users</a>
                    <a class="btn zw_service_btn active" href="{{ route('users.index') }}">All</a>
                  </div>
                  <div class="pre_next">
                    {{ $user->links() }}
                  </div>
                  <table class="table table-hover text-nowrap zw_table">
                    <thead class="zw_bg_AF2245 zw_text_ffffff">
                      <tr>
                        <th class="poppins-medium zw_18">Date</th>
                        <th class="poppins-medium zw_18">Name</th>
                        <th class="poppins-medium zw_18">User Id</th>
                        <th class="poppins-medium zw_18">Email Address</th>
                        <th class="poppins-medium zw_18">Phone</th>
                        <th class="poppins-medium zw_18">City</th>
                        <th class="poppins-medium zw_18" colspan="3"></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($user as $user)
                      <tr class="m-4">
                        <td class="poppins-regular zw_14 zw_text_333333"> {{ \Carbon\Carbon::parse($user->created_at)->format('d-m-y') }}</td>
                        <td class="poppins-regular zw_14 zw_text_333333">{{ $user->name }}</td>
                        <td class="poppins-regular zw_14 zw_text_333333">{{ $user->nationalid }}</td>
                        <td class="poppins-regular zw_14 zw_text_333333">{{ $user->email }}</td>
                        <td class="poppins-regular zw_14 zw_text_333333">{{ $user->phone }}</td>
                        <td class="poppins-regular zw_14 zw_text_333333">{{ $user->city }}</td>
                        <!-- <td class="poppins-regular zw_14 zw_text_333333">
                          <form id="statusForm" class="statusForm">
                            @csrf
                            <input type="hidden" name="uid" id="uid" class="uid" value="{{ $user->id }}">
                            <input type="checkbox" data-toggle="toggle" data-size="sm" id="StatusUpdate" class="StatusUpdate" data-on="Active" data-off="InActive" {{ $user->Status ? 'checked' : '' }}>
                          </form>
                        </td> -->
                        <!-- <td>
                          <a class="btn zw_text_AF2245 zw_a zw_24" href="{{ route('users.show',$user->id) }}"><i class="fa fa-edit" aria-hidden="true"></i></a>
                        </td> -->
                        <!-- <td>
                          <form action="{{ route('users.destroy',$user->id) }}" method="POST"> -->
                            <!-- <a class="btn zw_btn" href="{{ route('users.show',$user->id) }}">Show</a> -->
                            <!-- @csrf
                            @method('DELETE')
                            <button type="submit" class="btn zw_text_AF2245 zw_a zw_24"><i class="fas fa-trash"></i></button>
                          </form>
                        </td> -->
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
        var uid = $(this).closest('.statusForm').find('.uid').val();

        $.ajax({
          url: "{{ route('uupdate.status') }}",
          method: 'POST',
          data: {
            _token: "{{ csrf_token() }}",
            id:  uid,
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