<?php
declare(strict_types=1);
loadPartials(path: 'header', loadFromPublic: false);

/**
 * @var array $args
 */
?>
    <div class="page-wrapper toggled">
        <?php
        loadPartials('sidebar', loadFromPublic: false); ?>

        <!-- Start Page Content -->
        <main class="page-content bg-gray-50 dark:bg-slate-800">
            <?php
            loadPartials('top-header', loadFromPublic: false); ?>

            <div class="container-fluid relative px-3">
                <div class="layout-specing">
                    <!-- Start Content -->
                    <div class="md:flex justify-between items-center">
                        <h5 class="text-lg font-semibold">E'lon qo'shish</h5>

                        <ul class="tracking-[0.5px] inline-block sm:mt-0 mt-3">
                            <li class="inline-block capitalize text-[16px] font-medium duration-500 dark:text-white/70 hover:text-green-600 dark:hover:text-white">
                                <a href="/admin">Dashboard</a></li>
                            <li class="inline-block text-base text-slate-950 dark:text-white/70 mx-0.5 ltr:rotate-0 rtl:rotate-180">
                                <i class="mdi mdi-chevron-right"></i></li>
                            <li class="inline-block capitalize text-[16px] font-medium text-green-600 dark:text-white"
                                aria-current="page">E'lon qo'shish
                            </li>
                        </ul>
                    </div>

                    <div class="grid md:grid-cols-2 grid-cols-1 gap-6 mt-6">


<form id="ads-create" action="/branch/create" method="post" enctype="multipart/form-data">
<div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
    <div class="rounded-md shadow dark:shadow-gray-700 p-6 bg-white dark:bg-slate-900 h-fit">
        <!-- Content -->
        <div class="col-span-12">
            <label for="title" class="font-medium">Filial nomi</label>
            <input name="branchName" id="title" type="text" class="form-input mt-2" placeholder="Filial nomini kiriting :">
        </div>

        <div class="col-span-12">
            <label for="title" class="font-medium">Filial Manzili</label>
            <input name="branchAddress" id="title" type="text" class="form-input mt-2" placeholder="Filial manzilini kiriting kiriting :">
        </div>

        <button type="submit" id="submit" name="send" class="btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white rounded-md mt-5">Add Property</button>

    </div>
</div>
</form>
</div>
                </div>
            </div><!--end container-->

            <?php
            loadPartials(path: 'dashboard-footer', loadFromPublic: false); ?>
        </main>
        <!--End page-content" -->
    </div>

<?php
loadPartials(path: 'footer', loadFromPublic: false);
?>

                    <div class="container relative">
                       
                    </div>
                 
       
                    <?php

loadPartials(path: 'footer', loadFromPublic: false);
?>

     