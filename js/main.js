(function( vbyc, $, undefined ) { 

	var $body   				= $(document.body),
		subNavSelector 			= '.navbar-list-sub',
	    navbarSiblingsSelector  = '.navbar-list .link',
	    sideNav 				= $('#sidenav'),
	    headerRow 		 		= $('.header-main'),
	    hasSidenav 				,
	    containerClassName		= '.template-home .hero-animation',
	    container 				= $(containerClassName),
	    mainContent 			= $('.main-content'),
	    allButFirstImage        = $('img:not(:first-child)',container),
	    allButFirstAndLastImage = $('img:not(:first-child):not(:last-child)',container);
	    // speedFade 				= 800,
	    // speedInterval 			= 0;

	vbyc.util = {
		init: function(customValues) {
			// If there are custom values passed in, do stuff with them
			if (customValues) {
				vbyc.util.initCustomValues(customValues);
			}
			
			// Set up main nav
			vbyc.util.initNavbar(subNavSelector,navbarSiblingsSelector);
			vbyc.util.initNavbarToggle(subNavSelector,navbarSiblingsSelector);
			vbyc.util.initNavbarArrowColor(subNavSelector);
			vbyc.util.initNavbarSticky();

			// Set up side nav with anchor links
			if (hasSidenav) {
				vbyc.util.sidebarScrollSpy();
				vbyc.util.sidebarScrollSpyScrollTo();
			}

			// Set up lightbox (grid)
			vbyc.util.initLightbox(subNavSelector,navbarSiblingsSelector);

			// Set up main nav as sticking to the top
			vbyc.util.initNavbarSticky();

			// Set Home hero animation
			// vbyc.util.homeHeroAnimation();

			// vbyc.util.resetImages();
	  //       vbyc.util.nextImage(); 

	        vbyc.util.newsFeed();  

	        // Set up generic scroll-to link
	        vbyc.util.scrollToLink();

	        // Load these images after the rest of the page loads
	        vbyc.util.deferImageLoad();

	        console.log('Hello');

	        vbyc.util.lowResPlaceholderBgImg(highResPath);
		},
		initCustomValues: function(customValues) {
			// Make this variable global inside this function
			if (customValues.hasSidenav) {
				hasSidenav = customValues.hasSidenav ;
			}
			if (customValues.highResPath) {
				highResPath = customValues.highResPath ;
			}


			
		},
		lowResPlaceholderBgImg: function(highResPath) {
			if (highResPath) {
				// Intrurrupt high res bgimage from loading and load temperary low res image
				// $('.template-home .header-main').addClass('low-res-placeholder');

				// Once hi res image is loaded, replace low res with high res
				var image = new Image();
				image.onload = function () {
				   $('.low-res-placeholder').removeClass('low-res-placeholder');
				}
				image.onerror = function () {
				   $('.low-res-placeholder').removeClass('low-res-placeholder');
				}
				image.src = highResPath;
			}
		},
		initNavbarToggle: function(subNavSelector,navbarSiblingsSelector) {
			// Click the hamburger and expand the main nav
			$( ".navbar-toggle" ).on( "click", function() {
				$(navbarSiblingsSelector + '.expanded' ).removeClass('expanded');
				$(subNavSelector + '.visible-xs-block' ).removeClass('visible-xs-block');
			});
		},
		initNavbar: function(subNavSelector,navbarSiblingsSelector) {
			// Main nav
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

		initNavbarArrowColor: function(subNavSelector) {
			// If the furst item is hovered, make the arrow be the same color as the hovered item that will be right next to it
			var target = '.link-sub:first';

			$(target,subNavSelector)
				.on( "mouseenter", function() {
					$(this).parents(subNavSelector).addClass('alt-arrow-emphasize');
				})
				.on( "mouseleave", function() {
					$(this).parents(subNavSelector).removeClass('alt-arrow-emphasize');
			});
		},
		initNavbarSticky: function() {
			$(headerRow).affix({
			  offset: {
			    // top: 120
			  }
			});
		},
		initLightbox: function() {
			// Lightbox for Bootstrap 3 - http://ashleydw.github.io/lightbox/
 			$('.gallery').click(function (e) {
                e.preventDefault();
                $(this).ekkoLightbox();
            });
		},

		homeHeroAnimation: function() {
			var target = $('.template-home .animation-outer');
		},

		resetImages: function() {
	        allButFirstImage.hide();
	    },
	    nextImage: function() {
	        if ($('img:last-child',container).is(':hidden')) {
	          	vbyc.util.fadeInNextImage();
	        } else {
	          	allButFirstAndLastImage.hide();
	          	vbyc.util.fadeOutLastImage();
	        }
	        $( "img",container).promise().done(function() {
	        	setTimeout(vbyc.util.nextImage, speedInterval);
	        });
	    },
	    fadeInNextImage: function() {
	        $( "img:hidden:first",container).fadeIn(speedFade);
	    },
	    fadeOutLastImage: function() {
	        $( "img:last",container).fadeOut(speedFade);
	    },
	    newsFeed: function() {
	        var parent = $('.news-feed');
	        var target = $('.news-feed-list');
	        var timer;

			function startTimer() {
			    timer = setInterval(function () {
			        $('li:first',target).slideUp( function () { 
	                    $(this).appendTo($(target)).slideDown(); 
	                });
			    }, 4000);
			}

			// Start or stop animation if hover over link
			$(parent).hover(function (event) {
			    clearInterval(timer);
			}, function (event) {
			    startTimer();
			});

			startTimer();
	    },
		sidebarScrollSpy: function() {
			var sidenavContainer 			= '#sidenav-container';
			var sidenavDistanceOffset 		= $(sidenavContainer).offset();
			var sidenavDistanceOffsetTop 	= sidenavDistanceOffset.top;
			var sidenavPaddingTop 			= 40;
			var headerRowHeight 			= headerRow.outerHeight(true);
			var triggerActivateLinks 		= headerRowHeight + sidenavPaddingTop;
			var triggerSticky 				= sidenavDistanceOffsetTop - triggerActivateLinks;
			
			// What ID is the the side nav? 
			$(sideNav).affix({
				offset: {
					// How far you scroll down before the nav becomes sticky
					top: triggerSticky,

					// Don't let the nav scroll over top of the footer
					bottom: function () {
				      return (this.bottom = $('.footer').outerHeight(true))
				    }
				}
			});

			// Assign this scroll spoy to the body 
			$body.scrollspy({

				// What ID is the immediate parent of the side nav? 
				target: sidenavContainer,

				// How far from the top that triggers the left nav items become active
				offset: triggerActivateLinks,
			});

		},
		sidebarScrollSpyScrollTo: function() {
			
			var parent = sideNav;
			var sidenavContainer 			= '#sidenav-container';
			var sidenavPaddingTop 			= 0;
			var headerRowHeight 			= headerRow.outerHeight(true);
			var headerRowHeightOffset       = headerRowHeight - sidenavPaddingTop;


			// Set up scroll
	        $('a[href^="#"]',parent).on('click',function (e) {
	            e.preventDefault();
				var sidenavDistanceOffset 		= $(sidenavContainer).offset();
				var sidenavDistanceOffsetTop 	= sidenavDistanceOffset.top;
				
				
	            var target = this.hash;
	            var $target = $(target);
	            var scrollToCoordinate = ($target.offset().top - headerRowHeightOffset)

	            $('html, body').stop().animate({
	                'scrollTop': scrollToCoordinate
	            }, 500, 'swing', function () {
	                window.location.hash = target;
	            });
	        });
		},
		scrollToLink: function() {

			// Set up scroll
	        $('a[href^="#"].scroll-to').on('click',function (e) {
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
		},
		deferImageLoad: function() {
			console.log('Hello');
			var imgDefer = document.getElementsByTagName('img');
			for (var i=0; i<imgDefer.length; i++) {
				if(imgDefer[i].getAttribute('data-src')) {
					imgDefer[i].setAttribute('src',imgDefer[i].getAttribute('data-src'));
				} 
			} 
		}
	}
}( window.vbyc = window.vbyc || {}, jQuery ));



