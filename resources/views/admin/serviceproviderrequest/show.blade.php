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
                        <a href="{{ route('serviceproviderrequest.index') }}" class="poppins-medium zw_18 zw_text_333333 zw_a zw_back">
                            <i class="fas fa-arrow-left right mr-2"></i>Back
                        </a>

                    </div>
                    <div class="col-sm-6 ">
                        <a class="btn zw_btn float-right m-2" href="{{ route('serviceproviderrequest.edit',$serviceproviderrequest->id) }}">Update</a>
                    </div>
                </div>
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <h3 class="poppins-semibold zw_34 zw_text_AF2245 mt-4 mb-4">Healthcare Request</h3>
                        <!-- general form elements -->
                        <div class="card">
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="card-body">
                                <div class="form-row zw_form_row">
                                    <div class="form-group col-md-6 zw_18 poppins-medium">
                                        <label for="exampleInputErname" class="zw_text_AF2245 poppins-bold">Healthcare Name :</label>
                                        {{ $serviceproviderrequest->healthcare }}
                                    </div>
                                    <div class="form-group col-md-6 zw_18 poppins-medium">
                                        <label for="exampleInputErname" class="zw_text_AF2245 poppins-bold">Register No :</label>
                                        {{ $serviceproviderrequest->registernumber }}
                                    </div>
                                </div>
                                <div class="form-row zw_form_row">
                                    <div class="form-group col-md-6 zw_18 poppins-medium">
                                        <label for="exampleInputEmail1" class="zw_text_AF2245 poppins-bold">Email :</label>
                                        {{ $serviceproviderrequest->email }}
                                    </div>
                                    <div class="form-group col-md-6 zw_18 poppins-medium">
                                        <label for="exampleInputphone" class="zw_text_AF2245 poppins-bold">Phone :</label>
                                        {{ $serviceproviderrequest->phone }}
                                    </div>
                                </div>
                               
                                <div class="form-row zw_form_row">
                                    <div class="form-group col-md-6 zw_18 poppins-medium">
                                        <label for="exampleInputEmail1" class="zw_text_AF2245 poppins-bold">Selected Services :</label>
                                        {{ $serviceproviderrequest->service_type }}
                                    </div>
                                    <div class="form-group col-md-6 zw_18 poppins-medium">
                                        <label for="exampleInputphone" class="zw_text_AF2245 poppins-bold">Description :</label>
                                        {{ $serviceproviderrequest->description }}
                                    </div>
                                </div>
                                <div class="form-row zw_form_row">
                                    <div class="form-group col-md-6 zw_18 poppins-medium">
                                        <label for="exampleInputphone" class="zw_text_AF2245 poppins-bold">Status :</label>
                                        {{ $serviceproviderrequest->Status == 1 ? 'Active' : 'In Active' }}
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