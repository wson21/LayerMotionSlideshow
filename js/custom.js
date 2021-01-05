jQuery(document).ready(function ($) {

  "use strict";

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

    resize_shadow()
    pro_resize_shadow()
  }

  function resize_shadow() {
    
    var img_h = $('.img_box').outerHeight();
    var img_w = $('.img_box').outerWidth();

    console.log(img_h,img_w);

    $('.shadow_box').css({'width': img_w, 'height': img_h});

  }

  function pro_resize_shadow() {
    
    var pro_h = $('.project_item img').outerHeight();
    var pro_w = $('.project_item img').outerWidth();

    console.log(pro_h,pro_w);

    $('.pro_img_shadow').css({'width': pro_w, 'height': pro_h});

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

  // $('#nav-icon4').click(function(){
	// 	$(this).toggleClass('open');
	// });

  $('#nav-icon4').click(function() {
    $(this).toggleClass('open');
    $('#overlay').toggleClass('open');
    $('body, html').toggleClass('hide_scroll');
   });


   $('.pro_info').click(function() {
    $('.project_info_wrap').toggle();
   });

   $(window).scroll(function () {
		if (
			$(window).scrollTop() + $(window).height() >
			$(document).height() - 500
		) {

			$(".arrow_svg").addClass("up");

		} else {
			$(".arrow_svg").removeClass("up");
		}

	});

// Init slick slider + animation
$('.slider').slick({
  autoplay: true,
  speed: 500,
  autoplaySpeed: 6000,
  arrows: false,
  dots: true,
}).slickAnimation();

$('.slide__img img').resizeToParent({
  parent: '.slide'
});



 $('.logo').midnight();

//  $('.nav_icon').midnight();


  AOS.init({disable: 'mobile'});

// var $slider = $('.slider');

// var $slickTrack = $('.slick-track');
// var $slickCurrent = $('.slick-current');

// var slideDuration = 900;

// //RESET ANIMATIONS
// // On init slide change
// $slider.on('init', function(slick){
//   TweenMax.to($('.slick-track'), 0.9, {
//     marginLeft: 0
//   });
//   TweenMax.to($('.slick-active'), 0.9, {
//     x: 0,
//     zIndex: 2
//   });
// });
// // On before slide change
// $slider.on('beforeChange', function(event, slick, currentSlide, nextSlide){
//   TweenMax.to($('.slick-track'), 0.9, {
//     marginLeft: 0
//   });
//   TweenMax.to($('.slick-active'), 0.9, {
//     x: 0
//   });
// });

// // On after slide change
// $slider.on('afterChange', function(event, slick, currentSlide){
//   TweenMax.to($('.slick-track'), 0.9, {
//     marginLeft: 0
//   });
//   $('.slick-slide').css('z-index','1');
//   TweenMax.to($('.slick-active'), 0.9, {
//     x: 0,
//     zIndex: 2
//   });
// });

// //SLICK INIT
// $slider.slick({
//   speed: slideDuration,
//   dots: true,
//   waitForAnimate: true,
//   useTransform: true,
//   cssEase: 'cubic-bezier(0.455, 0.030, 0.130, 1.000)'
// })

// //PREV
// $('.slick-prev').on('mouseenter', function(){
//                 TweenMax.to($('.slick-track'), 0.6, {
//                   marginLeft: "180px",
//                   ease: Quad.easeOut
//                 });
//                 TweenMax.to($('.slick-current'), 0.6, {
//                   x: -100,
//                   ease: Quad.easeOut
//                 });
//             });

// $('.slick-prev').on('mouseleave', function(){
//                 TweenMax.to($('.slick-track'), 0.4, {
//                   marginLeft: 0,
//                   ease: Sine.easeInOut
//                 });
//                 TweenMax.to($('.slick-current'), 0.4, {
//                   x: 0,
//                   ease: Sine.easeInOut
//                 });
//             });

// //NEXT
// $('.slick-next').on('mouseenter', function(){
  
//                 TweenMax.to($('.slick-track'), 0.6, {
//                   marginLeft: "-180px",
//                   ease: Quad.easeOut
//                 });
//                 TweenMax.to($('.slick-current'), 0.6, {
//                   x: 100,
//                   ease: Quad.easeOut
//                 });
//             });

// $('.slick-next').on('mouseleave', function(){
//                 TweenMax.to($('.slick-track'), 0.4, {
//                   marginLeft: 0,
//                   ease: Quad.easeInOut
//                 });
//                 TweenMax.to($('.slick-current'), 0.4, {
//                   x: 0,
//                   ease: Quad.easeInOut
//                 });
//             });

});
