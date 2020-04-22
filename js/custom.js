jQuery(document).ready(function ($) {

  pageTransition();
  // SmoothScroll({ 
  //   stepSize:100,
  //   animationTime:400,
  //  })

  // Function to add and remove the page transition screen
  function pageTransition() {
    var tl = gsap.timeline();
    tl.set(".loading-screen", { transformOrigin: "bottom left" });
    tl.to(".loading-screen", { duration: 0.5, scaleY: 1 });
    tl.to(".loading-content", { duration: 0.5, opacity: 1 });
    tl.to(".loading-content", { delay: 1, duration: 0.5, opacity: 0 });
    tl.to(".loading-screen", {
      duration: 0.5,
      scaleY: 0,
      skewX: 0,
      transformOrigin: "top left",
      ease: "power1.out",
    },'+=0.1');
  }

  // Function to animate the content of each page
  function contentAnimation() {
    //var tl = gsap.timeline();
    //tl.from('.is-animated', { duration: .5, translateY: 10, opacity: 0, stagger: 0.4 });
    //tl.from('.main-navigation', { duration: .5, translateY: -10, opacity: 0});
    //$(".green-heading-bg").addClass("show");
  }

  function delay(n) {
    n = n || 2000;
    return new Promise((done) => {
      setTimeout(() => {
        done();
      }, n);
    });
  }

  $(function () {
    barba.init({
      sync: true,

      transitions: [
        {
          async leave(data) {
            const done = this.async();

            pageTransition();
            await delay(1000);
            done();
          },

          async enter(data) {
            contentAnimation();
          },

          async once(data) {
            contentAnimation();
          },
        },
      ],
    });
  });

  var loader = gsap.timeline();

  loader.from(".logo", 2, {
    //delay:0.2,
    //yPercent: -200,
    opacity: 0,
    scale: 1.5,
    ease: Expo.easeInOut,
  });

  // load & resize windows
  $.event.add(window, "load", resizeFrame);
  $.event.add(window, "resize", resizeFrame);

  function resizeFrame() {
    var h = $(window).outerHeight();
    var w = $(window).outerWidth();
  }

  barba.hooks.beforeLeave(() => {
    console.log('afterLeave');
    //$(window).scrollTop(0);
    $('body').addClass('disable_scroll');

    setTimeout(function() {
      $(window).scrollTop(0);
    }, 1000);  // will work with every browser

  });

  barba.hooks.afterOnce(() => {
    AOSinits();
    resizephoto()
    indexslick();
  });

  barba.hooks.after(() => {
    AOSinits();
    //resizephoto()
    indexslick();

    setTimeout(function() {
      $('body').removeClass('disable_scroll');
    }, 2000);  // will work with every browser

  });

  barba.hooks.beforeEnter(() => {
  });

  barba.hooks.afterEnter((data) => {

    //$(window).scrollTop(0);
    //$('body').removeClass('disable_scroll');
    
    
    resizephoto();
    
  });

  function indexslick() {

    var $slider = $('.slideshow');

    //SLICK INIT
    $slider.slick({
      speed:250,
      autoplay: true,
      autoplaySpeed: 2500,
      slidesToShow: 3,
      slidesToScroll: 1,
      //waitForAnimate: false,
      //infinite: false,
      centerMode: true,
      //dots: false,
      //cssEase: "cubic-bezier(0.84, 0, 0.08, 0.99)",
      prevArrow: false,
      nextArrow: false,
      lazyLoad: 'progressive',
      //pauseOnHover: false,
      //draggable: false,
      //swipe: false,
      //swipeToSlide: false,
      //touchMove: false,
      //initialSlide: 1,
      variableWidth: true,
      //mobileFirst:true,//add this one
    });


      //RESET ANIMATIONS
      // On init slide change
      $slider.on('init', function(slick){
        console.log('current slide');
      });
      // On before slide change
      $slider.on('beforeChange', function(event, slick, currentSlide, nextSlide, swipe){
        console.log('before chnage');
      });
      // On after slide change
      $slider.on('afterChange', function(event, slick, currentSlide, swipe){
        console.log('after change');
      });

      // use this to get the current slide so you know how much time to wait
      //$('.your-element').slick('slickCurrentSlide');

      // use this to go to the next slide whenever you want
      //$('.your-element').slick('slickNext');

  }


  function AOSinits() {
    //AOS.init();

    // You can also pass an optional settings object
    // below listed default settings
    AOS.init({

      duration: 300,
      easing: 'ease',
      //once: true

      // // Global settings:
      // disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
      // startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
      // initClassName: 'aos-init', // class applied after initialization
      // animatedClassName: 'aos-animate', // class applied on animation
      // useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
      // disableMutationObserver: false, // disables automatic mutations' detections (advanced)
      // debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
      // throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)  
      
      // // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
      // offset: 120, // offset (in px) from the original trigger point
      // delay: 300, // values from 0 to 3000, with step 50ms
      // duration: 400, // values from 0 to 3000, with step 50ms
      // easing: 'ease', // default easing for AOS animations
      // once: true, // whether animation should happen only once - while scrolling down
      // mirror: false, // whether elements should animate out while scrolling past them
      // anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

    });
  }

  function resizephoto(){
  (function($) {
    $.fn.resizeToParent = function(opts) {
      var defaults = {
       parent: 'div',
       delay: 100
      }

      var opts = $.extend(defaults, opts);

      function positionImage(obj) {
        // reset image (in case we're calling this a second time, for example on resize)
        obj.css({'width': '', 'height': '', 'margin-left': '', 'margin-top': ''});

        // dimensions of the parent
        var parentWidth = obj.parents(opts.parent).width();
        var parentHeight = obj.parents(opts.parent).height();

        // dimensions of the image
        var imageWidth = obj.width();
        var imageHeight = obj.height();

        // step 1 - calculate the percentage difference between image width and container width
        var diff = imageWidth / parentWidth;

        // step 2 - if height divided by difference is smaller than container height, resize by height. otherwise resize by width
        if ((imageHeight / diff) < parentHeight) {
         obj.css({'width': 'auto', 'height': parentHeight});

         // set image variables to new dimensions
         imageWidth = imageWidth / (imageHeight / parentHeight);
         imageHeight = parentHeight;
        }
        else {
         obj.css({'height': 'auto', 'width': parentWidth});

         // set image variables to new dimensions
         imageWidth = parentWidth;
         imageHeight = imageHeight / diff;
        }

        // step 3 - center image in container
        var leftOffset = (imageWidth - parentWidth) / -2;
        var topOffset = (imageHeight - parentHeight) / -2;

        obj.css({'margin-left': leftOffset, 'margin-top': topOffset});
      }

      // run the position function on window resize (to make it responsive)
      var tid;
      var elems = this;

      $(window).on('resize', function() {
        clearTimeout(tid);
        tid = setTimeout(function() {
          elems.each(function() {
            positionImage($(this));
          });
        }, opts.delay);
      });

      return this.each(function() {
        var obj = $(this);

        obj.attr("src", obj.attr("src"));

        // bind to load of image
        obj.load(function() {
          positionImage(obj);
        });

        // run the position function if the image is cached
        if (this.complete) {
          positionImage(obj);
        }
      });
    }
  })(jQuery);

  $('.project_cover').resizeToParent(
    {parent: '.header'});

  $('.nav_thumb').resizeToParent({parent: '.size'});

  };

  

});
