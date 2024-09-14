@@include("partials/main.html")
<head>
    @@include("partials/title-meta.html", {"title": "Hously"})

    <!-- Css -->
    <link href="assets/libs/tiny-slider/tiny-slider.css" rel="stylesheet">
    <link href="assets/libs/tobii/css/tobii.min.css" rel="stylesheet">
    @@include("partials/head-css.html")
</head>
<!-- Start Hero -->
<section class="relative table w-full py-32 lg:py-36 bg-[url('../../assets/images/bg/01.jpg')] bg-no-repeat bg-center bg-cover">
    <div class="absolute inset-0 bg-black opacity-80"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 text-center mt-10">
            <h3 class="md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white">About Us</h3>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<div class="relative">
    <div class="shape overflow-hidden z-1 text-white dark:text-slate-900">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- End Hero -->

<!-- Start -->
<section class="relative lg:py-24 py-16">
    <div class="container relative">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
            <div class="md:col-span-5">
                <div class="relative">
                    <img src="assets/images/about.jpg" class="rounded-xl shadow-md" alt="">
                    <div class="absolute bottom-2/4 translate-y-2/4 start-0 end-0 text-center">
                        <a href="#!" data-type="youtube" data-id="yba7hPeTSjk"
                           class="lightbox size-20 rounded-full shadow-md dark:shadow-gyay-700 inline-flex items-center justify-center bg-white dark:bg-slate-900 text-green-600">
                            <i class="mdi mdi-play inline-flex items-center justify-center text-2xl"></i>
                        </a>
                    </div>
                </div>
            </div><!--end col-->

            <div class="md:col-span-7">
                <div class="lg:ms-4">
                    <h4 class="mb-6 md:text-3xl text-2xl lg:leading-normal leading-normal font-semibold">PHP<br>Abdulqayum</h4>
                    <p class="text-slate-400 max-w-xl">PHP (Hypertext Preprocessor) — bu server tomonda ishlaydigan dasturlash tili bo'lib, asosan dinamik veb-sahifalarni yaratishda keng qo'llaniladi. PHP dasturlari veb-serverda ishlaydi va u veb-ilovalar uchun ma'lumotlarni qayta ishlash, ma'lumotlar bazasi bilan o'zaro aloqada bo'lish, foydalanuvchi kiritmalarini qayta ishlash kabi ko'plab vazifalarni bajaradi.

                        PHP ning asosiy xususiyatlari:

                        Oson o'rganish: PHP'ni o'rganish va uni qo'llash oson, yangi boshlovchilar uchun yaxshi tanlov.
                        Platformaga bog'liq emas: PHP har qanday operatsion tizimda ishlashi mumkin (Windows, Linux, MacOS va boshqalar).
                        Ochilish kodi: PHP bepul va ochiq manbali dasturlash tili bo'lib, uni istalgan kishi o'zgartirishi va takomillashtirishi mumkin.
                        Keng ko'lamdagi kutubxonalar: PHP'da ma'lumotlar bazasi, fayl tizimlari, sessiya boshqaruvi va boshqa ko'plab kutubxonalar mavjud.
                        Ma'lumotlar bazasi bilan integratsiya: PHP MySQL, PostgreSQL, SQLite kabi ko'plab ma'lumotlar bazalari bilan ishlash imkoniyatini beradi.
                        Tezkorlik va samaradorlik: PHP dinamik sahifalarni yaratishda samarali ishlaydi, ko'plab yirik veb-saytlar undan foydalanadi (Facebook, Wikipedia).
                        PHP'ni ishlatishda foydali vositalar:

                        PDO: PHP Data Objects, bu ma'lumotlar bazalari bilan universal tarzda ishlash uchun qulay vosita.
                        Composer: PHP paketlarini boshqarish uchun ishlatiladigan vosita, kodni modular qilish imkoniyatini beradi.
                        PHP ning zamonaviy versiyalari (masalan, PHP 8) tezkorlikni oshiruvchi va kod yozishni osonlashtiruvchi ko'plab yangi xususiyatlarga ega.</p>

                    <div class="mt-4">
                        <a href="" class="btn bg-green-600 hover:bg-green-700 text-white rounded-md mt-3">Learn More </a>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end grid-->
    </div><!--end container-->


<!-- JAVASCRIPTS -->
<script src="assets/libs/tiny-slider/min/tiny-slider.js"></script>
<script src="assets/libs/tobii/js/tobii.min.js"></script>
@@include("partials/script-files.html")
<!-- JAVASCRIPTS -->
</section>
</html>
