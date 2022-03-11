$(window).scroll(function () {
  if ($(this).scrollTop() > 400) {
  $(".privacy_mob_accordian").addClass("privacy_fixed");
  } else {
  $(".privacy_mob_accordian").removeClass("privacy_fixed");
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