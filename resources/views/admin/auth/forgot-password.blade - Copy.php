@include('admin.layouts.headermodule')

<body class="hold-transition sidebar-mini zw_sidebar zw_login_form zw_bg_f6f6f6">
    <main class="login-form ">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6 col-sm-6 zw_login_rightbar">
                    <div class="zw_overlay">
                        <div class="text-center m-4 pt-4">
                            <a href="index3.html" class="">
                                <img src="dist/img/zwaara_login_logo.png" alt="Zwaara Logo" class="" width="100px">
                            </a>
                        </div>
                        <div class="text_quote p-3 zw_bor_radi_6">
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
                        <h3 class="poppins-bold zw_30 zw_text_333333">Forgot Your Password?</h3>
                        <p class="poppins-regular zw_18 zw_text_000000">Enter your email or your phone number, we will send you a confirmation code.</p>
                        <div class="zw_divider"></div>
                        @if ($errors->any())
                            <div>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if (session('status'))
                            <div>{{ session('status') }}</div>
                        @endif
                        <div class="card-body p-2">
                            
                             <div class="form-group mb-4 zw_bg_ffffff zw_login_form_control zw_bor_radi_6" style="padding: 3px 10px;">
                                <button type="submit" id="emailTab" class="btn zw_bg_f7e9ec p-2 zw_bor_radi_6" style="width: 95px;">Email</button>
                                <button type="submit" id="smsTab" class="btn p-2 float-right zw_bor_radi_6" style="width: 95px;">Phone</button>
                            </div>

                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div class="form-group mb-4 mt-3" id="emailField">
                                    <label class="zw_poppins_regular poppins-regular zw_18 zw_text_333333" for="email">Email</label>
                                    <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Email" class="form-control poppins-regular zw_18 zw_text_333333 zw_login_form_control" required>
                                </div>

                                <div class="form-group mb-4 mt-3" id="smsField" style="display: none;">
                                    <label class="zw_poppins_regular poppins-regular zw_18 zw_text_333333" for="phone">Phone Number</label>
                                    <input type="text" id="phone" name="phone" value="{{ old('phone') }}" placeholder="Phone Number" class="form-control poppins-regular zw_18 zw_text_333333 zw_login_form_control">
                                </div>

                                <div class="d-grid mx-auto pt-3">
                                    <button type="submit" class="btn zw_btn btn-block p-2">Send Code</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const emailTab = document.getElementById('emailTab');
            const smsTab = document.getElementById('smsTab');
            const emailField = document.getElementById('emailField');
            const smsField = document.getElementById('smsField');

            // Show email field by default
            emailField.style.display = 'block';
            smsField.style.display = 'none';

            emailTab.addEventListener('click', function() {
                emailField.style.display = 'block';
                smsField.style.display = 'none';
                emailTab.classList.add('zw_bg_f7e9ec');
                smsTab.classList.remove('zw_bg_f7e9ec');
            });

            smsTab.addEventListener('click', function() {
                emailField.style.display = 'none';
                smsField.style.display = 'block';
                smsTab.classList.add('zw_bg_f7e9ec');
                emailTab.classList.remove('zw_bg_f7e9ec');
            });

            emailTab.addEventListener('click', function() {
                emailField.style.display = 'block';
                smsField.style.display = 'none';
            });

            smsTab.addEventListener('click', function() {
                emailField.style.display = 'none';
                smsField.style.display = 'block';
            });
        });
    </script>
</body>
</html>
