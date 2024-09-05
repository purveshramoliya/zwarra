@include('admin.layouts.headermodule')

<body class="hold-transition sidebar-mini zw_sidebar zw_login_form zw_bg_f6f6f6">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"> -->


    <main class="login-form ">
        <!-- Login -->
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6 col-sm-6 zw_login_rightbar">
                    <!-- <img src="dist/img/login_doctor.jpg" alt="login doctor" class="zw_bg_img"> -->
                    <div class="zw_overlay">
                        <div class="text-center m-4 pt-4">
                            <a href="index3.html" class="">
                                <img src="dist/img/zwaara_login_logo.png" alt="Zwaara Logo" class="" width="100px">
                                <!-- <span class="brand-text font-weight-light">Zwarra Admin Panel</span> -->
                            </a>
                        </div>
                        <div class="text_quote p-3 zw_bor_radi_6">
                            <!-- <div class="quote"><i class="fa fa-quote-left fa-4x"></i></div> -->
                            <div class="quote mb-3">
                                <img src="dist/img/quote.png" alt="Zwaara Quote" class="">
                            </div>
                            <p class="zw_text_ffffff poppins-regular zw_18">In an era of advanced medical capabilities, fostering a culture of preventive healthcare not only enhances individual well-being but also fortifies the foundation of a healthier society, reducing the burden on healthcare systems and promoting longevity.</p>
                            <div class="quote text-right">
                                <img src="dist/img/l_shape.png" alt="Zwaara Quote" class="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-6 zw_bg_f6f6f6">
                    <div class="card zw_login_card zw_login_mtb zw_bg_f6f6f6">
                        <h3 class="poppins-bold zw_30 zw_text_333333">Login</h3>
                        <p class="poppins-regular zw_18 zw_text_000000">For the purpose of industry regulation,your details are required.</p>
                        <div class="zw_divider"></div>
                        <div class="card-body p-0">
                            <form method="POST" action="{{ route('login.custom') }}">
                                @csrf
                                <div class="form-group mb-4 mt-3">
                                    <label class="zw_poppins_regular poppins-regular zw_18 zw_text_333333" for="email">Email</label>
                                    <input type="text" placeholder="Email" id="email" class="form-control poppins-regular zw_18 zw_text_333333 zw_login_form_control" name="email" required autofocus>
                                </div>

                                <div class="form-group mb-4 ">
                                    <label class="zw_poppins_regular poppins-regular zw_18 zw_text_333333" for="password">Password</label>
                                    <input type="password" placeholder="Password" id="password" class="form-control poppins-regular zw_18 zw_text_333333 zw_login_form_control" name="password" required>

                                    @if ($errors->has('emailPassword'))
                                    <span class="text-danger">{{ $errors->first('emailPassword') }}</span>
                                    @endif
                                </div>

                                <!-- <div class="form-group mb-3">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div> -->

                                <div class="d-grid mx-auto pt-3">
                                    <button type="submit" class="btn zw_btn btn-block p-2">Login</button>
                                </div>

                                <p class="mt-3 zw_popup_link ">
                                    <a href="{{ route('forgot.password') }}">
                                        Forgot Your Password?
                                    </a>
                                </p>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>