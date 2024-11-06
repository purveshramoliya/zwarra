@include('healthcare.layouts.headermodule')

<body class="hold-transition sidebar-mini zw_sidebar">
  <div class="wrapper">
    @include('healthcare.layouts.header')
    @include('healthcare.layouts.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper content-wrapper-bg">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6 zw_back">
              <a href="#" class="poppins-medium zw_18 zw_text_333333 zw_a zw_back">
                <i class="fas fa-arrow-left right mr-2"></i>Back
              </a>

            </div>
          </div>
          <div class="row">
            <div class="col-12 col-md-12 col-lg-12 p-3">
              <h1 class="poppins-semibold zw_46 zw_text_AF2245 mt-2 mb-3">Help &support Center</h1>
            </div>

          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="row">
          <div class="col-12 bg-white p-2">
            <div class="card zw_card">
              <div class="form-group col-md-12">
                <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputIssue">Write your issue</label>
                <textarea name="issue" class="form-control full-border-af2245 poppins-regular zw_18 zw_text_898B9F" id="exampleInputIssue" placeholder="Lorem ipsum dolor sit amet consectetur. Nibh tristique urna lectus id.Lorem ipsum dolor sit amet consectetur. Nibh tristique urna lectus id.Lorem ipsum dolor sit amet consectetur. Nibh tristique urna lectus id." rows="4"></textarea>
                <div class="d-flex justify-content-between align-items-center mt-2">
                  <p class="mb-0 zw_text_AF2245">20/100 characters</p>
                  <a class="btn zw_btn" href="">Send</a>
                </div>
              </div>
              <div class="col-md-12">
                <p class="mb-3 zw_text_AF2245">Or using alternatives</p>
                <div class="d-flex flex-column">
                  <div class="d-flex align-items-center mb-2 justify-content-between zw_form_control p-3">
                    <p class="mb-0 me-2">920035737</p>
                    <img src="/images/phone.png" alt="Phone Icon" class="float-end">
                  </div>
                  <div class="d-flex align-items-center mb-2 justify-content-between zw_form_control p-3">
                    <p class="mb-0 me-2">+9665084455566</p>
                    <img src="/images/whatsapp.png" alt="WhatsApp Icon" class="float-end">
                  </div>
                  <div class="d-flex align-items-center justify-content-between zw_form_control p-3">
                    <p class="mb-0 me-2">Zwaaracare.co</p>
                    <img src="/images/email.png" alt="Email Icon" class="float-end">
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
    @include('healthcare.layouts.footer')
  </div>
</body>

</html>