(function( vbyc, $, undefined ) { 


	vbyc.util = {
		init: function(customValues) {
			
			vbyc.util.initNav();
		},
		initNav: function(customValues) {
			$( ".navbar-list .link" ).on( "click", function() {
				
				var parent = $(this).parents('.item');
				var target = $('.navbar-list-sub',parent);
				// var target = $(this).data('target');
				$(target).toggleClass('visible-xs-block').toggleClass('visible-sm-block');
				
			});
		
		}
	}
}( window.vbyc = window.vbyc || {}, jQuery ));


vbyc.util.init();
