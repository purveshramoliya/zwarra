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
                        <a href="{{ route('users.index') }}" class="poppins-medium zw_18 zw_text_333333 zw_a zw_back">
                            <i class="fas fa-arrow-left right mr-2"></i>Back
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="poppins-semibold zw_34 zw_text_AF2245 mt-3">Edit User</h3>
                    </div>
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- <div class="pull-right">
                            <a class="btn btn-primary m-2" href="{{ route('users.index') }}"> Back</a>
                        </div> -->
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <!-- <div class="card-header">
                                <h3 class="card-title">Edit User</h3>
                            </div> -->
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
                            <form action="{{ route('users.update',$user->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-row zw_form_row">
                                        <div class="form-group col-md-6">
                                            <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputFirstname">Firstname</label>
                                            <input type="text" name="name" value="{{ $user->name }}" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputErname" placeholder="Enter First name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputLastname">Lastname</label>
                                            <input type="text" name="lastname" value="{{ $user->lastname }}" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputarname" placeholder="Enter Last name">
                                        </div>
                                    </div>
                                    <div class="form-row zw_form_row">
                                    <div class="form-group col-md-6">
                                            <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputEmail1">Email </label>
                                            <input type="email" name="email" value="{{ $user->email }}" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputEmail1" placeholder="Enter Email">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputphone">Phone</label>
                                            <input type="phone" name="phone" value="{{ $user->phone }}" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputphone" placeholder="Enter Phone">
                                        </div>
                                    </div>
                                    <div class="form-row zw_form_row">
                                        <div class="form-group col-md-6">
                                            <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputcity">City</label>
                                            <select name="city" class="custom-select poppins-regular zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none">
                                               <option value="Riyadh" {{ $user->City == 'Riyadh' ? 'selected' : '' }}>Riyadh</option>
                                                <option value="Jeddah" {{ $user->City == 'Jeddah' ? 'selected' : '' }}>Jeddah</option>
                                                <option value="Mecca" {{ $user->City == 'Mecca' ? 'selected' : '' }}>Mecca</option>
                                                <option value="Medina" {{ $user->City == 'Medina' ? 'selected' : '' }}>Medina</option>
                                                <option value="Ad Dammām" {{ $user->City == 'Ad Dammām' ? 'selected' : '' }}>Ad Dammām</option>
                                                <option value="Tabūk" {{ $user->City == 'Tabūk' ? 'selected' : '' }}>Tabūk</option>
                                                <option value="Al Hufūf" {{ $user->City == 'Al Hufūf' ? 'selected' : '' }}>Al Hufūf</option>
                                                <option value="Al Qaţīf" {{ $user->City == 'Al Qaţīf' ? 'selected' : '' }}>Al Qaţīf</option>
                                                <option value="Al Ḩillah" {{ $user->City == 'Al Ḩillah' ? 'selected' : '' }}>Al Ḩillah</option>
                                                <option value="Aţ Ţā’if" {{ $user->City == 'Aţ Ţā’if' ? 'selected' : '' }}>Aţ Ţā’if</option>
                                                <option value="Al Jubayl" {{ $user->City == 'Al Jubayl' ? 'selected' : '' }}>Al Jubayl</option>
                                                <option value="Buraydah" {{ $user->City == 'Buraydah' ? 'selected' : '' }}>Buraydah</option>
                                                <option value="Ḩafr al Bāţin" {{ $user->City == 'Ḩafr al Bāţin' ? 'selected' : '' }}>Ḩafr al Bāţin</option>
                                                <option value="Yanbu" {{ $user->City == 'Ḩā’il' ? 'selected' : '' }}>Yanbu</option>
                                                <option value="Ḩā’il" {{ $user->City == 'Ḩā’il' ? 'selected' : '' }}>Ḩā’il</option>
                                                <option value="Abhā" {{ $user->City == 'Abhā' ? 'selected' : '' }}>Abhā</option>
                                                <option value="Sakākā" {{ $user->City == 'Sakākā' ? 'selected' : '' }}>Sakākā</option>
                                                <option value="Al Qurayyāt" {{ $user->City == 'Al Qurayyāt' ? 'selected' : '' }}>Al Qurayyāt</option>
                                                <option value="Jāzān" {{ $user->City == 'Jāzān' ? 'selected' : '' }}>Jāzān</option>
                                                <option value="Najrān" {{ $user->City == 'Najrān' ? 'selected' : '' }}>Najrān</option>
                                                <option value="Al Wajh" {{ $user->City == 'Al Wajh' ? 'selected' : '' }}>Al Wajh</option>
                                                <option value="Arar" {{ $user->City == 'Arar' ? 'selected' : '' }}>Arar</option>
                                                <option value="Al Bāḩah" {{ $user->City == 'Al Bāḩah' ? 'selected' : '' }}>Al Bāḩah</option>
                                                <option value="Tathlīth" {{ $user->City == 'Tathlīth' ? 'selected' : '' }}>Tathlīth</option>
                                            </select>
                                        </div>
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