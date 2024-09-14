<nav id="sidebar" class="sidebar-wrapper sidebar-dark">
    <div class="sidebar-content">
        <div class="sidebar-brand">
            <a href="/admin"><img src="/dashboard/assets/images/logo-light.png" alt=""></a>
        </div>

        <ul class="sidebar-menu border-t border-white/10" data-simplebar style="height: calc(100% - 70px);">
            <?php
            if ((new App\Session())->getRoleId() === 1): ?>
            <li>
                <a href="/admin"><i class="mdi mdi-chart-bell-curve-cumulative me-2"></i>Dashboard</a>
            </li>
            <?php endif; ?>

            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="mdi mdi-account-edit me-2"></i> E'lonlar</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="/ads/create"><i class="mdi mdi-home-plus me-2"></i>E'lon qo'shish</a></li>
                        <li><a href="/admin/ads"><i class="mdi mdi-home-city me-2"></i>E'lonlar</a></li>
                    </ul>
                </div>
            </li>

            <li>
                <a href="/branches"><i class="mdi mdi-home-heart me-2"></i>Filiallar</a>
            </li>
            <li><a href="/"><i class="mdi mdi-home-city me-2"></i>Bosh Sahifa</a></li>

            <li class="sidebar">
                <a href="/profile"><i class="mdi mdi-account-edit me-2"></i>Profile </a>
            </li>




            <li class="sidebar-dropdown">

                <?php
//                dd($_SESSION['user']);
                if ((new App\Session())->getRoleId() === 1): ?>
                <a href="javascript:void(0)"><i class="mdi mdi-account-edit me-2"></i>Foydalanuvchilar</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="/admin/users/create"><i class="mdi mdi-home-plus me-2"></i>Foydalanuvchi
                                qo'shish</a></li>
                        <li><a href="/admin/users"><i class="mdi mdi-home-city me-2"></i>Foydalanuvchilar</a></li>
                    </ul>
                </div>
                <?php endif; ?>
            </li>
        </ul>
    </div>
</nav>