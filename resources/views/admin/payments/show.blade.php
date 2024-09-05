@include('admin.layouts.headermodule')

<body class="hold-transition sidebar-mini zw_sidebar">
    <div class="wrapper">
        @include('admin.layouts.header')
        @include('admin.layouts.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="row ">
                    <div class="col-sm-6 zw_back">
                        <a href="{{ route('payments.index') }}" class="poppins-medium zw_18 zw_text_333333 zw_a zw_back">
                            <i class="fas fa-arrow-left right mr-2"></i>Back
                        </a>
                    </div>
                    <div class="col-sm-6 ">
                        <div class="btn zw_btn float-right m-2 zw_24 zw_text_AF2245">
                        {{ $payment->status }}
                    </div>
                    
                   </div>
                </div>
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">

                        <h3 class="poppins-semibold zw_34 zw_text_AF2245 mt-4 mb-4">Payments</h3>

                        <!-- general form elements -->
                        <div class="card">
                       
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-4 zw_18 poppins-medium">
                                        <label for="exampleInputLogo" class="zw_text_AF2245 poppins-bold">Payment Date :</label>
                                        {{ \Carbon\Carbon::parse($payment->paymentdate)->format('d-m-Y') }}
                                    </div>
                                    <div class="form-group col-md-4 zw_18 poppins-medium">
                                        <label for="exampleInputDate" class="zw_text_AF2245 poppins-bold">Booking Date :</label>
                                       {{ \Carbon\Carbon::parse($payment->bookingdate)->format('d-m-Y') }}
                                    </div>
                                    <div class="form-group col-md-4 zw_18 poppins-medium">
                                        <label for="exampleInputName" class="zw_text_AF2245 poppins-bold">Transacation Id :</label>
                                        {{ $payment->transacationid }}
                                    </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4 zw_18 poppins-medium">
                                    <label for="exampleInputPhone" class="zw_text_AF2245 poppins-bold">Sevice Name :</label>
                                    {{ $payment->servicename }}
                                </div>
                                <div class="form-group col-md-4 zw_18 poppins-medium">
                                    <label for="exampleInputEmail" class="zw_text_AF2245 poppins-bold">Subservice Name :</label>
                                    {{ $payment->subservicename }}
                                </div>
                                <div class="form-group col-md-4 zw_18 poppins-medium">
                                    <label for="exampleInputDoctor" class="zw_text_AF2245 poppins-bold">Package Name :</label>
                                    {{ $payment->pacakgename }}
                                </div>
                            </div>
                             <div class="form-row">
                                <div class="form-group col-md-4 zw_18 poppins-medium">
                                    <label for="exampleInputEmail" class="zw_text_AF2245 poppins-bold">First Name :</label>
                                    {{ $payment->firstname }}
                                </div>
                                <div class="form-group col-md-4 zw_18 poppins-medium">
                                    <label for="exampleInputDoctor" class="zw_text_AF2245 poppins-bold">Last Name :</label>
                                    {{ $payment->lastname }}
                                </div>
                                <div class="form-group col-md-4 zw_18 poppins-medium">
                                    <label for="exampleInputPhone" class="zw_text_AF2245 poppins-bold">Email :</label>
                                    {{ $payment->email }}
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4 zw_18 poppins-medium">
                                    <label for="exampleInputEmail" class="zw_text_AF2245 poppins-bold">Address :</label>
                                    {{ $payment->address }}
                                </div>
                                <div class="form-group col-md-4 zw_18 poppins-medium">
                                    <label for="exampleInputDoctor" class="zw_text_AF2245 poppins-bold">Country :</label>
                                    {{ $payment->country }}
                                </div>
                                <div class="form-group col-md-4 zw_18 poppins-medium">
                                    <label for="exampleInputPhone" class="zw_text_AF2245 poppins-bold">City :</label>
                                    {{ $payment->city }}
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4 zw_18 poppins-medium">
                                    <label for="exampleInputEmail" class="zw_text_AF2245 poppins-bold">Price :</label>
                                    {{ $payment->price }}
                                </div>
                                <div class="form-group col-md-4 zw_18 poppins-medium">
                                    <label for="exampleInputDoctor" class="zw_text_AF2245 poppins-bold">Payment Method :</label>
                                    {{ $payment->paymentmethod }}
                                </div>
                                <div class="form-group col-md-4 zw_18 poppins-medium">
                                    <label for="exampleInputPhone" class="zw_text_AF2245 poppins-bold">Card Holdername :</label>
                                    {{ $payment->cardholname }}
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4 zw_18 poppins-medium">
                                    <label for="exampleInputEmail" class="zw_text_AF2245 poppins-bold">Card Account Name :</label>
                                    {{ $payment->cardno }}
                                </div>
                                <div class="form-group col-md-4 zw_18 poppins-medium">
                                    <label for="exampleInputDoctor" class="zw_text_AF2245 poppins-bold">CVV No :</label>
                                    {{ $payment->cvvno }}
                                </div>
                                <div class="form-group col-md-4 zw_18 poppins-medium">
                                    <label for="exampleInputPhone" class="zw_text_AF2245 poppins-bold">Expiry Date :</label>
                                    {{ $payment->cardexpdate }}
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