@include('admin.layouts.headermodule')

<body class="hold-transition sidebar-mini zw_sidebar">
    <div class="wrapper">
        @include('admin.layouts.header')
        @include('admin.layouts.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="row ">
                    <div class="col-sm-6 zw_back">
                        <a href="{{ route('bankings.index') }}" class="poppins-medium zw_18 zw_text_333333 zw_a zw_back">
                            <i class="fas fa-arrow-left right mr-2"></i>Back
                        </a>
                    </div>
                    <div class="col-sm-6 ">
                        <a class="btn zw_btn float-right m-2" href="{{ route('bankings.edit',$banking->id) }}">Update</a>
                    </div>
                </div>
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">

                        <h3 class="poppins-semibold zw_34 zw_text_AF2245 mt-4 mb-4">Banking Information</h3>

                        <!-- general form elements -->
                        <div class="card">
                            <!-- <div class="card-header">
                    <h3 class="card-title">Show Service Providers</h3>
                </div> -->
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-6 zw_18 poppins-medium">
                                        <label for="exampleInputLogo" class="zw_text_AF2245 poppins-bold">Logo :</label>
                                        <img class="center-block img-fluid" height="200" width="200" src="{{ asset($banking->Logo) }}" height="" width="auto" />
                                    </div>
                                </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 zw_18 poppins-medium">
                                    <label for="exampleInputDate" class="zw_text_AF2245 poppins-bold">Date :</label>
                                    {{ $banking->CreatedAt }}
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 zw_18 poppins-medium">
                                    <label for="exampleInputName" class="zw_text_AF2245 poppins-bold">Name :</label>
                                    {{ $banking->Name }}
                                </div>
                                <div class="form-group col-md-6 zw_18 poppins-medium">
                                    <label for="exampleInputPhone" class="zw_text_AF2245 poppins-bold">Phone :</label>
                                    {{ $banking->Phone }}
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 zw_18 poppins-medium">
                                    <label for="exampleInputEmail" class="zw_text_AF2245 poppins-bold">Email :</label>
                                    {{ $banking->Email }}
                                </div>
                                <div class="form-group col-md-6 zw_18 poppins-medium">
                                    <label for="exampleInputDoctor" class="zw_text_AF2245 poppins-bold">Doctor :</label>
                                    {{ $banking->Doctor }}
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
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