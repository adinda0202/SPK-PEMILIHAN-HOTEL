<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.dashboard') }}" class="brand-link">
      <span class="brand-text font-bold" style="color: black"><strong style="color: rgb(77, 76, 76)">HOTEL</strong></span>
    </a>
  
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- SidebarSearch Form -->
      <div class="form-inline mt-2">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>
  
      <!-- Sidebar Menu -->
      <!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <li class="nav-item">
        <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>Dashboard</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('admin.datahotel.index') }}" class="nav-link {{ request()->routeIs('admin.datahotel.index') ? 'active' : '' }}">
          <i class="nav-icon fas fa-hotel"></i>
          <p>Data Hotel</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('kriteria.index') }}" class="nav-link {{ request()->routeIs('kriteria.index') ? 'active' : '' }}">
          <i class="nav-icon fas fa-th-list"></i>
          <p>Kriteria</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('logout') }}" class="nav-link">
          <i class="fas fa-fw fa-sign-out-alt nav-icon"></i>
          <p>Keluar</p>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.sidebar-menu -->
  
