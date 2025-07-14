<x-layouts.app :title="__('Home')">
    
    <!-- Swiper -->
  <section class="hero-slider hero-style overflow-hidden">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <!-- slide-start -->
        <div class="swiper-slide">
          <div class="slide-inner slide-bg-image" data-background="images/slider1.svg">
            <div class="container">
              <div data-swiper-parallax="300" class="slide-title">
                <h2 class="text-base md:text-2xl">Lorem ipsome</h2>
              </div>

              <div class="clearfix"></div>
              <div data-swiper-parallax="500" class="slide-btns">
                <button class="mt-6 bg-secondary text-white rounded-full cursor-pointer hover:bg-primary transition px-5 py-2">Register
                  now</button>
              </div>
            </div>
          </div>
          
        </div>
        <!-- end swiper-slide -->

        <!-- start slide-inner -->
        <div class="swiper-slide">
          <div class="slide-inner slide-bg-image" data-background="images/slide2.jpg">
            <div class="container">
              <div data-swiper-parallax="300" class="slide-title">
                <h2>Lorem Ipsome</h2>
              </div>

              <div class="clearfix"></div>
              <div data-swiper-parallax="500" class="slide-btns">
                <button class="mt-6 bg-secondary text-white rounded-full cursor-pointer hover:bg-primary transition px-5 py-2">Register
                  now</button>
              </div>
            </div>
          </div>
          
        </div>
        <!-- end swiper-slide -->

        <!-- start slide-inner -->
        <div class="swiper-slide">
          <div class="slide-inner slide-bg-image" data-background="images/slide3.jpg">
            <div class="container">
              <div data-swiper-parallax="300" class="slide-title">
                <h2>Lorem Ipsome</h2>
              </div>

              <div class="clearfix"></div>
              <div data-swiper-parallax="500" class="slide-btns">
                <button class="mt-6 bg-secondary text-white rounded-full cursor-pointer hover:bg-primary transition px-5 py-2">Register
                  now</button>
              </div>
            </div>
          </div>
          
        </div>
        <!-- end swiper-slide -->


        <!-- start slide-inner -->
        <div class="swiper-slide">
          <div class="slide-inner slide-bg-image" data-background="images/slide4.jpg">
            <div class="container">
              <div data-swiper-parallax="300" class="slide-title">
                <h2>Lorem Ipsome</h2>
              </div>

              <div class="clearfix"></div>
              <div data-swiper-parallax="500" class="slide-btns">
                <button class="mt-6 bg-secondary text-white rounded-full cursor-pointer hover:bg-primary transition px-5 py-2">Register
                  now</button>
              </div>
            </div>
          </div>
          
        </div>
        <!-- end swiper-slide -->

        <!-- start slide-inner -->
        <div class="swiper-slide">
          <div class="slide-inner slide-bg-image" data-background="images/slide5.jpg">
            <div class="container">
              <div data-swiper-parallax="300" class="slide-title">
                <h2>Lorem Ipsome</h2>
              </div>

              <div class="clearfix"></div>
              <div data-swiper-parallax="500" class="slide-btns">
                <button class="mt-6 bg-secondary text-white rounded-full cursor-pointer hover:bg-primary transition px-5 py-2">Register
                  now</button>
              </div>
            </div>
          </div>
          
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
  <section class="bg-white py-6 md:py-16 container" >
    <div class=" grid md:grid-cols-2 gap-10 items-center">

      <!-- Text Content -->
      <div data-aos="fade-left">
        <div class="mb-6">
          <h2 class="text-xl md:text-3xl font-500 mb-4">About US Tax Deals</h2>
          <div class="h-1 w-16 bg-red-500 mt-2 rounded"></div>
        </div>

        <p class="text-gray-600 text-base md:text-lg mb-6">
          We specialize in affordable tax preparation services, individual tax filing, small business tax filing, and federal and state tax return services across the United States. Our mission is to simplify your tax filing experience while ensuring you receive maximum eligible refunds and remain IRS-compliant at every step.
        </p>
          <p class="text-gray-600 text-base md:text-lg mb-6">
        Our work is thorough, personalized, and transparent. We take the time to review your tax documents carefully, identify potential deductions and credits, and explain your filings clearly, so you feel confident and informed. Whether you need self-employed tax filing, tax planning, or IRS audit support, we are here to help you every step of the way.
        </p>
        <p class="text-gray-600 text-base md:text-lg mb-6">
        At US Tax Deals, we are committed to ethical practices, accurate tax preparation, and customer-focused service. We handle your taxes with care so you can focus on what truly matters, knowing your financial future is in safe, responsible hands.
        </p>
        <p class="text-gray-600 text-base md:text-lg mb-6">
        Contact us today to experience stress-free, affordable tax filing with a team that values your trust.
        </p>
        <a href="#"
          class="mt-6 bg-secondary text-white  rounded-full cursor-pointer hover:bg-primary transition px-5 py-2">
          More Details
        </a>
      </div>

      <!-- Image Section -->
      <div class="relative flex justify-center" data-aos="fade-right">
        <!-- Background Image (blue chart) -->
        <div class="w-40 h-40 md:w-[350px] md:h-[350px] rounded-lg overflow-hidden shadow-lg border-4 border-red-500">
          <img src="images/aboutus.svg" alt="chart" class="w-full h-full object-cover">
        </div>

        <!-- Foreground Image (TAX blocks) -->
        <div
          class="absolute -bottom-6 md:-left-6 w-28 h-28 md:w-[200px] md:h-[200px] rounded-xl overflow-hidden shadow-xl border-4 border-white bg-white">
          <img src="images/aboutus1.svg" alt="tax" class="w-full h-full object-cover">
        </div>
      </div>

    </div>
  </section>


  <!--- tag line -->

  <section class=" parallax-section bg-fixed bg-cover bg-center bg-no-repeat bg-body-img  container flex items-center justify-center mx-auto mt-6 md:mt-0">
    <div class="glass flex flex-col md:flex-row items-center justify-between gap-6 rounded-lg  m-10 md:m-32 max-w-[50%]">
      <!-- Quote -->
      <div class="text-white text-center text-lg  md:text-3xl font-semibold leading-relaxed">
        “We deliver expert tax filing with personalized, year-round support and smart, experienced guidance — ensuring maximum refunds and complete peace of mind, all at rates that make high-quality tax preparation truly affordable for individuals, families, and small businesses.”
      </div>

      <!-- Image -->
      <!-- <div class="-mt-48">
        <img src="images/tag.svg" alt="Person" class="object-cover rounded-md w-[80%]">
      </div>
    </div> -->
  </section>
  <!--we offer -->

  <section class="py-6 md:py-16 container">
    <div class="container">

      <!-- Heading and Description -->
      <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-10">
        <div>
          <h2 class="text-xl md:text-3xl font-500 mb-4">We Offer</h2>
          <div class="h-1 w-16 bg-red-500 mt-2 rounded"></div>
        </div>
        <p class="text-gray-600 text-base md:text-lg max-w-xl mt-4 md:mt-0">
          Explore our range of expert tax services designed to make filing easy, accurate, and affordable for individuals and businesses.
        </p>
      </div>

      <!-- Grid Cards -->
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">

        <!-- Card -->
        <div class="bg-rose-50 p-6 rounded-lg text-center shadow-lg transform hover:-translate-y-2 hover:scale-105 transition-all duration-300">
          <img src="images/we_offer.svg" alt="Icon 1" class="mx-auto mb-4">
          <h3 class="text-lg font-semibold mb-2">Federal and State Tax Filing</h3>
          <p class="text-sm md:text-base text-gray-600">
           Easy and accurate federal and state tax filing to ensure you get your maximum refund while staying fully compliant.
          </p>
        </div>

        <div class="bg-blue-50 p-6 rounded-lg text-center shadow-lg transform hover:-translate-y-2 hover:scale-105 transition-all duration-300">
          <img src="images/we_offer1.svg" alt="Icon 2" class="mx-auto mb-4">
          <h3 class="text-lg font-semibold mb-2">Business Tax Filing</h3>
          <p class="text-sm md:text-base text-gray-600">
            Expert business tax filing services for LLCs, corporations, and sole proprietors, ensuring accurate returns and smart savings.
          </p>
        </div>

        <div class="bg-indigo-50 p-6 rounded-lg text-center shadow-lg transform hover:-translate-y-2 hover:scale-105 transition-all duration-300">
          <img src="images/we_offer2.svg" alt="Icon 3" class="mx-auto mb-4">
          <h3 class="text-lg font-semibold mb-2">FBAR & FATCA Processing</h3>
          <p class="text-sm md:text-base text-gray-600">
            Stay compliant with streamlined FBAR filing and FATCA reporting for your foreign bank accounts and investments.
          </p>
        </div>

        <div class="bg-cyan-50 p-6 rounded-lg text-center shadow-lg transform hover:-translate-y-2 hover:scale-105 transition-all duration-300">
          <img src="images/we_offer3.svg" alt="Icon 4" class="mx-auto mb-4">
          <h3 class="text-lg font-semibold mb-2">TIN Processing Services</h3>
          <p class="text-sm md:text-base text-gray-600">
           Fast and reliable ITIN application and renewal services to help you file taxes without a Social Security Number.
          </p>
        </div>

        <div class="bg-pink-50 p-6 rounded-lg text-center shadow-lg transform hover:-translate-y-2 hover:scale-105 transition-all duration-300">
          <img src="images/we_offer4.svg" alt="Icon 5" class="mx-auto mb-4">
          <h3 class="text-lg font-semibold mb-2">Tax Representation Services</h3>
          <p class="text-sm md:text-base text-gray-600">
            Professional tax representation before the IRS and state tax authorities to resolve notices, audits, and tax issues confidently.
          </p>
        </div>

        <div class="bg-amber-50 p-6 rounded-lg text-center shadow-lg transform hover:-translate-y-2 hover:scale-105 transition-all duration-300">
          <img src="images/we_offer5.svg" alt="Icon 6" class="mx-auto mb-4">
          <h3 class="text-lg font-semibold mb-2">Indian Tax Filing</h3>
          <p class="text-sm md:text-base text-gray-600">
            Simplified Indian income tax filing for NRIs and residents, ensuring compliance and accurate reporting of your Indian income.
          </p>
        </div>

        <div class="bg-rose-50 p-6 rounded-lg text-center shadow-lg transform hover:-translate-y-2 hover:scale-105 transition-all duration-300">
          <img src="images/we_offer.svg" alt="Icon 1" class="mx-auto mb-4">
          <h3 class="text-lg font-semibold mb-2">Advanced Tax Planning Services</h3>
          <p class="text-sm md:text-base text-gray-600">
           Personalized tax planning strategies to reduce your tax liability and help you plan ahead for a stronger financial future.
          </p>
        </div>

      </div>
    </div>
  </section>


  <!--price -->

  <section class=" py-6 md:py-16 bg-white " data-aos="fade-right">
    <div class="container">

      <!-- Title -->
       <div class="mb-6">
          <h2 class="text-xl md:text-3xl font-500 mb-4">Price</h2>
          <div class="h-1 w-16 bg-red-500 mt-2 rounded"></div>
        </div>


      <!-- Pricing Cards -->
      <div class="md:flex items-center gap-6">

        <!-- Starter Plan -->
        <div class="w-full bg-gray-50 border border-gray-200 rounded-3xl p-6 shadow-sm flex flex-col justify-between mb-4 md:mb-0">
          <div>
            <h3 class=" text-xl md:text-2xl font-semibold mb-2 text-center">Starter</h3>
            <p class="text-xl md:text-2xl font-bold mb-1">$19<span class="text-sm font-normal">/month</span></p>
            <p class="text-sm md:text-base text-gray-500 mb-4 border-b border-gray pb-3">Perfect for getting started</p>
            <ul class="space-y-2 text-left text-sm text-black">
              <li class="flex items-center"><span class="text-blue-600 mr-2">✔</span>10 videos per month</li>
              <li class="flex items-center"><span class="text-blue-600 mr-2">✔</span>Limited UGC avatars</li>
              <li class="flex items-center"><span class="text-blue-600 mr-2">✔</span>Unlimited viral hooks</li>
            </ul>
          </div>
          <button class="mt-6 bg-secondary text-white py-2 rounded-full cursor-pointer hover:bg-primary transition">Get Started</button>
        </div>

        <!-- Growth Plan (Popular) -->
        <div class="w-full bg-white border-4 border-blue-500 rounded-3xl p-6 shadow-lg min-h-[380px] relative flex flex-col justify-between mb-4 md:mb-0">
          <div>
            <!-- Popular Badge -->
            <div
              class="absolute -top-4 left-1/2 -translate-x-1/2 bg-blue-600 text-white text-xs px-3 py-1 rounded-full font-medium shadow-md">
              Popular
            </div>

            <h3 class="text-xl md:text-3xl font-semibold mb-2 text-center">Growth</h3>
            <p class="text-xl md:text-3xl font-bold mb-1">$49<span class="text-base font-normal">/month</span></p>
            <p class="text-sm md:text-base text-gray-500 mb-4 border-b border-primary pb-3">Perfect for growing creators</p>
            <ul class="space-y-2 text-left text-base text-black">
              <li class="flex items-center"><span class="text-blue-600 mr-2">✔</span>50 videos per month</li>
              <li class="flex items-center"><span class="text-blue-600 mr-2">✔</span>All 50+ UGC avatars</li>
              <li class="flex items-center"><span class="text-blue-600 mr-2">✔</span>Advanced viral hooks</li>
            </ul>
          </div>
          <button class="mt-6 bg-primary text-white py-2 rounded-full cursor-pointer hover:bg-secondary transition">Get Started</button>
        </div>

        <!-- Scale Plan -->
        <div class="w-full bg-gray-50 border border-gray-200 rounded-3xl p-6 shadow-sm flex flex-col justify-between mb-4 md:mb-0">
          <div>
            <h3 class="text-xl md:text-2xl font-semibold mb-2 text-center">Scale</h3>
            <p class="text-xl md:text-2xl font-bold mb-1">$95<span class="text-sm font-normal">/month</span></p>
            <p class="text-sm md:text-base text-gray-500 mb-4 border-b border-gray pb-3">For professional creators</p>
            <ul class="space-y-2 text-left text-sm text-black">
              <li class="flex items-center"><span class="text-blue-600 mr-2">✔</span>150 videos per month</li>
              <li class="flex items-center"><span class="text-blue-600 mr-2">✔</span>All 50+ UGC avatars</li>
              <li class="flex items-center"><span class="text-blue-600 mr-2">✔</span>Enterprise viral hooks</li>
            </ul>
          </div>
          <button class="mt-6 bg-secondary text-white py-2 rounded-full cursor-pointer hover:bg-primary transition">Get Started</button>
        </div>

      </div>
    </div>
  </section>


  <!-- how us deal-->

  <section class="py-6 md:py-16 bg-white " >
    <div class="container">

      <!-- Heading -->
      <div class="mb-4 md:mb-16">
        <h2 class="text-xl md:text-3xl font-500 mb-4">How US TaxDeals is better then othercompany</h2>
        <div class="h-1 w-16 bg-red-500 mt-2 rounded"></div>
      </div>


      <!-- Icon Grid -->
      <div class="grid grid-cols-2 md:grid-cols-5 gap-2 md:gap-8 text-center">

        <!-- Icon 1 -->
        <div class="flex flex-col items-center border border-transparent hover:border-red-500 hover:shadow-md transform hover:scale-105 transition-all duration-300 rounded-xl p-4 hover:bg-red-50" data-aos="zoom-in">
          <img src="images/how_us.svg" alt="Service 1" class="w-10 md:w-20 mb-2">
          <span class="text-sm md:text-base text-black">Affordable Rates</span>
        </div>

        <!-- Icon 2 -->
        <div class="flex flex-col items-center border border-transparent hover:border-red-500 hover:shadow-md transform hover:scale-105 transition-all duration-300 rounded-xl p-4 hover:bg-red-50" data-aos="zoom-in">
          <!-- <img src="images/how_us1.svg" alt="Service 2" class="w-20 md:w-30 mb-2"> -->
          <p class="text-4xl font-bold w-10 md:w-20 h-10 md:h-20 mb-2 counter" data-target="1000">0</p>
          <span class="text-sm md:text-base text-black">Trusted Clients </span>
        </div>

        <!-- Icon 3 -->
        <div class="flex flex-col items-center border border-transparent hover:border-red-500 hover:shadow-md transform hover:scale-105 transition-all duration-300 rounded-xl p-4 hover:bg-red-50" data-aos="zoom-in">
          <img src="images/how_us2.svg" alt="Service 3" class=" w-10 md:w-20 mb-2">
          <span class="text-sm md:text-base text-black">Expert Guidance </span>
        </div>

        <!-- Icon 4 -->
        <div class="flex flex-col items-center border border-transparent hover:border-red-500 hover:shadow-md transform hover:scale-105 transition-all duration-300 rounded-xl p-4 hover:bg-red-50" data-aos="zoom-in">
          <img src="images/how_us3.svg" alt="Service 4" class="w-10 md:w-20 mb-2">
          <span class="text-sm md:text-base text-black">Maximum Refunds</span>
        </div>

        <!-- Icon 5 -->
        <div class="flex flex-col items-center border border-transparent hover:border-red-500 hover:shadow-md transform hover:scale-105 transition-all duration-300 rounded-xl p-4 hover:bg-red-50" data-aos="zoom-in">
          <img src="images/how_us4.svg" alt="Service 5" class=" w-10 md:w-20 mb-2">
          <span class="text-sm md:text-base text-black">24/7 Support</span>
        </div>

      </div>
    </div>
  </section>
  <!-- contact -->
  <section class="bg-contact">
    <div class="container">
     

        <!-- Top Content -->
        <div class="grid md:grid-cols-2 text-black gap-10 relative z-10  py-6 md:py-16">

          <!-- Left Side -->
          <div>
            <h2 class="text-xl mdtext-3xl font-bold  mb-4">
              Lets Get in <span class="text-secondary">Touch!</span>
            </h2>
            <p class="text-primary font-medium">Have a question or need assistance?</p>
            <p class=" mb-4">
               Let’s get in touch with US Tax Deals. We’re here to provide easy, affordable, and expert tax filing help for individuals and businesses. Just fill out the form, and one of our friendly team members will get back to you soon.
            </p>
            

          </div>

          <!-- Right Side - Form -->
          <div>
            <form class="space-y-4">
              <div>
                <label class="block mb-1 text-sm font-medium text-black">Full Name</label>
                <input type="text"
                  class="w-full border border-primary rounded-lg px-4 py-2 focus:outline-none focus:ring-1 focus:ring-primary" />
              </div>
              <div class="grid grid-cols-2 gap-2">
              <div>
                <label class="block mb-1 text-sm font-medium text-black">Email</label>
                <input type="email"
                  class="w-full border border-primary rounded-lg px-4 py-2 focus:outline-none focus:ring-1 focus:ring-primary" />
              </div>
              <div>
                <label class="block mb-1 text-sm font-medium text-black">Mobile</label>
                <input type="email"
                  class="w-full border border-primary rounded-lg px-4 py-2 focus:outline-none focus:ring-1 focus:ring-primary" />
              </div>
              </div>
              <div>
                <label class="block mb-1 text-sm font-medium text-black">Message</label>
                <textarea rows="4"
                  class="w-full border border-primary rounded-lg px-4 py-2 focus:outline-none focus:ring-1 focus:ring-primary"></textarea>
              </div>
              <button type="submit"
                class="mt-6 bg-secondary text-white rounded-full cursor-pointer hover:bg-primary transition px-5 py-2">Submit</button>
            </form>
          </div>
        </div>

        <!-- Bottom Info -->
        <!-- <div class="grid md:grid-cols-2 gap-6 px-6 py-10 bg-[#d4d4f5] text-sm text-gray-800">
          
          <div>
            <h3 class="font-bold text-lg mb-2">Head Office:</h3>
            <p>📞 +626723579165</p>
            <p>📧 uytbooks@gmail.com</p>
            <p>📍 230B Businessrd Heart, Stockton East</p>
          </div>

          
          <div>
            <h3 class="font-bold text-lg mb-2">Branch Office:</h3>
            <p>📞 +676723579165</p>
            <p>📧 sytbranch@gmail.com</p>
            <p>📍 230B Boulevard Heart, Stockton East</p>
          </div>
        </div> -->

    </div>
  </section>  
</x-layouts.app>