@include('admin.layouts.headermodule')

<body class="hold-transition sidebar-mini zw_sidebar">
  <div class="wrapper">
    @include('admin.layouts.header')
    @include('admin.layouts.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header" style="background-color: #f4f6f9;">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6 zw_back">
              <button onclick="history.back()" style="background:none;" class="poppins-medium zw_18 zw_text_333333 zw_a zw_back">
                <i class="fas fa-arrow-left right mr-2"></i>Back
              </button>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-12 col-md-12 col-lg-12">
              <h1 class="poppins-semibold zw_46 zw_text_AF2245" style="font-size: 25px;">Registered patients & <span style="font-weight: 400 !important;">Regis... & non Regis... Patients</span> </h1>
            </div>
            <div class="col-12 col-md-12 col-lg-12 mt-2">
              <a class="btn zw_add_btn m-2 poppins-medium zw_18" href="" style="border: 1px solid #af2245;"> Registered patients</a>
              <a class="btn zw_add_btn m-2 poppins-medium zw_18 Non-registered-Patients" href=""> Non registered Patients</a>
              <a class="btn zw_add_btn m-2 poppins-medium zw_18" href="" style="border: 1px solid #af2245;"> All patients</a>
            </div>
            <div class="row col-md-12 mt-2">
              <div class="col-md-3">
                <label for="basic-url">Select Services</label>
                <div class="input-group mb-3">
                  <select class="form-control zw_form_control">
                    <option>Select</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <label for="startDate">Select Slot Date</label>
                <div class="input-group mb-3">
                  <input type="date" id="startDate" class="form-control" placeholder="Start Date" />
                  <input type="date" id="endDate" class="form-control" placeholder="End Date" />
                </div>
              </div>

              <div class="col-md-3">
                <label for="basic-url"></label>
                <div class="input-group mb-3">
                  <select class="form-control zw_form_control">
                    <option class="font-weight-bold">All Appointments </option>
                  </select>
                </div>
              </div>
            </div>

          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Content Header (Page header) -->
      <section class="content-header" style="background:#f4f6f9">
        <div class="row">
          <div class="col-12">
            <div class="card zw_card">
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <!-- Add more buttons/links for other status as needed -->


                <table class="table table-hover text-nowrap zw_table">
                  <thead class="zw_bg_AF2245 zw_text_ffffff">
                    <tr>
                      <th class="poppins-medium zw_15">User ID <br><input type="text" placeholder="1232345" class="tableheadersearch"></th>
                      <th class="poppins-medium zw_15">Date & Time<br>
                        <div class="mb-5"></div>
                      </th>
                      <th class="poppins-medium zw_15">Patient Name <br><input type="text" placeholder="1232345" class="tableheadersearch"></th>
                      <th class="poppins-medium zw_15">Mobile <br><input type="text" placeholder="1232345" class="tableheadersearch"></th>
                      <th class="poppins-medium zw_15">Email ID <br><input type="text" placeholder="1232345" class="tableheadersearch"></th>
                      <th class="poppins-medium zw_15">Slot Date & Time <div class="mb-5"></div>
                      </th>
                      <th class="poppins-medium zw_15">Registered <div class="mb-5"></div>
                      </th>
                      <th class="poppins-medium zw_15" colspan="2">Status <div class="mb-5"></div>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="m-4" data-id="">
                      <td class="poppins-regular zw_14 zw_text_333333 pt-3 pb-3">05241402176</td>
                      <td class="poppins-regular zw_14 zw_text_333333 pt-3 pb-3">10th May 2024, 11:00:00 PM</td>
                      <td class="poppins-regular zw_14 zw_text_333333 pt-3 pb-3">Rahmat ali</td>
                      <td class="poppins-regular zw_14 zw_text_333333 pt-3 pb-3">966458739373</td>
                      <td class="poppins-regular zw_14 zw_text_333333 pt-3 pb-3">Rahmat.ali@gmail.com</td>
                      <td class="poppins-regular zw_14 zw_text_333333 pt-3 pb-3">10th May 2024
                        11:00 PM - 12:00 AM </td>
                      <td class="poppins-regular zw_14 zw_text_333333 pt-3 pb-3">Completed</td>
                      <td class="poppins-regular zw_14 zw_text_333333 pt-3 pb-3">
                        <label class="switch">
                          <form id="statusForm" class="statusForm">
                            <input type="hidden" name="spid" id="spid" class="spid" value="42">
                            <input type="checkbox" id="StatusUpdate" class="StatusUpdate" data-on="Active" data-off="In Active">
                            <span class="slider"></span>
                          </form>
                        </label>
                      </td>
                      <td><i class="fas fa-angle-right right zw_text_AF2245 zw_16"></i></td>
                    </tr>
                    <tr class="m-4" data-id="">
                      <td class="poppins-regular zw_14 zw_text_333333">05241402176</td>
                      <td class="poppins-regular zw_14 zw_text_333333">10th May 2024, 11:00:00 PM</td>
                      <td class="poppins-regular zw_14 zw_text_333333">Rahmat ali</td>
                      <td class="poppins-regular zw_14 zw_text_333333">966458739373</td>
                      <td class="poppins-regular zw_14 zw_text_333333">Rahmat.ali@gmail.com</td>
                      <td class="poppins-regular zw_14 zw_text_333333">10th May 2024
                        11:00 PM - 12:00 AM </td>
                      <td class="poppins-regular zw_14 zw_text_333333">Completed</td>
                      <td class="poppins-regular zw_14 zw_text_333333">
                        <label class="switch">
                          <form id="statusForm" class="statusForm">
                            <input type="hidden" name="spid" id="spid" class="spid" value="42">
                            <input type="checkbox" id="StatusUpdate" class="StatusUpdate" data-on="Active" data-off="In Active">
                            <span class="slider"></span>
                          </form>
                        </label>
                      </td>
                    </tr>
                    <tr class="m-4" data-id="">
                      <td class="poppins-regular zw_14 zw_text_333333">05241402176</td>
                      <td class="poppins-regular zw_14 zw_text_333333">10th May 2024, 11:00:00 PM</td>
                      <td class="poppins-regular zw_14 zw_text_333333">Rahmat ali</td>
                      <td class="poppins-regular zw_14 zw_text_333333">966458739373</td>
                      <td class="poppins-regular zw_14 zw_text_333333">Rahmat.ali@gmail.com</td>
                      <td class="poppins-regular zw_14 zw_text_333333">10th May 2024
                        11:00 PM - 12:00 AM </td>
                      <td class="poppins-regular zw_14 zw_text_333333">Completed</td>
                      <td class="poppins-regular zw_14 zw_text_333333">
                        <label class="switch">
                          <form id="statusForm" class="statusForm">
                            <input type="hidden" name="spid" id="spid" class="spid" value="42">
                            <input type="checkbox" id="StatusUpdate" class="StatusUpdate" data-on="Active" data-off="In Active">
                            <span class="slider"></span>
                          </form>
                        </label>
                      </td>
                    </tr>

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <!-- Bootstrap Modal for Comment -->
              <div class="modal fade" id="commentModal" tabindex="-1" role="dialog" aria-labelledby="commentModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="commentModalLabel">Add a Comment</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <textarea id="commentText" class="form-control" placeholder="Add a comment"></textarea>
                    </div>
                    <div class="modal-footer">

                      <button type="button" class="btn zw_submit zw_submit_wh" id="submitComment">Submit</button>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </section>
    </div>
    @include('admin.layouts.footer')
  </div>
</body>

</html>