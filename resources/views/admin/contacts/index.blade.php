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
          <div class="row">
            <div class="col-12 col-md-12 col-lg-6">
              <h1 class="poppins-semibold zw_46 zw_text_AF2245"> Support </h1>
            </div>
            <div class="col-12 col-md-12 col-lg-6">
              <!-- <a class="btn zw_add_btn float-right m-2 poppins-medium zw_18" href="{{ route('contacts.create') }}"> <i class="fas fa-plus right mr-2"></i>Add New Contact</a> -->

              <!-- <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Service Provider</li>
              </ol> -->
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- <div class="mt-4">
        {{ $contact->links() }}
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
          <!-- <div class="col-6">
            <a class="btn zw_add_btn float-right m-2 poppins-medium zw_18" href="{{ route('contacts.create') }}"> <i class="fas fa-plus right mr-2"></i>Add New Support Ticket</a>
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
                  {{ $contact->links() }}
                </div>
                <table class="table table-hover text-nowrap">
                  <thead class="zw_bg_AF2245 zw_text_ffffff">
                    <tr>
                      <th class="poppins-medium zw_18">Date & Time</th>
                      <th class="poppins-medium zw_18">Subject</th>
                      <th class="poppins-medium zw_18">Phone</th>
                      <th class="poppins-medium zw_18">Email</th>
                      <th class="poppins-medium zw_18 text-right">Message</th>
                      <th class="poppins-medium zw_18" colspan="2"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($contact as $item)
                    <tr class="m-4">
                      <td class="poppins-regular zw_14 zw_text_333333" style="padding-left: 25px !important;">
                        {{ \Carbon\Carbon::parse($item->CreatedAt)->format('d/m/y') }}
                        <p style="font-size:12px;">{{ \Carbon\Carbon::parse($item->CreatedAt)->format('h:i A') }}</p>
                      </td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $item->Subject }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $item->Phone }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $item->Email }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333 text-right">{{ $item->Message }}</td>
                      <td>
                        <i class="fas fa-angle-right right zw_text_AF2245 zw_16" data-toggle="modal" data-target="#exampleModal{{$item->id}}"></i>
                      </td>
                    </tr>

                    <!-- Modal -->
                    <div class="modal fade bd-example-modal-lg" id="exampleModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                          <div class="modal-body">
                            <div class="row">
                              <div class="col-sm-12">
                                <h3 class="poppins-semibold zw_text_AF2245 mt-3 mb-4 text-center">Contacts</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: absolute;top: 0;right: 10px;">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="container">
                                <div class="row text-center zw_14">
                                  <div class="col-md-12">
                                    <div class="row mb-4">
                                      <div class="col-md-4">
                                        <h5 class="zw_14 font-weight-bold">Subject</h5>
                                        <p class="mt-4">{{ $item->Subject }}</p>
                                      </div>
                                      <div class="col-md-4">
                                        <h5 class="zw_14 font-weight-bold">Email</h5>
                                        <p class="mt-4">{{ $item->Email }}</p>
                                      </div>
                                      <div class="col-md-4">
                                        <h5 class="zw_14 font-weight-bold">Phone</h5>
                                        <p class="mt-4">{{ $item->Phone }}</p>
                                      </div>
                                    </div>
                                    <div class="text-center mt-4">
                                      <h5 class="zw_14 font-weight-bold">Message</h5>
                                      <p class="mt-4">{{ $item->Message }}</p>
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