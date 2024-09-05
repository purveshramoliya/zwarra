@include('admin.layouts.headermodule')

<body class="hold-transition sidebar-mini zw_sidebar">
  <div class="wrapper">
    @include('admin.layouts.header')
    @include('admin.layouts.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
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
        </div>
        <div class="row">
         
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
                  {{ $subservices->links() }}
              </div>
                <table class="table table-hover text-nowrap zw_table">
                  <thead class="zw_bg_AF2245 zw_text_ffffff">
                    <tr>
                      <th class="poppins-medium zw_18">Image</th>
                      <th class="poppins-medium zw_18">Pacakge Name</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($subservices as $subservice)
                    <tr data-packagename="{{ $subservice->Packagename }}" onclick="redirectToService('{{ $subservice->Packagename }}')">
                        @php
                            $imageName = str_replace(' ', '', $subservice->Packagename);
                        @endphp
                      <td class="poppins-regular zw_14 zw_text_333333"><img class="center-block" width="50px" height="" src="{{ url('uploads/' . $imageName . '.png') }}" height="" width="50px" /></td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $subservice->Packagename }}</td>  
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
    function redirectToService(packagename) {
        window.location.href = "{{ route('subservices.packageservices') }}?packagename=" + encodeURIComponent(packagename);
    }
</script>
</body>

</html>