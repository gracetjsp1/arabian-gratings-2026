/*--------------------------
    Project Name: Promina
    Version: 1.0
    Author: 7oorof
    Devloped by: Ahmed Abdallah (a.abdallah999@gmail.com)
    Relase Date: June 2020
---------------------------*/
/*---------------------------
      Table of Contents
    --------------------
    01- Pre Loading
    02- Mobile Menu
    03- Sticky Navbar
    04- Search Popup 
    05- Scroll Top Button
    06-  Scroll Top Button
    07- Set Background-img to section 
    08- Add active class to accordions
    09- Load More Items
    10- Slick Carousel
    11- Popup Video
    12- CounterUp
    13- NiceSelect Plugin
    14- portfolio Filtering and Sorting
     
 ----------------------------*/

$(function () {
    "use strict";

    // Global variables
    var $win = $(window);

    /*==========  Pre Loading   ==========*/
    setTimeout(function () {
        $(".preloader").remove();
    }, 2000);

    /*==========   Mobile Menu   ==========*/
    var $navToggler = $(".navbar-toggler");
    $navToggler.on("click", function () {
        $(this).toggleClass("actived");
    });
    $navToggler.on("click", function () {
        $(".navbar-collapse").toggleClass("menu-opened");
    });

    /*==========   Sticky Navbar   ==========*/
    $win.on("scroll", function () {
        if ($win.width() >= 992) {
            var $navbar = $(".sticky-navbar");
            if ($win.scrollTop() > 200) {
                $navbar.addClass("fixed-navbar");
            } else {
                $navbar.removeClass("fixed-navbar");
            }
        }
    });

    /*==========  Search Popup  ==========*/
    $(".search-popup-trigger").on("click", function (e) {
        e.preventDefault();
        $(".search-popup")
            .toggleClass("active", "inActive")
            .removeClass("inActive");
    });
    // Close Module Search
    $(".search__popup-close").on("click", function () {
        $(".search-popup").removeClass("active").addClass("inActive");
    });

    /*==========   Scroll Top Button   ==========*/
    var $scrollTopBtn = $("#scrollTopBtn");
    // Show Scroll Top Button
    $win.on("scroll", function () {
        if ($(this).scrollTop() > 700) {
            $scrollTopBtn.addClass("actived");
        } else {
            $scrollTopBtn.removeClass("actived");
        }
    });
    // Animate Body after Clicking on Scroll Top Button
    $scrollTopBtn.on("click", function () {
        $("html, body").animate(
            {
                scrollTop: 0,
            },
            500
        );
    });

    /*==========   Set Background-img to section   ==========*/
    $(".bg-img").each(function () {
        var imgSrc = $(this).children("img").attr("src");
        $(this)
            .parent()
            .css({
                "background-image": "url(" + imgSrc + ")",
                "background-size": "cover",
                "background-position": "center",
            });
        $(this).parent().addClass("bg-img");
        if ($(this).hasClass("background-size-auto")) {
            $(this).parent().addClass("background-size-auto");
        }
        $(this).remove();
    });

    /*==========   Add active class to accordions   ==========*/
    $(document).ready(function () {
        // Set opened class for the accordion that is open by default
        $(".accordion-item .collapse.show")
            .closest(".accordion-item")
            .addClass("opened");

        $(".accordion__item-header").on("click", function () {
            const item = $(this).closest(".accordion-item");
            const target = $(this).data("target");

            $(".accordion-item").removeClass("opened");

            if (!$(target).hasClass("show")) {
                item.addClass("opened");
            }
        });

        $(".accordion__item-title").on("click", function (e) {
            e.preventDefault();
        });
    });

    // prevent link jump
    $(".accordion__item-title").on("click", function (e) {
        e.preventDefault();
    });

    /*==========   Load More Items  ==========*/
    function loadMore(loadMoreBtn, loadedItem) {
        $(loadMoreBtn).on("click", function (e) {
            e.preventDefault();
            if ($(loadedItem).is(":visible")) {
                $(loadedItem).fadeOut();
                $(this).html("<span>More Products</span><i>+</i>");
            } else {
                $(loadedItem).fadeIn();
                $(this).html("<span>Less Products</span><i>-</i>");
            }
        });
    }

    loadMore(".loadMoreportfolio", ".portfolio-hidden > .portfolio-item");

    /*==========   Slick Carousel ==========*/

    //         // Initialize the main slider
    //         $('.slick-carousel.carousel-arrows-light').slick({
    //             slidesToShow: 1,
    //             arrows: true,
    //             dots: true,
    //             speed: 700,
    //             fade: true,
    //             cssEase: 'linear',
    //             autoplay: true,
    //             autoplaySpeed: 6000 // Auto-play every 6 seconds
    //         });

    //         // Initialize the nested sliders
    //         $('.info__slider .slick-carousel').slick({
    //             slidesToShow: 1,
    //             arrows: false,
    //             dots: true,
    //             autoplay: true,
    //             autoplaySpeed: 6000 // Auto-play every 6 seconds
    //         });

    // /*----------  slick Carousel with Filter  ----------*/
    // $('#slick-filter-buttons .nav__link').on('click', function (e) {
    //     e.preventDefault();
    //     $(this).addClass('active').siblings().removeClass('active');
    //     var key = "." + $(this).data('value');

    //     $('#filter-carousel').slick('slickUnfilter');
    //     $('#filter-carousel').slick('slickFilter', key).slick('refresh');
    //     $('#filter-carousel').slick('slickGoTo', 0);
    // });

    $(".slick-carousel").slick();

    $(".slider-with-navs").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        dots: true,
        asNavFor: ".slider-nav",
    });
    $(".slider-nav").slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        asNavFor: ".slider-with-navs",
        dots: false,
        arrows: false,
        focusOnSelect: true,
        centerMode: true,
        centerPadding: "50px",
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
        ],
    });

    /*----------  slick Carousel with Filter  ----------*/
    $("#slick-filter-buttons .nav__link").on("click", function (e) {
        e.preventDefault();
        $(this).addClass("active").siblings().removeClass("active");
        var key = "." + $(this).data("value");

        $("#filter-carousel").slick("slickUnfilter");
        $("#filter-carousel").slick("slickFilter", key).slick("refresh");
        $("#filter-carousel").slick("slickGoTo", 0);
    });

    /*==========  Popup Video  ==========*/
    $(".popup-video").magnificPopup({
        mainClass: "mfp-fade",
        removalDelay: 0,
        preloader: false,
        fixedContentPos: false,
        type: "iframe",
        iframe: {
            markup:
                '<div class="mfp-iframe-scaler">' +
                '<div class="mfp-close"></div>' +
                '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
                "</div>",
            patterns: {
                youtube: {
                    index: "youtube.com/",
                    id: "v=",
                    src: "//www.youtube.com/embed/%id%?autoplay=1",
                },
            },
            srcAction: "iframe_src",
        },
    });
    $(".popup-gallery-item").magnificPopup({
        type: "image",
        tLoading: "Loading image #%curr%...",
        mainClass: "mfp-img-mobile",
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0, 1],
        },
        image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
        },
    });

    /*==========   counterUp  ==========*/
    $(".counter").counterUp({
        delay: 10,
        time: 4000,
    });

    /*==========  NiceSelect Plugin  ==========*/
    $("select").niceSelect();

    /*==========   portfolio Filtering and Sorting  ==========*/
    // $("#filtered-items-wrap").mixItUp();
    // $(".portfolio-filter li a").on("click", function (e) {
    //   e.preventDefault();
    // });
    /*$(document).ready(function() {
    $('#filtered-items-wrap').mixItUp({
      load: {
        filter: '.filter-gratings' // Set the default filter
      }
    });
  });*/
    $(document).ready(function () {
        // Initialize MixItUp
        $("#filtered-items-wrap").mixItUp({
            load: {
                filter: ".filter-fabrication", // Set the default filter
            },
        });

        // Function to get URL parameters
        function getUrlParameter(name) {
            name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
            var regex = new RegExp("[\\?&]" + name + "=([^&#]*)");
            var results = regex.exec(location.search);
            return results === null
                ? ""
                : decodeURIComponent(results[1].replace(/\+/g, " "));
        }

        // Get the 'filter' parameter from the URL
        var filterParam = getUrlParameter("filter");

        // If a filter parameter exists, apply the corresponding filter
        if (filterParam) {
            var filterSelector = ".filter-" + filterParam;

            // Apply the filter using MixItUp
            $("#filtered-items-wrap").mixItUp("filter", filterSelector);

            // Update the active class on the filter buttons
            $(".portfolio-filter li a").removeClass("active");
            $(
                '.portfolio-filter li a[data-filter="' + filterSelector + '"]'
            ).addClass("active");
        }

        // Prevent default action on filter links
        $(".portfolio-filter li a").on("click", function (e) {
            e.preventDefault();
        });
    });

    var contactForm = $("#contactForm"),
        contactResult = $(".contact-result");
    contactForm.validate({
        debug: false,
        submitHandler: function (contactForm) {
            $(contactResult, contactForm).html("Please Wait...");
            $.ajax({
                type: "POST",
                url: "assets/php/contact.php",
                data: $(contactForm).serialize(),
                timeout: 20000,
                success: function (msg) {
                    $(contactResult, contactForm)
                        .html(
                            '<div class="alert alert-success" role="alert"><strong>Thank you. We will contact you shortly.</strong></div>'
                        )
                        .delay(3000)
                        .fadeOut(2000);
                },
                error: $(".thanks").show(),
            });
            return false;
        },
    });
    // $(document).ready(function () {
    //     $("#openSearch").click(function () {
    //         $("#searchOverlay").fadeIn();
    //         $("#searchInput").focus();
    //     });

    //     $("#closeSearch").click(function () {
    //         $("#searchOverlay").fadeOut();
    //         $("#searchInput").val("");
    //     });
    // });
    $(document).ready(function () {
        $("#openSearch").on("click", function () {
            $("#searchPopup").fadeIn();
            $("#searchPopup input[name='q']").focus();
        });

        $("#closeSearch").on("click", function () {
            $("#searchPopup").fadeOut();
        });

        // Close popup on ESC key
        $(document).on("keyup", function (e) {
            if (e.key === "Escape") {
                $("#searchPopup").fadeOut();
            }
        });
    });

    // Live search on keyup
    // $("#searchInput").on("keyup", function () {
    //     let query = $(this).val();
    //     if (query.length < 2) {
    //         $("#searchResults").html("");
    //         return;
    //     }

    //     $.ajax({
    //         url: searchUrl,
    //         type: "GET",
    //         data: { q: query },
    //         success: function (data) {
    //             renderSearchResults(data);
    //         },
    //     });
    // });

    // Submit form (fallback for full page)
    // $("#searchForm").on("submit", function (e) {
    //     e.preventDefault();
    //     let query = $("#searchInput").val();
    //     if (query.length < 1) return;

    //     $.ajax({
    //         url: searchUrl,
    //         type: "GET",
    //         data: { q: query },
    //         success: function (data) {
    //             renderSearchResults(data);
    //         },
    //     });
    // });

    // function renderSearchResults(data) {
    //     let html = "";

    //     if (data.sub_categories.length > 0) {
    //         html += '<div class="search-group"><h6 class="search-heading">Sub Categories</h6><ul class="search-list">';
    //         data.sub_categories.forEach(function(sub) {
    //             html += `<li><a href="/products/${sub.main_product.slug}/${sub.slug}"><i class="fa fa-folder-open"></i> ${sub.name}</a></li>`;
    //         });
    //         html += '</ul></div>';
    //     }

    //     if (data.sub_sub_categories.length > 0) {
    //         html += '<div class="search-group"><h6 class="search-heading">Products</h6><ul class="search-list">';
    //         data.sub_sub_categories.forEach(function(item) {
    //             html += `<li><a href="/products/${item.sub_category.main_product.slug}/${item.sub_category.slug}/${item.slug}"><i class="fa fa-cube"></i> ${item.name}</a></li>`;
    //         });
    //         html += '</ul></div>';
    //     }

    //     if (!html) {
    //         html = '<div class="search-empty"><p>No results found</p></div>';
    //     }

    //     $("#searchResults").html(html);
    // }
});
