var trans;

var lFollowX = 0,
    lFollowY = 0,
    x = 0,
    y = 0,
    friction = 1 / 30;

function moveBackground() {
  x += (lFollowX - x) * friction;
  y += (lFollowY - y) * friction;
  
  translate = 'translate(' + x + 'px, ' + y + 'px) scale(1.1)';

  $('.image').css({
    '-webit-transform': translate,
    '-moz-transform': translate,
    'transform': translate
  });

  //window.requestAnimationFrame(moveBackground);
}

$(window).on('mousemove click', function(e) {

  var target = $(e.target);

  if(!(target == $("#main-page") || target.parents().find("#main-page").length))
    return;

  var lMouseX = Math.max(-100, Math.min(100, $(window).width() / 2 - e.clientX));
  var lMouseY = Math.max(-100, Math.min(100, $(window).height() / 2 - e.clientY));
  lFollowX = (20 * lMouseX) / 100; // 100 : 12 = lMouxeX : lFollow
  lFollowY = (10 * lMouseY) / 100;

  moveBackground();

});

//setTimeout(moveBackground, 1000);

$(window).scroll(function(e){

  var scroll = document.documentElement.scrollTop;

  if(scroll < 200){
    $("#toTop").fadeOut();
  } else {
    $("#toTop").fadeIn();
  }

  var ele = $("#frontPage .image");

  var bg = $("#frontPage .image").css("background-image").split(",");

  bg = bg[bg.length-1];

  if(scroll > 100 && scroll < 200){
    trans = 0.5;
  }
  else if(scroll > 200 && scroll < 300){
    trans = 0.6;
  }
  else if(scroll > 300 && scroll < 400){
    trans = 0.7;
  }
  else if(scroll > 400 && scroll < 500){
    trans = 0.8;
  } 
  else if (scroll < 100) {
    trans = 0.4;
  }

  var background = `linear-gradient(rgba(0, 0, 0, ${trans}), rgba(0, 0, 0, ${trans})),${bg}`;

  ele.css("background-image", background);
})

$(document).ready(function(){
  $(".page-shift").on("click", function(e){
    console.log(screen.height);
    $("html, body").animate({scrollTop:screen.height}, 500, "swing");
  });
  $("#toTop").on("click", function(){
    $("html, body").animate({scrollTop:0}, 'slow', "swing");
  })
})