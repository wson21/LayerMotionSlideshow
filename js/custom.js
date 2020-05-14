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

});
