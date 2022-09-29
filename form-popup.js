$(document).ready(function() {
    // Форма заявки
    $('.call_request-btn').click(function(event) {
        $('.popup-form-call_request, .form-popup-call_request').toggleClass('active');
        $('.mobile__btn').css('z-index', '1');
        $('.phone-popup').removeClass('active');
        $('body').addClass('lock');
    });
    $('.form-popup-call_request').click(function(event) {
        if (event.target == document.querySelector('.form-popup-call_request')) {
            $('.popup-form-call_request, .form-popup-call_request').toggleClass('active');
            // $('.mobile__btn').css('display', 'flex');
            $('.phone-popup').removeClass('active');
            $('.popup-phone').removeClass('active');
            $('body').removeClass('lock');
        }
    });
    // Форма на кейтеринг
    $('.catering__btn, .catering__btn-burger').click(function(event) {
        $('.popup-form, .form-popup').toggleClass('active');
        $('.mobile__btn').css('z-index', '1');
        $('body').toggleClass('lock');
    });
    $('.form-popup').click(function(event) {
        if (event.target == document.querySelector('.form-popup')) {
            $('.popup-form, .form-popup').toggleClass('active');
            // $('.mobile__btn').css('display', 'flex');
            $('body').toggleClass('lock');
        }
    });
    // Форма на сотрдничество от собственника
    $('.rent__btn').click(function(event) {
        $('.popup-form-rent, .form-popup-rent').toggleClass('active');
        $('.mobile__btn').css('z-index', '1');
        $('body').toggleClass('lock');
    });

    $('.form-popup-rent').click(function(event) {
        if (event.target == document.querySelector('.form-popup-rent')) {
            $('.popup-form-rent, .form-popup-rent').toggleClass('active');
            // $('.mobile__btn').css('display', 'flex');
            $('body').toggleClass('lock');
        }
    });

});

// приколюхи с ценой в картчке коттеджа
$(document).ready(function() {
    $('.price-button_hidden_mod').click(function(event) {
        $('.price-button_hidden_mod').css('display', 'none');
        $('.price-button_hidden').css('display', 'flex');
    });
});
$(document).ready(function() {
    $('.price-button-callback_mod').click(function(event) {
        $('.price-button-callback_mod').css('display', 'none');
        $('.price-button-callback').css('display', 'flex');
    });
});
// кнопка закрытия формы
$(document).ready(function() {
    $('.popup__close').click(function(event) {
        $('.popup-form-call_request, .form-popup-call_request, .popup-form, .form-popup, .popup-form-rent, .form-popup-rent').removeClass('active');
        // $('.mobile__btn').css('display', 'flex');

        $('body').removeClass('lock');
    });
});
$(document).ready(function() {
    $('.popup__close_burger').click(function(event) {
        $('.popup-form-call_request, .form-popup-call_request, .popup-form, .form-popup').removeClass('active');
        // $('.mobile__btn').css('display', 'flex');
        $('.popup-phone').removeClass('active');
        $('body').toggleClass('lock');
    });
});