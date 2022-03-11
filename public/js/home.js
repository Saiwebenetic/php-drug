$("#owl-carousel").owlCarousel({
  loop: true,
  margin: 30,
  dots: false,
  nav: true,
  items: 1,
});

$(".owl-carousel-header").owlCarousel({
  loop: true,
  margin: 0,
  nav: true,
  dots: false,

  autowidth: true,
  autoheight: true,
  responsive: {
    0: {
      items: 3,
    },
    600: {
      items: 3,
    },
    1000: {
      items: 3,
    },
  },
});

$("#home-second-owl-mobile").owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  dots: false,
  responsive: {
    0: {
      items: 1.9,
    },
    600: {
      items: 2,
    },
    1000: {
      items: 2,
    },
  },
});

$("#carousel-navpills").owlCarousel({
  //      autoplay: true,
  // autoplayTimeout: 2000,
  // smartSpeed: 1170,
  loop: true,
  //  margin: 30,
  dots: false,
  nav: true,
  items: 1,
  margin: 20,

});

$("#second-owl-mobile-carousel-for-blog").owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  dots: false,
  responsive: {
    0: {
      items: 2,
    },
    600: {
      items: 3,
    },
    1000: {
      items: 5,
    },
  },
});

$("#second-owl-mobile-carousel-for-CTA").owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  dots: false,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 3,
    },
    1000: {
      items: 5,
    },
  },
});

$(function () {
  var owl = $("#section4-owl-mobile"),
    owlOptions = {
      loop: true,
      margin: 20,
      nav: false,
      dots: false,
      touchDrag: false,
      mouseDrag: false,
      responsive: {
        0: {
          items: 1.5,
          touchDrag: true,
          mouseDrag: true,
        },
        600: {
          items: 3,
        },
        1000: {
          items: 3,
        },
      },
    };

  if ($(window).width() < 768) {
    var owlActive = owl.owlCarousel(owlOptions);
  } else {
    owl.addClass("off");
  }

  $(window).resize(function () {
    if ($(window).width() < 768) {
      if ($(".owl-carousel").hasClass("off")) {
        var owlActive = owl.owlCarousel(owlOptions);
        owl.removeClass("off");
      }
    } else {
      if (!$(".owl-carousel").hasClass("off")) {
        owl.addClass("off").trigger("destroy.owl.carousel");
        owl.find(".owl-stage-outer").children(":eq(0)").unwrap();
      }
    }
  });
});

$("#home_button_slider").owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  dots: false,
  responsive: {
    0: {
      items: 3,
    },
    600: {
      items: 3,
    },
    1000: {
      items: 5,
    },
  },
});