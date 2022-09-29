$(document).ready(function() {
    $('.burger').click(function(event) {
        $('.burger, .burger__nav, .logo-light,.header-white, .nav-light-scroll').toggleClass('active');
        $('body').toggleClass('lock');
    });
});

$(document).ready(function() {
    $('.burger__faq').click(function(event) {
        $('.burger, .burger__nav').toggleClass('active');
        $('body').removeClass('lock');
    });
});
$(document).ready(function() {
    $('.burger__cooperation').click(function(event) {
        $('.burger, .burger__nav').toggleClass('active');
        $('body').removeClass('lock');
    });
});