$(function () {
    console.log("Browser is now running: market.js");
    
    var  market = {};
    market.base = $('.left-menu .menu li .top');    
    
    market.base.on('click', function() {
        if($(this).children().hasClass('fa-plus')) {
            $(this).children('.icon').addClass('fa-minus');
            $(this).children('.icon').removeClass('fa-plus');
            $(this).next().toggleClass("hidden");
        } else {
            $(this).children('.icon').addClass('fa-plus');
            $(this).children('.icon').removeClass('fa-minus');
            $(this).next().toggleClass("hidden");
        }
    });
    
});