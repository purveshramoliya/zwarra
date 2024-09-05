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
                        <a href="{{ route('termconditions.index') }}" class="poppins-medium zw_18 zw_text_333333 zw_a zw_back">
                            <i class="fas fa-arrow-left right mr-2"></i>Back
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="poppins-semibold zw_34 zw_text_AF2245 mt-3">Edit Terms & Conditions</h3>
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
                            <form action="{{ route('termconditions.update',$termcondition->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                  <div class="form-row zw_form_row">
                                    <div class="form-group col-md-6">
                                        <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputEnname">Name</label>
                                        <select name="Name" class="custom-select poppins-regular zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none">
                                            <option value="Service Provider" {{ $termcondition->Name == 'Service Provider' ? 'selected' : '' }}>Service Provider</option>
                                            <option value="Customer Login" {{ $termcondition->Name == 'Customer Login' ? 'selected' : '' }}>Customer Login</option>
                                            <option value="Video Doctor" {{ $termcondition->Name == 'Video Doctor' ? 'selected' : '' }}>Video Doctor</option>
                                            <option value="Customer Video" {{ $termcondition->Name == 'Customer Video' ? 'selected' : '' }}>Customer Video</option>
                                            <option value="Homecare Customer" {{ $termcondition->Name == 'Homecare Customer' ? 'selected' : '' }}>Homecare Customer</option>
                                            <option value="Purchases" {{ $termcondition->Name == 'Purchases' ? 'selected' : '' }}>Purchases</option>
                                            <option value="Availability,Errors and Inaccuracies" {{ $termcondition->Name == 'Availability,Errors and Inaccuracies' ? 'selected' : '' }}>Availability,Errors and Inaccuracies</option>
                                            <option value="Contest, Sweepstakes and Promotions" {{ $termcondition->Name == 'Contest, Sweepstakes and Promotions' ? 'selected' : '' }}>Contest, Sweepstakes and Promotions</option>
                                            <option value="Accounts" {{ $termcondition->Name == 'Accounts' ? 'selected' : '' }}>Accounts</option>
                                            <option value="Intellectual property" {{ $termcondition->Name == 'Intellectual property' ? 'selected' : '' }}>Intellectual property</option>
                                            <option value="Links to Other Websites" {{ $termcondition->Name == 'Links to Other Websites' ? 'selected' : '' }}>Links to Other Websites</option>
                                            <option value="Termination" {{ $termcondition->Name == 'Termination' ? 'selected' : '' }}>Termination</option>
                                            <option value="Limitation Of Liability" {{ $termcondition->Name == 'Limitation Of Liability' ? 'selected' : '' }}>Limitation Of Liability</option>
                                            <option value="Disclaimer" {{ $termcondition->Name == 'Disclaimer' ? 'selected' : '' }}>Disclaimer</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row zw_form_row">
                                   <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputTcenglish">English Terms & Conditions</label>
                                   <textarea name="Tcenglish"class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="editor" placeholder="Enter Terms & Conditions in english">{{ $termcondition->Tcenglish}}</textarea>
                               </div>
                               <div class="form-row zw_form_row">
                                <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputTcarabic">Arabic Terms & Conditions <span style="color: red;">*</span></label>
                                <textarea name="Tcarabic"class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="editor" placeholder="Enter Terms & Conditions in arabic">{{ $termcondition->Tcarabic}}</textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn zw_submit zw_submit_wh">Submit</button>
                            </div>
                        </div>
                        
                        <!-- /.card-body -->
                                <!-- <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div> -->
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