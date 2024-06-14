jQuery(function( $ ) {
	jQuery(".tg_horizontal_gallery_wrapper").each(function() {
		var $carousel = jQuery(this);
		var timer = false;
		var loop = false;
		var navigation = true;
		var pagination = false;
		
		$carousel.flickity({
			percentPosition: false,
			imagesLoaded: true,
			selectedAttraction: 0.01,
			friction: 0.2,
			lazyLoad: 5,
			pauseAutoPlayOnHover: true,
			autoPlay: timer,
			contain: true,
			prevNextButtons: navigation,
			pageDots: pagination
		});
	});
});