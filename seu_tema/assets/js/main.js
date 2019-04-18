$(document).ready(function(){
      $('.carrousel-slick').slick({
	  		infinite:true,
	        // centerMode: true,
	        dots: true,
	        speed: 500,
	        cssEase: 'linear',
	        useTransform:false,
	     	autoplay: true,
	//      autoplaySpeed: 6000,
	        arrows: true
	  });


	  /*  Hamburguer Mobile */
	  $('.hamburger').on('click', function() {
	  	$(this).toggleClass('is-active');
	  })

	  if ($('.navbar').hasClass('fixed-top')) {
	  	$('#container-carousel').css('margin-top','5.5rem');
	  }
	});