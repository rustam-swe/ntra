<?php

declare(strict_types=1);

use Shohjahon\RentSrc\Session;

loadPartials(path: 'header', loadFromPublic: false);
?>
<div class="page-wrapper toggled">
    <!-- sidebar-wrapper -->
    <?php loadPartials(path: 'navbar', loadFromPublic: false); ?>
    <!-- sidebar-wrapper  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
                                    <a href="profile.html" class="block py-1 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white"><i class="mdi mdi-account-outline me-2"></i>Profile</a>
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
                <div class="grid grid-cols-1">
                    <div class="profile-banner relative text-transparent rounded-md shadow dark:shadow-gray-700 overflow-hidden">
                        <input id="pro-banner" name="profile-banner" type="file" class="hidden" onchange="loadFile(event)">
                        <div class="relative shrink-0">
                            <img src="/dashboard/assets/images/bg.jpg" class="h-80 w-full object-cover" id="profile-banner" alt="">
                            <div class="absolute inset-0 bg-black/70"></div>
                            <label class="absolute inset-0 cursor-pointer" for="pro-banner"></label>
                        </div>
                    </div>
                </div>

                <div class="grid md:grid-cols-12 grid-cols-1 gap-6 mt-6">
                    <div class="xl:col-span-3 lg:col-span-4 md:col-span-4">
                        <div class="p-6 relative rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                            <div class="profile-pic text-center">
                                <input id="pro-img" name="profile-image" type="file" class="hidden" onchange="loadFile(event)" />
                                <div>
                                    <div class="relative size-24 mx-auto">
                                        <img src="/dashboard/assets/images/client/07.jpg" class="rounded-full shadow dark:shadow-gray-700 ring-4 ring-slate-50 dark:ring-slate-800" id="profile-image" alt="">
                                        <label class="absolute inset-0 cursor-pointer" for="pro-img"></label>
                                    </div>

                                    <div class="mt-4">
                                        <h5 class="text-lg font-semibold">Calvin Carlo</h5>
                                        <p class="text-slate-400">calvin@hotmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="xl:col-span-9 lg:col-span-8 md:col-span-8">
                        <div class="grid grid-cols-1 gap-6">
                            <div class="p-6 relative rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                                <h5 class="text-lg font-semibold mb-4">Personal Detail :</h5>
                                <form method="post" action="/update/user">
                                    <div class="grid lg:grid-cols-2 grid-cols-1 gap-5">
                                        <div>
                                            <label class="form-label font-medium" for="name">Name : <span class="text-red-600">*</span></label>
                                            <div class="form-icon relative mt-2">
                                                <i data-feather="user" class="size-4 absolute top-3 start-4"></i>
                                                <input type="text" name="name" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-green-600 dark:border-gray-800 dark:focus:border-green-600 focus:ring-0" placeholder="Name:" id="name" required="">
                                            </div>
                                        </div>
                                        <div>
                                            <label class="form-label font-medium" for="email">Your Email : <span class="text-red-600">*</span></label>
                                            <div class="form-icon relative mt-2">
                                                <i data-feather="mail" class="size-4 absolute top-3 start-4"></i>
                                                <input type="email" name="email" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-green-600 dark:border-gray-800 dark:focus:border-green-600 focus:ring-0" placeholder="Email" required="" id="email">
                                            </div>
                                        </div>
                                        <div>
                                            <label class="form-label font-medium" for="position">Position : <span class="text-red-600">*</span></label>
                                            <div class="form-icon relative mt-2">
                                                <i data-feather="user-check" class="size-4 absolute top-3 start-4"></i>
                                                <select name="position" id="position" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-green-600 dark:border-gray-800 dark:focus:border-green-600 focus:ring-0">
                                                    <option value="fronted">Frontend Developer</option>
                                                    <option value="backend">Backend Developer</option>
                                                    <option value="full-stack">Full-Stack Developer</option>
                                                    <option value="mobile">Mobile Developer</option>
                                                    <option value="devops">DevOps Engineer</option>
                                                    <option value="data">Data Scientist / Data Engineer</option>
                                                    <option value="game">Game Developer</option>
                                                    <option value="software">Software Engineer</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="form-label font-medium" for="gender">Gender : <span class="text-red-600">*</span></label>
                                            <div class="form-icon relative mt-2">
                                                <i class="fas fa-link size-4 absolute top-3 start-4" style="font-size: 16px;"></i>
                                                <select name="gender" id="gender" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-green-600 dark:border-gray-800 dark:focus:border-green-600 focus:ring-0">
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div><!--end grid-->

                                    <div class="grid grid-cols-1">
                                        <div class="mt-5">
                                            <label class="form-label font-medium" for="comments">Description : </label>
                                            <div class="form-icon relative mt-2">
                                                <i class="fas fa-file-alt size-4 absolute top-3 start-4" style="font-size: 16px;"></i>
                                                <textarea name="description" id="comments" class="form-input ps-11 w-full py-2 px-3 h-28 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-green-600 dark:border-gray-800 dark:focus:border-green-600 focus:ring-0" placeholder="Description :"></textarea>
                                            </div>
                                        </div>

                                        <input type="hidden" name="userId" value="<?= (new Session())->getSession()['id']; ?>">
                                    </div><!--end row-->

                                    <input type="submit" id="submit" name="send" class="btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white rounded-md mt-5" value="Save Changes">
                                </form><!--end form-->
                            </div>

                            <div class="p-6 relative rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                                <div class="grid lg:grid-cols-2 grid-cols-1 gap-6">
                                    <div>
                                        <h5 class="text-lg font-semibold mb-4">Contact :</h5>

                                        <form method="post" action="/update/phone/number">
                                            <div class="grid grid-cols-1 gap-5">
                                                <div>
                                                    <label class="form-label font-medium">Phone No. :</label>
                                                    <div class="form-icon relative mt-2">
                                                        <i data-feather="phone" class="size-4 absolute top-3 start-4"></i>
                                                        <input name="number" id="number" type="number" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-green-600 dark:border-gray-800 dark:focus:border-green-600 focus:ring-0" placeholder="Phone :">
                                                    </div>

                                                    <input type="hidden" name="userId" value="<?= (new Session())->getSession()['id']; ?>">
                                                </div>
                                            </div><!--end grid-->

                                            <button class="btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white rounded-md mt-5">Add</button>
                                        </form>
                                    </div><!--end col-->

                                    <div>
                                        <h5 class="text-lg font-semibold mb-4">Change password :</h5>
                                        <form method="post" action="/update/password">
                                            <div class="grid grid-cols-1 gap-5">
                                                <div>
                                                    <label class="form-label font-medium" for="oldPassword">Old password :</label>
                                                    <div class="form-icon relative mt-2">
                                                        <i data-feather="key" class="size-4 absolute top-3 start-4"></i>
                                                        <input type="password" name="oldPassword" id="oldPassword" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-green-600 dark:border-gray-800 dark:focus:border-green-600 focus:ring-0" placeholder="Old password" required="">
                                                    </div>
                                                    <?php if (isset((new Session())->getSession()['errorOldPassword'])): ?>
                                                        <div class="bg-red-100 dark:bg-red-800 border border-red-400 dark:border-red-500 text-red-700 dark:text-red-300 px-4 py-3 rounded relative" role="alert">
                                                            <strong class="font-bold">Error:</strong>
                                                            <span class="block sm:inline"><?= (new Session())->getSession()['errorOldPassword'] ?></span>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>

                                                <div>
                                                    <label class="form-label font-medium" for="newPassword">New password :</label>
                                                    <div class="form-icon relative mt-2">
                                                        <i data-feather="key" class="size-4 absolute top-3 start-4"></i>
                                                        <input type="password" name="newPassword" id="newPassword" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-green-600 dark:border-gray-800 dark:focus:border-green-600 focus:ring-0" placeholder="New password" required="">
                                                    </div>
                                                </div>

                                                <div>
                                                    <label class="form-label font-medium" for="reTypePassword">Re-type New password :</label>
                                                    <div class="form-icon relative mt-2">
                                                        <i data-feather="key" class="size-4 absolute top-3 start-4"></i>
                                                        <input type="password" name="reTypePassword" id="reTypePassword" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-green-600 dark:border-gray-800 dark:focus:border-green-600 focus:ring-0" placeholder="Re-type New password" required="">
                                                    </div>
                                                    <?php if (isset((new Session())->getSession()['errorNewPassword'])): ?>
                                                        <div class="bg-red-100 dark:bg-red-800 border border-red-400 dark:border-red-500 text-red-700 dark:text-red-300 px-4 py-3 rounded relative" role="alert">
                                                            <strong class="font-bold">Error:</strong>
                                                            <span class="block sm:inline"><?= (new Session())->getSession()['errorNewPassword'] ?></span>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                                <input type="hidden" name="userId" value="<?= (new Session())->getSession()['id'] ?>">
                                            </div><!--end grid-->

                                            <button class="btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white rounded-md mt-5">Save password</button>
                                        </form>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div>

                            <div class="p-6 relative rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                                <h5 class="text-lg font-semibold mb-4 text-red-600">Delete Account :</h5>

                                <p class="text-slate-400 mb-4">Do you want to delete the account? Please press below "Delete" button</p>

                                <a href="#" class="btn bg-red-600 hover:bg-red-700 border-red-600 hover:border-red-700 text-white rounded-md">Delete</a>
                            </div>
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
<script src="/dashboard/assets/libs/feather-icons/feather.min.js"></script>
<script src="/dashboard/assets/libs/simplebar/simplebar.min.js"></script>
<script src="/dashboard/assets/js/plugins.init.js"></script>
<script src="/dashboard/assets/js/app.js"></script>
<!-- JAVASCRIPTS -->
</body>