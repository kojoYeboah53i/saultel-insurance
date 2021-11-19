$(function () {
    console.log("claim form")
});

$('.second').hide();


$('.next-first').click(function (e) { 
    e.preventDefault();
    $('.first').fadeOut('slow');
    $('.second').fadeIn('slow');
});