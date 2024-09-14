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
                echo (new \App\Session())->getName();


                $url = (new \App\Session())->getName() ? '/profile' : '/login';?>

                <a href="<?= $url ?>"
                   class="btn btn-icon bg-green-600 hover:bg-green-700 border-green-600 dark:border-green-600 text-white rounded-full"><i
                            data-feather="user" class="size-4 stroke-[3]"></i></a>
            </li>
            <?php

            $url = (new \App\Session())->getName();
//            dd($_SESSION['user']);
            if (!isset($url)):
            ?>
            <li class="sm:inline ps-1 mb-0 hidden">
                <a href="/register"
                   class="btn bg-green-600 hover:bg-green-700 border-green-600 dark:border-green-600 text-white rounded-full">Signup</a>
            </li>
            <?php endif;
            $name = (new \App\Session())->getName();
            if (isset($_SESSION['user']['username'])):
            ?>
                <li class="sm:inline ps-1 mb-0 hidden">
                    <a href="/logout"
                       class="btn bg-red-600 hover:bg-red-700 border-red-600 dark:border-red-600 text-white rounded-full">Logout</a>
                </li>
            <?php endif;
            ?>


        </ul>
        <!--Login button End-->

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu justify-end nav-light">
                <li class="has-submenu parent-parent-menu-item">
                    <a href="/">E'lonlar</a><span class="menu-arrow"></span>

                    <ul class="submenu megamenu">
                        <li>
                            <ul>
                                <li>
                                    <a href="index.html" class="sub-menu-item">
                                        <div class="lg:text-center">
                                            <span class="none lg:block"><img src="assets/images/demos/hero-one.png"
                                                                             class="img-fluid rounded shadow-md" alt=""></span>
                                            <span class="lg:mt-2 block">Hero One</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="index-two.html" class="sub-menu-item">
                                        <div class="lg:text-center">
                                            <span class="none lg:block"><img src="assets/images/demos/hero-two.png"
                                                                             class="img-fluid rounded shadow-md" alt=""></span>
                                            <span class="lg:mt-2 block">Hero Two</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <ul>
                                <li>
                                    <a href="index-three.html" class="sub-menu-item">
                                        <div class="lg:text-center">
                                            <span class="none lg:block"><img src="assets/images/demos/hero-three.png"
                                                                             class="img-fluid rounded shadow-md" alt=""></span>
                                            <span class="lg:mt-2 block">Hero Three</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="index-four.html" class="sub-menu-item">
                                        <div class="lg:text-center">
                                            <span class="none lg:block"><img src="assets/images/demos/hero-four.png"
                                                                             class="img-fluid rounded shadow-md" alt=""></span>
                                            <span class="lg:mt-2 block">Hero Four</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <ul>
                                <li>
                                    <a href="index-five.html" class="sub-menu-item">
                                        <div class="lg:text-center">
                                            <span class="none lg:block"><img src="assets/images/demos/hero-five.png"
                                                                             class="img-fluid rounded shadow-md" alt=""></span>
                                            <span class="lg:mt-2 block">Hero Five</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="index-six.html" class="sub-menu-item">
                                        <div class="lg:text-center">
                                            <span class="none lg:block"><img src="assets/images/demos/hero-six.png"
                                                                             class="img-fluid rounded shadow-md" alt=""></span>
                                            <span class="lg:mt-2 block">Hero Six</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <ul>
                                <li>
                                    <a href="index-seven.html" class="sub-menu-item">
                                        <div class="lg:text-center">
                                            <span class="none lg:block"><img src="assets/images/demos/hero-seven.png"
                                                                             class="img-fluid rounded shadow-md" alt=""></span>
                                            <span class="lg:mt-2 block">Hero Seven</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="index-eight.html" class="sub-menu-item">
                                        <div class="lg:text-center">
                                            <span class="none lg:block"><img src="assets/images/demos/hero-eight.png"
                                                                             class="img-fluid rounded shadow-md" alt=""></span>
                                            <span class="lg:mt-2 block">Hero Eight</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <ul>
                                <li>
                                    <a href="index-nine.html" class="sub-menu-item">
                                        <div class="lg:text-center">
                                            <span class="none lg:block"><img src="assets/images/demos/hero-nine.png"
                                                                             class="img-fluid rounded shadow-md" alt=""></span>
                                            <span class="lg:mt-2 block">Hero Nine <span
                                                        class="bg-yellow-500 inline-block text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">New</span></span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li><a href="/branches" class="sub-menu-item">Branchlar</a></li>

                <li><a href="/ads/create" class="sub-menu-item">E'lon qo'shish</a></li>
            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div><!--end container-->
</nav><!--end header-->