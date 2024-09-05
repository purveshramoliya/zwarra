<!-- Navbar -->
<nav class="main-header navbar navbar-expand zw_bg_f7e9ec navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item dropdown">
            <a class="btn zw_lanbtn float-right m-3 poppins-medium zw_18" data-toggle="dropdown" href="#" >
                Languages <img src="{{url('dist/img/languages_icon.svg')}}" alt="languages" class="brand-image" style="padding: 0 20px;"><i class="fas fa-angle-down right mr-2"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right zw_a_n zw_text_000000">
                <a href="#" class="dropdown-item">
                    English
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item zw_a_n zw_text_000000">
                    Arabic
                </a>
            </div>
        </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="btn  float-right m-2 poppins-medium zw_18" data-toggle="dropdown" href="#">
                <img src="{{url('dist/img/zwaara_slogo.png')}}" alt="Profile" class="brand-image">
            </a>

            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                <a href="{{ route('healthcare.profile.healthcareprofile') }}" class="dropdown-item zw_a_n zw_text_000000">
                    Your Profile 

                </a>
                <div class="dropdown-divider"></div>
                <a href="{{ route('healthcare.profile.healthcaresetting')}}" class="dropdown-item zw_a_n zw_text_000000">
                    Settings
                </a>
            </div>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
