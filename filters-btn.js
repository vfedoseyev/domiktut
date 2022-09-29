$(document).ready(function() {
    $('.filters__btn_mobile, .btn-close-filters').click(function(event) {
        $('.pop-up_filters').toggleClass('active');
        $('body').toggleClass('lock');
    });
});
$(document).ready(function() {
    $('.btn-orange_filters, .btn-close-selections').click(function(event) {
        $('.pop-up_selections').toggleClass('active');
        $('body').toggleClass('lock');
    });
});


// кнопки не рабочие
$('.filters__btn').click(function(event) {
    $('.popup-sorry, .form-popup-sorry').toggleClass('active');
    $('body').toggleClass('lock');
});
$('.btn-orange_filters').click(function(event) {
    $('.popup-sorry, .form-popup-sorry').toggleClass('active');
    $('body').toggleClass('lock');
});
$('.form-popup-sorry').click(function(event) {

    $('.popup-sorry, .form-popup-sorry').toggleClass('active');
    $('body').toggleClass('lock');

});
$('.selection__card').click(function(event) {

    $('.popup-sorry, .form-popup-sorry').toggleClass('active');
    $('body').toggleClass('lock');

});