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
          <!-- <div class="row mb-2">
            <div class="col-sm-6 zw_back">
              <a href="" class="poppins-medium zw_18 zw_text_333333 zw_a zw_back">
                <i class="fas fa-arrow-left right mr-2"></i>Back
              </a>
            </div>
          </div> -->

          <div class="row">
            <!-- <div class="col-12 col-md-12 col-lg-6">
              <h1 class="poppins-semibold zw_46 zw_text_AF2245 mt-2">
              <span class="mr-3"><img src="{{url('dist/img/zwaara_user.png')}}" alt="Zwaara User" class=" "></span>Doctors</h1>
              <p class="poppins-regular zw_16 zw_text_111535 mt-2 mb-1">You have 10 Doctors</p>
               <h1>Doctors</h1>
            </div> -->
            <div class="col-12 col-md-12 col-lg-6">
              <h1 class="poppins-semibold zw_46 zw_text_AF2245 mt-2">
                <span class="mr-3"><img src="{{url('dist/img/zwaara_user.png')}}" alt="Zwaara User" class=" "></span>Add Doctors
              </h1>
              <h5 class="pt-2 ml-5" style="font-size: 12px;">You have 10 Doctors</h5>
              <!-- <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Doctors</li>
              </ol> -->
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- <div class="mt-4">
        {{ $alldoctors->links() }}
    </div> -->
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="row mb-2">
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
          <div class="col-12 col-md-12 col-lg-6">
            <a class="btn zw_add_btn float-right  poppins-medium zw_18 pr-5" href="{{ route('alldoctors.create') }}"> <i class="fas fa-plus right mr-5"></i>Add Doctor</a>
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
                  {{ $alldoctors->links() }}
                </div>
                <table class="table table-hover text-nowrap zw_table">
                  <thead class="zw_bg_AF2245 zw_text_ffffff">
                    <tr>
                      <th class="poppins-medium zw_18">Image</th>
                      <th class="poppins-medium zw_18">En name</th>
                      <th class="poppins-medium zw_18">Email Address</th>
                      <th class="poppins-medium zw_18">Phone</th>
                      <th class="poppins-medium zw_18">Date</th>
                      <th class="poppins-medium zw_18">Years Experience</th>
                      <th class="poppins-medium zw_18">Status</th>
                      <th class="poppins-medium zw_18">upload license/File</th>
                      <th class="poppins-medium zw_18" colspan="2"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($alldoctors as $alldoctors)
                    <tr>
                      <td class="poppins-regular zw_14 zw_text_333333">@if(!empty($alldoctors->Logo))
                        <img
                          class="img-fluid mx-auto d-block"
                          src="{{ asset($alldoctors->Logo) }}"
                          alt="Doctor's Logo"
                          width="50">
                        @endif
                      </td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $alldoctors->Enname }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $alldoctors->Email }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $alldoctors->Phone }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ \Carbon\Carbon::parse($alldoctors->CreatedAt)->format('d-m-Y') }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333" style="text-align: center;">{{ $alldoctors->Yearofexp }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333">
                        <label class="switch">
                          <form id="statusForm" class="statusForm">
                            <input type="hidden" name="did" id="did" class="did" value="{{ $alldoctors->id }}">
                            <input type="checkbox" id="StatusUpdate" class="StatusUpdate" data-on="Active" data-off="In Active" {{ $alldoctors->Status ? 'checked' : '' }}>
                            <span class="slider"></span>
                          </form>
                        </label>
                        <!-- <form id="statusForm" class="statusForm">
                          @csrf
                          <input type="hidden" name="did" id="did" class="did" value="{{ $alldoctors->id }}">
                          <input type="checkbox" data-toggle="toggle" data-size="sm" id="StatusUpdate" class="StatusUpdate" data-on="Active" data-off="In Active" {{ $alldoctors->Status ? 'checked' : '' }}>
                        </form> -->
                      </td>
                      <td class="poppins-regular zw_14 zw_text_333333" style="display: flex; justify-content: center; align-items: center; height: 100px;"> <!-- Adjust height as needed -->
                        <p class="upload-license-btn" style="margin: 0;">Upload File</p>
                      </td>

                      <td class="poppins-regular zw_14 zw_text_333333">
                        <a class="btn zw_text_AF2245 zw_a zw_24" href="{{ route('alldoctors.show',$alldoctors->id) }}"><i class="fa fa-edit" aria-hidden="true"></i> </a>
                      </td>
                      <td>
                        <form action="{{ route('alldoctors.destroy',$alldoctors->id) }}" method="POST">
                          <!-- <a class="btn zw_btn" href="{{ route('alldoctors.show',$alldoctors->id) }}">Show</a> -->
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
        var did = $(this).closest('.statusForm').find('.did').val();

        $.ajax({
          url: "{{ route('docupdate.status') }}",
          method: 'POST',
          data: {
            _token: "{{ csrf_token() }}",
            id: did,
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