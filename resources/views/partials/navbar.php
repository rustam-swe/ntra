<nav id="topnav" class="defaultscroll is-sticky">
    <div class="container relative">
        <!-- Start Logo container-->
        <a class="logo" href="/">
                    <span class="inline-block dark:hidden">
                        <img src="assets/images/logo-dark.png" class="l-dark" height="24" alt="">
                        <img src="assets/images/logo-light.png" class="l-light" height="24" alt="">
                    </span>
            <img src="assets/images/logo-light.png" height="24" class="hidden dark:inline-block" alt="">
        </a>
        <!-- End Logo container-->

        <!-- Start Mobile Toggle -->
        <div class="menu-extras">
            <div class="menu-item">
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
            </div>
        </div>
        <!-- End Mobile Toggle -->

        <!--Login button Start-->
        <ul class="buy-button list-none mb-0">
            <?php if ((new \App\Session())->getUser()): ?>
                <li class="sm:inline ps-1 mb-0 hidden">
                    <a href="/ads/create" class="btn bg-green-600 hover:bg-green-700 border-green-600 dark:border-green-600 text-white rounded-full">Create Ad</a>
                </li>

                <li class="inline mb-0">
                    <a href="<?= (new \App\Session())->getRoleId() === \App\Role::ADMIN ? '/admin' : '/profile' ?>" class="btn btn-icon bg-green-600 hover:bg-green-700 border-green-600 dark:border-green-600 text-white rounded-full"><i data-feather="user" class="size-4 stroke-[3]"></i></a>
                </li>
            <?php else: ?>
                <li class="sm:inline ps-1 mb-0 hidden">
                    <a href="/login" class="btn bg-green-600 hover:bg-green-700 border-green-600 dark:border-green-600 text-white rounded-full">Login</a>
                </li>
                <li class="sm:inline ps-1 mb-0 hidden">
                    <a href="/register" class="btn bg-green-600 hover:bg-green-700 border-green-600 dark:border-green-600 text-white rounded-full">Register</a>
                </li>
            <?php endif; ?>
        </ul>
        <!--Login button End-->

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu justify-end">
                <li><a href="/" class="sub-menu-item">Home</a></li>

                <li><a href="/branches" class="sub-menu-item">Branches</a></li>

                <li><a href="/about" class="sub-menu-item">About Us</a></li>

            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div><!--end container-->
</nav><!--end header-->