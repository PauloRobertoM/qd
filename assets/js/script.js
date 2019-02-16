(function($, window) {
    $('.owl-vitrine').owlCarousel({
        loop: false,
        autoplay: true,
        margin: 0,
        nav: false,
        dots: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });

    $(document).ready(function(){
        $('.hover').hover(function(){
            $(this).addClass('flip');
        },function(){
            $(this).removeClass('flip');
        });
    });
})(jQuery, window);