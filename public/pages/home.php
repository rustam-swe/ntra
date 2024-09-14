
<?php
loadPartials('header');
loadPartials('navbar');
  /**
             * @var  $branches
             */

?>
  
        <!-- Hero Start -->
        <section class="relative mt-20">
            <div class="container-fluid md:mx-4 mx-2">
                <div class="relative pt-40 pb-52 table w-full rounded-2xl shadow-md overflow-hidden" id="home">
                    <div class="absolute inset-0 bg-black/60"></div>

                    <div class="container relative">
                        <div class="grid grid-cols-1">
                            <div class="md:text-start text-center">
                                <h1 class="font-bold text-white lg:leading-normal leading-normal text-4xl lg:text-5xl mb-6">We will help you find <br> your <span class="text-green-600">Wonderful</span> home</h1>
                                <p class="text-white/70 text-xl max-w-xl">A great plateform to buy, sell and rent your properties without any agent or commisions.</p>
                            </div>
                        </div><!--end grid-->
                    </div><!--end container-->
                </div>
            </div><!--end Container-->
        </section><!--end section-->
        <!-- Hero End -->

        <!-- Start -->
        <section class="relative md:pb-24 pb-16">
            <div class="container relative">
                <div class="grid grid-cols-1 justify-center">
                    <div class="relative -mt-32">
                        <div class="grid grid-cols-1">
                        
                            <div id="StarterContent" class="p-6 bg-white dark:bg-slate-900 rounded-ss-none rounded-se-none md:rounded-se-xl rounded-xl shadow-md dark:shadow-gray-700">
                                <div class="" id="buy-home" role="tabpanel" aria-labelledby="buy-home-tab">
                                    <form action="/search" method="get">
                                        <div class="registration-form text-dark text-start">
                                            <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 lg:gap-0 gap-6">

                                            <div>

                                                    <label class="form-label font-medium text-slate-900 dark:text-white">Search : <span class="text-red-600">*</span></label>
                                                    <div class="filter-search-form relative filter-border mt-2">
                                                        <i class="uil uil-search icons"></i>
                                                        <input name="search_phrase" type="text" id="job-keyword" class="form-input filter-input-box bg-gray-50 dark:bg-slate-800 border-0" placeholder="Search your keaywords">
                                                    </div>
                                                </div> 
                                                
                                                <div>
                                                    <label for="buy-properties" class="form-label font-medium text-slate-900 dark:text-white">Select Categories:</label>
                                                    <div class="filter-search-form relative filter-border mt-2">
                                                        <i class="uil uil-estate icons"></i>
                                                        <select class="form-select z-2" data-trigger name="branch" id="choices-catagory-buy" aria-label="Default select example">
                                                           <option value="">Filial</option>
                                                            <?php foreach ($branches as $branch) : ?>
                                                            <option value="<?= $branch->id ?>"><?= $branch->name ?></option>
                                                            <?php endforeach; ?>
                                                         
                                                        </select>
                                                    </div>
                                                </div>

                                         
                            
                                                <div>
                                                    <label for="buy-min-price" class="form-label font-medium text-slate-900 dark:text-white">Min Price :</label>
                                                    <div class="filter-search-form relative filter-border mt-2">
                                                        <i class="uil uil-usd-circle icons"></i>
                                                        <input name="min_price" type="text" id="job-keyword" class="form-input filter-input-box bg-gray-50 dark:bg-slate-800 border-0" placeholder="Min Price">
                                                       
                                                    </div>
                                                </div>
                                            
                                                <div>
                                                    <label for="buy-max-price" class="form-label font-medium text-slate-900 dark:text-white">Max Price :</label>
                                                    <div class="filter-search-form relative mt-2">
                                                        <i class="uil uil-usd-circle icons"></i>
                                                        <input type="text" name="max_price" id="job-keyword" class="form-input filter-input-box bg-gray-50 dark:bg-slate-800 border-0" placeholder="Max Price">
                                                      
                                                    </div>
                                                </div>

                                                <div class="lg:mt-6">
                                                    <input type="submit" id="search-buy" name="search" class="btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white searchbtn submit-btn w-full !h-12 rounded" value="Search">
                                                </div>
                                            </div><!--end grid-->
                                        </div><!--end container-->
                                    </form>
                                </div>

                               
                       
                            </div>
                        </div><!--end grid-->
                    </div>
                </div><!--end grid-->
            </div><!--end container-->
            <div class="container relative mt-12" >
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px]">

            <?php
            ;
            /**
             * @var  $ads
             */
             
              /**
             * @var  $users
             * 
             */
            
           
            foreach ($ads as $ad):
                 
            ?>
    
                <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                    <div class="relative">
                        <img src="assets/images/ads/<?= $ad->image ?>" alt="">
                         <div class="absolute top-4 end-4">
                                <a href="/" id="like-button" class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600">
                                    <i class="mdi mdi-heart text-[20px]"></i>
                                    <span id="like-count">0</span>
                                </a>
                            </div>

                    </div>

                    <div class="p-6">
                        <div class="pb-6">
                            <a href="/ads/<?= $ad->id ?>" class="text-lg hover:text-green-600 font-medium ease-in-out duration-500"><?php echo $ad->title; ?></a>
                        </div>

                        <ul class="py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
                            <li class="flex items-center me-4">
                                <i class="uil uil-users-alt icons text-2xl me-2 text-green-600"></i>
                                <span><?= $ad->gender ?> </span>
                            </li>

                       

                        </ul>

                        <ul class="pt-6 flex justify-between items-center list-none">
                            <li>
                                <span class="text-slate-400">Price</span>
                                <p class="text-lg font-medium"><?= $ad->price ?></p>
                            </li>
                        </ul>
                    </div>
                </div><!--end property content-->

            <?php endforeach; ?>

        </div><!--end container-->
</section><!--end section-->



<?php
loadPartials("footer");
?>
