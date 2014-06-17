/*

Enables autoload of slick sliders by adding data-slick as attribute. All data-* attributes get passed to slick constructor.

*/

(function($){
	
	$(function(){	
		
		$('[data-slick]').foreach(function(){
			$(this).slick($(this).data());
		});
		
		
	});
	
})(jQuery)