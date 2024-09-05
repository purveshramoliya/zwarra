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
            <a href="{{ route('services.index') }}" class="poppins-medium zw_18 zw_text_333333 zw_a zw_back">
              <i class="fas fa-arrow-left right mr-2"></i>Back
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <h3 class="poppins-semibold zw_34 zw_text_AF2245 mt-3">Edit Service</h3>
          </div>
          <!-- left column -->
          <div class="col-md-12">
            <!-- <div class="pull-right">
                            <a class="btn btn-primary m-2" href="{{ route('services.index') }}"> Back</a>
                          </div> -->
                          <!-- general form elements -->
                          <div class="card card-primary">
              <!-- <div class="card-header">
                                <h3 class="card-title">Edit Service</h3>
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
                              <form action="{{ route('services.update',$service->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                  <div class="form-row zw_form_row">
                                    <div class="form-group col-md-6">
                                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputErname">En Healthcare</label>
                                      <select name="Enhealthcare" class="custom-select poppins-regular zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none">
                                        <option value="{{ $service->Enhealthcare }}" selected="selected">{{ $service->Enhealthcare }}</option>
                                        @foreach($dropdownOptions as $option)
                                        @if($option->Enname != $service->Enhealthcare) <!-- Assuming $selectedValue contains the currently selected ID -->
                                        <option value="{{$option->Enname }}">{{ $option->Enname }}</option>
                                        @endif
                                        @endforeach
                                      </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputArhealthcare">Ar Healthcare <span style="color: red;">*</span></label>
                                      <select name="Arhealthcare" class="custom-select poppins-regular zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none">
                                       <option value="{{ $service->Arhealthcare }}" selected="selected">{{ $service->Arhealthcare }}</option>
                                       <option value="Badralhema for homecare">Badralhema for homecare</option>
                                       <option value="Motmaen medical service co">Motmaen medical service co</option>
                                       <option value="Wareed care">Wareed care</option>
                                       <option value="Home med clinics">Home med clinics</option>
                                       <option value="Dr.Bassam medical center">Dr.Bassam medical center</option>
                                       <option value="Anfas medical care hospital">Anfas medical care hospital</option>
                                       <option value="Hala health">Hala health</option>
                                     </select>
                                   </div>
                                 </div>
                                 <div class="form-row zw_form_row">
                                  <div class="form-group col-md-6">
                                    <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputEnservicename">En Servicename <span style="color: red;">*</span></label>
                                    <select name="Enservicename" class="custom-select poppins-regular zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none">
                                        <option value="{{ $service->Enservicename }}" selected="selected">{{ $service->Enservicename }}</option>
                                        @foreach($dropdownOptions as $option)
                                        @if($option->Enname != $service->Enservicename) <!-- Assuming $selectedValue contains the currently selected ID -->
                                        <option value="{{$option->Enname }}">{{ $option->Enname }}</option>
                                        @endif
                                        @endforeach
                                      </select>
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputArservicename">Ar Servicename <span style="color: red;">*</span></label>
                                    <input type="text" name="Arservicename" value="{{ $service->Arservicename }}" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputArservicename" placeholder="Enter Ar Servicename">
                                  </div>
                                </div>
                                <div class="form-row zw_form_row">
                                  <div class="form-group col-md-6">
                                    <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputEnsubservicename">En Sub Servicename <span style="color: red;">*</span></label>
                                  <select name="Ensubservicename" class="custom-select poppins-regular zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none">
                                        <option value="{{ $service->Ensubservicename }}" selected="selected">{{ $service->Ensubservicename }}</option>
                                        @foreach($dropdownOptions as $option)
                                        @if($option->Enname != $service->Ensubservicename) <!-- Assuming $selectedValue contains the currently selected ID -->
                                        <option value="{{$option->Enname }}">{{ $option->Enname }}</option>
                                        @endif
                                        @endforeach
                                      </select>
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputArsubservicename">Ar Sub Servicename <span style="color: red;">*</span></label>
                                    <input type="text" name="Arsubservicename" value="{{ $service->Arsubservicename }}" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputArsubservicename" placeholder="Enter Ar Sub Servicename ">
                                  </div>
                                </div>
                                <div class="form-row zw_form_row">
                                  <div class="form-group col-md-6">
                                    <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputEstimatedtime">Estimated Time for Service <span style="color: red;">*</span></label>
                                    <select name="Estimatedtime" class="custom-select poppins-regular zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none">
                                    <option value="30" {{ $service->Estimatedtime == '30' ? 'selected' : '' }}>30</option>
                                    <option value="45" {{ $service->Estimatedtime == '45' ? 'selected' : '' }}>45</option>
                                    <option value="60" {{ $service->Estimatedtime == '60' ? 'selected' : '' }}>60</option>
                                    <option value="90" {{ $service->Estimatedtime == '90' ? 'selected' : '' }}>90</option>
                                    <option value="120" {{ $service->Estimatedtime == '120' ? 'selected' : '' }}>120</option>
                                  </select>
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputPrice">Price <span style="color: red;">*</span></label>
                                    <input type="text" name="Price" value="{{ $service->Price }}" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputPrice" placeholder="Enter Price ">
                                  </div>
                                </div>
                                <div class="form-row zw_form_row">
                                  <div class="form-group col-md-6">
                                    <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputNewprice"> New Price <span style="color: red;">*</span></label>
                                    <input type="text" name="Newprice" value="{{ $service->Newprice }}" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputNewprice" placeholder="Enter New Price ">
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputGender">Gender <span style="color: red;">*</span></label>
                                    <select name="Gender" class="custom-select poppins-regular zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none">
                                    <option value="Male" {{ $service->Gender == 'Male' ? 'selected' : '' }}>Male</option>
                                    <option value="Female" {{ $service->Gender == 'Female' ? 'selected' : '' }}>Female</option>
                                    <option value="Other" {{ $service->Gender == 'Other' ? 'selected' : '' }}>Other</option>
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