@include('healthcare.layouts.headermodule')

<body class="hold-transition sidebar-mini zw_sidebar">
    <div class="wrapper">
        @include('healthcare.layouts.header')
        @include('healthcare.layouts.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Content Header (Page header) -->
            <section class="content-header">
            <div class="row  mb-3">
                    <div class="col-sm-6 zw_back">
                        <a href="{{ route('healthcare.services.index') }}" class="poppins-medium zw_18 zw_text_333333 zw_a zw_back">
                            <i class="fas fa-arrow-left right mr-2"></i>Back
                        </a>
                    </div>
                    <div class="col-sm-6 ">
                        <a class="btn zw_btn float-right m-2"  href="{{ route('healthcare.services.edit', ['id' => $subservices->id]) }}">Update</a>
                    </div>
                </div>
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                    <h3 class="poppins-semibold zw_34 zw_text_AF2245 mt-4 mb-4">Show Services</h3>
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <!-- <div class="card-header">
                                <h3 class="card-title">Show Sub Services</h3>
                            </div> -->
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="card-body">
                                <div class="form-row zw_form_row">
                                    <div class="form-group  zw_18 poppins-medium col-md-6">
                                       <label class="zw_text_AF2245 poppins-bold" for="exampleInputLogo">Logo :</label>
                                        <img src="{{ asset($subservices->Logo) }}" height="" width="50"/>
                                    </div>
                                    <div class="form-group zw_18 poppins-medium col-md-6">
                                        <label class="zw_text_AF2245 poppins-bold" for="exampleInputLogo">Test Category :</label>
                                        {{ $subservices->Testcategory }}
                                    </div>
                                </div>
                                 <div class="form-row zw_form_row">
                                    <div class="form-group zw_18 poppins-medium col-md-6">
                                        <label class="zw_text_AF2245 poppins-bold" for="exampleInputLogo">Sub Servicename :</label>
                                        {{ $subservices->Subservicename }}
                                    </div>
                                </div>
                                <div class="form-row zw_form_row">
                                    <div class="form-group  zw_18 poppins-medium col-md-6">
                                       <label class="zw_text_AF2245 poppins-bold" for="exampleInputEnname">En name :</label>
                                        {{ $subservices->Enname }}
                                    </div>
                                    <div class="form-group  zw_18 poppins-medium col-md-6">
                                       <label class="zw_text_AF2245 poppins-bold" for="exampleInputArname">Ar name :</label>
                                        {{ $subservices->Arname }}
                                    </div>
                                </div>
                                <div class="form-row zw_form_row">
                                    <div class="form-group  zw_18 poppins-medium col-md-6">
                                       <label class="zw_text_AF2245 poppins-bold" for="exampleInputEndescription">En Description :</label>
                                        {{ $subservices->Endescription }}
                                    </div>
                                    <div class="form-group  zw_18 poppins-medium col-md-6">
                                       <label class="zw_text_AF2245 poppins-bold" for="exampleInputArdescription">Ar Description :</label>
                                        {{ $subservices->Ardescription }}
                                    </div>
                                </div>
                                <div class="form-row zw_form_row">
                                    <div class="form-group  zw_18 poppins-medium col-md-6">
                                       <label class="zw_text_AF2245 poppins-bold" for="exampleInputService">Service :</label>
                                        {{ $subservices->Mainservicename }}
                                    </div>
                                    <div class="form-group  zw_18 poppins-medium col-md-6">
                                       <label class="zw_text_AF2245 poppins-bold" for="exampleInputServicetype">Service Type :</label>
                                        {{ $subservices->Servicetype }}
                                    </div>
                                </div>
                                <div class="form-row zw_form_row">
                                    <div class="form-group  zw_18 poppins-medium col-md-6">
                                       <label class="zw_text_AF2245 poppins-bold" for="exampleInputEninstrucation">En Instrucation :</label>
                                        {{ $subservices->Eninstrucation }}
                                    </div>
                                    <div class="form-group  zw_18 poppins-medium col-md-6">
                                       <label class="zw_text_AF2245 poppins-bold" for="exampleInputArinstrucation">Ar Instrucation :</label>
                                        {{ $subservices->Arinstrucation }}
                                    </div>
                                </div>
                                <div class="form-row zw_form_row">
                                    <div class="form-group  zw_18 poppins-medium col-md-6">
                                       <label class="zw_text_AF2245 poppins-bold" for="exampleInputEntitle">En available test title :</label>
                                        {{ $subservices->Entitle }}
                                    </div>
                                    <div class="form-group  zw_18 poppins-medium col-md-6">
                                       <label class="zw_text_AF2245 poppins-bold" for="exampleInputArinstrucation">Ar available test title :</label>
                                        {{ $subservices->Artitle }}
                                    </div>
                                </div>
                                <div class="form-row zw_form_row">
                                    <div class="form-group  zw_18 poppins-medium col-md-6">
                                       <label class="zw_text_AF2245 poppins-bold" for="exampleInputPrice">Price :</label>
                                        {{ $subservices->Price }}
                                    </div>
                                    <div class="form-group  zw_18 poppins-medium col-md-6">
                                       <label class="zw_text_AF2245 poppins-bold" for="exampleInputHealthcare">Healthcare :</label>
                                        {{ $subservices->Healthcare }}
                                    </div>
                                </div>
                                <div class="form-row zw_form_row">
                                    <div class="form-group  zw_18 poppins-medium col-md-6">
                                        <label class="zw_text_AF2245 poppins-bold" for="exampleInputStatus">Status :</label>
                                       {{ $subservices->Status == 1 ? 'Active' : 'In Active' }}
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