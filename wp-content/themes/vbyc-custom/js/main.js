(function( vbyc, $, undefined ) { 
	

	var subNavSelector = '.navbar-list-sub';
	var navbarSiblingsSelector  = '.navbar-list .link';
	var sideNav = $('#sidenav');
	

	

	vbyc.util = {
		init: function(customValues) {
			
			vbyc.util.initializeCustomValues(customValues);

			vbyc.util.initNavbar(subNavSelector,navbarSiblingsSelector);
			vbyc.util.initNavbarToggle(subNavSelector,navbarSiblingsSelector)

			console.table( customValues  );
			if (customValues.hasSideNav === true) {
				vbyc.util.sidebarScrollSpy();
				vbyc.util.sidebarScrollTo();
			}
			
			
		},
		initializeCustomValues: function(customValues) {
			
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
							// If the one just clicked is NOT the one expanded, find the expanded one and deselect it. 
							$(navbarSiblingsSelector + '.expanded' ).removeClass('expanded');
							$(subNavSelector + '.visible-xs-block' ).slideUp( 200, function() {
								$(subNavSelector + '.visible-xs-block' ).removeClass('visible-xs-block');
							});
							// Select the one just clicked. 
							$(this).addClass('expanded');
							$(target).slideDown( 200, function() {
								$(target).addClass('visible-xs-block').css('display','');
							});
						}
					}
				}
			});
		},

		sidebarScrollSpy: function() {
			var mainContent = $('.main-content');
			var distanceFromTop = sideNav.offset();
			distanceFromTop = distanceFromTop.top;

			// Initiate Scroll Spy
			$(sideNav).affix({
				offset: {
					top: distanceFromTop,
					bottom: function () {
						return (this.bottom = $('.footer').outerHeight(true))
					}
				}
			});
		},

		sidebarScrollTo: function() {
			var mainContent = $('.main-content');
			var parent = sideNav;
			
			// Add this selector so the anchors will be a nice distance from the top
			$(mainContent).addClass('has-sidenav');

			// Set up scroll
	        $('a[href^="#"]',parent).on('click',function (e) {
	            e.preventDefault();

	            var target = this.hash;
	            var $target = $(target);
	            var scrollToCoordinate = $target.offset().top;


	            $('html, body').stop().animate({
	                'scrollTop': scrollToCoordinate
	            }, 500, 'swing', function () {
	                window.location.hash = target;
	            });
	        });
		}
	}
}( window.vbyc = window.vbyc || {}, jQuery ));



