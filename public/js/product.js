jQuery("#carousel").owlCarousel({
  autoplay: false,
  rewind: true /* use rewind if you don't want loop */,
  margin: 10,
  dots: false,
  animateOut: "fadeOut",
  animateIn: "fadeIn",

  responsiveClass: true,
  autoHeight: true,
  // autoplayTimeout: 7000,
  // smartSpeed: 800,
  nav: true,
  responsive: {
    0: {
      items: 1,
    },

    600: {
      items: 3,
    },

    1024: {
      items: 3,
    },

    1366: {
      items: 3,
    },
  },
});
//for mobile view step//
jQuery("#carousel-step").owlCarousel({
  autoplay: false,
  rewind: true /* use rewind if you don't want loop */,
  margin: 10,
  dots: false,
  responsiveClass: true,
  autoHeight: true,
  // autoplayTimeout: 7000,
  // smartSpeed: 800,
  nav: true,
  responsive: {
    0: {
      items: 1,
    },

    600: {
      items: 3,
    },

    1024: {
      items: 3,
    },

    1366: {
      items: 3,
    },
  },
});
//supplement carousel start here
jQuery("#supplement-carousel").owlCarousel({
  autoplay: false,
  rewind: true /* use rewind if you don't want loop */,
  margin: 10,
  dots: false,
  animateOut: "fadeOut",
  animateIn: "fadeIn",

  responsiveClass: true,
  autoHeight: true,
  // autoplayTimeout: 7000,
  // smartSpeed: 800,
  nav: true,
  responsive: {
    0: {
      items: 1.5,
    },

    600: {
      items: 3,
    },

    1024: {
      items: 3,
    },

    1366: {
      items: 3,
    },
  },
});
//VITAMINS CAROUSEL START HERE
jQuery("#vitamins-carousel").owlCarousel({
  autoplay: false,
  rewind: true /* use rewind if you don't want loop */,
  margin: 10,
  dots: false,
  animateOut: "fadeOut",
  animateIn: "fadeIn",

  responsiveClass: true,
  autoHeight: true,
  // autoplayTimeout: 7000,
  // smartSpeed: 800,
  nav: true,
  responsive: {
    0: {
      items: 1.5,
    },

    600: {
      items: 3,
    },

    1024: {
      items: 3,
    },

    1366: {
      items: 3,
    },
  },
});
//DIABETES STARTS HERE
jQuery("#diabetes-carousel").owlCarousel({
  autoplay: false,
  rewind: true /* use rewind if you don't want loop */,
  margin: 10,
  dots: false,
  animateOut: "fadeOut",
  animateIn: "fadeIn",

  responsiveClass: true,
  autoHeight: true,
  // autoplayTimeout: 7000,
  // smartSpeed: 800,
  nav: true,
  responsive: {
    0: {
      items: 1.5,
    },

    600: {
      items: 3,
    },

    1024: {
      items: 3,
    },

    1366: {
      items: 3,
    },
  },
});
/// accordianns
$(document).ready(function () {
  //toggle the component with class accordion_body
  $(".accordion_head").click(function () {
    if ($(".accordion_body").is(":visible")) {
      $(".accordion_body").slideUp(300);
      $(".plusminus").text("+");
    }
    if ($(this).next(".accordion_body").is(":visible")) {
      $(this).next(".accordion_body").slideUp(300);
      $(this).children(".plusminus").text("+");
      $(this).children(".plusminus").css("background-color", "#fcd400");
      $(this).children(".plusminus").css("color", "#000");
    } else {
      $(this).next(".accordion_body").slideDown(300);
      $(this).children(".plusminus").text("-");
      $(this).children(".plusminus").css("background-color", "#022f46");
      $(this).children(".plusminus").css("color", "#fff");
    }
  });
});