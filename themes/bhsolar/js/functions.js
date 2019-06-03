var $=jQuery.noConflict();
 
(function($){
	"use strict";
	$(function(){
 
		/*------------------------------------*\
			#GLOBAL
		\*------------------------------------*/

		$(document).ready(function() {
			popUp();
			/* Animation */
			var wow = new WOW( {
				boxClass:     'wow',      // animated element css class (default is wow)
				animateClass: 'animated', // animation css class (default is animated)
				offset:       0,          // distance to the element when triggering the animation (default is 0)
				mobile:       true,       // trigger animations on mobile devices (default is true)
				live:         true,       // act on asynchronously loaded content (default is true)
				callback:     function(box) {
				// the callback is fired every time an animation is started
				// the argument that is passed in is the DOM node being animated
			},
			scrollContainer: null // optional scroll container selector, otherwise use window
			} );
			wow.init();
		});
 
		$(window).on('resize', function(){
			//footerBottom();
		});
 
		$(document).scroll(function() {

		});
 
		// if( parseInt( isHome ) ){

		// } 

		// if( parseInt( isSingular ) ){

		// } 

		/* Header Add */
		$("#close-add").click(function() {
			$('#top-add').hide();
		});

		/* Faqs */
		$(".item-faq").click(function() {
			var idFaq = $(this).attr('id');
			if ( $('#' + idFaq).hasClass('active') ) {
				$('#' + idFaq).removeClass('active');
			} else {
				$('.item-faq').removeClass('active');
				$('#' + idFaq).addClass('active');
			}
		});

		// Modal
		$(".open-modal").click(function() {
			var idModal = $(this).attr('id');
			$('#modal-' + idModal).show();
			$('body').addClass('overflow-hide');
		});
		$(".close-modal, .exit-modal").click(function() {
			$('.modal').hide();
			$('body').removeClass('overflow-hide');
		});

	});
})(jQuery);
 
function popUp(){
	if (document.cookie.indexOf("visited=") >= 0) {
		console.log('Visitas previas');
	} else {
		console.log('Primera visita');
		expiry = new Date();
		expiry.setTime(expiry.getTime() + (24*60*60*1000)); // 24 hrs.
		document.cookie = "visited=yes; expires=" + expiry.toGMTString();
		console.log(expiry);
		$('#popUp').show();
		$('body').addClass('overflow-hide');
	}
}