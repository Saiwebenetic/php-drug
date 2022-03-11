$('#card-carousel').owlCarousel({
    //      autoplay: true,
    // autoplayTimeout: 2000,
    // smartSpeed: 1170,
    loop: true,
    margin: 30,
    dots: false,
    nav: true,
    items: 3,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 3
        }
    },

})
$('#hero-card-carousel').owlCarousel({
    // autoplay: true,
    // autoplayTimeout: 2000,
    // smartSpeed: 1170,
    loop: true,
    margin: 30,
    dots: false,
    nav: true,
    items: 1,

})

$('#carousel-navpills').owlCarousel({
    //      autoplay: true,
    // autoplayTimeout: 2000,
    // smartSpeed: 1170,
    loop: true,

    dots: false,
    slideBy: 1,
    nav: true,
    responsive: {
        0: {
            items: 3
        },
        600: {
            items: 3
        },
        1000: {
            items: 8
        }
    },



})

$('#allergie-card-carousel').owlCarousel({
    // autoplay: true,
    // autoplayTimeout: 2000,
    // smartSpeed: 1170,
    loop: true,
    margin: 30,
    dots: false,
    nav: true,
    items: 3,
    touchDrag: false,
    mouseDrag: false,

})