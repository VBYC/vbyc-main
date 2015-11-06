(function( vbyc, $, undefined ) { 


	vbyc.util = {
		init: function(customValues) {
			
			vbyc.util.initNav();
		},
		initNav: function(customValues) {
			$( ".navbar-list .link" ).on( "click", function() {
				var subNavSelector = '.navbar-list-sub';
				var siblingsSelector  = '.navbar-list .link';
				var parent = $(this).parents('.item');
				var target = $(subNavSelector,parent);


				if ( $(siblingsSelector + '.selected' ).length == 0) {

					// If none are already selected, select the one just clicked
					$(this).addClass('selected');
					$(target).slideDown( "fast", function() {
						$(target).addClass('visible-xs-block').css('display','');
						// Remove 'display' attribute so this isn't visible if the screen gets wider
					});

				} else {

					if ( $(this).hasClass('selected')/* clicked = is */  ) {
						// If the one just clicked is selected, deselect it
						// clicked = deselect

						$(this).removeClass('selected');
						$(target).slideUp( "fast", function() {
							$(target).removeClass('visible-xs-block').css('display','');
						});

						console.log('clicked is selected');
					} else  {
						console.log('clicked is NOT selected');

						// If the one just clicked is NOT the one selected, deselect the selected one. 
						$(siblingsSelector + '.selected' ).removeClass('selected');
						$(subNavSelector + '.visible-xs-block' ).slideUp( 200, function() {
							$(subNavSelector + '.visible-xs-block' ).removeClass('visible-xs-block');
						});

						// And select the one just clicked. 
						$(this).addClass('selected');
						$(target).slideDown( 200, function() {
							$(target).addClass('visible-xs-block').css('display','');
						});
					}
				}
			});
		}
	}
}( window.vbyc = window.vbyc || {}, jQuery ));


vbyc.util.init();




// None are selected
	// Just select this one


// The one I clicked is selected 
	// Just deselect this one

// Another one is selected
	// Deselect that one, select this one



// If all != is, clicked = selected

// else (one = is)
	// If clicked = is, clicked = deselect
	// else If clicked != is, clicked = selected and is = deselectd


// if ( /* all != is */ ) {
// 	// If none are already selected, select teh one just clicked
// 	// clicked = selected
// } else {
// 	if ( /* clicked = is */  ) {
// 		// If the one just clicked is selected, deselect it
// 		// clicked = deselect
// 	} else if ( /* clicked != is */  ) {
// 		// If the one just clicked is NOT the one selected, deselect the selected one. 
// 		// And selecte the one just clicked. 
// 		// is = deselectd
// 		// clicked = selected

// 	}
// }





