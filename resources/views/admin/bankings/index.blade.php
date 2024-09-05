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
              <h1 class="poppins-semibold zw_46 zw_text_AF2245">  Banking Information </h1>
            </div>
           <div class="col-12 col-md-12 col-lg-6">
              <!-- <a class="btn zw_add_btn float-right m-2 poppins-medium zw_18" href="{{ route('bankings.create') }}"> <i class="fas fa-plus right mr-2"></i>Add New Banking Information</a> -->

              <!-- <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Service Provider</li>
              </ol> -->
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- <div class="mt-4">
        {{ $banking->links() }}
    </div> -->
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
            <a class="btn zw_add_btn float-right m-2 poppins-medium zw_18" href="{{ route('bankings.create') }}"> <i class="fas fa-plus right mr-2"></i>Add New Banking Information</a>
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
        {{ $banking->links() }}
    </div>
                <table class="table table-hover text-nowrap zw_table">
                  <thead class="zw_bg_AF2245 zw_text_ffffff">
                    <tr>
                      <th class="poppins-medium zw_18">Date</th>
                      <th class="poppins-medium zw_18">Logo</th>
                      <th class="poppins-medium zw_18">Name</th>
                      <th class="poppins-medium zw_18">Phone</th>
                      <th class="poppins-medium zw_18">Email</th>
                      <th class="poppins-medium zw_18">Doctor</th>
                      <th class="poppins-medium zw_18" colspan="2">Reason</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($banking as $banking)
                    <tr class="m-4">
                    <td class="poppins-regular zw_14 zw_text_333333">{{ $banking->CreatedAt }}</td>
                    <td><img class="center-block" src="{{ asset($banking->Logo) }}" height="100px" width="100px" /></td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $banking->Name }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $banking->Phone }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $banking->Email }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $banking->Doctor }}</td>
                      <td>
                        <a class="btn zw_text_AF2245 zw_a zw_24" href="{{ route('bankings.show',$banking->id) }}"><i class="fa fa-edit" aria-hidden="true"></i> </a>
                      </td>
                      <td>
                        <form action="{{ route('bankings.destroy',$banking->id) }}" method="POST">
                          <!-- <a class="btn zw_approve_btn" href="{{ route('bankings.show',$banking->id) }}">Show</a> -->
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
</body>
</html>