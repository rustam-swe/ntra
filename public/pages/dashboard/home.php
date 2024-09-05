<?php

declare(strict_types=1);
loadPartials(path: 'header', loadFromPublic: false);
?>

<body class="font-body text-base text-black dark:text-white dark:bg-slate-900">
<!-- Loader Start -->
<!-- <div id="preloader">
    <div id="status">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
</div> -->
<!-- Loader End -->


<div class="page-wrapper toggled">
    <?php loadPartials('sidebar', loadFromPublic: false);?>

    <!-- Start Page Content -->
    <main class="page-content bg-gray-50 dark:bg-slate-800">
        <!-- Top Header -->
        <?php loadPartials('top-header', loadFromPublic: false);?>
        <!-- Top Header -->

        <div class="container-fluid relative px-3">
            <div class="layout-specing">
                <!-- Start Content -->
                <div class="flex justify-between items-center">
                    <div>
                        <h5 class="text-xl font-semibold">Assalomu alaykum, <?= (new \App\Session())->getName()?></h5>
                        <h6 class="text-slate-400">Xush kelibsiz!</h6>
                    </div>
                </div>
                    <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px]">

                        <?php
                        /**
                         * @var $ads
                         */
                        foreach ($ads as $ad):?>
                            <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                                <div class="relative">
                                    <img src="../assets/images/ads/<?= $ad->image?>" alt="">

                                    <div class="absolute top-4 end-4">
                                        <a href="javascript:void(0)"
                                           class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i
                                                    class="mdi mdi-heart text-[20px]"></i></a>
                                    </div>
                                </div>

                                <div class="p-6">
                                    <div class="pb-6">
                                        <a href="/ads/<?= $ad->id ?>"
                                           class="text-lg hover:text-green-600 font-medium ease-in-out duration-500"><?= $ad->title; ?></a>
                                    </div>

                                    <ul class="py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
                                        <li class="flex items-center me-4">
                                            <i class="uil uil-compress-arrows text-2xl me-2 text-green-600"></i>
                                            <span>8000sqf</span>
                                        </li>

                                        <li class="flex items-center me-4">
                                            <i class="uil uil-bed-double text-2xl me-2 text-green-600"></i>
                                            <span>4 Beds</span>
                                        </li>

                                        <li class="flex items-center">
                                            <i class="uil uil-bath text-2xl me-2 text-green-600"></i>
                                            <span>4 Baths</span>
                                        </li>
                                    </ul>

                                    <ul class="pt-6 flex justify-between items-center list-none">
                                        <li>
                                            <span class="text-slate-400">Price</span>
                                            <p class="text-lg font-medium">$ <?= $ad->price ?></p>
                                        </li>

                                    </ul>
                                </div>
                            </div><!--end property content-->
                        <?php
                        endforeach; ?>
                    </div><!--en grid-->

                <!-- End Content -->
            </div>
        </div><!--end container-->

        <!-- Footer Start -->
        <footer class="shadow dark:shadow-gray-700 bg-white dark:bg-slate-900 px-6 py-4">
            <div class="container-fluid">
                <div class="grid grid-cols-1">
                    <div class="sm:text-start text-center mx-md-2">
                        <p class="mb-0 text-slate-400">©
                            <script>document.write(new Date().getFullYear())</script>
                            Hously. Design with <i class="mdi mdi-heart text-red-600"></i> by <a
                                    href="https://shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.
                        </p>
                    </div><!--end col-->
                </div><!--end grid-->
            </div><!--end container-->
        </footer><!--end footer-->
        <!-- End -->
    </main>
    <!--End page-content" -->
</div>
<!-- page-wrapper -->

<!-- Switcher -->
<div class="fixed top-[30%] -end-2 z-50">
            <span class="relative inline-block rotate-90">
                <input type="checkbox" class="checkbox opacity-0 absolute" id="chk"/>
                <label class="label bg-slate-900 dark:bg-white shadow dark:shadow-gray-700 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8"
                       for="chk">
                    <i data-feather="moon" class="size-[18px] text-yellow-500"></i>
                    <i data-feather="sun" class="size-[18px] text-yellow-500"></i>
                    <span class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] left-[2px] size-7"></span>
                </label>
            </span>
</div>
<!-- Switcher -->

<!-- LTR & RTL Mode Code -->
<div class="fixed top-[40%] -end-3 z-50">
    <a href="" id="switchRtl">
        <span class="py-1 px-3 relative inline-block rounded-b-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-700 font-bold rtl:block ltr:hidden">LTR</span>
        <span class="py-1 px-3 relative inline-block rounded-t-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-700 font-bold ltr:block rtl:hidden">RTL</span>
    </a>
</div>
<!-- LTR & RTL Mode Code -->

<?php
loadPartials(path: 'footer', loadFromPublic: false);
?>