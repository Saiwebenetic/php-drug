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

$("#sub-category-recent-highlight").owlCarousel({
  // autoplay: true,
  // autoplayTimeout: 2000,
  // smartSpeed: 1170,
  stagePadding: 18,
  loop: true,
  margin: 30,
  dots: false,
  nav: true,
  items: 1,
  responsive: {
    0: {
      items: 1,
    },
    768: {
      items: 2,
    },
    980: {
      items: 4,
    },
    1240: {
      items: 3,
    },
  },
});

$("#mobile-grid-show").owlCarousel({
  // autoplay: true,
  // autoplayTimeout: 2000,
  // smartSpeed: 1170,
  loop: true,
  margin: 20,
  dots: false,
  nav: true,
  items: 1,
  responsive: {
    0: {
      items: 1.5,
    },
    768: {
      items: 2,
    },
    980: {
      items: 5,
    },
    1240: {
      items: 3,
    },
  },
});

$("#sub-category-discover-more").owlCarousel({
  // autoplay: true,
  // autoplayTimeout: 2000,
  // smartSpeed: 1170,
  loop: true,
  margin: 20,
  dots: false,
  nav: false,
  items: 1,
  responsive: {
    0: {
      items: 1,
      touchDrag: true,
      mouseDrag: true,
      nav: true,
    },
    768: {
      items: 2,
    },
    980: {
      items: 3,
      touchDrag: false,
      mouseDrag: false,
    },
    1240: {
      items: 3,
      rows: 2,
      touchDrag: false,
      mouseDrag: false,
    },
  },
});