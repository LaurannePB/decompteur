$(function () {
    $('#menu-button').on('click', function () {
        $('#main-nav').toggleClass('on');
        $(this).toggleClass('on');
    });
});