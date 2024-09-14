<?php

loadPartials('header');
loadPartials('navbar');

/**
 * @var $branches
 */
?>

<!-- Start -->
<section class="relative lg:py-24 py-16">
    <div class="container relative">
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px]">

            <?php foreach ($branches as $branch) : ?>
                <div class="group text-center">
                    <div class="relative inline-block mx-auto size-60 rounded-full overflow-hidden shadow dark:shadow-gray-700">
                        <a href="#">
                            <img src="assets/images/agency/najot_talim.jpg" class="" alt="">
                        </a>
                    </div>

                    <div class="content mt-3">
                        <a href="/branches/<?= $branch->id ?>" class="text-xl font-medium hover:text-green-600 transition-all duration-500 ease-in-out"><?= $branch->name ?> branch</a>
                        <p class="text-slate-400"><?= $branch->address ?></p>

                        <ul class="list-none mt-2">
                            <li class="inline"><a href="" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-green-600 hover:text-white hover:bg-green-600"><i data-feather="facebook" class="size-4"></i></a></li>
                            <li class="inline"><a href="" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-green-600 hover:text-white hover:bg-green-600"><i data-feather="instagram" class="size-4"></i></a></li>
                            <li class="inline"><a href="" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-green-600 hover:text-white hover:bg-green-600"><i data-feather="twitter" class="size-4"></i></a></li>
                            <li class="inline"><a href="" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-green-600 hover:text-white hover:bg-green-600"><i data-feather="linkedin" class="size-4"></i></a></li>
                        </ul><!--end icon-->
                    </div>
                </div><!--end contant-->
            <?php endforeach; ?>
        </div><!--end grid-->
    </div><!--end container-->

</section><!--end section-->
<!-- End -->

<?php
loadPartials('footer');
