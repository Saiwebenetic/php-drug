  $('#aboutus-owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    dots: false,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 3
      },
      1000: {
        items: 5
      }
    }
  })

  $(window).scroll(function() {
    if ($(this).scrollTop() > 300) {
      $(".stick_to_top").addClass("fixed");
    } else {
      $(".stick_to_top").removeClass("fixed");
    }
  });

  $(window).scroll(function() {
    if ($(this).scrollTop() > 300) {
      $(".stick_to_top_for_mob").addClass("mob_fixed");
    } else {
      $(".stick_to_top_for_mob").removeClass("mob_fixed");
    }
  });

  function scrollSmoothTo(elementId) {
    var element = document.getElementById(elementId);
    element.scrollIntoView({
      block: "start",
      behavior: "smooth"
    });
    // element.hide();
  }