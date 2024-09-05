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
                        <a href="{{ route('serviceproviders.index') }}" class="poppins-medium zw_18 zw_text_333333 zw_a zw_back">
                            <i class="fas fa-arrow-left right mr-2"></i>Back
                        </a>

                    </div>
                    <div class="col-sm-6 ">
                        <a class="btn zw_btn float-right m-2" href="{{ route('serviceproviders.edit',$serviceprovider->id) }}">Update</a>
                    </div>
                    <!-- <a class="btn zw_btn m-2" href="{{ route('serviceproviders.index') }}"> Back</a> -->
                </div>
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <h3 class="poppins-semibold zw_34 zw_text_AF2245 mt-4 mb-4">Healthcare</h3>
                        <!-- general form elements -->
                        <div class="card">
                            <!-- <div class="card-header">
                    <h3 class="card-title">Show Service Providers</h3>
                </div> -->
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="card-body">
                                <div class="form-row zw_form_row">
                                    <div class="form-group col-md-4 zw_18 poppins-medium">
                                        <label for="exampleInputErname" class="zw_text_AF2245 poppins-bold">En name :</label>
                                        {{ $serviceprovider->Enname }}
                                    </div>
                                    <div class="form-group col-md-4 zw_18 poppins-medium">
                                        <label for="exampleInputErname" class="zw_text_AF2245 poppins-bold">Ar name :</label>
                                        {{ $serviceprovider->Arname }}
                                    </div>
                                     <div class="form-group col-md-4 zw_18 poppins-medium">
                                        <label for="exampleInputEmail1" class="zw_text_AF2245 poppins-bold">Email :</label>
                                        {{ $serviceprovider->email }}
                                    </div>
                                </div>
                                <div class="form-row zw_form_row">
                                    <div class="form-group col-md-4 zw_18 poppins-medium">
                                    <label for="exampleInputphone" class="zw_text_AF2245 poppins-bold">Phone :</label>
                                        {{ $serviceprovider->Phone }}
                                    </div>
                                    <div class="form-group col-md-4 zw_18 poppins-medium">
                                    <label for="exampleInputEmail1" class="zw_text_AF2245 poppins-bold">City :</label>
                                        {{ $serviceprovider->City }}
                                    </div>
                                    <div class="form-group col-md-4 zw_18 poppins-medium">
                                    <label for="exampleInputEmail1" class="zw_text_AF2245 poppins-bold">Country :</label>
                                        
                                        {{ $serviceprovider->Countrycode }}
                                    </div>    
                                </div>
                                <div class="form-row zw_form_row">
                                    <div class="form-group col-md-4 zw_18 poppins-medium">
                                        <label for="exampleInputphone" class="zw_text_AF2245 poppins-bold">Crnumber :</label>
                                        {{ $serviceprovider->Crnumber }}
                                    </div>
                                    
                                    <div class="form-group col-md-4 zw_18 poppins-medium">
                                        <label for="exampleInputphone" class="zw_text_AF2245 poppins-bold">Status :</label>
                                        {{ $serviceprovider->Status == 1 ? 'Active' : 'In Active' }}
                                    </div>
                                     <div class="form-group col-md-4 zw_18 poppins-medium">
                                        <label for="exampleInputphone" class="zw_text_AF2245 poppins-bold">Type of service :</label>
                                        {{ $serviceprovider->Typeofservice }}
                                    </div>
                                </div>
                                <div class="form-row zw_form_row">
                                    <div class="form-group col-md-4 zw_18 poppins-medium">
                                        <label for="exampleInputVat" class="zw_text_AF2245 poppins-bold">Financial share :</label>
                                        {{ $serviceprovider->Financialshare }}
                                    </div>
                                    <div class="form-group col-md-4 zw_18 poppins-medium">
                                        <label for="exampleInputVat" class="zw_text_AF2245 poppins-bold">Fin. share type :</label>
                                        {{ $serviceprovider->Share }}
                                    </div>
                                    <div class="form-group col-md-4 zw_18 poppins-medium">
                                        <label for="exampleInputVat" class="zw_text_AF2245 poppins-bold">Vat :</label>
                                        {{ $serviceprovider->Vat }}
                                    </div>  
                                </div>
                                <div class="form-row zw_form_row">
                                    <div class="form-group col-md-4 zw_18 poppins-medium">
                                        <label for="exampleInputVat" class="zw_text_AF2245 poppins-bold">Estimated time :</label>
                                        {{ $serviceprovider->EstimatedTime }}
                                    </div>
                                    <div class="form-group col-md-4 zw_18 poppins-medium">
                                        <label for="exampleInputVat" class="zw_text_AF2245 poppins-bold">Location :</label>
                                        {{ $serviceprovider->Location }}
                                    </div>
                                    <div class="form-group col-md-4 zw_18 poppins-medium">
                                        <label for="exampleInputVat" class="zw_text_AF2245 poppins-bold">Visit fees :</label>
                                        {{ $serviceprovider->Visitfees }}
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
                        <!-- <div class="card zw_card"> -->
                        <!-- <div class="card-header">
                    <h3 class="card-title">Attachments</h3>
                </div> -->
                        <div class="card-deck row">
                            <!-- First Card -->
                            <div class="card col-md-2 zw_card">
                                <div class="card-title  mb-3">
                                    <h6 class="card-subtitle mt-2 text-center poppins-medium zw_16 zw_text_333333">Logo</h6>
                                </div>
                                <div class="card-body zw_box_shadow zw_bor_radi_6">
                                    <img class="center-block img-fluid" src="{{ asset($serviceprovider->Logo_url) }}" height="" width="auto" />
                                </div>
                            </div>
                            <!-- Second Card -->
                            <div class="card col-md-3 zw_card">
                                <div class="card-title mb-3">
                                    <h6 class="card-subtitle mt-2 text-center poppins-medium zw_16 zw_text_333333">Upload Ministry Health Licence</h6>
                                </div>
                                <div class="card-body zw_bg_f7e9ec zw_bor_radi_6">
                                    <a class="btn zw_pdf_btn zw_pdfbtn_bg poppins-medium zw_18" href="{{ asset($serviceprovider->Healthlicence_url) }}" style="width:100%">
                                        <span style="float : left"> PDF</span>
                                        <span>Download PDF</span>

                                    </a>
                                </div>
                            </div>

                            <!-- Three Card -->
                            <div class="card col-md-3 zw_card">
                                <div class="card-title mb-3">
                                    <h6 class="card-subtitle mt-2 text-center poppins-medium zw_16 zw_text_333333">Upload Commerical Licence</h6>
                                </div>
                                <div class="card-body zw_bg_f7e9ec zw_bor_radi_6">
                                    <a class="btn zw_pdf_btn zw_pdfbtn_bg poppins-medium zw_18" href="{{ asset($serviceprovider->Comcerregister_url) }}">
                                        <span style="float : left"> PDF</span>
                                        <span>Download PDF</span>
                                    </a>
                                </div>
                            </div>
                            <!-- forth Card -->
                            <div class="card col-md-4 zw_card">
                                <div class="card-title mb-3">
                                    <h6 class="card-subtitle mt-2 text-center poppins-medium zw_16 zw_text_333333">Upload Vat Registration Licence</h6>
                                </div>
                                <div class="card-body zw_bg_f7e9ec zw_bor_radi_6">
                                    <a class="btn zw_pdf_btn zw_pdfbtn_bg poppins-medium zw_18" href="{{ asset($serviceprovider->Regcertificate_url) }}">
                                        <span style="float : left"> PDF</span>
                                        <span>Download PDF</span>
                                    </a>
                                </div>
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