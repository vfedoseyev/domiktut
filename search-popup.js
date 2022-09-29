$(document).ready(function() {
    $('.search').click(function(event) {
        $('.search-popup, .popup-search').toggleClass('active');
        $('.search-form__input').focus();
        $('body').toggleClass('lock');
        $('.mobile__btn').css('z-index', '1');
    });
    $('.popup-search').click(function(event) {
        $('.search-popup, .popup-search').toggleClass('active');
        $('body').toggleClass('lock');
        // $('.mobile__btn').css('display', 'flex');
    });
    $('#search-reset').click(function(event) {
        $('.search-popup, .popup-search').removeClass('active');
        $('.mobile__btn').css('z-index', '1');
        $('body').removeClass('lock');
    });

});