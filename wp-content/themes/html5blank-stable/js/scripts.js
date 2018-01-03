(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away

		menu();
		
	});
	
})(jQuery, this);




function menu(){
	// mobile menu clicks
	$('#burger').on('click', function(){ 
		$('#burger').parents('#menu').toggleClass('open');
	});
}