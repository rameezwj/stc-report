jQuery(window).on('load', function(){

	// if users are on innerpage, hide vertical wipes on page load
	  if(jQuery('body').hasClass('page_inner')){
	  	TweenMax.to('.lds-ring', .3, {scale: .8, opacity: 0});
	    TweenMax.staggerFromTo('.vertical_wipes_wrapper > div', .7, {scaleY: 1, transformOrigin: 'center top'}, {scaleY: 0, transformOrigin: 'center top', ease: Power4.easeInOut}, .1);
	    TweenMax.to('.vertical_wipes_wrapper', 0, {display: 'none', delay: 3});
	  }
	// if users are on innerpage, hide vertical wipes on page load
	

	if(!(jQuery('body').hasClass('landing_screen'))){
	  var selected_cat = localStorage.getItem("stc_selected_category");
	  var last_played_video = localStorage.getItem("stc_last_played_video");

  	// console.log(last_played_video+'---'+selected_cat)
	  if(false){
	  // if((last_played_video!=selected_cat) || (last_played_video==null && selected_cat==null)){
	    localStorage.setItem("stc_last_played_video", selected_cat);
			
	    var video = document.getElementById('category_video');
	    
	    video.play();
	    
	    video.onended = function() {
	    	TweenMax.to('.video_wrapper', 1.5, {left: '100%', transformOrigin: 'left center', scale: 1.3, ease: Power4.easeInOut});
	    };
	  }
	  else{
	  	jQuery('.video_wrapper').fadeOut(0);
	    // alert('dont play the video');
	  }
	}


	// highlight current pages submenu + goto next page functionality
		// get curent page url
		var page_url = window.location.href.split('.php');
		page_url = page_url[0].split('/');

		// highlight current page menu item
		jQuery('.sub_menu_wrapper .submenu_content a').removeClass('active');
		jQuery(`a[data-page-link=${page_url[page_url.length-1]}]`).addClass('active');

		// get next page url if it exists
		var next_page = jQuery(`a[data-page-link=${page_url[page_url.length-1]}]`).next().attr('data-page-link');

		// get previous page url if it exists
		var previous_page = jQuery(`a[data-page-link=${page_url[page_url.length-1]}]`).prev().attr('data-page-link');

		setTimeout(function(){
		// mousewheel
			var page_switching_triggered = false;

		  document.addEventListener('wheel', function(e) {
				if($(window).scrollTop() + $(window).height() == $(document).height()) {

					if(next_page!='' && next_page!=undefined && !(page_switching_triggered)){
						page_switching_triggered = true;
						jQuery(`a[data-page-link=${next_page}]`).trigger('click');
					}
				}
				// e.preventDefault();
		  }, { passive: false })
		// mousewheel
	}, 3000)

});

if(jQuery('body').hasClass('landing_screen')){
}
