$(document).ready(function() {
	// Material
	$.material.init();

	// Preloader
	$(window).load(function() {
	  "use strict";
	  $('#loader').fadeOut();
	});
	/*----------------------------------------------------*/
	/*	Slick Nav 
	/*----------------------------------------------------*/
	$('.wpb-mobile-menu').slicknav({
	  prependTo: '.okayNav',	
	  parentTag: 'liner',
	  allowParentLinks: true,
	  duplicate: true,
	  label: '',
	  closedSymbol: '<i class="fa fa-angle-right"></i>',
	  openedSymbol: '<i class="fa fa-angle-down"></i>',
	});

	//WOW Scroll Spy
	var wow = new WOW({
	    //disabled for mobile
	    mobile: false
	});
	wow.init();
	
	// MixitUp Init
	$('#mea-portfolio').mixItUp(); 
	

 	// Bootstrap Carousel
	$('#main-slide').carousel({
		interval: 5000,
	});

	// Testimonial Carousel
	  $("#testimonial-carousel").owlCarousel({
	      slideSpeed : 300,
	      paginationSpeed : 400,
	      singleItem: true,
	      autoPlay: 3000,
	      stopOnHover : true,
	 
	  });

	  // Flickr Carousel
	  $("#flickr-carousel").owlCarousel({
	      slideSpeed : 300,
	      paginationSpeed : 400,
	      items : 1,
	      autoPlay: 3000,
	      stopOnHover : true,
	 
	  });

	  // Image Carousel
	  $("#mea-image-carousel").owlCarousel({
	      slideSpeed : 300,
	      paginationSpeed : 400,
	      items : 4,
	      autoPlay: 3000,
	      stopOnHover : true,
	  });

	  // Image Carousel
	  $("#team-carousel").owlCarousel({
	      slideSpeed : 300,
	      paginationSpeed : 400,
	      items : 4,
	      autoPlay: 3000,
	      stopOnHover : true,
	  });

	  // Counter JS
    $('.work-counter-section').on('inview', function(event, visible, visiblePartX, visiblePartY) {
        if (visible) {
            $(this).find('.timer').each(function() {
                var $this = $(this);
                $({
                    Counter: 0
                }).animate({
                    Counter: $this.text()
                }, {
                    duration: 3000,
                    easing: 'swing',
                    step: function() {
                        $this.text(Math.ceil(this.Counter));
                    }
                });
            });
            $(this).off('inview');
        }
    });	

	  // Back Top Link
	  var offset = 200;
	  var duration = 500;
	  $(window).scroll(function() {
	    if ($(this).scrollTop() > offset) {
	      $('.back-to-top').fadeIn(400);
	    } else {
	      $('.back-to-top').fadeOut(400);
	    }
	  });
	  $('.back-to-top').click(function(event) {
	    event.preventDefault();
	    $('html, body').animate({
	      scrollTop: 0
	    }, 600);
	    return false;
	  });
	  
 
});

