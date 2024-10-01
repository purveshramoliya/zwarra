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
                        <a href="{{ route('ourservices.index') }}"
                            class="poppins-medium zw_18 zw_text_333333 zw_a zw_back">
                            <i class="fas fa-arrow-left right mr-2"></i>Back
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="poppins-semibold zw_34 zw_text_AF2245 mt-3">Main Service</h3>
                    </div>
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="">
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-row zw_form_row">
                                        <div class="container">
                                            <div class="form-row align-items-center">
                                                <div class="col-auto">
                                                    <img id="imagePreview" src="#" alt="Image Preview">
                                                </div>
                                                <div class="col-auto">
                                                    <label for="exampleInputLogo"
                                                        class="pt-5 zw_label_height zw_label_height zw_poppins_regular poppins-regular zw_18 zw_text_111535">Upload
                                                        Logo</label>
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" name="Logo"
                                                                class="custom-file-input" id="exampleInputLogo"
                                                                onchange="updateFileName(this)">
                                                            <label class="custom-file-label zw_form_control"
                                                                style="display:none;" for="exampleInputLogo">Choose
                                                                file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row zw_form_row">
                                        <div class="form-group col-md-6">
                                            <label
                                                class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535"
                                                for="exampleInputEnname">En name <span
                                                    style="color: red;">*</span></label>
                                            <input type="text" name="Enname"
                                                class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control"
                                                id="exampleInputEnname" placeholder="Name of service">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label
                                                class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535"
                                                for="exampleInputArname">Ar name <span
                                                    style="color: red;">*</span></label>
                                            <input type="text" name="Arname"
                                                class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control"
                                                id="exampleInputArname" placeholder="Name of service">
                                        </div>
                                    </div>
                                    <div class="form-row zw_form_row">
                                        <div class="form-group col-md-6">
                                            <label
                                                class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535"
                                                for="exampleInputEndescription">En Description</label>
                                            <textarea name="Endescription" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control"
                                                id="exampleInputEndescription" rows="2" placeholder="Enter En Description"></textarea>
                                                <p class="mt-2 text-right"  style="color:#AF2245">20/80 characters</p>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label
                                                class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535"
                                                for="exampleInputArdescription">Ar Description</label>
                                            <textarea name="Ardescription" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control"
                                                id="exampleInputArdescription" rows="2" placeholder="Enter Ar Description"></textarea>
                                                <p class="mt-2 text-right" style="color:#AF2245">20/80 characters</p>
                                        </div>
                                    </div>
                                    <div class="form-row zw_form_row">
                                        <div class="col-md-6">
                                            <label
                                                class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535"
                                                for="statusActive" style="color: #af2245;">Status</label><br>
                                            <input type="radio" class="mr-2" id="statusActive" style="width:20px;height:20px;" name="status" checked>
                                            <label for="statusActive" style="font-weight:400;">Active</label>
                                        </div>
                                        <div class="col-md-6">
                                          <br>
                                          <br>
                                          <button type="submit" class="zw_submit p-2 float-right" style="background:#af2245;color:white">Save</button>
                                            <button type="reset" class="zw_submit p-2 float-right mr-4" style="border:none !important">Reset</button>
                                        </div>
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
