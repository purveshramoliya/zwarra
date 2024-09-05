 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @extends('doctor.layouts.app')
    @section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- /.content-header -->
        <!-- Main content -->
        <div class="content ">
            <div class="container bg-body py-2 pb-5 healthcareprofile-content-box">
                <div class="row px-2">
                    <div class="col-md-12  text-white py-2">
                        <div class="card healthcareprofile-card">
                            <div class="card-header healthcareprofile-header">
                                <img src="{{url('dist/img/zwaara-logo.png')}}" class="img-fluid" alt="Zwaara Logo">
                            </div>
                            <div class="card-body px-4 py-2 ">
                                <h6 class="zw_text_AF2245">ZWAARA</h6>
                                <P class="mt-3 text-secondary"><i class="fa-solid fa-location-dot"></i> <span class="mx-2 zw_text_707070"></span></P>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row px-3 py-3">
                    <h5 class="py-2 zw_text_AF2245">Contact info</h5>
                    <div class="col-md-12 card text-white py-2 healthcareprofile-boxes">
                        <div class="row">
                            <div class="col-md-4">
                                <div class=" px-4 py-2 text-primary text-center ">
                                    <h6 class="text-body ">Doctor Name</h6>
                                    <P class="mt-3 text-secondary"> {{ $doctor->Enname }}</P>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class=" px-4 py-2  text-center ">
                                    <h6 class="text-body ">Email address</h6>
                                    <P class="mt-3 text-secondary"> {{ $doctor->email }}</P>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class=" px-4 py-2 text-primary text-center ">
                                    <h6 class="text-body ">Phone number</h6>
                                    <P class="mt-3 text-secondary"> {{ $doctor->Phone }}</P>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row px-3 py-3">
                    <h5 class="py-2 zw_text_AF2245">Working time info</h5>
                    <div class="col-md-12 card text-white py-2 healthcareprofile-boxes">
                        <div class="row">
                            <div class="col-md-4">
                                <div class=" px-4 py-2  text-center ">
                                    <h6 class="text-body ">Working hours</h6>
                                    <P class="mt-3 text-secondary">From: 10:00 <span class="mx-2">to: 10:00 </span></P>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class=" px-4 py-2 text-primary text-center ">
                                    <h6 class="text-body ">capacity</h6>
                                    <P class="mt-3 text-secondary">1</P>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class=" px-4 py-2 text-primary text-center ">
                                    <h6 class="text-body ">Available days</h6>
                                    <P class="mt-3 text-secondary">Mon, Tue, Wed, Thu, Fri, Sun</P>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row px-3 py-3">
                    @if ($bankings)
                    <h5 class="py-2 zw_text_AF2245">Bank information</h5>
                    <div class="col-md-12 card text-white py-2 healthcareprofile-boxes">
                        <div class="row">
                            <div class="col-md-3">
                                <div class=" px-4 py-2  text-center healthcareprofile-card-bodyy">
                                    <h6 class="text-body ">Account name</h6>
                                    <P class="mt-3 text-secondary">{{ $bankings ? $bankings->Accountname : '' }}</P>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class=" px-4 py-2 text-primary text-center healthcareprofile-card-bodyy">
                                    <h6 class="text-body ">Account number</h6>
                                    <P class="mt-3 text-secondary">{{ $bankings ? $bankings->Accountnumber  : ''}}</P>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class=" px-4 py-2 text-primary text-center healthcareprofile-card-bodyy">
                                    <h6 class="text-body ">Bank name</h6>
                                    <P class="mt-3 text-secondary">{{ $bankings ? $bankings->Bankname : ''}}</P>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class=" px-4 py-2 text-primary text-center healthcareprofile-card-bodyy">
                                    <h6 class="text-body ">IBAN number</h6>
                                    <P class="mt-3 text-secondary">{{ $bankings ? $bankings->Ibannumber  : ''}}</P>
                                </div>
                            </div>
                        </div>  
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @endsection
