<?php

declare(strict_types=1);
loadPartials(path: 'header', loadFromPublic: false);
/**
 * @var $branches
 */
//dd($branches);
?>

<div class="page-wrapper toggled">
    <?php loadPartials(path: 'sidebar', loadFromPublic: false); ?>

    <main class="page-content bg-gray-50 dark:bg-slate-800">
        <!-- Top Header -->
        <?php loadPartials(path: 'top-header', loadFromPublic: false);?>
        <!-- Top Header -->

        <div class="container-fluid relative px-3">
            <div class="layout-specing">
                <!-- Start Content -->
                <div class="md:flex justify-between items-center">
                    <h5 class="text-lg font-semibold">Branches</h5>
                </div>
                <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6 mt-6">
                    <?php foreach ($branches as $branch): ?>
                        <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                            <div class="relative">
                                <?php if ($branch->image === 'default.png'): ?>
                                    <img src="/assets/images/ads/<?= $branch->image; ?>" alt="">
                                <?php else: ?>
                                    <img src="/assets/images/ads/<?= $branch->image; ?>" alt="">
                                <?php endif; ?>
                                <div class="absolute top-4 end-4">
                                    <a href="/update/branch/<?= $branch->id ?>"
                                       class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-black dark:text-white">
                                        <i class="mdi mdi-pencil text-[20px]"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="p-6">
                                <div class="pb-6">
                                    <a href="/branch/<?= $branch->id ?>"
                                       class="text-lg hover:text-green-600 font-medium ease-in-out duration-500"><?= $branch->name ?></a>
                                </div>

                                <ul class="pt-6 flex justify-between items-center list-none">
                                    <li>
                                        <span class="text-slate-400">Expired_ad</span>
                                        <p class="text-lg font-medium"><?= $branch->created_at ?></p>
                                    </li>
                                </ul>
                                <!--                                <ul class="py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">-->
                                <!--                                    <li class="flex items-center me-4">-->
                                <!--                                        <i class="uil uil-compress-arrows text-2xl me-2 text-green-600"></i>-->
                                <!--                                        <span>8000sqf</span>-->
                                <!--                                    </li>-->
                                <!---->
                                <!--                                    <li class="flex items-center me-4">-->
                                <!--                                        <i class="uil uil-bed-double text-2xl me-2 text-green-600"></i>-->
                                <!--                                        <span>4 Beds</span>-->
                                <!--                                    </li>-->
                                <!---->
                                <!--                                    <li class="flex items-center">-->
                                <!--                                        <i class="uil uil-bath text-2xl me-2 text-green-600"></i>-->
                                <!--                                        <span>4 Baths</span>-->
                                <!--                                    </li>-->
                                <!--                                </ul>-->

                                <ul class="pt-6 flex justify-between items-center list-none">
                                    <li>
                                        <span class="text-slate-400">Address</span>
                                        <p class="text-lg font-medium"><?= $branch->address ?></p>
                                    </li>
                                </ul>
                            </div>
                        </div><!--end property content-->

                    <?php endforeach; ?>
                </div>
            </div>
        </div><!--end container-->

        <!-- Footer Start -->
        <footer class="shadow dark:shadow-gray-700 bg-white dark:bg-slate-900 px-6 py-4">
            <div class="container-fluid">
                <div class="grid grid-cols-1">
                    <div class="sm:text-start text-center mx-md-2">
                        <p class="mb-0 text-slate-400">© <script>document.write(new Date().getFullYear())</script> Hously. Design with <i class="mdi mdi-heart text-red-600"></i> by <a href="https://shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.</p>
                    </div><!--end col-->
                </div><!--end grid-->
            </div><!--end container-->
        </footer><!--end footer-->
        <!-- End -->
    </main>
</div>

<!-- Switcher -->
<div class="fixed top-[30%] -end-2 z-50">
            <span class="relative inline-block rotate-90">
                <input type="checkbox" class="checkbox opacity-0 absolute" id="chk" />
                <label class="label bg-slate-900 dark:bg-white shadow dark:shadow-gray-700 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8" for="chk">
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
        <span class="py-1 px-3 relative inline-block rounded-b-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-700 font-bold rtl:block ltr:hidden" >LTR</span>
        <span class="py-1 px-3 relative inline-block rounded-t-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-700 font-bold ltr:block rtl:hidden">RTL</span>
    </a>
</div>
<!-- LTR & RTL Mode Code -->

<!-- JAVASCRIPTS -->
<script src="/dashboard/assets/libs/jsvectormap/jsvectormap.min.js"></script>
<script src="/dashboard/assets/libs/jsvectormap/maps/world.js"></script>
<script src="/dashboard/assets/js/jsvectormap.init.js"></script>
<script src="/dashboard/assets/libs/apexcharts/apexcharts.min.js"></script>
<script src="/dashboard/assets/libs/feather-icons/feather.min.js"></script>
<script src="/dashboard/assets/libs/simplebar/simplebar.min.js"></script>
<script src="/dashboard/assets/js/plugins.init.js"></script>
<script src="/dashboard/assets/js/app.js"></script>
<!-- JAVASCRIPTS -->
</body>