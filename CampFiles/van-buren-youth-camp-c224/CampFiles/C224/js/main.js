(function( vbyc, jQuery, undefined ) { 

	var subNavSelector 			= '.navbar-list-sub',
	    navbarSiblingsSelector  = '.navbar-list .link',
	    headerRow 		 		= jQuery('.header-main'),
	    containerClassName		= '.template-home .hero-animation',
	    container 				= jQuery(containerClassName),
	    mainContent 			= jQuery('.main-content')


	vbyc.util = {
		init: function(customValues) {
	
			// Set up main nav
			vbyc.util.initNavbar(subNavSelector,navbarSiblingsSelector);
			vbyc.util.initNavbarToggle(subNavSelector,navbarSiblingsSelector);
			vbyc.util.initNavbarArrowColor(subNavSelector);
			
	        
		},
	
		
		initNavbarToggle: function(subNavSelector,navbarSiblingsSelector) {

			// Click the hamburger and expand the main nav
			jQuery( ".navbar-toggle" ).click( "click", function() {
				
				jQuery(navbarSiblingsSelector + '.expanded' ).removeClass('expanded');
				jQuery(subNavSelector + '.visible-xs-block' ).removeClass('visible-xs-block');
			});
		},
		initNavbar: function(subNavSelector,navbarSiblingsSelector) {
			// Main nav
			jQuery( ".navbar-list .link" ).on( "click", function() {
				var navbarToggle = jQuery('.navbar-toggle');
				var parent = jQuery(this).parents('.item');
				var target = jQuery(subNavSelector,parent);
				
				// See if nav is vertical, in SM view
				if (jQuery(navbarToggle).is(':visible')) {
					if ( jQuery(navbarSiblingsSelector + '.expanded' ).length == 0) {
						// If none are already expanded, select the one just clicked
						jQuery(this).addClass('expanded');
						jQuery(target).slideDown( "fast", function() {
							jQuery(target).addClass('visible-xs-block').css('display','');
							// Remove 'display' attribute so this isn't visible if the screen gets wider
						});
					} else {
						if ( jQuery(this).hasClass('expanded')/* clicked = is */  ) {
							// If the one just clicked is expanded, deselect it
							// clicked = deselect
							jQuery(this).removeClass('expanded');
							jQuery(target).slideUp( "fast", function() {
								jQuery(target).removeClass('visible-xs-block').css('display','');
							});
						} else  {
							// If the one just clicked is NOT the one expanded, find the expanded one and deselect it. 
							jQuery(navbarSiblingsSelector + '.expanded' ).removeClass('expanded');
							jQuery(subNavSelector + '.visible-xs-block' ).slideUp( 200, function() {
								jQuery(subNavSelector + '.visible-xs-block' ).removeClass('visible-xs-block');
							});
							// Select the one just clicked. 
							jQuery(this).addClass('expanded');
							jQuery(target).slideDown( 200, function() {
								jQuery(target).addClass('visible-xs-block').css('display','');
							});
						}
					}
				}
			});
		},
		initNavbarArrowColor: function(subNavSelector) {
			// If the furst item is hovered, make the arrow be the same color as the hovered item that will be right next to it
			var target = '.link-sub:first';

			jQuery(target,subNavSelector)
				.on( "mouseenter", function() {
					jQuery(this).parents(subNavSelector).addClass('alt-arrow-emphasize');
				})
				.on( "mouseleave", function() {
					jQuery(this).parents(subNavSelector).removeClass('alt-arrow-emphasize');
			});
		}
		
	}
}( window.vbyc = window.vbyc || {}, jQuery ));



