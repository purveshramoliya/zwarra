 <!-- Main Sidebar Container -->
 <aside class="main-sidebar zw_brand">
   <!-- Brand Logo -->
   <div class="zw_borderbtm_CCCCCC">
     <a href="{{ url('doctor/dashboard') }}" class="brand-link">
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
           <a href="{{ url('doctor/dashboard') }}" class="nav-link active">
             <i class="nav-icon fas fa-tachometer-alt"></i>
             <p class="zw_12">
               Dashboard
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="{{ url('doctor/bookings') }}" class="nav-link">
             <i class="nav-icon far fa-envelope"></i>
             <p class="zw_12">
               Appointments
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="{{ route('doctor.signout') }}" class="nav-link">
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