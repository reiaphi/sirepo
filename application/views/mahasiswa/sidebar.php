 <!-- Page Wrapper -->
 <div id="wrapper">

   <!-- Sidebar -->
   <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('user'); ?>">
       <div class="sidebar-brand-icon rotate-n-15">
         <i class="fas fa-code"></i>
       </div>
       <div class="sidebar-brand-text mx-3">Mahasiswa</div>
     </a>

     <!-- Divider -->
     <hr class="sidebar-divider my-0">

     <!-- Nav Item - Dashboard -->
     <li class="nav-item">
       <a class="nav-link" href="<?= base_url('user'); ?>">
         <i class="fas fa-fw fa-tachometer-alt"></i>
         <span>Dashboard</span></a>
     </li>

     <!-- Divider -->
     <hr class="sidebar-divider">



     <!-- Nav Item - Pages Collapse Menu -->
     <li class="nav-item">
       <a class="nav-link collapsed" href="<?= base_url('mahasiswa/tugas_akhir_saya'); ?> ">
         <i class="fas fa-fw fa-cog"></i>
         <span>Tugas Akhir</span>
       </a>

       <!-- Divider -->
       <hr class="sidebar-divider">

       <!-- Heading -->
       <div class="sidebar-heading">
         Profile
       </div>


       <!-- Nav Item - Charts -->
     <li class="nav-item">
       <a class="nav-link" href="<?= base_url('mahasiswa/my_profile'); ?>">
         <i class=" fas fa-fw fa-user"></i>
         <span>My Profile</span></a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="<?= base_url('publik'); ?>">
         <i class=" fas fa-fw fa-user"></i>
         <span>Preview</span></a>
     </li>



     <!-- Divider -->
     <hr class="sidebar-divider d-none d-md-block">

     <!-- Sidebar Toggler (Sidebar) -->
     <div class="text-center d-none d-md-inline">
       <button class="rounded-circle border-0" id="sidebarToggle"></button>
     </div>

   </ul>
   <!-- End of Sidebar -->
   <!-- Content Wrapper -->
   <div id="content-wrapper" class="d-flex flex-column">

     <!-- Main Content -->
     <div id="content">

       <!-- Topbar -->
       <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

         <!-- Sidebar Toggle (Topbar) -->
         <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
           <i class="fa fa-bars"></i>
         </button>



         <!-- Topbar Navbar -->
         <ul class="navbar-nav ml-auto">

           <div class="topbar-divider d-none d-sm-block"></div>

           <!-- Nav Item - User Information -->
           <li class="nav-item dropdown no-arrow">
             <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['username'] ?></span>
               <i class="fas fa-user-circle fa-lg text-gray-800"></i>
             </a>
             <!-- Dropdown - User Information -->
             <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
               <div class="dropdown-divider"></div>
               <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
                 <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                 Logout
               </a>
             </div>
           </li>

         </ul>

       </nav>
       <!-- End of Topbar -->