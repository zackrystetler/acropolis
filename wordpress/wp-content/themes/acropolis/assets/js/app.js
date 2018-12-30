//google maps api key = AIzaSyBG216dT96u7KshkH0Udl-jmYMu-QLgaa4

jQuery(document).ready(function($) {
  //smooth scrolling to anchors
  $('header a[href^="#"], .smooth[href^="#"]').each(function() {
    $(this).on("click", function(e) {
      e.preventDefault();
      const goto = $(this.getAttribute("href"));
      const headerHeight = $("header").height();
      const gotoPos = goto.offset().top - headerHeight;

      $("html, body").animate(
        {
          scrollTop: gotoPos
        },
        1000
      );
    });
  });

  //fade in feature
  const fadeIn = (elem, speed, offset) => {
    const $elem = $(elem);
    $elem.css("opacity", "0");
    $(window).scroll(function() {
      let windowTop = $(this).scrollTop();
      let windowBottom = windowTop + $(this).height();

      $.each($elem, function() {
        const elemTop = this.offsetTop;
        if (windowBottom > elemTop + offset) {
          $(this).animate({ opacity: "1" }, speed);
        }
      });
    });
  };

  fadeIn(".fade", 1000, 100);

  //nav view on mobile
  $("#menuButton").on("click", function() {
    $("nav").toggleClass("active");
  });

  $("nav").on("click", function() {
    $("nav").removeClass("active");
  });


  const slider = (slider, delay, speed, offset) => {

    var $slider = $(slider);
    var $slideContainer = $slider.find('ul');
    var $slides = $slideContainer.find('li');
    var $firstSlide = $slides.first();

    $firstSlide.clone().appendTo($slideContainer);

    var currentSlide = 0;
    var interval;

    function startSlider() {
      interval = setInterval(function() {
        $slideContainer.animate({'margin-left': "-=" + offset}, speed, function() {
          currentSlide++;
          if (currentSlide === $slides.length) {
            currentSlide = 0;
            $slideContainer.css('margin-left', 0);
          }
        });
      }, delay);
    }

    
    startSlider();
  }

  slider(".reviewContainer", 5000, 2000, "100vw");


  


});
