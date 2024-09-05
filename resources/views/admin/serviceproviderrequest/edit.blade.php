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
                        <a href="{{ route('serviceproviderrequest.index') }}" class="poppins-medium zw_18 zw_text_333333 zw_a zw_back">
                            <i class="fas fa-arrow-left right mr-2"></i>Back
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="poppins-semibold zw_34 zw_text_AF2245 mt-3">Healthcare Request</h3>
                    </div>
                    <!-- left column -->
                    <div class="col-md-12 ">
                        <!-- general form elements -->
                        <div class="card card-primary pb-4">
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
                            <form action="{{ route('serviceproviderrequest.update',$serviceproviderrequest->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-row zw_form_row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputErname" class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">Healthcare Name</label>
                                            <input type="text" name="healthcare" value="{{ $serviceproviderrequest->healthcare }}" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputErname" placeholder="Enter Healthcare Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputarname" class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">Liecence Regsiter Number</label>
                                            <input type="text" name="registernumber" value="{{ $serviceproviderrequest->registernumber }}" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputarname" placeholder="Enter Liecence Regsiter Number">
                                        </div>
                                    </div>

                                    <div class="form-row zw_form_row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1" class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">Email </label>
                                            <input type="email" name="email" value="{{ $serviceproviderrequest->email }}" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputEmail1" placeholder="Enter Email">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputphone" class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">Phone</label>
                                            <input type="phone" name="phone" value="{{ $serviceproviderrequest->phone }}" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputphone" placeholder="Enter Phone">
                                        </div>
                                    </div>
                                    <!-- <div class="form-row zw_form_row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputcity" class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">Select city</label>
                                            <select name="city" class="custom-select poppins-regular zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none">
                                               <option value="Riyadh" {{ $serviceproviderrequest->city == 'Riyadh' ? 'selected' : '' }}>Riyadh</option>
                                                <option value="Jeddah" {{ $serviceproviderrequest->city == 'Jeddah' ? 'selected' : '' }}>Jeddah</option>
                                                <option value="Mecca" {{ $serviceproviderrequest->city == 'Mecca' ? 'selected' : '' }}>Mecca</option>
                                                <option value="Medina" {{ $serviceproviderrequest->city == 'Medina' ? 'selected' : '' }}>Medina</option>
                                                <option value="Ad Dammām" {{ $serviceproviderrequest->city == 'Ad Dammām' ? 'selected' : '' }}>Ad Dammām</option>
                                                <option value="Tabūk" {{ $serviceproviderrequest->city == 'Tabūk' ? 'selected' : '' }}>Tabūk</option>
                                                <option value="Al Hufūf" {{ $serviceproviderrequest->city == 'Al Hufūf' ? 'selected' : '' }}>Al Hufūf</option>
                                                <option value="Al Qaţīf" {{ $serviceproviderrequest->city == 'Al Qaţīf' ? 'selected' : '' }}>Al Qaţīf</option>
                                                <option value="Al Ḩillah" {{ $serviceproviderrequest->city == 'Al Ḩillah' ? 'selected' : '' }}>Al Ḩillah</option>
                                                <option value="Aţ Ţā’if" {{ $serviceproviderrequest->city == 'Aţ Ţā’if' ? 'selected' : '' }}>Aţ Ţā’if</option>
                                                <option value="Al Jubayl" {{ $serviceproviderrequest->city == 'Al Jubayl' ? 'selected' : '' }}>Al Jubayl</option>
                                                <option value="Buraydah" {{ $serviceproviderrequest->city == 'Buraydah' ? 'selected' : '' }}>Buraydah</option>
                                                <option value="Ḩafr al Bāţin" {{ $serviceproviderrequest->city == 'Ḩafr al Bāţin' ? 'selected' : '' }}>Ḩafr al Bāţin</option>
                                                <option value="Yanbu" {{ $serviceproviderrequest->city == 'Ḩā’il' ? 'selected' : '' }}>Yanbu</option>
                                                <option value="Ḩā’il" {{ $serviceproviderrequest->city == 'Ḩā’il' ? 'selected' : '' }}>Ḩā’il</option>
                                                <option value="Abhā" {{ $serviceproviderrequest->city == 'Abhā' ? 'selected' : '' }}>Abhā</option>
                                                <option value="Sakākā" {{ $serviceproviderrequest->city == 'Sakākā' ? 'selected' : '' }}>Sakākā</option>
                                                <option value="Al Qurayyāt" {{ $serviceproviderrequest->city == 'Al Qurayyāt' ? 'selected' : '' }}>Al Qurayyāt</option>
                                                <option value="Jāzān" {{ $serviceproviderrequest->city == 'Jāzān' ? 'selected' : '' }}>Jāzān</option>
                                                <option value="Najrān" {{ $serviceproviderrequest->city == 'Najrān' ? 'selected' : '' }}>Najrān</option>
                                                <option value="Al Wajh" {{ $serviceproviderrequest->city == 'Al Wajh' ? 'selected' : '' }}>Al Wajh</option>
                                                <option value="Arar" {{ $serviceproviderrequest->city == 'Arar' ? 'selected' : '' }}>Arar</option>
                                                <option value="Al Bāḩah" {{ $serviceproviderrequest->city == 'Al Bāḩah' ? 'selected' : '' }}>Al Bāḩah</option>
                                                <option value="Tathlīth" {{ $serviceproviderrequest->city == 'Tathlīth' ? 'selected' : '' }}>Tathlīth</option>
                                            </select>
                                        </div> -->
                                       <!--  <div class="form-group col-md-6">
                                            <label for="exampleInputtypeofservice" class="zw_label_height zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">Type of service</label>
                                         
                                            <select name="Typeofservice" class="custom-select poppins-regular zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none">
                                                <option value="Medical" {{ $serviceproviderrequest->Typeofservice == 'Medical' ? 'selected' : '' }}>Medical</option>
                                                <option value="Non Medical" {{ $serviceproviderrequest->Typeofservice == 'Non Medical' ? 'selected' : '' }}>Non Medical</option>
                                                <option value="Various Visits" {{ $serviceproviderrequest->Typeofservice == 'Various Visits' ? 'selected' : '' }}>Various Visits</option>
                                                <option value="Visiting Individuals" {{ $serviceproviderrequest->Typeofservice == 'Visiting Individuals' ? 'selected' : '' }}>Visiting Individuals/Independents</option>
                                            </select>
                                        </div>  --> 
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <button type="submit" class="btn zw_submit zw_submit_wh">Submit</button>

                                        </div>
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