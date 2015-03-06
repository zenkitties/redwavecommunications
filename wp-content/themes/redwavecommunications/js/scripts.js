(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away
		
	});
	
})(jQuery, this);


jQuery(document).ready(function(){

	jQuery('.products').hover(function () {
		jQuery(this).find('.infocontainer').toggle();
	});

	jQuery('.products').click(function () {
		jQuery(this).find('.infocontainer').toggle();
	});
});


//jQuery(document).ready(function(){
//	$('.image').hover(function (){
//		$(this).parent().next().toggleClass('.display');
//	})
//});