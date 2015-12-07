(function( vbyc, $, undefined ) { 

	var subNavSelector 			= '.navbar-list-sub',
	    navbarSiblingsSelector  = '.navbar-list .link',
	    sideNav 				= $('#sidenav'),
	    headerRow 		 		= $('.header-main'),
	    hasSidenav 				,
	    containerClassName		= '.template-home .hero-animation',
	    container 				= $(containerClassName),
	    allButFirstImage        = $('img:not(:first-child)',container),
	    allButFirstAndLastImage = $('img:not(:first-child):not(:last-child)',container),
	    speedFade 				= 800,
	    speedInterval 			= 0;

	vbyc.util = {
		init: function(customValues) {
			// If there are custom values passed in, do stuff with them
			if (customValues) {
				vbyc.util.initCustomValues(customValues);
			}
			
			// Set up main nav
			vbyc.util.initNavbar(subNavSelector,navbarSiblingsSelector);
			vbyc.util.initNavbarToggle(subNavSelector,navbarSiblingsSelector);
			vbyc.util.initNavbarSticky();

			// Set up side nav with anchor links
			if (hasSidenav) {
				vbyc.util.sidebarScrollSpy();
				vbyc.util.sidebarScrollTo();
			}

			// Set up lightbox
			vbyc.util.initLightbox(subNavSelector,navbarSiblingsSelector);

			// Set Home hero animation
			vbyc.util.homeHeroAnimation();


			vbyc.util.resetImages();
	        vbyc.util.nextImage(); 


	        vbyc.util.newsFeed();  
		},
		initCustomValues: function(customValues) {
			// Make this variable global inside this function
			if (customValues.hasSidenav) {
				hasSidenav = customValues.hasSidenav ;
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
		initNavbarSticky: function() {
			$(headerRow).affix({
			  offset: {
			    top: 0
			  }
			});
		},
		initLightbox: function() {
			// Lightbox for Bootstrap 3 - http://ashleydw.github.io/lightbox/
			// $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
			//     event.preventDefault();
			//     // $(this).ekkoLightbox();
			// }); 

 			$('.gallery').click(function (e) {
                e.preventDefault();
                $(this).ekkoLightbox();
            });

			// console.log('Hello');

			// delegate calls to data-toggle="lightbox"
                // $(document).delegate('*[data-toggle="lightbox"]:not([data-gallery="navigateTo"])', 'click', function(event) {
                //     event.preventDefault();
                //     return $(this).ekkoLightbox({
                //         onShown: function() {
                //             if (window.console) {
                //                 return console.log('Checking our the events huh?');
                //             }
                //         },
                //         onNavigate: function(direction, itemIndex) {
                //             if (window.console) {
                //                 return console.log('Navigating '+direction+'. Current item: '+itemIndex);
                //             }
                //         }
                //     });
                // });

                // //Programatically call
                // $('#open-image').click(function (e) {
                //     e.preventDefault();
                //     $(this).ekkoLightbox();
                // });
                // $('#open-youtube').click(function (e) {
                //     e.preventDefault();
                //     $(this).ekkoLightbox();
                // });

                // // navigateTo
                // $(document).delegate('*[data-gallery="navigateTo"]', 'click', function(event) {
                //     event.preventDefault();

                //     var lb;
                //     return $(this).ekkoLightbox({
                //         onShown: function() {

                //             lb = this;

                //             $(lb.modal_content).on('click', '.modal-footer a', function(e) {

                //                 e.preventDefault();
                //                 lb.navigateTo(2);

                //             });

                //         }
                //     });
                // });
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
	        var target = $('.news-feed-list');
            function showNextItem(){
                $('li:first',target).slideUp( function () { 
                    $(this).appendTo($(target)).slideDown(); 
                });
            }
            setInterval(function(){ showNextItem () }, 3000);
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



