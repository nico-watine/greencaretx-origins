/**
 * JQuery Plugin for a modal box
 * Will create a simple modal box with all HTML and styling
 * 
 * Author: Paul Underwood
 * URL: http://www.paulund.co.uk
 * 
 * Available for free download from http://www.paulund.co.uk
 */

(function($){

	// Defining our jQuery plugin

	$.fn.paulund_image_gallery = function(prop){

		// Default parameters

		var options = $.extend({
			
		},prop);
				
		//Click event on element
		return this.click(function(e){
			$('.main_image img').attr('src',$(this).children('a').attr('href'));
			
		});
		

		return this;
	};
	
})(jQuery);
