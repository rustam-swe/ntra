<?php

declare(strict_types=1);
loadPartials('header'); ?>

<body class="dark:bg-slate-900">
<section class="md:h-screen py-36 flex items-center relative overflow-hidden zoom-image">
    <div class="absolute inset-0 image-wrap z-1 bg-[url('../../assets/images/bg/01.jpg')] bg-no-repeat bg-center bg-cover"></div>
    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black z-2" id="particles-snow"></div>
    <div class="container relative z-3">
        <div class="flex justify-center">
            <div class="max-w-[400px] w-full m-auto p-6 bg-white dark:bg-slate-900 shadow-md dark:shadow-gray-700 rounded-md">
                <a href="index.html"><img src="assets/images/logo-icon-64.png" class="mx-auto" alt=""></a>
                <h5 class="my-6 text-xl font-semibold">Ro'yxatdan o'tish</h5>
                <form action="/register" method="post" class="text-start">
                    <div class="grid grid-cols-1 gap-4">

                        <!-- Username -->
                        <div class="mb-4">
                            <label class="font-medium" for="username">Foydalanuvchi nomi</label>
                            <input id="username" type="text" name="username" class="form-input mt-3" placeholder="Foydalanuvchi nomi">
                        </div>

                        <!-- Position -->
                        <div class="mb-4">
                            <label class="font-medium" for="position">Lavozim</label>
                            <input id="position" type="text" name="position" class="form-input mt-3" placeholder="Lavozimingiz">
                        </div>

                        <!-- Gender -->
                        <div class="mb-4">
                            <label class="font-medium" for="gender">Jins</label>
                            <select id="gender" name="gender" class="form-input mt-3">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>

                        <!-- Phone Number -->
                        <div class="mb-4">
                            <label class="font-medium" for="phone">Telefon raqami</label>
                            <input id="phone" type="tel" name="phone" class="form-input mt-3" placeholder="Telefon raqami">
                        </div>

                        <!-- Email -->
                        <div class="mb-4">
                            <label class="font-medium" for="email">Email</label>
                            <input id="email" type="email" name="email" class="form-input mt-3" placeholder="Email">
                        </div>

                        <!-- Password -->
                        <div class="mb-4">
                            <label class="font-medium" for="password">Parol</label>
                            <input id="password" type="password" name="password" class="form-input mt-3" placeholder="Parol">
                        </div>

                        <!-- Submit Button -->
                        <div class="mb-4">
                            <button type="submit" class="btn bg-green-600 hover:bg-green-700 text-white rounded-md w-full">Ro'yxatdan o'tish</button>
                        </div>

                        <!-- Already have an account -->
                        <div class="text-center">
                            <span class="text-slate-400 me-2">Hisobingiz bormi?</span>
                            <a href="/login" class="text-black dark:text-white font-bold">Kirish</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- JAVASCRIPTS -->
<script src="assets/libs/particles.js/particles.js"></script>
<script src="assets/libs/feather-icons/feather.min.js"></script>
<script src="assets/js/plugins.init.js"></script>
<script src="assets/js/app.js"></script>
<!-- JAVASCRIPTS -->

</body>

