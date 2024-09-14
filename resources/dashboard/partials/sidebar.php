<nav id="sidebar" class="sidebar-wrapper sidebar-dark">
    <div class="sidebar-content">
        <div class="sidebar-brand">
            <a href="/"><img src="/dashboard/assets/images/logo-light.png" alt=""></a>
        </div>

        <ul class="sidebar-menu border-t border-white/10" data-simplebar style="height: calc(100% - 70px);">

            <?php if ((new \App\Session())->getRoleId() === \App\Role::ADMIN) : ?>

                <li>
                    <a href="/admin"><i class="mdi mdi-chart-bell-curve-cumulative me-2"></i>Dashboard</a>
                </li>

                <li>
                    <a href="/admin/ads"><i class="mdi mdi-home-city me-2"></i>Explore Ads</a>
                </li>

                <li class="sidebar-dropdown">
                    <a href="javascript:void(0)"><i class="mdi mdi-home-group me-2"></i>Explore Branches</a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li><a href="/admin/branches">Branches</a></li>
                            <li><a href="/admin/branch/create">Create Branch</a></li>
                        </ul>
                    </div>
                </li>

                <li class="sidebar-dropdown">
                    <a href="javascript:void(0)"><i class="mdi mdi-account-group me-2"></i>Explore Users</a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li><a href="/admin/users">Users</a></li>
                            <li><a href="/admin/users/create">Create User</a></li>
                        </ul>
                    </div>
                </li>

            <?php endif; ?>

            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="mdi mdi-account-edit me-2"></i>User Profile</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="/profile">Profile</a></li>
                    </ul>
                </div>
            </li>

            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="mdi mdi-home-plus me-2"></i>Add Properties</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="/ads/create">Create Ad</a></li>
                    </ul>
                </div>
            </li>

            <li>
                <a href="/logout"><i class="mdi mdi-logout me-2"></i>Logout</a>
            </li>
        </ul>
    </div>
</nav>