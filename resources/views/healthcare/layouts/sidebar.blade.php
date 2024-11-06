 <!-- Main Sidebar Container -->
 <aside class="main-sidebar zw_brand">
   <!-- Brand Logo -->
   <div class="zw_borderbtm_CCCCCC">
     <a href="{{ url('healthcare/dashboard') }}" class="brand-link">
       <img src="{{url('dist/img/zwaara_logo.svg')}}" alt="Zwaara Logo" class="brand-image ">
       <!-- <span class="brand-text font-weight-light">Zwarra Admin Panel</span> -->
     </a>
   </div>


   <!-- Sidebar -->
   <div class="sidebar pt-3">

     <!-- Sidebar Menu -->
     <nav class="mt-2 zw_sidebar">
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         <li class="nav-item menu-open">
           <a href="{{ url('healthcare/dashboard') }}" class="nav-link active">
             <div class="home-icon"></div>
             <p class="zw_12">
               Home
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="{{ url('healthcare/service') }}" class="nav-link">
             <div class="visit-service-icon"></div>
             <p class="zw_12">
               Services
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="{{ url('healthcare/reports') }}" class="nav-link">
             <div class="reports-icon"></div>
             <p class="zw_12">
               Reports
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="#" class="nav-link">
             <div class="map-icon"></div>
             <p class="zw_12">
               Zone
               <i class="fas fa-angle-left right zw_text_AF2245 zw_16"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <!-- <li class="nav-item">
               <a href="{{ url('healthcare/locations') }}" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                 <p class="zw_12">Add Countrys & Citys & Zones</p>
               </a>
             </li> -->
             <li class="nav-item">
               <a href="{{ url('healthcare/zones') }}" class="nav-link">
                 <!-- <i class="far fa-circle nav-icon"></i> -->
                 <p class="zw_12">Select Zone</p>
               </a>
             </li>
           </ul>
         </li>
         <li class="nav-item">
           <a href="{{ route('healthcare.payments') }}" class="nav-link">
             <div class="payment-icon"></div>
             <p class="zw_12">
               Payments
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="{{ url('healthcare/bookings') }}" class="nav-link">
             <div class="finance-icon"></div>
             <p class="zw_12">
               Bookings
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="{{ url('healthcare/Requesttoaddanewservice') }}" class="nav-link">
             <div class="finance-icon"></div>
             <p class="zw_12">
               Request to add a new service
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="{{ url('healthcare/help') }}" class="nav-link">
             <div class="finance-icon"></div>
             <p class="zw_12">
               Help
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="{{ route('healthcare.signout') }}" class="nav-link active">
             <img src="{{url('images/icon/logout.png')}}" alt="Logout Image" style="margin-right: 5px;">
             <p class="zw_12">Logout</p>
           </a>
         </li>
       </ul>
     </nav>
     <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
 </aside>