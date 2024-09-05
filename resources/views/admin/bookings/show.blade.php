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
                        <a href="{{ route('bookings.index') }}" class="poppins-medium zw_18 zw_text_333333 zw_a zw_back">
                            <i class="fas fa-arrow-left right mr-2"></i>Back
                        </a>
                    </div>
                    <div class="col-sm-6 ">
                        <a class="btn zw_btn float-right m-2" href="{{ route('bookings.edit',$booking->id) }}">Update</a>
                    </div>
                </div>
                <div class="row">
                  
                    <!-- left column -->
                    <div class="col-md-12">

                        <h3 class="poppins-semibold zw_34 zw_text_AF2245 mt-4 mb-4">Show Appointment</h3>

                        <!-- general form elements -->
                        <div class="card">
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-3 zw_18 poppins-medium">
                                        <label for="exampleInputServiceprovider" class="zw_text_AF2245 poppins-bold">Appointment No :</label>
                                        {{ $booking->id }}
                                    </div>
                                    <div class="form-group col-md-3 zw_18 poppins-medium">
                                        <label for="exampleInputServicename" class="zw_text_AF2245 poppins-bold">Status :</label>
                                        {{$booking->Status}}
                                    </div>
                                    <div class="form-group col-md-3 zw_18 poppins-medium">
                                        <label for="exampleInputUsername" class="zw_text_AF2245 poppins-bold">Date :</label>
                                        {{ $booking->Date }}
                                    </div>
                                    <div class="form-group col-md-3 zw_18 poppins-medium">
                                        <label for="exampleInputUsername" class="zw_text_AF2245 poppins-bold">Time Slot :</label>
                                        {{ $booking->Timeslot }}
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-3 zw_18 poppins-medium">
                                        <label for="exampleInputPhone" class="zw_text_AF2245 poppins-bold">Phone :</label>
                                        {{ $booking->Phone }}
                                    </div>
                                    <div class="form-group col-md-3 zw_18 poppins-medium">
                                        <label for="exampleInputEmail" class="zw_text_AF2245 poppins-bold">Email :</label>
                                        {{ $booking->Email }}
                                    </div>
                                    <div class="form-group col-md-3 zw_18 poppins-medium">
                                        <label for="exampleInputServiceprovider" class="zw_text_AF2245 poppins-bold">No of Appoitment :</label>
                                        {{ $booking->Qty }}
                                    </div>
                                    <div class="form-group col-md-3 zw_18 poppins-medium">
                                        <label for="exampleInputServicename" class="zw_text_AF2245 poppins-bold">Location :</label>
                                        {{$booking->Address}}
                                    </div>
                                    
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-3 zw_18 poppins-medium">
                                        <label for="exampleInputServiceprovider" class="zw_text_AF2245 poppins-bold">Service Name :</label>
                                        <p>{{ $booking->Servicename }}</p>
                                    </div>
                                    <div class="form-group col-md-3 zw_18 poppins-medium">
                                        <label for="exampleInputServicename" class="zw_text_AF2245 poppins-bold">Sub Service Name :</label>
                                        @if(is_array($Subservices))
                                            @foreach ($Subservices as $Subservice)
                                                <p>{{ $Subservice['name'] }}</p>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12 zw_18 poppins-medium">
                                        <label for="exampleInputServiceprovider" class="zw_text_AF2245 poppins-bold">Chief Complaint Reason for Visit :</label>
                                        <p>{{ $booking->Comments }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                             
                         <h5 class="poppins-semibold zw_20 zw_text_AF2245 mt-4 mb-4">Patient Details</h5> 
                         @foreach ($Patients as $Patient)              
                        <div class="card">  
                            <!-- /.card-body -->
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-3 zw_18 poppins-medium">
                                        <label for="exampleInputServiceprovider" class="zw_text_AF2245 poppins-bold">Pateint Name :</label>
                                        {{ $Patient['Firstname'] }} {{$Patient['Lastname']}}
                                    </div>
                                    <div class="form-group col-md-3 zw_18 poppins-medium">
                                        <label for="exampleInputServicename" class="zw_text_AF2245 poppins-bold">Phone :</label>
                                       {{ $Patient['Phone'] }}
                                    </div>
                                    <div class="form-group col-md-3 zw_18 poppins-medium">
                                        <label for="exampleInputUsername" class="zw_text_AF2245 poppins-bold">Email :</label>
                                        {{ $Patient['Email'] }}
                                    </div>
                                    <div class="form-group col-md-3 zw_18 poppins-medium">
                                        <label for="exampleInputUsername" class="zw_text_AF2245 poppins-bold">Date of Birth :</label>
                                        {{ $Patient['Dob'] }}
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-3 zw_18 poppins-medium">
                                        <label for="exampleInputServiceprovider" class="zw_text_AF2245 poppins-bold">Gender :</label>
                                        {{ $Patient['Gender'] }} 
                                    </div>
                                    <div class="form-group col-md-3 zw_18 poppins-medium">
                                        <label for="exampleInputServicename" class="zw_text_AF2245 poppins-bold">Country :</label>
                                       {{ $Patient['Country'] }}
                                    </div>
                                    <div class="form-group col-md-3 zw_18 poppins-medium">
                                        <label for="exampleInputUsername" class="zw_text_AF2245 poppins-bold">National Id :</label>
                                        {{ $Patient['Nationalid'] }}
                                    </div>
                                    <div class="form-group col-md-3 zw_18 poppins-medium">
                                        <label for="exampleInputUsername" class="zw_text_AF2245 poppins-bold">Age :</label>
                                        {{ $Patient['Age'] }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
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