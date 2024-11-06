<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    @section('styles')
    @endsection
</head>

<body>
    @extends('healthcare.layouts.app')
    @section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <div class="container-fluid m-2">


            <!-- Content Wrapper. Contains page content -->
            <div class="wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header content-wrapper-bg">
                    <!--- small box end-->
                    <div class="content mt-4 mb-4">
                        <div class="container">
                            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <h4 class="card-title fw-bold fs-6">All requests</h4>
                                                <button class="bg-transparent" aria-label="More options">
                                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                                </button>
                                            </div>
                                            <div class="d-flex justify-content-between my-2">
                                                <h4 class="card-title fw-bold fs-5">3000</h4>
                                                <button class="rounded-3 text-success">
                                                    <i class="fa-solid fa-arrow-up"></i> 20%
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <h4 class="card-title fw-bold fs-6">Pending requests</h4>
                                                <button class="bg-transparent" aria-label="More options">
                                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                                </button>
                                            </div>
                                            <div class="d-flex justify-content-between my-2">
                                                <h4 class="card-title fw-bold fs-5">100</h4>
                                                <button class="rounded-3 text-success">
                                                    <i class="fa-solid fa-arrow-up"></i> 25%
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <h4 class="card-title fw-bold fs-6 text-danger">Rejected requests</h4>
                                                <button class="bg-transparent" aria-label="More options">
                                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                                </button>
                                            </div>
                                            <div class="d-flex justify-content-between my-2">
                                                <h4 class="card-title fw-bold fs-5 text-danger">56</h4>
                                                <button class="rounded-3 text-danger">
                                                    <i class="fa-solid fa-arrow-down"></i> -11%
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <h4 class="card-title fw-bold fs-6">Completed</h4>
                                                <button class="bg-transparent" aria-label="More options">
                                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                                </button>
                                            </div>
                                            <div class="d-flex justify-content-between my-2">
                                                <h4 class="card-title fw-bold fs-5">2800</h4>
                                                <button class="rounded-3 text-success">
                                                    <i class="fa-solid fa-arrow-up"></i> 17%
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card zw_card">

                                <!-- /.card-header -->
                                <div class="card-body  p-0">
                                    <div class="row col-md-12 pt-4 pb-4 bg-white">
                                        <div class="col-md-4 pr-5">
                                            <p>Select Services</p>
                                            <div class="input-group mb-3">
                                                <select class="form-control zw_form_control shadow">
                                                    <option>Select</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 pr-5">
                                            <p>Select Slot Date</p>
                                            <div class="input-group mb-3 shadow">
                                                <input type="date" id="startDate" class="form-control" placeholder="Start Date" />
                                                <input type="date" id="endDate" class="form-control" placeholder="End Date" />
                                            </div>
                                        </div>

                                        <div class="col-md-4 pr-5">
                                            <p></p>
                                            <div class="input-group mt-3 mb-3">
                                                <select class="form-control zw_form_control shadow mt-4">
                                                    <option class="font-weight-bold">All Appointments </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <table class="table table-hover text-nowrap zw_table table-responsive">
                                        <thead class="zw_bg_AF2245 zw_text_ffffff">
                                            <tr>
                                                <th class="poppins-medium zw_15">Appointments ID <br><input type="text" placeholder="1232345" class="tableheadersearch"></th>
                                                <th class="poppins-medium zw_15">Date & Time<br>
                                                    <div class="mb-5"></div>
                                                </th>
                                                <th class="poppins-medium zw_15">Patient Name <br><input type="text" placeholder="Hina Fatima" class="tableheadersearch"></th>
                                                <th class="poppins-medium zw_15">Mobile <br><input type="text" placeholder="966458739373" class="tableheadersearch"></th>
                                                <th class="poppins-medium zw_15">Email ID <br><input type="text" placeholder="Hina.fatima@gmail.com" class="tableheadersearch"></th>
                                                <th class="poppins-medium zw_15">Slot Date & Time <div class="mb-5"></div>
                                                </th>
                                                <th class="poppins-medium zw_15">Registered <div class="mb-5"></div>
                                                </th>
                                                <th class="poppins-medium zw_15">Status <div class="mb-5"></div>
                                                </th>
                                                <th class="poppins-medium zw_15">Price <div class="mb-5"></div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($booking as $booking)
                                            <tr class="m-4" data-id="">
                                                <td class="poppins-regular zw_14 zw_text_333333 pt-3 pb-3">05241402176</td>
                                                <td class="poppins-regular zw_14 zw_text_333333 pt-3 pb-3">{{ \Carbon\Carbon::parse($booking->Date)->format('jS F Y, h:i:s A') }}</td>
                                                <td class="poppins-regular zw_14 zw_text_333333"> @php
                                                    $patientsJson = $booking->Patients; // Get the JSON string
                                                    $patients = json_decode($patientsJson, true); // Decode JSON to associative array

                                                    // Check if decoding was successful and if the result is an array
                                                    if (json_last_error() === JSON_ERROR_NONE && is_array($patients)) {
                                                    foreach ($patients as $patient) {
                                                    // Make sure each $patient is an array and has the required keys
                                                    if (is_array($patient) && isset($patient['Firstname']) && isset($patient['Lastname'])) {
                                                    echo "<p>{$patient['Firstname']} {$patient['Lastname']}</p>";
                                                    }
                                                    }
                                                    } else {
                                                    // Handle errors or empty result
                                                    echo "<p>Invalid</p>";
                                                    }
                                                    @endphp</td>
                                                <td class="poppins-regular zw_14 zw_text_333333 pt-3 pb-3">{{ $booking->Phone }}</td>
                                                <td class="poppins-regular zw_14 zw_text_333333 pt-3 pb-3">{{ $booking->Email }}</td>
                                                <td class="poppins-regular zw_14 zw_text_333333 pt-3 pb-3">10th May 2024
                                                    11:00 PM - 12:00 AM </td>
                                                <td class="poppins-regular zw_14 zw_text_333333 pt-3 pb-3">Completed</td>
                                                <td class="poppins-regular zw_14 zw_text_333333 pt-3 pb-3">Incompleted</td>
                                                <td class="poppins-regular zw_14 zw_text_333333 pt-3 pb-3">
                                                    {{ $booking->Price }}
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <!-- /.row -->
                </section>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    @endsection

    @section('scripts')
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    @endsection
</body>

</html>