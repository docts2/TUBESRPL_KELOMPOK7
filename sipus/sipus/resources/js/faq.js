$(document).ready(function() {
    $('.faq-question').click(function() {
        $(this).siblings('.faq-answer').toggle();
    });
});
