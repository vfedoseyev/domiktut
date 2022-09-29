$(document).ready(function() {
    $('.tel').click(function(event) {
        $('.phone-popup, .popup-phone').toggleClass('active');
        $('body').toggleClass('lock');
    });
    $('.popup-phone').click(function(event) {
        $('.phone-popup, .popup-phone').toggleClass('active');
        $('body').toggleClass('lock');
    });
});