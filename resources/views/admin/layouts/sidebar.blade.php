 <!-- Main Sidebar Container -->
 <aside class="main-sidebar zw_brand">
   <!-- Brand Logo -->
   <div class="zw_borderbtm_CCCCCC">
     <a href="{{ url('admin/dashboard') }}" class="brand-link">
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
           <a href="{{ url('admin/dashboard') }}" class="nav-link active">
             <i class="nav-icon fas fa-tachometer-alt"></i>
             <p class="zw_12">
               Dashboard
               <!-- <i class="right fas fa-angle-left"></i> -->
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="#" class="nav-link">
             <i class="nav-icon fas fa-copy"></i>
             <p class="zw_12">
               Visit/Service Provider
               <i class="fas fa-angle-left right zw_text_AF2245 zw_16"></i>
               <!-- <span class="badge badge-info right">6</span> -->
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="{{ url('admin/serviceproviders') }}" class="nav-link">
                 <!-- <i class="far fa-circle nav-icon"></i> -->
                 <p class="zw_12">Service Provider</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ url('admin/serviceproviderrequest') }}" class="nav-link">
                 <!-- <i class="far fa-circle nav-icon"></i> -->
                 <p class="zw_12">Join Service Provider Request</p>
               </a>
             </li>
               <li class="nav-item">
               <a href="{{ url('admin/generaljoinrequest') }}" class="nav-link">
                 <!-- <i class="far fa-circle nav-icon"></i> -->
                 <p class="zw_12">Join Insurance/Nurse Request</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ url('admin/practitioners') }}" class="nav-link">
                 <!-- <i class="far fa-circle nav-icon"></i> -->
                 <p class="zw_12">Practitioners</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="pages/layout/boxed.html" class="nav-link">
                 <!-- <i class="far fa-circle nav-icon"></i> -->
                 <p class="zw_12">Pending order</p>
               </a>
             </li>
           </ul>
         </li>
         <li class="nav-item">
           <a href="#" class="nav-link">
             <i class="nav-icon fas fa-chart-pie"></i>
             <p class="zw_12">
               Visit/Service
               <i class="fas fa-angle-left right zw_text_AF2245 zw_16"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="{{ url('admin/ourservices') }}" class="nav-link">
                 <!-- <i class="far fa-circle nav-icon"></i> -->
                 <p class="zw_12">List of main services</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ url('admin/subservices') }}" class="nav-link">
                 <!-- <i class="far fa-circle nav-icon"></i> -->
                 <p class="zw_12">Sub services</p>
               </a>
             </li>
           </ul>
         </li>
         <li class="nav-item">
           <a href="#" class="nav-link">
             <i class="nav-icon fas fa-tree"></i>
             <p class="zw_12">
               Doctor-Practitioner/Video
               <i class="fas fa-angle-left right zw_text_AF2245 zw_16"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="{{ url('admin/medicalspecialties') }}" class="nav-link">
                 <!-- <i class="far fa-circle nav-icon"></i> -->
                 <p class="zw_12">Medical Department</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ url('admin/doctorpositions') }}" class="nav-link">
                 <!-- <i class="far fa-circle nav-icon"></i> -->
                 <p class="zw_12">Doctor position</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ url('admin/alldoctors') }}" class="nav-link">
                 <!-- <i class="far fa-circle nav-icon"></i> -->
                 <p class="zw_12">Add doctors</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ url('admin/doctorrequest') }}" class="nav-link">
                 <!-- <i class="far fa-circle nav-icon"></i> -->
                 <p class="zw_12">Join Doctor Request</p>
               </a>
             </li>
           </ul>
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
             <li class="nav-item">
               <a href="{{ url('admin/locations') }}" class="nav-link">
                 <!-- <i class="far fa-circle nav-icon"></i> -->
                 <p class="zw_12">Add Countrys & Citys & Zones</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ url('admin/zones') }}" class="nav-link">
                 <!-- <i class="far fa-circle nav-icon"></i> -->
                 <p class="zw_12">Select Zone</p>
               </a>
             </li>
              <li class="nav-item">
               <a href="{{ url('admin/zonelist') }}" class="nav-link">
                 <!-- <i class="far fa-circle nav-icon"></i> -->
                 <p class="zw_12">Zone List</p>
               </a>
             </li>
           </ul>
         </li>

         <li class="nav-item">
           <a href="{{ url('admin/bookings') }}" class="nav-link">
             <i class="nav-icon far fa-envelope"></i>
             <p class="zw_12">
               Appointments
             </p>
           </a>
         </li>
         
         <li class="nav-item">
           <a href="{{ url('admin/patientregistration') }}" class="nav-link">
             <i class="nav-icon fas fa-edit"></i>
             <p class="zw_12">
               Patients
             </p>
           </a>
         </li>

         <li class="nav-item">
           <a href="{{ url('admin/users') }}" class="nav-link">
             <i class="nav-icon far fa-calendar-alt"></i>
             <p class="zw_12">
               Users
               <span class="badge badge-info right">2</span>
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="{{ url('admin/offers') }}" class="nav-link">
             <i class="nav-icon far fa-image"></i>
             <p class="zw_12">
               Offers
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="#" class="nav-link">
             <i class="nav-icon fas fa-book"></i>
             <p class="zw_12">
               Payments
               <i class="fas fa-angle-left right zw_text_AF2245 zw_16"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="{{ url('admin/payments') }}" class="nav-link">
                 <!-- <i class="far fa-circle nav-icon"></i> -->
                 <p class="zw_12">Payments</p>
               </a>
             </li>
           </ul>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="{{ url('admin/bankings') }}" class="nav-link">
                 <!-- <i class="far fa-circle nav-icon"></i> -->
                 <p class="zw_12">Health care banking info...</p>
               </a>
             </li>
           </ul>
         </li>
          <li class="nav-item">
           <a href="{{ url('admin/contacts') }}" class="nav-link">
             <i class="nav-icon fas fa-ellipsis-h"></i>
             <p class="zw_12">Contact & Support</p>
           </a>
         </li>
         <li class="nav-item">
          <a href="{{ url('admin/termconditions') }}" class="nav-link">
             <i class="nav-icon fas fa-edit"></i>
             <p class="zw_12">
               Terms & Conditions
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="{{ url('admin/privacypolicys') }}" class="nav-link">
             <i class="nav-icon fas fa-ellipsis-h"></i>
             <p class="zw_12">Privacy & Policy</p>
           </a>
         </li>

         <li class="nav-item">
           <a href="{{ route('signout') }}" class="nav-link">
             <i class="nav-icon fas fa-logout-h"></i>
             <p class="zw_12">Logout</p>
           </a>
         </li>
         <!-- <li class="nav-item">
            <a href="https://adminlte.io/docs/3.1/" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Documentation</p>
            </a>
          </li> -->
       </ul>
     </nav>
     <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
 </aside>