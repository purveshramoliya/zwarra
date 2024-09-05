@include('admin.layouts.headermodule')

<body class="hold-transition sidebar-mini zw_sidebar">
    <div class="wrapper">
        @include('admin.layouts.header')
        @include('admin.layouts.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="row  mb-3">
                    <div class="col-sm-6 zw_back">
                        <a href="{{ route('generaljoinrequest.index') }}" class="poppins-medium zw_18 zw_text_333333 zw_a zw_back">
                            <i class="fas fa-arrow-left right mr-2"></i>Back
                        </a>
                    </div>
                </div>
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <h3 class="poppins-semibold zw_34 zw_text_AF2245 mt-4 mb-4">General Join Request</h3>
                        <!-- general form elements -->
                        <div class="card">
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="card-body">
                                <div class="form-row zw_form_row">
                                    <div class="form-group col-md-4 zw_18 poppins-medium">
                                        <label for="exampleInputErname" class="zw_text_AF2245 poppins-bold">Firstname :</label>
                                        {{ $generaljoinrequest->Firstname }}
                                    </div>
                                    <div class="form-group col-md-4 zw_18 poppins-medium">
                                        <label for="exampleInputErname" class="zw_text_AF2245 poppins-bold">Lastname :</label>
                                        {{ $generaljoinrequest->Lastname }}
                                    </div>
                                     <div class="form-group col-md-4 zw_18 poppins-medium">
                                        <label for="exampleInputEmail1" class="zw_text_AF2245 poppins-bold">Email :</label>
                                        {{ $generaljoinrequest->Email }}
                                    </div>
                                </div>
                                <div class="form-row zw_form_row">
                                    <div class="form-group col-md-4 zw_18 poppins-medium">
                                    <label for="exampleInputphone" class="zw_text_AF2245 poppins-bold">Phone :</label>
                                        {{ $generaljoinrequest->Phone }}
                                    </div>
                                    <div class="form-group col-md-4 zw_18 poppins-medium">
                                    <label for="exampleInputEmail1" class="zw_text_AF2245 poppins-bold">City :</label>
                                        {{ $generaljoinrequest->City }}
                                    </div>
                                    <div class="form-group col-md-4 zw_18 poppins-medium">
                                    <label for="exampleInputEmail1" class="zw_text_AF2245 poppins-bold">Country :</label>
                                        
                                        {{ $generaljoinrequest->Country }}
                                    </div>    
                                </div>
                                <div class="form-row zw_form_row">
                                    <div class="form-group col-md-4 zw_18 poppins-medium">
                                        <label for="exampleInputphone" class="zw_text_AF2245 poppins-bold">Companyname :</label>
                                        {{ $generaljoinrequest->Companyname }}
                                    </div>
                                    
                                    <div class="form-group col-md-4 zw_18 poppins-medium">
                                        <label for="exampleInputphone" class="zw_text_AF2245 poppins-bold">Status :</label>
                                        {{ $generaljoinrequest->Status == 1 ? 'Active' : 'In Active' }}
                                    </div>
                                     <div class="form-group col-md-4 zw_18 poppins-medium">
                                        <label for="exampleInputphone" class="zw_text_AF2245 poppins-bold">Type :</label>
                                        {{ $generaljoinrequest->Type }}
                                      
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