@extends('healthcare.layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <div class="content ">
    <div class="container bg-body py-2 pb-5 healthcareprofile-content-box">
      <div class="row px-3 py-3">
        <h5 class="py-2 zw_text_AF2245 fw-bold">Settings</h5>

        @if ($errors->any())
        <div class="alert zw_alert_danger" style="width:100%;">
          There were some problems with your input.<br><br>
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif
        <div class="col-md-12  text-white py-2 ">
          <div class="row">
            <div class="col-md-4">
              <button class="bg-transparent settinghover color-button color-button-1 setting-line-click setting-line-click-1" id="button1" onclick="onclickhealthcare(event)">
                <P class="mt-3 setting-line-hover "><img src="/dist/img/Health care information-icon.png" class="img-fluid" alt="Health care information-icon"> <span class="mx-2 fw-bold">Healthcare information </span></P>
              </button> 
            </div>
            <div class="col-md-4">
              <button class="bg-transparent settinghover color-button setting-line-click" id="button2" onclick="onclickbankAccData(event)" id="fetchDataButton">
                <P class="mt-3 setting-line-hover  "><img src="/dist/img/acc-data-icon.png" class="img-fluid" alt="acc-data-icon"> <span class="mx-2 fw-bold">Bank account data </span></P>
              </button>
            </div>
            <div class="col-md-4">
              <button class="bg-transparent settinghover color-button setting-line-click" id="button3" onclick="onclickupdatepass(event)">
                <P class="mt-3 setting-line-hover  "><img src="/dist/img/change-pass-icon.png" class="img-fluid " alt="change-pass-icon"> <span class="mx-2 fw-bold">Change password </span></P>
              </button>
            </div>
          </div>
          <div class="healthsetting-line">
          </div>
        </div>
      </div>
      <!-- for health care info  -->
      <div>

        <div class="hidden" id="healthcareinfoo">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h6 class="m-0 zw_text_AF2245">Working time info</h6>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <button class="bg-transparent float-sm-right" onclick="updatehealthcare(event)">
                <h6 class="zw_text_AF2245 float-right">Update <span><img src="/dist/img/update-icon.png" class="img-fluid" alt="update-icon"></span></h6>
              </button>
            </div><!-- /.col -->

            <div class="col-md-12 card text-white py-2 healthcareprofile-boxes">
              <div class="row">
                <div class="col-md-4">
                  <div class=" px-4 py-2  text-center healthcareprofile-card-bodyy">
                    <h6 class="text-body ">Working hours</h6>
                    <P class="mt-3 text-secondary">From: 10:00 <span class="mx-2">to: 10:00 </span></P>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class=" px-4 py-2 text-primary text-center healthcareprofile-card-bodyy">
                    <h6 class="text-body ">capacity</h6>
                    <P class="mt-3 text-secondary">1</P>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class=" px-4 py-2 text-primary text-center healthcareprofile-card-bodyy">
                    <h6 class="text-body ">Available days</h6>
                    <P class="mt-3 text-secondary">Mon, Tue, Wed, Thu, Fri, Sun</P>
                  </div>
                </div>
              </div>
            </div>
          </div> 
        </div>

        <div class="uhidden" id="updateContainer">        

         <div class="d-flex justify-content-between">
          <h6 class="fs-6 zw_text_AF2245">Schedule Configuration</h6> 
          <button type="button" class="btn " data-toggle="modal" data-target="#exampleModals">
            <h6 class="zw_text_AF2245">Add Section</h6>
          </button>
        </div>

        <!-- ================================= Akash 07/06/24 start for monday ================================== -->

        <!-- Modal start -->
        <div class="modal fade" id="exampleModals" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Section</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <!-- left column -->
                  <div class="col-md-12">
                    <!-- general form elements -->
                    <div class=" card-primary">
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
                      <form action="{{ route('healthcare.config.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="Healthcareid" value="{{ Auth::guard('serviceprovider')->id() }}">
                        <input type="hidden" name="Dayname" value="Monday">
                        <div class="card-body">
                          <div class="form-row zw_form_row">
                            <div class="form-group col-md-6">
                              <label class="zw_poppins_regular poppins-regular zw_18 zw_text_111535" for="exampleInputServiceprovider">Service type <span style="color: red;">*</span></label>
                              <select name="Servicetype" class="my-2 custom-select poppins-regular zw_16 zw_text_898B9F zw_form_control zw_box_shadow_none">
                                <option selected>Select Service type</option>
                                @foreach($dropdownOptions as $option)
                                <option value="{{ $option->Enname }}">{{ $option->Enname }}</option>
                                @endforeach
                              </select>
                            </div>

                            <div class="form-group col-md-6">
                              <label class=" zw_poppins_regular poppins-regular zw_16 zw_text_111535" for="exampleInputServicename">Capacity<span style="color: red;">*</span></label>
                              <select name="Capacity" class="my-2 custom-select poppins-regular zw_16 zw_text_898B9F zw_form_control zw_box_shadow_none">
                                <option selected>Select Capacity</option>
                                <option value="1">1 Capacity</option>
                                <option value="2">2 Capacity</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-row zw_form_row">
                            <div class="form-group col-md-6 ">
                              <label class=" zw_poppins_regular poppins-regular zw_16 zw_text_111535" for="exampleInputType">Days Name<span style="color: red;">*</span></label>
                              <select name="Dayname" class="my-2 custom-select poppins-regular zw_16 zw_text_898B9F zw_form_control zw_box_shadow_none">
                                <option selected>Select Day</option>
                                <option value="Monday">Monday</option>
                                <option value="Tuesday">Tuesday</option>
                                <option value="Wednesday">Wednesday</option>
                                <option value="Thursday">Thursday</option>
                                <option value="Friday">Friday</option>
                                <option value="Saturday">Saturday</option>
                                <option value="Sunday">Sunday</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-row zw_form_row">
                            <div class="form-group col-md-6">
                              <label class="my-2  zw_poppins_regular poppins-regular zw_16 zw_text_111535" for="exampleInputPhone">Start time <span style="color: red;">*</span></label>
                              <input type="time" name="Starttime" class="form-control poppins-regular zw_16 zw_text_898B9F zw_form_control" >
                            </div>
                            <div class="form-group col-md-6">
                              <label class="my-2  zw_poppins_regular poppins-regular zw_16 zw_text_111535" for="exampleInputPhone">End time <span style="color: red;">*</span></label>
                              <input type="time" name="Endtime" class="form-control poppins-regular zw_16 zw_text_898B9F zw_form_control" >
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-12">
                              <button type="submit" class="btn zw_submit zw_submit_wh">Submit</button>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                    <!-- /.card -->
                  </div>
                  <!-- /.card-body -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal End -->
        <!-- ================================= Akash 07/06/24 end  for moday================================== -->

        <div class="container">
          @foreach($schedule as $dayName => $sessions)
          <div class="row px-2">
            <div class="col">
              <div class="card border border-danger">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <h6 class="fs-6">{{ $dayName }}</h6>
                  </div>
                  <div class="container my-5">
                    <div class="row">
                      @foreach($sessions as $session)
                      <div class="col-md-6">
                        <div class="Schedule-icon-posi">
                          <img src="/dist/img/home-icon.png" alt="home-icon" class="">
                        </div>
                        <div class="zw_bor_radi_6 zw_bor_dashed_2 mx-3 my-3">
                          <div class="card-body">
                            <h6 class="mx-3 my-1 fw-bold">Session</h6>
                            <h6 class="mx-3 my-2 fw-bold">{{ $session->Servicetype }}</h6>
                            <p class="zw_text_ADADAD mx-3">{{ $session->Starttime }} - {{ $session->Endtime }}</p>
                          </div>
                        </div>
                      </div>
                      @endforeach

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>

        <!-- Add necessary Bootstrap JS files here -->



      </div>
    </div>
    <!-- for bank acc data  -->
    <div>
     <div class="hiddenb" id="bankaccdatadefault">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h6 class="m-0 zw_text_AF2245">Banking Information</h6>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <button class="bg-transparent float-sm-right" onclick="updatebankacc(event)">
            <h6 class="zw_text_AF2245 float-right">Update<span><img src="/dist/img/update-icon.png" class="img-fluid" alt="update-icon"></span></h6>
          </button>
        </div><!-- /.col -->
      </div><!-- /.row -->
      @if ($profileData)
      <div class="col-md-12 card text-white py-2 healthcareprofile-boxes " id="profileDataContainer">
        <!-- Profile data will be displayed here -->
        <div class="row">
              <div class="col-md-3">
              <div class="px-4 py-2 text-center healthcareprofile-card-bodyy">
              <h6 class="text-body">Account Name</h6>
              <p class="mt-3 text-secondary">{{ $profileData->Accountname }}</p>
              </div>
              </div>
              <div class="col-md-3">
              <div class="px-4 py-2 text-primary text-center healthcareprofile-card-bodyy">
              <h6 class="text-body">Account Number</h6>
              <p class="mt-3 text-secondary">{{ $profileData->Accountnumber }}</p>
              </div>
              </div>
              <div class="col-md-3">
              <div class=" px-4 py-2 text-primary text-center healthcareprofile-card-bodyy">
              <h6 class="text-body ">Bank Name</h6>
              <P class="mt-3 text-secondary">{{ $profileData->Bankname }}</P>
              </div>
              </div>
              <div class="col-md-3">
              <div class=" px-4 py-2 text-primary text-center healthcareprofile-card-bodyy">
              <h6 class="text-body ">IBAN Number</h6>
              <P class="mt-3 text-secondary">{{ $profileData->Ibannumber }}</P>
              </div>
              </div>
              </div>
      </div>
    </div>
     @endif
    <div class="hiddenbacc" id="updatebankaccd">    
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class=" card-primary">
            <!-- form start -->
            <form action="{{ route('healthcare.banking.store') }}" method="POST">
              @csrf
              <input type="hidden" name="Healthcare" value="{{ Auth::guard('serviceprovider')->id() }}">
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

              <div class="card-body">
                <div class="form-row zw_form_row">
                  <div class="form-group col-md-6">
                    <label class="zw_label_height_add_section zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputServiceprovider">Account name <span style="color: red;">*</span></label>

                    <input type="text" value="{{ optional($profileData)->Accountname ?? '' }}" name="Accountname" placeholder="Enter Account Name" class="w-100 rounded  zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label class="zw_label_height_add_section zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputServicename">Account number <span style="color: red;">*</span></label>
                    <input type="number" value="{{ optional($profileData)->Accountnumber ?? '' }}" name="Accountnumber" placeholder="Enter Account number" class="w-100 rounded  zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none @error('Accountnumber') is-invalid @enderror " value="{{ old('Accountnumber') }}" required autofocus>
                    @error('Accountnumber')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                  </div>
                </div>
                <div class="form-row zw_form_row my-4">
                  <div class="form-group col-md-6">
                    <label class="zw_label_height_add_section zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputType">Bank Name <span style="color: red;">*</span></label>
                    <input type="text" value="{{ optional($profileData)->Bankname ?? '' }}" name="Bankname" placeholder="Enter Bank Name" class="w-100 rounded  zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label class="zw_label_height_add_section zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputType">IBAN Number <span style="color: red;">*</span></label>
                    <input type="number" value="{{ optional($profileData)->Ibannumber ?? '' }}" name="Ibannumber" placeholder="Enter IBAN Number" class="w-100 rounded  zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none" >
                  </div>
                </div>

                <div class="row my-4">
                  <div class="col-12">
                    <button type="submit" class=" zw_submit zw_submit_wh ">Submit</button>
                  </div>
                </div>
              </div>

              <!-- /.card-body -->
            </form>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.card-body -->
      </div>
    </div>
  </div>
            <!-- for change password  -->
            <div class="hiddenp" id="updatepassworddefault">
              <div class="row">

                <!-- left column -->
                <div class="col-md-12">
                  <!-- general form elements -->
                  <div class=" card-primary">
                    <!-- /.card-header -->
                    <!-- Validation Errors -->

                    <!-- form start -->
                    <form action="{{ route('healthcare.password.update') }}" method="POST">
                      @csrf


                      <input type="hidden" name="id" value="{{ Auth::guard('serviceprovider')->id() }}">
                      <div class="card-body">
                        <div class="form-row zw_form_row">
                          <div class="form-group col-md-6">
                            <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputServicename">New Password <span style="color: red;">*</span></label>
                            <input type="password" name="Password" placeholder="New Password" class="w-100 rounded zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none">
                          </div>
                          <div class="form-group col-md-6">
                            <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputType">Confirm Password <span style="color: red;">*</span></label>
                            <input type="password" name="ConfirmPassword" placeholder="Confirm Password " class="w-100 rounded zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none">
                          </div>
                        </div>
                        <div class="row my-4">
                          <div class="col-12">
                            <button type="submit" class=" zw_submit zw_submit_wh ">Submit</button>
                          </div>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </form>
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.card-body -->
              </div>
            </div>


          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    <!-- Akash-update-click-20/05/2024 start-->
    <script>
     document.addEventListener("DOMContentLoaded", function() {
    // Remove the 'hidden' class from healthcareinfoo
      healthcareinfoo.classList.remove("hidden");
    });

     var healthcareinfoo = document.getElementById("healthcareinfoo");
     var updatebankContainerDefault = document.getElementById("bankaccdatadefault");
     var updatepassworddefault = document.getElementById("updatepassworddefault");
     var updateContainer = document.getElementById("updateContainer");
     var updatebankaccd = document.getElementById("updatebankaccd");
     var settinghoverrElement = document.querySelector(".settinghoverr");
     function onclickhealthcare(event) {
    // const healthcareinfo = document.getElementById("healthcareinfo");
      event.preventDefault();
      healthcareinfoo.classList.remove("hidden");
      updatebankContainerDefault.classList.add("hiddenb");
      updatepassworddefault.classList.add("hiddenp");
      updatebankaccd.classList.add("hiddenbacc");
      updateContainer.classList.add("uhidden");
    }
    function updatehealthcare(event) {
      event.preventDefault();
      updateContainer.classList.remove("uhidden");
      healthcareinfoo.classList.add("hidden");
    }
    function onclickbankAccData(event) {
      event.preventDefault();
      updatebankContainerDefault.classList.remove("hiddenb");
      updatebankaccd.classList.add("hiddenbacc");
      healthcareinfoo.classList.add("hidden");
      updatepassworddefault.classList.add("hiddenp");
      updateContainer.classList.add("uhidden");
    }
    
    function updatebankacc(event) {
      event.preventDefault();
      updatebankaccd.classList.remove("hiddenbacc");
      updatebankContainerDefault.classList.add("hiddenb");
    }
    function onclickupdatepass(event) {
      event.preventDefault();
      updatepassworddefault.classList.remove("hiddenp");
      healthcareinfoo.classList.add("hidden");
      updatebankContainerDefault.classList.add("hiddenb");
      updatebankaccd.classList.add("hiddenbacc");
      updateContainer.classList.add("uhidden");
    }
// for changing color of buttons
    const buttons = document.querySelectorAll('.color-button');
    buttons.forEach(button => {
      button.addEventListener('click', () => {
        buttons.forEach(btn => {
          btn.classList.remove('clicked');
          btn.classList.remove('color-button-1');
          btn.classList.remove('setting-line-click');
          btn.classList.remove('setting-line-click-1');
        });
        button.classList.add('clicked');
        button.classList.add('setting-line-click');
      });
    });

  </script>

  <!-- Ensure jQuery library is included before this script -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <!-- Akash-update-click-20/05/2024 start-->

</div>
<!-- /.content-wrapper -->
@endsection


