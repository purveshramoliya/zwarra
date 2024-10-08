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
             <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
             <!-- <i class="nav-icon fa fa-table" aria-hidden="true"></i> -->
             <div class="dashboard-icon">
             </div>
             <p class="zw_12">
               Dashboard
               <!-- <i class="right fas fa-angle-left"></i> -->
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="#" class="nav-link">
             <div class="bg-icon">
             </div>
             <p class="zw_12">
               Visit/Service Provider
               <i class="fas fa-angle-left right zw_text_AF2245 zw_16"></i>
             </p>
             <!-- <i class="nav-icon fas fa-copy"></i> -->
             <!-- <img src="{{ asset('images/icon/Path 47.png') }}" class="nav-icon" alt=" Visit/Service Provider Image"> -->
             <!-- <p class="zw_12">
               Visit/Service Provider
               <i class="fas fa-angle-left right zw_text_AF2245 zw_16"></i> -->
             <!-- <span class="badge badge-info right">6</span> -->
             <!-- </p> -->
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="{{ url('admin/serviceproviders') }}" class="nav-link">
                 <!-- <i class="far fa-circle nav-icon"></i> -->
                 <p class="zw_12">Add Service</p>
               </a>
             </li>
             <!-- <li class="nav-item">
               <a href="{{ url('admin/serviceproviderrequest') }}" class="nav-link"> -->
             <!-- <i class="far fa-circle nav-icon"></i> -->
             <!-- <p class="zw_12">Join Service Provider Request</p>
               </a>
             </li> -->
             <!-- <li class="nav-item">
               <a href="{{ url('admin/generaljoinrequest') }}" class="nav-link"> -->
             <!-- <i class="far fa-circle nav-icon"></i> -->
             <!-- <p class="zw_12">Join Insurance/Nurse Request</p>
               </a>
             </li> -->
             <!-- <li class="nav-item">
               <a href="{{ url('admin/practitioners') }}" class="nav-link"> -->
             <!-- <i class="far fa-circle nav-icon"></i> -->
             <!-- <p class="zw_12">Practitioners</p>
               </a>
             </li> -->
             <li class="nav-item">
               <a href="{{ url('admin/pendingorder') }}" class="nav-link">
                 <!-- <i class="far fa-circle nav-icon"></i> -->
                 <p class="zw_12">Pending orders</p>
               </a>
             </li>
           </ul>
         </li>
         <li class="nav-item">
           <a href="#" class="nav-link">
             <!-- <i class="nav-icon fas fa-chart-pie"></i> -->
             <div class="visit-service-icon">
             </div>
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
                 <p class="zw_12">Sub Services</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ url('admin/body') }}" class="nav-link">
                 <p class="zw_12">Body</p>
               </a>
             </li>
           </ul>
         </li>
         <li class="nav-item">
           <a href="#" class="nav-link">
             <!-- <i class="nav-icon fas fa-tree"></i> -->
             <div class="doctor-practitioner-video-icon">
             </div>
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
               <a href="{{ url('admin/alldoctors') }}" class="nav-link">
                 <!-- <i class="far fa-circle nav-icon"></i> -->
                 <p class="zw_12">Add doctors</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ url('admin/doctorpositions') }}" class="nav-link">
                 <!-- <i class="far fa-circle nav-icon"></i> -->
                 <p class="zw_12">Doctor position</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ url('admin/doctorrequest') }}" class="nav-link">
                 <!-- <i class="far fa-circle nav-icon"></i> -->
                 <p class="zw_12">Join request doctors </p>
               </a>
             </li>
           </ul>
         </li>



         <!-- <li class="nav-item">
           <a href="{{ url('admin/patientregistration') }}" class="nav-link">
             <i class="nav-icon fas fa-edit"></i>
             <p class="zw_12">
               Patients
              </p>
            </a>
          </li> -->
         <li class="nav-item">
           <a href="{{ url('admin/patientregistration') }}" class="nav-link">
             <!-- <i class="nav-icon fas fa-edit"></i> -->
             <div class="patients-icon">
             </div>
             <p class="zw_12">
               Patients
               <i class="fas fa-angle-left right zw_text_AF2245 zw_16"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="{{ route('admin.registeredAndNonRegisteredPatients') }}" class="nav-link">
                 <p class="zw_12">
                   Regis... & non Regis... Patients
                 </p>
               </a>

             </li>
           </ul>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="{{ url('admin/bookings') }}" class="nav-link">
                 <p class="zw_12">
                   Appointments
                 </p>
               </a>
             </li>
           </ul>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="{{ url('admin/rejectedrequested') }}" class="nav-link">
                 <p class="zw_12">
                   Rejected appointments
                 </p>
               </a>
             </li>
           </ul>
         </li>

         <li class="nav-item">
           <a href="{{ url('admin/users') }}" class="nav-link">
             <!-- <i class="nav-icon far fa-calendar-alt"></i> -->
             <div class="Users-icon">
             </div>
             <p class="zw_12">
               Admin Dashboard Users
               <span class="badge badge-info right">2</span>
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="{{ url('admin/offers') }}" class="nav-link">
             <!-- <i class="nav-icon far fa-image"></i> -->
             <div class="offers-icon">
             </div>
             <p class="zw_12">
               Offers
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="#" class="nav-link">
             <!-- <i class="nav-icon fas fa-book"></i> -->
             <!-- <i class="fa fa-credit-card"></i> -->
             <div class="finance-icon">
             </div>
             <p class="zw_12">
               Finance
               <i class="fas fa-angle-left right zw_text_AF2245 zw_16"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="{{ url('admin/refundPayments') }}" class="nav-link">
                 <p class="zw_12">Refund Payments</p>
               </a>
             </li>
           </ul>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="{{ url('admin/completePayments') }}" class="nav-link">
                 <p class="zw_12">Complete payments</p>
               </a>
             </li>
           </ul>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="{{ url('admin/incompleteBookings') }}" class="nav-link">
                 <p class="zw_12">incomplete bookings</p>
               </a>
             </li>
           </ul>
         </li>
         <li class="nav-item">
           <a href="#" class="nav-link">
             <!-- <i class="nav-icon fas fa-book"></i> -->
             <!-- <i class="fa fa-credit-card"></i> -->
             <div class="payment-icon">
             </div>
             <p class="zw_12">
               Payments Details
               <i class="fas fa-angle-left right zw_text_AF2245 zw_16"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="{{ url('admin/bankings') }}" class="nav-link">
                 <!-- <i class="far fa-circle nav-icon"></i> -->
                 <p class="zw_12">Health care banking info...</p>
               </a>
             </li>
           </ul>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="{{ url('admin/doctorbanking') }}" class="nav-link">
                 <!-- <i class="far fa-circle nav-icon"></i> -->
                 <p class="zw_12">Doctors banking info...</p>
               </a>
             </li>
           </ul>
         </li>
         <li class="nav-item">
           <a href="#" class="nav-link">
             <!-- <i class="nav-icon fas fa-tree"></i> -->
             <div class="zone-icon">
             </div>
             <p class="zw_12">
               Add Zone
               <i class="fas fa-angle-left right zw_text_AF2245 zw_16"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="{{ url('admin/zonelist') }}" class="nav-link">
                 <!-- <i class="far fa-circle nav-icon"></i> -->
                 <p class="zw_12">Add country & City</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ url('admin/zonelist') }}" class="nav-link">
                 <!-- <i class="far fa-circle nav-icon"></i> -->
                 <p class="zw_12">Add Zone</p>
               </a>
             </li>
           </ul>
         </li>
         <li class="nav-item">
           <a href="{{ url('admin/contacts') }}" class="nav-link">
             <!-- <i class="nav-icon fas fa-ellipsis-h"></i> -->
             <div class="zone-icon">
             </div>
             <p class="zw_12">Contact & Support</p>
           </a>
         </li>
         <li class="nav-item">
           <a href="{{ url('admin/termconditions') }}" class="nav-link">
             <!-- <i class="nav-icon fas fa-edit"></i> -->
             <div class="zone-icon">
             </div>
             <p class="zw_12">
               Terms & Conditions
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="{{ url('admin/privacypolicys') }}" class="nav-link">
             <!-- <i class="nav-icon fas fa-ellipsis-h"></i> -->
             <div class="zone-icon">
             </div>
             <p class="zw_12">Privacy & Policy</p>
           </a>
         </li>

         <li class="nav-item">
           <a href="{{ route('signout') }}" class="nav-link active">
             <!-- <i class="nav-icon fas fa-logout-h"></i> -->
             <img src="{{url('images/icon/logout.png')}}" alt="Logout Image" style="margin-right: 5px;">
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