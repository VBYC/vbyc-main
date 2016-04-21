(function( vbyc, $, undefined ) { 

	var $body   				= $(document.body),
		subNavSelector 			= '.sub-menu',
	    navbarSiblingsSelector  = '#menu-main-navigation > .menu-item',
	    sideNav 				= $('#sidenav'),
	    headerRow 		 		= $('.header-main'),
	    hasSidenav 				,
	    highResPath				,
	    containerClassName		= '.page-template-home .hero-animation',
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
			vbyc.util.navbar(subNavSelector,navbarSiblingsSelector);
			vbyc.util.navbarToggle(subNavSelector,navbarSiblingsSelector);
			vbyc.util.navbarArrowColor(subNavSelector);
			vbyc.util.navbarSticky();

			// Set up side nav with anchor links
			if (hasSidenav) {
				vbyc.util.sidebarScrollSpy();
				// vbyc.util.sidebarScrollSpyScrollTo();
			}

			// Set up hash scrolling
			vbyc.util.scrollToHashOnClick();
	        vbyc.util.scrollToHashOnPageLoad();
	        vbyc.util.scrollToLink();

			// Set up lightbox (grid)
			vbyc.util.initLightbox(subNavSelector,navbarSiblingsSelector);

			// News feed
	        vbyc.util.newsFeed();  

	        // Load these images after the rest of the page loads
	        vbyc.util.deferImageLoad();
	        if (highResPath) {
				vbyc.util.lowResPlaceholderBgImg(highResPath);
			}

			vbyc.util.WpOverrides();

			// Set Home hero animation
			// vbyc.util.homeHeroAnimation();
			// vbyc.util.homeHeroAnimationhomeHeroAnimationResetImages();
	  		// vbyc.util.homeHeroAnimationNextImage(); 
	        
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
		WpOverrides: function(customValues) {
			$( ".menu-item-has-children > a" ).on( "click", function(event) {
				event.preventDefault();
			});
		},
		lowResPlaceholderBgImg: function(highResPath) {

			// Once hi res image is loaded, replace low res with high res
			// This download is started earlier in the CSS
			var image = new Image();
			image.onload = function () {
			   $('.low-res-placeholder').removeClass('low-res-placeholder');
			}
			image.onerror = function () {
			   $('.low-res-placeholder').removeClass('low-res-placeholder');
			}
			image.src = highResPath;
		},
		navbarToggle: function(subNavSelector,navbarSiblingsSelector) {
			// Click the hamburger and expand the main nav
			$( ".navbar-toggle" ).on( "click", function() {
				$(navbarSiblingsSelector + '.expanded' ).removeClass('expanded');
				$(subNavSelector + '.visible-xs-block' ).removeClass('visible-xs-block');
			});
		},
		navbar: function(subNavSelector,navbarSiblingsSelector) {
			// Main nav
			$( "#menu-main-navigation > .menu-item > a" ).on( "click", function() {
				var navbarToggle = $('.navbar-toggle');
				var parent = $(this).parents('.menu-item');
				var target = $(subNavSelector,parent);

				
				// See if nav is vertical, in SM view
				if ($(navbarToggle).is(':visible')) {

					if ( $(navbarSiblingsSelector + '.expanded' ).length == 0) {
						// If none are already expanded, select the one just clicked
						$(parent).addClass('expanded');
						// Open
						$(target).slideDown( "fast", function() {
							$(target).addClass('visible-xs-block').css('display','');
							// Remove 'display' attribute so this isn't visible if the screen gets wider
						});
					} else {
						if ( $(parent).hasClass('expanded')/* clicked = is */  ) {

							// If the one just clicked is expanded, deselect it
							// clicked = deselect
							$(parent).removeClass('expanded');
							// Close
							$(target).slideUp( "fast", function() {
								$(target).removeClass('visible-xs-block').css('display','');
							});
						} else  {
							// If the one just clicked is NOT the one expanded, find the expanded one and deselect it. 
							$(navbarSiblingsSelector + '.expanded' ).removeClass('expanded');
							// Close
							$(subNavSelector + '.visible-xs-block' ).slideUp( 200, function() {
								$(subNavSelector + '.visible-xs-block' ).removeClass('visible-xs-block');
							});
							// Select the one just clicked. 
							$(parent).addClass('expanded');
							// Open
							$(target).slideDown( 200, function() {
								$(target).addClass('visible-xs-block').css('display','');
							});
						}
					}
				}
			});
		},
		navbarArrowColor: function(subNavSelector) {
			// If the furst item is hovered, make the arrow be the same color as the hovered item that will be right next to it
			var target = '.navbar-list-sub > .menu-item > a:first';

			$(target,subNavSelector)
				.on( "mouseenter", function() {
					$(this).parents(subNavSelector).addClass('alt-arrow-emphasize');
				})
				.on( "mouseleave", function() {
					$(this).parents(subNavSelector).removeClass('alt-arrow-emphasize');
			});
		},
		navbarSticky: function() {
			$(headerRow).affix({
			  offset: {
			    // top: 120
			  }
			});
		},
		initLightbox: function() {
			// Lightbox for Bootstrap 3 - http://ashleydw.github.io/lightbox/
			// http://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/4.0.1/ekko-lightbox.min.just
 			$('.gallery').click(function (e) {
                e.preventDefault();
                $(this).ekkoLightbox();
            });
            // Note, as a temporary fix for adding a spinner while loading the image, in ekko-lightbox.min.js I replace 
            // loadingMessage:"Loading..." with 
            // loadingMessage:'<div class="loader-positioned loader"><span></span></div>'
		},
		homeHeroAnimation: function() {
			var target = $('.page-template-home .animation-outer');
		},
		homeHeroAnimationResetImages: function() {
	        allButFirstImage.hide();
	    },
	    homeHeroAnimationNextImage: function() {
	        if ($('img:last-child',container).is(':hidden')) {
	          	vbyc.util.homeHeroAnimationFadeInNextImage();
	        } else {
	          	allButFirstAndLastImage.hide();
	          	vbyc.util.homeHeroAnimationFadeOutLastImage();
	        }
	        $( "img",container).promise().done(function() {
	        	setTimeout(vbyc.util.homeHeroAnimationNextImage, speedInterval);
	        });
	    },
	    homeHeroAnimationFadeInNextImage: function() {
	        $( "img:hidden:first",container).fadeIn(speedFade);
	    },
	    homeHeroAnimationFadeOutLastImage: function() {
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
			
			if ($('#sidenav-container').length > 0) {

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

				// Assign this scroll spy to the body 
				$body.scrollspy({

					// What ID is the immediate parent of the side nav? 
					target: sidenavContainer,

					// How far from the top that triggers the left nav items become active
					offset: triggerActivateLinks,
				});
			}
		},
		scrollToHash: function(target) {
			var sidenavContainer 			= '#sidenav-container';
			var sidenavPaddingTop 			= 0;
			var headerRowHeight 			= headerRow.outerHeight(true);
			var headerRowHeightOffset       = headerRowHeight - sidenavPaddingTop;
            var $target = $(target);
            var scrollToCoordinate = ($target.offset().top - headerRowHeightOffset);

            $('html, body').stop().animate({
                'scrollTop': scrollToCoordinate
            }, 500, 'swing', function () {

            	// Update URL to have new hash
            	if (history.pushState) {
            		// This prevents Firefox from re-scrolling to the hash
				    history.pushState(null, null, target);
				}
				else {
					// Old browsers
				    location.hash = target;
				}
            });
		},
		scrollToHashOnPageLoad: function() {
			$(window).load(function(){
				// Remove the # from the hash, as different browsers may or may not include it
				var target = location.hash.replace('#','');
				if(target != ''){
				   target = '#' + target;
				   vbyc.util.scrollToHash(target);
			    }
			});
		},
		scrollToHashOnClick: function() {
			// Set up scroll
	        $('a[href^="#"]').on('click',function (event) {
	        	event.preventDefault();
	        	var target = this.hash;
	        	vbyc.util.scrollToHash(target);
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
	                // Update URL to have new hash
	            	if (history.pushState) {
	            		// This prevents Firefox from re-scrolling to the hash
					    history.pushState(null, null, target);
					}
					else {
						// Old browsers
					    location.hash = target;
					}
	            });
	        });
	    },
		deferImageLoad: function() {
			var imgDefer = document.getElementsByTagName('img');
			for (var i=0; i<imgDefer.length; i++) {
				if(imgDefer[i].getAttribute('data-src')) {
					imgDefer[i].setAttribute('src',imgDefer[i].getAttribute('data-src'));
				} 
			} 
		}
	}
}( window.vbyc = window.vbyc || {}, jQuery ));



