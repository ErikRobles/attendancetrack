  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.dashboard') }}" class="brand-link">
      <img src="{{ asset('backend/img/logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AttendanceTrack</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img class="h-8 w-8 rounded-full object-cover" style="width: 25px; border-radius: 50%;" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div> --}}


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
          <ul class="nav nav-sidebar flex-column">
            <li class="nav-item">
              <a href="{{ route('change.password') }}" class="nav-link">
                <i class="fas fa-key nav-icon"></i>
                <p>Change Password</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('logout') }}" class="nav-link">
                <i class="fas fa-power-off nav-icon"></i>
                <p>Logout</p>
              </a>
            </li>
          </ul>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>