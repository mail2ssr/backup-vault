//slider testimonials start

$('.slider-testimonials').slick({
    infinite: true,
    slidesToShow: 3,
    prevArrow: $(".customprev"),
    nextArrow: $(".customnext"),
    autoplaySpeed: 1000,
    dots: true,
    slidesToScroll: 1,
    responsive: [{
        breakpoint: 991,
        settings: {
            slidesToShow: 2,
            dots: true,
            arrows: true,
            slidesToScroll: 1
        }
    },

    {
        breakpoint: 768,
        settings: {
            slidesToShow: 1,
            dots: true,
            arrows: true,
            slidesToScroll: 1
        }
    },

    ]


});

on('setPosition', function (event, slick) {
    slick.$slides.css('height', slick.$slideTrack.height() + 'px');
});





//slider testimonials end

