<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <!-- LOGO -->
    <a href="{{ route('superadmin.dashboard') }}" class="logo text-center logo-light">
        <span class="logo-lg">
            {{-- <img src="assets/images/logo.png" alt="" height="16"> --}}
            <h1 class="text-white">Traqworx</h1>
        </span>
        <span class="logo-sm">
            <h1 class="text-white">Traqworx</h1>
        </span>
    </a>

    <!-- LOGO -->
    <a href="{{ route('superadmin.dashboard') }}" class="logo text-center logo-dark">
        <span class="logo-lg">
            {{-- <img src="assets/images/logo-dark.png" alt="" height="16"> --}}
            <h1 class="text-primary">Traqworx</h1>
        </span>
        <span class="logo-sm">
            {{-- <img src="assets/images/logo_sm_dark.png" alt="" height="16"> --}}
            <h1 class="text-primary">Traqworx</h1>
        </span>
    </a>

    <div class="h-100" id="left-side-menu-container" data-simplebar>

        <!--- Sidemenu -->
        <ul class="metismenu side-nav">

            <li class="side-nav-item">
                <a href="{{ route('superadmin.dashboard') }}" class="side-nav-link">
                    <i class="uil-desktop"></i>
                    <span> Dashboard </span>
                </a>
            </li>


            <li class="side-nav-item">
                <a href="{{ route('superadmin.packages.index') }}" class="side-nav-link">
                    <i class="uil uil-moneybag"></i>
                    <span> Packages </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('superadmin.admins.index') }}" class="side-nav-link">
                    <i class="uil-building"></i>
                    <span> Admins </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="javascript: void(0);" class="side-nav-link">
                    <i class="uil-receipt-alt"></i>
                    <span> Invoices </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="javascript: void(0);" class="side-nav-link">
                    <i class="mdi mdi-head-question-outline"></i>
                    <span> Admin FAQ </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="javascript: void(0);" class="side-nav-link">
                    <i class="uil-users-alt"></i>
                    <span> Superadmins </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="apps-social-feed.html" class="side-nav-link">
                    <i class="uil-rss"></i>
                    <span>Offline Request </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="javascript: void(0);" class="side-nav-link">
                    <i class="uil-ticket"></i>
                    <span> Support Tickets </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="apps-file-manager.html" class="side-nav-link">
                    <i class="mdi mdi-tools"></i>
                    <span> Settings </span>
                </a>
            </li>

        </ul>

        <!-- Help Box -->
        <div class="help-box text-white text-center">
            <a  href="{{ route('superadmin.logout') }}" class="btn btn-outline-light btn-sm"
            onclick="event.preventDefault(); document.getElementById('sidebar-logout-form').submit();">Logout</a>
            <form id="sidebar-logout-form" action="{{ 'App\Models\Superadmin' == Auth::getProvider()->getModel() ? route('superadmin.logout') : route('superadmin.logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </div>
        <!-- end Help Box -->
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
