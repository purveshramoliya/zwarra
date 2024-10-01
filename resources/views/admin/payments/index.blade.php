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
              <h1 class="poppins-semibold zw_46 zw_text_AF2245">  Payments </h1>
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
                <input type="text" name="search" class=" zw_search_input zw_16 poppins-regular" placeholder="Search by Transacation Id">
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
              <div class="alert zw_alert_success">
                <p>{{ $message }}</p>
              </div>
              @endif
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
              <div class="pre_next">
                  {{ $payment->links() }}
                </div>
                <!-- resources/views/main_view.blade.php -->
                <!-- Add more buttons/links for other status as needed -->
                 <div class="row">
                  <div class="col-12 mb-2">
                    <a class="btn zw_service_btn active" href="{{ route('payments.index') }}">All</a>
                    <a class="btn zw_service_btn" href="{{ route('payments.status', ['status' => 'Approved']) }}">Approved</a>
                    <a class="btn zw_service_btn" href="{{ route('payments.status', ['status' => 'Pending']) }}">Pending</a>
                    <a class="btn zw_service_btn" href="{{ route('payments.status', ['status' => 'Failed']) }}">Failed</a>
                  </div>
                </div>
                <table class="table table-hover text-nowrap zw_table">
                  <thead class="zw_bg_AF2245 zw_text_ffffff">
                    <tr>
                      <th class="poppins-medium zw_18">Payment Date</th>
                      <th class="poppins-medium zw_18">Booking Date</th>
                      <th class="poppins-medium zw_18">First Name</th>
                      <th class="poppins-medium zw_18">Last Name</th>
                      <th class="poppins-medium zw_18">Email</th>
                      <th class="poppins-medium zw_18">Phone</th>
                      <th class="poppins-medium zw_18">Status</th>
                      <th class="poppins-medium zw_18">Address</th>
                      <th class="poppins-medium zw_18" colspan="1">Reason</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($payment as $payment)
                    <tr class="m-4">
                     <td class="poppins-regular zw_14 zw_text_333333">{{ \Carbon\Carbon::parse($payment->paymentdate)->format('d-m-Y') }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ \Carbon\Carbon::parse($payment->bookingdate)->format('d-m-Y') }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $payment->firstname }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $payment->lastname }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $payment->email }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $payment->phone }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $payment->status }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $payment->address }}</td>
                      <td>
                        <a class="btn zw_text_AF2245 zw_a zw_24" href="{{ route('payments.show',$payment->id) }}"><i class="fa fa-edit" aria-hidden="true"></i> </a>
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