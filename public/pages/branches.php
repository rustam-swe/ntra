<?php

declare(strict_types=1);
loadPartials(path: 'header');
?>
    <div class="page-wrapper toggled">
        <?php
        loadPartials(path: 'navbar'); ?>
        <!-- Start Page Content -->
    <section class="relative lg:py-24 py-16">
    <div class="container relative mb-6">
        <div class="grid grid-cols-1 justify-center">
            <div class="relative">
                <div class="grid grid-cols-1">
                    <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6 mt-6">
                        <?php
                        /**
                         * @var $branches
                         */

                        foreach ($branches as $branch):?>
                            <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                                <div class="relative">
                                    <img src="<?php
                                    echo \App\Image::show($branch?->image) ?>" alt="">

                                    <div class="absolute top-4 end-4">
                                        <a href="javascript:void(0)"
                                           class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i
                                                    class="mdi mdi-heart text-[20px]"></i></a>
                                    </div>
                                </div>

                                <div class="p-6">
                                    <div class="pb-6">
                                        <a href="#"
                                           class="text-lg hover:text-green-600 font-medium ease-in-out duration-500"><?= $branch->name; ?></a>
                                    </div>

                                    <ul class="pt-6 flex justify-between items-center list-none">
                                        <li>
                                            <span class="text-slate-400">Manzil</span>
                                            <p class="text-lg font-medium"><?= $branch->address ?></p>
                                        </li>

                                    </ul>
                                </div>
                            </div><!--end property content-->
                        <?php
                        endforeach; ?>
                    </div><!--en grid-->
                </div><!--en grid-->
            </div>
            </div><!--end container-->
    </section>
        <!--End page-content" -->
    </div>
    <!-- page-wrapper -->

<?php
loadPartials(path: 'footer');
?>