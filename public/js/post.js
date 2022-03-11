function scrollSmoothTo(elementId) {
  var element = document.getElementById(elementId);
  element.scrollIntoView({
    block: "start",
    behavior: "smooth"
  });
  // element.hide();
}
$("#hero-card-carousel").owlCarousel({
  // autoplay: true,
  // autoplayTimeout: 2000,
  // smartSpeed: 1170,
  loop: true,
  margin: 30,
  dots: false,
  nav: true,
  items: 1,
  responsive: {
    0: {
      items: 1,
      autoHeight: true,
    },
    768: {
      items: 1,
    },
    980: {
      items: 3,
    },
    1240: {
      items: 1,
    },
  },
});

jQuery("#post_supplement-carousel").owlCarousel({
  autoplay: false,
  rewind: true /* use rewind if you don't want loop */,
  margin: 30,
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
      items: 4,
    },

    1366: {
      items: 4,
    },
  },
});

$(window).scroll(function () {
  var elem = document.getElementById('desktop_toc');
  var bounding = elem.getBoundingClientRect();
  if (
    bounding.bottom <= 0) {
    $('.accordion_section').addClass("sticky");
  } else {
    $('.accordion_section').removeClass("sticky");
  }
})

$("#post_hero-card-carousel").owlCarousel({
  // autoplay: true,
  // autoplayTimeout: 2000,
  // smartSpeed: 1170,
  loop: true,
  margin: 30,
  dots: false,
  nav: true,
  items: 1,
  responsive: {
    0: {
      items: 1,
      autoHeight: true,
    },
    768: {
      items: 1,
    },
    980: {
      items: 3,
    },
    1240: {
      items: 1,
    },
  },
});

jQuery("#post_supplement-carousel").owlCarousel({
  autoplay: false,
  rewind: true /* use rewind if you don't want loop */,
  margin: 30,
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
      items: 4,
    },

    1366: {
      items: 4,
    },
  },
});

$(window).scroll(function () {
  var elem = document.getElementById("desktop_toc");
  var bounding = elem.getBoundingClientRect();
  if (bounding.bottom <= 0) {
    $(".accordion_section").addClass("sticky");
  } else {
    $(".accordion_section").removeClass("sticky");
  }
});

$(".bottom_sheet_button").click(function () {
  $(".bottom_sheet_body").slideToggle("slow");
});