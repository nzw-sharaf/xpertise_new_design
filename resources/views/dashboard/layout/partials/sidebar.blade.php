<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/home" class="brand-link">
        <img src="@if ($logo) {{ $logo }} @else {{ asset('dashboard/dist/img/AdminLTELogo.png') }} @endif"
            alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8;width: 30px;
        height: 30px;
        object-fit: contain;object-position:center;">
        <span class="brand-text font-weight-light">{{ $name }}</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                @if (Auth()->user()->image)
                    <img src="{{ Auth()->user()->image }}" class="img-circle elevation-2" alt="User Image"
                        style="width: 30px;
                height: 30px;
                object-fit: contain;object-position:center;">
                @else
                    <img src="{{ asset('dashboard/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                        alt="User Image">
                @endif
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth()->user()->name }}</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ url('home') }}" class="nav-link {{ activeChildNavBar('home') }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                @can(config('constants.Permissions.leads'))
                    <li class="nav-item {{ activeParentNavBar('leadManagement', 'menu-open') }}">
                        <a class="nav-link  {{ activeParentNavBar('leadManagement', 'active') }}">
                            <i class="nav-icon fa fa-bullhorn"></i>
                            <p>
                                Lead Management
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ url('dashboard/leads') }}"
                                    class="nav-link {{ activeChildNavBar('dashboard.leads') }} ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Lead List</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan

                @can(config('constants.Permissions.tags'))
                    <li class="nav-item">
                        <a href="{{ url('dashboard/tags') }}" class="nav-link {{ activeChildNavBar('dashboard.tags') }}">
                            <i class="nav-icon fa fa-tags"></i>
                            <p>Tags</p>
                        </a>
                    </li>
                @endcan

                @can(config('constants.Permissions.content_management'))
                    <li class="nav-item {{ activeParentNavBar('contentManagement', 'menu-open') }}">
                        <a href="#" class="nav-link {{ activeParentNavBar('contentManagement', 'active') }}">
                            <i class="nav-icon fa fa-file"></i>
                            <p>
                                Content Management
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ url('dashboard/articles') }}"
                                    class="nav-link {{ activeChildNavBar('dashboard.articles') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Articles</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('dashboard/video-gallery') }}"
                                    class="nav-link {{ activeChildNavBar('dashboard.video-gallery') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Video Gallery</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan
                @can(config('constants.Permissions.testimonials'))
                    <li class="nav-item">
                        <a href="{{ url('dashboard/testimonials') }}"
                            class="nav-link {{ activeChildNavBar('dashboard.testimonials') }}">
                            <i class="nav-icon fa fa-quote-left"></i>
                            <p>Testimonials</p>
                        </a>
                    </li>
                @endcan
                @can(config('constants.Permissions.services'))
                    <li class="nav-item">
                        <a href="{{ url('dashboard/services') }}"
                            class="nav-link {{ activeChildNavBar('dashboard.services') }}">
                            <i class="nav-icon fa fa-handshake"></i>
                            <p>Services</p>
                        </a>
                    </li>
                @endcan
                @can(config('constants.Permissions.career_management'))
                    <li class="nav-item">
                        <a href="{{ url('dashboard/careers') }}"
                            class="nav-link {{ activeChildNavBar('dashboard.careers') }}">
                            <i class="nav-icon fa fa-graduation-cap"></i>
                            <p>Career Management</p>
                        </a>
                    </li>
                @endcan
                @can(config('constants.Permissions.seo'))
                    <li class="nav-item {{ activeParentNavBar('SEO', 'menu-open') }}">
                        <a href="#" class="nav-link {{ activeParentNavBar('SEO', 'active') }}">
                            <i class="nav-icon fas fa-search-plus"></i>
                            <p>
                                SEO
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ url('dashboard/page-tags') }}"
                                    class="nav-link {{ activeChildNavBar('dashboard.page-tags') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Page Tags</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan
                @can(config('constants.Permissions.website_setting'))
                    <li class="nav-item {{ activeParentNavBar('websiteSettings', 'menu-open') }}">
                        <a href="#" class="nav-link {{ activeParentNavBar('websiteSettings', 'active') }}">
                            <i class="nav-icon fa fa-cogs"></i>
                            <p>
                                Website Settings
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ url('dashboard/social-info') }}"
                                    class="nav-link {{ activeChildNavBar('dashboard.social-info') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Social Info</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('dashboard/basic-info') }}"
                                    class="nav-link {{ activeChildNavBar('dashboard.basic-info') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Basic Info</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan
                @can(config('constants.Permissions.user_management'))
                    <li class="nav-item {{ activeParentNavBar('userManagement', 'menu-open') }}">
                        <a href="#" class="nav-link {{ activeParentNavBar('userManagement', 'active') }}">
                            <i class="nav-icon fa fa-users"></i>
                            <p>
                                User Management
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ url('dashboard/users') }}"
                                    class="nav-link  {{ activeChildNavBar('dashboard.users') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Users </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('dashboard/roles') }}"
                                    class="nav-link {{ activeChildNavBar('dashboard.roles') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Roles </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan
                <li class="nav-item">
                    <a href="{{ url('dashboard/profileSettings') }}"
                        class="nav-link {{ activeChildNavBar('dashboard.profileSettings') }}">
                        <i class="nav-icon fa fa-user-md"></i>
                        <p>Profile Setting</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <i class="nav-icon fa fa-times"></i>
                        <p>Logout</p>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
