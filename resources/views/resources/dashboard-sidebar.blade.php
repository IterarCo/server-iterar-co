  <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-iterar-green sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="resources/dashboard" style="padding:0px">
        <img src="{{ asset('img/logo-iterar-green.png') }}" style="height: 100%;width: 100%;object-fit: contain;">
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="/resources/dashboard">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Panel de Control</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">


        @include('resources.dashboard-modules')



      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
