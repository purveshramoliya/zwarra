@include('admin.layouts.headermodule')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

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
                    <!-- <div class="col-sm-6 ">
                        <a class="btn zw_btn float-right m-2" href="{{ route('bookings.edit',$booking->id) }}">Update</a>
                    </div> -->
                </div>
                <div class="row">

                    <!-- left column -->
                    <div class="col-md-12">

                        <h3 class="poppins-semibold zw_20 mt-4 mb-4">Appointment Details</h3>

                        <!-- general form elements -->
                        <div class="card">
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-3 zw_18 poppins-medium">
                                        <p class="zw_15">Service type </p>
                                        <p class="zw_15 font-weight-bold">{{ $booking->Servicename }}</p>
                                    </div>
                                    <div class="form-group col-md-3 zw_18 poppins-medium">
                                        <p class="zw_15">Service Date & Time</p>
                                        <p class="zw_15 font-weight-bold">{{ \Carbon\Carbon::parse($booking->CreatedAt)->format('d M Y, H:i:s') }}</p>
                                    </div>
                                    <div class="form-group col-md-3 zw_18 poppins-medium">
                                        <p class="zw_15">Appointment ID</p>
                                        <p class="zw_15 font-weight-bold">{{ $booking->id }}</p>
                                    </div>
                                    <div class="form-group col-md-3 zw_18 poppins-medium">
                                        <p class="zw_15">Appointment Status</p>
                                        <p class="zw_15 font-weight-bold">{{ $booking->Status }}</p>
                                    </div>
                                    <div class="form-group col-md-3 zw_18 poppins-medium">
                                        <p class="zw_15">Gender</p>
                                        <p class="zw_15 font-weight-bold">{{ $booking->Gender }}</p>
                                    </div>
                                    <div class="form-group col-md-3 zw_18 poppins-medium">
                                        <p class="zw_15">Number of Appointments</p>
                                        <p class="zw_15 font-weight-bold">{{ $booking->Qty }}</p>
                                    </div>
                                    <div class="form-group col-md-3 zw_18 poppins-medium">
                                        <p class="zw_15">Distance</p>
                                        <p class="zw_15 font-weight-bold">ADS345474</p>
                                    </div>
                                    <div class="form-group col-md-3 zw_18 poppins-medium">
                                        <p class="zw_15">Location</p>
                                        <p class="zw_15 font-weight-bold zw_text_AF2245 ">{{$booking->Address}}</p>
                                    </div>
                                    <div class="form-group col-md-3 zw_18 poppins-medium">
                                        <p class="zw_15">Service done</p>
                                        <p class="zw_15 font-weight-bold">False</p>
                                    </div>
                                    <div class="form-group col-md-3 zw_18 poppins-medium">
                                        <p class="zw_15">Service done</p>
                                        <p class="zw_15 font-weight-bold">False</p>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12 zw_15 poppins-medium">
                                        <label for="exampleInputServiceprovider" class="zw_text_AF2245">Chief Complaint Reason for Visit :</label>
                                        <p class="bookings-comments">{{ $booking->Comments }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5 class="poppins-semibold zw_20  mt-4 mb-4">Employees Details</h5>
                        <div class="card ">
                            <!-- /.card-body -->
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-3 zw_18 poppins-medium">
                                        <p class="zw_15">Employee name </p>
                                        <p class="zw_15 font-weight-bold">Sonia Akhter</p>
                                    </div>
                                    <div class="form-group col-md-3 zw_18 poppins-medium">
                                        <p class="zw_15">Employee ID</p>
                                        <p class="zw_15 font-weight-bold">EMP 4657</p>
                                    </div>
                                    <div class="form-group col-md-3 zw_18 poppins-medium">
                                        <p class="zw_15">Link</p>
                                        <p class="zw_15 font-weight-bold">https//:provider.zuwarh//</p>
                                    </div>
                                    <div class="form-group col-md-3 zw_18 poppins-medium">
                                        <p class="zw_15">Password</p>
                                        <p class="zw_15 font-weight-bold">4678900</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3 class="poppins-semibold zw_20 mt-4 mb-4">Booking Details</h3>
                        <div class="shadow p-3">
                            <h5 class="poppins-semibold zw_20  mt-4 mb-4">Patient Details</h5>
                           




                            @php
                            $i = 1; // Initialize the index before the loop
                            @endphp
                            <div class="container">
                                <div class="row">
                                    @foreach ($Patients as $Patient)
                                    <div class="col-md-12 bookings-show-background mb-3">
                                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="heading{{ $i }}">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse{{ $i }}" class="bg-light" data-parent="#accordion" href="#collapseOne{{ $i }}" aria-expanded="true" aria-controls="collapseOne">
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseOne{{ $i }}" class="panel-collapse collapse in show" role="tabpanel" aria-labelledby="heading{{ $i }}">
                                                    <div class="panel-body">
                                                        <div class="card-body">
                                                            <div class="form-row">
                                                                <div class="form-group col-md-3 zw_18 poppins-medium">
                                                                    <p class="zw_15">Patient name</p>
                                                                    <p class="zw_15 font-weight-bold"> {{ $Patient['Firstname'] }} {{$Patient['Lastname']}}</p>
                                                                </div>
                                                                <div class="form-group col-md-3 zw_18 poppins-medium">
                                                                    <p class="zw_15">Patient ID</p>
                                                                    <p class="zw_15 font-weight-bold"> TRF4R54385735 </p>
                                                                </div>
                                                                <div class="form-group col-md-3 zw_18 poppins-medium">
                                                                    <p class="zw_15">Gender</p>
                                                                    <p class="zw_15 font-weight-bold">{{ $Patient['Gender'] }}</p>
                                                                </div>
                                                                <div class="form-group col-md-3 zw_18 poppins-medium">
                                                                    <p class="zw_15">Blood Group</p>
                                                                    <p class="zw_15 font-weight-bold">False</p>
                                                                </div>
                                                                <div class="form-group col-md-3 zw_18 poppins-medium">
                                                                    <p class="zw_15">Phone mobile if any</p>
                                                                    <p class="zw_15 font-weight-bold"> {{ $Patient['Phone'] }} </p>
                                                                </div>
                                                                <div class="form-group col-md-3 zw_18 poppins-medium">
                                                                    <p class="zw_15">Date of birth</p>
                                                                    <p class="zw_15 font-weight-bold"> {{ $Patient['Dob'] }} </p>
                                                                </div>
                                                                <div class="form-group col-md-3 zw_18 poppins-medium">
                                                                    <p class="zw_15">Nationality </p>
                                                                    <p class="zw_15 font-weight-bold">{{ $Patient['Country'] }}</p>
                                                                </div>
                                                                <div class="form-group col-md-3 zw_18 poppins-medium">
                                                                    <p class="zw_15">Nationality ID</p>
                                                                    <p class="zw_15 font-weight-bold">{{ $Patient['Nationalid'] }}</p>
                                                                </div>
                                                                <div class="form-group col-md-3 zw_18 poppins-medium">
                                                                    <p class="zw_15">Relationship</p>
                                                                    <p class="zw_15 font-weight-bold"> My self </p>
                                                                </div>
                                                                <div class="form-group col-md-3 zw_18 poppins-medium">
                                                                    <p class="zw_15">Booking Reference ID </p>
                                                                    <p class="zw_15 font-weight-bold"> BKD325331 </p>
                                                                </div>
                                                                <div class="form-group col-md-3 zw_18 poppins-medium">
                                                                    <p class="zw_15">Final appointment status </p>
                                                                    <p class="zw_15 font-weight-bold">Completed</p>
                                                                </div>
                                                                <div class="form-group col-md-3 zw_18 poppins-medium">
                                                                    <p class="zw_15">VAT Applied</p>
                                                                    <p class="zw_15 font-weight-bold">Yes</p>
                                                                </div>
                                                                <div class="form-group col-md-3 zw_18 poppins-medium">
                                                                    <p class="zw_15">Service</p>
                                                                    <p class="zw_15 font-weight-bold">My self</p>
                                                                </div>
                                                                <div class="form-group col-md-3 zw_18 poppins-medium">
                                                                    <p class="zw_15">Transaction Date & Time </p>
                                                                    <p class="zw_15 font-weight-bold"> My self </p>
                                                                </div>
                                                                <div class="form-group col-md-3 zw_18 poppins-medium">
                                                                    <p class="zw_15">Status </p>
                                                                    <p class="zw_15 font-weight-bold">Confirm</p>
                                                                </div>
                                                                <div class="form-group col-md-3 zw_18 poppins-medium">
                                                                    <p class="zw_15">Transaction ID</p>
                                                                    <p class="zw_15 font-weight-bold">App536576543</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div id="accordion" class="accordion">
                                @foreach ($Patients as $Patient)
                                <div class="card bookings-show-background">
                                    <div class="card-body">
                                        <div class="container">
                                            <div class="">
                                                <div class="" id="heading{{ $i }}">
                                                    <h5 class="mb-0">
                                                        <button class="btn float-right bg-light" data-toggle="collapse" data-target="#collapse{{ $i }}" aria-expanded="false" aria-controls="collapse{{ $i }}">
                                                            <i class="fas fa-minus float-right"></i>
                                                        </button>
                                                    </h5>
                                                </div>

                                                <div id="collapse{{ $i }}" class="collapse show" aria-labelledby="heading{{ $i }}" data-parent="#accordion">
                                                    <div class="card-body">
                                                        <div class="form-row">
                                                            <div class="form-group col-md-3 zw_18 poppins-medium">
                                                                <p class="zw_15">Patient name</p>
                                                                <p class="zw_15 font-weight-bold"> {{ $Patient['Firstname'] }} {{$Patient['Lastname']}}</p>
                                                            </div>
                                                            <div class="form-group col-md-3 zw_18 poppins-medium">
                                                                <p class="zw_15">Patient ID</p>
                                                                <p class="zw_15 font-weight-bold"> TRF4R54385735 </p>
                                                            </div>
                                                            <div class="form-group col-md-3 zw_18 poppins-medium">
                                                                <p class="zw_15">Gender</p>
                                                                <p class="zw_15 font-weight-bold">{{ $Patient['Gender'] }}</p>
                                                            </div>
                                                            <div class="form-group col-md-3 zw_18 poppins-medium">
                                                                <p class="zw_15">Blood Group</p>
                                                                <p class="zw_15 font-weight-bold">False</p>
                                                            </div>
                                                            <div class="form-group col-md-3 zw_18 poppins-medium">
                                                                <p class="zw_15">Phone mobile if any</p>
                                                                <p class="zw_15 font-weight-bold"> {{ $Patient['Phone'] }} </p>
                                                            </div>
                                                            <div class="form-group col-md-3 zw_18 poppins-medium">
                                                                <p class="zw_15">Date of birth</p>
                                                                <p class="zw_15 font-weight-bold"> {{ $Patient['Dob'] }} </p>
                                                            </div>
                                                            <div class="form-group col-md-3 zw_18 poppins-medium">
                                                                <p class="zw_15">Nationality </p>
                                                                <p class="zw_15 font-weight-bold">{{ $Patient['Country'] }}</p>
                                                            </div>
                                                            <div class="form-group col-md-3 zw_18 poppins-medium">
                                                                <p class="zw_15">Nationality ID</p>
                                                                <p class="zw_15 font-weight-bold">{{ $Patient['Nationalid'] }}</p>
                                                            </div>
                                                            <div class="form-group col-md-3 zw_18 poppins-medium">
                                                                <p class="zw_15">Relationship</p>
                                                                <p class="zw_15 font-weight-bold"> My self </p>
                                                            </div>
                                                            <div class="form-group col-md-3 zw_18 poppins-medium">
                                                                <p class="zw_15">Booking Reference ID </p>
                                                                <p class="zw_15 font-weight-bold"> BKD325331 </p>
                                                            </div>
                                                            <div class="form-group col-md-3 zw_18 poppins-medium">
                                                                <p class="zw_15">Final appointment status </p>
                                                                <p class="zw_15 font-weight-bold">Completed</p>
                                                            </div>
                                                            <div class="form-group col-md-3 zw_18 poppins-medium">
                                                                <p class="zw_15">VAT Applied</p>
                                                                <p class="zw_15 font-weight-bold">Yes</p>
                                                            </div>
                                                            <div class="form-group col-md-3 zw_18 poppins-medium">
                                                                <p class="zw_15">Service</p>
                                                                <p class="zw_15 font-weight-bold">My self</p>
                                                            </div>
                                                            <div class="form-group col-md-3 zw_18 poppins-medium">
                                                                <p class="zw_15">Transaction Date & Time </p>
                                                                <p class="zw_15 font-weight-bold"> My self </p>
                                                            </div>
                                                            <div class="form-group col-md-3 zw_18 poppins-medium">
                                                                <p class="zw_15">Status </p>
                                                                <p class="zw_15 font-weight-bold">Confirm</p>
                                                            </div>
                                                            <div class="form-group col-md-3 zw_18 poppins-medium">
                                                                <p class="zw_15">Transaction ID</p>
                                                                <p class="zw_15 font-weight-bold">App536576543</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                @php
                                $i++; // Increment the index for the next item
                                @endphp
                                @endforeach
                            </div>
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
    <!-- <script>
        $(document).ready(function() {
            $('#accordion').on('show.bs.collapse', function(e) {
                $(e.target).prev('.card-body').find('button i').removeClass('fa-plus').addClass('fa-minus');
            });

            $('#accordion').on('hide.bs.collapse', function(e) {
                $(e.target).prev('.card-body').find('button i').removeClass('fa-minus').addClass('fa-plus');
            });
        });
    </script> -->

    <script>
        $(document).ready(function() {
            $('#accordion').on('show.bs.collapse', function(e) {
                $(e.target).prev('.panel-heading').find('i').removeClass('fa-plus').addClass('fa-minus');
            });

            $('#accordion').on('hide.bs.collapse', function(e) {
                $(e.target).prev('.panel-heading').find('i').removeClass('fa-minus').addClass('fa-plus');
            });
        });
    </script>

</body>

</html>