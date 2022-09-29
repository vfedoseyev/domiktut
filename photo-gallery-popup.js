$(document).ready(function() {
    $('.photo-gallery-btn').click(function(event) {
        $('.photo-gallery-popup, .popup-photo-gallery').toggleClass('active');
        $('body').toggleClass('lock');
    });
    $('.popup-photo-gallery').click(function(event) {
        if (event.target == document.querySelector('.popup-photo-gallery')) {
            $('.photo-gallery-popup, .popup-photo-gallery').toggleClass('active');
            $('body').toggleClass('lock');
        }
    });
});