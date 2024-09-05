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
             <i class="nav-icon fas fa-tachometer-alt"></i>
             <p class="zw_12">
               Dashboard
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="{{ url('healthcare/services') }}" class="nav-link">
             <i class="nav-icon fas fa-copy"></i>
             <p class="zw_12">
               Services
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="{{ url('healthcare/bookings') }}" class="nav-link">
             <i class="nav-icon far fa-envelope"></i>
             <p class="zw_12">
               Appointments
             </p>
           </a>
         </li>
          <li class="nav-item">
           <a href="#" class="nav-link">
             <i class="nav-icon fas fa-tree"></i>
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
           <a href="{{ url('healthcare/reports') }}" class="nav-link">
             <i class="nav-icon fas fa-chart-pie"></i>
             <p class="zw_12">
               Reports
             </p>
           </a>
         </li>
        
         <li class="nav-item">
           <a href="{{ route('healthcare.signout') }}" class="nav-link">
             <i class="nav-icon fas fa-logout-h"></i>
             <p class="zw_12">Logout</p>
           </a>
         </li>
       </ul>
     </nav>
     <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
 </aside>