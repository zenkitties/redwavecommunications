(function ($) {
	
	$(function () {
		
		'use strict';

		$('.image').hover(function () {
			$(this).find('.infocontainer').toggle();
		});

		$('.grid-system').click(function () {
			$(this).find('.infocontainer').toggle();
		});

		$('.menuItem:not(".noSubmenu")').on('click', function () {
			var $menuItem = $(this), isActive = $menuItem.hasClass('active');

			//remove all active classes on this collapsibleMenu
			$menuItem.parents('.collapsibleMenu')
				.find('.menuItem.active').removeClass('active');

			//add the active class to the thing I just clicked on
			if (!isActive) $menuItem.addClass('active');
		});
		
	});
	
})(jQuery);