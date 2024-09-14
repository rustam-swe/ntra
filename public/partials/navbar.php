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
                $url = (new \App\Session())->getName() ? '/admin' : '/login'; ?>
                <a href="<?= $url ?>"
                   class="btn btn-icon bg-green-600 hover:bg-green-700 border-green-600 dark:border-green-600 text-white rounded-full"><i
                            data-feather="user" class="size-4 stroke-[3]"></i></a>
            </li>
            <li class="sm:inline ps-1 mb-0 hidden">
            <?php
                $url = (new \App\Session())->getName() ? '/logout' : '/login'; 
                $text = (new \App\Session())->getName() ? 'logout' : 'login'; ?>
                
                <a href="<?= $url ?>"    
                   class="btn bg-green-600 hover:bg-green-700 border-green-600 dark:border-green-600 text-white rounded-full"><?= $text?></a>
            </li>
        </ul>
        <!--Login button End-->

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu justify-end nav-light">
                <li >
                    <a href="/">Home</a><span class="menu-arrow"></span>














                <li><a href="/branch" class="sub-menu-item">Branch</a></li>

                <li><a href="/about" class="sub-menu-item">About</a></li>













            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div><!--end container-->
</nav><!--end header-->