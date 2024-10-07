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
              <h1 class="poppins-semibold zw_46 zw_text_AF2245"> Health Care Banking Info </h1>
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
                <input type="text" name="search" class=" zw_search_input zw_16 poppins-regular" placeholder="Search">
                <div class="input-group-append zw_input-group-append">
                  <button type="submit" class="btn zw_search_button zw_bg_ffffff">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
          <!-- <div class="col-12 col-md-12 col-lg-6">
            <a class="btn zw_add_btn float-right m-2 poppins-medium zw_18" href="{{ route('bankings.create') }}"> <i class="fas fa-plus right mr-2"></i>Add New Banking Information</a>
          </div> -->
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
                      <th class="poppins-medium zw_18" colspan="2"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($banking as $banking)
                    <tr class="m-4">
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $banking->CreatedAt }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333"> @if(!empty($banking->Logo) && file_exists(public_path($banking->Logo)))
                        <img class="center-block" width="50" src="{{ asset($banking->Logo) }}" alt="Medical Specialty Logo" />
                        @else
                        <img class="center-block" width="50" src="{{ asset('uploads/images.png')}}" alt="Placeholder Logo" />
                        @endif
                      </td>
                      <!-- <td><img class="center-block" src="{{ asset($banking->Logo) }}" height="100px" width="100px" /></td> -->
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $banking->Name }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $banking->Phone }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $banking->Email }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $banking->Doctor }}</td>
                      <td>
                        <i class="fas fa-angle-right right zw_text_AF2245 zw_16" data-toggle="modal" data-target="#exampleModal"></i>
                      </td>
                      <!-- <td>
                        <a class="btn zw_text_AF2245 zw_a zw_24" href="{{ route('bankings.show',$banking->id) }}"><i class="fa fa-edit" aria-hidden="true"></i> </a>
                      </td>
                      <td>
                        <form action="{{ route('bankings.destroy',$banking->id) }}" method="POST"> -->
                      <!-- <a class="btn zw_approve_btn" href="{{ route('bankings.show',$banking->id) }}">Show</a> -->
                      <!-- @csrf
                          @method('DELETE')
                           <button type="submit" class="btn zw_text_AF2245 zw_a zw_24"><i class="fas fa-trash"></i></button>
                        </form>
                      </td> -->
                    </tr>
                    <!-- Modal -->
                    <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                          <div class="modal-body">
                            <div class="row">
                              <div class="col-sm-12">
                                <h3 class="poppins-semibold zw_text_AF2245 mt-3 mb-4 text-center">Health Care Banking Information</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: absolute;top: 0;right: 10px;">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="container">
                                <div class="row text-center zw_14">
                                  <div class="offset-md-1 col-md-10 mb-3">
                                    <div class="rectangle text-white row">
                                      <div class="col-md-5 pt-3">
                                        <p>Arab National bank</p>
                                        <p>صسيشسيسشيسشيسيسشش</p>
                                        <p>767676767673676</p>
                                        <p>767676767673676</p>
                                      </div>
                                      <div class="offset-md-6 col-md-1">
                                        <i class="fas fa-credit-card" style="position: absolute;top: 30px;"></i>
                                        <img src="{{asset('/images/logomodel.png')}}" class="logomodel">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
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