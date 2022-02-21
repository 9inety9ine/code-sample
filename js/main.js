// JavaScript Document

(function($) {

    $(window).resize(function(){
		
	});

    $(document).ready(function(){
		
		var header_height = $('header.main').height();
		
		$('.nav-desktop li a').bind('click', function() {
			var $anchor = $(this);
			$('html, body').stop().animate({
				scrollTop: ($($anchor.attr('href')).offset().top - header_height)
			}, 1250, 'easeInOutExpo');
			return false;
		});
		
		$('.jarallax').jarallax();
		
		$('.toggle img').click(function(){
			$('.nav-mobile').slideToggle();
			return false;
		});
		
		$('.nav-mobile a').click(function(){
			$('.nav-mobile').slideToggle();
			var $anchor = $(this);
			$('html, body').stop().animate({
				scrollTop: ($($anchor.attr('href')).offset().top - header_height)
			}, 1250, 'easeInOutExpo');
			return false;
		});
		
		Fancybox.bind("[data-fancybox]", {
			Thumbs: false,
			Toolbar: false
		});
		
	});
	
})(jQuery);