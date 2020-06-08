jQuery(document).ready(function ($) {

  // $('<div class="welcome"> welcome</div> ').appendTo('body');
  // $('.welcome').css('padding', '50px');
  // $('.box').css('background', 'yellow');

  // $('.box').click(function () {
  //   $(this).toggleClass('active');
  //   $(this).find('div').animate({ height:200},"slow");
  // });

  // gsap.from('.box', {
  //   delay:3,
  //   duration: 0.5,
  //   opacity: 0,
  //   ease: "power1.out"
  // });

  // load & resize windows
  $.event.add(window, 'load', resizeFrame);
  $.event.add(window, 'resize', resizeFrame);

  function resizeFrame() {
    var h = $(window).outerHeight();
    var w = $(window).outerWidth();

    //bgcolour();
  }

  function bgcolour(){
    var tl = gsap.timeline();
    tl.set(".welcome",{
      duration: 0.5,
      background:'yellow',
      ease: "power1.out"
    })
    .to(".welcome",5,{
      duration: 0.8,
      background:'blue',
      ease: "power1.out",
      color:'white'
    });

  }


var $slider = $('.slider');

var $slickTrack = $('.slick-track');
var $slickCurrent = $('.slick-current');

var slideDuration = 900;

//RESET ANIMATIONS
// On init slide change
$slider.on('init', function(slick){
  TweenMax.to($('.slick-track'), 0.9, {
    marginLeft: 0
  });
  TweenMax.to($('.slick-active'), 0.9, {
    x: 0,
    zIndex: 2
  });
});
// On before slide change
$slider.on('beforeChange', function(event, slick, currentSlide, nextSlide){
  TweenMax.to($('.slick-track'), 0.9, {
    marginLeft: 0
  });
  TweenMax.to($('.slick-active'), 0.9, {
    x: 0
  });
});

// On after slide change
$slider.on('afterChange', function(event, slick, currentSlide){
  TweenMax.to($('.slick-track'), 0.9, {
    marginLeft: 0
  });
  $('.slick-slide').css('z-index','1');
  TweenMax.to($('.slick-active'), 0.9, {
    x: 0,
    zIndex: 2
  });
});

//SLICK INIT
$slider.slick({
  speed: slideDuration,
  dots: true,
  waitForAnimate: true,
  useTransform: true,
  cssEase: 'cubic-bezier(0.455, 0.030, 0.130, 1.000)'
})

//PREV
$('.slick-prev').on('mouseenter', function(){
                TweenMax.to($('.slick-track'), 0.6, {
                  marginLeft: "180px",
                  ease: Quad.easeOut
                });
                TweenMax.to($('.slick-current'), 0.6, {
                  x: -100,
                  ease: Quad.easeOut
                });
            });

$('.slick-prev').on('mouseleave', function(){
                TweenMax.to($('.slick-track'), 0.4, {
                  marginLeft: 0,
                  ease: Sine.easeInOut
                });
                TweenMax.to($('.slick-current'), 0.4, {
                  x: 0,
                  ease: Sine.easeInOut
                });
            });

//NEXT
$('.slick-next').on('mouseenter', function(){
  
                TweenMax.to($('.slick-track'), 0.6, {
                  marginLeft: "-180px",
                  ease: Quad.easeOut
                });
                TweenMax.to($('.slick-current'), 0.6, {
                  x: 100,
                  ease: Quad.easeOut
                });
            });

$('.slick-next').on('mouseleave', function(){
                TweenMax.to($('.slick-track'), 0.4, {
                  marginLeft: 0,
                  ease: Quad.easeInOut
                });
                TweenMax.to($('.slick-current'), 0.4, {
                  x: 0,
                  ease: Quad.easeInOut
                });
            });

});
