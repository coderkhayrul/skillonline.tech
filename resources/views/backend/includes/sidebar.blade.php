<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>
                <li>
                    <a href="{{ route('admin.dashboard') }}" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboard">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.category.index') }}" class="waves-effect">
                        <i class="bx bx-layer"></i>
                        <span key="t-category">Category</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.brand.index') }}" class="waves-effect">
                        <i class="bx bxs-purchase-tag  "></i>
                        <span key="t-category">Brand</span>
                    </a>
                </li>







                {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboards">Dashboards</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="index.html" key="t-default">Default</a></li>
                        <li><a href="dashboard-saas.html" key="t-saas">Saas</a></li>
                        <li><a href="dashboard-crypto.html" key="t-crypto">Crypto</a></li>
                        <li><a href="dashboard-blog.html" key="t-blog">Blog</a></li>
                        <li><a href="dashboard-job.html"><span class="badge rounded-pill text-bg-success float-end"
                                    key="t-new">New</span> <span key="t-jobs">Jobs</span></a></li>
                    </ul>
                </li> --}}

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
