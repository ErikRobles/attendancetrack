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
          <img class="h-8 w-8 rounded-full object-cover" style="width: 25px; border-radius: 50%;" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        @if(Auth::user()->role == 'Admin')
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
                <a href="{{ route('admin.pages.students.view') }}" class="nav-link">
                  <i class="fas fa-school nav-icon"></i>
                  <p>Students</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-envelope"></i>
                  <p>
                    Messages
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                {{-- <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('front_end_messages') }}" class="nav-link">
                      <i class="fas fa-envelope nav-icon"></i>
                      <p>Front End Messages</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('front_end_two_messages') }}" class="nav-link">
                      <i class="fas fa-envelope-open-text nav-icon"></i>
                      <p>Front End Two Messages</p>
                    </a>
                  </li>
                </ul> --}}
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-brain"></i>
                  <p>
                    Exams
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('exam_category') }}" class="nav-link">
                      <i class="fas fa-boxes nav-icon"></i>
                      <p>Exam Categories</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('manage_exam') }}" class="nav-link">
                      <i class="fas fa-question nav-icon"></i>
                      <p>Manage Exams</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('admin.pages.students.view') }}" class="nav-link">
                      <i class="fas fa-users nav-icon"></i>
                      <p>Manage Students</p>
                    </a>
                  </li>
                </ul>
              </li>

              {{-- <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-dungeon"></i>
                  <p>
                    Portal
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('manage_portal') }}" class="nav-link">
                      <i class="fas fa-door-open nav-icon"></i>
                      <p> Manage Portal</p>
                    </a>
                  </li>
                </ul>
              </li> --}}


              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Reports
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('admin.pages.attendance.report_view') }}" class="nav-link">
                      <i class="fas fa-clipboard-list nav-icon"></i>
                      <p>Attendance</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('performance') }}" class="nav-link">
                      <i class="fas fa-chart-line nav-icon"></i>
                      <p>Performance</p>
                    </a>
                  </li>
                </ul>
              </li>
              @endif
            </ul>
          </li>
        </ul>
      </nav>
     
      @if(Auth::user()->role == "Teacher")
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
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-brain"></i>
                  <p>
                    Exams
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('exam_category') }}" class="nav-link">
                      <i class="fas fa-boxes nav-icon"></i>
                      <p>Exam Categories</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('manage_exam') }}" class="nav-link">
                      <i class="fas fa-question nav-icon"></i>
                      <p>Manage Exams</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('admin.pages.students.view') }}" class="nav-link">
                      <i class="fas fa-users nav-icon"></i>
                      <p>Manage Students</p>
                    </a>
                  </li>
                </ul>
                <ul class="nav nav-sidebar flex-column">
                  <li class="nav-item">
                    <a href="{{ route('admin.pages.attendance.attendance_add') }}" class="nav-link">
                      <i class="fas fa-school nav-icon"></i>
                      <p>Add Attendance</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('performance_add') }}" class="nav-link">
                      <i class="fas fa-chart-line nav-icon"></i>
                      <p>Add Performance</p>
                    </a>
                  </li>
                </ul>
              </li>

              


              
            </ul>
          </li>
        </ul>
      </nav>
      @endif

      @if(Auth::user()->role == "Student")
      <ul class="nav nav-sidebar flex-column">
        <li class="nav-item">
          <a href="{{ route('exam') }}" class="nav-link">
            <i class="fas fa-user nav-icon"></i>
            <p>Exams</p>
          </a>
        </li>
      </ul>
      @endif
         
        {{-- <nav class="mt-2">
          @if(Auth::user()->role == 'Teacher')
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-brain"></i>
                <p>
                  Exams
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('exam_category') }}" class="nav-link">
                    <i class="fas fa-boxes nav-icon"></i>
                    <p>Exam Categories</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('manage_exam') }}" class="nav-link">
                    <i class="fas fa-question nav-icon"></i>
                    <p>Manage Exams</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('admin.pages.students.view') }}" class="nav-link">
                    <i class="fas fa-users nav-icon"></i>
                    <p>Manage Students</p>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
          <ul class="nav nav-sidebar flex-column">
            <li class="nav-item">
              <a href="{{ route('admin.pages.attendance.attendance_add') }}" class="nav-link">
                <i class="fas fa-school nav-icon"></i>
                <p>Add Attendance</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('performance_add') }}" class="nav-link">
                <i class="fas fa-chart-line nav-icon"></i>
                <p>Add Performance</p>
              </a>
            </li>
          </ul>
         
          @endif
        </nav> --}}
          <ul class="nav nav-sidebar flex-column">
            <li class="nav-item">
              <a href="{{ route('profile.show') }}" class="nav-link">
                <i class="fas fa-user nav-icon"></i>
                <p>Profile</p>
              </a>
            </li>
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