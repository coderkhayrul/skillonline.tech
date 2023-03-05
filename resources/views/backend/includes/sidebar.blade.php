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
                <li class="{{ request()->is('admin/user*') ? 'mm-active' : '' }}">
                    <a href="{{ route('admin.user.index') }}" class="waves-effect">
                        <i class="bx bx-group"></i>
                        <span key="t-user">User</span>
                    </a>
                </li>
                <li class="{{ request()->is('admin/role*') ? 'mm-active' : '' }}">
                    <a href="{{ route('admin.role.index') }}" class="waves-effect">
                        <i class="bx bx-lock"></i>
                        <span key="t-role">Role</span>
                    </a>
                </li>

                <!-- SMART DEVICE MENU -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-devices"></i>
                        <span key="t-smart-device">Smart Device</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li class="{{ request()->is('admin/setting/socialmedia*') ? 'mm-active' : '' }}">
                            <a href="{{ route('admin.device.category.index') }}" class="waves-effect">
                                <span key="t-device-category">All Category</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="#" class="waves-effect">
                                <span key="t-all-device">All Device</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="#" class="waves-effect">
                                <span key="t-create-device">Create Device</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- TUTORIAL MENU -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-videos"></i>
                        <span key="t-tutorial">Tutorial</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li class="{{ request()->is('admin/setting/socialmedia*') ? 'mm-active' : '' }}">
                            <a href="#" class="waves-effect">
                                <span key="t-tutorial-category">All Category</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="#" class="waves-effect">
                                <span key="t-all-tutorial">All Tutorial</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="#" class="waves-effect">
                                <span key="t-create-tutorial">Create Tutorial</span>
                            </a>
                        </li>
                    </ul>
                </li>


                <!-- BOOKS MENU -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-book-content"></i>
                        <span key="t-books">Books</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li class="{{ request()->is('admin/setting/socialmedia*') ? 'mm-active' : '' }}">
                            <a href="#" class="waves-effect">
                                <span key="t-book-category">All Category</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="#" class="waves-effect">
                                <span key="t-all-book">All Books</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="#" class="waves-effect">
                                <span key="t-create-book">Create Books</span>
                            </a>
                        </li>
                    </ul>
                </li>


                <!-- NEWS MENU -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-news"></i>
                        <span key="t-news">News</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li class="{{ request()->is('admin/setting/socialmedia*') ? 'mm-active' : '' }}">
                            <a href="#" class="waves-effect">
                                <span key="t-news-category">All Category</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="#" class="waves-effect">
                                <span key="t-all-news">All Books</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="#" class="waves-effect">
                                <span key="t-create-news">Create news</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="{{ request()->is('admin/category*') ? 'mm-active' : '' }}">
                    <a href="{{ route('admin.category.index') }}" class="waves-effect">
                        <i class="bx bx-layer"></i>
                        <span key="t-category">Category</span>
                    </a>
                </li>
                <li class="{{ request()->is('admin/brand*') ? 'mm-active' : '' }}">
                    <a href="{{ route('admin.brand.index') }}" class="waves-effect">
                        <i class="bx bxl-squarespace "></i>
                        <span key="t-brand">Brand</span>
                    </a>
                </li>
                <li class="{{ request()->is('admin/tag*') ? 'mm-active' : '' }}">
                    <a href="{{ route('admin.tag.index') }}" class="waves-effect">
                        <i class="bx bxs-purchase-tag"></i>
                        <span key="t-tag">Tag</span>
                    </a>
                </li>
                <li class="{{ request()->is('admin/page*') ? 'mm-active' : '' }}">
                    <a href="{{ route('admin.page.index') }}" class="waves-effect">
                        <i class="bx bx-news"></i>
                        <span key="t-page">Page</span>
                    </a>
                </li>
                <li class="{{ request()->is('admin/banner*') ? 'mm-active' : '' }}">
                    <a href="{{ route('admin.banner.index') }}" class="waves-effect">
                        <i class="bx bx-chalkboard "></i>
                        <span key="t-banner">Banner</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-cog "></i>
                        <span key="t-setting">Setting</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li class="{{ request()->is('admin/setting/socialmedia*') ? 'mm-active' : '' }}">
                            <a href="{{ route('admin.setting.socialmedia.index') }}" class="waves-effect">
                                <span key="t-socialmedia">Social Media</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="{{ route('admin.setting.analytic.index') }}" class="waves-effect">
                                <span key="t-analytic">Analytic</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="{{ route('admin.setting.basicsetting.index') }}" class="waves-effect">
                                <span key="t-basic">Basic</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
