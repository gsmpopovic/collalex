<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <span class="brand-text font-weight-light"><b>Bantayanon</b>LDP</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            {{-- <div class="image">
          <img src="images/profile-george.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="profile.php?user=george" class="d-block">George S. M. Popovic</a>
        </div> --}}

            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                    {{-- <li class="nav-item">
                        <a href="{{ route('dash') }}" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                {{ Auth::user()->name }}
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                            <i class="nav-icon fas fa-tachometer-alt"></i>

                            <p>{{ __('Logout') }}</p>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li> --}}
                </ul>
            </nav>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-header">PERSONAL</li>

               <li class="nav-item">
                <a href="{{ route('dash') }}" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        {{ Auth::user()->name }}
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                    <i class="nav-icon fas fa-tachometer-alt"></i>

                    <p>{{ __('Logout') }}</p>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
            <li class="nav-header">GENERAL</li>

                <li class="nav-item">
                    <a href="{{ route('dash') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('lexicon') }}" class="nav-link">
                        <i class="nav-icon fas fa-book-open"></i>
                        <p>
                            View Lexicon
                        </p>
                    </a>
                <li class="nav-item">
                    <a href="{{ route('display-create') }}" class="nav-link">
                        <i class="nav-icon fas fa-book-open"></i>
                        <p>
                            Create Entry 
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('display-sense-create') }}" class="nav-link">
                        <i class="nav-icon fas fa-book-open"></i>
                        <p>
                            Create Sense 
                        </p>
                    </a>
                </li>
                </li>
                {{-- If so and so has the ability to view management routes, i.e., 
                    an admin.
                --}}
                @permission('view-manage')
                <li class="nav-header">MANAGEMENT</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-address-book"></i>
                        <p>
                            Project Users
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('register') }}" class="nav-link">
                        <i class="nav-icon fas fa-address-book"></i>
                        <p>
                            Register Users
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="cdash/management/rbac" class="nav-link">
                        <i class="nav-icon fas fa-address-book"></i>
                        <p>
                            RBAC Panel
                        </p>
                    </a>
                </li>
            @endpermission
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
