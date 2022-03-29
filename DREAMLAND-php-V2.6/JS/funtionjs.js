
// LANGUAGE TOGGLE SWITCHER
		$('.btn-toggle').click(function() {
    		$(this).find('.btn').toggleClass('active');  
    
    		if ($(this).find('.btn-primary').length>0) {
    			$(this).find('.btn').toggleClass('btn-primary');
    		}
    
    		$(this).find('.btn').toggleClass('btn-default');
       	});

		// SWIPER SLIDER
       	var mySwiper = new Swiper('.swiper-container', {
  			// Optional parameters
  			loop: true,
  			freeMode: true,
  			centeredSlides: true,
  			breakpoints: {
  				299: {
  					slidesPerView: 1,
  					spaceBetween: 40
  				},

  				999: {
  					slidesPerView: 3,
  					spaceBetween: 30
  				}
  			}
		});