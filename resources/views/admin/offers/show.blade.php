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
                        <a href="{{ route('offers.index') }}" class="poppins-medium zw_18 zw_text_333333 zw_a zw_back">
                            <i class="fas fa-arrow-left right mr-2"></i>Back
                        </a>
                    </div>
                    <div class="col-sm-6 ">
                        <a class="btn zw_btn float-right m-2" href="{{ route('offers.edit',$offer->id) }}">Update</a>
                    </div>
                </div>
                <div class="row">
                    <!-- <a class="btn zw_btn m-2" href="{{ route('offers.index') }}"> Back</a> -->
                    <!-- <a class="btn zw_btn float-right m-2" href="{{ route('offers.edit',$offer->id) }}">Update</a> -->
                    <!-- left column -->
                    <div class="col-md-12">

                        <h3 class="poppins-semibold zw_34 zw_text_AF2245 mt-4 mb-4">Offers</h3>

                        <!-- general form elements -->
                        <div class="card">
                            <!-- <div class="card-header">
                    <h3 class="card-title">Show Service Providers</h3>
                </div> -->
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-6 zw_18 poppins-medium">
                                       <label for="exampleInputFirstname" class="zw_text_AF2245 poppins-bold">Logo :</label>
                                        <img src="{{ asset($offer->Logo) }}" height="" width="50"/>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6 zw_18 poppins-medium">
                                        <label for="exampleInputFirstname" class="zw_text_AF2245 poppins-bold">Name :</label>
                                        {{ $offer->Name }}
                                    </div>
                                    <div class="form-group col-md-6 zw_18 poppins-medium">
                                        <label for="exampleInputLastname" class="zw_text_AF2245 poppins-bold">Code :</label>
                                        {{ $offer->Code }}
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6 zw_18 poppins-medium">
                                        <label for="exampleInputEmail1" class="zw_text_AF2245 poppins-bold">Percantage :</label>
                                        {{ $offer->Percantage }}
                                    </div>
                                    <div class="form-group col-md-6 zw_18 poppins-medium">
                                        <label for="exampleInputphone" class="zw_text_AF2245 poppins-bold">Count :</label>
                                        {{ $offer->Count }}
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6 zw_18 poppins-medium">
                                        <label for="exampleInputCity" class="zw_text_AF2245 poppins-bold">Type :</label>
                                        {{ $offer->Type }}
                                    </div>
                                    <div class="form-group col-md-6 zw_18 poppins-medium">
                                        <label for="exampleInputphone" class="zw_text_AF2245 poppins-bold">Servicename :</label>
                                        {{ $offer->Servicename }}
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6 zw_18 poppins-medium">
                                        <label for="exampleInputCity" class="zw_text_AF2245 poppins-bold">Sub Servicename :</label>
                                        {{ $offer->Subservicename }}
                                    </div>
                                    <div class="form-group col-md-6 zw_18 poppins-medium">
                                        <label for="exampleInputphone" class="zw_text_AF2245 poppins-bold">Healthcare :</label>
                                        {{ $offer->Healthcarename }}
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6 zw_18 poppins-medium">
                                        <label for="exampleInputStartdate" class="zw_text_AF2245 poppins-bold">Start Date :</label>
                                        {{ $offer->Startdate }}
                                    </div>
                                    <div class="form-group col-md-6 zw_18 poppins-medium">
                                        <label for="exampleInputEnddate" class="zw_text_AF2245 poppins-bold">End Date :</label>
                                        {{ $offer->Enddate }}
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