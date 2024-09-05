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
          <div class="row">
            <div class="col-12 col-md-12 col-lg-6">
              <h1 class="poppins-semibold zw_46 zw_text_AF2245"> Upload Banner </h1>
            </div>
            <div class="col-12 col-md-12 col-lg-6">
              <!-- Empty div for layout purposes -->
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="row">
          <div class="col-12 col-md-12 col-lg-6">
            <!-- Empty div for layout purposes -->
          </div>
          <div class="col-6">
            <a class="btn zw_add_btn float-right m-2 poppins-medium zw_18" href="{{ route('images.create') }}"> 
              <i class="fas fa-plus right mr-2"></i>Add New Banner
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            @if ($message = Session::get('success'))
              <div class="alert zw_alert_success">
                <p>{{ $message }}</p>
              </div>
            @endif

            <div class="container">
              @foreach($images->chunk(3) as $imageChunk)
                <div class="row">
                  @foreach($imageChunk as $image)
                    <div class="col-md-4 zw_card">
                      <div class="card-body zw_bg_f7e9ec zw_bor_radi_6">
                        <a href="{{ asset($image->image_path) }}" target="_blank">
                          <img src="{{ asset($image->image_path) }}" class="card-img-top" alt="...">
                        </a>
                        <a href="{{ $image->redirect_url }}" class="btn zw_pdf_btn zw_pdfbtn_bg" target="_blank">
                          {{ $image->redirect_url }}
                        </a>
                        <div class="d-flex justify-content-between mt-3">
                          <a href="{{ route('images.edit', $image->id) }}" class="btn btn zw_pdf_btn">Edit</a>
                          <form action="{{ route('images.destroy', $image->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn zw_pdf_btn">Delete</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  @endforeach
                </div>
              @endforeach
            </div>

          </div>
        </div>
        <!-- /.row -->
      </section>
    </div>
    @include('admin.layouts.footer')
  </div>
</body>
</html>
