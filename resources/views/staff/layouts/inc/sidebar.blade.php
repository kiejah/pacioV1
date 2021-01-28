<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      {{-- <img src="{{ adminAsset('dist/img/AdminLTELogo.png') }}"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8"> --}}
      <span class="brand-text font-weight-light ml-3">{{ getCompanyName(Auth::user()->company_id) }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ adminAsset('dist/img/user2-160x160.jpg') }} " class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">{{ Auth::user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview">
            <a href="{{ route('admin.dashboard')}}" class="nav-link {{ isActive('staff/dashboard')}}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Dashboard
                </p>
                </a>

            </li>
                <li class="nav-header">Company Management</li>

                <li class="nav-item has-treeview ">
                    <a href="#" class="nav-link {{ isActive('staff/parcels*')}}" >
                      <i class="nav-icon fas fa-copy"></i>
                      <p>
                        Parcels
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview" style="display:{{ dStyle(isActive('staff/parcels*'))}}">
                      <li class="nav-item">
                        <a href="{{ route('staff.parcels.view')}}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>All</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{ route('staff.parcel.add_parcel_details_form')}}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Add New</p>
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
