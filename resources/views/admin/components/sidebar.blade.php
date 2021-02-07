<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  
    <!-- Sidebar -->
    <div class="sidebar">
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         
          <li class="nav-item has-treeview menu-open">
          
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('roles.index')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Roles</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('user.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>users</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="{{route('location.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Map</p>
                </a>
              </li>
            </ul>
          </li>
       
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
