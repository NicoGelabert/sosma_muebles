
(function($) {
  "use strict";

  // // scrollspy to add active class to navbar items on scroll
  // $('body').scrollspy({
  //   target: '#mainNav',
  //   offset: 56,
  // });
  // Closes responsive menu when a scroll trigger link is clicked
  $('.js-scroll-trigger').click(function() {
    $('.navbar-collapse').collapse('hide');
  });

 
  // Cambio de color del navbar al hacer scroll
  
      $(window).scroll(function() {
        if ($("#mainNav").offset().top > 200) {
            $("#mainNav").addClass("menu-principal2");
        } else {
            $("#mainNav").removeClass("menu-principal2");
        }
      });

  // Cambio de color de la marca del navbar al hacer scroll
  $(window).scroll(function() {
    if ($("#brand").offset().top > 200) {
    $("#brand").addClass("navbar-brand2");
  } else {
    $("#brand").removeClass("navbar-brand2");
    }
   });
 

  })(jQuery); // End of use strict
  

  