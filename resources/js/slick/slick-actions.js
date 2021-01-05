$(document).ready(function(){

    // First Slider init function
    function sliderInit1() {
        $(".slick-actions").slick({
            autoplay: true,
            autoplaySpeed: 3000,
            dots: true,
            infinite: true,
            slidesToShow: slides,
            slidesToScroll: scroll,
            prevArrow: $(".prev1"),
            nextArrow: $(".next1"),
        });
    }            

    // Function set number of slides based on screen width
    function setSlides(width) {
        var slides = 2;
        var scroll = 1;
        if(width < 350) {slides = 1; scroll = 1; };
        if(width >= 350 && width < 500 ) {slides = 1; scroll = 1; };
        if(width >= 500 && width < 767 ) {slides = 1; scroll = 1; };
        if(width >= 767 && width < 992 ) {slides = 1; scroll = 1; };
        if(width >= 992 && width < 1200 ) {slides = 2; scroll = 2; };
        if(width >= 1200 ) {slides = 2; scroll = 2; };;
        return slides;
    }


    // Initial set slides based on screen width
    var slides = 2;
    scroll = 2;
    
    // Change slides if screen smaller
    slides = setSlides($(window).width());


    // When resize occur 
    $(window).resize(function() {
        slides = setSlides($(window).width());

        // First unset both sliders
        $('.drinks-cart').slick("unslick");

        // Call functions to set both slidders
        sliderInit1();
    });

    // Call functions to set both slidders, before any resize
    sliderInit1();


});