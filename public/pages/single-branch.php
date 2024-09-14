<?php

declare(strict_types=1);

loadPartials('header');
loadPartials('navbar');

/**
 * @var $branch // Comes from controller
 */
?>

<!-- Start -->
<section class="relative md:py-24 pt-24 pb-16">
    <div class="container relative">
        <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
            <div class="lg:col-span-8 md:col-span-7">
                <div class="grid grid-cols-1 relative">
                    <div class="tiny-one-item">
                        <h4 class="text-2xl font-medium mt-6 mb-3"><?= $branch->name; ?></h4>

                        <p class="text-slate-400"><?= $branch->address;?></p>

                        <div class="w-full leading-[0] border-0 mt-6">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin"
                                    style="border:0" class="w-full h-[500px]" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="lg:col-span-4 md:col-span-5">
                        <div class="sticky top-20">
                            <div class="rounded-md bg-slate-50 dark:bg-slate-800 shadow dark:shadow-gray-700">
                                <div class="p-6">
                                    <ul class="list-none mt-4">
                                        <li class="flex justify-between items-center mt-2">
                                            <span class="text-slate-400 text-sm">Sana</span>
                                            <span class="font-medium text-sm"><?= $branch->created_at;?></span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="flex">
                                    <div class="p-1 w-1/2">
                                        <a href="" class="btn bg-green-600 hover:bg-green-700 text-white rounded-md w-full">Book
                                            Now</a>
                                    </div>
                                    <div class="p-1 w-1/2">
                                        <a href="" class="btn bg-green-600 hover:bg-green-700 text-white rounded-md w-full">Offer
                                            Now</a>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-12 text-center">
                                <h3 class="mb-6 text-xl leading-normal font-medium text-black dark:text-white">Have Question ?
                                    Get in touch!</h3>

                                <div class="mt-6">
                                    <form action="/branch/delete/<?= $branch->id ?>" method="post">
                                        <input type="hidden" name="_method" value="delete">
                                        <button type="submit"
                                                class="btn bg-transparent hover:bg-green-600 border border-green-600 text-green-600 hover:text-white rounded-md">
                                            <i class="uil uil-phone align-middle me-2"></i>Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section><!--end section-->
<!-- End -->
