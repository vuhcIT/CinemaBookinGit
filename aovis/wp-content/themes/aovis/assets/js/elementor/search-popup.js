(function($){
	"use strict";
	
	$(window).on('elementor/frontend/init', function () {
		
        elementorFrontend.hooks.addAction('frontend/element_ready/aovis_elementor_search_popup.default', function(){
	       
	        $('.ova_wrap_search_popup').each( function(){
				var that    = $(this);
				var button 	= that.find('i');
				var overlay = $(this).find('.ova_search_popup .search-popup__overlay');

				button.on( 'click', function(e){
					e.stopPropagation();
    				e.stopImmediatePropagation();
					
					that.addClass( 'show' );
				});

				overlay.on( 'click', function(e){
					e.stopPropagation();
    				e.stopImmediatePropagation();
    				
					that.removeClass( 'show' );
				});
			
			});
	    	
        });
        
   });

})(jQuery);
