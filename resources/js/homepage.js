$(document).ready(function () {
    // Mobile Menu Toggle
    // $('#menu-toggle').on('click', function () {
    //     console.log('sdhdhdsdhsdj')
    //     $('#mobile-menu').toggleClass('translate-x-full');
    //     $('#overlay').toggleClass('hidden');
    //     $('#hamburger-icon').toggleClass('hidden');
    //     $('#close-icon').toggleClass('hidden');
    // });

    // $('#overlay').on('click', function () {
    //     $('#mobile-menu').addClass('translate-x-full');
    //     $(this).addClass('hidden');
    //     $('#hamburger-icon').removeClass('hidden');
    //     $('#close-icon').addClass('hidden');
    // });

    // Desktop Dropdown
    // $('#desktop-services-toggle').on('click', function (e) {
    //     e.stopPropagation();
    //     $('#desktop-dropdown').toggleClass('hidden opacity-0').toggleClass('opacity-100');
    //     $('#desktop-arrow').toggleClass('rotate-180');
    // });

    // // Mobile Dropdown
    // $('#mobile-services-toggle').on('click', function (e) {
    //     e.stopPropagation();
    //     $('#mobile-dropdown').toggleClass('hidden opacity-0').toggleClass('opacity-100');
    //     $('#mobile-arrow').toggleClass('rotate-180');
    // });

    // Mobile Nested Dropdown
    // $('#mobile-nested-toggle').on('click', function (e) {
    //     e.stopPropagation();
    //     $('#mobile-nested-dropdown').toggleClass('hidden opacity-0').toggleClass('opacity-100');
    //     $('#mobile-nested-arrow').toggleClass('rotate-180');
    // });

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

// Swiper Slider Initialization

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
