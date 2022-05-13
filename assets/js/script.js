/**
 *
 * Template Name : Landpagy HTML Landing Template
 * @author
 * @version 1.0.0
 * @package Landpagy
 *
 * */

(function ($) {
  ("use strict");

  //*=============menu sticky js =============*//
  var $window = $(window);
  var didScroll,
    lastScrollTop = 0,
    delta = 5,
    $mainNav = $(".sticky-nav"),
    $body = $("body"),
    $mainNavHeight = $mainNav.outerHeight() + 15,
    scrollTop;

  $window.on("scroll", function () {
    didScroll = true;
    scrollTop = $(this).scrollTop();
  });

  setInterval(function () {
    if (didScroll) {
      if (Math.abs(lastScrollTop - scrollTop) <= delta) {
        return;
      }
      if (scrollTop > lastScrollTop && scrollTop > $mainNavHeight) {
        $mainNav
          .removeClass("fadeInDown")
          .addClass("fadeInUp")
          .css("top", -$mainNavHeight);
        $body.removeClass("remove").addClass("add");
      } else {
        if (scrollTop + $(window).height() < $(document).height()) {
          $mainNav
            .removeClass("fadeInUp")
            .addClass("fadeInDown")
            .css("top", 0)
            .addClass("gap");
          $body.removeClass("add").addClass("remove");
        }
      }
      lastScrollTop = scrollTop;
      didScroll = false;
    }
  }, 200);

  if ($(".sticky-nav").length) {
    $(window).scroll(function () {
      var scroll = $(window).scrollTop();
      if (scroll) {
        $(".sticky-nav").addClass("navbar_fixed");
        $(".sticky-nav-doc .body_fixed").addClass("body_navbar_fixed");
      } else {
        $(".sticky-nav").removeClass("navbar_fixed");
        $(".sticky-nav-doc .body_fixed").removeClass("body_navbar_fixed");
      }
    });
  }

  $(document).ready(function () {
    $(window).scroll(function () {
      if ($(document).scrollTop() > 500) {
        $("body").addClass("test");
      } else {
        $("body").removeClass("test");
      }
    });
  });

  // scrollToTop
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $(".scrollToTop").fadeIn();
    } else {
      $(".scrollToTop").fadeOut();
    }
  });
  //Click event to scroll to top
  $(".scrollToTop").click(function () {
    $("html, body").animate(
      {
        scrollTop: 0,
      },
      800
    );
    return false;
  });

  /*  Menu Click js  */
  function Menu_js() {
    if ($(".submenu").length) {
      $(".submenu > .dropdown-toggle").click(function () {
        var location = $(this).attr("href");
        window.location.href = location;
        return false;
      });
    }
  }
  Menu_js();

  /*--------------- mobile dropdown js--------*/
  function active_dropdown2() {
    $(".menu > li .mobile_dropdown_icon").on("click", function (e) {
      $(this).parent().find("ul").first().slideToggle(300);
      $(this).parent().siblings().find("ul").hide(300);
    });
  }

  active_dropdown2();

  // counter
  if ($(".counter").length) {
    var counter = $(".counter");

    counter.counterUp({
      delay: 20,
      time: 1000,
    });
  }

  if ($("#scroll-container").length) {
    // init controller
    var controller = new ScrollMagic.Controller();

    // define movement of panels
    var wipeAnimation = new TimelineMax().to("#scroll-container", 1, {
      x: "-55%",
    });

    // create scene to pin and link animation
    new ScrollMagic.Scene({
      triggerElement: "#fixedWrapper",
      triggerHook: "onLeave",
      duration: "350%",
    })
      .setPin("#fixedWrapper")
      .setTween(wipeAnimation)
      .addIndicators()
      .addTo(controller);

    var horizontal = new ScrollMagic.Scene({
      offset: 50,
      duration: 300,
      // reverse: false
    })

      // .addIndicators()
      .addTo(controller);
  }

  if ($("#testimonial-2").length) {
    const slider2 = new Swiper("#testimonial-2", {
      slidesPerView: 1,
      spaceBetween: 50,
      centeredSlides: true,

      breakpoints: {
        768: {
          slidesPerView: 2,
        },
      },
    });
  }
  if ($("#testimonial-3").length) {
    const slider3 = new Swiper("#testimonial-3", {
      slidesPerView: 1,
      spaceBetween: 0,
      loop: true,
      breakpoints: {
        768: {
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
        },
      },
    });
  }
  if ($("#user-slider").length) {
    const slider4 = new Swiper("#user-slider", {
      slidesPerView: 1,
      spaceBetween: 0,
      loop: true,
    });
  }
  if ($("#testimonial-5").length) {
    const slider5 = new Swiper("#testimonial-5", {
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        type: "fraction",
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        0: {
          slidesPerView: 1,
          spaceBetween: 10,
        },
        768: {
          slidesPerView: "auto",
          centeredSlides: false,
          spaceBetween: 60,
        },
      },
    });
  }

  if ($(".testimonial-slider-six").length) {
    $(".testimonial-slider-six").slick({
      dots: false,
      arrows: true,
      slidesToShow: 1,
      centerMode: false,
      autoplay: false,
      infinite: true,
      autoplaySpeed: 7000,
      fade: true,
      slidesToScroll: 1,
      prevArrow:
        '<button type="button" class="slick-prev"><i class="arrow_left"></i></button>',
      nextArrow:
        '<button type="button" class="slick-next"><i class="arrow_right"></i></button>',
    });
  }

  if ($("#testimonial-7").length) {
    const slider7 = new Swiper("#testimonial-7", {
      loop: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        0: {
          slidesPerView: 1,
          spaceBetween: 10,
        },
        768: {
          slidesPerView: "auto",
          centeredSlides: false,
          spaceBetween: 60,
        },
      },
    });
  }

  if ($("#testimonial-8").length) {
    const slider8 = new Swiper("#testimonial-8", {
      loop: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        0: {
          slidesPerView: 1,
          spaceBetween: 100,
        },
        768: {
          slidesPerView: "auto",
          centeredSlides: false,
          spaceBetween: 0,
        },
      },
    });
  }

  if ($("#testimonial-9").length) {
    const slider8 = new Swiper("#testimonial-9", {
      loop: true,
      breakpoints: {
        0: {
          slidesPerView: 1,
          spaceBetween: 0,
        },
        768: {
          slidesPerView: "auto",
          centeredSlides: false,
          spaceBetween: -120,
        },
      },
    });
  }

  if ($(".user-slider").length) {
    $(".user-slider").slick({
      dots: true,
      arrows: false,
      slidesToShow: 1,
      centerMode: false,
      autoplay: false,
      infinite: true,
      autoplaySpeed: 7000,
      slidesToScroll: 1,
    });
  }

  $("selecteeeee").niceSelect();

  new WOW().init();

  if ($("#banner_animation").length > 0) {
    $("#banner_animation").parallax({
      scalarX: 10.0,
      scalarY: 0,
    });
  }

  if ($("#faq-area-three").length > 0) {
    $("#faq-area-three").parallax({
      scalarX: 0.0,
      scalarY: 10.0,
    });
  }

  if ($("#feel-the-wave").length) {
    $("#feel-the-wave").wavify({
      height: 80,
      bones: 4,
      amplitude: 90,
      color: "rgba(235,235,182,0.2)",
      speed: 0.15,
    });
  }
  if ($("#feel-the-wave-two").length) {
    $("#feel-the-wave-two").wavify({
      height: 60,
      bones: 3,
      amplitude: 40,
      color: "rgba(220, 212, 188, .3)",
      speed: 0.25,
    });
  }

  //----------------------------
  if ($(".automated-tab ").length) {
    var myTimeout;
    function loop_tab() {
      var elm = $(".automated-tab").find(".active").next();
      if (elm.length) {
        myTimeout = setTimeout(function () {
          new bootstrap.Tab(elm[0]).show();
          loop_tab();
        }, 5000);
      } else {
        myTimeout = setTimeout(function () {
          new bootstrap.Tab($(".automated-tab .nav-link").first()[0]).show();
          loop_tab();
        }, 5000);
      }
    }
    loop_tab();
    $(".automated-tab .nav-link").on("click", function () {
      clearTimeout(myTimeout);
      loop_tab();
    });
  }

  function Custom_Rotate_loop(i) {
    var timeCount = i + 1;
    $(".integreted-app .app").each(function (params) {
      var Trans = $(this).css("transform").split(",");
      var tranlateX = parseInt(Trans[4]);
      var tranlateY = parseInt(Trans[5]);
      $(this).css(
        "transform",
        `translateX(${tranlateX}px) translateY(${tranlateY}px)  rotate(-${
          45 * timeCount
        }deg)`
      );
    });

    $(".integreted-app").css("transform", `rotate(${45 * timeCount}deg)`);
    setTimeout(function () {
      Custom_Rotate_loop(timeCount);
    }, 4500);
  }
  Custom_Rotate_loop(0);
  //----------------------------

  //Tippy JS
  if ($(".marking-point").length) {
    const template = document.getElementById("map");

    tippy(".marking-point", {
      content: template.innerHTML,
      allowHTML: true,
      animation: "scale",
      theme: "tooltip",
      // placement: 'bottom',
    });
  }

  $(".object-element").paroller();
})(jQuery);
