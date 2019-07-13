$(window).scroll(function () {
    if ($(document).scrollTop() > 90 && ($(window).width() >= 767)) {
        $('.navbar').addClass('fixed')
        $('.top-header').addClass('top-header-deleted');
        $('.cta-btn').addClass('btn-blue-nav');

    } else {
        $('.navbar').removeClass('fixed');
        $('.top-header').removeClass('top-header-deleted');
        $('.cta-btn').removeClass('btn-blue-nav');
    }
});

$('input[type=radio]').on('change', function () {
    if ($(this).is(':checked')) {
        $('input[type=radio]').parent().removeClass('new-label');
        $(this).parent().addClass('new-label');
    } else {
        $(this).parent().removeClass('new-label');
    }
});

$('input[type=checkbox]').on('change', function () {
    if ($(this).is(':checked')) {
        $(this).parent().addClass('new-check');
    } else {
        $(this).parent().removeClass('new-check');
    }
});