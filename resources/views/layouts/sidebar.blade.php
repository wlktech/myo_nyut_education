        <!-- Sidebar -->
        <ul class="navbar-nav sidebar-bg sidebar sidebar-dark accordion shadow" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand text-center mb-4" href="{{ url('/') }}" style="height: 140px; padding-top:24px;">
                <img src="{{ asset('assets/img/logo.png') }}" width="72px" class="mb-2 rounded" alt="">
                <div class="sidebar-brand-text mx-2">
                    <p class="logo-name pb-0 mb-0">
                        <small>မျိုးညွန့်</small>
                        <small>(Private High School)</small>
                    </p>
                </div>
            </a>

            <!-- Divider -->
            {{-- <hr class="sidebar-divider my-0"> --}}

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    {{-- <img class="mr-1" src="{{ asset('assets/img/Icons/Dashboard.svg') }}" width="18px" alt=""> --}}
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-users"></i>
                    <span>User Management</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">User Components:</h6>
                        <a class="collapse-item" href="{{ route('users.index') }}">
                            <i class="fas fa-users mr-2"></i>
                            Admins
                        </a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse3"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Post Management</span>
                </a>
                <div id="collapse3" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Post Components:</h6>
                        <a class="collapse-item" href="{{ route('banners.index') }}">
                            <i class="fas fa-image mr-2"></i>
                            Banners
                        </a>
                        <a class="collapse-item" href="{{ route('posts.index') }}">
                            <i class="fas fa-blog mr-2"></i>
                            News & Events
                        </a>
                        <a class="collapse-item" href="{{ route('reviews.index') }}">
                            <i class="fas fa-comment mr-2"></i>
                            Reviews
                        </a>
                        <a class="collapse-item" href="{{ route('students.index') }}">
                            <i class="fas fa-user-graduate mr-2"></i>
                            <small>ထူးချွန်ကျောင်းသားများ</small>
                        </a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Account Setting
            </div>
            <!-- Nav Item - Charts -->
            {{-- <li class="nav-item">
                <a class="nav-link" href="{{ url('/profile/') }}">
                    <i class="fas fa-fw fa-user text-white"></i>
                    <span>Profile</span></a>
            </li> --}}

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <form method="POST" class="d-inline" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="nav-link btn" style="font-size: 14px;">
                        <i class="fas fa-right-from-bracket mr-2"></i>
                        {{-- <img class="mr-1" src="{{ asset('assets/img/Icons/logout.png') }}" width="21px" alt=""> --}}
                        <span>Logout</span>
                    </button>
                </form>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            {{-- <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="{{ asset('assets/backend/img/undraw_rocket.svg') }}" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div> --}}

        </ul>
        <!-- End of Sidebar -->
