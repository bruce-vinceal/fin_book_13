    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
        <span><i class="fas fa-book-open"></i></span>
        </div>
        <div class="sidebar-brand-text mx-3">finote.</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Monthly -->
      <li class="nav-item">
        <a class="nav-link" href="/finote/monthly-report/ {{ $user->id }}">
          <i class="fas fa-fw fa-chart-pie-alt"></i>
          <span>Monthly Report</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Category Management -->
      <li class="nav-item">
        <a class="nav-link" href="/finote/category/ {{ $user->id }}">
          <i class="fas fa-fw fa-layer-group"></i>
          <span>Category Management</span></a>
      </li>

      <!-- Nav Item - Ledger -->
      <li class="nav-item">
        <a class="nav-link" href="/finote/ledger/ {{ $user->id }}">
          <i class="fas fa-fw fa-table"></i>
          <span>Ledger</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"><span class="sidebarIcon"><i class="fas fa-angle-left"></i></span></button>
      </div>

    </ul>
    <!-- End of Sidebar -->