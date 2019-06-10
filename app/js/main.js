$(window).scroll(function () {
    if ($(document).scrollTop() > 90 && ($(window).width() >= 0)) {
        $('.navbar').addClass('fixed')
        $('.top-header').addClass('top-header-deleted');

    }
    else {
        $('.navbar').removeClass('fixed');
        $('.top-header').removeClass('top-header-deleted');
    }
});