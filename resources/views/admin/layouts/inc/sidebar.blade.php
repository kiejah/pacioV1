<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      {{-- <img src="{{ adminAsset('dist/img/AdminLTELogo.png') }}"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8"> --}}
      <span class="brand-text font-weight-light ml-3">Pacio <small><small>v 1.0.0</small></small></span>
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
          <a href="{{ route('admin.dashboard')}}" class="nav-link {{ isActive('admin/dashboard')}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>

          </li>
          <li class="nav-header">Company Management</li>
                <li class="nav-item has-treeview">
                <a href="{{ route('admin.company-master.index')}}" class="nav-link {{ isActive('admin/company-master*')}}">
                    <i class="nav-icon fas fa-building"></i>
                    <p>
                    Companies
                    </p>
                </a>

                </li>
                <li class="nav-item has-treeview">
                    <a href="{{ route('admin.location.index')}}" class="nav-link {{ isActive('admin/location*')}}">
                        <i class="nav-icon fas fa-location-arrow"></i>
                        <p>
                        Locations
                        </p>
                    </a>

                </li>
                <li class="nav-item has-treeview">
                    <a href="" class="nav-link {{ isActive('admin/delivery_offices*')}}">
                        <i class="nav-icon fas fa-laptop-house"></i>
                        <p>
                        Delivery Offices
                        </p>
                    </a>

                </li>
                <li class="nav-item has-treeview">
                    <a href="{{ route('admin.parcel.view')}}" class="nav-link {{ isActive('admin/parcels*')}}">
                        <i class="nav-icon fas fa-gift"></i>
                        <p>
                        Parcels
                        </p>
                    </a>

                </li>

                <li class="nav-item has-treeview "  style="display:{{ dStyle(isActive('admin/users'))}}">
                    <a href="#" class="nav-link {{ isActive('admin/users*')}} ">
                      <i class="nav-icon fas fa-user-cog"></i>
                      <p>
                        User Management
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview" style="display:{{ dStyle(isActive('admin/users*'))}}">
                        <li class="nav-item has-treeview">
                            <a href="{{ route('admin.users.view')}}" class="nav-link {{ isActive('admin/users')}}">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                Users
                                </p>

                            </a>
                      </li>
                      <li class="nav-item has-treeview">
                        <a href="{{ route('admin.users.add-new-user')}}" class="nav-link {{ isActive('admin/users/new-user')}}">
                            <i class="nav-icon fas fa-user-plus"></i>
                            <p>
                            New User
                            </p>

                        </a>
                      </li>


                    </ul>
                  </li>


          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle nav-icon"></i>
              <p>
                Parcel Status
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dispatched</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/top-nav-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>In Transit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/top-nav-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Arrived</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/top-nav-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Collected</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/top-nav-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pending Collection</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-bar"></i>
              <p>
                Reports
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dispatched</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/top-nav-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>In Transit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/top-nav-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Arrived</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/top-nav-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Collected</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/top-nav-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pending Collection</p>
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
