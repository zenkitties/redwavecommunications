(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away
		
	});
	
})(jQuery, this);


jQuery(document).ready(function(){

	$('.products').hover(function () {
		$(this).find('.infocontainer').toggle();
	});

	$('.products').onClick(function () {
		$(this).find('.infocontainer').toggle();
	});
});


//jQuery(document).ready(function(){
//	$('.image').hover(function (){
//		$(this).parent().next().toggleClass('.display');
//	})
//});