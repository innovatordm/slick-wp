/*

Enables autoload of slick sliders by adding data-slick as attribute. All data-* attributes get passed to slick constructor.

*/

(function($){
	
	$(function(){	
		

			$('[data-slick]').each(function(){
				
				var opts = $(this).data();
				delete opts['slick']; //unset our handle
				
				$(this).slick(opts);
			});
		
		
	});
	
})(jQuery)