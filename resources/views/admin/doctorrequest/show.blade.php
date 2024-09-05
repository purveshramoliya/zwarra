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
                        <a href="{{ route('doctorrequest.index') }}" class="poppins-medium zw_18 zw_text_333333 zw_a zw_back">
                            <i class="fas fa-arrow-left right mr-2"></i>Back
                        </a>
                    </div>
                    <div class="col-sm-6 ">
                        <a class="btn zw_btn float-right m-2" href="{{ route('doctorrequest.edit',$doctorrequest->id) }}">Update</a>
                    </div>
                </div>
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <h3 class="poppins-semibold zw_34 zw_text_AF2245 mt-4 mb-4">Show Join Doctor Requests</h3>
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <!-- <div class="card-header">
                                <h3 class="card-title">Show Join Doctor Requests</h3>
                            </div> -->
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="card-body">
                                <div class="form-row zw_form_row">
                                    <div class="form-group  zw_18 poppins-medium col-md-6">
                                        <label class="zw_text_AF2245 poppins-bold" for="exampleInputErname">Firstname :</label>
                                        {{ $doctorrequest->firstname }}
                                    </div>
                                    <div class="form-group  zw_18 poppins-medium col-md-6">
                                        <label class="zw_text_AF2245 poppins-bold" for="exampleInputErname">Lastname :</label>
                                        {{ $doctorrequest->lastname }}
                                    </div>
                                </div>
                                <div class="form-row zw_form_row">
                                    <div class="form-group  zw_18 poppins-medium col-md-6">
                                        <label class="zw_text_AF2245 poppins-bold" for="exampleInputEmail1">Email :</label>
                                        {{ $doctorrequest->email }}
                                    </div>
                                    <div class="form-group  zw_18 poppins-medium col-md-6">
                                        <label class="zw_text_AF2245 poppins-bold" for="exampleInputPhone">Phone :</label>
                                        {{ $doctorrequest->phone }}
                                    </div>
                                </div>
                                <div class="form-row zw_form_row">
                                    <div class="form-group  zw_18 poppins-medium col-md-6">
                                        <label class="zw_text_AF2245 poppins-bold" for="exampleInputYearofexp">City :</label>
                                        {{ $doctorrequest->city }}
                                    </div>
                                    <div class="form-group  zw_18 poppins-medium col-md-6">
                                        <label class="zw_text_AF2245 poppins-bold" for="exampleInputPosition">Country :</label>
                                        {{ $doctorrequest->country }}
                                    </div>
                                </div>
                                <div class="form-row zw_form_row">
                                    <div class="form-group  zw_18 poppins-medium col-md-6">
                                        <label class="zw_text_AF2245 poppins-bold" for="exampleInputMedicalspec">Degree :</label>
                                        {{ $doctorrequest->degree }}
                                    </div>
                                    <div class="form-group  zw_18 poppins-medium col-md-6">
                                        <label class="zw_text_AF2245 poppins-bold" for="exampleInputMedicalspec">Department :</label>
                                        {{ $doctorrequest->department }}
                                    </div>
                                </div>
                                <div class="form-row zw_form_row">
                                    <div class="form-group  zw_18 poppins-medium col-md-6">
                                        <label class="zw_text_AF2245 poppins-bold" for="exampleInputMedicalspec">Department :</label>
                                        {{ $doctorrequest->department }}
                                    </div>
                                    <div class="form-group  zw_18 poppins-medium col-md-6">
                                        <label for="exampleInputmed_reg_no" class="zw_text_AF2245 poppins-bold">Medical Registration Number :</label>
                                        {{ $doctorrequest->med_reg_no }}
                                    </div>
                                </div>
                                <div class="form-row zw_form_row">
                                    <div class="form-group  zw_18 poppins-medium col-md-6">
                                        <label class="zw_text_AF2245 poppins-bold" for="exampleInputMedicalspec">Medical Registration Expiry :</label>
                                        {{ $doctorrequest->med_reg_expiry }}
                                    </div>
                                    <div class="form-group  zw_18 poppins-medium col-md-6">
                                        <label for="exampleInputStatus" class="zw_text_AF2245 poppins-bold">Status :</label>
                                        {{ $doctorrequest->Status == 1 ? 'Active' : 'In Active' }}
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