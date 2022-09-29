jQuery(function(f) {
    var element = f('.header-white-scroll');
    f(window).scroll(function() {
        element['fade' + (f(this).scrollTop() > 60 ? 'In' : 'Out')](200);
    });
});
jQuery(function(f) {
    var element = f('.header-white');
    f($('.catalog-wrapper')).scroll(function() {
        element['fade' + (f(this).scrollTop() > 60 ? 'Out' : 'In')](200);
        $('.header-white').css({
            // 'transform': 'translateY(-100%)',
            'transition': 'all 0.2s ease',
            // 'display': 'none'
        });
        $('.filters').css({
            'padding-top': '20px',
            'padding-bottom': '20px',
            'transition': 'all 0.2s ease'
        });
    });

});