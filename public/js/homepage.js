  $(document).ready(function () {
      // Mobile Menu Toggle
      $('#menu-toggle').on('click', function () {
        $('#mobile-menu').toggleClass('translate-x-full');
        $('#overlay').toggleClass('hidden');
        $('body').toggleClass('overflow-hidden');
      });

      $('#overlay').on('click', function () {
        $('#mobile-menu').addClass('translate-x-full');
        $(this).addClass('hidden');
      });



      // Close sidebar from inside button
      $(document).on('click', '.close-sidebar', function () {
        $('#mobile-menu').addClass('translate-x-full');
        $('#overlay').addClass('hidden');
      });
      // Generic dropdown toggle
      $(document).on('click', '.dropdown-toggle', function (e) {
        e.stopPropagation();

        const $toggle = $(this);
        const $panel = $toggle.next('.dropdown-panel');
        const $icon = $toggle.find('.icon');

        // Close all other dropdowns at same level
        const $siblings = $toggle.closest('.dropdown').siblings('.dropdown');
        $siblings.find('.dropdown-panel').addClass('hidden');
        $siblings.find('.icon').removeClass('rotate-180');

        // Toggle current dropdown
        $panel.toggleClass('hidden');
        $icon.toggleClass('rotate-180');
      });

      // Close all dropdowns on click outside
      $(document).on('click', function () {
        $('.dropdown-panel').addClass('hidden');
        $('.icon').removeClass('rotate-180');
      });

      // Close on ESC
      $(document).on('keydown', function (e) {
        if (e.key === 'Escape') {
          $('.dropdown-panel').addClass('hidden');
          $('.icon').removeClass('rotate-180');
        }
      });



      // Close dropdowns on outside click
      $(document).on('click', function (e) {
        if (!$(e.target).closest('#desktop-services-wrapper').length) {
          $('#desktop-dropdown').addClass('hidden opacity-0').removeClass('opacity-100');
          $('#desktop-arrow').removeClass('rotate-180');
        }
        if (!$(e.target).closest('#mobile-services-wrapper').length) {
          $('#mobile-dropdown').addClass('hidden opacity-0').removeClass('opacity-100');
          $('#mobile-arrow').removeClass('rotate-180');
        }
        if (!$(e.target).closest('#mobile-nested-wrapper').length) {
          $('#mobile-nested-dropdown').addClass('hidden opacity-0').removeClass('opacity-100');
          $('#mobile-nested-arrow').removeClass('rotate-180');
        }
      });

      // ESC key closes all
      $(document).on('keydown', function (e) {
        if (e.key === "Escape") {
          $('#desktop-dropdown').addClass('hidden opacity-0').removeClass('opacity-100');
          $('#desktop-arrow').removeClass('rotate-180');

          $('#mobile-dropdown').addClass('hidden opacity-0').removeClass('opacity-100');
          $('#mobile-arrow').removeClass('rotate-180');

          $('#mobile-nested-dropdown').addClass('hidden opacity-0').removeClass('opacity-100');
          $('#mobile-nested-arrow').removeClass('rotate-180');

          $('#mobile-menu').addClass('translate-x-full');
          $('#overlay').addClass('hidden');
          $('#hamburger-icon').removeClass('hidden');
          $('#close-icon').addClass('hidden');
        }
      });
    });

    // Swiper Initialization

    var menu = [];
    jQuery('.swiper-slide').each(function (index) {
      menu.push(jQuery(this).find('.slide-inner').attr("data-text"));
    });
    var interleaveOffset = 0.5;
    var swiperOptions = {
      loop: true,
      speed: 1000,
      parallax: true,
      autoplay: {
        delay: 6500,
        disableOnInteraction: false,
      },
      watchSlidesProgress: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },

      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },

      on: {
        progress: function () {
          var swiper = this;
          for (var i = 0; i < swiper.slides.length; i++) {
            var slideProgress = swiper.slides[i].progress;
            var innerOffset = swiper.width * interleaveOffset;
            var innerTranslate = slideProgress * innerOffset;
            swiper.slides[i].querySelector(".slide-inner").style.transform =
              "translate3d(" + innerTranslate + "px, 0, 0)";
          }
        },

        touchStart: function () {
          var swiper = this;
          for (var i = 0; i < swiper.slides.length; i++) {
            swiper.slides[i].style.transition = "";
          }
        },

        setTransition: function (speed) {
          var swiper = this;
          for (var i = 0; i < swiper.slides.length; i++) {
            swiper.slides[i].style.transition = speed + "ms";
            swiper.slides[i].querySelector(".slide-inner").style.transition =
              speed + "ms";
          }
        }
      }
    };

    var swiper = new Swiper(".swiper-container", swiperOptions);

    // DATA BACKGROUND IMAGE
    var sliderBgSetting = $(".slide-bg-image");
    sliderBgSetting.each(function (indx) {
      if ($(this).attr("data-background")) {
        $(this).css("background-image", "url(" + $(this).data("background") + ")");
      }
    });

    AOS.init({
    duration: 1000,
    once: true
  });


  //counter

    const counters = document.querySelectorAll('.counter');

    const observer = new IntersectionObserver((entries, obs) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const counter = entry.target;
          const updateCount = () => {
            const target = +counter.getAttribute('data-target');
            const count = +counter.innerText;
            const speed = 200; // smaller is faster
            const increment = Math.ceil(target / speed);

            if (count < target) {
              counter.innerText = count + increment;
              setTimeout(updateCount, 20);
            } else {
              counter.innerText = target;
            }
          };

          updateCount();
          obs.unobserve(counter); // run only once
        }
      });
    }, { threshold: 0.6 });

    counters.forEach(counter => observer.observe(counter));