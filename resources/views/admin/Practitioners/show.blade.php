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
                        <a href="{{ route('medicalspecialties.index') }}" class="poppins-medium zw_18 zw_text_333333 zw_a zw_back">
                            <i class="fas fa-arrow-left right mr-2"></i>Back
                        </a>
                    </div>
                    <div class="col-sm-6 ">
                        <a class="btn zw_btn float-right m-2" href="{{ route('medicalspecialties.edit',$medicalspecialty->id) }}">Update</a>
                    </div>
                </div>
                <div class="row">
                    <!-- <a class="btn btn-primary m-2" href="{{ route('medicalspecialties.index') }}"> Back</a>
                    <a class="btn btn-primary float-right m-2" href="{{ route('medicalspecialties.edit',$medicalspecialty->id) }}">Update</a> -->
                    <!-- left column -->
                    <div class="col-md-12">
                        <h3 class="poppins-semibold zw_34 zw_text_AF2245 mt-4 mb-4">Show Medical Department</h3>

                        <!-- general form elements -->
                        <div class="card card-primary">
                            <!-- <div class="card-header">
                                <h3 class="card-title">Show MedicalSpecialties</h3>
                            </div> -->
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="card-body">
                                <div class="form-row zw_form_row">
                                    <div class="form-group  zw_18 poppins-medium  col-md-4">
                                        <label class="zw_text_AF2245 poppins-bold" for="exampleInputLogo">Logo :</label>
                                        <img src="{{ asset($medicalspecialty->Logo) }}" height="" width="50" />
                                    </div>
                                </div>
                                <div class="form-row zw_form_row">
                                    <div class="form-group  zw_18 poppins-medium  col-md-6">
                                        <label class="zw_text_AF2245 poppins-bold" for="exampleInputEnname">En name :</label>
                                        {{ $medicalspecialty->Enname }}
                                    </div>
                                    <div class="form-group  zw_18 poppins-medium  col-md-6">
                                        <label class="zw_text_AF2245 poppins-bold" for="exampleInputArname">Ar name :</label>
                                        {{ $medicalspecialty->Arname }}
                                    </div>
                                </div>
                                <div class="form-row zw_form_row">
                                    <div class="form-group  zw_18 poppins-medium  col-md-6">
                                        <label class="zw_text_AF2245 poppins-bold" for="exampleInputEndescription">En Description :</label>
                                        {{ $medicalspecialty->Estimatedtime }}
                                    </div>
                                    <div class="form-group  zw_18 poppins-medium col-md-6">
                                        <label class="zw_text_AF2245 poppins-bold" for="exampleInputStatus">Status :</label>
                                       {{ $medicalspecialty->Status == 1 ? 'Active' : 'In Active' }}
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