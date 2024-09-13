<nav id="topnav" class="defaultscroll is-sticky">
    <div class="container relative">
        <!-- Start Logo container-->
        <a class="logo" href="index.html">
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
            <li class="inline mb-0">
                <?php
                $url = "";
                if(!$_SESSION['user']){
                    $url = "/login";
                }elseif($_SESSION['user']['role'] === 1){
                    $url = "/admin";
                }elseif($_SESSION['user']['role'] === 2){
                    $url = "/user";
                } ?>
                <a href="<?= $url ?>"
                   class="btn btn-icon bg-green-600 hover:bg-green-700 border-green-600 dark:border-green-600 text-white rounded-full"><i
                            data-feather="user" class="size-4 stroke-[3]"></i></a>
            </li>
            <?php if(!$_SESSION['user']): ?>
            <li class="sm:inline ps-1 mb-0 hidden">
                <a href="/register"
                   class="btn bg-green-600 hover:bg-green-700 border-green-600 dark:border-green-600 text-white rounded-full">Signup</a>
            </li>
            <?php endif; ?>
            <?php if($_SESSION['user']): ?>
                <li class="sm:inline ps-1 mb-0 hidden">
                    <a href="/logout"
                       class="btn bg-red-600 hover:bg-red-700 border-red-600 dark:border-red-600 text-white hover:text-white rounded-full">
                        Logout
                    </a>
                </li>
            <?php endif; ?>
        </ul>
        <!--Login button End-->

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu justify-end nav-light">
                <li class="">
                    <a href="/">E'lonlar</a><span class="menu-arrow"></span>
                </li>
                <li><a href="/branches" class="sub-menu-item">Filiallar</a></li>

                <li><a href="/about" class="sub-menu-item">About</a></li>

                <li><a href="contact.html" class="sub-menu-item">Contact</a></li>
            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div><!--end container-->
</nav><!--end header-->