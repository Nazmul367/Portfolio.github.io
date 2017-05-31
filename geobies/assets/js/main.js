(function ($) {
	"use strict";

    jQuery(document).ready(function($){

        $(".testimonial-carousel").owlCarousel({
           items: 1,
            loop: true,
            autoplay: true,
            nav: false,
            dots: true, 
        });
    });
	
	 $(window).scroll(function(){
		if ($(this).scrollTop() > 120) {
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
	});
	
	//Click event to scroll to top
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},2800);
		return false;
	});


    jQuery(window).load(function(){

        
    });

}(jQuery));	