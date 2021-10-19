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
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          {{-- <img src="{{ asset('backend/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image"> --}}
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('profile.show') }}" class="nav-link">
                  <i class="fas fa-user nav-icon"></i>
                  <p>Profile</p>
                </a>
              @if(Auth::user()->role == 'Admin')
              <li class="nav-item">
                <a href="{{ route('admin.pages.users.users_view') }}" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>All Users</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.pages.companies.view') }}" class="nav-link">
                  <i class="fas fa-building nav-icon"></i>
                  <p>Companies</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.pages.levels.view') }}" class="nav-link">
                  <i class="fas fa-level-up-alt nav-icon"></i>
                  <p>Levels</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-chalkboard-teacher nav-icon"></i>
                  <p>Teachers</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.pages.students.view') }}" class="nav-link">
                  <i class="fas fa-school nav-icon"></i>
                  <p>Students</p>
                </a>
              </li>
              @endif
            </ul>
          </li>
        </ul>
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Reports
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                @if(Auth::user()->role == 'Admin')
                <li class="nav-item">
                  <a href="{{ route('admin.pages.attendance.report_view') }}" class="nav-link">
                    <i class="fas fa-clipboard-list nav-icon"></i>
                    <p>Attendance</p>
                  </a>
                </li>
                @endif
                <li class="nav-item">
                  <a href="{{ route('admin.pages.attendance.attendance_add') }}" class="nav-link">
                    <i class="fas fa-pen-square nav-icon"></i>
                    <p>Add Attendance</p>
                  </a>
                </li>

              </ul>
            </li>
          </ul>
          <ul class="nav nav-sidebar flex-column">
            <li class="nav-item">
              <a href="{{ route('logout') }}" class="nav-link">
                <i class="fas fa-power-off nav-icon"></i>
                <p>Logout</p>
              </a>
            </li>
          </ul>
  
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>