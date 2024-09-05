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
                        <a href="{{ route('alldoctors.index') }}" class="poppins-medium zw_18 zw_text_333333 zw_a zw_back">
                            <i class="fas fa-arrow-left right mr-2"></i>Back
                        </a>
                    </div>
                    <div class="col-sm-6 ">
                        <a class="btn zw_btn float-right m-2" href="{{ route('alldoctors.edit',$alldoctor->id) }}">Update</a>
                    </div>
                </div>
                <div class="row">
                    <!-- <a class="btn btn-primary m-2" href="{{ route('alldoctors.index') }}"> Back</a> -->
                    <!-- <a class="btn btn-primary float-right m-2" href="{{ route('alldoctors.edit',$alldoctor->id) }}">Update</a> -->
                    <!-- left column -->
                    <div class="col-md-12">
                        <h3 class="poppins-semibold zw_34 zw_text_AF2245 mt-4 mb-4">Show Doctors</h3>

                        <!-- general form elements -->
                        <div class="card card-primary">
                            <!-- <div class="card-header">
                                <h3 class="card-title">Show Doctors</h3>
                            </div> -->
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="card-body">
                                <div class="form-row zw_form_row">
                                    <div class="form-group  zw_18 poppins-medium col-md-6">
                                        <label class="zw_text_AF2245 poppins-bold" for="exampleInputErname">En name :</label>
                                        {{ $alldoctor->Enname }}
                                    </div>
                                    <div class="form-group  zw_18 poppins-medium col-md-6">
                                        <label class="zw_text_AF2245 poppins-bold" for="exampleInputErname">Ar name :</label>
                                        {{ $alldoctor->Arname }}
                                    </div>
                                </div>
                                <div class="form-row zw_form_row">
                                    <div class="form-group  zw_18 poppins-medium col-md-6">
                                        <label class="zw_text_AF2245 poppins-bold" for="exampleInputEmail1">Email :</label>
                                        {{ $alldoctor->email }}
                                    </div>
                                    <div class="form-group  zw_18 poppins-medium col-md-6">
                                        <label class="zw_text_AF2245 poppins-bold" for="exampleInputphone">Phone :</label>
                                        {{ $alldoctor->Phone }}
                                    </div>
                                </div>
                                <div class="form-row zw_form_row">
                                    <div class="form-group  zw_18 poppins-medium col-md-6">
                                        <label class="zw_text_AF2245 poppins-bold" for="exampleInputLicenceno">Licenceno :</label>
                                        {{ $alldoctor->Licenceno }}
                                    </div>
                                    <div class="form-group  zw_18 poppins-medium col-md-6">
                                        <label class="zw_text_AF2245 poppins-bold" for="exampleInputPassword">Doctor Positin :</label>
                                        {{ $alldoctor->Position }}
                                    </div>
                                  
                                </div>
                                <div class="form-row zw_form_row">
                                    <div class="form-group  zw_18 poppins-medium col-md-6">
                                        <label class="zw_text_AF2245 poppins-bold" for="exampleInputYearofexp">Year Of Experience :</label>
                                        {{ $alldoctor->Yearofexp }}
                                    </div>
                                    <div class="form-group  zw_18 poppins-medium col-md-6">
                                        <label class="zw_text_AF2245 poppins-bold" for="exampleInputPosition">Medical Registration Number :</label>
                                        {{ $alldoctor->Med_reg_no }}
                                    </div>
                                </div>
                                <div class="form-row zw_form_row">
                                    <div class="form-group  zw_18 poppins-medium col-md-6">
                                        <label class="zw_text_AF2245 poppins-bold" for="exampleInputMedicalspec">Medical Specialties :</label>
                                        {{ $alldoctor->Medicalspec }}
                                    </div>
                                    <div class="form-group  zw_18 poppins-medium col-md-6">
                                        <label for="exampleInputStatus" class="zw_text_AF2245 poppins-bold">Status :</label>
                                        {{ $alldoctor->Status == 1 ? 'Approved' : 'Pending' }}
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
        <div class="content-wrapper">

            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <h3 class="poppins-semibold zw_34 zw_text_AF2245 mt-4 mb-4">Attachments</h3>
                        <!-- general form elements -->
                            <!-- Second Card -->
                            <div class="row">
                            @foreach ($alldoctor->attachment as $attachment)
                            <div class="col-md-3">
                                <div class="card zw_card">
                                    <div class="card-body zw_bg_f7e9ec zw_bor_radi_6">
                                        <center>
                                            <p class="poppins-semibold zw_text_AF2245">{{ $attachment->filename }}</p>
                                            </center>
                                        <a class="btn zw_pdf_btn zw_pdfbtn_bg poppins-medium zw_18" href="{{ asset($attachment->file_path) }}" style="width:100%">
                                            <span>Download</span>
                                        </a>
                                        <a class="btn zw_pdf_btn zw_pdfbtn_bg poppins-medium zw_18" href="{{ asset($attachment->file_path) }}" target="_blank"><span>View</span></a>
                                        <!-- Add a delete button if needed -->
                                        <form action="{{ route('attachments.delete', $attachment->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn zw_pdf_btn zw_pdfbtn_bg poppins-medium zw_18" type="submit">Delete</button>
                                        </form>  
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        </div>
                        <!-- /.card-header -->
                        <!-- </div> -->
                        <!-- /.card -->
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
        </div>
    </div>
    </section>
    </div>
    @include('admin.layouts.footer')
    </div>
</body>
</html>