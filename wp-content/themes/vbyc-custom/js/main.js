(function( vbyc, $, undefined ) { 
	vbyc.util = {
		init: function() {
			var subNavSelector = '.navbar-list-sub';
			var navbarSiblingsSelector  = '.navbar-list .link';
			vbyc.util.initNavbar(subNavSelector,navbarSiblingsSelector);
			vbyc.util.initNavbarToggle(subNavSelector,navbarSiblingsSelector)
			vbyc.util.initSidenav();
			
		},
		initNavbarToggle: function(subNavSelector,navbarSiblingsSelector) {
			$( ".navbar-toggle" ).on( "click", function() {
				$(navbarSiblingsSelector + '.expanded' ).removeClass('expanded');
				$(subNavSelector + '.visible-xs-block' ).removeClass('visible-xs-block');
			});
		},
		initNavbar: function(subNavSelector,navbarSiblingsSelector) {
			$( ".navbar-list .link" ).on( "click", function() {
				var navbarToggle = $('.navbar-toggle');
				var parent = $(this).parents('.item');
				var target = $(subNavSelector,parent);
				
				// See if nav is vertical, in SM view
				if ($(navbarToggle).is(':visible')) {
					if ( $(navbarSiblingsSelector + '.expanded' ).length == 0) {
						// If none are already expanded, select the one just clicked
						$(this).addClass('expanded');
						$(target).slideDown( "fast", function() {
							$(target).addClass('visible-xs-block').css('display','');
							// Remove 'display' attribute so this isn't visible if the screen gets wider
						});
					} else {
						if ( $(this).hasClass('expanded')/* clicked = is */  ) {
							// If the one just clicked is expanded, deselect it
							// clicked = deselect
							$(this).removeClass('expanded');
							$(target).slideUp( "fast", function() {
								$(target).removeClass('visible-xs-block').css('display','');
							});
						} else  {
							// If the one just clicked is NOT the one expanded, deselect the expanded one. 
							$(navbarSiblingsSelector + '.expanded' ).removeClass('expanded');
							$(subNavSelector + '.visible-xs-block' ).slideUp( 200, function() {
								$(subNavSelector + '.visible-xs-block' ).removeClass('visible-xs-block');
							});
							// And select the one just clicked. 
							$(this).addClass('expanded');
							$(target).slideDown( 200, function() {
								$(target).addClass('visible-xs-block').css('display','');
							});
						}
					}
				}
			});
		}
		// initSidenav: function(subNavSelector,navbarSiblingsSelector) {
		// 	$('#sidenav').affix({
		// 		offset: {
		// 			top: 100,
		// 			bottom: function () {
		// 				return (this.bottom = $('.footer').outerHeight(true))
		// 			}
		// 		}
		// 	})
		// }
	}
}( window.vbyc = window.vbyc || {}, jQuery ));

vbyc.util.init();

