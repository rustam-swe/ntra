<?php

declare(strict_types=1);

loadPartials('header');
loadPartials('navbar');

/**
 * @var $branch1 // Comes from controller
 * @var $ads
 */
//dd($ads);
?>

<!-- Start -->
<section class="relative md:py-24 pt-24 pb-16">
    <div class="container relative">
        <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
            <div class="lg:col-span-8 md:col-span-7">
                <div class="grid grid-cols-1 relative">
                    <div class="tiny-one-item">
                        <div class="tiny-slide">
                            <img src="<?= \App\Image::show($branch1->image) ?>"
                                 class="rounded-md shadow dark:shadow-gray-700" alt="">
                        </div>
                    </div>
                </div>

                <h4 class="text-2xl font-medium mt-6 mb-3"><?= $branch1->name; ?></h4>
                <span class="text-slate-400 flex items-center">
                    <i data-feather="map-pin" class="size-5 me-2"></i><?= $ad->address; ?>
                </span>

                <ul class="py-6 flex items-center list-none">
                    <li class="flex items-center lg:me-6 me-4">
                        <i class="uil uil-compress-arrows lg:text-3xl text-2xl me-2 text-green-600"></i>
                        <span class="lg:text-xl">8000sqf</span>
                    </li>

                    <li class="flex items-center lg:me-6 me-4">
                        <i class="uil uil-bed-double lg:text-3xl text-2xl me-2 text-green-600"></i>
                        <span class="lg:text-xl"><?= $ad->rooms; ?> xona</span>
                    </li>

                    <li class="flex items-center">
                        <i class="uil uil-bath lg:text-3xl text-2xl me-2 text-green-600"></i>
                        <span class="lg:text-xl">4 Baths</span>
                    </li>
                </ul>

                <p class="text-slate-400"><?= $ad->description; ?></p>
                <!-- Shu brenchga  aloqador  reklamalar -->
                <div class="pb-6">
                    <?php
                    if (empty($ads)){
                        echo "<span class=\"text-slate-400\">Shu Branchga aloqador e'lonlar yo'q<pre></pre></span>";
                    }else {
                        echo "<span class=\"text-slate-400\">Shu Branchga aloqador e'lonlar<pre></pre></span>";
                    }
                    ?>

                    <?php foreach ($ads as $ad): ?>
                    <a href="/branch/<?= $ad->id; ?>"
                       class="text-lg hover:text-green-600 font-medium ease-in-out duration-500"><?= $ad->title; ?></a>

                    <?php endforeach; ?>
                </div>

                <!-- Shu brenchga  aloqador  reklamalar -->
                <div class="w-full leading-[0] border-0 mt-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin"
                            style="border:0" class="w-full h-[500px]" allowfullscreen></iframe>
                </div>
            </div>



            <div class="lg:col-span-4 md:col-span-5">
                <div class="sticky top-20">

                    <?php if ((new App\Session())->getRoleId() === 1): ?>
                        <div class="mt-12 text-center">
                            <div class="mt-6">
                                <form action="/ads/delete/<?= $ad->id ?>" method="post">
                                    <input type="hidden" name="_method" value="delete">
                                    <button type="submit"
                                            class="btn bg-transparent hover:bg-green-600 border border-green-600 text-green-600 hover:text-white rounded-md">
                                        <i class="uil uil-trash align-middle me-2"></i>O'chirish
                                    </button>
                                </form>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section><!--end section-->
<!-- End -->