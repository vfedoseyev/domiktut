$(document).ready(function() {
    $('.slider-reviews').slick({
        arrows: true,
        dots: true,
        addaptiveHeight: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        speed: 300,
        easing: 'linear',
        Infinite: true,
        autoplay: false,
        autoplaySpeed: 3000,

        asNavFor: false,
        responsive: [{
                breakpoint: 998,
                settings: {
                    arrows: false,
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    slidesToShow: 1
                }
            }
        ],
    });
});
$(document).ready(function() {
    $('.slider').slick({
        arrows: true,
        dots: false,
        addaptiveHeight: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        speed: 300,
        easing: 'linear',
        Infinite: true,
        autoplay: false,
        autoplaySpeed: 3000,
        centerMode: false,
        asNavFor: false,
        responsive: [{
            breackpoint: 992,
            settings: {
                slidesToShow: 2
            }
        }]
    });
});
$(document).ready(function() {
    $('.slider-gallery').slick({
        arrows: true,
        dots: true,
        addaptiveHeight: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        speed: 300,
        easing: 'linear',
        Infinite: true,
        autoplay: false,
        autoplaySpeed: 3000,
        centerMode: false,
        asNavFor: false,

    });
});
$(document).ready(function() {
    $('.catalog-slider').slick({
        lazyLoad: 'ondemand',
        arrows: false,
        dots: true,
        addaptiveHeight: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        speed: 300,
        easing: 'linear',
        Infinite: true,
        autoplay: false,
        autoplaySpeed: 3000,
        centerMode: false,
        asNavFor: false,
    });
});
$(document).ready(function() {
    $('.catalog-slider-single ').slick({
        arrows: false,
        dots: false,
        addaptiveHeight: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        speed: 300,
        easing: 'linear',
        Infinite: true,
        autoplay: false,
        autoplaySpeed: 3000,
        centerMode: false,
        asNavFor: false,
    });
});

$(function() {
    $('.catalog-slider-single').on('init', function(event, slick) {
        // $(this).append('<div class="slick-counter"><span class="active"></span> / <span class="total"></span></div>');
        $('.active').text(slick.currentSlide + 1);
        $('.total').text(slick.slideCount);
    })

    .on('beforeChange', function(event, slick, currentSlide, nextSlide) {
        $('.active').text(nextSlide + 1);
        $('.total').text(slick.slideCount);
    });
});