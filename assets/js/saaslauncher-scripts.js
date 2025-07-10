(function ($) {
  "use strict";
  //Loading AOS animation with css class

  //fade animation
  $(".saaslauncher-fade-up").attr({
    "data-aos": "fade-up",
  });
  $(".saaslauncher-fade-down").attr({
    "data-aos": "fade-down",
  });
  $(".saaslauncher-fade-left").attr({
    "data-aos": "fade-left",
  });
  $(".saaslauncher-fade-right").attr({
    "data-aos": "fade-right",
  });
  $(".saaslauncher-fade-up-right").attr({
    "data-aos": "fade-up-right",
  });
  $(".saaslauncher-fade-up-left").attr({
    "data-aos": "fade-up-left",
  });
  $(".saaslauncher-fade-down-right").attr({
    "data-aos": "fade-down-right",
  });
  $(".saaslauncher-fade-down-left").attr({
    "data-aos": "fade-down-left",
  });

  //slide animation
  $(".saaslauncher-slide-left").attr({
    "data-aos": "slide-left",
  });
  $(".saaslauncher-slide-right").attr({
    "data-aos": "slide-right",
  });
  $(".saaslauncher-slide-up").attr({
    "data-aos": "slide-up",
  });
  $(".saaslauncher-slide-down").attr({
    "data-aos": "slide-down",
  });

  //zoom animation
  $(".saaslauncher-zoom-in").attr({
    "data-aos": "zoom-in",
  });
  $(".saaslauncher-zoom-in-up").attr({
    "data-aos": "zoom-in-up",
  });
  $(".saaslauncher-zoom-in-down").attr({
    "data-aos": "zoom-in-down",
  });
  $(".saaslauncher-zoom-in-left").attr({
    "data-aos": "zoom-in-left",
  });
  $(".saaslauncher-zoom-in-right").attr({
    "data-aos": "zoom-in-right",
  });
  $(".saaslauncher-zoom-out").attr({
    "data-aos": "zoom-out",
  });
  $(".saaslauncher-zoom-out-up").attr({
    "data-aos": "zoom-out-up",
  });
  $(".saaslauncher-zoom-out-down").attr({
    "data-aos": "zoom-out-down",
  });
  $(".saaslauncher-zoom-out-left").attr({
    "data-aos": "zoom-out-left",
  });
  $(".saaslauncher-zoom-out-right").attr({
    "data-aos": "zoom-out-right",
  });

  //flip animation
  $(".saaslauncher-flip-up").attr({
    "data-aos": "flip-up",
  });
  $(".saaslauncher-flip-down").attr({
    "data-aos": "flip-down",
  });
  $(".saaslauncher-flip-left").attr({
    "data-aos": "flip-left",
  });
  $(".saaslauncher-flip-right").attr({
    "data-aos": "flip-right",
  });

  //animation ease attributes
  $(".saaslauncher-linear").attr({
    "data-aos-easing": "linear",
  });
  $(".saaslauncher-ease").attr({
    "data-aos-easing": "ease",
  });
  $(".saaslauncher-ease-in").attr({
    "data-aos-easing": "ease-in",
  });
  $(".saaslauncher-ease-in-back").attr({
    "data-aos-easing": "ease-in-back",
  });
  $(".saaslauncher-ease-out").attr({
    "data-aos-easing": "ease-out",
  });
  $(".saaslauncher-ease-out-back").attr({
    "data-aos-easing": "ease-out-back",
  });
  $(".saaslauncher-ease-in-out-back").attr({
    "data-aos-easing": "ease-in-out-back",
  });
  $(".saaslauncher-ease-in-shine").attr({
    "data-aos-easing": "ease-in-shine",
  });
  $(".saaslauncher-ease-out-shine").attr({
    "data-aos-easing": "ease-out-shine",
  });
  $(".saaslauncher-ease-in-out-shine").attr({
    "data-aos-easing": "ease-in-out-shine",
  });
  $(".saaslauncher-ease-in-quad").attr({
    "data-aos-easing": "ease-in-quad",
  });
  $(".saaslauncher-ease-out-quad").attr({
    "data-aos-easing": "ease-out-quad",
  });
  $(".saaslauncher-ease-in-out-quad").attr({
    "data-aos-easing": "ease-in-out-quad",
  });
  $(".saaslauncher-ease-in-cubic").attr({
    "data-aos-easing": "ease-in-cubic",
  });
  $(".saaslauncher-ease-out-cubic").attr({
    "data-aos-easing": "ease-out-cubic",
  });
  $(".saaslauncher-ease-in-out-cubic").attr({
    "data-aos-easing": "ease-in-out-cubic",
  });
  $(".saaslauncher-ease-in-quart").attr({
    "data-aos-easing": "ease-in-quart",
  });
  $(".saaslauncher-ease-out-quart").attr({
    "data-aos-easing": "ease-out-quart",
  });
  $(".saaslauncher-ease-in-out-quart").attr({
    "data-aos-easing": "ease-in-out-quart",
  });

  setTimeout(function () {
    AOS.init({
      once: true,
      duration: 1200,
    });
  }, 100);

  $(window).scroll(function () {
    var scrollTop = $(this).scrollTop();
    var saaslauncherStickyMenu = $(".saaslauncher-sticky-menu");
    var saaslauncherStickyNavigation = $(".saaslauncher-sticky-navigation");

    if (saaslauncherStickyMenu.length && scrollTop > 0) {
      saaslauncherStickyMenu.addClass("sticky-menu-enabled saaslauncher-zoom-in-up");
    } else {
      saaslauncherStickyMenu.removeClass("sticky-menu-enabled");
    }
  });
  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 100) {
      jQuery(".saaslauncher-scrollto-top a").addClass("show");
    } else {
      jQuery(".saaslauncher-scrollto-top a").removeClass("show");
    }
  });
  jQuery(".saaslauncher-scrollto-top a").click(function () {
    jQuery("html, body").animate({ scrollTop: 0 }, 600);
    return false;
  });

  jQuery(document).ready(function ($) {
    var $nav = $(".is-style-saaslauncher-sticky-navigation");
    var offset = $nav.offset().top;

    $(window).on("scroll", function () {
      if ($(window).scrollTop() > offset) {
        $nav.addClass("sticky-enabled"); // Add sticky class
      } else {
        $nav.removeClass("sticky-enabled"); // Remove sticky class
      }
    });
  });
})(jQuery);
