jQuery(document).ready(function() {
	jQuery('.demotip').tooltipster({
		position: 'left'
	});
	
	jQuery('#option_btn').on( 'click', function(){
			if(!jQuery('#option_wrapper').hasClass('open'))
			{	
	    		jQuery('#option_wrapper').addClass('open');
	 			jQuery(this).addClass('open');
	 		}
	 		else
	 		{
	 			var isOpenOption = jQuery.cookie("hoteller_demo");
				if(jQuery.type(isOpenOption) === "undefined")
	    		{
	    			jQuery.cookie("hoteller_demo", 1, { expires : 7, path: '/' });
	    		}
	 			jQuery('#option_wrapper').removeClass('open');
				jQuery('#option_btn').removeClass('open');
	 		}
		}
	);
});