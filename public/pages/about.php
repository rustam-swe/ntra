<?php
loadPartials("header");
loadPartials("navbar");

?>
<section class="relative lg:py-24 py-16">
    <div class="container relative mb-6">
        <div class="grid grid-cols-1 justify-center">
            <div class="relative">
                <div class="grid grid-cols-1">
                    <!-- About Page Content Start -->
                    <h1 class="text-4xl font-bold text-center text-gray-800 mb-6">About Us</h1>
                    <p class="text-lg text-center text-gray-600 mb-8">
                        Welcome to our website! We are dedicated to providing the best service and products to our customers.
                        Our team works hard to bring you high-quality solutions that fit your needs. Whether you are here to learn
                        more about what we offer or to seek support, you are in the right place.
                    </p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <div>
                            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Our Mission</h2>
                            <p class="text-gray-600">
                                Our mission is to deliver exceptional value to our customers through innovative products
                                and services. We are committed to excellence and strive to exceed customer expectations at every turn.
                            </p>
                        </div>
                        <div>
                            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Our Vision</h2>
                            <p class="text-gray-600">
                                We aim to be a leading company in our industry, constantly pushing the boundaries of what is possible
                                and providing top-notch solutions that make a real difference in the lives of our customers.
                            </p>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                        <div class="text-center">
                            <img src="path_to_team_member_image_1.jpg" alt="Team Member 1" class="rounded-full w-32 h-32 mb-4 mx-auto">
                            <h3 class="text-lg font-medium text-gray-800">John Doe</h3>
                            <p class="text-gray-500">CEO</p>
                        </div>
                        <div class="text-center">
                            <img src="path_to_team_member_image_2.jpg" alt="Team Member 2" class="rounded-full w-32 h-32 mb-4 mx-auto">
                            <h3 class="text-lg font-medium text-gray-800">Jane Smith</h3>
                            <p class="text-gray-500">CTO</p>
                        </div>
                        <div class="text-center">
                            <img src="path_to_team_member_image_3.jpg" alt="Team Member 3" class="rounded-full w-32 h-32 mb-4 mx-auto">
                            <h3 class="text-lg font-medium text-gray-800">Emily Johnson</h3>
                            <p class="text-gray-500">COO</p>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="/contact" class="btn bg-blue-500 hover:bg-blue-600 text-white rounded-full px-6 py-3">Contact Us</a>
                    </div>
                    <!-- About Page Content End -->
                </div>
            </div>
        </div>
    </div>
</section>

<?php
loadPartials("footer");
?>
