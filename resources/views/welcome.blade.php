<x-layouts.app :title="__('Home')">
    
    <!-- Swiper -->
    <section class="hero-slider hero-style">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slide-inner slide-bg-image"
                        data-background="https://images.unsplash.com/photo-1578934191836-ff5f608c2228?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1349&q=80">
                        <div class="container">
                            <div data-swiper-parallax="300" class="slide-title">
                                <h2>GUITAR CLASSES
                                    FOR KIDS</h2>
                            </div>
                            <div data-swiper-parallax="400" class="slide-text">
                                <p>Want to see your kid become more expressive?</p>
                            </div>
                            <div class="clearfix"></div>
                            <div data-swiper-parallax="500" class="slide-btns">
                                <a href="#" class="theme-btn-s2">Register now</a>
                                <a href="#" class="theme-btn-s3"><i
                                        class="fas fa-chevron-circle-right"></i> Get Info</a>
                            </div>
                        </div>
                    </div>
                    <!-- end slide-inner -->
                </div>
                <!-- end swiper-slide -->

                <div class="swiper-slide">
                    <div class="slide-inner slide-bg-image"
                        data-background="https://images.unsplash.com/photo-1579003087287-997fd4d18771?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80">
                        <div class="container">
                            <div data-swiper-parallax="300" class="slide-title">
                                <h2>GUITAR CLASSES
                                    FOR KIDS</h2>
                            </div>
                            <div data-swiper-parallax="400" class="slide-text">
                                <p>Want to see your kid become more expressive?</p>
                            </div>
                            <div class="clearfix"></div>
                            <div data-swiper-parallax="500" class="slide-btns">
                                <a href="#" class="theme-btn-s2">Register now</a>
                                <a href="#" class="theme-btn-s3"><i
                                        class="fas fa-chevron-circle-right"></i>Get Info</a>
                            </div>
                        </div>
                    </div>
                    <!-- end slide-inner -->
                </div>
                <!-- end swiper-slide -->
            </div>
            <!-- end swiper-wrapper -->

            <!-- swipper controls -->
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>






    <!---about  -->
    <section class="bg-white py-16">
        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-10 items-center">

            <!-- Text Content -->
            <div>
                <h2 class="text-2xl md:text-3xl font-bold mb-4">About US Tax Deals</h2>
                <p class="text-gray-600 mb-6">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                </p>
                <a href="#"
                    class="inline-block px-5 py-2 bg-purple-900 text-white text-sm rounded shadow hover:bg-purple-800 transition">
                    More Details
                </a>
            </div>

            <!-- Image Section -->
            <div class="relative flex justify-center">
                <!-- Background Image (blue chart) -->
                <div
                    class="w-40 h-40 md:w-48 md:h-48 rounded-lg overflow-hidden shadow-lg border-4 border-red-500">
                    <img src="https://via.placeholder.com/200x200?text=Chart" alt="chart"
                        class="w-full h-full object-cover">
                </div>

                <!-- Foreground Image (TAX blocks) -->
                <div
                    class="absolute -bottom-6 -left-6 w-28 h-28 md:w-32 md:h-32 rounded-xl overflow-hidden shadow-xl border-4 border-white bg-white">
                    <img src="https://via.placeholder.com/150x150?text=TAX" alt="tax"
                        class="w-full h-full object-cover">
                </div>
            </div>

        </div>
    </section>


    <!--- tag line -->

    <section
        class="bg-[#042b52] rounded-lg p-8 md:p-12 max-w-5xl mx-auto my-10 flex flex-col md:flex-row items-center justify-between gap-6">

        <!-- Quote -->
        <div
            class="text-white text-center md:text-left text-lg md:text-xl font-semibold leading-relaxed max-w-xl">
            "Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."
        </div>

        <!-- Image -->
        <div class="w-40 h-auto">
            <img src="https://via.placeholder.com/150x250.png?text=Person" alt="Person"
                class="object-cover rounded-md">
        </div>

    </section>
    <!--we offer -->

    <section class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-6">

            <!-- Heading and Description -->
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-10">
                <div>
                    <h2 class="text-3xl font-bold">We Offer</h2>
                    <div class="h-1 w-16 bg-red-500 mt-2 rounded"></div>
                </div>
                <p class="text-gray-600 max-w-xl mt-4 md:mt-0">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                    been the industry's
                    standard dummy text...
                </p>
            </div>

            <!-- Grid Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">

                <!-- Card -->
                <div class="bg-rose-50 p-6 rounded-lg text-center shadow hover:shadow-md transition">
                    <img src="https://via.placeholder.com/100x100?text=Icon1" alt="Icon 1"
                        class="mx-auto mb-4">
                    <h3 class="text-lg font-semibold mb-2">Lorem Ipsum</h3>
                    <p class="text-sm text-gray-600">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry...
                    </p>
                </div>

                <div class="bg-blue-50 p-6 rounded-lg text-center shadow hover:shadow-md transition">
                    <img src="https://via.placeholder.com/100x100?text=Icon2" alt="Icon 2"
                        class="mx-auto mb-4">
                    <h3 class="text-lg font-semibold mb-2">Lorem Ipsum</h3>
                    <p class="text-sm text-gray-600">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry...
                    </p>
                </div>

                <div class="bg-indigo-50 p-6 rounded-lg text-center shadow hover:shadow-md transition">
                    <img src="https://via.placeholder.com/100x100?text=Icon3" alt="Icon 3"
                        class="mx-auto mb-4">
                    <h3 class="text-lg font-semibold mb-2">Lorem Ipsum</h3>
                    <p class="text-sm text-gray-600">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry...
                    </p>
                </div>

                <div class="bg-cyan-50 p-6 rounded-lg text-center shadow hover:shadow-md transition">
                    <img src="https://via.placeholder.com/100x100?text=Icon4" alt="Icon 4"
                        class="mx-auto mb-4">
                    <h3 class="text-lg font-semibold mb-2">Lorem Ipsum</h3>
                    <p class="text-sm text-gray-600">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry...
                    </p>
                </div>

                <div class="bg-pink-50 p-6 rounded-lg text-center shadow hover:shadow-md transition">
                    <img src="https://via.placeholder.com/100x100?text=Icon5" alt="Icon 5"
                        class="mx-auto mb-4">
                    <h3 class="text-lg font-semibold mb-2">Lorem Ipsum</h3>
                    <p class="text-sm text-gray-600">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry...
                    </p>
                </div>

                <div class="bg-amber-50 p-6 rounded-lg text-center shadow hover:shadow-md transition">
                    <img src="https://via.placeholder.com/100x100?text=Icon6" alt="Icon 6"
                        class="mx-auto mb-4">
                    <h3 class="text-lg font-semibold mb-2">Lorem Ipsum</h3>
                    <p class="text-sm text-gray-600">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry...
                    </p>
                </div>

            </div>
        </div>
    </section>


    <!--price -->

    <section class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-6 text-center">

            <!-- Title -->
            <div class="mb-10">
                <h2 class="text-3xl font-bold">Price</h2>
                <div class="h-1 w-16 bg-red-500 mx-auto mt-2 rounded"></div>
            </div>

            <!-- Pricing Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <!-- Starter Plan -->
                <div
                    class="bg-gray-50 border border-gray-200 rounded-xl p-6 shadow-sm flex flex-col justify-between">
                    <div>
                        <h3 class="text-xl font-semibold mb-2">Starter</h3>
                        <p class="text-3xl font-bold mb-1">$19<span class="text-sm font-normal">/month</span>
                        </p>
                        <p class="text-gray-500 mb-4">Perfect for getting started</p>
                        <ul class="space-y-2 text-left text-sm text-gray-700">
                            <li class="flex items-center"><span class="text-blue-600 mr-2">✔</span>10 videos
                                per month</li>
                            <li class="flex items-center"><span class="text-blue-600 mr-2">✔</span>Limited UGC
                                avatars</li>
                            <li class="flex items-center"><span class="text-blue-600 mr-2">✔</span>Unlimited
                                viral hooks</li>
                        </ul>
                    </div>
                    <button class="mt-6 bg-red-500 text-white py-2 rounded-lg hover:bg-red-600 transition">Get
                        Started</button>
                </div>

                <!-- Growth Plan (Popular) -->
                <div
                    class="bg-white border-4 border-blue-500 rounded-xl p-6 shadow-lg relative flex flex-col justify-between">
                    <div>
                        <!-- Popular Badge -->
                        <div
                            class="absolute -top-4 left-1/2 -translate-x-1/2 bg-blue-600 text-white text-xs px-3 py-1 rounded-full font-medium shadow-md">
                            Popular
                        </div>

                        <h3 class="text-xl font-semibold mb-2">Growth</h3>
                        <p class="text-3xl font-bold mb-1">$49<span class="text-sm font-normal">/month</span>
                        </p>
                        <p class="text-gray-500 mb-4">Perfect for growing creators</p>
                        <ul class="space-y-2 text-left text-sm text-gray-700">
                            <li class="flex items-center"><span class="text-blue-600 mr-2">✔</span>50 videos
                                per month</li>
                            <li class="flex items-center"><span class="text-blue-600 mr-2">✔</span>All 50+ UGC
                                avatars</li>
                            <li class="flex items-center"><span class="text-blue-600 mr-2">✔</span>Advanced
                                viral hooks</li>
                        </ul>
                    </div>
                    <button
                        class="mt-6 bg-blue-700 text-white py-2 rounded-lg hover:bg-blue-800 transition">Get
                        Started</button>
                </div>

                <!-- Scale Plan -->
                <div
                    class="bg-gray-50 border border-gray-200 rounded-xl p-6 shadow-sm flex flex-col justify-between">
                    <div>
                        <h3 class="text-xl font-semibold mb-2">Scale</h3>
                        <p class="text-3xl font-bold mb-1">$95<span class="text-sm font-normal">/month</span>
                        </p>
                        <p class="text-gray-500 mb-4">For professional creators</p>
                        <ul class="space-y-2 text-left text-sm text-gray-700">
                            <li class="flex items-center"><span class="text-blue-600 mr-2">✔</span>150 videos
                                per month</li>
                            <li class="flex items-center"><span class="text-blue-600 mr-2">✔</span>All 50+ UGC
                                avatars</li>
                            <li class="flex items-center"><span class="text-blue-600 mr-2">✔</span>Enterprise
                                viral hooks</li>
                        </ul>
                    </div>
                    <button class="mt-6 bg-red-500 text-white py-2 rounded-lg hover:bg-red-600 transition">Get
                        Started</button>
                </div>

            </div>
        </div>
    </section>


    <!-- how us deal-->

    <section class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-6">

            <!-- Heading -->
            <h2 class="text-2xl md:text-3xl font-bold mb-10">
                <span class="border-b-4 border-red-500 pb-1">How US TaxDeals is better then othercompany</span>
            </h2>

            <!-- Icon Grid -->
            <div class="grid grid-cols-2 md:grid-cols-5 gap-8 text-center">

                <!-- Icon 1 -->
                <div class="flex flex-col items-center">
                    <img src="https://img.icons8.com/ios-filled/64/calculator.png" alt="Service 1"
                        class="mb-2">
                    <span class="text-sm text-gray-700">Service 1</span>
                </div>

                <!-- Icon 2 -->
                <div class="flex flex-col items-center">
                    <img src="https://img.icons8.com/ios-filled/64/businessman.png" alt="Service 2"
                        class="mb-2">
                    <span class="text-sm text-gray-700">Service 2</span>
                </div>

                <!-- Icon 3 -->
                <div class="flex flex-col items-center">
                    <img src="https://img.icons8.com/ios-filled/64/museum.png" alt="Service 3"
                        class="mb-2">
                    <span class="text-sm text-gray-700">Service 3</span>
                </div>

                <!-- Icon 4 -->
                <div class="flex flex-col items-center">
                    <img src="https://img.icons8.com/ios-filled/64/globe.png" alt="Service 4" class="mb-2">
                    <span class="text-sm text-gray-700">Service 4</span>
                </div>

                <!-- Icon 5 -->
                <div class="flex flex-col items-center">
                    <img src="https://img.icons8.com/ios-filled/64/investment.png" alt="Service 5"
                        class="mb-2">
                    <span class="text-sm text-gray-700">Service 5</span>
                </div>

            </div>
        </div>
    </section>
    <!-- contact -->
    <section class="bg-[#eaeefe] py-16">
        <div class="max-w-7xl mx-auto px-6">
            <div class="bg-[#c6c7f8] rounded-t-[80px] overflow-hidden relative">

                <!-- Top Content -->
                <div class="grid md:grid-cols-2 items-center px-6 py-12 gap-10 relative z-10">

                    <!-- Left Side -->
                    <div>
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">
                            Lets Get in <span class="text-blue-600">Touch!</span>
                        </h2>
                        <p class="text-gray-700 mb-4">
                            Have a question or need assistance? Reach out to us via email, phone, or the contact
                            form below. We’re
                            eager to assist you.
                        </p>
                        <p class="text-blue-600 font-medium">We love hearing from you!</p>

                        <!-- Image -->
                        <img src="https://via.placeholder.com/300x400?text=Person" alt="Person"
                            class="mt-8 w-full max-w-xs rounded-xl shadow-lg">
                    </div>

                    <!-- Right Side - Form -->
                    <div>
                        <form class="space-y-4">
                            <div>
                                <label class="block mb-1 text-sm font-medium text-gray-700">Full Name</label>
                                <input type="text"
                                    class="w-full border border-blue-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                            </div>
                            <div>
                                <label class="block mb-1 text-sm font-medium text-gray-700">Email</label>
                                <input type="email"
                                    class="w-full border border-blue-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                            </div>
                            <div>
                                <label class="block mb-1 text-sm font-medium text-gray-700">Message</label>
                                <textarea rows="4"
                                    class="w-full border border-blue-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                            </div>
                            <button type="submit"
                                class="bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700 transition">Submit</button>
                        </form>
                    </div>
                </div>

                <!-- Bottom Info -->
                <div class="grid md:grid-cols-2 gap-6 px-6 py-10 bg-[#d4d4f5] text-sm text-gray-800">
                    <!-- Head Office -->
                    <div>
                        <h3 class="font-bold text-lg mb-2">Head Office:</h3>
                        <p>📞 +626723579165</p>
                        <p>📧 uytbooks@gmail.com</p>
                        <p>📍 230B Businessrd Heart, Stockton East</p>
                    </div>

                    <!-- Branch Office -->
                    <div>
                        <h3 class="font-bold text-lg mb-2">Branch Office:</h3>
                        <p>📞 +676723579165</p>
                        <p>📧 sytbranch@gmail.com</p>
                        <p>📍 230B Boulevard Heart, Stockton East</p>
                    </div>
                </div>

            </div>
        </div>
    </section>       
</x-layouts.app>