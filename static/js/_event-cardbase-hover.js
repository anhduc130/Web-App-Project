$(document).ready(function () {
    $(".events-card-0").on('mouseenter', function () {
        $(this).toggleClass('show-description')
    })
    $(".events-card-0").on('mouseleave', function () {
        $(this).toggleClass('show-description');
    });
})