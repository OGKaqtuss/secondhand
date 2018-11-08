$(function () {
    console.log("Browser is now running: main.js");
    $('body header nav ul li a').on('mouseleave', function () {
        $('body header nav ul li a.disActive').removeClass('disActive').addClass('active');
    });
    $('body header nav ul li a').on('mouseover', function () {
        $('body header nav ul li a.active').removeClass('active').addClass('disActive');
    });
    // Stop all # links     
    ($('*[href="#"]')) ? $('*[href="#"]').on('click', (event) => event.preventDefault()): false;

    $(".left_side_bar_head").click(function (e) {
        var ele = $(".sidebar_arrow")
        var parent = $("#left_side_bar");
        var child = $(ele.children().eq(0));
        var page = $("#market_main_left");
        var navicons = $(".sidebar_navigation_link .icon");

        var state = parent.hasClass("open");

        if (state) {
            child.removeClass("fa-arrow-left") && child.addClass("fa-arrow-right");
            navicons.fadeIn('fast');
        } else {
            child.removeClass("fa-arrow-right") && child.addClass("fa-arrow-left");
            navicons.fadeOut('fast');
        }

        parent.toggleClass("open");
        page.toggleClass("open");

        let leftPage = {};
        leftPage.state = page.hasClass('open');
        leftPage.state ? page.addClass('hideContent') : page.removeClass('hideContent');

    })

    $(".market_left_nav_text").click(function (e) {
        var open = $(this).data("list-open");

        console.log(open);

        if (open == false)
            $(this).find(".title").find("i").removeClass("fa-plus-circle").addClass("fa-minus-circle")
        else
            $(this).find(".title").find("i").removeClass("fa-minus-circle").addClass("fa-plus-circle")


        open = open == false ? true : false;

        $(this).data("list-open", open);

        $(this).find("figcaption").slideToggle(1);
    })
});