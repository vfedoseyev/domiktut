$(document).ready(function() {
    $('.question').click(function(event) {
        if ($('.faq__questions').hasClass('one')) {
            $('question').not($(this)).removeClass('open');
            $('.answer').not($(this).next()).slideUp(500);
        }
        $(this).toggleClass('open').next().slideToggle(500);
    });
});