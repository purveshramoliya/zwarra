@include('admin.layouts.headermodule')

<body class="hold-transition sidebar-mini zw_sidebar">
    <div class="wrapper">
        @include('admin.layouts.header')
        @include('admin.layouts.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="row mb-2">
                    <div class="col-sm-12 zw_back">
                        <a href="{{ route('privacypolicys.index') }}" class="poppins-medium zw_18 zw_text_333333 zw_a zw_back">
                            <i class="fas fa-arrow-left right mr-2"></i>Back
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="poppins-semibold zw_34 zw_text_AF2245 mt-3">Edit Privacy & Policy</h3>
                    </div>
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <!-- /.card-header -->
                            @if ($errors->any())
                            <div class="alert zw_alert_danger">
                                There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <!-- form start -->
                            <form action="{{ route('privacypolicys.update',$privacypolicy->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                <div class="form-row zw_form_row">
                                   <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputTcenglish">English Privacy & Policy</label>
                                   <textarea name="Tcenglish"class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="editor" placeholder="Enter Terms & Conditions in english">{{ $privacypolicy->Tcenglish}}</textarea>
                               </div>
                               <div class="form-row zw_form_row">
                                <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputTcarabic">Arabic Privacy & Policy <span style="color: red;">*</span></label>
                                <textarea name="Tcarabic"class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="editor" placeholder="Enter Terms & Conditions in arabic">{{ $privacypolicy->Tcarabic}}</textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn zw_submit zw_submit_wh">Submit</button>
                            </div>
                        </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!--/.col (right) -->
        </div>
    </section>
</div>
@include('admin.layouts.footer')
</div>
</body>

</html>