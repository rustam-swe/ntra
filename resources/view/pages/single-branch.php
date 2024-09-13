<?php

declare(strict_types=1);

loadPartials(path: 'header', loadFromPublic: false);

/**
 * @var $branch // Comes from controller
 */
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
            <!-- sidebar-wrapper -->
            <?php loadPartials(path: 'navbar', loadFromPublic: false); ?>
            <!-- sidebar-wrapper  -->

            <!-- Start Page Content -->
            <main class="page-content bg-gray-50 dark:bg-slate-800">
                <!-- Top Header -->
                <div class="top-header">
                    <div class="header-bar flex justify-between">
                        <div class="flex items-center space-x-1">
                            <!-- Logo -->
                            <a href="#" class="xl:hidden block me-2">
                                <img src="/dashboard/assets/images/logo-icon-32.png" class="md:hidden block" alt="">
                                <span class="md:block hidden">
                                    <img src="/dashboard/assets/images/logo-dark.png" class="inline-block dark:hidden" alt="">
                                    <img src="/dashboard/assets/images/logo-light.png" class="hidden dark:inline-block" alt="">
                                </span>
                            </a>
                            <!-- Logo -->

                            <!-- show or close sidebar -->
                            <a id="close-sidebar" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[20px] text-center bg-gray-50 dark:bg-slate-800 hover:bg-gray-100 dark:hover:bg-slate-700 border border-gray-100 dark:border-gray-800 text-slate-900 dark:text-white rounded-md" href="javascript:void(0)">
                                <i data-feather="menu" class="size-4"></i>
                            </a>
                            <!-- show or close sidebar -->

                            <!-- Searchbar -->
                            <div class="ps-1.5">
                                <div class="form-icon relative sm:block hidden">
                                    <i class="mdi mdi-magnify absolute top-1/2 -translate-y-1/2 mt-[1px] start-3"></i>
                                    <input type="text" class="form-input w-56 ps-9 py-2 px-3 h-8 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded-md outline-none border border-gray-100 dark:border-gray-800 focus:ring-0 bg-white" name="s" id="searchItem" placeholder="Search...">
                                </div>
                            </div>
                            <!-- Searchbar -->
                        </div>

                        <ul class="list-none mb-0 space-x-1">
                            <!-- Country Dropdown -->
                            <li class="dropdown inline-block relative">
                                <button data-dropdown-toggle="dropdown" class="dropdown-toggle size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[20px] text-center bg-gray-50 dark:bg-slate-800 hover:bg-gray-100 dark:hover:bg-slate-700 border border-gray-100 dark:border-gray-800 text-slate-900 dark:text-white rounded-md" type="button">
                                    <img src="/dashboard/assets/images/flags/usa.png" class="size-6 rounded-md" alt="">
                                </button>
                                <!-- Dropdown menu -->
                                <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-36 rounded-md overflow-hidden bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 hidden" onclick="event.stopPropagation();">
                                    <ul class="list-none py-2 text-start">
                                        <li class="my-1">
                                            <a href="" class="flex items-center text-[15px] font-medium py-1.5 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white"><img src="/dashboard/assets/images/flags/germany.png" class="size-6 rounded-md me-2 shadow dark:shadow-gray-700" alt=""> German</a>
                                        </li>
                                        <li class="my-1">
                                            <a href="" class="flex items-center text-[15px] font-medium py-1.5 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white"><img src="/dashboard/assets/images/flags/italy.png" class="size-6 rounded-md me-2 shadow dark:shadow-gray-700" alt=""> Italian</a>
                                        </li>
                                        <li class="my-1">
                                            <a href="" class="flex items-center text-[15px] font-medium py-1.5 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white"><img src="/dashboard/assets/images/flags/russia.png" class="size-6 rounded-md me-2 shadow dark:shadow-gray-700" alt=""> Russian</a>
                                        </li>
                                        <li class="my-1">
                                            <a href="" class="flex items-center text-[15px] font-medium py-1.5 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white"><img src="/dashboard/assets/images/flags/spain.png" class="size-6 rounded-md me-2 shadow dark:shadow-gray-700" alt=""> Spanish</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- Country Dropdown -->

                            <!-- Notification Dropdown -->
                            <li class="dropdown inline-block relative">
                                <button data-dropdown-toggle="dropdown" class="dropdown-toggle size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[20px] text-center bg-gray-50 dark:bg-slate-800 hover:bg-gray-100 dark:hover:bg-slate-700 border border-gray-100 dark:border-gray-800 text-slate-900 dark:text-white rounded-md" type="button">
                                    <i data-feather="bell" class="size-4"></i>
                                    <span class="absolute top-0 end-0 flex items-center justify-center bg-red-600 text-white text-[10px] font-bold rounded-md size-2 after:content-[''] after:absolute after:h-2 after:w-2 after:bg-red-600 after:top-0 after:end-0 after:rounded-md after:animate-ping"></span>
                                </button>
                                <!-- Dropdown menu -->
                                <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-64 rounded-md overflow-hidden bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 hidden" onclick="event.stopPropagation();">
                                    <span class="px-4 py-4 flex justify-between">
                                        <span class="font-semibold">Notifications</span>
                                        <span class="flex items-center justify-center bg-red-600/20 text-red-600 text-[10px] font-bold rounded-md w-5 max-h-5 ms-1">3</span>
                                    </span>
                                    <ul class="py-2 text-start h-64 border-t border-gray-100 dark:border-gray-800" data-simplebar>
                                        <li>
                                            <a href="#!" class="block font-medium py-1.5 px-4">
                                                <div class="flex items-center">
                                                    <div class="size-10 rounded-md shadow shadow-green-600/10 dark:shadow-gray-700 bg-green-600/10 dark:bg-slate-800 text-green-600 dark:text-white flex items-center justify-center">
                                                        <i data-feather="shopping-cart" class="size-4"></i>
                                                    </div>
                                                    <div class="ms-2">
                                                        <span class="text-[15px] font-medium block">Order Complete</span>
                                                        <small class="text-slate-400">15 min ago</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!" class="block font-medium py-1.5 px-4">
                                                <div class="flex items-center">
                                                    <img src="/dashboard/assets/images/client/04.jpg" class="size-10 rounded-md shadow dark:shadow-gray-700" alt="">
                                                    <div class="ms-2">
                                                        <span class="text-[15px] font-medium block"><span class="font-semibold">Message</span> from Luis</span>
                                                        <small class="text-slate-400">1 hour ago</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!" class="block font-medium py-1.5 px-4">
                                                <div class="flex items-center">
                                                    <div class="size-10 rounded-md shadow shadow-green-600/10 dark:shadow-gray-700 bg-green-600/10 dark:bg-slate-800 text-green-600 dark:text-white flex items-center justify-center">
                                                        <i data-feather="dollar-sign" class="size-4"></i>
                                                    </div>
                                                    <div class="ms-2">
                                                        <span class="text-[15px] font-medium block"><span class="font-semibold">One Refund Request</span></span>
                                                        <small class="text-slate-400">2 hour ago</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!" class="block font-medium py-1.5 px-4">
                                                <div class="flex items-center">
                                                    <div class="size-10 rounded-md shadow shadow-green-600/10 dark:shadow-gray-700 bg-green-600/10 dark:bg-slate-800 text-green-600 dark:text-white flex items-center justify-center">
                                                        <i data-feather="truck" class="size-4"></i>
                                                    </div>
                                                    <div class="ms-2">
                                                        <span class="text-[15px] font-medium block">Deliverd your Order</span>
                                                        <small class="text-slate-400">Yesterday</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!" class="block font-medium py-1.5 px-4">
                                                <div class="flex items-center">
                                                    <img src="/dashboard/assets/images/client/05.jpg" class="size-10 rounded-md shadow dark:shadow-gray-700" alt="">
                                                    <div class="ms-2">
                                                        <span class="text-[15px] font-medium block"><span class="font-semibold">Cally</span> started following you</span>
                                                        <small class="text-slate-400">2 days ago</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li><!--end dropdown-->
                            <!-- Notification Dropdown -->

                            <!-- User/Profile Dropdown -->
                            <li class="dropdown inline-block relative">
                                <button data-dropdown-toggle="dropdown" class="dropdown-toggle items-center" type="button">
                                    <span class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[20px] text-center bg-gray-50 dark:bg-slate-800 hover:bg-gray-100 dark:hover:bg-slate-700 border border-gray-100 dark:border-gray-800 text-slate-900 dark:text-white rounded-md"><img src="/dashboard/assets/images/client/07.jpg" class="rounded-md" alt=""></span>
                                </button>
                                <!-- Dropdown menu -->
                                <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-44 rounded-md overflow-hidden bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 hidden" onclick="event.stopPropagation();">
                                    <ul class="py-2 text-start">
                                        <li>
                                            <a href="/" class="block py-1 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white"><i class="mdi mdi-home-outline me-2"></i>Home</a>
                                        </li>
                                        <li>
                                            <a href="/profile" class="block py-1 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white"><i class="mdi mdi-account-outline me-2"></i>Profile</a>
                                        </li>
                                        <li>
                                            <a href="chat.html" class="block py-1 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white"><i class="mdi mdi-chat-outline me-2"></i>Chat</a>
                                        </li>
                                        <li>
                                            <a href="profile-setting.html" class="block py-1 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white"><i class="mdi mdi-cog-outline me-2"></i>Settings</a>
                                        </li>
                                        <li class="border-t border-gray-100 dark:border-gray-800 my-2"></li>
                                        <li>
                                            <a href="lock-screen.html" class="block py-1 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white"><i class="mdi mdi-lock-outline me-2"></i>Lockscreen</a>
                                        </li>
                                        <li>
                                            <a href="login.html" class="block py-1 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white"><i class="mdi mdi-logout me-2"></i>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </li><!--end dropdown-->
                            <!-- User/Profile Dropdown -->
                        </ul>
                    </div>
                </div>
                <!-- Top Header -->

                <div class="container-fluid relative px-3">
                    <div class="layout-specing">
                        <!-- Start Content -->
                        <div class="md:flex justify-between items-center">
                            <h5 class="text-lg font-semibold">Starter Page</h5>

                            <ul class="tracking-[0.5px] inline-block sm:mt-0 mt-3">
                                <li class="inline-block capitalize text-[16px] font-medium duration-500 dark:text-white/70 hover:text-green-600 dark:hover:text-white"><a href="index.html">Hously</a></li>
                                <li class="inline-block text-base text-slate-950 dark:text-white/70 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="mdi mdi-chevron-right"></i></li>
                                <li class="inline-block capitalize text-[16px] font-medium text-green-600 dark:text-white" aria-current="page">Starter Page</li>
                            </ul>
                        </div>

                        <div class="md:flex mt-4">
                            <div class="lg:w-1/2 md:w-1/2 p-1">
                                <div class="group relative overflow-hidden rounded-md shadow dark:shadow-gray-700">
                                    <?php if ($branch->branch_image === 'default.png'): ?>
                                        <img src="/assets/images/ads/default/<?= $branch->branch_image; ?>" alt="">
                                    <div class="absolute inset-0 group-hover:bg-slate-900/70 duration-500 ease-in-out"></div>
                                    <div class="absolute top-1/2 -translate-y-1/2 start-0 end-0 text-center invisible group-hover:visible">
                                        <a href="/assets/images/ads/default/<?= $branch->branch_image; ?>" class="btn btn-icon bg-green-600 hover:bg-green-700 text-white rounded-full lightbox"><i class="mdi mdi-camera-outline"></i></a>
                                    </div>
                                    <?php else: ?>
                                        <img src="/assets/images/ads/branches/<?= $branch->branch_image; ?>" alt="">
                                        <div class="absolute inset-0 group-hover:bg-slate-900/70 duration-500 ease-in-out"></div>
                                        <div class="absolute top-1/2 -translate-y-1/2 start-0 end-0 text-center invisible group-hover:visible">
                                            <a href="/assets/images/ads/branches/<?= $branch->branch_image; ?>" class="btn btn-icon bg-green-600 hover:bg-green-700 text-white rounded-full lightbox"><i class="mdi mdi-camera-outline"></i></a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="lg:w-1/2 md:w-1/2">
                                <div class="flex">
                                    <div class="w-1/2 p-1">
                                        <div class="group relative overflow-hidden rounded-md shadow dark:shadow-gray-700">
                                            <?php if ($branch->branch_image === 'default.png'): ?>
                                                <img src="/assets/images/ads/default/<?= $branch->branch_image; ?>" alt="">
                                                <div class="absolute inset-0 group-hover:bg-slate-900/70 duration-500 ease-in-out"></div>
                                                <div class="absolute top-1/2 -translate-y-1/2 start-0 end-0 text-center invisible group-hover:visible">
                                                    <a href="/assets/images/ads/default/<?= $branch->branch_image; ?>" class="btn btn-icon bg-green-600 hover:bg-green-700 text-white rounded-full lightbox"><i class="mdi mdi-camera-outline"></i></a>
                                                </div>
                                            <?php else: ?>
                                                <img src="/assets/images/ads/branches/<?= $branch->branch_image; ?>" alt="">
                                                <div class="absolute inset-0 group-hover:bg-slate-900/70 duration-500 ease-in-out"></div>
                                                <div class="absolute top-1/2 -translate-y-1/2 start-0 end-0 text-center invisible group-hover:visible">
                                                    <a href="/assets/images/ads/branches/<?= $branch->branch_image; ?>" class="btn btn-icon bg-green-600 hover:bg-green-700 text-white rounded-full lightbox"><i class="mdi mdi-camera-outline"></i></a>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="w-1/2 p-1">
                                        <div class="group relative overflow-hidden rounded-md shadow dark:shadow-gray-700">
                                            <?php if ($branch->branch_image === 'default.png'): ?>
                                                <img src="/assets/images/ads/default/<?= $branch->branch_image; ?>" alt="">
                                                <div class="absolute inset-0 group-hover:bg-slate-900/70 duration-500 ease-in-out"></div>
                                                <div class="absolute top-1/2 -translate-y-1/2 start-0 end-0 text-center invisible group-hover:visible">
                                                    <a href="/assets/images/ads/default/<?= $branch->branch_image; ?>" class="btn btn-icon bg-green-600 hover:bg-green-700 text-white rounded-full lightbox"><i class="mdi mdi-camera-outline"></i></a>
                                                </div>
                                            <?php else: ?>
                                                <img src="/assets/images/ads/branches/<?= $branch->branch_image; ?>" alt="">
                                                <div class="absolute inset-0 group-hover:bg-slate-900/70 duration-500 ease-in-out"></div>
                                                <div class="absolute top-1/2 -translate-y-1/2 start-0 end-0 text-center invisible group-hover:visible">
                                                    <a href="/assets/images/ads/branches/<?= $branch->branch_image; ?>" class="btn btn-icon bg-green-600 hover:bg-green-700 text-white rounded-full lightbox"><i class="mdi mdi-camera-outline"></i></a>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex">
                                    <div class="w-1/2 p-1">
                                        <div class="group relative overflow-hidden rounded-md shadow dark:shadow-gray-700">
                                            <?php if ($branch->branch_image === 'default.png'): ?>
                                                <img src="/assets/images/ads/default/<?= $branch->branch_image; ?>" alt="">
                                                <div class="absolute inset-0 group-hover:bg-slate-900/70 duration-500 ease-in-out"></div>
                                                <div class="absolute top-1/2 -translate-y-1/2 start-0 end-0 text-center invisible group-hover:visible">
                                                    <a href="/assets/images/ads/default/<?= $branch->branch_image; ?>" class="btn btn-icon bg-green-600 hover:bg-green-700 text-white rounded-full lightbox"><i class="mdi mdi-camera-outline"></i></a>
                                                </div>
                                            <?php else: ?>
                                                <img src="/assets/images/ads/branches/<?= $branch->branch_image; ?>" alt="">
                                                <div class="absolute inset-0 group-hover:bg-slate-900/70 duration-500 ease-in-out"></div>
                                                <div class="absolute top-1/2 -translate-y-1/2 start-0 end-0 text-center invisible group-hover:visible">
                                                    <a href="/assets/images/ads/branches/<?= $branch->branch_image; ?>" class="btn btn-icon bg-green-600 hover:bg-green-700 text-white rounded-full lightbox"><i class="mdi mdi-camera-outline"></i></a>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="w-1/2 p-1">
                                        <div class="group relative overflow-hidden rounded-md shadow dark:shadow-gray-700">
                                            <?php if ($branch->branch_image === 'default.png'): ?>
                                                <img src="/assets/images/ads/default/<?= $branch->branch_image; ?>" alt="">
                                                <div class="absolute inset-0 group-hover:bg-slate-900/70 duration-500 ease-in-out"></div>
                                                <div class="absolute top-1/2 -translate-y-1/2 start-0 end-0 text-center invisible group-hover:visible">
                                                    <a href="/assets/images/ads/default/<?= $branch->branch_image; ?>" class="btn btn-icon bg-green-600 hover:bg-green-700 text-white rounded-full lightbox"><i class="mdi mdi-camera-outline"></i></a>
                                                </div>
                                            <?php else: ?>
                                                <img src="/assets/images/ads/branches/<?= $branch->branch_image; ?>" alt="">
                                                <div class="absolute inset-0 group-hover:bg-slate-900/70 duration-500 ease-in-out"></div>
                                                <div class="absolute top-1/2 -translate-y-1/2 start-0 end-0 text-center invisible group-hover:visible">
                                                    <a href="/assets/images/ads/branches/<?= $branch->branch_image; ?>" class="btn btn-icon bg-green-600 hover:bg-green-700 text-white rounded-full lightbox"><i class="mdi mdi-camera-outline"></i></a>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end flex-->

                        <div class="grid lg:grid-cols-12 md:grid-cols-2 gap-6 mt-6">
                            <div class="lg:col-span-8">
                                <div class="bg-white dark:bg-slate-900 p-6 rounded-md shadow dark:shadow-gray-700">
                                    <h4 class="text-2xl font-medium"><?= $branch->name; ?></h4>

                                    <ul class="py-6 flex items-center list-none">
                                        <li class="flex items-center lg:me-6 me-4">
                                            <i class="mdi mdi-arrow-expand-all lg:text-3xl text-2xl me-2 text-green-600"></i>
                                            <span class="lg:text-xl"><?= $branch->address; ?></span>
                                        </li>
                                    </ul>

                                    <p class="text-slate-400">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                    <p class="text-slate-400 mt-4">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                                    <p class="text-slate-400 mt-4">Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.</p>

                                    <div class="w-full leading-[0] border-0 mt-6">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin" style="border:0" class="w-full h-[500px]" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>

                            <div class="lg:col-span-4">
                                <div class="rounded-md bg-white dark:bg-slate-900 shadow dark:shadow-gray-700">
                                    <div class="p-6">
                                        <h5 class="text-2xl font-medium">Price:</h5>

                                        <div class="flex justify-between items-center mt-4">
                                            <span class="text-xl font-medium">$ 45,231</span>

                                            <span class="bg-green-600/10 text-green-600 text-sm px-2.5 py-0.75 rounded h-6">For Sale</span>
                                        </div>

                                        <ul class="list-none mt-4">
                                            <li class="flex justify-between items-center">
                                                <span class="text-slate-400 text-sm">Days on Hously</span>
                                                <span class="font-medium text-sm">124 Days</span>
                                            </li>

                                            <li class="flex justify-between items-center mt-2">
                                                <span class="text-slate-400 text-sm">Price per sq ft</span>
                                                <span class="font-medium text-sm">$ 186</span>
                                            </li>

                                            <li class="flex justify-between items-center mt-2">
                                                <span class="text-slate-400 text-sm">Monthly Payment (estimate)</span>
                                                <span class="font-medium text-sm">$ 1497/Monthly</span>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="flex">
                                        <div class="p-1 w-1/2">
                                            <a href="" class="btn bg-green-600 hover:bg-green-700 text-white rounded-md w-full">Edit Branch</a>
                                        </div>
                                        <div class="p-1 w-1/2">
                                            <a href="" class="btn bg-green-600 hover:bg-green-700 text-white rounded-md w-full">Remove Branch</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-12 text-center">
                                    <h3 class="mb-6 text-xl leading-normal font-medium text-black dark:text-white">Have Question ? Get in touch!</h3>

                                    <div class="mt-6">
                                        <a href="contact.html" class="btn bg-transparent hover:bg-green-600 border border-green-600 text-green-600 hover:text-white rounded-md"><i class="mdi mdi-phone align-middle me-2"></i> Contact us</a>
                                    </div>
                                    <?php if ((new \Shohjahon\RentSrc\Session())->checkSession()): ?>
                                        <div class="mt-6">
                                            <a href="/delete?id=<?= $branch->id; ?>&image=<?= $branch->branch_image; ?>"
                                               class="btn bg-transparent hover:bg-red-600 border border-red-600 text-red-600 dark:hover:text-white rounded-md">
                                                Delete Ad
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <!-- End Content -->
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
            <!--End page-content" -->
        </div>
        <!-- page-wrapper -->

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
        <script src="/dashboard/assets/libs/tobii/js/tobii.min.js"></script>
        <script src="/dashboard/assets/libs/feather-icons/feather.min.js"></script>
        <script src="/dashboard/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="/dashboard/assets/js/plugins.init.js"></script>
        <script src="/dashboard/assets/js/app.js"></script>
        <!-- JAVASCRIPTS -->
    </body>
</html>