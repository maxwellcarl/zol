(function ($, root, undefined) {
	$(function () {
		'use strict';


		// MELLOW SITE LOAD OVERLAY
		$('body').addClass('ready');
		setTimeout(function(){
			$('body').addClass('ready2');
		}, 1000);
		//$('body').addClass('no-scroll');

    $('.site-overlay').fadeOut(800);


    // age modal
    $('.age-modal').addClass('active');
    $('.age-modal-overlay').addClass('active');
    $('#Age-Confirm').click(function() {
		  $('.age-modal').removeClass('active');
    	$('.age-modal-overlay').removeClass('active');
    	$('body').removeClass('no-scroll');
		});


		// WINDOW SCROLLED
		$(window).scroll(function() {    
      var scroll = $(window).scrollTop();
      if (scroll >= 200) {
          $("body").addClass("scrolled");
      } else {
          $("body").removeClass("scrolled");
      }
      if (scroll >= 400) {
      	$('.sidebar').addClass('sticky-sidebar');
      } else {
      	$('.sidebar').removeClass('sticky-sidebar');
      }
    });
	    
	  
		$('.menu-pullout-btn').click(function() {
		  $('body').toggleClass('menu-pullout-active');
		});
		$('.menu-close-btn').click(function() {
		  $('body').toggleClass('menu-pullout-active');
		});
		$('.menu-pullout-overlay').click(function() {
		  $('body').toggleClass('menu-pullout-active');
		});


		//$('#homecaro').carousel();






		
		// SCROLL TO FUNCTION
		// $(function() {
		//   $('a[href*="#"]:not([href="#"])').click(function() {
		//     if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		//       var target = $(this.hash);
		//       target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		//       if (target.length) {
		//         $('html, body').animate({
		//           scrollTop: target.offset().top
		//         }, 1000);
		//         return false;
		//       }
		//     }
		//   });
		// });

		


	});	// close doc ready
})(jQuery, this);


