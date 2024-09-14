<?php

declare(strict_types=1);

loadPartials('header');
loadPartials('navbar');

/**
 * @var $ads
 * @var $branch
 */
?>


<!-- Start -->
<section class="relative md:py-24 pt-24 pb-16">
    <div class="container relative">
        <div class="grid grid-cols-1">
            <div class="p-6 rounded-md bg-green-600/10 dark:bg-green-600/20">
                <div class="md:flex items-center">
                    <img src="/assets/images/agency/najot_talim.jpg" class="rounded-full size-28" alt="">

                    <div class="md:ms-4 md:mt-0 mt-4 md:flex justify-between items-end">
                        <div>
                            <h5 class="text-2xl font-medium"> <?= $branch->name ?> filiali <span class="text-base md:inline block md:mt-0 mt-2"><span class="text-slate-400"><span class="mdi mdi-circle-medium align-middle md:inline-block hidden"></span>Real Estate Agency</span></span></h5>

                            <ul class="list-none mt-2 md:flex items-center md:divide-x-[1px] divide-slate-400">
                                <li class="md:inline-flex flex">
                                    <ul class="text-amber-400 list-none">
                                        <li class="inline"><i class="mdi mdi-star align-middle"></i></li>
                                        <li class="inline"><i class="mdi mdi-star align-middle"></i></li>
                                        <li class="inline"><i class="mdi mdi-star align-middle"></i></li>
                                        <li class="inline"><i class="mdi mdi-star align-middle"></i></li>
                                        <li class="inline"><i class="mdi mdi-star align-middle"></i></li>
                                        <li class="inline text-black dark:text-white">4.84(30)</li>
                                    </ul>
                                </li>

                                <li class="md:inline-flex flex items-center md:mx-2 md:mt-0 mt-2 md:px-2"><i data-feather="phone" class="size-4 align-middle text-green-600 me-2"></i> +(998) 78 888-98-88</li>

                                <li class="md:inline-flex flex items-center md:mx-2 md:mt-0 mt-2 md:px-2">
                                    <ul class="list-none">
                                        <li class="inline"><a href="" class="btn btn-icon btn-sm border border-gray-300 dark:border-gray-400 rounded-md text-slate-400 hover:border-green-600 hover:text-white hover:bg-green-600 dark:hover:border-green-600"><i data-feather="facebook" class="size-4"></i></a></li>
                                        <li class="inline"><a href="" class="btn btn-icon btn-sm border border-gray-300 dark:border-gray-400 rounded-md text-slate-400 hover:border-green-600 hover:text-white hover:bg-green-600 dark:hover:border-green-600"><i data-feather="instagram" class="size-4"></i></a></li>
                                        <li class="inline"><a href="" class="btn btn-icon btn-sm border border-gray-300 dark:border-gray-400 rounded-md text-slate-400 hover:border-green-600 hover:text-white hover:bg-green-600 dark:hover:border-green-600"><i data-feather="twitter" class="size-4"></i></a></li>
                                        <li class="inline"><a href="" class="btn btn-icon btn-sm border border-gray-300 dark:border-gray-400 rounded-md text-slate-400 hover:border-green-600 hover:text-white hover:bg-green-600 dark:hover:border-green-600"><i data-feather="linkedin" class="size-4"></i></a></li>
                                    </ul><!--end icon-->
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative mt-6">

        <h5 class="text-xl font-medium mt-6">Our Listings</h5>

        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px]">

            <?php foreach ($ads as $ad):?>
                <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                    <div class="relative">
                        <img src="<?php
                        echo \App\Image::show($ad->image); ?>" alt="">

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
                                <i class="mdi mdi-map-marker-radius text-2xl me-2 text-green-600"></i>
                                <span><?= $ad->branch_name ?></span>
                            </li>

                            <li class="flex items-center me-4">
                                <i class="mdi mdi-gender-male-female text-2xl me-2 text-green-600"></i>
                                <span><?= $ad->gender ?></span>
                            </li>

                            <li class="flex items-center">
                                <i class="mdi mdi-door-open text-2xl me-2 text-green-600"></i>
                                <span><?= $ad->rooms ?></span>
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
            <?php endforeach; ?>

        </div><!--en grid-->

    </div><!--end container-->

</section><!--end section-->
<!-- End -->

<?php loadPartials("footer"); ?>;
