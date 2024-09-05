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
         <!--  <div class="row mb-2">
            <div class="col-sm-6 zw_back">
              <a href="" class="poppins-medium zw_18 zw_text_333333 zw_a zw_back">
                <i class="fas fa-arrow-left right mr-2"></i>Back
              </a>
            </div>
          </div> -->
          <div class="row">
           <div class="col-12 col-md-12 col-lg-6">
              <h1 class="poppins-semibold zw_46 zw_text_AF2245 mt-2">
              <span class="mr-3"><img src="{{url('dist/img/zwaara_user.png')}}" alt="Zwaara User" class=" "></span> Privacy &  Policys</h1>
              <!-- <p class="poppins-regular zw_16 zw_text_111535 mt-2 mb-1">You have 10 List of main services</p> -->
              <!-- <h1>Our MedicalSpecialties</h1> -->
            </div>
           <div class="col-12 col-md-12 col-lg-6">
              <!-- <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active"> MedicalSpecialties</li>
              </ol> -->
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="row">
          <div class="col-12 col-md-12 col-lg-6">
          </div>
          <div class="col-12 col-md-12 col-lg-6">
            <a class="btn zw_add_btn float-right poppins-medium zw_18" href="{{ route('privacypolicys.create') }}"> <i class="fas fa-plus right mr-2"></i>Add Privacy & Policy</a>
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
                <table class="table table-hover text-nowrap zw_table">
                  <thead class="zw_bg_AF2245 zw_text_ffffff">
                    <tr>
                      <th class="poppins-medium zw_18">English Privacy & Policy</th>
                      <th class="poppins-medium zw_18">Arabic Privacy & Policy</th>
                      <th class="poppins-medium zw_18" colspan="2"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($privacypolicy as $privacypolicy)
                    <tr>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $privacypolicy->Tcenglish }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $privacypolicy->Tcarabic }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333" >
                        <form id="statusForm" class="statusForm">
                          @csrf
                          <input type="hidden" name="pid" id="pid" class="pid" value="{{ $privacypolicy->id }}">
                          <input type="checkbox" data-toggle="toggle" data-size="sm" id="StatusUpdate" class="StatusUpdate" data-on="Active" data-off="In Active"  onclick="event.preventDefault();" {{ $privacypolicy->Status ? 'checked' : '' }}> 
                        </form>     
                      </td>
                       <td>
                        <a class="btn zw_text_AF2245 zw_a zw_24" href="{{ route('privacypolicys.edit',$privacypolicy->id) }}"><i class="fa fa-edit" aria-hidden="true"></i> </a>
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
        var pid = $(this).closest('.statusForm').find('.pid').val();
        
        $.ajax({
          url: "{{ route('pupdate.status') }}",
          method: 'POST',
          data: {
            _token: "{{ csrf_token() }}",
            id:  pid,
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
    $(".StatusUpdate INPUT[type='checkbox']").click(function(evt) {
    evt.stopPropagation();
});
  </script>
</body>
</html>